<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;


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
Route::get("/lang/{lang}" ,function($lang){
    if ($lang =="ar")
        session()->put("lang" , "ar");
    else
        session()->put("lang" , "en");
        return redirect()->back();
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');




Route::get('/auth/redirect', function () {
    return Socialite::driver('github')->redirect();
});

Route::get('/auth/callback', function () {
    $githubUser = Socialite::driver('github')->user();

    // $user = User::where('github_id', $githubUser->id)->first();
    $user = User::where('email', $githubUser->email)->first();

    if ($user) {
        // $user->update([
        //     'github_token' => $githubUser->token,
        //     'github_refresh_token' => $githubUser->refreshToken,
        // ]);
    } else {
        // dd($githubUser);
        $user = User::create([
            'name' => $githubUser->name,
            'email' => $githubUser->email,
            'password' => Hash::make(Str::random(24)),
        //     // 'github_id' => $githubUser->id,
        //     // 'github_token' => $githubUser->token,
        //     // 'github_refresh_token' => $githubUser->refreshToken,
        ]);
    }
    event(new Registered($user));

    Auth::login($user);

    return redirect(RouteServiceProvider::HOME);
});


// Route::get('/', function () {
//     return view('welcome');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
