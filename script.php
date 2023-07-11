 <<!DOCTYPE html>
 <html>
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="script.css">
   <title>input pembayaran</title>
 </head>
 <body>
   <section>
      <h2>PEMBAYARAN</h2>
      <form action="script.php" method="POST" onsubmit="return validateForm()">
      
        <label for="name">Nama :<br></label>
        <input type="text" id="name" name="name" required><br>
      
        <label for="nim">Nim :<br></label>
        <input type="number" id="nim" name="nim" required><br>
      
        <label for="Prodi">Prodi :<br></label>
        <input type="text id="Prodi" name="Prodi" required><br>
       
        <label for="jum">Jumlah SKS :<br></label>
        <input type="number" id="jum" name="jum" required><br>
      
        <label for="bayar">Jumlah Yang dibayar :<br></label>
        <input type="number" id="bayar" name="bayar" required><br>
     
        <font color="black"><button type="submit">Submit</button></font>
      </tr></td>
      </form>
    </section>
 
 </body>
 <footer>
  <p>Hak Cipta Saiful Anis &copy; 2023. </p>
</footer>
 </html>



BUKTI TRANSAKSI
<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $nim = $_POST["nim"];
  $Prodi = $_POST["Prodi"];
  $jum = $_POST["jum"];
  $bayar = $_POST["bayar"];

  echo "<p>Nama   : " . $name . "</p>";
  echo "<p>Nim    :" . $nim . "</p>";
  echo "<p>Prodi  : " . $Prodi . "</p>";
  echo "<p>Jumlah SKS : " . $jum . "</p>";
  echo "<p>Jumlah Yang dibayar  : " . $bayar . "</p>";

  // Menghitung total tagihan
  $tagihan = $jum * 24;
  echo "<p>Total Tagihan: " . $tagihan . "</p>";

  // Menghitung sisa pembayaran
  $sisa = $tagihan - $bayar;
  echo "<p>Sisa Pembayaran : " . $sisa . "</p>";
}

?>

