<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .tugas{
            text-align: center;
        }
    </style>
</head>
<body>
<div class="tugas">
    <?php
    // fungsi deret pertama
function deret_pertama($jumlah)
{
  $hasil = "*";
  for ($i=0; $i<$jumlah-1; $i++)
  {
    $hasil = $hasil."*";
  }
  return $hasil;
}
function piramida_fibonacci($tingkat){
  for ($i=1; $i<$tingkat+1; $i++)
  {
    echo deret_pertama($i);
    echo "<br>";
  }
}

// fungsi deret kedua
function deret_kedua($total)
{
  $hasil = "*";
  for ($i=0; $i<$total=4; $i++)
  {
    $hasil = $hasil."*";
  }
  return $hasil;
}
function deret_lurus($tingkat){
  for ($i=1; $i<$tingkat+1; $i++)
  {
    echo deret_kedua($i);
    echo "<br>";
  }
}

// print hasilnya
echo piramida_fibonacci(15);
echo deret_lurus(5);
    ?>
</div>
</body>
</html>