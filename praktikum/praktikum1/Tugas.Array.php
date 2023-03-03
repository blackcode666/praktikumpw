<?php
$mahasiswa1 = ['id' => '1',
               'NIM'=>0110122180,
               'uts'=>98,
               'uas'=>90, 
               'tugas'=>85,
];

$mahasiswa2 = ['id' => '2',
               'NIM'=>0110122181,
               'uts'=>100,
               'uas'=>0, 
               'tugas'=>0,
];
$mahasiswa3 = ['id' => '3',
               'NIM'=>0110122182,
               'uts'=>40,
               'uas'=>20, 
               'tugas'=>15,
];

$ar_nilai =[$mahasiswa1, $mahasiswa2, $maha];

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div clas="cntainer">
    <h2>Data Mahasiswa</h2>
    <table class="table table-hover">
     <tr>
      <th>id</th>
      <th>nim</th>
      <th>uts</th>
      <th>uas</th>
      <th>tugas</th>
    </tr>
    <?php foreach($ar_nilai as $ilai) ?>
    <tr>
      <td><?=$nilai['id'];?</td>
      <td><?=$nilai['nim'];?</td>
      <td><?=$nilai['uts'];?</td>
      <td><?=$nilai['uas'];?</td>
      <td><?=$nilai['tugas'];?</td>
    </tr>
    <?php } ?>
</body>
</html>


?>