<?php

require_once('database.php');
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
/**
 *
 */
class import
{

  function __construct()
  {

  }

  function importToExcel($form)
  {
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    $highestRow = $sheet->getHighestRow();
    $highestRow++;
    $sheet->setCellValue('A'.$highestRow, $form['cloudamp__data__c']);
    $sheet->setCellValue('B'.$highestRow, $form['firstName']);
    $sheet->setCellValue('C'.$highestRow, $form['lastName']);
    $sheet->setCellValue('D'.$highestRow, $form['address']);
    $sheet->setCellValue('E'.$highestRow, $form['city']);
    $sheet->setCellValue('F'.$highestRow, $form['state']);
    $sheet->setCellValue('G'.$highestRow, $form['zip']);
    $sheet->setCellValue('H'.$highestRow, $form['email']);
    $sheet->setCellValue('I'.$highestRow, $form['phone']);
    $sheet->setCellValue('J'.$highestRow, $form['bedrooms']);
    $sheet->setCellValue('K'.$highestRow, $form['fullBaths']);
    $sheet->setCellValue('L'.$highestRow, $form['frequency']);
    $sheet->setCellValue('M'.$highestRow, $form['hear']);
    $sheet->setCellValue('N'.$highestRow, $form['promoCode']);

    $writer = new Xlsx($spreadsheet);
    $writer->save('estimate.xlsx');

  }

  function importToDatabase($form)
  {
    $database = new database();
    $conn =$database->databaseConnection();

    $sql = "INSERT INTO data (cloudamp__data__c, firstName, lastName, address, city, state, zip, email, phone, bedrooms, fullBaths, frequency, hear, promoCode)
    VALUES ('".$form['cloudamp__data__c']."','".$form['firstName']."','".$form['lastName']."','".$form['address']."','".$form['city']."','".$form['state']."','".$form['zip']."','".$form['email']."','".$form['phone']."','".$form['bedrooms']."','".$form['fullBaths']."','".$form['frequency']."','".$form['hear']."','".$form['promoCode']."')";

    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
  }
}




 ?>
