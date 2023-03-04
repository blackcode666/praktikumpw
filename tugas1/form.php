<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
   

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>
				Sistem Penilaian
			</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8">
			<h2>
				Belanja online
			</h2>
			<form action="form1.php" method="GET">
			<div class="row">
				<div class="col-md-12">
				<form>
  <div class="form-group row">
    <label for="costumer" class="col-4 col-form-label">costumer</label> 
    <div class="col-8">
      <input id="costumer" name="costumer" placeholder="nama costumer" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">pilih produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv" required="required"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas" required="required"> 
        <label for="produk_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesincuci" required="required"> 
        <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
				</div>
			</div>
		</div>
		<div class="col-md-4">
		<table class="table">
  <thead>
    <tr>
      <th scope="col">Daftar Harga</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>TV: Rp 4.200.000</td>
    </tr>
	<tr>
      <td>KULKAS: Rp 3.100.000</td>
    </tr>
	<tr>
      <td>Mesin Cuci: Rp. 3.000.000</td>
    </tr>
  </tbody>
  <thead>
    <tr>
      <th scope="col">Harga Dapat Berubah Setiap Saat</th>
    </tr>
</table>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
		<table class="table">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Produk</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Total Harga</th>
    </tr>
  </thead>
  <tbody>
  <?php require_once "mekanisme.php";?>
    <tr>
	<td><?= $costumer; ?></td>
    <td><?= $produk; ?></td>
    <td><?= $jumlah; ?></td>
    <td><?= $total_harga; ?></td>
    </tr>
  </tbody>
</table>
			<h3 class="text-center">
				@Albram Ramadhan
			</h3>
      <br>
      <p>maaf bang saya kurang tau cara input radio sama total nya </p>
		</div>
	</div>
</div>
  </body>
</html>