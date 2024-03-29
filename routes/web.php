<?php

use App\Http\Controllers\Admin\buyerController;
use App\Http\Controllers\Admin\categoryController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\admin\ProjectController as AdminProjectController;
use App\Http\Controllers\Admin\sellerController;
use App\Http\Controllers\Admin\webInfoController;
use App\Http\Controllers\Buyer\AccountController as BuyerAccountController;
use App\Http\Controllers\Buyer\DashboardController;
use App\Http\Controllers\Buyer\ProjectController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\Seller\AccountController;
use App\Http\Controllers\Seller\ProjectController as SellerProjectController;
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



Route::get('/index', function () {
    return view('index');
})->name('pagee');





Route::get('/404-page', function () {
    return view('404-page');
})->name('404-page');

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
Route::get('/employer/cancelled-projects', function () {
    return view('cancelled-projects');
})->name('cancelled-projects');


Route::get('/employer/completed-projects', function () {
    return view('completed-projects');
})->name('/employer/completed-projects');
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');




Route::get('/edit-project', function () {
    return view('edit-project');
})->name('edit-project');
Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/files', function () {
    return view('files');
})->name('files');
Route::get('/forgot-password', function () {
    return view('forgot-password');
})->name('forgot-password');
Route::get('/freelancer-cancelled-projects', function () {
    return view('freelancer-cancelled-projects');
})->name('freelancer-cancelled-projects');


Route::get('/freelancer-completed-projects', function () {
    return view('freelancer-completed-projects');
})->name('freelancer-completed-projects');

Route::get('/freelancer-delete-account', function () {
    return view('freelancer-delete-account');
})->name('freelancer-delete-account');

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

Route::get('/freelancer-payment', function () {
    return view('freelancer-payment');
})->name('freelancer-payment');





Route::get('/freelancer-task', function () {
    return view('freelancer-task');
})->name('freelancer-task');
Route::get('/freelancer-transaction-history', function () {
    return view('freelancer-transaction-history');
})->name('freelancer-transaction-history');
Route::get('/freelancer-verify-identity', function () {
    return view('freelancer-verify-identity');
})->name('freelancer-verify-identity');



// Route::get('/login', function () {
//     return view('login');
// })->name('login');

Route::get('/membership-plans', function () {
    return view('membership-plans');
})->name('membership-plans');
Route::get('/milestones', function () {
    return view('milestones');
})->name('milestones');

Route::get('/employer/pending-projects', function () {
    return view('pending-projects');
})->name('pending-projects');
Route::get('/post-job', function () {
    return view('post-job');
})->name('post-job');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');


Route::get('/project-payment', function () {
    return view('project-payment');
})->name('project-payment');


// Route::get('/register', function () {
//     return view('register');
// })->name('register');

Route::get('/tasks', function () {
    return view('tasks');
})->name('tasks');
Route::get('/term-condition', function () {
    return view('term-condition');
})->name('term-condition');


Route::get('/verify-identity', function () {
    return view('verify-identity');
})->name('verify-identity');
Route::get('/view-invoice', function () {
    return view('view-invoice');
})->name('view-invoice');
Route::get('/view-profile', function () {
    return view('view-profile');
})->name('view-profile');

Route::get('/view-proposals', function () {
    return view('view-proposals');
})->name('view-proposals');


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

Route::get('/admin', [LoginController::class, 'index'])->name('admin.login');



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [HomePageController::class, 'index'])->name('home2');
Route::get('/', [HomePageController::class, 'index'])->name('home');
Route::get('/designer', [HomePageController::class, 'designer'])->name('designer');
Route::get('/project', [HomePageController::class, 'project'])->name('project');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');





//Category Managing

Route::post('admin/add_category', [categoryController::class, 'add'])->name('category.add');
Route::post('admin/update_category/{id}', [categoryController::class, 'update'])->name('category.update');

Route::get('/designer-details/{slug}', [HomePageController::class, 'seller_details'])->name('developer-details');
Route::get('project-details/{id}', [HomePageController::class, 'project_details'])->name('project-details');

Route::get('/view-project-detail/{id}', function () {
    return view('view-project-detail');
})->name('view-project-detail');



//admin  Middleware r0
Route::group(['middleware' => ['auth', 'isAdmin'], 'prefix' => 'admin/', 'as'=>'admin.'], function () {
    Route::get('dashboard', [webInfoController::class, 'dashboard'])->name('dashboard');

    Route::get('categories', [categoryController::class, 'list'])->name('category.list');
    Route::get('countries', [categoryController::class, 'country_list'])->name('country.list');
    Route::post('add_countries', [categoryController::class, 'add_country'])->name('country.add');
    Route::post('update_countries/{id}', [categoryController::class, 'update_country'])->name('country.update');

    Route::get('all_projects', [AdminProjectController::class, 'all_projects'])->name('all_projects');

    //admin Route
    Route::get('designers', [sellerController::class, 'index'])->name('designer_list');
    Route::get('employer', [buyerController::class, 'index'])->name('buyer_list');


    Route::get('verify_user/{id}', [sellerController::class, 'verify_user'])->name('verify_user');
    Route::get('dis_verify_user/{id}', [sellerController::class, 'dis_verify_user'])->name('dis_verify_user');

    Route::get('/settings', [webInfoController::class, 'index'])->name('settings');
    Route::post('/update_web_info', [webInfoController::class, 'update_web_info'])->name('update_web_info');
    Route::post('/update_web_address', [webInfoController::class, 'update_web_address'])->name('update_web_address');




});
















