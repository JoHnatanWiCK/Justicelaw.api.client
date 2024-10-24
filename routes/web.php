<?php


use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\ConsultingController;
use App\Http\Controllers\DateController;
use App\Http\Controllers\DropdownController;
use App\Http\Controllers\ForumCategoryController;
use App\Http\Controllers\TypeDocumentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\LawyerController;
use App\Http\Controllers\LawyerProfileController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\VerificationLawyerController;
use App\Http\Controllers\AreaLawyerController;
use App\Http\Controllers\OverhaulReviewController;
use App\Http\Controllers\ReviewController;
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


Route::get('/', function () {
    return view(view: 'home');
})->name('home');

Route::get('/homeLogin', function () {
    return view(view: 'homeLogin');
})->name('homeLogin');

Route::get('/login', function () {
    return view(view: 'login.login');
})->name('login');

Route::get('/registro', function () {
    return view(view: 'registro.registro');
})->name(name: 'registro');

Route::get('/sobreNosotros', function () {
    return view(view: 'sobreNosotros');
})->name('sobreNosotros');


Route::get('/historial', function () {
    return view(view: 'historial.historial');
})->name('historial');

Route::get('/historialAbogado', function () {
    return view(view: 'historial.historialAbogado');
})->name('historialAbogado');


Route::get('/configuracion', function () {
    return view(view: 'configuracion.configuracion');
})->name('configuracion');


Route::get('/configuracionAbogado', function () {
    return view(view: 'configuracion.configuracionAbogado');
})->name('configuracionAbogado');



Route::get('/olvidarContraseña', function () {
    return view(view: 'olvido-contraseña.olvidoContraseña');
})->name('olvidarContraseña');


Route::get('/verificarAbogado', function () {
    return view(view: 'verificacion.verificacionUno');
})->name('verificarAbogado');

Route::get('/verificarAbogadoDos', function () {
    return view(view: 'verificacion.verificacionDos');
})->name('verificarAbogadoDos');

Route::get('/verificarAbogadoTres', function () {
    return view(view: 'verificacion.verificacionTres');
})->name('verificarAbogadoTres');

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

Route::get('/crearPerfilAbogado', function () {
    return view(view: 'perfil-abogado.crearPerfil');
})->name('perfilCreado.lawyer');

Route::get('/perfilAbogadoCreado', function () {
    return view(view: 'perfil-abogado.perfilCreado');
})->name('perfil.abogado.creado');


Route::get('/notification', function () {
    return view('notification.notification');
})->name('notificaciones');;

Route::get('/noti-lawyer', function () {
    return view('noti-lawyer.noti-lawyer');
})->name('noti-lawyer');

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
})->name('calendar'); 


Route::get('/perfilabogado', function () {
    return view('verperfil.perfil-abogado');
});

Route::get('/reseñaPublicada', function () {
    return view('verperfil.reseñaPublicada');
});

Route::get('/informaciones', function () {
    return view('informacion.informaciones');
})->name('informaciones');

Route::get('/informacionesLaboral', function () {
    return view('informacion.informacionesLaboral');
})->name('informacionesLaboral');

Route::get('/derechosTrabajadores', function () {
    return view('informacion.derechosTrabajadores');
})->name('derechosTrabajadores');

Route::get('/informacionArrendamiento', function () {
    return view('informacion.arrendamiento');
})->name('informacionArrendamiento');

Route::get('/informacionDespido', function () {
    return view('informacion.despido');
})->name('informacionDespido');

Route::get('/informacionDivorcio', function () {
    return view('informacion.divorcio');
})->name('informacionDivorcio');

Route::get('/informacionNegocio', function () {
    return view('informacion.negocio');
})->name('informacionNegocio');

Route::get('/informacionPension', function () {
    return view('informacion.pension');
})->name('informacionPension');

Route::get('/informacionTestamento', function () {
    return view('informacion.testamento');
})->name('informacionTestamento');

Route::get('/informacionAccidente', function () {
    return view('informacion.accidente');
})->name('informacionAccidente');

Route::get('/informacionConsumidor', function () {
    return view('informacion.derechoConsumidor');
})->name('informacionConsumidor');

Route::get('/informacionSeguridadSocial', function () {
    return view('informacion.seguridadSocial');
})->name('informacionSeguridadSocial');

Route::get('/informacionSST',function(){
    return view('informacion.seguridadSaludTrabajo');
})->name('SST');

Route::get('/informacionIntLab',function(){
    return view('informacion.internacionalLaboral');
})->name('informacionIntLab');

Route::get('/informacionEducacion',function(){
    return view('informacion.derechosInfantiles.derechoEducacion');
})->name('informacionEducacion');

Route::get('/informacionVidaFamiliar',function(){
    return view('informacion.derechosInfantiles.vidaFamiliarYCuidados');
})->name('informacionVidaFamiliar');

Route::get('/informacionTrabajoInfantil',function(){
    return view('informacion.derechosInfantiles.trabajoInfantil');
})->name('informacionTrabajoInfantil');

Route::get('/informacionContrato',function(){
    return view('informacion.contratoTrabajo');
})->name('informacionContrato');

Route::get('/informacionSalud',function(){
    return view('informacion.derechosInfantiles.saludBienestar');
})->name('informacionSalud');

Route::get('/informacionParticipacion',function(){
    return view('informacion.derechosInfantiles.participacionDecisiones');
})->name('informacionParticipacion');

Route::get('/informacionVoto',function(){
    return view('informacion.participacionCiudadana.derechoVoto');
})->name('informacionVoto');

Route::get('/informacionCargo',function(){
    return view('informacion.participacionCiudadana.postulacionCargosPublicos');
})->name('informacionCargo');

