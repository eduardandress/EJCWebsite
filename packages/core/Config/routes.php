<?php 
Route::group(['middleware' => 'checkInstallation'], function(){
  Route::get('/', array('uses'=>'CoreController@index') )->name('landing_page');

  Route::get('demos',  array('uses'=>'CoreController@demos') )->name('Mini Demos');


});