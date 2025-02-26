<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Halaman Registrasi</h1>
    
    <form action="/home" method="POSt">
        @csrf
        <label>nama depan</label>
        <input type="text" name="firstname"><br><br>
        <label>nama belakang</label>
        <input type="text" name="lastname"><br><br>
        <labe">Biodata</label>
        <textarea name="bio" cols="30" rows="10"></textarea> <br><br>
        <input type="submit" value="kirim">
    </form>
</body>
</html>