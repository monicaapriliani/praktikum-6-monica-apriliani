<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Data Guru</title>
</head>
<body>
    <form action="/formulir/proses" method="POST">
    @csrf
        <br>
        <label> Nama </label>
        <br>
        <input type="text" name="nama">
        <br>
        <label> Alamat </label>
        <br>
        <textarea name="alamat"></textarea>
        <br>
        <input type="submit" value="simpan">
    </form>
</body>
</html>