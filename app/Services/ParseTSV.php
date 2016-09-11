<?php
/**
 * Created by IspiraDio.
 * User: IspiraDio
 * Date: 10/10/16
 * Time: 10:10 PM
 */

namespace App\Services;


class ParseTSV
{

    public function TsvToJson($filename)
    {
        $file = storage_path('app/public/'.$filename);
        $csv= file_get_contents($file);
        $array = array_map("str_getcsv", explode("\n", $csv));        
        
        
        $atr= Array();

         

        for($i=0;$i<count($array);$i++){
            for($j=0;$j<count($array[$i]);$j++){
                $tmp = explode("   ",$array[$i][$j]);
                $a=0;
                for($k=0;$k<count($tmp);$k++){

                   if ($tmp[$k]!=null) {
                        $art[$i][$a]=$tmp[$k];
                        $a++;
                    } 
                }
            }
        }

        $json='{"data": [';

        for ($i=0; $i <count($art) ; $i++) { 
         for ($j=1; $j <count($art) ; ) { 
            $json.='{';
            for ($k=0; $k <count($art[$i]) ;) { 
                $json.= '"'.preg_replace('/\s+/', '',strtolower($art[0][$k])).'":"'.preg_replace('/\s+/', '',$art[$j][$k]).'"';
                $k++;
                if ($k<count($art[$i])) {
                    $json.=",";
                }
            }
            $json.= '}';
            $j++;
            if ($j<count($art)) {
                    $json.=",";
            }
         }
        $json.=']}';
         return $json;
        }
 
       


    }


}