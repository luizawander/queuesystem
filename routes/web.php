<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    try{
        DB::connection()->getPdo();
        echo "Hello World";
    }catch(Exception $e){
        return "Error: " . $e->getMessage();
    }
});
