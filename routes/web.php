<?php

use App\Http\Controllers\Admin\buyerController;
use App\Http\Controllers\Admin\categoryController;
use App\Http\Controllers\Admin\sellerController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/', function () {
return view('index');
})->name('home');
Route::get('/home', function () {
return view('index');
})->name('pagee');
Route::get('/index', function () {
    return view('index');
})->name('pagee');
Route::get('/404-page', function () {
    return view('404-page');
})->name('404-page');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/blank-page', function () {
    return view('blank-page');
})->name('blank-page');
Route::get('/blog-details', function () {
    return view('blog-details');
})->name('blog-details');
Route::get('/blog-grid', function () {
    return view('blog-grid');
})->name('blog-grid');
Route::get('/blog-list', function () {
    return view('blog-list');
})->name('blog-list');
Route::get('/cancelled-projects', function () {
    return view('cancelled-projects');
})->name('cancelled-projects');
Route::get('/change-password', function () {
    return view('change-password');
})->name('change-password');
Route::get('/chats', function () {
    return view('chats');
})->name('chats');
Route::get('/completed-projects', function () {
    return view('completed-projects');
})->name('completed-projects');
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/delete-account', function () {
    return view('delete-account');
})->name('delete-account');
Route::get('/deposit-funds', function () {
    return view('deposit-funds');
})->name('deposit-funds');
Route::get('/developer-details', function () {
    return view('developer-details');
})->name('developer-details');
Route::get('/developer', function () {
    return view('developer');
})->name('developer');
Route::get('/edit-project', function () {
    return view('edit-project');
})->name('edit-project');
Route::get('/faq', function () {
    return view('faq');
})->name('faq');
Route::get('/favourites', function () {
    return view('favourites');
})->name('favourites');
Route::get('/files', function () {
    return view('files');
})->name('files');
Route::get('/forgot-password', function () {
    return view('forgot-password');
})->name('forgot-password');
Route::get('/freelancer-cancelled-projects', function () {
    return view('freelancer-cancelled-projects');
})->name('freelancer-cancelled-projects');
Route::get('/freelancer-change-password', function () {
    return view('freelancer-change-password');
})->name('freelancer-change-password');
Route::get('/freelancer-chats', function () {
    return view('freelancer-chats');
})->name('freelancer-chats');
Route::get('/freelancer-completed-projects', function () {
    return view('freelancer-completed-projects');
})->name('freelancer-completed-projects');

