<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminDashboardController;

use App\Http\Controllers\Front\FrontAuthController;
use App\Http\Controllers\Front\FrontHomeController;
use App\Http\Controllers\Front\FrontProfileController;
use App\Http\Controllers\Front\FrontGroupController;
use App\Http\Controllers\Front\FrontPostController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\ChatsController;
use App\Http\Controllers\CommentsController;

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
    return redirect()->route("front.home");
});
Route::get('/search-groups', function () {
    return redirect()->route("front.home");
});
Route::get('/search-posts', function () {
    return redirect()->route("front.home");
});



Route::get('admin/login',[AdminAuthController::class,'login'])->name('admin.login');
Route::post('admin/login-submit',[AdminAuthController::class,'loginSubmit'])->name('admin.login.submit');

Route::middleware('admin_auth')->prefix('admin/')->as('admin.')->group(function(){
    Route::get('dashboard',[AdminDashboardController::class,'dashboard'])->name('dashboard');
    Route::get('user-list',[AdminDashboardController::class,'userlist'])->name('user.list');
    Route::get('user-create',[AdminDashboardController::class,'usercreate'])->name('user.create');
    Route::post('user-store',[AdminDashboardController::class,'userstore'])->name('user.store');
    Route::get('user-edit/{id}',[AdminDashboardController::class,'useredit'])->name('user.edit');
    Route::post('user-update/{id}',[AdminDashboardController::class,'userupdate'])->name('user.update');
    Route::get('user-delete/{id}',[AdminDashboardController::class,'userdelete'])->name('user.delete');

    Route::get('group-list',[AdminDashboardController::class,'grouplist'])->name('group.list');
    Route::get('group-create',[AdminDashboardController::class,'groupcreate'])->name('group.create');
    Route::post('group-store',[AdminDashboardController::class,'groupstore'])->name('group.store');
    Route::get('group-edit/{id}',[AdminDashboardController::class,'groupedit'])->name('group.edit');
    Route::post('group-update/{id}',[AdminDashboardController::class,'groupupdate'])->name('group.update');
    Route::get('group-delete/{id}',[AdminDashboardController::class,'groupdelete'])->name('group.delete');

    Route::get('groupuser-list',[AdminDashboardController::class,'groupuserlist'])->name('groupuser.list');
    
});


Route::get('login',[FrontAuthController::class,'login'])->name('front.login');
Route::get('logouts',[FrontAuthController::class,'logout'])->name('front.logout');
Route::get('register',[FrontAuthController::class,'register'])->name('front.register');
Route::post('login-submit',[FrontAuthController::class,'loginSubmit'])->name('front.login.submit');
Route::post('register-submit',[FrontAuthController::class,'registerSubmit'])->name('front.register.submit');

Route::get('/',[FrontHomeController::class,'home'])->name('front.home');
Route::get('search-groups/{groupName}',[FrontGroupController::class,'search'])->name('search.groups');
Route::post('searched-group-data',[FrontGroupController::class,'searchData'])->name('searched.group.data');
Route::get('search-posts/{postName}',[FrontPostController::class,'search'])->name('search.posts');
Route::post('searched-post-data',[FrontPostController::class,'searchData'])->name('searched.post.data');

Route::middleware('auth:web')->as('front.')->group(function(){
    Route::resource('profile',FrontProfileController::class);
    // Route::get('group/{groupId}/{communitytheme}',[FrontGroupController::class,'shows'])->name('groups.shows');
    Route::resource('groups', FrontGroupController::class);
    Route::get('settings',[FrontProfileController::class,'setting'])->name('settings');
    Route::get('communities',[FrontGroupController::class,'communitiesIndex'])->name('communities.index');
    Route::get('groups/{communityId}/new',[FrontGroupController::class,'new'])->name('groups.new');
    Route::get('groups/{communityId}/create',[FrontGroupController::class,'create'])->name('groups.create');
    Route::get('groups/{groupId}/join',[FrontGroupController::class,'join'])->name('groups.join');
    Route::get('groups/{groupId}/members',[FrontGroupController::class,'members'])->name('groups.members');
    
    Route::prefix('groups/{groupId}')->as('groups.')->group(function(){
        Route::resource('posts', FrontPostController::class);
    });
    // Route::get('groups/{groupId}/{communitytheme}', [FrontGroupController::class, 'show'])->name('theme');
    

});


Route::get('aboutus', function(){
    return view('aboutus');
})->name('aboutus.route');
Route::get('usecase', function(){
    return view('usecase');
})->name('usecase.route');


Route::get('/posts/{post}/like/{gid}', [PostLikeController::class, 'like'])->name('post.like');

Route::post('{groupId}/chatField', [ChatsController::class, 'createPrivate'])->name('private.chat.create');
Route::get('publicchat/{groupid}/{receiverId}', [ChatsController::class, 'createPublic'])->name('public.chat.create');
Route::any('publicchat/{publicChatId}/{senderId}/{groupId}', [ChatsController::class, 'sendpublic'])->name('message.send.public');
Route::any('privatechat/{receiverId}/{senderId}/{groupId}', [ChatsController::class, 'send'])->name('message.send.route');

Route::any('/update-chat', [ChatsController::class, 'updateChat'])->name('update.chat');


Route::post('/posts/{post}/comments', [CommentsController::class,'store'])->name('comments.store');
