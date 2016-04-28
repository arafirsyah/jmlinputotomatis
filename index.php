<!DOCTYPE HTML>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Boomer" />
    <link href="styleing.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="ajax.js"></script>        

	<title>Membuat Jumlah Input Otomatis</title>
</head>

<body>
<h4>Membuat Jumlah Input Otomatis</h4>
<div>
<div>Isi angka untuk jumlah inputan</div>
<input type="text" placeholder="Jumlah input" name="jumInput" id="jumInput" onkeyup="ajaxInput(this.value)"/>
</div>
<div class="form">
<form action="hasil.php" method="POST">
<div id="tambahInput"></div>
</form>
</div>
2014 &copy; Membuat Jumlah Input Otomatis
</body>
</html>