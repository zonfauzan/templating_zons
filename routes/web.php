<?php

use App\Http\Controllers\AkunController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KelasController;
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

// Route::get('/akun', function () {
//     return ('<h1>Media Online</h1>
//     <h3>Sosial Media Developer</h3>
//     <p>Belajar dan berbagi agar hidup menjadi lebih baik</p>
//     <h4>Benefit Join di Media Online</h4>
//     <ul>
//         <li>Mendapatkan motivasi dari sesama Developer</li>
//         <li>Sharing knowledge</li>
//         <li>Dibuat oleh calon web developer terbaik</li>
//     </ul>
//     <h4>Cara Bergabung ke media online</h4>
//     <ol>
//         <li>Mengunjunig website ini</li>
//         <li>Mendaftarkan di
//             <a href="form.html"> Form Sign Up </a></li>
//         <li>Selesai</li>
//     </ol>');
// });

// Route::get('/akun/create', function () {
//     return ('<h1>Buat Account Baru</h1>
//     <h4>Sign Up Form</h4>
//     <form action="welocome.html" method="post">
//         <label for="first-name">First Name : </label>
//         <br>
//         <input type="text" name="first-name" id="first-name" class="name" placeholder="Jon">
//         <br>
//         <label for="last-name">Last Name :</label>
//         <br>
//         <input type="text" name="last-name" id="last-name">
//         <br>
//         <label for="gender">Gender :</label>
//         <br>
//         <input type="radio" name="gender" id="">Male
//         <br> 
//         <input type="radio" name="gender" id="">Female
//         <br>
//         <label for="Nationatity">Nationality</label>
//         <br>
//         <select name="Nationatity" id="Nationatity">
//             <option value="wna">WNI</option>
//             <option value="wni">WNA</option>
//         </select>
//         <br>
//         <label for="language">Bahasa</label>
//         <br>
//         <input type="checkbox" name="language" id="">Bahasa Indonesia
//         <br>
//         <input type="checkbox" name="language" id="">English
//         <br>
//         <input type="checkbox" name="language" id="">Other
//         <br>
//         <label for="bio">Bio</label><br>
//         <textarea name="bio" id="bio" cols="30" rows="10"></textarea>
//         <br>
//         <input type="submit" value="Sign Up">

//     </form>');
// });

// Route::get('/akun', [AkunController::class,'index']);

// Route::get('/akun/create', [AkunController::class,'form']);

// show
Route::get('/akun', [AccountController::class,'index'])->name('indexAccount');
Route::get('/akun/create', [AccountController::class,'create'])->name('createAccount');
Route::get('/akun/show', [AccountController::class,'show'])->name('showAccount');

// master-blade
Route::get('/', [AccountController::class,'master']);

Route::get('/data-table', [AccountController::class,'data'])->name('createAkun');
Route::get('/table', [AccountController::class,'table'])->name('table');

// Route::get('/student', [SiswaController::class, 'index'])->name('studentIndex');
// Route::get('/student/create', [SiswaController::class, 'create'])->name('studentCreate');
// Route::post('/student', [SiswaController::class, 'store'])->name('studentStore');
// Route::get('/student/{id}', [SiswaController::class, 'show'])->name('studentShow');
// Route::get('/student/{id}/edit', [SiswaController::class, 'edit'])->name('studentEdit');
// Route::put('/student/{id}', [SiswaController::class, 'update'])->name('studentUpdate');
// Route::delete('/student/{id}', [SiswaController::class, 'destroy'])->name('studentDestroy');

//route dengan grup
// Route::controller(SiswaController::class)->name(function () {
// Route::get('/student', 'index')->name('studentIndex');
// Route::get('/student/create', 'create')->name('studentCreate');
// Route::post('/student', 'store')->name('studentStore');
// Route::get('/student/{id}', 'show')->name('studentShow');
// Route::get('/student/{id}/edit', 'edit')->name('studentEdit');
// Route::put('/student/{id}', 'update')->name('studentUpdate');
// Route::delete('/student/{id}', 'destroy')->name('studentDestroy');
// });

//route dengan resouce
Route::resource('student', SiswaController::class);

Route::resource('kelas', KelasController::class);
