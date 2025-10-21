<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ReportController;

// Exemplo de rota: GET /api/reports/pdf ou GET /api/reports/csv ou /api/reports/json
Route::get('/reports/{type}', [ReportController::class, 'download']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
})  ;