<?php


  function affichageReservation (){

      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "reservation_ilotdelacorniche";
      
      try {
          $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      } catch (PDOException $e) {
          echo "la connexion a echoué:" . $e->getMessage();
      }
  
      $sql = "SELECT * FROM resarvations";
  
      $reservations = $conn->prepare($sql);
      $reservations->execute();
      $results = $reservations->fetchAll();
  
  
  
  // permet de mettre les dates au format "FR"
  setlocale(LC_TIME, 'fr_FR.utf8', 'Fra');
  
  
  if (isset($_POST['valider'])) {
  
      // je récupère la date de l'input
      $pDate = $_POST['dateReservation'];
  
  
      foreach ($results as $result) {
  
          $resultDate=  $result['date'];
  
          if ($pDate === $resultDate) {
  
              // date au format "FR"
              $jour = strftime('%d-%m-%Y',strtotime($result['date']));
              
  
              echo '<p>Nom : ' . $result['nom'] . '</p>';
              echo '<p>Prénom : ' . $result['prenom'] . '</p>';
              echo '<p>Nombre de personne : ' . $result['nombre de personnes'] . '</p>';
              echo '<p> Date de réservation : ' . $jour . '</p>';
              echo '<p> Date de réservation : ' . $result['heure'] . '</p>';
          }
      }
  }
  
  } $servername ="localhost";
  $username="root";
  $password="";
  $dbname="resatest";

  try{
    $conn = new PDO ("mysql:host=$servername;dbname=$dbname",$username,$password);
   }

  catch (PDOException $e){
    echo "la connexion a echoué:" .$e->getMessage();

  }


  

    $sql ="SELECT * FROM `resa1`";




$users = $conn->prepare($sql);
$users->execute();
$datas = $users->fetchAll();



foreach($datas as $data){
echo $data['prenom'];
echo $data['nom'];
echo $data['tel'];
echo $data['mail'];
echo $data['date'];
echo $data['heure'];
echo $data['nombre de personnes'];


// var_dump( $data['nom']);

};




?>



<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>L'ilôt de la Corniche</title>
    <link
      href="https://fonts.googleapis.com/css?family=Rock+Salt"
      rel="stylesheet"
      type="text/css"
    />
    
  </head>
  <body>
    <header>
      <div class="header-background">
        <div class="logo-overlay">
          <div class="logo"></div>
        </div>
      </div>
    </header>

    <section class="accueil">
      <h2>Réservations par dates</h2>

      
        <caption></caption>
        <table>
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Mail</th>
            <th scope="col">Numero de telephone</th>
            <th scope="col">Date de réservation</th>
            <th scope="col">Heure de réservation</th>
            <th scope="col">Nombre de personnes</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?php echo $data['id'];?></td>
            <td><?php echo $data['nom'];?></td>
            <td><?php echo $data['prenom'];?></td>
            <td><?php echo $data['mail'];?></td>
            <td><?php echo $data['tel'];?></td>
            <td><?php echo $data['date'];?></td>
            <td><?php echo $data['heure'];?></td>
            <td><?php echo $data['nombre de personnes'];?></td>
          </tr>
        </tbody>
        <tfoot>
          <tr></tr>
        </tfoot>
        </table>





    </section>

    <div class="home"><a href="index.php">Home</a></div>

    <!--  <section class="agenda">
      <h2>Agenda Borderline</h2>
    </section>
 -->
    
  </body>
<style>

  body{
    background: rgb(246, 133, 167) 
  }
  
table {
  table-layout: fixed;
  width: 100vw;
  border-collapse: collapse;
  border: 3px solid purple;
  color: rgb(0, 0, 0);
}

thead th:nth-child(1) {
  width: 10%;
}

thead th:nth-child(2) {
  width: 20%;
}

thead th:nth-child(3) {
  width: 15%;
}

thead th:nth-child(4) {
  width: 70%;
}
thead th:nth-child(5) {
  width: 35%;
}
thead th:nth-child(6) {
  width: 35%;
}
thead th:nth-child(7) {
  width: 35%;
}
thead th:nth-child(8) {
  width: 35%;
}

tbody td {
  text-align: center;
}

tfoot th {
  text-align: right;
}

tbody tr:nth-child(odd) {
  background-color: #ffffff;
}

tbody tr:nth-child(even) {
  background-color: #e495e4;
}

tbody tr {
  background-image: url(noise.png);
}

table {
  background-color: #ff33cc;
}

thead,
tfoot {
  background: url(leopardskin.jpg);
  color: white;
  text-shadow: 1px 1px 1px black;
}

thead th,
tfoot th,
tfoot td {
  background: linear-gradient(
    to bottom,
    rgba(0, 0, 0, 0.1),
    rgba(0, 0, 0, 0.5)
  );
  border: 3px solid purple;
}
h2{
  text-align: center;
  color: antiquewhite;
}

</style>



</html>
