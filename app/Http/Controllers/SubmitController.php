<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;

class SubmitController extends Controller
{
    public function store(Request $request)
    {
        $answers = new Form($request->all());

        $answers->save();

        return redirect('submit');

    }
}
