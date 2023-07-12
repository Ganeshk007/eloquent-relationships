<?php

use App\Models\HasManyThrough\Category;
use App\Models\HasManyThrough\Item;
use App\Models\ManyToMany\Customer;
use App\Models\ManyToMany\Role;
use App\Models\OneToMany\Comment;
use App\Models\OneToMany\Post;
use App\Models\OneToOne\Employee;
use App\Models\OneToOne\EmployeePhone;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/one-to-one', function () {
    // dd((Employee::with('phone')->find(1))->phone);

    dd((EmployeePhone::with('employee')->find(1))->employee);
});



Route::get('/one-to-many', function () {
    // dd((Post::with('comments')->find(1))->comments);

    dd((Comment::with('post')->find(1))->post);
});



Route::get('/many-to-many', function () {
    // dd((Customer::with('roles')->find(1))->roles);

    dd((Role::with('customers')->find(1))->customers);
});



Route::get('/has-many-through', function () {
    dd((Category::with('items')->find(1))->items);
});