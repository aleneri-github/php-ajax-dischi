<?php
  // include __DIR__ . "/db.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+SC&family=Roboto&family=Yusei+Magic&display=swap" rel="stylesheet">
    <!-- CDN Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <!-- Mio foglio di stile -->
    <link rel="stylesheet" href="css/app.css">
    <meta charset="utf-8">
    <title>Dischi Versione Vue</title>
  </head>
  <body>
    <div id="root">
      <header>
        <i class="fab fa-spotify"></i>
      </header>
      <main>
        <div class="disc-box" v-for="disc in discs">
          <img :src="disc.poster" :alt="disc.title">
          <h2>{{ disc.title }}</h2>
          <h3>{{ disc.author }}</h3>
          <h4>{{ disc.year }}</h4>
          <div class="overlay">
            <i class="far fa-play-circle"></i>
          </div>
        </div>
      </main>
    </div>
    <script src="js/app.js" charset="utf-8"></script>
  </body>
</html>
