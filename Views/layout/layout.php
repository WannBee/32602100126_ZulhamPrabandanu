<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lilita+One&family=Press+Start+2P&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/style.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Bab3</title>
</head>
<body>
  <div class="container">
  <div class="navbar">
    <div class="navbar-icons">
      <i class="fa-solid fa-circle-user fa-2xl"></i>
    </div>
    <div class="navbar-page">
    <ul type="none">
      <li><a href="#">HOME</a></li>
      <li><a href="#">ABOUT</a></li>
      <li><a href="#">SKILLS</a></li>
      <li><a href="#">SOSMED</a></li>
      <li><a href="#">PORTOFOLIO</a></li>
      </ul>
    </div>
    <div class="navbar-sosmed">
      <ul type="none">
        <li><i class="fa-brands fa-facebook" style="color: #4581e8;"></i>
        <li><i class="fa-brands fa-instagram" style="color: #f44425;"></i>
        <li><i class="fa-brands fa-linkedin" style="color: #382e84;"></i>
        <li><i class="fa-brands fa-github" style="color: #1d193e;"></i>
        <li><i class="fa-brands fa-whatsapp" style="color: #08b442;"></i>
    </div>
  </div>
  </div>
  <main>
  <?= $this->renderSection('content')?>
  </main>
</body>
</html>