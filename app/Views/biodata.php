<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>view codeigniter 4 <?= $nama; ?></h1>
<h2>dari <?php echo $alamat; ?></h2>

<table id="customers">
  <tr>
    <th colspan="2" style="text-align: center; width: 30%;">Biodataku</th>
  </tr>
  <tr>
    <td>Nama</td>
    <td><?= $nama; ?></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td><?php echo $alamat; ?></td>
  </tr>
  <tr>
    <td>Jenis kelamin</td>
    <td><?= $jk; ?></td>
  </tr>
  <tr>
    <td>Asal sekolah</td>
    <td><?= $as; ?></td>
  </tr>
</table>

</body>

</html>