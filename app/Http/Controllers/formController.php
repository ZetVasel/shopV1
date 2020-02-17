<?php

namespace App\Http\Controllers;


use App\Save_email;
use Illuminate\Http\Request;

class formController extends Controller
{
    public function storeEmail(Request $request)
    {
        $this->validate($request, [
            'email'=> 'string|email|max:225',
        ]);

        $data = new Save_email();
        $data->email = $request->email;

        $data->save();

        return redirect('/');

    }
}
