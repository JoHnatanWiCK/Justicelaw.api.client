<?php




use App\Http\Controllers\NotificationController;
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

























Route::get('notifications', [NotificationController::class, 'index'])->name('notifications.index');
Route::post('notifications', [NotificationController::class, 'store'])->name('notifications.store');
Route::get('notifications/{notification}', [NotificationController::class, 'show'])->name('notifications.show');
Route::put('notifications/{notification}', [NotificationController::class, 'update'])->name('notifications.update');
Route::delete('notifications/{notification}', [NotificationController::class, 'destroy'])->name('notifications.delete');
