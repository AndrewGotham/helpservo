<?php

use App\Http\Controllers\Frontend\TicketController;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';

Route::get('/', [TicketController::class, 'create']);
Route::get('/home', function () {
    $route = Gate::denies('dashboard_access') ? 'admin.tickets.index' : 'admin.home';
    if (session('status')) {
        return redirect()->route($route)->with('status', session('status'));
    }

    return redirect()->route($route);
});

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\Frontend\LanguageController@switchLang']);

//Route::get('/login', [UserController::class,'login'])->name('login');
//Route::post('/login', [UserController::class,'login'])->name('login');

// Auth::routes(['register' => false]);

Route::post('tickets/media', [TicketController::class, 'storeMedia'])->name('tickets.storeMedia');
Route::post('tickets/comment/{ticket}', [TicketController::class, 'storeComment'])->name('tickets.storeComment');
Route::resource('tickets', TicketController::class)->only(['show', 'create', 'store']);


