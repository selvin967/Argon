<?php

use App\Http\Controllers\Example\AnimalController;
use App\Http\Controllers\Example\CategoryController;
use App\Http\Controllers\Example\PostController;
use App\Http\Controllers\Example\ProductController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CarrerController;
use App\Http\Controllers\ProfileController;
use App\Livewire\Products\ProductList;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\TechnicianController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SparePartController;
use App\Http\Controllers\RecommendationController;
use App\Models\Customer;
use App\Models\Vehicle;
use App\Models\Maintenance;
use App\Models\Technician;
use App\Models\Service;
use App\Models\SparePart;
use App\Models\Recommendation;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $customerCount = Customer::count();
    $vehicleCount = Vehicle::count();
    $maintenanceCount = Maintenance::count();
    $technicianCount = Technician::count();
    $serviceCount = Service::count();
    $sparePartCount = SparePart::count();
    $recommendationCount = Recommendation::count();
    $latestMaintenances = Maintenance::with(['customer', 'vehicle'])->latest()->take(5)->get();
    $latestServices = Service::latest()->take(5)->get();
    $latestSpareParts = SparePart::latest()->take(5)->get();

    return view('dashboard', compact(
        'customerCount',
        'vehicleCount',
        'maintenanceCount',
        'technicianCount',
        'serviceCount',
        'sparePartCount',
        'recommendationCount',
        'latestMaintenances',
        'latestServices',
        'latestSpareParts'
    ));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::prefix('/profile')->group(function () {
        Route::get('/', [ProfileController::class, 'index'])->name('profile.index');
        Route::get('/edit', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/update', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/destroy', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    //rutas de ejemplo sin controlador con prefijo
    Route::prefix('/ejemplo')->group(function () {
        Route::get('/index', fn() => view('examples.ejemplo.index'))->name('ejemplo.index');
        Route::get('/create', fn() => view('examples.ejemplo.create'))->name('ejemplo.create');
        Route::get('/edit', fn() => view('examples.ejemplo.edit'))->name('ejemplo.edit');
        Route::get('/show', fn() => view('examples.ejemplo.show'))->name('ejemplo.show');
    });

    //rutas con controlador y prefix
    Route::prefix('/categories')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
        Route::post('/', [CategoryController::class, 'store'])->name('categories.store');
        Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
        Route::put('/{category}', [CategoryController::class, 'update'])->name('categories.update');
        Route::delete('/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
        Route::get('/{category}', [CategoryController::class, 'show'])->name('categories.show');
    });

    Route::prefix('/posts')->group(function () {
        Route::get('/', [PostController::class, 'index'])->name('posts.index');
        Route::get('/create', [PostController::class, 'create'])->name('posts.create');
        Route::post('/', [PostController::class, 'store'])->name('posts.store');
        Route::get('/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
        Route::put('/{post}', [PostController::class, 'update'])->name('posts.update');
        Route::delete('/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
        Route::get('/{post}', [PostController::class, 'show'])->name('posts.show');
    });

    Route::prefix('/animals')->group(function () {
        Route::get('/', [AnimalController::class, 'index'])->name('animals.index');
        Route::get('/create', [AnimalController::class, 'create'])->name('animals.create');
        Route::post('/', [AnimalController::class, 'store'])->name('animals.store');
        Route::get('/{animal}/edit', [AnimalController::class, 'edit'])->name('animals.edit');
        Route::put('/{animal}', [AnimalController::class, 'update'])->name('animals.update');
        Route::delete('/{animal}', [AnimalController::class, 'destroy'])->name('animals.destroy');
        Route::get('/{animal}', [AnimalController::class, 'show'])->name('animals.show');
    });

    //rutas de posts de tipo resource
    Route::resource('/students', StudentController::class);
    Route::resource('/carrers', CarrerController::class);

    // Sistema de Gestión de Mantenimiento de Vehículos
    Route::resource('/customers', CustomerController::class);
    Route::resource('/vehicles', VehicleController::class);
    Route::resource('/maintenances', MaintenanceController::class);
    Route::resource('/technicians', TechnicianController::class);
    Route::resource('/services', ServiceController::class);
    Route::resource('/spareparts', SparePartController::class);
    Route::resource('/recommendations', RecommendationController::class);

    // Route::resource('/categories', CategoryController::class);
    // Route::resource('/animals', AnimalController::class);
});

require __DIR__ . '/auth.php';
