<<<<<<< HEAD
<!doctype html>
<?php include 'navbar.php';
include 'functions.php';
include_once 'db.php';
error_reporting(E_ALL ^ E_NOTICE);
?>
<html class="no-js" lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EenmaalAndermaal - De beste veilingsite van Nederland!</title>
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/app.css">
  <link rel="icon" href="img/logo2.PNG">
</head>
<body>
  <div class="grid-container fluid">
    <div class="grid-x grid-padding-x">
      <div class="cell large-2 text-center">
        <div class="grid-y">
          <div class="cell small-6 medium-8 large-2">
            <br>
            <form method="post" action="">
              <input type="text" name="zoekterm" placeholder="Zoeken..."/>
              <input type="submit" name="zoeken" value="Zoeken" class="knop">
            </form>
            <br>
            <h1>Groepen</h1>
            <?php
            echo '<ul class="ulNone">';
            zoekRubriek($dbh, $_POST['zoekterm']);
            echo '</ul>';
            ?>
          </div>
        </div>
      </div>
      <div class="cell large-8 text-center">
        <br>

        <div class="grid-x grid-padding-x">
          <div class="small-12 cell">
            <div class="callout">
              <h3 class="text-center">Welkom bij de beste veilingsite van Nederland!</h3>
              <p class="text-center">Zoek hieronder naar leuke items of klik op de menubalk om een account aan te maken.</p>
              <div class="grid-x grid-padding-x">
                <?php hot_items($dbh); ?>
              </div>
            </div>
          </div>
        </div>
        <?php include 'orbit-slider.php'; ?>
        <div class="grid-x grid-padding-x">
          <div class="small-12 cell">
            <div class="callout">
              <h3 class="text-center">Deze items lopen binnenkort af! Bied snel!</h3>
              <div class="grid-x grid-padding-x">
                <?php ending_items($dbh); ?>
              </div>
            </div>
          </div>
        </div>
        <div class="grid-x grid-padding-x">
          <div class="small-12 cell">
            <div class="callout">
              <h3 class="text-center">Deze items hebben nog geen hoge biedingen! Bied snel!</h3>
              <div class="grid-x grid-padding-x">
                <?php cheap_items($dbh); ?>
              </div>
            </div>
          </div>
        </div>
      </div>

        <script src="js/vendor/jquery.js"></script>
        <script src="js/vendor/what-input.js"></script>
        <script src="js/vendor/foundation.js"></script>
        <script src="js/app.js"></script>
        <?php
        include_once 'footer.html';
        ?>
      </body>
      </html>
=======
<!doctype html>
<?php include 'navbar.php';
include 'functions.php';
include_once 'db.php';
error_reporting(E_ALL ^ E_NOTICE);
?>
<html class="no-js" lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EenmaalAndermaal - De beste veilingsite van Nederland!</title>
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/app.css">
  <link rel="icon" href="img/logo2.PNG">
</head>
<body>
  <div class="grid-container fluid">
    <div class="grid-x grid-padding-x">
      <div class="cell large-2 text-center">
        <div class="grid-y">
          <div class="cell small-6 medium-8 large-2">
            <br>
            <form method="post" action="">
              <input type="text" name="zoekterm" placeholder="Zoeken..."/>
              <input type="submit" name="zoeken" value="Zoeken" class="knop">
            </form>
            <br>
            <h1>Groepen</h1>
            <?php
            echo '<ul class="ulNone">';
            zoekRubriek($dbh, $_POST['zoekterm']);
            echo '</ul>';
            ?>
          </div>
        </div>
      </div>
      <div class="cell large-8 text-center">
        <br>

        <div class="grid-x grid-padding-x">
          <div class="small-12 cell">
            <div class="callout">
              <h3 class="text-center">Welkom bij de beste veilingsite van Nederland!</h3>
              <p class="text-center">Zoek hieronder naar leuke items of klik op de menubalk om een account aan te maken.</p>
              <div class="grid-x grid-padding-x">
                <?php hot_items($dbh); ?>
              </div>
            </div>
          </div>
        </div>
        <?php include 'orbit-slider.php'; ?>
        <div class="grid-x grid-padding-x">
          <div class="small-12 cell">
            <div class="callout">
              <h3 class="text-center">Deze items lopen binnenkort af! Bied snel!</h3>
              <div class="grid-x grid-padding-x">
                <?php ending_items($dbh); ?>
              </div>
            </div>
          </div>
        </div>
        <div class="grid-x grid-padding-x">
          <div class="small-12 cell">
            <div class="callout">
              <h3 class="text-center">Deze items hebben nog geen hoge biedingen! Bied snel!</h3>
              <div class="grid-x grid-padding-x">
                <?php cheap_items($dbh); ?>
              </div>
            </div>
          </div>
        </div>
      </div>

        <script src="js/vendor/jquery.js"></script>
        <script src="js/vendor/what-input.js"></script>
        <script src="js/vendor/foundation.js"></script>
        <script src="js/app.js"></script>
        <?php
        include_once 'footer.html';
        ?>
      </body>
      </html>
>>>>>>> 4d1053b6b7f883e38200aba340d883d7e49f13f5
