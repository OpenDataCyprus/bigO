<?php
/**
 * Created by IspiraDio.
 * User: IspiraDio
 * Date: 10/10/16
 * Time: 10:10 PM
 */

namespace App\Services;


class ParseCSV
{

	public function CsvToJson()
	{
		$file = storage_path('app/public/RAOB_CSV_Athalassa_000.csv');
		$csv= file_get_contents($file);
		 
		$Data = str_getcsv($csv, "\n"); //parse the rows
foreach($Data as &$Row) $Row = str_getcsv($Row, ";");
 
print_r($Row);
	}







}