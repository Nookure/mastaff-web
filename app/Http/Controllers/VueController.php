<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VueController extends Controller
{
    public function render()
    {
        $path = public_path('vue/index.html');
        abort_unless(file_exists($path), 400, 'Page is not Found!');
        return file_get_contents($path);
    }
}
