<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AudioController extends Controller
{
    public function index(){
        return view('admin.audios.index');
    }
    public function create(){
        return view('admin.audios.create');
    }
}