Route::get('/freelancer-delete-account', function () {
    return view('freelancer-delete-account');
})->name('freelancer-delete-account');
Route::get('/freelancer-favourites', function () {
    return view('freelancer-favourites');
})->name('freelancer-favourites');
Route::get('/freelancer-files', function () {
    return view('freelancer-files');
})->name('freelancer-files');
Route::get('/freelancer-invitations', function () {
    return view('freelancer-invitations');
})->name('freelancer-invitations');
Route::get('/freelancer-invoices', function () {
    return view('freelancer-invoices');
})->name('freelancer-invoices');
Route::get('/freelancer-membership', function () {
    return view('freelancer-membership');
})->name('freelancer-membership');
Route::get('/freelancer-milestones', function () {
    return view('freelancer-milestones');
})->name('freelancer-milestones');
Route::get('/freelancer-ongoing-projects', function () {
    return view('freelancer-ongoing-projects');
})->name('freelancer-ongoing-projects');
Route::get('/freelancer-payment', function () {
    return view('freelancer-payment');
})->name('freelancer-payment');
Route::get('/freelancer-portfolio', function () {
    return view('freelancer-portfolio');
})->name('freelancer-portfolio');
Route::get('/freelancer-profile-settings', function () {
    return view('freelancer-profile-settings');
})->name('freelancer-profile-settings');
Route::get('/freelancer-profile', function () {
    return view('freelancer-profile');
})->name('freelancer-profile');
Route::get('/freelancer-project-proposals', function () {
    return view('freelancer-project-proposals');
})->name('freelancer-project-proposals');
Route::get('/freelancer-review', function () {
    return view('freelancer-review');
})->name('freelancer-review');
Route::get('/freelancer-task', function () {
    return view('freelancer-task');
})->name('freelancer-task');
Route::get('/freelancer-transaction-history', function () {
    return view('freelancer-transaction-history');
})->name('freelancer-transaction-history');
Route::get('/freelancer-verify-identity', function () {
    return view('freelancer-verify-identity');
})->name('freelancer-verify-identity');
Route::get('/freelancer-view-project-detail', function () {
    return view('freelancer-view-project-detail');
})->name('freelancer-view-project-detail');
Route::get('/freelancer-withdraw-money', function () {
    return view('freelancer-withdraw-money');
})->name('freelancer-withdraw-money');
Route::get('/invited-freelancer', function () {
    return view('invited-freelancer');
})->name('invited-freelancer');
// Route::get('/login', function () {
//     return view('login');
// })->name('login');
Route::get('/manage-projects', function () {
    return view('manage-projects');
})->name('manage-projects');
Route::get('/membership-plans', function () {
    return view('membership-plans');
})->name('membership-plans');
Route::get('/milestones', function () {
    return view('milestones');
})->name('milestones');
Route::get('/ongoing-projects', function () {
    return view('ongoing-projects');
})->name('ongoing-projects');
Route::get('/pending-projects', function () {
    return view('pending-projects');
})->name('pending-projects');
Route::get('/post-job', function () {
    return view('post-job');
})->name('post-job');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');
Route::get('/profile-settings', function () {
    return view('profile-settings');
})->name('profile-settings');
Route::get('/project-details', function () {
    return view('project-details');
})->name('project-details');
Route::get('/project-payment', function () {
    return view('project-payment');
})->name('project-payment');
Route::get('/project-proposals', function () {
    return view('project-proposals');
})->name('project-proposals');
Route::get('/project', function () {
    return view('project');
})->name('project');
// Route::get('/register', function () {
//     return view('register');
// })->name('register');
Route::get('/review', function () {
    return view('review');
})->name('review');
Route::get('/tasks', function () {
    return view('tasks');
})->name('tasks');
Route::get('/term-condition', function () {
    return view('term-condition');
})->name('term-condition');
Route::get('/transaction-history', function () {
    return view('transaction-history');
})->name('transaction-history');
Route::get('/user-account-details', function () {
    return view('user-account-details');
})->name('user-account-details');
Route::get('/verify-identity', function () {
    return view('verify-identity');
})->name('verify-identity');
Route::get('/view-invoice', function () {
    return view('view-invoice');
})->name('view-invoice');
Route::get('/view-profile', function () {
    return view('view-profile');
})->name('view-profile');
Route::get('/view-project-detail', function () {
    return view('view-project-detail');
})->name('view-project-detail');
Route::get('/view-proposals', function () {
    return view('view-proposals');
})->name('view-proposals');
Route::get('/withdraw-money', function () {
    return view('withdraw-money');
})->name('withdraw-money');

