<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LevelController extends Controller
{
    public function index(LevelDataTable $dataTable)
    {
        return $dataTable->render('level.index');
    }

    public function create(): View
    {
        return view('level.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate();

        $validated = $request->safe()->only(['level_id', 'level_kode', 'level_nama']);
        $validated = $request->safe()->except(['level_id', 'level_kode', 'level_nama']);

        return redirect('/user');
    }
}
