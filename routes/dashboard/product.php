<?php

use App\Http\Controllers\market\ProductController;

Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    Route::get('product',[ProductController::class,'index'])->name('product.index');
});
