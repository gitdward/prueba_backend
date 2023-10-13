<?php

use App\Http\Controllers\TaskController;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/ping', function (Request $request) {
    $con = DB::connection('mongodb');
    $msg = 'Mongo accesible';
    try {
        $con->command(['ping' => 1]);
    } catch (\Exception $e) {
        $msg = 'Mongo inaccesible';
    }
    return ['msg' => $msg];
});

Route::apiResource('tasks', TaskController::class);
