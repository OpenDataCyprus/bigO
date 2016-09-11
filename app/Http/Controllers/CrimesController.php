<?php

namespace App\Http\Controllers;

use App\Services\ExcelParseService;
use Illuminate\Http\Request;

use App\Http\Requests;

class CrimesController extends Controller
{

    public function all()
    {

        return (new ExcelParseService())->parseData();

    }

}
