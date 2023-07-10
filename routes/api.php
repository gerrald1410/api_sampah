<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampahController;
use App\Models\Sampah;




Route::get('/sampah', [SampahController::class,'index']);
Route::post('/sampah/store',[SampahController::class,'store'])->name('store');
Route::get('/generate-token',[SampahController::class,'generateToken']);
Route::get('/sampah/{id}', [SampahController::class, 'show']);
Route::get('/sampah/edit/{id}', [SampahController::class, 'edit']); //ed
Route::patch('/sampah/update/{id}',[SampahController::class, 'update']);
Route::delete('/sampah/delete/{id}',[SampahController::class, 'destroy']);
Route::get('/sampah/show/trash', [SampahController::class, 'trash']);
Route::get('/sampah/trash/restore/{id}', [SampahController::class, 'restore']);
Route::get('/sampah/trash/delete/permanent/{id}', [SampahController::class, 'permanentDelete']); 