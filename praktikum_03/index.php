<!DOCTYPE html>
<html>
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Selamat Datang di Perpustakaan STT-NF</h2>
        <p>Silahkan isi buku di bawah ini</p>
        <hr />
        <form method="POST" action="kunjungan.php">
  <div class="form-group row">
    <label for="fullname" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="fullname" name="fullname" type="text" class="form-control" aria-describedby="fullnameHelpBlock" required="required"> 
      <span id="fullnameHelpBlock" class="form-text text-muted">Nama Lengkap Kamu Baby</span>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="email" name="email" type="text" class="form-control" aria-describedby="emailHelpBlock" required="required"> 
      <span id="emailHelpBlock" class="form-text text-muted">Pake Email Aktif Kamu Baby</span>
    </div>
  </div>
  <div class="form-group row">
    <label for="Message" class="col-4 col-form-label">Keperluan</label> 
    <div class="col-8">
      <textarea id="Message" name="Message" cols="40" rows="5" class="form-control" required="required" aria-describedby="MessageHelpBlock"></textarea> 
      <span id="MessageHelpBlock" class="form-text text-muted">Tulis Keperluan Kamu Mengunjungi Perpustakaan</span>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
