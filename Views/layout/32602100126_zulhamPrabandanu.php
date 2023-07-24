<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layoutingt</title>
</head>
<body>
    <div class="navbar">
        <div class="navbar-page">
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="#">PORTOFOLIO</a></li>
                <li><a href="#">CONTACT</a></li>
            </ul>
        </div>
        <div class="navbar-sosmed">
            <ul>
                <li>Linkedin</li>
                <li>whatsapp</li>
                <li>Github</li>
                <li>instagram</li>
            </ul>
        </div>
    </div>

    <div class="banner">
        <span class="name">
            Zulham Prabandanu
        </span><br>
        <span class="description">
            Mahasiswa angkatan 2021
        </span>
    </div>
    <?= $this->rendersection("content")?>
</body>
</html>