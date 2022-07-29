<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;



class ContentController extends Controller
{
public function input()
{
return view('contents.input');
}

public function save(Request $request)
{
    $input_content = new Content();
    $input_content->content = $request['content'];
    $input_content->save();

    return redirect(route('input'));
}
}
