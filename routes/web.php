<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Because this is a SPA, there will be one route that matches everything!
|
*/

Auth::routes();

Route::get('/{any}', 'AppController@index')->where('any', '.*'); // Anything that comes after the initial /, inside the variable any, match anything zero or more times (everything)
