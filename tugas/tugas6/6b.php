<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 6b</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            border: 1px solid black;
            color: white;
            display: flex;
            border-radius: 15px;
            margin: 2px;
        }

        .kotak h2 {
            margin: auto;
        }


        .row {
            display: flex;
        }

        .row1 {
            .kotak {
                background-color: salmon;
            }
        }

        .row2 {
            .kotak {
                background-color: lightpink;
                color: black;
            }
        }

        form {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <label for="angka">Masukkan angka :</label>
        <input type="text" name="jumlah-angka" id="angka">
        <input type="submit">
    </form>

    <?php if(!isset($_POST["jumlah-angka"])) : ?>
        <h3>silahkan anda masukkan jumlah angka terlebih dahulu</h3>
    <?php else : ?>
        <?php for ($i = $_POST["jumlah-angka"]; $i >= 1; $i--) : ?>
            <?php if($i % 2 === 0) : ?>
                <div class="row row1">
            <?php else : ?>
                <div class="row row2">
            <?php endif; ?>
                <?php for ($j = 1; $j <= $i; $j++) : ?>
                    <div class="kotak"><h2><?= "$i" ?></h2></div>
                <?php endfor ; ?>
                    <br>            
        </div>
        <?php endfor ; ?>
    <?php endif; ?>
</body>
</html>
