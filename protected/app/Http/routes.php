<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () { 


	// untuk mengarhakan ke dalam controller registercontrooler dengan fungsi index
	Route::get('/register', ['uses' => 'RegisterController@index', 'as' => 'register.index']);
	//untuk mengarahkan ke dalam controller register dengan fungsi store
	Route::post('/register', ['uses' => 'RegisterController@store', 'as' => 'register.store']);

	// untuk login
	Route::get('/login', [
			'uses' => 'loginController@index',
			'as' =>	'login.index'
		]);
	Route::get('/dashboard', function (){
		return view('dashboard');
	});

	Route::get('/pendidikan', function(){
		return view('ccpendidikan.index');
	});

	Route::get('/pendidikan/form', function(){
		return view('ccpendidikan.buat');
	});

	Route::get('/pekerjaan', function(){
		return view('ccpekerjaan.index');
	});

	Route::get('/pekerjaan/form', function(){
		return view('ccpekerjaan.buat');
	});

	Route::get('/materi', function(){
		return view('ccmateri.index');
	});

	Route::get('/materi/form', function(){
		return view('ccmateri.buat');
	});

});

// mendeklarasikan letak model pada App/Registrasi dengan nama registrasi.php
// use App\Registrasi;
// // mendeklarasikan variable input
// use Illuminate\Support\Facades\Input;
// use Illuminate\Http\Request;
// Route::post('/register', function()
// {
//     // 1. setting validasi
//     $rules = array(
//     	"email"                 => "required|email|unique:users,email",
//         "password"              => "required|min:6",
//         "password_confirmation" => "same:password",
//     	);

//     $comandor = Validator::make(Input::all(), $rules);

//     // 2a. jika semua validasi terpenuhi simpan ke database
//     if ($comandor->fails())
// 	{
// 	  	return Redirect::to("register")
//         ->withErorrs($comandor, 'register');

// 	}
//     // 2b. jika tidak, kembali ke halaman form registrasi
//     else
//     {
//         $game = new Registrasi;
//         $game->email    = Input::get('email');
//         $game->password = Hash::make(Input::get('password'));
//         $game->save();

//         return Redirect::to("register");
//     }
// });


