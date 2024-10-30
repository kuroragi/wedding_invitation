<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index($id, $bride, $guest){
        $data['id'] = $id;
        $data['guests'] = explode('-', $guest);
        return view('pages.adnan_cici', $data);
    }

    public function generate_guest($id, $bride){
        //
    }
}
