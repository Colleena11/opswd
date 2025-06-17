<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PayeeController;
use App\Http\Controllers\ClientAssistanceController;
use App\Http\Controllers\AssistanceTypeController;
use App\Http\Controllers\AssistanceCategoryController;
use App\Http\Controllers\RequirementController;
use App\Http\Controllers\ClaimController;
use App\Http\Controllers\CheckClaimsPaymentController;
use App\Http\Controllers\CashClaimsPaymentController;
use App\Http\Controllers\CashDisbursementController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MunicipalityController;

// Basic test route
Route::get('/', function () {
    return response()->json(['message' => 'Laravel backend is running.']);
});

// Resource routes
Route::resources([
    'clients' => ClientController::class,
    'payees' => PayeeController::class,
    'client-assistances' => ClientAssistanceController::class,
    'assistance-types' => AssistanceTypeController::class,
    'assistance-categories' => AssistanceCategoryController::class,
    'requirements' => RequirementController::class,
    'claims' => ClaimController::class,
    'check-claims-payments' => CheckClaimsPaymentController::class,
    'cash-claims-payments' => CashClaimsPaymentController::class,
    'cash-disbursements' => CashDisbursementController::class,
    'logins' => LoginController::class,
    'municipalities' => MunicipalityController::class,
]);
