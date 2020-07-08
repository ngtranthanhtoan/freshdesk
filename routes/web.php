<?php 

use Illuminate\Support\Facades\Route;


Route::view('freshdesk/template', 'hapiwork-freshdesk::template.index');
Route::get('freshdesk/test', 'TestController@index');