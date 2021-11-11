<?php

namespace App\Http\Controllers;

use App\Models\Plataform;
use Illuminate\Http\Request;

class PlataformController extends Controller
{
    public function index()
    {
        $plataforms = Plataform::all();

        return view('plataforms', [
            'plataforms' => $plataforms,
        ]);
    }

    public function create(Request $request)
    {
        Plataform::create([
            'plataform_name' => $request->input('plataform_name')
        ]);

        return redirect('/plataforms');
    }

    public function delete(Request $request)
    {
        $plataformId = $request->input('plataform_id');
        Plataform::destroy($plataformId);

        return redirect('/plataforms');
    }
}
