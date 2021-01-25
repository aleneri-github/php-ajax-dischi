<?php
  include __DIR__ . "/db.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- CDN Vue.js -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+SC&family=Roboto&family=Yusei+Magic&display=swap" rel="stylesheet">
    <!-- CDN Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <!-- Mio foglio di stile -->
    <link rel="stylesheet" href="css/app.css">
    <meta charset="utf-8">
    <title>Dischi</title>
  </head>
  <body>
    <div id="root">
      <header>
        <i class="fab fa-spotify"></i>
      </header>
      <main>
        <?php foreach ($dischi as $disco) { ?>
          <div class="disc-box">
            <img src="<?php echo $disco["poster"] ?>" alt="">
            <h2><?php echo $disco["title"] ?></h2>
            <h3><?php echo $disco["author"] ?></h3>
            <h4><?php echo $disco["year"] ?></h4>
            <div class="overlay">
              <i class="far fa-play-circle"></i>
            </div>
          </div>
        <?php } ?>
      </main>      
    </div>
  </body>
</html>
