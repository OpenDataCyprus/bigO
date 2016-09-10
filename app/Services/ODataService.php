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

    public function all()
    {
        $file = storage_path('app/public/all_categorized.json');

        $odata = json_decode(file_get_contents($file),true);

        $odata =  $odata['category'];
        return collect($odata);
    }

    public function get()
    {
        $file = storage_path('app/public/all_categorized.json');

        $odata = json_decode(file_get_contents($file),true);

        $odata =  $odata['category'];
        return collect($odata)->pluck('entries');
    }

    public function categories(){
        $file = storage_path('app/public/categories.json');

        $odata = json_decode(file_get_contents($file),true);


        $odata =  collect($odata['categories']);

        return $odata;
    }

}