<?php

namespace TripleKay\Crud\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use TripleKay\Crud\Models\Crud;

class CrudController extends Controller
{
    public function create() {
        return view('crud::create');
    }

    public function store()  {
        $data = Crud::create([
            'name' => 'hello',
            'created_at' => now()
        ]);
        return $data;
    }
}
