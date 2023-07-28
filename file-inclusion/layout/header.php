<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php
      if (isset($title)) {
        echo $title;
      }
      else {
        echo "AllIn";
      }
    ?>
  </title>
  <link rel="stylesheet" href="../assets/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>

<body class = "bg-dark">

  
  <div class = "row justify-content-center">
  <h1 class = "main_title text-info m-4">NAVBAR</h1>
    <div class="header">
      <div>
        <p>
          <a href="test.php">Accueil</a>
        </p>
        <p>
          <a href="loops.php">Boucles</a>
        </p>
      </div>
    </div>
  </div>