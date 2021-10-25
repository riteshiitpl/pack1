<?php
use Invoidea\SimpleContact\Http\Controllers\SimpleFormController;

Route::group(['middleware' => ['web']],function(){

    Route::get('testwork',[SimpleFormController::class,'index']);
    Route::post('form-store',[SimpleFormController::class,'store'])->name('form-store');

});