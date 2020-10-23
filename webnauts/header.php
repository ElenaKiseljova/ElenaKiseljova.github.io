<?php

function pageName($title, $menuItem) {
  if ($title  === $menuItem) {
    echo " active";
  }
}

 ?>

<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <title><?= $title ?></title>

    <link rel="stylesheet" href="plugins/swiper.min.css">
    <link rel="stylesheet" href="plugins/fancybox.min.css">

    <link rel="stylesheet" href="css/style.min.css">
  </head>
  <body>
    <!-- svg спрайт с иконками -->

    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display: none;">
      <symbol id="icon-filter" viewBox="0 0 16 16">
        <path d="M15.5 0.333496V2.00016H14.6667L9.66667 9.50016V15.3335H6.33333V9.50016L1.33333 2.00016H0.5V0.333496H15.5Z" fill="#9D9D9D"/>
      </symbol>
      <symbol id="icon-arrow-link" viewBox="0 0 24 24">
        <path d="M16.0044 9.414L7.3974 18.021L5.9834 16.607L14.5894 8H7.0044V6H18.0044V17H16.0044V9.414Z"/>
      </symbol>
      <symbol id="icon-arrow-prev" viewBox="0 0 33 8">
        <path d="M0.646446 3.64645C0.451183 3.84171 0.451183 4.15829 0.646446 4.35355L3.82843 7.53553C4.02369 7.7308 4.34027 7.7308 4.53553 7.53553C4.7308 7.34027 4.7308 7.02369 4.53553 6.82843L1.70711 4L4.53553 1.17157C4.7308 0.976311 4.7308 0.659728 4.53553 0.464466C4.34027 0.269204 4.02369 0.269204 3.82843 0.464466L0.646446 3.64645ZM33 3.5L1 3.5V4.5L33 4.5V3.5Z" fill="#E8152E"/>
      </symbol>
      <symbol id="icon-arrow-next" viewBox="0 0 33 8">
        <path d="M32.3536 3.64645C32.5488 3.84171 32.5488 4.15829 32.3536 4.35355L29.1716 7.53553C28.9763 7.7308 28.6597 7.7308 28.4645 7.53553C28.2692 7.34027 28.2692 7.02369 28.4645 6.82843L31.2929 4L28.4645 1.17157C28.2692 0.976311 28.2692 0.659728 28.4645 0.464466C28.6597 0.269204 28.9763 0.269204 29.1716 0.464466L32.3536 3.64645ZM0 3.5L32 3.5V4.5L0 4.5L0 3.5Z" fill="#E8152E"/>
      </symbol>
      <symbol id="icon-mobile" viewBox="0 0 22 15">
        <rect width="22" height="1"/>
        <rect y="7" width="22" height="1"/>
        <rect y="14" width="22" height="1"/>
      </symbol>
      <symbol id="icon-close-popup" viewBox="0 0 32 32">
        <path d="M16 14.1147L22.6 7.51466L24.4853 9.4L17.8853 16L24.4853 22.6L22.6 24.4853L16 17.8853L9.39998 24.4853L7.51465 22.6L14.1146 16L7.51465 9.4L9.39998 7.51466L16 14.1147Z" fill="#212121"/>
      </symbol>
      <symbol id="icon-arrow-search" viewBox="0 0 24 24">
        <path d="M16.172 11L10.808 5.63605L12.222 4.22205L20 12L12.222 19.778L10.808 18.364L16.172 13H4V11H16.172Z"/>
      </symbol>
      <symbol id="icon-close" viewBox="0 0 24 24">
        <rect width="32.2895" height="1.7641" transform="matrix(-0.722206 -0.691678 -0.328705 0.944433 23.8994 22.3339)" fill="#212121"/>
        <rect width="32.2895" height="1.7641" transform="matrix(0.722206 -0.691678 0.328705 0.944433 0.101074 22.3339)" fill="#212121"/>
      </symbol>
      <symbol id="icon-cross" viewBox="0 0 15 15">
        <rect width="20.1809" height="1.10256" transform="matrix(-0.722206 -0.691678 -0.328705 0.944433 14.937 13.9587)" fill="white"/>
        <rect width="20.1809" height="1.10256" transform="matrix(0.722206 -0.691678 0.328705 0.944433 0.0629883 13.9587)" fill="white"/>
      </symbol>
      <symbol id="icon-play" viewBox="0 0 113 113">
        <circle cx="56.5" cy="56.5" r="40.5"/>
        <path d="M66 56.5L51.75 64.7272L51.75 48.2728L66 56.5Z" fill="white"/>
      </symbol>
      <symbol id="icon-zoom" viewBox="0 0 56 56">
        <circle cx="28" cy="28" r="28" fill="#E8152E"/>
        <path d="M34.031 32.617L38.314 36.899L36.899 38.314L32.617 34.031C31.0237 35.3082 29.042 36.0029 27 36C22.032 36 18 31.968 18 27C18 22.032 22.032 18 27 18C31.968 18 36 22.032 36 27C36.0029 29.042 35.3082 31.0237 34.031 32.617ZM26 26H23V28H26V31H28V28H31V26H28V23H26V26Z" fill="white"/>
      </symbol>
       <symbol id="icon-arrow-gray" viewBox="0 0 24 24">
          <path d="M12.9999 16.172L18.3639 10.808L19.7779 12.222L11.9999 20L4.22192 12.222L5.63592 10.808L10.9999 16.172V4H12.9999V16.172Z"/>
       </symbol>
       <symbol id="icon-arrow-left" viewBox="0 0 73 8">
          <path d="M0.646446 4.35355C0.451187 4.15829 0.451187 3.84171 0.646446 3.64645L3.82843 0.464466C4.02369 0.269204 4.34027 0.269204 4.53554 0.464466C4.7308 0.659728 4.7308 0.976311 4.53554 1.17157L1.70711 4L4.53554 6.82843C4.7308 7.02369 4.7308 7.34027 4.53554 7.53553C4.34027 7.7308 4.02369 7.7308 3.82843 7.53553L0.646446 4.35355ZM73 4.5H1V3.5H73V4.5Z"/>
       </symbol>
       <symbol id="icon-arrow-right" viewBox="0 0 73 8">
          <path d="M72.3536 4.35355C72.5488 4.15829 72.5488 3.84171 72.3536 3.64645L69.1716 0.464466C68.9763 0.269204 68.6597 0.269204 68.4645 0.464466C68.2692 0.659728 68.2692 0.976311 68.4645 1.17157L71.2929 4L68.4645 6.82843C68.2692 7.02369 68.2692 7.34027 68.4645 7.53553C68.6597 7.7308 68.9763 7.7308 69.1716 7.53553L72.3536 4.35355ZM0 4.5H72V3.5H0V4.5Z"/>
       </symbol>
       <symbol id="icon-arrow" viewBox="0 0 64 64">
          <path d="M44.3536 32.3536C44.5488 32.1583 44.5488 31.8417 44.3536 31.6464L41.1716 28.4645C40.9763 28.2692 40.6597 28.2692 40.4645 28.4645C40.2692 28.6597 40.2692 28.9763 40.4645 29.1716L43.2929 32L40.4645 34.8284C40.2692 35.0237 40.2692 35.3403 40.4645 35.5355C40.6597 35.7308 40.9763 35.7308 41.1716 35.5355L44.3536 32.3536ZM20 32.5H44V31.5H20V32.5Z"/>
       </symbol>
       <symbol id="icon-case" viewBox="0 0 10 10">
          <path d="M9.5 3V9.4965C9.50046 9.56216 9.48798 9.62727 9.46328 9.68811C9.43858 9.74895 9.40214 9.80433 9.35603 9.85108C9.30993 9.89784 9.25506 9.93505 9.19458 9.9606C9.13409 9.98616 9.06916 9.99954 9.0035 10H0.9965C0.864907 10 0.738696 9.94776 0.645598 9.85476C0.552501 9.76175 0.500133 9.63559 0.5 9.504V0.496C0.5 0.2275 0.7245 0 1.001 0H6.4985L9.5 3ZM8.5 3.5H6V1H1.5V9H8.5V3.5ZM3 2.5H4.5V3.5H3V2.5ZM3 4.5H7V5.5H3V4.5ZM3 6.5H7V7.5H3V6.5Z"/>
       </symbol>
       <symbol id="icon-chat" viewBox="0 0 62 62">
          <path opacity="0.95" d="M38.9784 27.3731C38.9784 23.3076 34.4971 20 28.9893 20C23.481 20 19 23.3076 19 27.3731C19 29.6807 20.4074 31.7973 22.8688 33.2041C22.4575 34.7867 21.8016 36.8236 20.9451 37.9124C20.8878 37.9854 20.8776 38.0875 20.9197 38.1715C20.9583 38.2487 21.0344 38.297 21.1166 38.297C21.1233 38.297 21.1303 38.2965 21.1371 38.2959C21.324 38.2781 25.7135 37.822 28.5229 34.7379C28.6775 34.7429 28.8328 34.746 28.9891 34.746C34.4971 34.746 38.9784 31.4387 38.9784 27.3731Z"   />
          <path opacity="0.95" d="M43.5138 29.3835C43.5138 26.6792 41.5308 24.3126 38.5828 23.0293C39.6856 24.3473 40.3283 25.9123 40.3283 27.5919C40.3283 32.2602 35.3811 36.0591 29.3005 36.0591C29.297 36.0591 29.293 36.0591 29.2896 36.0591C30.5763 36.5051 32.0114 36.7564 33.5248 36.7564C33.6811 36.7564 33.8364 36.7532 33.9909 36.748C36.8005 39.8329 41.19 40.2879 41.377 40.3061C41.3835 40.3068 41.3902 40.3071 41.3974 40.3071C41.4794 40.3071 41.5557 40.2593 41.5941 40.1821C41.6365 40.0979 41.6263    39.9957 41.5687 39.9233C40.7122 38.8345 40.0566 36.7981 39.645 35.2144C42.1061 33.8082 43.5138 31.691 43.5138 29.3835Z" />
       </symbol>
       <symbol id="icon-check" viewBox="0 0 6 6">
         <circle cx="3" cy="3" r="3" fill="#E8152E"/>
       </symbol>
       <symbol id="icon-team" viewBox="0 0 11 11">
          <path d="M0 11C0 9.93913 0.421427 8.92172 1.17157 8.17157C1.92172 7.42143 2.93913 7 4 7C5.06087 7 6.07828 7.42143 6.82843 8.17157C7.57857 8.92172 8 9.93913 8 11H7C7 10.2044 6.68393 9.44129 6.12132 8.87868C5.55871 8.31607 4.79565 8 4 8C3.20435 8 2.44129 8.31607 1.87868 8.87868C1.31607 9.44129 1 10.2044 1 11H0ZM4 6.5C2.3425 6.5 1 5.1575 1 3.5C1 1.8425 2.3425 0.5 4 0.5C5.6575 0.5 7 1.8425 7 3.5C7 5.1575 5.6575 6.5 4 6.5ZM4 5.5C5.105 5.5 6 4.605 6 3.5C6 2.395 5.105 1.5 4 1.5C2.895 1.5 2 2.395 2 3.5C2 4.605 2.895 5.5 4 5.5ZM8.142 7.3515C8.84467 7.66796 9.44099 8.18062 9.85929 8.82786C10.2776 9.47509 10.5001 10.2294 10.5 11H9.5C9.50011 10.422 9.33328 9.85625 9.01954 9.37079C8.70581 8.88534 8.25854 8.50083 7.7315 8.2635L8.1415 7.3515H8.142ZM7.798 1.7065C8.30176 1.91415 8.73248 2.26677 9.03551 2.71962C9.33853 3.17246 9.5002 3.70512 9.5 4.25C9.50021 4.93617 9.24385 5.59761 8.78127 6.10441C8.31869 6.61121 7.68333 6.92673 7 6.989V5.9825C7.37047 5.92944 7.71417 5.75901 7.98065 5.49623C8.24713 5.23345 8.42235 4.89216 8.48058 4.52247C8.53881 4.15277 8.47699 3.77415 8.30419 3.44218C8.13139 3.1102 7.85672 2.84237 7.5205 2.678L7.798 1.7065Z"/>
       </symbol>
       <symbol id="icon-facebook" viewBox="0 0 39 39">
          <path d="M24.6234 11.0037L22.2249 11C19.5302 11 17.7888 12.7387 17.7888 15.4298V17.4723H15.3771C15.1688 17.4723 15 17.6367 15 17.8395V20.7988C15 21.0016 15.1689 21.1658 15.3771 21.1658H17.7888V28.633C17.7888 28.8358 17.9575 29 18.1659 29H21.3124C21.5208 29 21.6896 28.8356 21.6896 28.633V21.1658H24.5093C24.7177 21.1658 24.8865 21.0016 24.8865 20.7988L24.8876 17.8395C24.8876 17.7421 24.8478 17.6489 24.7772 17.5799C24.7066 17.511 24.6103 17.4723 24.5103 17.4723H21.6896V15.7409C21.6896    14.9087 21.8933 14.4862 23.0073 14.4862L24.623 14.4857C24.8312 14.4857 25 14.3212 25 14.1186V11.3708C25 11.1683 24.8314 11.0041 24.6234 11.0037Z" />
       </symbol>
       <symbol id="icon-instagram" viewBox="0 0 39 39">
         <path d="M23.6689 12H16.331C13.9429 12 12 13.9429 12 16.331V23.669C12 26.0571 13.9429 28 16.331 28H23.669C26.0571 28 28 26.0571 28 23.669V16.331C28 13.9429 26.0571 12 23.6689 12V12ZM20 24.3749C17.5876 24.3749 15.6251 22.4123 15.6251 20C15.6251 17.5876 17.5876 15.6251 20 15.6251C22.4123 15.6251 24.3749 17.5876 24.3749 20C24.3749 22.4123 22.4123 24.3749 20 24.3749ZM24.4795 16.6569C23.7666 16.6569 23.1867 16.077 23.1867 15.3641C23.1867 14.6512 23.7666 14.0713 24.4795 14.0713C25.1924 14.0713   25.7723 14.6512 25.7723 15.3641C25.7723 16.077 25.1924 16.6569 24.4795 16.6569Z" />
         <path d="M19.9999 16.563C18.1049 16.563 16.563 18.1047 16.563 19.9999C16.563 21.8949 18.1049 23.4368 19.9999 23.4368C21.895 23.4368 23.4368 21.8949 23.4368 19.9999C23.4368 18.1047 21.895 16.563 19.9999 16.563Z" />
         <path d="M24.4792 15.0098C24.2837 15.0098 24.1245 15.1689 24.1245 15.3645C24.1245 15.5601 24.2837 15.7192 24.4792 15.7192C24.6749 15.7192 24.8341 15.5602 24.8341 15.3645C24.8341 15.1688 24.6749 15.0098 24.4792 15.0098Z" />
       </symbol>
       <symbol id="icon-list" viewBox="0 0 24 24">
          <path d="M8 4H21V6H8V4ZM3 3.5H6V6.5H3V3.5ZM3 10.5H6V13.5H3V10.5ZM3 17.5H6V20.5H3V17.5ZM8 11H21V13H8V11ZM8 18H21V20H8V18Z"/>
       </symbol>
       <symbol id="icon-mouse" viewBox="0 0 24 24">
          <path d="M11.141 4C9.559 4 8.754 4.169 8.013 4.565C7.39502 4.89015 6.89015 5.39502 6.565 6.013C6.169 6.753 6 7.559 6 9.14V14.858C6 16.44 6.169 17.245 6.565 17.986C6.902 18.616 7.383 19.097 8.013 19.434C8.753 19.83 9.559 19.999 11.141 19.999H12.859C14.441 19.999 15.246 19.83 15.987 19.434C16.605 19.1089 17.1098 18.604 17.435 17.986C17.831 17.246 18 16.44 18 14.858V9.14C18 7.558 17.831 6.753 17.435 6.012C17.1098 5.39402 16.605 4.88915 15.987 4.564C15.247 4.169 14.441 4 12.86 4H11.14H11.141ZM11.141 2H12.859C14.873 2 15.953 2.278 16.931 2.801C17.8973 3.31249 18.6875 4.10269 19.199 5.069C19.722 6.047 20 7.127 20 9.141V14.859C20 16.873 19.722 17.953 19.199 18.931C18.6875 19.8973 17.8973 20.6875 16.931 21.199C15.953 21.722 14.873 22 12.859 22H11.14C9.126 22 8.046 21.722 7.068 21.199C6.10169 20.6875 5.31149 19.8973 4.8 18.931C4.278 17.953 4 16.873 4 14.859V9.14C4 7.126 4.278 6.046 4.801 5.068C5.31292 4.10192 6.10347 3.31206 7.07 2.801C8.047 2.278 9.127 2 11.141 2ZM11 6H13V11H11V6Z"/>
       </symbol>
       <symbol id="icon-quote" viewBox="0 0 32 25">
          <path opacity="0.15" d="M6.42188 0.359375H13.2188L8.67188 24.2188H0L6.42188 0.359375ZM24.6094 0.359375H31.4062L26.8594 24.2188H18.1875L24.6094 0.359375Z"/>
       </symbol>
       <symbol id="icon-search" viewBox="0 0 20 20">
          <path d="M15.7832 14.3911L20 18.6069L18.6069 20L14.3911 15.7832C12.8224 17.0407 10.8713 17.7246 8.86088 17.7218C3.96968 17.7218 0 13.7521 0 8.86088C0 3.96968 3.96968 0 8.86088 0C13.7521 0 17.7218 3.96968 17.7218 8.86088C17.7246 10.8713 17.0407 12.8224 15.7832 14.3911ZM13.8082 13.6605C15.0577 12.3756 15.7555 10.6532 15.7527 8.86088C15.7527 5.05267 12.6681 1.96909 8.86088 1.96909C5.05267 1.96909 1.96909 5.05267 1.96909 8.86088C1.96909 12.6681 5.05267 15.7527 8.86088 15.7527C10.6532 15.7555 12.3756 15.0577 13.6605 13.8082L13.8082 13.6605Z"/>
       </symbol>
       <symbol id="icon-services" viewBox="0 0 25 15">
          <rect width="25" height="1"/>
          <rect y="7" width="25" height="1"/>
          <rect y="14" width="19" height="1"/>
       </symbol>
       <symbol id="icon-table" viewBox="0 0 24 24">
          <path d="M2 2H10V10H2V2Z"/>
          <path d="M2 14H10V22H2V14Z"/>
          <path d="M14 2H22V10H14V2Z"/>
          <path d="M14 14H22V22H14V14Z"/>
       </symbol>
       <symbol id="icon-comments" viewBox="0 0 10 10">
          <path d="M6.864 3.84304L6.157 3.13604L1.5 7.79304V8.50004H2.207L6.864 3.84304ZM7.571 3.13604L8.278 2.42904L7.571 1.72204L6.864 2.42904L7.571 3.13604ZM2.621 9.50004H0.5V7.37854L7.2175 0.661042C7.31126 0.567306 7.43842 0.514648 7.571 0.514648C7.70358 0.514648 7.83074 0.567306 7.9245 0.661042L9.339 2.07554C9.43274 2.16931 9.48539 2.29646 9.48539 2.42904C9.48539 2.56162 9.43274 2.68878 9.339 2.78254L2.6215 9.50004H2.621Z"/>
       </symbol>
       <symbol id="icon-telegram" viewBox="0 0 39 39">
         <path opacity="0.95" d="M26.902 14.4969C26.7503 14.1764 26.4328 14 26.0082 14C25.6991 14 25.4273 14.093 25.3955 14.1046C25.3052 14.1372 16.337 17.3838 12.6593 18.8139C12.3369 18.9387 12.128 19.1148 12.0383 19.3378C11.901 19.6825 12.1585 20.037 12.4035 20.1397C13.3171 20.5209 15.2183 21.0502 15.814 21.2127C16.0104 21.8313 16.6965 23.9889 17.0161 24.9128C17.1 25.1533 17.3453 25.297 17.6732 25.297C17.7216 25.297 17.7525 25.294 17.7525 25.294C17.8407 25.2847 17.9171 25.242 17.9726 25.1813C18.0194 25.1304 18.0519 25.0673 18.0571 24.9965L18.2472 22.3903C18.6069 22.6461 19.1303 23.0178 19.7086 23.4272C20.8528 24.2374 22.216 25.1982 22.9787 25.7207C23.2496 25.9062 23.5115 26 23.758 26C24.3104 26 24.6276 25.552 24.7317 25.1685C25.3635 22.8383 26.2904 18.4345 26.8446 15.8034L26.9658 15.2277C27.0425 14.8641 26.9765 14.6543 26.902 14.4969ZM17.6136 21.7563L17.4446 24.0708C17.0283 22.8132 16.4178 20.8827 16.4104 20.8596C16.4084 20.853 16.4021 20.8491 16.3995 20.8427L16.3978 20.8289L23.4096 16.5041C23.4096 16.5041 23.8875 16.1937 24.0691 16.1559C24.3141 16.1052 24.3729 16.1972 24.3289 16.2528C24.1593 16.4686 23.3552 17.1258 23.3552 17.1258L17.7658 21.5106L17.766 21.5135C17.6793 21.5679 17.621 21.656 17.6136 21.7563Z" />
       </symbol>
    </svg>

    <!-- header -->
    <header class="page-header">
      <div class="page-header__wrapper">
        <a class="logo" href="/">
          <img class="logo__image" width="189" height="35" src="img/logo.svg" alt="Logo">
        </a>

        <button class="services" type="button" name="services">
          <span class="services__icon"></span>
          <span class="services__text">Услуги</span>
        </button>

        <nav class="navigation navigation--header">
          <button class="navigation__menu" type="button" name="menu">
            Меню
          </button>

          <div class="navigation__mobile">
            <div class="page-header__mobile">
              <form class="search-form search-form--header" action="search.php" method="get">
                <div class="search-form__container">
                  <input class="search-form__input" type="text" name="search" placeholder="Поиск">

                  <svg class="search-form__svg" width="20" height="20" aria-label="Поиск">
                    <use xlink:href="#icon-search"></use>
                  </svg>
                </div>
              </form>

              <button class="page-header__call page-header__call--tablet" type="button" name="call">Заказать звонок</button>
            </div>

            <ul class="navigation__list navigation__list--header">
              <li class="navigation__item navigation__item--sub">
                <a class="navigation__link <?php pageName($title, 'Портфолио'); ?>" href="portfolio.php">Портфолио</a>

                <ul class="sub">
                  <li class="sub__item">
                    <a href="#">
                      Разработка сайтов
                    </a>
                  </li>
                  <li class="sub__item">
                    <a href="#">
                      Создание лендингов
                    </a>
                  </li>
                  <li class="sub__item">
                    <a href="#">
                      SMM
                    </a>
                  </li>
                  <li class="sub__item">
                    <a href="#">
                      Поисковое продвижение
                    </a>
                  </li>
                  <li class="sub__item">
                    <a href="#">
                      Видео и анимация
                    </a>
                  </li>
                </ul>
              </li>
              <li class="navigation__item">
                <a class="navigation__link <?php pageName($title, 'Кейсы'); ?>" href="cases.php">Кейсы</a>
              </li>
              <li class="navigation__item">
                <a class="navigation__link <?php pageName($title, 'Блог'); ?>" href="blog.php">Блог</a>
              </li>
              <li class="navigation__item navigation__item--sub">
                <a class="navigation__link <?php pageName($title, 'О компании'); ?>" href="about.php">О компании</a>

                <ul class="sub">
                  <li class="sub__item">
                    <a href="reviews.php">
                      Отзывы
                    </a>
                  </li>
                  <li class="sub__item">
                    <a href="team.php">
                      Сотрудники
                    </a>
                  </li>
                </ul>
              </li>
              <li class="navigation__item">
                <a class="navigation__link <?php pageName($title, 'Контакты'); ?>" href="contacts.php">Контакты</a>
              </li>
            </ul>

            <button class="page-header__call page-header__call--mobile" type="button" name="call">Заказать звонок</button>

            <span class="navigation__close"></span>
          </div>

          <ul class="navigation__list navigation__list--header navigation__list--desktop">
            <li class="navigation__item navigation__item--sub">
              <a class="navigation__link <?php pageName($title, 'Портфолио'); ?>" href="portfolio.php">Портфолио</a>

              <ul class="sub">
                <li class="sub__item">
                  <a href="#">
                    Разработка сайтов
                  </a>
                </li>
                <li class="sub__item">
                  <a href="#">
                    Создание лендингов
                  </a>
                </li>
                <li class="sub__item">
                  <a href="#">
                    SMM
                  </a>
                </li>
                <li class="sub__item">
                  <a href="#">
                    Поисковое продвижение
                  </a>
                </li>
                <li class="sub__item">
                  <a href="#">
                    Видео и анимация
                  </a>
                </li>
              </ul>
            </li>
            <li class="navigation__item">
              <a class="navigation__link <?php pageName($title, 'Кейсы'); ?>" href="cases.php">Кейсы</a>
            </li>
            <li class="navigation__item">
              <a class="navigation__link <?php pageName($title, 'Блог'); ?>" href="blog.php">Блог</a>
            </li>
            <li class="navigation__item navigation__item--sub">
              <a class="navigation__link <?php pageName($title, 'О компании'); ?>" href="about.php">О компании</a>

              <ul class="sub">
                <li class="sub__item">
                  <a href="reviews.php">
                    Отзывы
                  </a>
                </li>
                <li class="sub__item">
                  <a href="team.php">
                    Сотрудники
                  </a>
                </li>
              </ul>
            </li>
            <li class="navigation__item">
              <a class="navigation__link <?php pageName($title, 'Контакты'); ?>" href="contacts.php">Контакты</a>
            </li>
          </ul>
        </nav>

        <div class="page-header__desktop">
          <button class="search" type="button" name="search">
            <svg class="search__svg" width="18" height="18" aria-label="Поиск">
              <use xlink:href="#icon-search"></use>
            </svg>
          </button>

          <button class="page-header__call" type="button" name="call">Заказать звонок</button>
        </div>
      </div>
    </header>

    <?php
      $services_name = array(
        "Сайты",
        "Битрикс24",
        "SEO",
        "Контекстная реклама",
        "SMM",
        "Контент-маркетинг",
        "Видеомаркетинг",
        "Дизайн",
        "PR",
        "Приложения"
      );
     ?>

    <section class="we">
      <h2 class="visually-hidden">Услуги</h2>
      <div class="we__wrapper">
        <div class="we__left">
          <ul class="we__list">
            <?php $f = 0; ?>
            <?php while ($f < 10) : ?>
              <li class="we__item we__item--desktop <?php if($f == 0) echo "active"; ?>">
                <h3 class="we__item-title">
                  <?= $services_name[$f] ?>
                </h3>
              </li>
            <?php $f++; ?>
            <?php endwhile; ?>
          </ul>

          <a class="link link--service" href="services.php"> <span>Все услуги</span> </a>
        </div>
        <div class="we__right swiper-container">
          <div class="we__content swiper-wrapper">
            <?php $i = 0; ?>
            <?php while ($i < 10) : ?>
            <div class="we__item we__item--mobile swiper-slide">
              <h3 class="we__title we__item-title--mobile">
                <?= $services_name[$i] ?>
              </h3>
              <div class="we__content-item">
                <div class="we__1">
                  <a class="we__link" href="#">
                    <h3 class="we__title">
                      Интернет-магазины (<?= $i; ?>)
                    </h3>
                  </a>

                  <p class="we__text">
                    <a href="#">По продаже компьютерной техники</a>
                  </p>
                  <p class="we__text">
                    <a href="#">По продаже цветов</a>
                  </p>
                  <p class="we__text">
                    <a href="#">По продаже запчастей</a>
                  </p>
                  <p class="we__text">
                    <a href="#">Электронной техники</a>
                  </p>
                  <p class="we__text">
                    <a href="#">Спортивных товаров</a>
                  </p>

                  <a class="link link--services" href="#"><span>См. больше</span></a>

                  <a class="we__link" href="#">
                    <h3 class="we__title">
                      Битрикс
                    </h3>
                  </a>

                  <p class="we__text">
                    <a href="#">Сайты и лендинги на Битрикс</a>
                  </p>
                  <p class="we__text">
                    <a href="#">Доработка сайтов</a>
                  </p>
                  <p class="we__text">
                    <a href="#">Интеграция с 1С</a>
                  </p>
                  <p class="we__text">
                    <a href="#">Композит</a>
                  </p>
                  <p class="we__text">
                    <a href="#">Импорт товаров</a>
                  </p>



                  <a class="we__link" href="#">
                    <h3 class="we__title">
                      Доработка
                    </h3>
                  </a>

                  <p class="we__text">
                    <a href="#">Битрикс</a>
                  </p>
                  <p class="we__text">
                    <a href="#">Вордпресс</a>
                  </p>
                  <p class="we__text">
                    <a href="#">Друпал</a>
                  </p>
                </div>
                <div class="we__2">
                  <a class="we__link" href="#">
                    <h3 class="we__title">
                      Вёрстка
                    </h3>
                  </a>

                  <p class="we__text">
                    <a href="#">Адаптация под мобильные устройства</a>
                  </p>
                  <p class="we__text">
                    <a href="#">Верстка из PSD</a>
                  </p>

                  <a class="we__link" href="#">
                    <h3 class="we__title">
                      Сайт-визитка
                    </h3>
                    <p class="flame">
                      <img class="flame__img" width="16" height="16" src="img/flame.png" alt="img">
                    </p>
                  </a>

                  <a class="we__link" href="#">
                    <h3 class="we__title">
                      Корпоративный
                    </h3>
                  </a>

                  <a class="we__link" href="#">
                    <h3 class="we__title">
                      Лендинг
                    </h3>
                  </a>
                  <a class="we__link" href="#">
                    <h3 class="we__title">
                      Промо-сайт
                    </h3>
                  </a>

                  <a class="we__link" href="#">
                    <h3 class="we__title">
                      Информационный портал
                    </h3>
                  </a>

                  <a class="we__link" href="#">
                    <h3 class="we__title">
                      На английском языке
                    </h3>
                  </a>

                  <a class="we__link" href="#">
                    <h3 class="we__title">
                      Wordpress
                    </h3>
                  </a>

                  <a class="we__link" href="#">
                    <h3 class="we__title">
                      Разработка имиджевых сайтов
                    </h3>
                  </a>
                </div>
                <div class="we__3">
                  <div class="we__cart">
                    <picture class="we__picture">
                      <source srcset="img/we.webp" type="image/webp">

                      <img width="72" height="72" src="img/we.jpg" alt="img">
                    </picture>

                    <div class="we__cart-wrapper">
                      <h4 class="we__name">
                        Сайт-визитка
                      </h4>

                      <p class="we__description">
                        Специальное предложение на заказ сайта-визитки
                      </p>

                      <a class="link link--cart" href="#"><span>Подробнее</span></a>
                    </div>

                    <p class="flame flame--cart">
                      <img class="flame__img" width="16" height="16" src="img/flame.png" alt="img">
                    </p>
                  </div>
                  <div class="we__cart">
                    <picture class="we__picture">
                      <source srcset="img/we.webp" type="image/webp">

                      <img width="72" height="72" src="img/we.jpg" alt="img">
                    </picture>

                    <div class="we__cart-wrapper">
                      <h4 class="we__name">
                        Сайт-визитка
                      </h4>

                      <p class="we__description">
                        Специальное предложение на заказ сайта-визитки
                      </p>

                      <a class="link link--cart" href="#"><span>Подробнее</span></a>
                    </div>

                    <p class="flame flame--cart">
                      <img class="flame__img" width="16" height="16" src="img/flame.png" alt="img">
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <?php $i++; ?>
            <?php endwhile; ?>
            <a class="link link--service link--service-mobile" href="services.php"> <span>Все услуги</span> </a>
          </div>
        </div>
      </div>
    </section>

    <section class="results">
      <h2 class="visually-hidden">Поиск</h2>
      <div class="results__wrapper">
        <form class="results__form" action="search.php" method="get">
          <div class="results__container">
            <input class="results__input" type="text" name="search" placeholder="Поиск по сайту">

            <svg class="results__svg results__svg--search" width="20" height="20" aria-label="Поиск">
              <use xlink:href="#icon-search"></use>
            </svg>

            <button class="results__submit" type="submit" name="GoSearch">
              <svg class="results__svg" width="24" height="24" aria-label="GoSearch">
                <use xlink:href="#icon-arrow-search"></use>
              </svg>
            </button>
          </div>

          <ul class="results__list">
            <li class="results__item">
              <span class="results__relevant">Разработк</span><span class="results__end">а интернет-магазина под ключ</span>
            </li>
            <li class="results__item">
              <span class="results__relevant">Разработк</span><span class="results__end">а сайтов</span>
            </li>
            <li class="results__item">
              <span class="results__relevant">Разработк</span><span class="results__end">а леднигов</span>
            </li>
            <li class="results__item">
              <span class="results__relevant">Разработк</span><span class="results__end">а на битрикс24</span>
            </li>
            <li class="results__item">
              <span class="results__relevant">Разработк</span><span class="results__end">а на Вордпресс</span>
            </li>
          </ul>
        </form>

        <button class="results__close" type="button" name="close">
          <span class="visually-hidden">Закрыть</span>

          <svg class="results__icon-close" width="24" height="24" aria-label="Close">
            <use xlink:href="#icon-close"></use>
          </svg>
        </button>
      </div>
    </section>

    <section class="popup popup--form">
      <div class="popup__wrapper popup__wrapper--form">
        <h2 class="popup__title popup__title--form">Оставьте заявку</h2>

        <form class="form form--popup" action="#" method="post">
          <p class="form__connect form__connect--popup">
            Свяжитесь с нами любым удобным для Вас способом, чтобы получить ответы на интересующие вопросы и смету.
          </p>

          <label class="visually-hidden" for="name-1">Имя</label>
          <input class="form__name" id="name-1" type="text" name="name" placeholder="Имя" required>
          <p class="error">Неверный формат имени</p>

          <label class="visually-hidden" for="phone-1">Email</label>
          <input class="form__phone form__phone--popup" id="phone-1" type="tel" name="phone" placeholder="+7 (___) ___-__-__" required>
          <p class="error">Неверный формат номера</p>

          <p class="form__politics form__politics--popup">
            <input class="visually-hidden" id="politics-1" type="checkbox" name="politics" required>
            <label class="form__label" for="politics-1">Я соглашаюсь с</label>
            <a class="form__link" href="politics.php" target="_blank">Политикой конфиденциальности</a>
          </p>

          <button class="form__button form__button--popup" type="submit" name="discuss">Старт</button>

          <ul class="social social--form">
            <li class="social__item social__item--form">
              <a class="social__link" href="#">
                <svg class="social__icon" width="62" height="62" aria-describedby="telegram icon">
                  <use xlink:href="#icon-telegram"></use>
                </svg>
              </a>
            </li>
            <li class="social__item social__item--form">
              <a class="social__link" href="#">
                <svg class="social__icon" width="62" height="62" aria-describedby="telegram icon">
                  <use xlink:href="#icon-chat"></use>
                </svg>
              </a>
            </li>
          </ul>
        </form>
      </div>
      <button class="popup__close" type="button" name="close">
        <span class="visually-hidden">Закрыть</span>

        <svg class="popup__icon" width="32" height="32" aria-label="Close">
          <use xlink:href="#icon-close-popup"></use>
        </svg>
      </button>
    </section>

    <section class="popup popup--thanks">
      <div class="popup__wrapper popup__wrapper--thanks">
        <h2 class="popup__title popup__title--thanks">Спасибо за заявку!</h2>

        <p class="popup__text">
          В ближайшее время мы свяжемся с вами
        </p>

        <button class="popup__button" type="button" name="ok">
          Хорошо
        </button>
      </div>
      <button class="popup__close" type="button" name="close">
        <span class="visually-hidden">Закрыть</span>

        <svg class="popup__icon" width="32" height="32" aria-label="Close">
          <use xlink:href="#icon-close-popup"></use>
        </svg>
      </button>
    </section>
    <div class="popup__overlay"></div>

    <!-- end header -->
