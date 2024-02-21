<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// ===============================etqan_visitors ===============================
// get visitors count
Route::get('/etqan_visitors', function () {
    try {
        $visitor = \App\Models\EtqanVisitor::first();
        $data = [
            'message' => 'success',
            'count' => $visitor ? $visitor->count : 0, // Ensure $visitor is not null
        ];
        return response()->json($data, 200);
    } catch (\Exception $ex) {
        $data = [
            'message' => $ex->getMessage(),
        ];
        return response()->json($data, 500);
    }
});

// increament visitors count
Route::get('/etqan_visitors/increment', function () {
    try {
        $visitor = \App\Models\EtqanVisitor::first();
        $visitor->count = $visitor->count + 1;
        $visitor->save();
        $data = [
            'message' => 'success',
            'count' => $visitor->count,
        ];
        return response()->json($data, 200);
    } catch (\Exception $ex) {
        $data = [
            'message' => $ex->getMessage(),
        ];
        return response()->json($data, 500);
    }
});
