<?php
if ( $pageCode == "home" ) {
  $title = "홈";
}
else if ( $pageCode == "pf" ) {
  $title = "포트폴리오";
}
else if ( $pageCode == "aboutMe" ) {
  $title = "자기소개";
}
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$title?></title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.7/tailwind.min.css">

  <link rel="stylesheet" href="common.css">
  <script src="common.js" defer></script>
</head>
<body>

<div class="site-wrap min-h-screen flex flex-col">
  <header class="top-bar h-20 flex-shrink-0 bg-black text-white">
    <div class="container h-full mx-auto px-2 flex">
      <a href="/" class="logo flex items-center">로고</a>
      
      <div class="flex-grow"></div>
      
      <ul class="flex -mr-2 font-bold">
        <li><a href="/" class="h-full flex items-center px-2 <?=$pageCode == "home" ? "text-red-500" : ""?>" href="#">홈</a></li>
        <li><a href="/pf.php" class="h-full flex items-center px-2 <?=$pageCode == "pf" ? "text-red-500" : ""?>" href="#">포트폴리오</a></li>
        <li><a href="/aboutMe.php" class="h-full flex items-center px-2 <?=$pageCode == "aboutMe" ? "text-red-500" : ""?>" href="#">자기소개</a></li>
        <li><a href="https://www.youtube.com/user/jangka512" target="_blank" class="h-full flex items-center px-2" href="#">유튜브</a></li>
      </ul>
    </div>
  </header>
  <main class="flex-grow flex items-center justify-center">