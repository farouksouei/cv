<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Error</title>
</head>

<body>
  <?php
  session_start();
  echo "dd";
  foreach ($_SESSION['errors'] as $error) {
    echo "<p>$error</p>";
  }
  ?>
</body>

</html>