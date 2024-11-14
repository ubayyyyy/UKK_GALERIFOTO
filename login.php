<!DOCTYPE html
>
<html
 lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>GalleryPhoto</title>
  <meta name="description" content="">
  <meta name="keywords" content="">


  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Cardo:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">


</head>

<body>
	<div class="kotak_login"></div>
		<p class="tulisan_login"> Silahkan Login</p>
			<form action="ceklogin.php" method="post" role="form">
				<label> Username</label>
				<input type="text" name="username" class="form_login" placeholder="Username" autocompleter="off">
				<label> Password</label>
				<input type="password" name="password" class="form_login" placeholder="Password" autocompleter="off">
				<input type="submit" name="tombol_login" value="login">
</form>
</div>
</body>
</html>