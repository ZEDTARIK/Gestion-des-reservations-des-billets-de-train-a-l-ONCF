<?php

    require_once('./Db.php');
    $db  = new Db();
    $pdo = $db->connecter();
    if($pdo == null){}
    else{
        $villesDepart = $db->villesDepart($pdo);
        $villesArrivee = $db->villesArrivee($pdo);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulter Les Trajets</title>
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
                        <li class="nav-item active">
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
            $voyages = $db->chercherVoyages($pdo,$_POST['vdp'],$_POST['vda']);
        ?>
            <div class="container">
                <div class="row"> 
                    <section  class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                <th>Code voyage</th>
                                <th>Départ</th>
                                <th>Arrivée</th>
                                <th>Heur départ</th>
                                <th>Prix</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($voyages as $voyage):?>
                                    <tr>
                                        <td><?php echo $voyage['codeVoyage'] ?></td>
                                        <td><?php echo $voyage['villeDepart'] ?></td>
                                        <td><?php echo $voyage['villeArrivee'] ?></td>
                                        <td><?php echo $voyage['heureDepart'] ?></td>
                                        <td><?php echo $voyage['prixVoyage'] ?></td>
                                    </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </section>
                </div>
            </div>
        <?php else: ?>
            <div class="container">
                <div class="row"> 
                    <section  class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <Form action = "<?php $_SERVER['PHP_SELF'] ?>" method="POST"> 
                            <div  style="padding-top:15%;font-size: 60px;text-align: center">
                                <h2><strong>Liste des Trajets</strong></h2>
                                Choisir une Ville de départ: 
                                <select class="form-control" name="vdp">
                                    <?php
                                        foreach ($villesDepart as $ville) {
                                            echo "<option value='{$ville['villeDepart']}'>{$ville['villeDepart']}</option>";
                                        }
                                    ?>
                                </select>
                                Choisir une Ville d'arrivée: 
                                <select class="form-control" name="vda">
                                    <?php
                                        foreach ($villesArrivee as $ville) {
                                            echo "<option value='{$ville['villeArrivee']}'>{$ville['villeArrivee']}</option>";
                                        }
                                    ?>
                                </select>
                                <input 
                                    type="submit" 
                                    class="btn btn-info mt-3"  
                                    name="action"   
                                    value="Afficher"/>
                            </div>
                        </form>    
                    </section>
                </div>
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
