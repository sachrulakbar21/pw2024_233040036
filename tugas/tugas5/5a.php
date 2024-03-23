<?php 
$student = [
  
            ["nama" => "Caca",
              "npm" => "233040001",
              "email" => "caca@gmail.com ",
              "jurusan" => "Teknik Informatika",           
            ],
            ["nama" => "Naura",
              "npm" => "220323002",
              "email" => "raaaa7@gmail.com ",
              "jurusan" => "Farmasi",
            ],
            ["nama" => "Dimas",
              "npm" => "234003007",
              "email" => "mdims@gmail.com ",
              "jurusan" => "Teknik Industri",             
            ],
            ["nama" => "Lucky",
              "npm" => "234003001",
              "email" => "lcuky21@gmail.com ",
              "jurusan" => "Teknik Industri",
            ],
            ["nama" => "Vita",
              "npm" => "232021010",
              "email" => "vitasari21@gmail.com ",
              "jurusan" => "Hukum",
            ],
            ["nama" => "Sandi",
              "npm" => "232021002",
              "email" => "sandiii@gmail.com ",
              "jurusan" => "Fotografi",
            ],
            ["nama" => "Alex",
              "npm" => "233040009",
              "email" => "alexskuyyy@gmail.com ",
              "jurusan" => "Teknik Informatika",
            ],
            ["nama" => "Sahil",
              "npm" => "232102001",
              "email" => "sahil@gmail.com ",
              "jurusan" => "Pendidikan Pancasila dan Kewarganegaraan",
            ],
             ["nama" => "Daffa",
              "npm" => "231220020",
              "email" => "daffa@gmail.com ",
              "jurusan" => "Ekonomi Pembangunan",
            ],
            ["nama" => "Erika",
              "npm" => "233040002",
              "email" => "Erika@gmail.com ",
              "jurusan" => "Akutansi",
            ]

            ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>
<body>
    <div class="container"> 
        <h1>Daftar Mahasiswa</h1>
            <?php foreach ($student as $students) : ?>
                <ul>
                    <li>Nama : <?= $students["nama"]; ?></li>
                    <li>NPM : <?= $students["npm"]; ?></li>
                    <li>Email : <?= $students["email"]; ?></li>
                    <li>Jurusan : <?= $students["jurusan"]; ?></li>
                </ul>
            <?php endforeach; ?>
    </div>
</body>
</html>
