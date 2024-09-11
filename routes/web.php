<?php

use App\Http\Controllers\LawyerController;
use App\Http\Controllers\LawyerProfileController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TypeDocumentController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('typeDocuments', [TypeDocumentController::class, 'index'])->name('typeDocuments.index');
Route::post('typeDocuments', [TypeDocumentController::class, 'store'])->name('typeDocuments.store');
Route::get('typeDocuments/{typeDocument}', [TypeDocumentController::class, 'show'])->name('typeDocuments.show');
Route::put('typeDocuments/{typeDocument}', [TypeDocumentController::class, 'update'])->name('typeDocuments.update');
Route::delete('typeDocuments/{typeDocument}', [TypeDocumentController::class, 'destroy'])->name('typeDocuments.delete');



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
Route::post('notifications', [NotificationController::class, 'store'])->name('notifications.store');
Route::get('notifications/{notification}', [NotificationController::class, 'show'])->name('notifications.show');
Route::put('notifications/{notification}', [NotificationController::class, 'update'])->name('notifications.update');
Route::delete('notifications/{notification}', [NotificationController::class, 'destroy'])->name('notifications.delete');

Route::get('searchs', [SearchController::class, 'index'])->name('searchs.index');
Route::post('searchs', [SearchController::class, 'store'])->name('searchs.store');
Route::get('searchs/{search}', [SearchController::class, 'show'])->name('searchs.show');
Route::put('searchs/{search}', [SearchController::class, 'update'])->name('searchs.update');
Route::delete('searchs/{search}', [SearchController::class, 'destroy'])->name('searchs.delete');
