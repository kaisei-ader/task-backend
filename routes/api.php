<?php

use App\Task;

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

Route::get('task', function () {
    return response()->json(Task::all());
});
Route::post('task', function (Request $request) {
    return Task::create([
        'name' => $request->name,
    ]);
});
Route::delete('task/{id}', function ($id) {
    Task::find($id)->delete();
});
Route::patch('task/{id}', function (Request $request, $id) {
    Task::find($id)->update([
        $request->key => $request->value
    ]);
});
