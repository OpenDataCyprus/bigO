<?php
/**
 * Created by PhpStorm.
 * User: threeel
 * Date: 9/10/16
 * Time: 8:48 PM
 */

namespace App\Services;


class ODataService
{

    public function __construct(){

    }

    public function get()
    {
        $file = storage_path('app/public/entries.json');

        $odata = json_decode(file_get_contents($file),true);
        return collect($odata['entries']);
    }

}