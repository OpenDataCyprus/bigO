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
        $this->file = $this->getFilePath();
        $this->parse($this->file);
    }

    public function parse($file){
        $this->excel = PHPExcel_IOFactory::load($file);

        $sheet = $this->excel->getActiveSheet();
        $offences = $this->getOffences($sheet);
        return $offences;
    }

    public function getFilePath($file = null)
    {
        if (isset($file)){
            return public_path($file);
        }
        return public_path('file.xlsx');
    }

    public function getValue($coordinate)
    {
        return $this->excel->getActiveSheet()->getCell($coordinate)->getValue();
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

    public function parseData()
    {
        return [
            'title' => $this->getValue('A1'),
            'data' => [
                [
                    'name' => $this->getValue('A4'),
                    'totals' => [
                    'K'=> $this->getValue('B4'),
                    'E'=> $this->getValue('C4'),
                    'Percentage'=> $this->getValue('E4'),
                ],
                    'cities' => [
                        [
                        'name'=> $this->getValue('B2'),
                        'K'=> $this->getValue('B4'),
                        'E'=> $this->getValue('C4'),
                        'Percentage'=> $this->getValue('D4'),

                    ],
                        [
                        'name'=> $this->getValue('E2'),
                        'K'=> $this->getValue('E4'),
                        'E'=> $this->getValue('F4'),
                        'Percentage'=> $this->getValue('G4'),

                    ],
                        [
                        'name'=> $this->getValue('H2'),
                        'K'=> $this->getValue('H4'),
                        'E'=> $this->getValue('I4'),
                        'Percentage'=> $this->getValue('J4'),

                    ],
                        [

                        'name'=> $this->getValue('K2'),
                        'K'=> $this->getValue('K4'),
                        'E'=> $this->getValue('L4'),
                        'Percentage'=> $this->getValue('M4'),

                    ],
                        [
                        'name'=> $this->getValue('N2'),
                        'K'=> $this->getValue('N4'),
                        'E'=> $this->getValue('O4'),
                        'Percentage'=> $this->getValue('P4'),

                    ],
                        [
                        'name'=> $this->getValue('Q2'),
                        'K'=> $this->getValue('Q4'),
                        'E'=> $this->getValue('R4'),
                        'Percentage'=> $this->getValue('S4'),

                    ],
                    ]
                ],
                [
                    'name' => $this->getValue('A5'),
                    'totals' => [
                        'K'=> $this->getValue('B5'),
                        'E'=> $this->getValue('C5'),
                        'Percentage'=> $this->getValue('E5'),
                    ],
                    'cities' => [
                        [
                            'name'=> $this->getValue('B2'),
                            'K'=> $this->getValue('B5'),
                            'E'=> $this->getValue('C5'),
                            'Percentage'=> $this->getValue('D5'),

                        ],
                        [
                            'name'=> $this->getValue('E2'),
                            'K'=> $this->getValue('E5'),
                            'E'=> $this->getValue('F5'),
                            'Percentage'=> $this->getValue('G5'),

                        ],
                        [
                            'name'=> $this->getValue('H2'),
                            'K'=> $this->getValue('H5'),
                            'E'=> $this->getValue('I5'),
                            'Percentage'=> $this->getValue('J5'),

                        ],
                        [
                            'name'=> $this->getValue('K2'),
                            'K'=> $this->getValue('K5'),
                            'E'=> $this->getValue('L5'),
                            'Percentage'=> $this->getValue('M5'),

                        ],
                        [
                            'name'=> $this->getValue('N2'),
                            'K'=> $this->getValue('N5'),
                            'E'=> $this->getValue('O5'),
                            'Percentage'=> $this->getValue('P5'),

                        ],
                        [
                            'name'=> $this->getValue('Q2'),
                            'K'=> $this->getValue('Q5'),
                            'E'=> $this->getValue('R5'),
                            'Percentage'=> $this->getValue('S5'),

                        ],
                    ]
                ],
            ]
        ];


    }
}