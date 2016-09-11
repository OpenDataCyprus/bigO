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
        $art = array("isobariclevel", "temperaturecelsius", "dewpointcelsius", "winddirection","windspeed","geodynamicsheight");
        $json='{"data": [';
        

        for ($i=8; $i <count($Data) ; $i++) {
        	$row = explode(",",$Data[$i]); 
        	for ($j=0; $j <count($row) ; ) { 
        	 	$json.='"'.$art[$j].'":"'.$row[$j].'"';
        	 	$j++;
        	 	if ($j<count($row)) {
                    $json.=",";
                }
        	 }
        	 $json.= '}';
        	 $i++;
            if ($i<count($Data)) {
                    $json.=",";
            }
        }
        $json.=']}';
        // $json=json_encode($Data);
 
        return $json;

	}







}