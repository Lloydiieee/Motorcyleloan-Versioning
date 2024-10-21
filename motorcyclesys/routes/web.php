<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MunicipalityBudgetController;

use App\Http\Controllers\AllController;
use App\Http\Controllers\postController;
use App\Http\Controllers\categoryController;

use App\Models\postModel;
use App\Models\categoryModel;

// Route::get('/', function () {
//     return redirect('/login');
// });



Route::get('/', function () {return view('/website.index'); });
Route::get('/details', function () {return view('/website.details'); });
Route::get('/about-us', function () {return view('/website.about'); });
Route::get('/apply', function () {return view('/website.howtoapply'); });



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return redirect('/browse');
    });

    Route::get('/application/applicant', function () {return view('/pages.apply.applicant-index'); });
    // Route::get('/application/spouse', function () {return view('/pages.apply.spouse-index'); });
    Route::get('/browse', function () {return view('/pages.apply.browse'); });
    Route::get('/active/loans', function () {return view('/pages.recipient.actived'); });
    Route::get('/history/loans', function () {return view('/pages.recipient.history'); });
    Route::get('/active/loans/payment', function () {return view('/pages.recipient.payment'); });

    
    Route::get('/pending-loans', function () {return view('/pages.lender.pending'); });
    Route::get('/approved-loans', function () {return view('/pages.lender.approved'); });
    Route::get('/payment-loans', function () {return view('/pages.lender.payment'); });

    Route::get('/accounts', function () {return view('/pages.users.index'); });
    Route::get('/reports', function () {return view('/pages.reports.index'); });

    Route::get('/motorcycle', [postController::class, 'index']);
    Route::get('/motorcycle/new', [postController::class, 'create']);
    Route::post('/motorcycle/save', [postController::class, 'save'])->name('motorcycle.save');

    // ** Projects ** //
    // Route::get('/projects', [ProjectController::class, 'index']);
    // Route::get('/projects/details/{id}', [ProjectController::class, 'details']);
    // Route::post('/projects/store', [ProjectController::class, 'store'])->name('projects.store');
    // Route::post('/projects/update', [ProjectController::class, 'update'])->name('projects.update');

    // // ** Employee ** //    
    // Route::get('/employee', [EmployeeController::class, 'index']);
    // Route::post('/employee/registration', [EmployeeController::class, 'store'])->name('employee.save');

    // // ** Reports ** //
    // Route::get('/reports', [ReportsController::class, 'index']);
    // Route::get('/reports/print', [ReportsController::class, 'print']);
    // Route::get('/projects/print/{id}', [ProjectController::class, 'print_checklist']);    

    // // ** Resources ** //    
    // Route::get('/resources', [ResourcesController::class, 'index']);
    // Route::post('/resources/registration', [ResourcesController::class, 'store'])->name('resources.save');

    Route::get('/apply/residence',[AllController::class, 'residence']);
    Route::post('/apply/residence/added',[AllController::class, 'residence_store'])->name('residence.save');

    Route::get('/apply/revenue',[AllController::class, 'revenue']);
    Route::post('/apply/revenue/added',[AllController::class, 'revenue_store'])->name('revenue.save');

    Route::get('/apply/dependent',[AllController::class, 'dependent']);
    Route::post('/apply/dependent/added',[AllController::class, 'dependent_store'])->name('dependent.save');

    Route::get('/apply/requirement',[AllController::class, 'requirement']);
    Route::post('/apply/requirement/added',[AllController::class, 'requirement_store'])->name('requirement.save');
    Route::get('/spouse', [AllController::class, 'spouse']);
    Route::post('/applicant/save', [AllController::class, 'spouse_store'])->name('spouse.save');
});
