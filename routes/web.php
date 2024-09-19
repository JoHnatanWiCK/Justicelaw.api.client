<?php


use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\DropdownController;
use App\Http\Controllers\TypeDocumentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\LawyerController;
use App\Http\Controllers\LawyerProfileController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\VerificationLawyerController;
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

// Route::get('/', function () {
//     return view('informacion.derechosTrabajadores');
// });


Route::get('/home', function () {
    return view(view: 'home');
})->name('home');

Route::get('/login', function () {
    return view(view: 'login.login');
})->name('login');

Route::get('/sobreNosotros', function () {
    return view(view: 'sobreNosotros');
})->name('sobreNosotros');

Route::get('/foro', function () {
    return view(view: 'foro.foro');
})->name('foro');

Route::get('/perfilCreado', function () {
    return view(view: 'perfil-usuario.perfilCreado');
})->name('perfilCreado');

Route::get('/crearPerfil', function () {
    return view(view: 'perfil-usuario.crearPerfil');
})->name('crearPerfil');

Route::get('/editarPerfil', function () {
    return view(view: 'perfil-usuario.editarPerfil');
})->name('editarPerfil');

Route::get('/derechosTrabajadores', function () {
    return view('informacion.derechosTrabajadores');
});

Route::get('/notification', function () {
    return view('notification.notification');
});

Route::get('/noti-lawyer', function () {
    return view('noti-lawyer.noti-lawyer');
});

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});

Route::get('/adminprofile', function () {
    return view('adminprofiles.admin-profiles');
});

Route::get('/configadmin', function () {
    return view('config-admin.config-admin');
});

Route::get('/configadmin2', function () {
    return view('config-admin.config-admin2');
});

Route::get('/configadmincont', function () {
    return view('config-admin.config-admincont');
});

Route::get('/calendar', function () {
    return view('calendar.calendar');
});

Route::get('/perfilabogado', function () {
    return view('verperfil.perfil-abogado');
});

Route::get('/reseñaPublicada', function () {
    return view('verperfil.reseñaPublicada');
});

Route::get('typeDocuments', [TypeDocumentController::class, 'index'])->name( 'typeDocuments.index');
Route::post('typeDocuments', [TypeDocumentController::class, 'store'])->name('typeDocuments.store');
Route::get('typeDocuments/{typeDocument}', [TypeDocumentController::class, 'show'])->name('typeDocuments.show');
Route::put('typeDocuments/{typeDocument}', [TypeDocumentController::class, 'update'])->name('typeDocuments.update');
Route::delete('typeDocuments/{typeDocument}', [TypeDocumentController::class, 'destroy'])->name('typeDocuments.delete');

Route::get('countries', [DropdownController::class, 'indexCountry'])->name('api.v1.countries.index');
Route::post('countries', [DropdownController::class, 'storeCountry'])->name('api.v1.countries.store');
Route::get('countries/{country}', [DropdownController::class, 'showCountry'])->name('api.v1.countries.show');
Route::put('countries/{country}', [DropdownController::class, 'updateCountry'])->name('api.v1.countries.update');
Route::delete('countries/{country}', [DropdownController::class, 'destroyCountry'])->name('api.v1.countries.delete');

Route::get('states', [DropdownController::class, 'indexState'])->name('api.v1.states.index');
Route::post('states', [DropdownController::class, 'storeState'])->name('api.v1.states.store');
Route::get('states/{state}', [DropdownController::class, 'showState'])->name('api.v1.states.show');
Route::put('states/{state}', [DropdownController::class, 'updateState'])->name('api.v1.states.update');
Route::delete('states/{state}', [DropdownController::class, 'destroyState'])->name('api.v1.states.delete');

Route::get('cities', [DropdownController::class, 'indexCity'])->name('api.v1.cities.index');
Route::post('cities', [DropdownController::class, 'storeCity'])->name('api.v1.cities.store');
Route::get('cities/{city}', [DropdownController::class, 'showCity'])->name('api.v1.cities.show');
Route::put('cities/{city}', [DropdownController::class, 'updateCity'])->name('api.v1.cities.update');
Route::delete('cities/{city}', [DropdownController::class, 'destroyCity'])->name('api.v1.cities.delete');

