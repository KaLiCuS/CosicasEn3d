<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Rutas Públicas
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'sendMail'])->name('contact.send');

Route::get('/quienes-somos', function () {
    return view('quienes-somos');
})->name('quienes-somos');

Route::get('ubicacion', function () {
    return view('ubicacion');
});

Route::get('blog', function () {
    return view('blog');
});

/*
|--------------------------------------------------------------------------
| Rutas Autenticadas
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Perfil de usuario
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rutas para clientes
    Route::middleware(['role:client'])->group(function () {
        // Pedidos del cliente
        Route::get('/my-orders', 'OrderController@myOrders')->name('client.orders');
        Route::get('/my-orders/{order}', 'OrderController@show')->name('client.orders.show');
        Route::post('/orders', 'OrderController@store')->name('client.orders.store');
        
        // Modelos 3D del cliente
        Route::get('/my-models', 'ModelController@myModels')->name('client.models');
        Route::post('/my-models', 'ModelController@store')->name('client.models.store');
        Route::get('/my-models/{model}', 'ModelController@show')->name('client.models.show');
        Route::put('/my-models/{model}', 'ModelController@update')->name('client.models.update');
        Route::delete('/my-models/{model}', 'ModelController@destroy')->name('client.models.destroy');
        
        // Presupuestos
        Route::post('/quote-request', 'QuoteController@request')->name('client.quote.request');
        Route::get('/my-quotes', 'QuoteController@myQuotes')->name('client.quotes');
    });

    // Rutas para operadores
    Route::middleware(['role:operator|manager|admin'])->group(function () {
        // Gestión de pedidos
        Route::get('/orders/queue', 'OrderController@queue')->name('operator.orders.queue');
        Route::get('/orders/process/{order}', 'OrderController@process')->name('operator.orders.process')->middleware('permission:procesar pedidos');
        Route::put('/orders/{order}/status', 'OrderController@updateStatus')->name('operator.orders.status')->middleware('permission:procesar pedidos');
        
        // Gestión de impresoras
        Route::get('/printers/status', 'PrinterController@status')->name('operator.printers.status');
        Route::put('/printers/{printer}/calibrate', 'PrinterController@calibrate')->name('operator.printers.calibrate');
        Route::put('/printers/{printer}/maintenance', 'PrinterController@maintenance')->name('operator.printers.maintenance');
        
        // Reportes de producción
        Route::get('/production/daily', 'ProductionController@dailyReport')->name('operator.production.daily');
        Route::get('/production/issues', 'ProductionController@issues')->name('operator.production.issues');
    });

    // Rutas para managers
    Route::middleware(['role:manager|admin'])->group(function () {
        Route::get('/inicio', [AdminController::class, 'index'])->name('admin.index');
        
        // Gestión de productos y materiales
        Route::resource('products', 'ProductController')->middleware('permission:crear productos');
        Route::resource('materials', 'MaterialController');
        Route::post('/materials/order', 'MaterialController@createOrder')->name('materials.order');
        
        // Gestión de presupuestos
        Route::get('/quotes/pending', 'QuoteController@pending')->name('manager.quotes.pending');
        Route::put('/quotes/{quote}/approve', 'QuoteController@approve')->name('manager.quotes.approve');
        Route::put('/quotes/{quote}/reject', 'QuoteController@reject')->name('manager.quotes.reject');
        
        // Reportes y estadísticas
        Route::get('/reports/sales', 'ReportController@sales')->name('manager.reports.sales');
        Route::get('/reports/production', 'ReportController@production')->name('manager.reports.production');
        Route::get('/reports/materials', 'ReportController@materials')->name('manager.reports.materials');
        
        // Gestión de descuentos y promociones
        Route::resource('discounts', 'DiscountController');
        Route::post('/discounts/{discount}/activate', 'DiscountController@activate')->name('discounts.activate');
    });

    // Rutas para administradores
    Route::middleware(['role:admin'])->group(function () {
        // Gestión de roles y permisos
        Route::resource('roles', RoleController::class);
        Route::resource('permissions', PermissionController::class);

        // Gestión de usuarios
        Route::resource('users', 'UserController')->middleware('permission:ver usuarios');
        Route::put('/users/{user}/activate', 'UserController@activate')->name('users.activate');
        Route::put('/users/{user}/deactivate', 'UserController@deactivate')->name('users.deactivate');
        
        // Configuración del sistema
        Route::get('/settings/system', 'SettingController@system')->name('admin.settings.system');
        Route::put('/settings/system', 'SettingController@updateSystem')->name('admin.settings.system.update');
        Route::get('/settings/email', 'SettingController@email')->name('admin.settings.email');
        Route::put('/settings/email', 'SettingController@updateEmail')->name('admin.settings.email.update');
        
        // Logs y auditoría
        Route::get('/logs/system', 'LogController@system')->name('admin.logs.system');
        Route::get('/logs/access', 'LogController@access')->name('admin.logs.access');
        Route::get('/logs/orders', 'LogController@orders')->name('admin.logs.orders');
        
        // Backup y restauración
        Route::get('/backups', 'BackupController@index')->name('admin.backups.index');
        Route::post('/backups/create', 'BackupController@create')->name('admin.backups.create');
        Route::post('/backups/{backup}/restore', 'BackupController@restore')->name('admin.backups.restore');
        Route::delete('/backups/{backup}', 'BackupController@destroy')->name('admin.backups.destroy');
    });
});

require __DIR__.'/auth.php';

