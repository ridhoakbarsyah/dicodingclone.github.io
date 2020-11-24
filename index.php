<?php

$person = array(
    array(
        'No'=>1,
        'Nama'=>'Cristiano Messi',
        'Tinggi Badan'=> 180,
        'Posisi'=>'Striker',
    ),
    array(
        'No'=>2,
        'Nama'=>'Bejo Leonardo',
        'Tinggi Badan'=> 167,
        'Posisi'=>'Midfielder',
    ),
     array(
        'No'=>3,
        'Nama'=>'Alfa Midi',
        'Tinggi Badan'=> 190,
        'Posisi'=>'Defender',
    ),

);
?>
<head>
    <title>UTS_18104020_Ridho Akbarsyah Ramadhan</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<h1><b>UTS - Bagian B</b></h1>
<br>
<p>Bambang merupakan seorang pelatih klub sepak bola yang ingin menampilkan informasi pemainnya yang terdiri dari data sebagai berikut:</p>

<table class="table table-striped">
  <thead>
    <tr class="table table-striped">
      <th scope="col" >No</th>
      <th scope="col">Nama</th>
      <th scope="col">Tinggi Badan</th>
      <th scope="col">Posisi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($person as $p){
        ?>
    
    <tr>
        <td><?php echo $p['No'];?></td>
        <td><?php echo $p['Nama'];?></td>
        <td><?php echo $p['Tinggi Badan'];?></td>
        <td><?php echo $p['Posisi'];?></td>
    </tr>
    <?php } ?> 
  </tbody>
</table>