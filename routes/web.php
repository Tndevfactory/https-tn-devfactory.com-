<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LabController;
use App\Http\Controllers\StatController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommandeController;

  Route::redirect('/', '/fr');
 
  Route::group(['prefix'=> "{language}"], function(){

    //welcome
        Route::get('/', function(){ return view('welcome'); })->name('welcome');
        
    //categories 
        Route::get('/category', function(){ return view('pages.market.category.category'); })->name('category');
      

    //produits 
        Route::get('/produit', function(){ return view('pages.market.produit.produit'); })->name('produit');
  

    //rating
        Route::get('/rating', function(){ return view('pages.market.rating.rating'); })->name('rating');
        
    //search
        Route::get('/search', function(){ return view('pages.market.search.search'); })->name('search');
      

    //panier
        Route::get('/panier',function(){ return view('pages.market.panier.panier'); })->name('panier');
        
    //commandes
        Route::get('/commande', [CommandeController::class, 'index'])->name('commande');

    //paiements
        Route::get('/paiement/details', function(){return view('pages.market.paiement.details');})->name('paiement.details');
        Route::get('/paiement/notification', function(){return view('pages.market.paiement.reussi');})->name('paiement.notification');
        Route::get('/paiement/reussi', function(){return view('pages.market.paiement.reussi');})->name('paiement.reussi');
        Route::get('/paiement/erreur', function(){return view('pages.market.paiement.erreur');})->name('paiement.erreur');

    //auth
        Auth::routes();
        Route::get('/devenir-vendeur',function(){ return view('auth.register-vendeur'); })->name('devenir.vendeur');

    //dashboards profile under middleware 
        Route::get('/admin',function(){ return view('pages.dashboards.admin.admin'); })->name('admin');
        Route::get('/client',function(){ return view('pages.dashboards.client.client'); })->name('client');
        Route::get('/employee',function(){ return view('pages.dashboards.employee.employee'); })->name('employee');
        Route::get('/manager',function(){ return view('pages.dashboards.manager.manager'); })->name('manager');
        Route::get('/vendeur',function(){ return view('pages.dashboards.vendeur.vendeur'); })->name('vendeur');

    //dashboards admin stats axios and chart js here
        Route::get('/stats', [StatController::class, 'index'])->name('stats');

        // import zip and excel
        Route::post('/import', [LabController::class, 'fImport'])->name('fImport');
        Route::post('/excel-import', [LabController::class, 'excelImport'])->name('excelImport');
        Route::get('/excel-export', [LabController::class, 'excelExport'])->name('excelExport');
        Route::post('/zip-import-extract', [LabController::class, 'zipImportExtract'])->name('zipImportExtract');
         

        // ref https://www.positronx.io/laravel-import-expert-excel-and-csv-file-tutorial-with-example/
       Route::get('file-import-export', [UserController::class, 'fileImportExport']);
        Route::post('file-import', [UserController::class, 'fileImport'])->name('file-import');
        Route::get('file-export', [UserController::class, 'fileExport'])->name('file-export');

  });



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');