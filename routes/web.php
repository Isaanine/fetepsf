<?php

use App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\OngController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MuralController;
use App\Http\Controllers\VagaVoluntarioController;
use App\Http\Controllers\SearchController;

// Paginas padrão
Route::get('/', [OngController::class, 'index']);
Route::get('/donates', function () {
    return view('user/doacoes');
});
Route::get('/ongs', [OngController::class, 'index2']);
Route::get('/volunteer', [VagaVoluntarioController::class, 'index']);
Route::get('/ongs/{Id_Ong}', [OngController::class, 'show'])->name('ongs.show');
Route::get('/ongs/{Id_Ong}', [CursoController::class, 'index_show']);
Route::get('/search', [SearchController::class, 'search'])->name('search');

// Registro, Login e Logout
Route::get('/signin', function () {
    return view('user/signIn');
});
Route::post('/login', [LoginController::class, 'login']);
Route::get('/signup', function () {
    return view('user/signUp');
});
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');




// Ong
Route::get('/ong/signup', function () {
    return view('user/ong/signUp');
});
Route::get('/ong/account', function () {
    return view('user.ong.account');
})->name('/ong/account')->middleware(\App\Http\Middleware\Auth::class);
Route::post('/createong', [OngController::class, 'create']);
Route::get('/ong/account', [CursoController::class, 'index_account']);//->middleware(\App\Http\Middleware\Auth::class);
Route::get('/ong/mural', function () {
    return view('user/ong/mural');
})->middleware(\App\Http\Middleware\Auth::class);

Route::post('/createvolunteer', [VagaVoluntarioController::class, 'create'])->middleware(\App\Http\Middleware\Auth::class);
Route::get('/ong/deletevolunteer/{Id_Vaga}', [VagaVoluntarioController::class, 'destroy'])->middleware(\App\Http\Middleware\Auth::class);
Route::get('/ong/volunteer', [VagaVoluntarioController::class, 'show'])->middleware(\App\Http\Middleware\Auth::class);

Route::post('/createmural', [MuralController::class, 'create']);
Route::post('/ong/store', [OngController::class, 'store'])->name('ongs.store');
Route::get('/ongs/{Id_Ong}/edit', [OngController::class, 'edit'])->name('ongs.edit');
Route::put('/ongs/{Id_Ong}', [OngController::class, 'update'])->name('ongs.update');


//Curso CRUD
Route::get('/ong/courses', [CursoController::class, 'index'])->name('cursos.index');
Route::resource('cursos', CursoController::class);
Route::post('/cursos', [CursoController::class, 'store'])->name('cursos.store');
Route::get('/cursos/{id}/edit', [CursoController::class, 'edit'])->name('cursos.edit');
Route::put('/cursos/{Id_Curso}', [CursoController::class, 'update'])->name('cursos.update');
Route::delete('/cursos/{id}', [CursoController::class, 'destroy'])->name('cursos.destroy');


// Aluno
Route::get('/aluno/signup', function () {
    return view('user/aluno/signUp');
});
Route::post('/createaluno', [AlunoController::class, 'create']);
Route::get('/aluno/account', function () {
    return view('user.aluno.account');
})->name('alunoaccount')->middleware(\App\Http\Middleware\Auth::class);
Route::get('/aluno/mural', [MuralController::class, 'getall'])->middleware(\App\Http\Middleware\Auth::class);
Route::get('/aluno/list', function () {
    return view('user.aluno.list');
})->middleware(\App\Http\Middleware\Auth::class);
Route::get('/aluno/chat', function () {
    return view('user.aluno.chat');
})->middleware(\App\Http\Middleware\Auth::class);
Route::post('/aluno/store', [AlunoController::class, 'store'])->name('alunos.store');
Route::get('/aluno/{id}/edit', [AlunoController::class, 'edit'])->name('alunos.edit');
Route::put('/aluno/{Id_Aluno}', [AlunoController::class, 'update'])->name('alunos.update');


// Professor
Route::get('/prof/signup', function () {
    return view('user/prof/signUp');
});
Route::post('/createprofessor', [ProfessorController::class, 'create']);
Route::get('/prof/account', function () {
    return view('user.prof.account');
})->name('profaccount')->middleware(\App\Http\Middleware\Auth::class);

Route::get('/prof/mural', [MuralController::class, 'getall2'])->middleware(\App\Http\Middleware\Auth::class);

Route::get('/prof/list', function () {
    return view('user.prof.list');
})->middleware(\App\Http\Middleware\Auth::class);
Route::get('/prof/chat', function () {
    return view('user.prof.chat');
})->middleware(\App\Http\Middleware\Auth::class);

Route::get('/prof/notas', function () {
    return view('user.prof.notas');
})->middleware(\App\Http\Middleware\Auth::class);
Route::post('/professor/store', [ProfessorController::class, 'store'])->name('professor.store');
Route::get('/prof/{Id_Professor}/edit', [ProfessorController::class, 'edit'])->name('professores.edit');
Route::put('/professores/{Id_Professor}', [ProfessorController::class, 'update'])->name('professores.update');

// Admin
Route::get('/admin', [Admin::class, 'getOng']);

Route::get('/aprovarong', function () {
    return view('admin/aprovarOng');
});
Route::delete('/apagarong/{Id_Ong}', [Admin::class, 'deleteOng'])->name('deleteong');
Route::get('/searchongs', [Admin::class, 'searchOngs'])->name('searchOngs');
Route::get('/ong/{Id_Ong}', [Admin::class, 'showOng'])->name('showOng');

Route::get('/ongs/{Id_Ong}', [OngController::class, 'show'])->name('ongs.show');
Route::get('ongs/show', [CursoController::class, 'index_show']);
Route::get('/search', [SearchController::class, 'search'])->name('search');
