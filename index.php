<?php

$hour = 12;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
</head>
<body>

  <h1>Lorem Ipsum</h1>

  <?php if ($hour < 12): ?>
    Good Morning!
  <?php elseif ($hour < 18): ?>
    Good Afternoon!
  <?php elseif ($hour < 22): ?>
    Good Evening!
  <?php else: ?>
    Good Night!
  <?php endif; ?>

</body>
</html>