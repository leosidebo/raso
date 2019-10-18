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

        $id = $answers->id;
        return redirect($id);

    }

    public function show($id)
    {
        $answer = Form::find($id);

        return view('story', ['answer' => $answer]);
    }
}
