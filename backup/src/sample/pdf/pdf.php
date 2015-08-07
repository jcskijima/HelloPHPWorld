<?php
set_include_path(get_include_path().PATH_SEPARATOR.$_SERVER['DOCUMENT_ROOT'].'/HelloWorld/application/include/FPDF');
set_include_path(get_include_path().PATH_SEPARATOR.$_SERVER['DOCUMENT_ROOT'].'/HelloWorld/application/config/');
require_once('const.php');
require_once('mbfpdf.php');

//$filepath = $_SERVER['DOCUMENT_ROOT'].'/HelloWorld/temp/TEXT_DATA.txt';
$filepath = 'temp/TEXT_DATA.txt';
$out = file_get_contents($filepath, false);

$pdf=new MBFPDF();
$pdf->AddMBFont(GOTHIC ,'SJIS');
$pdf->AddMBFont(PGOTHIC,'SJIS');
$pdf->Open();
$pdf->AddPage();
$pdf->SetFont(GOTHIC,'',20);
$pdf->Write(10,$out);
$pdf->SetFont(PGOTHIC,'',24);
$pdf->Write(10,$out);
$pdf->Output();