//Employer  Middleware r1
Route::group(['middleware' => ['auth', 'isBuyer'], 'prefix' => 'employer/', 'as'=>'employer.'], function () {

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('profile', [BuyerAccountController::class, 'profile'])->name('profile');

    Route::get('profile-settings', function () {
        return view('profile-settings');
    })->name('profile-settings');

    Route::get('user-account-details', [BuyerAccountController::class, 'profile'])->name('profile');
    Route::get('post-project', [ProjectController::class, 'project_page'])->name('post-project');
    Route::post('post-project', [ProjectController::class, 'add'])->name('add-post-project');

    Route::get('manage-projects', [ProjectController::class, 'index'])->name('manage-projects');
    Route::get('ongoing-projects', [ProjectController::class, 'ongoing_projects'])->name('ongoing-projects');



    Route::get('project-details/{id}', [ProjectController::class, 'project_details'])->name('project-details');
    Route::get('project-proposals/{id}', [ProjectController::class, 'project_proposals'])->name('project-proposals');
    Route::post('hire_designer/{id}', [ProjectController::class, 'hire_designer'])->name('hire_designer');
    Route::post('profile-update', [BuyerAccountController::class, 'update'])->name('profile-update');


    Route::get('set_fav/{id}', [BuyerAccountController::class, 'set_fav'])->name('set_fav');

    Route::get('favourites', function () {
        return view('favourites');
    })->name('favourites');

    Route::get('invited-freelancer', function () {
        return view('invited-freelancer');
    })->name('invited-freelancer');

    Route::get('change-password', function () {
        return view('change-password');
    })->name('change-password');

    Route::get('delete-account', function () {
        return view('delete-account');
    })->name('delete-account');

    Route::get('review', function () {
        return view('review');
    })->name('review');

    Route::get('chats', function () {
        return view('chats');
    })->name('chats');

    Route::get('deposit-funds', function () {
        return view('deposit-funds');
    })->name('deposit-funds');

    Route::get('withdraw-money', function () {
        return view('withdraw-money');
    })->name('withdraw-money');

    Route::get('transaction-history', function () {
        return view('transaction-history');
    })->name('transaction-history');
});


















//seller  Middleware r2
Route::group(['middleware' => ['auth', 'isSeller'],  'prefix' => 'designer/', 'as' => 'designer.'], function () {

    Route::get('dashboard', [AccountController::class, 'dashboard'])->name('dashboard');

    Route::get('profile', function () {
        return view('freelancer-profile');
    })->name('profile');

    Route::get('profile-settings', function () {
        return view('freelancer-profile-settings');
    })->name('profile-settings');

    Route::get('freelancer-change-password', function () {
        return view('freelancer-change-password');
    })->name('freelancer-change-password');

    Route::post('profile-update', [AccountController::class, 'update'])->name('profile-update');
    Route::get('projects', [SellerProjectController::class, 'index'])->name('projects');

    Route::post('submit_proposal/{id}', [SellerProjectController::class, 'submit_proposal'])->name('submit_proposal');
    Route::get('designer-project-details/{id}', [HomePageController::class, 'seller_project_details'])->name('project-details');
    Route::get('freelancer-portfolio', [AccountController::class, 'portfolio'])->name('freelancer-portfolio');
    Route::post('add_portfolio', [AccountController::class, 'add_portfolio'])->name('add_portfolio');

    Route::get('delete_proposal/{id}', [SellerProjectController::class, 'delete_proposal'])->name('delete_proposal');

    Route::get('proposal', [SellerProjectController::class, 'proposal'])->name('proposals');
    Route::get('ongoing_projects', [SellerProjectController::class, 'ongoing_projects'])->name('ongoing_projects');
    Route::get('completed_projects', [SellerProjectController::class, 'completed_projects'])->name('completed_projects');
    Route::get('cancelled_projects', [SellerProjectController::class, 'cancelled_projects'])->name('cancelled_projects');


    Route::get('ongoing_project/{id}', [SellerProjectController::class, 'ongoing_project_details'])->name('ongoing_project_details');
    Route::get('submit_project/{id}', [SellerProjectController::class, 'submit_project'])->name('submit_project');

    Route::get('withdraw-payment', function () {
        return view('freelancer-withdraw-money');
    })->name('withdraw_payment');

    Route::get('chats', function () {
        return view('freelancer-chats');
    })->name('chats');

    Route::get('review', [SellerProjectController::class, 'review'])->name('review');

    Route::get('favourites', function () {
        return view('freelancer-favourites');
    })->name('favourites');


});
