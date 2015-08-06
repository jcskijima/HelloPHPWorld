<?php
set_include_path(get_include_path().PATH_SEPARATOR.$_SERVER['DOCUMENT_ROOT'].'/HelloWorld/application/include/PHPExcel');
set_include_path(get_include_path().PATH_SEPARATOR.$_SERVER['DOCUMENT_ROOT'].'/HelloWorld/application/config/');
require_once('const.php');
require_once('PHPExcel.php');

$_dir = $_SERVER['DOCUMENT_ROOT'].TEMP_DIR;

/* 読込 */
/*
$xls = PHPExcel_IOFactory::load($_dir.'/EXCEL_DATA.xlsx');

$xls->setActiveSheetIndex(0);
$sheet = $xls->getActiveSheet();

var_dump($sheet->getCell('B2').$sheet->getCell('C2'));
*/

/* 新規作成 */
$xls = new PHPExcel();

$sheet = $xls->setActiveSheetIndex(0);
$sheet->setCellValue('A1', '氏名', false);
$sheet->setCellValue('A2', '木島　仁', false);
$sheet->setCellValue('B1', '電話番号', false);
$sheet->setCellValue('B2', '03-5298-8868', false);
$sheet->setCellValue('C1', '更新日', false);
$sheet->setCellValue('C2', date('y/m/d'), false);

$sheet->getStyle('A1:C1')->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);

$color = new PHPExcel_Style_Color();
$color->setRGB('ffcccc');
$color2 = new PHPExcel_Style_Color();
$color2->setRGB('ff6666');

$sheet->getStyle('A1:C1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_GRADIENT_LINEAR);
$sheet->getStyle('A1:C1')->getFill()->setStartColor($color);
$sheet->getStyle('A1:C1')->getFill()->setEndColor($color2);

$writer = PHPExcel_IOFactory::createWriter($xls, 'Excel2007');
$writer->save($_dir.'/WriteSample.xlsx');


