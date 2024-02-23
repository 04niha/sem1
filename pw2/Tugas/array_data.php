<?php
$m_fruits = [
  [ "ID" => "1", "Nama" => "Pisang", "color" => "Kuning", "stock" => 20, "price" => 15000, "description" => "Pisang dengan rasa manis"],

  [ "ID" => "2", "Nama" => "anggur", "color" => "ungu", "stock" => 13, "price" => 20000, "description" => "anggur dengan rasa yang manis dan segar"],
  [ "ID" => "3", "Nama" => "apel", "color" => "merah", "stock" => 21, "price" => 25000, "description" => "apel dengan rasa yang manis dan matang"],
  [ "ID" => "4", "Nama" => "jeruk", "color" => "oren", "stock" => 20, "price" => 20000, "description" => "buah jeruk yang langsung di petik dari pohonnya langsung"],
  [ "ID" => "5", "Nama" => "strawbery", "color" => "merah", "stock" => 30, "price" => 30000, "description" => "buah yang merah dan kaya akan khasiatnyah"], 
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        
        <?php
        foreach ($m_fruits as $fruit) {
          ?>
          <tr>

          <td><?= $fruit["ID"] ?></td> 
          <td><?= $fruit["Nama"] ?></td> 
          <td><?= $fruit["color"] ?></td> 
          <td><?= $fruit["stock"] ?></td> 
          <td><?= $fruit["price"] ?></td> 
          <td><?= $fruit["description"] ?></td> 
          
      </tr>

      <?php
        }
        
       
        
        
        
        
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>