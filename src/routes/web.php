<?php

use Illuminate\Support\Facades\Route;
use Toluwani\BlogToolkits\Http\Controllers\BlogController;





Route::group(['prefix'=>'posts','middleware'=>'request_logger'], static function (){
    Route::get('',[BlogController::class,'index']);
    Route::get('{post_id}',[BlogController::class,'edit']);
    Route::get('create',[BlogController::class,'create']);

});
