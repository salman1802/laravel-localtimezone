<?php

use Illuminate\Support\Facades\Route;
use Iroid\LocalTimezone\Http\Controllers\LocalTimezoneController;

Route::post('set-timezone', [LocalTimezoneController::class, 'setTimezone'])->name('set-timezone');
