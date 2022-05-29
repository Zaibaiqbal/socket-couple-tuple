<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CommunityController;
use App\Http\Controllers\Admin\DietController;
use App\Http\Controllers\Admin\EducationController;
use App\Http\Controllers\Admin\HeightController;
use App\Http\Controllers\Admin\LivinInContrller;
use App\Http\Controllers\Admin\MaterialStatusController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\ProfileForController;
use App\Http\Controllers\Admin\Religioncontroller;
use App\Http\Controllers\Admin\SubCommunityController;
use App\Http\Controllers\Admin\WorkController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\ProfessionController;
use App\Http\Controllers\SallaryController;
use App\Http\Controllers\UserPanel\ImageController;
use App\Http\Controllers\UserPanel\UserPanelController;
use App\Http\Controllers\UserPanel\VisitorController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



// Front End Landing Page

Route::get('/',[HomeController::class,'home']);

Route::get('/profile-view',[UserPanelController::class,'profileView']);


//User Panel Controller

Route::group(['middleware'=>['auth','verified']],function () {
    Route::prefix('/userPanel')->namespace('App\Http\Controllers\UserPanel')->group(function () {
        // home Page
        Route::controller(UserPanelController::class)->group( function (){
            // complete profie
            Route::get('/create-profile','createProfile')->name('create-profile');
            // create profile Process
            Route::post('/create-profile-process','createProfileProcess');
            // dashboard
            Route::get('/','UserPanel');
            // user Profile
            Route::get('/profile','profile');
            // Profile Edit
            Route::get('/edit-profile/{id}','EditProfile');
            Route::post('/edit-profile-process/{id}','EditProfileProcess');
            // user Detail
            Route::get('user-detail/{id}','detail');
            // Near to User Route
            Route::get('near-me','nearMe');
            // pricing Plam
            Route::get('/pricing-plans','plans');

        });

        // Upload Image Routes
        Route::controller(ImageController::class)->group(
            function ()
            {
//                Route::get('uploadImg','uploadImg');
                Route::get('preview-upload-multiple-image','index');
                Route::post('store-images','store');
                // User Gallery Images
                Route::get('view-image','gallery')->name('view-image');
            }
        );

        // Visitors
        Route::controller(VisitorController::class)->group(
            function ()
            {
                Route::get('/userprofiles','profile')->name('userprofiles');
                Route::get('/visitprofiles','visitUserProfile')->name('visitprofiles');
                // Route::get('/viewrecentvisitors','viewRecentVisitors')->name('viewrecentvisitors');
                Route::get('/sendrequest','sendRequest')->name('sendrequest');

            }
        );
    });

    Route::get('loadnotification',[App\Http\Controllers\NotificationPusherController::class,'loadNotifications'])->name('loadnotification');

    Route::get('userPanel/viewrecentvisitors',[App\Http\Controllers\VisitorController::class,'viewRecentVisitors'])->name('viewrecentvisitors');

Route::get('seennotification',[App\Http\Controllers\NotificationPusherController::class,'seenNotification'])->name('seennotification');



Route::get('appearnotification',[ App\Http\Controllers\NotificationPusherController::class,'appearNotification'])->name('appearnotification');

Route::post('sendmessage',[ App\Http\Controllers\ChatController::class,'sendMessage'])->name('sendmessage');



});




