<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Fix Ulangan Harian</title>
    <style> 
    body {
            background-image: url("Tes.jpg.jpg");
            background-repeat: no-repeat;
            background-position: auto;
            background-size: 1750px;
        }

    h1, h3 {
        color: #efefef
    }
    h2{
      color: #000000
    }

    </style>
</head>
<body>
<?php
    $nama = array (1 => "Ghufroon","Tank Mukil","Habel","Devino","Rafie");
    $LKA = array (1 => "79","82","67","90","86");
    $IKA = array (1 => "62","97","72","79","89");
    $SIOT = array (1 => "56","78","97","83","80");
    
?>
<center><h1>ULANGAN HARIAN WEB SOAL 1</h1></center>
<center><h3>Daftar Nilai PTS</h3></center>
<table width = 50% cellspacing = 0 cellpadding = 10 align = center border = 1>
<tr>
  <thead>
        <tr>
    <tr>
        <td rowspan="2" Align='center' bgcolor='#dddddd'><b>No</b></td>
        <td rowspan="2" colspan="1" Align='center' bgcolor='#dddddd'><b>Nama Siswa</b></td>
        <td colspan="4" Align='center' bgcolor='#dddddd'><b>Nilai</b></td>

    </tr>
            <th bgcolor='#e61d07'>LKA</th>
            <th bgcolor='#e6d707'>IKA</th>
            <th bgcolor='#19e607'>SIOT</th>
        </tr>
        </thead>
  <?php
  for ($no=1; $no<=5; $no++) {
    if ($no % 2 == 0)     
    $bg = "#dddddd";
    else $bg ="#efefef";
    
    echo "<tr bgcolor = $bg>";
    echo "<td align=center>$no</td><td>" .$nama[$no]. "</td><td align=center>" .$LKA [$no] ."</td><td align=center>" .$IKA [$no]."</td><td align=center>" .$SIOT [$no]."</td>";
    echo "</tr>";
  }
?>
  </table>
  <p><h2 Align="center">BAGOS IMANNULLOH A.</h2></p>
</body>
</html>

