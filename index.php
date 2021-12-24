<?php
//  Костыль, в докере сыпит ошибку заголовку
  ob_start();
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>PHP CRUD</title>
        <link rel="stylesheet" href="css/index.css">
        <link rel="shortcut icon" href="img/favicon.jpeg" type="image/x-icon">
    </head>
    <body>
        <?php
          require 'components/header.php'
        ?>
        <section class="container">
          <?php
            error_reporting(E_ALL);
            ini_set('display_errors', 'on');
            include 'pages/catalog.php';
            ?>
        </section>
        <?php
          require 'components/footer.php'
        ?>
    </body>
</html>
