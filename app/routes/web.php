<?php

use Illuminate\Support\Facades\Route;

Route::get("/empresa",[EmpresaController::class,"index"]);
Route::post("/empresa",[EmpresaController::class,"store"]);
Route::get("/empresa/{id}",[EmpresaController::class,"show"]);
Route::patch("/empresa/{id}",[EmpresaController::class,"update"]);
Route::delete("/empresa/{id}",[EmpresaController::class,"destroy"]);
