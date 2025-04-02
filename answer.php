<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Finding the surface area of a cylinder, in Php" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Shanea Jaromay" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.purple-deep_orange.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Finding the surface area of a cylinder, Php</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Finding the surface area of a cylinder, Php</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/cylinder13086045153593860639.jpg" alt="cylinder image" width="250" />
      </div>
      <div class="page-content-php">
        <div id="area">
          <?php
          // Retrieve data from the form
          $radiusNumber = $_GET["radius-number"];
          $heightNumber = $_GET["height-number"];

          // Calculate surface area of the cylinder
          $area = 2 * M_PI * $radiusNumber * ($radiusNumber + $heightNumber);

          // Output the result
          echo "If the cylinder has a radius = " . $radiusNumber . " cm and a height = " . $heightNumber . " cm:<br />";
          echo "<br />";
          echo "The surface area of the cylinder is " . (round($area, 2)) . " cm².";
          echo "<br />";
          ?>
        </div>
      </div>
      <div class="page-content-return">
        <a href="./index.php">Return ...</a>
      </div>
    </main>
  </div>
</body>

</html>