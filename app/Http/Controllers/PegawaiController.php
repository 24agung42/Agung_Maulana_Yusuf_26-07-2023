<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function index(): View
    {
        $title = 'Form Data Diri';
        return view('pegawai',[
            'title' => $title
        ]);
    }
}
