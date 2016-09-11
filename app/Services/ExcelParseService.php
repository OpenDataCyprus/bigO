<?php
/**
 * Created by PhpStorm.
 * User: threeel
 * Date: 9/11/16
 * Time: 3:25 AM
 */

namespace App\Services;


use PHPExcel_IOFactory;

class ExcelParseService
{

    private $excel;
    private $file;
    private $cities = [
        'Λευκωσία','Λεμεσός','Αμμόχωστος','Πάφος','Λάρνακα','Μόρφου',
    ];
    private $total_keyword = 'ΟΛΙΚΟ';
    private $case_types = [
        'K' =>'',
        'E' => '',
        'percentage' =>''
    ];

    private $offence = [
        'bounds' => [
            'upper'=> [
                'index' => null,
                'keyword' => 'Αδικήματα',
            ],
            'lower'=> [
                'index' => null,
                'keyword' => 'ΟΛΙΚΟ',
            ]
        ],
        'data' => []
    ];


    public function __construct(){
        $this->file = public_path('file.xlsx');
        $this->parse($this->file);
    }

    public function parse($file){
        $this->excel = PHPExcel_IOFactory::load($file);

        $sheet = $this->excel->getActiveSheet();
        $offences = $this->getOffences($sheet);
        return $offences;
    }


    private function getOffences($sheet){

        for ($i = 1; $i <= 30;$i++){
            $index = 'A'.$i;
            $cell_value = $sheet->getCell($index)->getValue();
            if ($cell_value == null && $i > 5 ){
                exit;
            }

            if ($cell_value === $this->offence['bounds']['upper']['keyword'] ) {
                $this->offence['bounds']['upper']['index'] = $index;
            }


            if ($cell_value === $this->offence['bounds']['lower']['keyword'] ) {
                $this->offence['bounds']['lower']['index'] = $index;
            }

            if (isset($this->offence['bounds']['upper']['index']) && $this->offence['bounds']['upper']['index'] !== $index){
                if ($cell_value != null){
                    if (!isset($this->offence['bounds']['lower']['index'])){

                        $data = [
                            'coordinate' => $index,
                            'row' => $i,
                            'column' => 'A',
                            'value' =>$cell_value
                        ];
                        $this->offence['data'] = $data;

                    }

                }

            }

            return $this->offence;
        }
    }

    public function rowParse($sheet)
    {
        return [
            'title'
        ];


    }
}