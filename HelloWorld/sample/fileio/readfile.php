<?php

const TEMP_DIR  = '/HelloWorld/temp';
const FILE_NAME = '/CSV_DATA.csv';

$filepath = $_SERVER['DOCUMENT_ROOT'].TEMP_DIR.FILE_NAME;

/* ******************************************** */
/* ファイル名の出力方法                         */
/* ******************************************** */
echo basename($filepath).'<br>';
echo basename($filepath, '.csv').'<br>';
echo filesize($filepath).'<br>';
echo '<hr>';

/* ******************************************** */
/* ファイルの読込チェック方法                   */
/* ******************************************** */
if (!file_exists($filepath)) {
	echo 'ファイルが存在しません。ファイル=「'.$filepath.'」';
	return false;
}
if (!is_readable($filepath)) {
	echo 'ファイルを読み込むことができません。ファイルへのアクセス権を確認してください。ファイル=「'.$filepath.'」';
	return false;
}

/* ******************************************** */
/* ファイルの一括読込方法                      */
/* ******************************************** */
echo file_get_contents($filepath, false);  // 第二引数はincludeパスから読み込む場合はtrue
echo '<br>';

/* @readfile() 関数も似たような動きをする */

echo '<hr>';

/* ******************************************** */
/* ファイルの1行毎の読込方法 1                  */
/* ******************************************** */
$lines = file($filepath);

if(!$lines) {
    echo 'ファイルの読込に失敗しました。';
    return false;
}

foreach($lines as $line_num => $line) {
	echo $line_num.'行目:'.$line.'<br>';
}

echo '<hr>';

/* ******************************************** */
/* ファイルの1行毎の読込方法 2                  */
/* ******************************************** */
$file_handler = fopen($filepath, "r");

while (!feof($file_handler)) {
    echo fgets($file_handler).'<br>';
}

echo '<hr>';

fseek($file_handler, 0);

while (!feof($file_handler)) {
	$line = fgets($file_handler);
	$cols = (preg_split('/[,]+/', $line));
	foreach ($cols as $col) {
		echo $col.'<br>';
	}
}

fclose($file_handler);