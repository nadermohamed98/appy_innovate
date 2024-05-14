<?php

use App\Http\Controllers\BranchController;
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

Route::get('/', [BranchController::class,'all']);
Route::get('branches/addBranch',[BranchController::class,'addBranch']);
Route::put('branches/updateBranch',[BranchController::class,'updateBranch'])->name('branches.updateBranch');

