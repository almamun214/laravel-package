 <?php
 //namespace Mamun\Contact;

 //use Illuminate\Routing\Route;

 //use Mamun\Contact\ContactController;
 use Mamun\Contact\Http\Controllers\ContactController;

/* Route::get('contact',function (){
     return view('contact::contact');
});*/

/* Route::group(['namespace' => 'Mamun\Contact\Http\Controller'], function () {
     Route::get('contact','ContactController@index')->name('contact');
 });*/

 Route::get('/contact/list', [ContactController::class,'index'])->name('contact.list');
 Route::get('/contact', [ContactController::class,'create'])->name('contact.create');
 Route::post('/contact', [ContactController::class,'store'])->name('contact.store');
