<!DOCTYPE HTML>
<html>
<head>

	<meta charset="UTF-8">
	<title>Monuments de Paris</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--Ajout de Bootstrap à partir du CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>	

	<!--Ajout de W3.CSS à partir du CDN-->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
	
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	

	<!--Pour utiliser les icônes Font Awesome avec Bootstrap 4 -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

	<!--Fichier CSS de la page-->
    <link rel="stylesheet" href="script.css" />
	<?php
		session_start();
		require("model.php");
    $_SESSION['listeEmployes']= employes_findAll();
    $listeEmployes = $_SESSION['listeEmployes'];
    
	?>
</head>
<body>

	<br>
	
		<header class="w3-container w3-grey">
		<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <p id="titre">DAWM - ASNIERES</p>
	</div>
	<div>
    <ul class="nav navbar-nav">
	  <li class="active"><a href="index.php">Accueil</a></li>
	  <li class="active"><a href="listerEmployes.php">Employés</a></li>
	</ul>
	</div>
	
  </div>
</nav>

		</header>

        <body style="text-align: center; margin: 200px;" >
        
        <div class='container'>
	<h1>Liste Des Employés</h1>

	
    <table style="border: 1px" class="w3-table ">
        <thead style = "center; border-color: black; background: black;">
            <th style= "text-align: center; color: white;">Id</th>
            <th style= "text-align: center; color: white;">Prénom</th>
            <th style= "text-align: center; color: white;">Date De Naissance</th> 
            <th style= "text-align: center; color: white;">Fonction</th> 
            <th style= "text-align: center; color: white;">Email</th> 
            <th style= "text-align: center; color: white;">Salaire</th>
            <th style= "text-align: center; color: white;">actions</th>             
        </thead>
        <tbody style = "text-align: center; border-color: black; background: white;">

        <?php 
						if ( sizeof($listeEmployes) > 0 ) {
							foreach ($listeEmployes as $employes ) {
					?>
            <tr>
                <td><?php echo $employes['id'];?></td>
                <td><?php echo $employes['prenom'];?></td>
                <td><?php echo $employes['date_de_naissance'];?></td>
                <td><?php echo $employes['fonction'];?></td>
                <td><?php echo $employes['email'];?></td>
                <td><?php echo $employes['salaire'];?></td>
                <td><a href=""><button class="w3-btn w3-blue w3-round-large w3-hover-green w3-small"><i class="fa fa-eye" ></i>&nbsp;&nbsp;Voir</button></a>&nbsp;&nbsp;
							      <a href=""><button class="w3-btn w3-yellow w3-round-large w3-hover-green w3-small"><i class="fa fa-pencil-square-o" ></i>&nbsp;&nbsp;Modifier</button></a>&nbsp;&nbsp;
							      <a href=""><button class="w3-btn w3-red w3-round-large w3-hover-green w3-small"><i class="fa fa-trash" ></i>&nbsp;&nbsp;Supprimer</button></a>&nbsp;&nbsp;
						    </td>
                         
            </tr>           
            <?php
						} } else { ?>
							<tr>
								<td> </td>
								<td><label class="w3-text-red">La liste est vide. Aucun monument saisi</label></td>
								<td></td>
							</tr>
					<?php		
						}
					?>       
        </tbody>
        

    </table>
    </div>
		<footer class="w3-grey w3-padding-large">
			gdjsjkkhkdkh
		</footer>	
		<br>			
	</div>
</body>
</html>










