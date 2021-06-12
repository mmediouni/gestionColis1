<?php
$idcon=mysql_connect("localhost","root","");
$okdec=mysql_close($idcon);
if ($okdec)
echo"deconnexion reusite <br/>";
else
echo"echec de la deconnexion <br/>";
?>