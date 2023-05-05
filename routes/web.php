<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */


Route::get('/locale/{locale}',  'App\Http\Controllers\LanguagesController@changeLocale')->name('locale');
Route::post('/send-main-form', 'App\Http\Controllers\sendController@submit')->name('sendMainForm');

Route::get('/', function () {
    App::setLocale('ua');
    return view('home');
  })->name('index.lang');
  Route::get('/ua', function () {
    App::setLocale('ua');
    return  redirect('/');
  });
  
  Route::get('/{locale}', function ($locale) {
    if (!in_array($locale, ['ua', 'ru'])) {
  
      abort(404);
    } else if ($locale == 'ua') {
  
      App::setLocale('ua');
      return view('home');
    } else if ($locale == 'ru') {
  
      App::setLocale('ru');
      return view('home');
    }
  })->name('home');

  Route::get('/{locale}/thanks-page', function ($locale) {
    if (!in_array($locale, ['ua', 'ru'])) {
  
      abort(404);
    } else if ($locale == 'ua') {
  
      App::setLocale('ua');
      return view('thanks');
    } else if ($locale == 'ru') {
  
      App::setLocale('ru');
      return view('thanks');
    }
  })->name('thanks');

  /*CATALOG*/
  Route::get('/{locale}/heat-pumps-nibe-catalog', function ($locale) {
    if (!in_array($locale, ['ua', 'ru'])) {
  
      abort(404);
    } else if ($locale == 'ua') {
  
      App::setLocale('ua');
      return view('nibe/nibe-catalog');
    } else if ($locale == 'ru') {
  
      App::setLocale('ru');
      return view('nibe/nibe-catalog');
    }
  })->name('nibe-catalog');

  Route::get('/{locale}/heat-pumps-liveheat-catalog', function ($locale) {
    if (!in_array($locale, ['ua', 'ru'])) {
  
      abort(404);
    } else if ($locale == 'ua') {
  
      App::setLocale('ua');
      return view('liveheat/liveheat-catalog');
    } else if ($locale == 'ru') {
  
      App::setLocale('ru');
      return view('liveheat/liveheat-catalog');
    }
  })->name('liveheat-catalog');
  /*CATALOG*/

/*PRODUCT ELTOPEKO*/
Route::get('/{locale}/heat-pumps-liveheat-catalog/fwwhcd150c', function ($locale) {
  if (!in_array($locale, ['ua', 'ru'])) {

    abort(404);
  } else if ($locale == 'ua') {

    App::setLocale('ua');
    return view('liveheat/fwwhcd150c');
  } else if ($locale == 'ru') {

    App::setLocale('ru');
    return view('liveheat/fwwhcd150c');
  }
})->name('fwwhcd150c');

Route::get('/{locale}/heat-pumps-liveheat-catalog/fwwihcd080c', function ($locale) {
  if (!in_array($locale, ['ua', 'ru'])) {

    abort(404);
  } else if ($locale == 'ua') {

    App::setLocale('ua');
    return view('liveheat/fwwihcd080c');
  } else if ($locale == 'ru') {

    App::setLocale('ru');
    return view('liveheat/fwwihcd080c');
  }
})->name('fwwihcd080c');
/*PRODUCT ELTOPEKO*/

