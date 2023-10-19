<?php


use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\CityController;
use App\Http\Controllers\Api\CountryController;
use App\Http\Controllers\Api\PackageController;
use App\Http\Controllers\Api\PropertyController;
use App\Http\Controllers\Api\StateController;
use App\Http\Controllers\Api\UserPackageController;
use App\Http\Controllers\Api\HomePageController;
use App\Http\Controllers\Api\PaymentDetails;
use App\Http\Controllers\Api\PaymentDetailsController;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
   
    /*   AUTH API ROUTES            */ 
    
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::post('forgot-password', [AuthController::class, 'forgotPassword']);
    Route::post('change-password/{token}', [AuthController::class, 'changePassword']);
    Route::get('pages',[HomePageController::class, 'getAll']);
      
     
    Route::get('auth/token',[AuthController::class, 'authToken'])->name('verify.token');


    /*  AUTH API                                          */ 
    Route::middleware('auth:sanctum')->group(function () {

        /*    PLACES                                          */ 
        Route::get('country', [CountryController::class, 'getAll']);
        Route::get('city', [CityController::class, 'getAll']);
        Route::get('state', [StateController::class, 'getAll']);
        
         
        Route::get('/all-category', [CategoryController::class, 'getAll']);
        Route::get('/package', [PackageController::class, 'getAll']);
        Route::post('user-package/create', [UserPackageController::class, 'create']);

        Route::post('payment-details',[PaymentDetailsController::class , 'paymentDetails']);
        Route::get('about-us',[HomePageController::class, 'aboutUs']);

         
        /*              PROFILE                                           */
        Route::get('profile', [AuthController::class, 'profile']);   
        Route::post('profile/update', [AuthController::class, 'profileUpdate']);
        Route::post('reset-password',[AuthController::class ,'resetPassword'] );
        
    
        Route::group(['prefix' => 'property' ],function(){

            Route::post('/create', [PropertyController::class, 'create']);
            Route::get('/all-property', [PropertyController::class, 'getAll']);
    
        });

    });
    
        

  
 

   
   


    


     

        
        

   


 

     
