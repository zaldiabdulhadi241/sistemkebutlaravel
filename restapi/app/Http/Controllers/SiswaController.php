<?php

namespace App\Http\Controllers;

class SiswaController extends Controller
{
    public function __invoke()
    {
        return "<h1>Saya Siswa dari Controller</h1>";
    }

    public function detail($id)
    {
        return "<h1>Saya Siswa dari Controller dengan id $id</h1>";
    }

}
