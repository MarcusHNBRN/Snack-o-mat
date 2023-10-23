<?php

require __DIR__ . '/snacksArray.php';

if (isset($_POST['snacks'])) {
  $snack = $_POST['snacks'];
}

if (isset($_POST['Crisps'])) {
  $crisp = getRandomCrisp($crisps);
}

if (isset($_POST['Dip'])) {
  $dip = getRandomDip($dips);
}

if (isset($_POST['Nuts'])) {
  $nut = getRandomNut($nuts);
}

if (isset($_POST['Drinks'])) {
  $drink = getRandomDrink($drinks);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Website</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <main>
    <ul>
      <?php if (isset($snack)) : ?>
        <li> <?php echo $snack; ?> </li>
      <?php endif; ?>

      <?php if (isset($crisp)) : ?>
        <li> <?php echo $crisp; ?> </li>
      <?php endif; ?>

      <?php if (isset($dip)) : ?>
        <li> <?php echo $dip; ?> </li>
      <?php endif; ?>

      <?php if (isset($nut)) : ?>
        <li> <?php echo $nut; ?> </li>
      <?php endif; ?>

      <?php if (isset($drink)) : ?>
        <li> <?php echo $drink; ?> </li>
      <?php endif; ?>




    </ul>
    <form action="form.php" method="post">
      <label for="snacks"> </label> <br />

      <input type="text" id="snacks" name="snacks" />

      <input type="submit" id="snack" name="snack-it-up" />

      <input type="submit" id="randomSnack" value="Random">

      <div class="checkbox-row">

        <input type="checkbox" id="Crisps" name="Crisps">
        <p>Crisps.</p>

        <input type="checkbox" id="Dip" name="Dip">
        <p>Dip.</p>

        <input type="checkbox" id="Nuts" Name="Nuts">
        <p>Nuts.</p>

        <input type="checkbox" id="Drinks" Name="Drinks">
        <p>Drinks.</p>

        <div>
    </form>
  </main>
</body>

</html>