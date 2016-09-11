<?php

namespace App\Http\Controllers;

use App\Services\ParseCSV;
use App\Services\ParseTSV;
use Illuminate\Http\Request;

use App\Http\Requests;

class WeatherController extends Controller
{
    public function generic()
    {
        return (new ParseCSV())->CsvToJson();
    }

    public function genericCity($city)
    {
        $template = '_2016091100.tsv';

        $file = strtoupper($city) . $template;
        return (new ParseTSV())->TsvToJson($file);
    }
}
