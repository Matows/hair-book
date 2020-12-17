<?php
session_start();
$_SESSION['idCompteConnecte']=1;
$_ROOT_URL = "/hairbook";

$conn = mysqli_connect("127.0.0.1:3308", "hairbook", "N9Ux46la", "hairbook");
$mdpint=$_POST['passwd'];
sha1($mdpint);
$user=$_POST['username'];

if(isset($_POST["username"]) and isset($_POST["passwd"]))
 {
   if (iSusernameInDB($_POST['username']))
   {
    echo "zeez";
     $sql="SELECT * FROM client WHERE username='$user'";
     
     mysqli_query($conn,$sql);
     $mdp=getMotDePass($user);
     if ($mdp==sha1($_POST['passwd'])) 
     {
       $erreur=" login réussi ! ";
      $_SESSION["connected"] = True;
      $rez=getID($_POST['username']);
      $_SESSION["idCompteConnecte"]=$rez;
      $_SESSION['username']=$_POST['username'];
      header('Location: https://sb.sinux.sh/hairbook/index.php?page=accueil');
    }
    else 
    {
      $erreur = " mot de passe incorrect ";
      $_SESSION["connected"]=False;
      header('Location: https://sb.sinux.sh/hairbook/index.php?page=compte');
     }
 }
}
else
{
 $erreur="Ce pseudo n'existe pas";  
}
 function iSusernameInDB($username)
{
  global $conn;
  $sql2="SELECT * FROM client";
  $res=mysqli_query($conn,$sql2);
  $tab=[];
  $tr=False;
  while($row=mysqli_fetch_assoc($res)){
    $tab[]=$row['username'];
  }
  foreach ($tab as $client => $username) {
    if ($username==$username){
      $tr=True;
    }
  }
return $tr;
}
function getID($username)
{
  global $conn;
  $sql="SELECT client.id FROM client WHERE client.username = '$username';";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row["id"];
}
function getMotDePass($username)
{
    global $conn;
  $sql="SELECT client.passwd FROM client WHERE client.username = '$username';";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row["passwd"];
}
