<?php 
$component = ["Motherboard", "Processor", "Hard Disk", "PC Cooler", "VGA Card", "SSD"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERANGKAT KERAS | Moch Sachrul Akbar Ramadhan</title>
</head>
<body>
    <h3>Macam Macam Perangkat Keras Komputer</h3>
    <ol>
        <?php foreach ($component as $components) {?>
        <li><?php echo $components ?></li> 
        <?php } ?>
    </ol>

    <h3> Macam Macam Perangkat Keras Komputer Baru</h3>
    <ol>
        <?php array_push($component, "Card Reader", "Modem"); ?>
        <?php sort($component) ?>
        <?php foreach ($component as $componentsB) : ?> 
        <li><?php echo $componentsB ?></li>
        <?php endforeach; ?>
    </ol>
</body>
</html>