/*PRODUCTS NIBE*/
  Route::get('/{locale}/heat-pumps-nibe-catalog/nibe-s1255', function ($locale) {
    if (!in_array($locale, ['ua', 'ru'])) {
  
      abort(404);
    } else if ($locale == 'ua') {
  
      App::setLocale('ua');
      return view('nibe/s1255/s1255');
    } else if ($locale == 'ru') {
  
      App::setLocale('ru');
      return view('nibe/s1255/s1255');
    }
  })->name('nibe-s1255');

  Route::get('/{locale}/heat-pumps-nibe-catalog/nibe-s1155', function ($locale) {
    if (!in_array($locale, ['ua', 'ru'])) {
  
      abort(404);
    } else if ($locale == 'ua') {
  
      App::setLocale('ua');
      return view('nibe/s1155/s1155');
    } else if ($locale == 'ru') {
  
      App::setLocale('ru');
      return view('nibe/s1155/s1155');
    }
  })->name('nibe-s1155');

  Route::get('/{locale}/heat-pumps-nibe-catalog/nibe-f1255', function ($locale) {
    if (!in_array($locale, ['ua', 'ru'])) {
  
      abort(404);
    } else if ($locale == 'ua') {
  
      App::setLocale('ua');
      return view('nibe/f1255/f1255');
    } else if ($locale == 'ru') {
  
      App::setLocale('ru');
      return view('nibe/f1255/f1255');
    }
  })->name('nibe-f1255');
  Route::get('/{locale}/heat-pumps-nibe-catalog/nibe-f1155', function ($locale) {
    if (!in_array($locale, ['ua', 'ru'])) {
  
      abort(404);
    } else if ($locale == 'ua') {
  
      App::setLocale('ua');
      return view('nibe/f1155/f1155');
    } else if ($locale == 'ru') {
  
      App::setLocale('ru');
      return view('nibe/f1155/f1155');
    }
  })->name('nibe-f1155');
  /*PRODUCTS NIBE*/


/*PRODUCT NIBE*/
  Route::get('/{locale}/heat-pumps-nibe-catalog/nibe-s1255/nibe-s1255-6kw-400V', function ($locale) {
    if (!in_array($locale, ['ua', 'ru'])) {
  
      abort(404);
    } else if ($locale == 'ua') {
  
      App::setLocale('ua');
      return view('nibe/s1255/s1255-6kw-400V');
    } else if ($locale == 'ru') {
  
      App::setLocale('ru');
      return view('nibe/s1255/s1255-6kw-400V');
    }
  })->name('nibe-s1255-6kw-400V');

  Route::get('/{locale}/heat-pumps-nibe-catalog/nibe-s1255/nibe-s1255-12kw-400V', function ($locale) {
    if (!in_array($locale, ['ua', 'ru'])) {
  
      abort(404);
    } else if ($locale == 'ua') {
  
      App::setLocale('ua');
      return view('nibe/s1255/s1255-12kw-400V');
    } else if ($locale == 'ru') {
  
      App::setLocale('ru');
      return view('nibe/s1255/s1255-12kw-400V');
    }
  })->name('nibe-s1255-12kw-400V');

  Route::get('/{locale}/heat-pumps-nibe-catalog/nibe-s1255/nibe-s1255-16kw-400V', function ($locale) {
    if (!in_array($locale, ['ua', 'ru'])) {
  
      abort(404);
    } else if ($locale == 'ua') {
  
      App::setLocale('ua');
      return view('nibe/s1255/s1255-16kw-400V');
    } else if ($locale == 'ru') {
  
      App::setLocale('ru');
      return view('nibe/s1255/s1255-16kw-400V');
    }
  })->name('nibe-s1255-16kw-400V');

  Route::get('/{locale}/heat-pumps-nibe-catalog/nibe-s1255/nibe-s1255-r6kw-400V', function ($locale) {
    if (!in_array($locale, ['ua', 'ru'])) {
  
      abort(404);
    } else if ($locale == 'ua') {
  
      App::setLocale('ua');
      return view('nibe/s1255/s1255-r6kw-400V');
    } else if ($locale == 'ru') {
  
      App::setLocale('ru');
      return view('nibe/s1255/s1255-r6kw-400V');
    }
  })->name('nibe-s1255-r6kw-400V');

/*PRODUCT NIBE*/

  Route::get('/{locale}/form', function ($locale) {
    if (!in_array($locale, ['ua', 'ru'])) {
  
      abort(404);
    } else if ($locale == 'ua') {
  
      App::setLocale('ua');
      return view('form');
    } else if ($locale == 'ru') {
  
      App::setLocale('ru');
      return view('form');
    }
  })->name('form');