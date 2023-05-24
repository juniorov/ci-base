<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'hello' => 'Hello World'
        ];
        return view('index', $data);
    }
}
