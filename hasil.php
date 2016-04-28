<!DOCTYPE HTML>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Boomer" />
    <link href="styleing.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="ajax.js"></script>        

	<title>Membuat Jumlah Input Otomatis</title>
</head>

<body>
<h4>Hasil dari Membuat Jumlah Input Otomatis</h4>
<?php
//kode penghitungan untuk perulangannya
$looping=$_POST['jumlah'];

for($i=0; $i<$looping; $i++){
    $ke=$i+1;
    //membuat deret metode post
    $varinput="input$ke";
    $varpost="$postmethod"+$ke;
    $varpost=$_POST[$varinput];
    //ahir deret metode

//menampilkan hasil input
echo "<span class='hasil'>$varpost</span>";
}
?>
<br /><br />
2014 &copy; Membuat Jumlah Input Otomatis
</body>
</html>