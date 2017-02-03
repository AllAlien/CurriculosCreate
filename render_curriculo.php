<?php
session_start();

use Dompdf\Dompdf;

include_once 'dompdf/autoload.inc.php';

$pdf = new Dompdf();

$pdf->loadHTML($_SESSION['conteudoCurriculo']);

$pdf->render();
$pdf->setPaper('A4", "landscape');
$pdf->stream(
			'meucurriculo', 

			array('Attachment' =>false)
	);
?>