Route::get('/terminosCondiciones', function () {
    return view('legal.TerminosCondiciones');
})->name('terminosCondiciones');


Route::get('/answer', function () {
    return view('answer');
})->name('answer');


Route::get('/privacidad', function (){
    return view('legal.privacidad');
})->name('politicaPrivacidad');;

Route::get('/terminosUso', function () {
    return view('legal.terminos');
})->name('terminosUso');;

Route::get('/cookies', function () {
    return view('legal.cookies');
})->name('cookies');;

Route::get('/herramientas', function () {
    return view('herramientas.herramientasAnalisis');
})->name('herramientasAnalisis');;

Route::get('/foror', function () {
    return view('foro.foroRespuestas');
})->name('jeje');


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

Route::get('dates', [DateController::class, 'index'])->name('api.v1.dates.index');
Route::post('dates', [DateController::class, 'store'])->name('api.v1.dates.store');
Route::get('dates/{date}', [DateController::class, 'show'])->name('api.v1.dates.show');
Route::put('dates/{date}', [DateController::class, 'update'])->name('api.v1.dates.update');
Route::delete('dates/{date}', [DateController::class, 'destroy'])->name('api.v1.dates.delete');

Route::get('consultings', [ConsultingController::class, 'index'])->name('api.v1.consultings.index');
Route::post('consultings', [ConsultingController::class, 'store'])->name('api.v1.consultings.store');
Route::get('consultings/{consulting}', [ConsultingController::class, 'show'])->name('api.v1.consultings.show');
Route::put('consultings/{consulting}', [ConsultingController::class, 'update'])->name('api.v1.consultings.update');
Route::delete('consultings/{consulting}', [ConsultingController::class, 'destroy'])->name('api.v1.consultings.delete');

Route::get('areas', [AreaController::class, 'index'])->name( 'areas.index');
Route::post('areas', [AreaController::class, 'store'])->name('areas.store');
Route::get('areas/{area}', [AreaController::class, 'show'])->name('areas.show');
Route::put('areas/{area}', [AreaController::class, 'update'])->name('areas.update');
Route::delete('areas/{area}', [AreaController::class, 'destroy'])->name('areas.delete');

Route::get('areasLawyer', [AreaLawyerController::class, 'index'])->name('api.v1.areasLawyer.index');
Route::post('areasLawyer', [AreaLawyerController::class, 'store'])->name('api.v1.areasLawyer.store');
Route::get('areasLawyer/{areaLawyer}', [AreaLawyerController::class, 'show'])->name('api.v1.areasLawyer.show');
Route::put('areasLawyer/{areaLawyer}', [AreaLawyerController::class, 'update'])->name('api.v1.areasLawyer.update');
Route::delete('areasLawyer/{areaLawyer}', [AreaLawyerController::class, 'destroy'])->name('api.v1.areasLawyer.delete');

Route::get('reviews', [ReviewController::class, 'index'])->name( 'reviews.index');
Route::post('reviews', [ReviewController::class, 'store'])->name('reviews.store');
Route::get('reviews/{review}', [ReviewController::class, 'show'])->name('reviews.show');
Route::put('reviews/{review}', [ReviewController::class, 'update'])->name('reviews.update');
Route::delete('reviews/{review}', [ReviewController::class, 'destroy'])->name('reviews.delete');

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

Route::get('overhauls', [OverhaulReviewController::class, 'index'])->name('overhauls.index');
Route::post('overhauls', [OverhaulReviewController::class, 'store'])->name('seoverhaulsarchs.store');
Route::get('overhauls/{overhaul}', [OverhaulReviewController::class, 'show'])->name('overhauls.show');
Route::put('overhauls/{overhaul}', [OverhaulReviewController::class, 'update'])->name('overhauls.update');
Route::delete('overhauls/{overhaul}', [OverhaulReviewController::class, 'destroy'])->name('overhauls.delete');

Route::get('questions', [QuestionController::class, 'index'])->name('api.v1.questions.index');
Route::post('questions', [QuestionController::class, 'store'])->name('api.v1.questions.store');
Route::get('questions/{question}', [QuestionController::class, 'show'])->name('api.v1.questions.show');
Route::put('questions/{question}', [QuestionController::class, 'update'])->name('api.v1.questions.update');
Route::delete('questions/{question}', [QuestionController::class, 'destroy'])->name('api.v1.questions.delete');

Route::get('answers', [QuestionController::class, 'indexr'])->name('api.v1.answers.index');
Route::post('answers', [QuestionController::class, 'storer'])->name('api.v1.answers.store');
Route::get('answers/{answer}', [QuestionController::class, 'showr'])->name('api.v1.answers.show');
Route::put('answers/{answer}', [QuestionController::class, 'updater'])->name('api.v1.answers.update');
Route::delete('answers/{answer}', [QuestionController::class, 'destroyr'])->name('api.v1.answers.delete');


Route::get('lawyers', [LawyerController::class, 'index'])->name('api.v1.lawyers.index');
Route::post('lawyers', [LawyerController::class, 'store'])->name('api.v1.lawyers.store');
Route::get('lawyers/{lawyer}', [LawyerController::class, 'show'])->name('api.v1.lawyers.show');
Route::put('lawyers/{lawyer}', [LawyerController::class, 'update'])->name('api.v1.lawyers.update');
Route::delete('lawyers/{lawyer}', [LawyerController::class, 'destroy'])->name('api.v1.lawyers.delete');



Route::get('/faqs', function () {
    return view(view: 'faqs.faqs');
})->name('faqs');

Route::get('/faqss', function () {
    return view(view: 'faqs.faqs_recurso');
})->name('faqs_recurso');

Route::get('/nosotros', function () {
    return view(view: 'sobreNosotros');
})->name('mm');