Route::get('users', [UserController::class, 'index'])->name('api.v1.users.index');
Route::post('users', [UserController::class, 'store'])->name('api.v1.users.store');
Route::get('users/{user}', [UserController::class, 'show'])->name('api.v1.users.show');
Route::put('users/{user}', [UserController::class, 'update'])->name('api.v1.users.update');
Route::delete('users/{user}', [UserController::class, 'destroy'])->name('api.v1.users.delete');

Route::get('usersProfile', [UserProfileController::class, 'index'])->name('api.v1.usersProfile.index');
Route::post('usersProfile', [UserProfileController::class, 'store'])->name('api.v1.usersProfile.store');
Route::get('usersProfile/{userProfile}', [UserProfileController::class, 'show'])->name('api.v1.usersProfile.show');
Route::put('usersProfile/{userProfile}', [UserProfileController::class, 'update'])->name('api.v1.usersProfile.update');
Route::delete('usersProfile/{userProfile}', [UserProfileController::class, 'destroy'])->name('api.v1.usersProfile.delete');

Route::get('administrators', [AdministratorController::class, 'index'])->name('api.v1.administrators.index');
Route::post('administrators', [AdministratorController::class, 'store'])->name('api.v1.administrators.store');
Route::get('administrators/{administrator}', [AdministratorController::class, 'show'])->name('api.v1.administrators.show');
Route::put('administrators/{administrator}', [AdministratorController::class, 'update'])->name('api.v1.administrators.update');
Route::delete('administrators/{administrator}', [AdministratorController::class, 'destroy'])->name('api.v1.administrators.delete');


Route::get('lawyer', [LawyerController::class, 'index'])->name('lawyer.index');
Route::post('lawyer', [LawyerController::class, 'store'])->name('lawyer.store');
Route::get('lawyer/{lawyer}', [LawyerController::class, 'show'])->name('lawyer.show');
Route::put('lawyer/{lawyer}', [LawyerController::class, 'update'])->name('lawyer.update');
Route::delete('lawyer/{lawyer}', [LawyerController::class, 'destroy'])->name('lawyer.delete');


Route::get('lawyerProfile', [LawyerProfileController::class, 'index'])->name('lawyerProfile.index');
Route::post('lawyerProfile', [LawyerProfileController::class, 'store'])->name('lawyerProfile.store');
Route::get('lawyerProfile/{lawyerProfile}', [LawyerProfileController::class, 'show'])->name('lawyerProfile.show');
Route::put('lawyerProfile/{lawyerProfile}', [LawyerProfileController::class, 'update'])->name('lawyerProfile.update');
Route::delete('lawyerProfile/{lawyerProfile}', [LawyerProfileController::class, 'destroy'])->name('lawyerProfile.delete');

Route::get('verificationLawyer', [VerificationLawyerController::class, 'index'])->name('verificationLawyer.index');
Route::post('verificationLawyer', [VerificationLawyerController::class, 'store'])->name('verificationLawyer.store');
Route::get('verificationLawyer/{verificationLawyer}', [VerificationLawyerController::class, 'show'])->name('verificationLawyer.show');
Route::put('verificationLawyer/{verificationLawyer}', [VerificationLawyerController::class, 'update'])->name('verificationLawyer.update');
Route::delete('verificationLawyer/{verificationLawyer}', [VerificationLawyerController::class, 'destroy'])->name('verificationLawyer.delete');



Route::get('notifications', [NotificationController::class, 'index'])->name('api.v1.notifications.index');
Route::post('notifications', [NotificationController::class, 'store'])->name('api.v1.notifications.store');
Route::get('notifications/{notification}', [NotificationController::class, 'show'])->name('api.v1.notifications.show');
Route::put('notifications/{notification}', [NotificationController::class, 'update'])->name('api.v1.notifications.update');
Route::delete('notifications/{notification}', [NotificationController::class, 'destroy'])->name('api.v1.notifications.delete');

Route::get('searchs', [SearchController::class, 'index'])->name('searchs.index');
Route::post('searchs', [SearchController::class, 'store'])->name('searchs.store');
Route::get('searchs/{search}', [SearchController::class, 'show'])->name('searchs.show');
Route::put('searchs/{search}', [SearchController::class, 'update'])->name('searchs.update');
Route::delete('searchs/{search}', [SearchController::class, 'destroy'])->name('searchs.delete');
