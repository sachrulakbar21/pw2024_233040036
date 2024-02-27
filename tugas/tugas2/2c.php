<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2c Moch Sachrul Akbar R</title>
    <style>
        .flex {
            display: flex;
        }

        .box {
            width: 50px;
            height: 50px;
            line-height: 50px;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            color: white;
            border: 1px solid black;
            background-color: salmon;
        }
    </style>
</head>

<body>
    <?php
    for ($i = 10; $i >= 1; $i--) { ?>
        <div class="flex">
            <?php for ($j = 1; $j <= $i; $j++) { ?>
                <div class="box"><?= $j ?></div>
            <?php } ?>
        </div>
    <?php } ?>
</body>

</html>
