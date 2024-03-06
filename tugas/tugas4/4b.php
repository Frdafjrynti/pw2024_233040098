<?php
$perangkat = ["Motherboard", "Processor", "Hard Disk", "PC Coller", "VGA Card", "SSD"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perangkat Keras Komputer</title>
</head>
<body>
    <h3>Macam-macam perangkat keras komputer</h3>
    <ol>
        <?php foreach($perangkat as $p) :?>
        <li><?= $p; ?></li>
        <?php endforeach; ?>
    </ol>

    <?php
    array_unshift($perangkat, "Card Reader", "Modem");
    sort($perangkat) ?>
    <h3>Macam-macam perangkat keras komputer baru</h3>
    <ol>
        <?php foreach($perangkat as $p) :?>
        <li><?= $p; ?></li>
        <?php endforeach; ?>
    </ol>
</body>
</html>