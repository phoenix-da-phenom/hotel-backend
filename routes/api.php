<?php

use Illuminate\Support\Facades\Route;

Route::get('/rooms', function () {
    return response()->json([
        'rooms' => [
            ['id' => 1, 'name' => 'Deluxe Room'],
            ['id' => 2, 'name' => 'Executive Suite'],
        ]
    ]);
});