/*****************ADMIN ROUTES*******************/
Route::Group(['prefix' => 'admin'], function () {
Route::get('/bid-fees', function () {
    return view('admin.bid-fees');
})->name('bid-fees');

Route::get('/change-password', function () {
    return view('admin.change-password');
})->name('change-password');
Route::get('/components', function () {
    return view('admin.components');
})->name('components');
Route::get('/contest-entry-fees', function () {
    return view('admin.contest-entry-fees');
})->name('contest-entry-fees');
Route::get('/contests-fees', function () {
    return view('admin.contests-fees');
})->name('contests-fees');
Route::get('/data-tables', function () {
    return view('admin.data-tables');
})->name('data-tables');
Route::get('/delete-account', function () {
    return view('admin.delete-account');
})->name('delete-account');
Route::get('/email-settings', function () {
    return view('admin.email-settings');
})->name('email-settings');
Route::get('/fees', function () {
    return view('admin.fees');
})->name('fees');
Route::get('/forgot-password', function () {
    return view('admin.forgot-password');
})->name('forgot-password');
Route::get('/form-basic-inputs', function () {
    return view('admin.form-basic-inputs');
})->name('form-basic-inputs');
Route::get('/form-horizontal', function () {
    return view('admin.form-horizontal');
})->name('form-horizontal');
Route::get('/form-input-groups', function () {
    return view('admin.form-input-groups');
})->name('form-input-groups');
Route::get('/form-mask', function () {
    return view('admin.form-mask');
})->name('form-mask');
Route::get('/form-validation', function () {
    return view('admin.form-validation');
})->name('form-validation');
Route::get('/form-vertical', function () {
    return view('admin.form-vertical');
})->name('form-vertical');
Route::get('/index_admin', function () {
    return view('admin.index_admin');
})->name('index_admin');
Route::get('/localization-details', function () {
    return view('admin.localization-details');
})->name('localization-details');
Route::get('/login', function () {
    return view('admin.login');
})->name('login');
Route::get('/others-settings', function () {
    return view('admin.others-settings');
})->name('others-settings');
Route::get('/payment-settings', function () {
    return view('admin.payment-settings');
})->name('payment-settings');
Route::get('/payment-settings', function () {
    return view('admin.payment-settings');
})->name('payment-settings');
Route::get('/profile', function () {
    return view('admin.profile');
})->name('profile');
Route::get('/projects', function () {
    return view('admin.projects');
})->name('projects');
Route::get('/projects-fees', function () {
    return view('admin.projects-fees');
})->name('projects-fees');

Route::get('/register', function () {
    return view('admin.register');
})->name('register');
Route::get('/reports', function () {
    return view('admin.reports');
})->name('reports');
Route::get('/roles', function () {
    return view('admin.roles');
})->name('roles');
Route::get('/roles-permission', function () {
    return view('admin.roles-permission');
})->name('roles-permission');
Route::get('/seo-settings', function () {
    return view('admin.seo-settings');
})->name('seo-settings');
Route::get('/settings', function () {
    return view('admin.settings');
})->name('settings');
Route::get('/skills', function () {
    return view('admin.skills');
})->name('skills');
Route::get('/social-links', function () {
    return view('admin.social-links');
})->name('social-links');
Route::get('/social-settings', function () {
    return view('admin.social-settings');
})->name('social-settings');
Route::get('/sub-category', function () {
    return view('admin.sub-category');
})->name('sub-category');
Route::get('/tables-basic', function () {
    return view('admin.tables-basic');
})->name('tables-basic');
Route::get('/taxs', function () {
    return view('admin.taxs');
})->name('taxs');
Route::get('/tax-types', function () {
    return view('admin.tax-types');
})->name('tax-types');

Route::get('/verify-identity', function () {
    return view('admin.verify-identity');
})->name('verify-identity');
Route::get('/view-estimate', function () {
    return view('admin.view-estimate');
})->name('view-estimate');
Route::get('/view-invoice', function () {
    return view('admin.view-invoice');
})->name('view-invoice');
});


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//admin Route
Route::get('admin/designers',[sellerController::class,'index']);
Route::get('admin/buyers',[buyerController::class,'index']);

//Category Managing
Route::get('admin/categories',[categoryController::class,'list'])->name('category.list');
Route::post('admin/add_category',[categoryController::class,'add'])->name('category.add');
Route::post('admin/update_category/{id}',[categoryController::class,'update'])->name('category.update');

//Seller
Route::get('/designer/dashboard', function () {
    return view('freelancer-dashboard');
})->name('designer-dashboard');


//employer
Route::get('/employer/dashboard', function () {
    return view('freelancer-dashboard');
})->name('designer-dashboard');

Route::get('/employer/post-project', function () {
    return view('post-project');
})->name('post-project');




