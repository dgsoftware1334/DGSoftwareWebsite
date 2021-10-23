<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\FondateurController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\PoleActiviteController;
use App\Http\Controllers\PresentationController;
use App\Http\Controllers\SecteurActiviteController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\InfographiePortfolioController;
use App\Http\Controllers\DeveloppementController;
use App\Http\Controllers\InfographieServiceController;
use App\Http\Controllers\InfographieWorkController;
use App\Http\Controllers\CommandeController;

use App\Models\PoleActivite;
use App\Models\Presentation;
use App\Models\Evenement;
use App\Models\Article;
use App\Models\Fondateur;
use App\Models\SecteurActivite;
use App\Models\Comment;
use App\Models\Commande;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Developpement;
use App\Models\InfographieService;
use App\Models\InfographieWork;



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

    $AllPoles=PoleActivite::orderBy('created_at','DESC')->limit(6)->get();
    $AllSecteurs =SecteurActivite::orderBy('created_at','DESC')->limit(5)->get();
    $evenements = Evenement::orderBy('created_at','DESC')->limit(2)->get();
    $presentation = Presentation::all();
    $articles = Article::orderBy('created_at','DESC')->limit(3)->get();
    $fondateurs = Fondateur::orderBy('created_at','DESC')->limit(3)->get();
    $comments = Comment::where('verified', true)
                        ->where('deleted_at', null)->get();

    return view('home',compact('AllSecteurs','AllPoles','evenements','articles','fondateurs','presentation', 'comments'));
})->name('accueil');

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('articles', ArticleController::class);
Route::resource('contact', ContactController::class);
Route::resource('evenements', EvenementController::class);
Route::resource('fondateurs', FondateurController::class);
Route::resource('polesActivites', PoleActiviteController::class);
Route::resource('presentations', PresentationController::class);
Route::resource('secteurs', SecteurActiviteController::class);
Route::resource('messages', MessageController::class);
Route::resource('comments', CommentController::class);
Route::resource('services', ServiceController::class);
Route::resource('developpements', DeveloppementController::class);
Route::get('developpements/{id}/create', [DeveloppementController::class , 'create']);
Route::get('services/{id}/produits', [DeveloppementController::class , 'index']);
Route::resource('infographieServices', InfographieServiceController::class);
Route::resource('infographieWorks', InfographieWorkController::class);
Route::get('work/{id}/create', [InfographieWorkController::class , 'create']);
Route::get('infographie/{id}/produits', [InfographieWorkController::class , 'index']);
Route::resource('videos', VideoController::class);
Route::resource('portfolios', PortfolioController::class);
Route::get('portfolios/{id}/create', [PortfolioController::class , 'create']);
Route::resource('portfoliosInfo', InfographiePortfolioController::class);
Route::get('portfoliosInfo/{id}/create', [InfographiePortfolioController::class , 'create']);
Route::resource('commandes', CommandeController::class);
Route::get('commandes/{id}/createe', [CommandeController::class , 'createe']);

//Dashboard routes
Route::get('articlesDash', [ArticleController::class , 'indexDash'])->middleware(['auth']);
Route::get('evenementsDash', [EvenementController::class , 'indexDash'])->middleware(['auth']);
Route::get('polesActivitesDash', [PoleActiviteController::class , 'indexDash'])->middleware(['auth']);
Route::get('secteursDash', [SecteurActiviteController::class , 'indexDash'])->middleware(['auth']);
Route::get('fondateursDash', [FondateurController::class , 'indexDash'])->middleware(['auth']);
Route::get('fondateursDash/{id}/details', [FondateurController::class , 'showDash'])->middleware(['auth']);
Route::get('messagesRecu', [ContactController::class , 'indexDash'])->middleware(['auth']);
Route::post('replyMessage/{contact}', [MessageController::class , 'reply'])->middleware(['auth']);
Route::get('brouillons', [MessageController::class , 'brouillons'])->middleware(['auth']);
Route::get('brouillons/{id}/details', [MessageController::class , 'showBrouillons'])->middleware(['auth']);
Route::delete('brouillons/{id}/delete', [MessageController::class , 'deleteBrouillons'])->middleware(['auth']);
Route::get('presentationsDash', [PresentationController::class , 'indexDash'])->middleware(['auth']);
Route::get('commentsDash', [CommentController::class , 'indexDash'])->middleware(['auth']);
Route::get('servicesDash', [ServiceController::class , 'indexDash'])->middleware(['auth']);
Route::get('dashboard/{id}/developpements', [DeveloppementController::class , 'indexDash'])->middleware(['auth']);
Route::get('infographieDash', [InfographieServiceController::class , 'indexDash'])->middleware(['auth']);
Route::get('dashboard/{id}/infographieWork', [InfographieWorkController::class , 'indexDash'])->middleware(['auth']);
Route::get('portfoliosDash', [PortfolioController::class , 'indexDash'])->middleware(['auth']);
Route::get('dashboard/{id}/portfolio_info', [InfographiePortfolioController::class , 'showDash'])->middleware(['auth']);
Route::get('dashboard/{id}/portfolio_dev', [PortfolioController::class , 'showDash'])->middleware(['auth']);
Route::get('commandesDash', [CommandeController::class , 'indexDash'])->middleware(['auth']);