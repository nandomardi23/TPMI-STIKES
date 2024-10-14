<?php

use App\Http\Controllers\Backend\Organisasi\JabatanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('backend.dashboard.index');
});
Route::resource('/jabatan',JabatanController::class);