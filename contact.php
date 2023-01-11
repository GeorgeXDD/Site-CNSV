<?php

$con = mysqli_connect('localhost', 'root', '','contact');


$nume = $_POST['nume'];
$email = $_POST['email'];
$subiect = $_POST['subiect'];
$mesaj = $_POST['mesaj'];


$sql = "INSERT INTO `contact` (`id`, `nume`, `email`, `subiect`, `mesaj`) VALUES ('0', '$nume', '$email', '$subiect', '$mesaj')";

$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "";
}

?>
<br>
<div id="form-message-success">
    Mesajul dumneavoastra a fost trimis cu succes, va rugam sa asteptati raspunsul nostru!
</div>

<meta http-equiv="refresh" content="2;url=contact.html"" />
