<!-- products.php -->
<?php
$products = [
  ["name" => "Smart Scent Diffuser RoyalMist", "price" => 4799655, "volume" => "4000m³", "type" => "Commercial"],
  ["name" => "Mini Scent Diffuser & LCD Display", "price" => 18000000, "volume" => "300m³", "type" => "Commercial"],
  ["name" => "Refill Oil 100ml", "price" => 252000, "type" => "Personal"],
  ["name" => "Reed Diffuser 150ml", "price" => 158886, "type" => "Personal"],
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Produk Elenscent</title>
</head>
<body>
  <h2>Produk Kami</h2>
  <ul>
    <?php foreach ($products as $p): ?>
      <li>
        <strong><?= $p["name"] ?></strong><br>
        Harga: Rp <?= number_format($p["price"], 0, ',', '.') ?><br>
        <?= isset($p["volume"]) ? "Coverage: " . $p["volume"] . "<br>" : "" ?>
        Tipe: <?= $p["type"] ?>
      </li>
    <?php endforeach; ?>
  </ul>
</body>
</html>