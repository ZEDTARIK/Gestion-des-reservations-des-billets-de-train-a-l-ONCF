<?php
    require_once('./Db.php');
    $db  = new Db();
    $pdo = $db->connecter();
    require('fpdf.php');
    class PDF extends FPDF{} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
    <header>
        <div class="container">
            <nav class="navbar navbar-dark navbar-expand-sm bg-dark pl-5">
                <a class="text-white" style="text-decoration:none" href="#">
                    <h1 style="font-family:Georgia"> ONCF 
                        <span style="color:orange">.</span>
                    </h1>
                </a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="menu">
                    <ul class="navbar-nav ml-5">
                        <li class="nav-item">
                            <a class="nav-link" href="Acceuil.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Voyages.php">Trajets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Reservation.php">Reservation</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <?php if($_SERVER['REQUEST_METHOD'] === 'POST') : ?>
        <?php 
            if($pdo == null){}
            else{
                $voyageCode    = $_POST['voyageCode'];
                $date          = $_POST['dateVoyage'];
                $nombreBillets = $_POST['nbrBillets'];  
                $voyage = $db->chercherVoyage($pdo,$voyageCode);
                $villeDepart  = $voyage[0]['villeDepart'];
                $villeArrivee = $voyage[0]['villeArrivee'];
                $heureDepart  = $voyage[0]['heureDepart'];
                $prix  = floatval($voyage[0]['prixVoyage']) * floatval($nombreBillets);
            }
        ?>
        <div class="container">
            <table class="table my-5">
                <tbody>
                    <tr>
                        <td>Code Voyage</td>
                        <td><?php echo $voyageCode?></td>
                    </tr>
                    <tr>
                        <td>Ville Depart</td>
                        <td><?php echo $villeDepart?></td>
                    </tr>
                    <tr>
                        <td>Ville Arrivee</td>
                        <td><?php echo $villeArrivee?></td>
                    </tr>
                    <tr>
                        <td>Heure Depart</td>
                        <td><?php echo $heureDepart?></td>
                    </tr>
                    <tr>
                        <td>Date</td>
                        <td><?php echo $date?></td>
                    </tr>
                    <tr>
                        <td class="bg-success">Prix Total</td>
                        <td class="bg-success"><?php echo $prix?></td>
                    </tr>
                </tbody>
            </table>
            <form action="Transaction.php" method="POST">
                <input hidden type="text" name="codeVoyage" value="<?php echo $voyageCode ?>">
                <input hidden type="text" name="villeDepart" value="<?php echo $villeDepart ?>">
                <input hidden type="text" name="villeArrivee" value="<?php echo $villeArrivee?>">
                <input hidden type="text" name="heureDepart" value="<?php echo $heureDepart ?>">
                <input hidden type="text" name="dateVoyage" value="<?php echo $date?>">
                <input hidden type="text" name="prixVoyage" value="<?php echo $prix ?>">
                <button class="btn btn-primary">Payer</button>
            </form>
        </div>
        <?php else : ?>
            <div class="container">
                <p class="badge badge-danger p-2 mx-auto d-block w-50 my-5">Page N'existe Pas !</p>
            </div>
        <?php endif; ?>
    </main>
    <footer>
        <div class="container m-5 mx-auto text-center" style="background-color: #444">
            <h3 
                style="font-family:Georgia" 
                class="text-white">ONCF 
                <span style="color:orange;font-size:50">.</span>
            </h3>
            <div>Copyright © Tous droits reserves.</div>
		</div>
    </footer>
</body>
</html>
