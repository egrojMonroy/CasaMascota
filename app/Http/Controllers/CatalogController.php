<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Catalog;
class CatalogController extends Controller
{
    //
//echo("jorge marica :v");


    public function create()
    {

        /*try {
            DB::beginTransaction();
            $catalog = new Catalog();
            $catalog ->name= "Jorge";
            $catalog -> description="marica";
            $catalog->save();
            DB::commit();
        } catch (\Exception $ex) {
            DB::rollback();
            echo("Error" . $ex);

        }*/


    }
}