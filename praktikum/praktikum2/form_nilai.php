<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <h2>Form Nilai Mahasiswa</h2>
    

    <form action="form_hasil.php" method="GET">
    <div class="form-group row">
        <label for="Masukan nama" class="col-4 col-form-label">Nama</label> 
        <div class="col-8">
        <input id="nama" name="nama" placeholder="masukan nama" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="pemrograman web" class="col-4 col-form-label">mata kuliah</label> 
        <div class="col-8">
        <select id="matkul" name="matkul" class="custom-select">
            <option value="pemrograman web">pemrograman web</option>
            <option value="basis data">basis data</option>
            <option value="Bahasa Inggris">bahasa Inggris</option>
        </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="tugas" class="col-4 col-form-label">Nilai Tugas</label> 
        <div class="col-8">
        <input id="tugas" name="tugas" placeholder="masukan nilai tugas" type="text" required="required" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
        <div class="col-8">
        <input id="uts" name="uts" placeholder="masukan nilai UTS" type="text" class="form-control" required="required">
        </div>
    </div>
    <div class="form-group row">
        <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
        <div class="col-8">
        <input id="uas" name="uas" placeholder="masukan nilai UAS" type="text" class="form-control" required="required">
        </div>
    </div> 
    <div class="form-group row">
        <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    </form>
</div>
</body>
</html>