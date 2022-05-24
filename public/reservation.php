<?php



 

  $servername ="localhost";
  $username="root";
  $password="";
  $dbname="resatest";

  try{
    $conn = new PDO ("mysql:host=$servername;dbname=$dbname",$username,$password);
   
  }

  catch (PDOException $e){
    echo "la connexion a echoué:" .$e->getMessage();

  }

  if(isset($_POST['envoyer']))
  {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $tel = $_POST['tel'];
    $date = $_POST['jour'];
    $heure = $_POST['heure'];
    $nb = $_POST['nb'];

    $sql =("INSERT INTO `resa1`(`nom`,`prenom`,`mail`,`tel`,`date`,`heure`,`nombre de personnes`)VALUES(:nom,:prenom,:mail,:tel,:jour,:heure,:nb)");
   $stmt = $conn->prepare($sql);
   $stmt->bindParam(':nom',$nom);
   $stmt->bindParam(':prenom',$prenom);
   $stmt->bindParam(':mail',$mail);
   $stmt->bindParam(':tel',$tel);
   $stmt->bindParam(':jour',$date);
   $stmt->bindParam(':heure',$heure);
   $stmt->bindParam(':nb',$nb);


       $stmt->execute();
  };
  
?>
