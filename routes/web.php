<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

use App\Models\Task;
use App\Http\Controllers\TypeController;
use App\Models\Type;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/categories',function(){
    $types=Type::where('UserID',auth()->id())->get();
    return view('categories',['types'=>$types]);

})->middleware(['auth', 'verified'])->name('categories');
Route::get('/dashboard', function () {
    $tasks=Task::where('UserID',auth()->id())->get();
    return view('dashboard', ['tasks' => $tasks]);
   
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/createtask', [TaskController::class, 'createtask']);
Route::post('/insert',[TaskController::class,'insert']);
Route::resource('tasks', TaskController::class);
Route::resource('types', TypeController::class);
Route::get('/showw/tasks/{id}',[TaskController::class,'show']);
Route::get('/editt/tasks/{id}',[TaskController::class,'edit']);
Route::post('/catcreate',[TypeController::class,'catcreate']);
Route::get('/catshow/types/{id}',[TypeController::class,'catshow']);
Route::get('/catedit/types/{id}',[TypeController::class,'catedit']);
Route::get('types/{id}', 'TypeController@show')->name('types.show');
Route::get('types/{id}', 'TypeController@edit')->name('types.show');
Route::put('/editinsert/{task}',[TaskController::class,'editinsert']);
Route::delete('/deletee/{task}', [TaskController::class, 'deletetask']);
Route::delete('/deleteet/{type}', [TypeController::class, 'deletetype']);
Route::get('/search',[TaskController::class,'search']);
Route::get('/showall',[TaskController::class,'showall']);
Route::get('/catsearch',[TypeController::class,'catsearch']);
Route::get('/catshowall',[TypeController::class,'catshowall']);

require __DIR__.'/auth.php';
