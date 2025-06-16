<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserRoleController;

// Municipalities
Route::resource('municipalities', 'App\Http\Controllers\MunicipalityController');

// Clients
Route::resource('clients', 'App\Http\Controllers\ClientController');

// Vulnerability Sectors
Route::resource('vulnerability-sectors', 'App\Http\Controllers\VulnerabilitySectorController');

// Client Vulnerability Sectors
Route::resource('client-vulnerability-sectors', 'App\Http\Controllers\ClientVulnerabilitySectorController');

// Assistance Types
Route::resource('assistance-types', 'App\Http\Controllers\AssistanceTypeController');

// Client Assistances
Route::resource('client-assistances', 'App\Http\Controllers\ClientAssistanceController');

// Disapproved Claims
Route::resource('disapproved-claims', 'App\Http\Controllers\DisapprovedClaimController');

// Requirements
Route::resource('requirements', 'App\Http\Controllers\RequirementController');

// Assistance Categories
Route::resource('assistance-categories', 'App\Http\Controllers\AssistanceCategoryController');

// Approved Claims
Route::resource('approved-claims', 'App\Http\Controllers\ApprovedClaimController');

// Check Claims Payments
Route::resource('check-claims-payments', 'App\Http\Controllers\CheckClaimsPaymentController');

// Cash Check Payments
Route::resource('cash-check-payments', 'App\Http\Controllers\CashCheckPaymentController');

// Cash Disbursements
Route::resource('cash-disbursements', 'App\Http\Controllers\CashDisbursementController');

Route::resource('employees', EmployeeController::class);
Route::resource('users', UserController::class);
Route::resource('logins', LoginController::class);
Route::resource('roles', RoleController::class);
Route::resource('user-roles', UserRoleController::class);