<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
</head>
<body>

  <h1>Lorem Ipsum</h1>

  <?php

  $hour = 12;

  if ($hour < 12) {
    echo "Good Morning!";
  } elseif ($hour < 18) {
    echo "Good afternoon!";
  } elseif ($hour < 22) {
    echo "Good evening!";
  } else {
    echo "Good Night!";
  }
  ?>

</body>
</html>