<?php
require_once '../../../outil/TCPDF/tcpdf.php';
$total_comptes=$_GET['compte'];
$total_residences=$_GET['residence'];
$total=$total_comptes+$total_residences;
$prenom=$_GET['prenom'];
$nom=$_GET['nom'];
$pdf=new TCPDF();
     $pdf->AddPage();
     
     $pdf->SetFont('helvetica', 'B', 20);
     $pdf->Cell(0, 15, 'Informations du Compte de '. $prenom .' '.$nom, 0, 1, 'C');
     
     $pdf->SetFont('helvetica', 'B', 12);
     $pdf->Cell(80, 10, 'Type', 1);
     $pdf->Cell(50, 10, 'Montant Total', 1);
     $pdf->Ln();
     
     $pdf->SetFont('helvetica', '', 12);
    $pdf->Cell(80, 10, 'Total des Comptes', 1);
    $pdf->Cell(50, 10, number_format($total_comptes, 2) . ' EUR', 1);
    $pdf->Ln();
    $pdf->Cell(80, 10, 'Total des Résidences', 1);
    $pdf->Cell(50, 10, number_format($total_residences, 2) . ' EUR', 1);
    $pdf->Ln();
    $pdf->Cell(80, 10, 'Montant Total', 1);
    $pdf->Cell(50, 10, number_format($total, 2) . ' EUR', 1);
    $pdf->Ln();
     
     
     
     ob_end_clean();
     
     $pdf->Output('Information_Compte', 'D');
     
     exit;
