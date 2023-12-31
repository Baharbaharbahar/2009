<?php
$cin=$_POST["cin"];
$nom=$_POST["nom"];
$pre=$_POST["pre"];
$choix=$_POST["choix"];
$q2=$_POST["q2"];
$q31=$_POST["q31"];
$q32=$_POST["q32"];
$q33=$_POST["q33"];
$q34=$_POST["q34"];
$q35=$_POST["q35"];
require('connexion.php');
if (isset($_POST["cin"])){
    $npermis=$_POST["cin"];
}
$req="select * from examen where cin='$cin'";
$rep=mysql_query($req)or die (mysql_error());
if (mysql_num_rows($req)==1)
   echo "num cin existe deja";
else 
{
    $req="insert into examen values ('$cin','$nom','$pre','$choix','$q2','$q31','$q32','$q33','$q34','$q35');";
    $rep=mysql_query($req)or die (mysql_error());
    // if (mysql_num_rows()==-1)
    // echo "examen ajoutee avec success ";
}
if (isset($_POST["choix"])){
    $npermis=$_POST["choix"];
}




mysql_close();
?>