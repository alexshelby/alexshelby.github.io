<?php
include('./bd.php');
$name=$_POST['name'];$foto=$_POST['foto'];
 $result2 = mysql_query ("INSERT INTO foto (name,foto) VALUES('$name','foto')");
 if(!empty($result2)){echo "<div style='color:green;'>Сообщение отправлено</div>";}
?>