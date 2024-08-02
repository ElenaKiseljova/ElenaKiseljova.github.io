import gulp from 'gulp';
import rename from 'gulp-rename';
import del from 'del';
import debug from 'gulp-debug';
import imagemin from 'gulp-imagemin';
import imageminJpegRecompress from 'imagemin-jpeg-recompress';
import imageminPngquant from 'imagemin-pngquant';
import imageminWebp from 'imagemin-webp';

const srcFolder = 'files';
const srcFiles = `${srcFolder}/**/*.*`;

const destFolder = 'files-renamed';
const destImages = `${destFolder}/**/*.{jpg,jpeg,png}`;

const minifyDestFolder = `images-minified`;

const webpDestFolder = `images-webp`;

const translateLetters = [
  {
    cyr: 'а',
    lat: 'a',
  },
  {
    cyr: 'б',
    lat: 'b',
  },
  {
    cyr: 'в',
    lat: 'w',
  },
  {
    cyr: 'г',
    lat: 'g',
  },
  {
    cyr: 'ґ',
    lat: 'g',
  },
  {
    cyr: 'д',
    lat: 'd',
  },
  {
    cyr: 'е',
    lat: 'e',
  },
  {
    cyr: 'є',
    lat: 'e',
  },
  {
    cyr: 'ё',
    lat: 'jo',
  },
  {
    cyr: 'ж',
    lat: 'zh',
  },
  {
    cyr: 'з',
    lat: 'z',
  },
  {
    cyr: 'и',
    lat: 'i',
  },
  {
    cyr: 'і',
    lat: 'i',
  },
  {
    cyr: 'ї',
    lat: 'i',
  },
  {
    cyr: 'й',
    lat: 'y',
  },
  {
    cyr: 'к',
    lat: 'k',
  },
  {
    cyr: 'л',
    lat: 'l',
  },
  {
    cyr: 'м',
    lat: 'm',
  },
  {
    cyr: 'н',
    lat: 'n',
  },
  {
    cyr: 'о',
    lat: 'o',
  },
  {
    cyr: 'п',
    lat: 'p',
  },
  {
    cyr: 'р',
    lat: 'r',
  },
  {
    cyr: 'с',
    lat: 's',
  },
  {
    cyr: 'т',
    lat: 't',
  },
  {
    cyr: 'у',
    lat: 'u',
  },
  {
    cyr: 'ф',
    lat: 'f',
  },
  {
    cyr: 'х',
    lat: 'h',
  },
  {
    cyr: 'ц',
    lat: 'c',
  },
  {
    cyr: 'ч',
    lat: 'ch',
  },
  {
    cyr: 'ш',
    lat: 'sh',
  },
  {
    cyr: 'щ',
    lat: 'sh',
  },
  {
    cyr: 'ъ',
    lat: '',
  },
  {
    cyr: 'ы',
    lat: 'y',
  },
  {
    cyr: 'ь',
    lat: '',
  },
  {
    cyr: 'э',
    lat: 'e',
  },
  {
    cyr: 'ю',
    lat: 'yu',
  },
  {
    cyr: 'я',
    lat: 'ya',
  },
];

const englishAlphabet = [
  'a',
  'b',
  'c',
  'd',
  'e',
  'f',
  'g',
  'h',
  'i',
  'j',
  'k',
  'l',
  'm',
  'n',
  'o',
  'p',
  'r',
  's',
  't',
  'u',
  'v',
  'w',
  'x',
  'y',
  'z',
];

const cleanRenamed = () => del(destFolder);
const cleanMinified = () => del(minifyDestFolder);
const cleanWebp = () => del(webpDestFolder);

const minifyImages = (callback) => {
  gulp
    .src(destImages)
    .pipe(
      imagemin(
        [
          imageminJpegRecompress({ quality: 75, progressive: true }),
          imageminPngquant({ quality: [0.8, 0.9] }),
        ],
        {
          verbose: true,
        }
      )
    )
    .pipe(debug({ title: 'images:' }))
    .pipe(gulp.dest(minifyDestFolder));

  callback();
};

const convertImagesToWebp = () =>
  gulp
    .src(destImages)
    .pipe(imagemin([imageminWebp({ quality: 80 })]))
    .pipe(
      rename({
        extname: '.webp',
      })
    )
    .pipe(gulp.dest(webpDestFolder));

const renameFiles = (callback) => {
  gulp
    .src(srcFiles)
    .pipe(
      rename((path) => {
        const newName = path.basename
          .toLocaleLowerCase()
          .split('')
          .map((l) => {
            const cyrToLatLetter = translateLetters.find(
              (letter) => letter.cyr === l
            )?.lat;

            if (cyrToLatLetter) {
              return cyrToLatLetter;
            }

            const latLetter = englishAlphabet.find((letter) => letter === l);

            if (latLetter) {
              return latLetter;
            }

            const number = !isNaN(l) && l.trim() !== '' ? l : false;

            if (number) {
              return number;
            }

            return '_';
          })
          .join('');

        path.basename = newName;
      })
    )
    .pipe(gulp.dest(destFolder));

  callback();
};

export const renameFilesToWebFriendlyFormat = gulp.series(
  cleanRenamed,
  renameFiles
);

export const minify = gulp.series(cleanMinified, minifyImages);

export const webp = gulp.series(cleanWebp, convertImagesToWebp);
