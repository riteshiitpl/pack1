<?php

namespace Invoidea\SimpleContact\Http\Controllers;
use Illuminate\Http\Request;
use Invoidea\SimpleContact\Models\SimpleForm;
use Illuminate\Support\Session;

class SimpleFormController extends Controller
{
    public function index()
    {
        return view('simpleform::siform.index');
    }

    public function store(Request $request)
    {
        
        $input = $request->except(['_token']);
        SimpleForm::create($input);
        return redirect()->back()->with('success','Form Submitted !');
    }

}