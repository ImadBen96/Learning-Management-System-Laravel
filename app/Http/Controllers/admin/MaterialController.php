<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MaterialController extends Controller
{
    public function index(){
        return view('admin.materials.index');
    }
    public function delete($id) {
        $mat = Material::find($id);
        $mat->delete();

        return redirect()->back();

    }
    public function create(){

        return view('admin.materials.create');
    }
    public function store(Request $request){
        $request->validate([
            'material_name' => 'required|string',
            'module_id' => 'required',
        ]);
        if ($request->hasFile('mat')){
            $file = $request->file('mat');
            $fileName = (string) Str::uuid();
            $folder = config('filesystems.disks.do.folder');
            $path = $file->store('public');
        }
        Material::create(["title" => $request->material_name , "module_id" => $request->module_id , "url"=> $path]);
        return redirect()->route('materials.index');
    }
}
