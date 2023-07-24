<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <h1>INPUT DATA MAHASISWA</H1>

    <form method="POST" action="<?php echo site_url('process-form'); ?>">
        <label for="nama">nama :</label><br>
        <input type="text" id="nama" name="nama"><br>
        <label for="nim">nim :</label><br>
        <input type="text" id="nim" name="nim"><br>
        <label for="kelas">kelas :</label><br>
        <input type="text" id="kelas" name="kelas"><br>
        <label for="matkul">matkul :</label><br>
        <input type="text" id="matkul" name="matkul"><br>
        <label for="dosen">dosen :</label><br>
        <input type="text" id="dosen" name="dosen"><br>
        <label for="asprak">asprak :</label><br>
        <input type="text" id="asprak" name="asprak"><br>
    
        <input type="submit" value="submit">


</form>
    </body>
</html>