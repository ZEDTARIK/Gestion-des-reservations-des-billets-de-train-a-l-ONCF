<?php
    require('fpdf.php');
    class PDF extends FPDF{}
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $voyageCode    = $_POST['codeVoyage'];
        $date          = $_POST['dateVoyage'];
        $villeDepart   = $_POST['villeDepart'];
        $villeArrivee  = $_POST['villeArrivee'];
        $heureDepart   = $_POST['heureDepart'];
        $prix          = $_POST['prixVoyage'];
        $pdf = new PDF();
        $pdf->SetFont('Arial','',14);
        $pdf->AddPage();
        $pdf->text(10,10,'Code Voyage');
        $pdf->text(45,10,':');
        $pdf->text(50,10,$voyageCode);
        $pdf->text(10,20,'Ville Depart');
        $pdf->text(45,20,':');
        $pdf->text(50,20,$villeDepart);
        $pdf->text(10,30,'Ville Arrive');
        $pdf->text(45,30,':');
        $pdf->text(50,30,$villeArrivee);
        $pdf->text(10,40,'Heure Depart');
        $pdf->text(45,40,':');
        $pdf->text(50,40,$heureDepart);
        $pdf->text(10,50,'Date Voyage');
        $pdf->text(45,50,':');
        $pdf->text(50,50,$date);
        $pdf->text(10,60,'Prix Total');
        $pdf->text(45,60,':');
        $pdf->text(50,60,$prix);
        $pdf->Output();
    }
?>