//Admin Panel Routes

Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->group(function (){

    // Admin Login Route
    Route::match(['get','post'],'/',[AdminController::class,'login']);
    // Admin Middleware
    Route::group(['middleware'=>['admin']],function (){

        // Logout Route
        Route::get('/logOut',[AdminController::class,'logOut']);
        // Admin Dashboard
        Route::get('/dashboard',[AdminController::class,'home']);

        // user's List
        Route::get('/user-list',[AdminController::class,'userList']);

        // profile for route
        Route::get('/profile-for',[ProfileForController::class,'profilefor']);
        Route::get('/profile-for-add',[ProfileForController::class,'profileforAdd']);
        Route::post('/profile-for-add-process',[ProfileForController::class,'profileforAddProcess']);
        Route::get('/profile-for-edit/{id}',[ProfileForController::class,'profileforedit']);
        Route::put('/profile-for-update/{id}',[ProfileForController::class,'profileforUpdate']);
        Route::get('/profile-for-delete/{id}',[ProfileForController::class,'profilefordelete']);

        // Add Religion Route

        Route::get('/religion',[Religioncontroller::class,'religion']);
        Route::get('/religion-add',[Religioncontroller::class,'religionAdd']);
        Route::post('/religion-add-process',[Religioncontroller::class,'religionAddProcess']);
        Route::get('/religion-edit/{id}',[Religioncontroller::class,'religionedit']);
        Route::put('/religion-update/{id}',[Religioncontroller::class,'religionUpdate']);
        Route::get('/religion-delete/{id}',[Religioncontroller::class,'religiondelete']);

        // Add Community Route

        Route::get('/community',[CommunityController::class,'community']);
        Route::get('/community-add',[CommunityController::class,'communityAdd']);
        Route::post('/community-add-process',[CommunityController::class,'communityAddProcess']);
        Route::get('/community-edit/{id}',[CommunityController::class,'communityedit']);
        Route::put('/community-update/{id}',[CommunityController::class,'communityUpdate']);
        Route::get('/community-delete/{id}',[CommunityController::class,'communitydelete']);

        // Add Living in Route

        Route::get('/livingin',[LivinInContrller::class,'livingin']);
        Route::get('/livingin-add',[LivinInContrller::class,'livinginAdd']);
        Route::post('/livingin-add-process',[LivinInContrller::class,'livinginAddProcess']);
        Route::get('/livingin-edit/{id}',[LivinInContrller::class,'livinginedit']);
        Route::put('/livingin-update/{id}',[LivinInContrller::class,'livinginUpdate']);
        Route::get('/livingin-delete/{id}',[LivinInContrller::class,'livingindelete']);

        // Material Status in Route

        Route::get('/status',[MaterialStatusController::class,'status']);
        Route::get('/status-add',[MaterialStatusController::class,'statusAdd']);
        Route::post('/status-add-process',[MaterialStatusController::class,'statusAddProcess']);
        Route::get('/status-edit/{id}',[MaterialStatusController::class,'statusedit']);
        Route::put('/status-update/{id}',[MaterialStatusController::class,'statusUpdate']);
        Route::get('/status-delete/{id}',[MaterialStatusController::class,'statusdelete']);


        // Add Height Route

        Route::get('/height',[HeightController::class,'height']);
        Route::get('/height-add',[HeightController::class,'heightAdd']);
        Route::post('/height-add-process',[HeightController::class,'heightAddProcess']);
        Route::get('/height-edit/{id}',[HeightController::class,'heightedit']);
        Route::put('/height-update/{id}',[HeightController::class,'heightUpdate']);
        Route::get('/height-delete/{id}',[HeightController::class,'heightdelete']);


        // add Sub Community Route

        Route::get('/sub-community',[SubCommunityController::class,'subCommunity']);
        Route::get('/sub-community-add',[SubCommunityController::class,'subCommunityAdd']);
        Route::post('/sub-community-add-process',[SubCommunityController::class,'subCommunityAddProcess']);
        Route::get('/sub-community-edit/{id}',[SubCommunityController::class,'subCommunityedit']);
        Route::put('/sub-community-update/{id}',[SubCommunityController::class,'subCommunityUpdate']);
        Route::get('/sub-community-delete/{id}',[SubCommunityController::class,'subCommunitydelete']);

        // Add Diet Routes

        Route::get('/diet',[DietController::class,'diet']);
        Route::get('/diet-add',[DietController::class,'dietAdd']);
        Route::post('/diet-add-process',[DietController::class,'dietAddProcess']);
        Route::get('/diet-edit/{id}',[DietController::class,'dietedit']);
        Route::put('/diet-update/{id}',[DietController::class,'dietUpdate']);
        Route::get('/diet-delete/{id}',[DietController::class,'dietdelete']);

        // Education Route

            Route::get('/education',[EducationController::class,'education']);
            Route::get('/education-add',[EducationController::class,'educationAdd']);
            Route::post('/education-add-process',[EducationController::class,'AddProcess']);
            Route::get('/education-edit/{id}',[EducationController::class,'educationedit']);
            Route::put('/education-update/{id}',[EducationController::class,'educationUpdate']);
            Route::get('/education-delete/{id}',[EducationController::class,'educationdelete']);

        // Work Route

        Route::get('/work',[WorkController::class,'work']);
        Route::get('/work-add',[WorkController::class,'workAdd']);
        Route::post('/work-add-process',[WorkController::class,'workAddProcess']);
        Route::get('/work-edit/{id}',[WorkController::class,'workedit']);
        Route::put('/work-update/{id}',[WorkController::class,'workUpdate']);
        Route::get('/work-delete/{id}',[WorkController::class,'workdelete']);


        // Add Profession Route
        Route::get('/profession',[ProfessionController::class,'profession']);
        Route::get('/profession-add',[ProfessionController::class,'professionAdd']);
        Route::post('/profession-add-process',[ProfessionController::class,'professionAddProcess']);
        Route::get('/profession-edit/{id}',[ProfessionController::class,'professionedit']);
        Route::put('/profession-update/{id}',[ProfessionController::class,'professionUpdate']);
        Route::get('/profession-delete/{id}',[ProfessionController::class,'professiondelete']);

        // Add Salary Route

        Route::get('/salary',[SallaryController::class,'salary']);
        Route::get('/salary-add',[SallaryController::class,'salaryAdd']);
        Route::post('/salary-add-process',[SallaryController::class,'salaryAddProcess']);
        Route::get('/salary-edit/{id}',[SallaryController::class,'salaryedit']);
        Route::put('/salary-update/{id}',[SallaryController::class,'salaryUpdate']);
        Route::get('/salary-delete/{id}',[SallaryController::class,'salarydelete']);
    });


    Route::controller(PackageController::class)->group(
        function () {
            Route::get('/package','index');
            Route::get('/package-add','add');
            Route::post('/package-add-process','addPackage');
            Route::get('/package-edit/{id}','packgeEdit');
            Route::post('/package-edit-process/{id}','update');
            Route::get('/package-delete/{id}','delete');
        }
    );



});




