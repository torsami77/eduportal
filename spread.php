<?php
/*
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
$reader->setReadDataOnly(TRUE);
//$spreadsheet = $reader->load("test.xlsx");
*/

/*

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
//$sheet->setCellValue('A1', 'Hello World !');
//$sheet->setCellValue('A2', 'Hello Alexis !');
$spreadsheet->getActiveSheet()->setCellValueByColumnAndRow(1, 5, 'PhpSpreadsheet');

$writer = new Xlsx($spreadsheet);
$writer->save('hello world.xlsx');
*/
require __DIR__ . '/vendor/autoload.php';

try {
    $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load(__DIR__.'/file.zip');
    echo 'Your file is good.';
} catch (\Exception $e) {
    echo 'Your file is wrong!';
  }

$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
$reader->setReadDataOnly(TRUE);
$spreadsheet = $reader->load("hello world.xlsx");

$worksheet = $spreadsheet->getActiveSheet();
$rows = $worksheet->toArray();
foreach($rows as $rw){
  echo $rw[0];
  echo $rw[1];
  echo $rw[2];
  echo $rw[3];
  echo '</br>' ;
}

echo '<table>' . PHP_EOL;
foreach ($worksheet->getRowIterator() as $row) {
    echo '<tr>' . PHP_EOL;
    $cellIterator = $row->getCellIterator();
    $cellIterator->setIterateOnlyExistingCells(FALSE); // This loops through all cells,
                                                       //    even if a cell value is not set.
                                                       // By default, only cells that have a value
                                                       //    set will be iterated.
    foreach ($cellIterator as $cell) {
        echo '<td>' .
             $cell->getValue() .
             '</td>' . PHP_EOL;
    }
    echo '</tr>' . PHP_EOL;
}
echo '</table>' . PHP_EOL;


?>
