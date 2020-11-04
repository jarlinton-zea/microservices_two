<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Task;

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

/***
 * Users
 */
Route::get('/Users', function () {
    return response()->json(User::get());
});

Route::get('/Users/{id}', function ($id) {
    return response()->json(User::find($id));
});

Route::delete('/Users/{id}', function ($id) {
    return response()->json(['success' => User::find($id)->delete()]);
});

Route::put('/Users/{id}', function (Request $request,$id) {
    $user = User::find($id);
    $user->name = $request->input("name");
    return response()->json(['success' => $user->save()]);
});

Route::post('/Users', function (Request $request) {
    $user = User::create(request()->validate([
        'name' => 'required'
    ]));
    return response()->json(['success' => $user],201);
});

/***
 * Users Task
 */
Route::get('/Tasks', function () {
    return response()->json(Task::get());
});

 Route::get('/Tasks/{id}', function ($id) {
    return response()->json(Task::find($id));
});

Route::get('/Tasks/userTask/{user_id}', function ($user_id) {
    return response()->json(Task::where('user_id', $user_id)->get());
});

Route::put('/Tasks/{id}', function (Request $request,$id) {
    $task = Task::find($id);
    $task->description = $request->input("description");
    $task->state = $request->input("state");
    $task->user_id = $request->input("user_id");
    return response()->json(['success' => $task->save()]);
});

Route::post('/Tasks', function (Request $request) {
    $task = Task::create(request()->validate([
        'description' => 'required',
        'state' => 'required',
        'user_id' => 'required'
    ]));
    return response()->json(['success' => $task],201);
});
