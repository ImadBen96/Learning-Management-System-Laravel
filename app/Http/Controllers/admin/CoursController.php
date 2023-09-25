<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Cours;
use App\Models\Section;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CoursController extends Controller
{
    public function index(){
        $coures = Cours::with('category')->get();

        $categories = Category::all();
        return view('admin.cours.index',compact(['categories','coures']));
    }
    public function create(){

        return view('admin.cours.create');
    }
    public function category(){
        $categories = Category::all();

        return view('admin.cours.category_index',compact('categories'));
    }
    public function categoryCreate(){
        return view('admin.cours.category_create');
    }
    public function categoryCours(){
        return view('admin.cours.cours_category');
    }
    public function Modelindex(){
        $coures = Cours::all();
        $models = Section::all();

        return view('admin.cours.index_models',compact(['coures','models']));
    }
    public function Modelstore(Request $request){
        $request->validate([
            'model_name' => 'required|string',
            'coure_id' => 'required|exists:coures,id',
        ]);

        $model = Section::create([
            'title' => $request->model_name,
            'coure_id'   => $request->coure_id,
        ]);

        return redirect()->route('models.index')->with(['success' => 'Le Model est créé' ]);
    }
    public function store(Request $request){


        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'cours_name' => 'required|string',
            'category_id' => 'required|exists:categories,id',
        ]);

        if ($request->has('photo')){
            $imageName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('images/cours'), $imageName);
        }
        if ($request->has('photo_animateur')){
            $imageAnimName = 'animateur'.time().'.'.$request->photo_animateur->extension();
            $request->photo_animateur->move(public_path('images/cours'), $imageAnimName);
        }

        $cours = Cours::create([
           'cours_name' => $request->cours_name,
           'description' => $request->description,
           'photo' => $imageName,
           'status' => $request->status,
           'category_id' => $request->category_id,
            'animateur' => $request->animateur_name,
            'animateur_descriptor' => $request->animateur_desc,
            'animateur_pic' => $imageAnimName,
        ]);

        return redirect()->route('cours.index')->with([ 'success' => 'Le cours est créé' ]);
    }
    public function edit($id){
        $cource = Cours::find($id);
        $categories = Category::all();
        return view('admin.cours.edit',
        [
            'cource' => $cource,
            'categories' => $categories
        ]);
    }

    public function update(Request $request,$id) {
        $cource = Cours::find($id);
        if ($request->has('photo')){
            $imageName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('images/cours'), $imageName);
        }else{
            $imageName = $cource->photo;
        }
        if ($request->has('photo_animateur')){
            $imageAnimName = 'animateur'.time().'.'.$request->photo_animateur->extension();
            $request->photo_animateur->move(public_path('images/cours'), $imageAnimName);
        }else{
            $imageAnimName = $cource->animateur_pic;
        }

        $cours = Cours::create([
            'cours_name' => $request->cours_name,
            'description' => $request->description,
            'photo' => $imageName,
            'status' => $request->status,
            'category_id' => $request->category_id,
            'animateur' => $request->animateur_name,
            'animateur_descriptor' => $request->animateur_desc,
            'animateur_pic' => $imageAnimName,
        ]);

        return redirect()->route('cours.index')->with([ 'success' => 'Le cours est Modifiée' ]);

    }
    public function Modeledit($id){
        $model = Section::find($id);
        $cources = Cours::all();
        return view('admin.cours.model_edit',[
            'model' => $model,
            'cources' => $cources
        ]);
    }

    public function Modelupdate(Request $request,$id) {
        $model = Section::find($id);
        $request->validate([
            'model_name' => 'required|string',
            'coure_id' => 'required|exists:coures,id',
        ]);

        $model->update([
            'title' => $request->model_name,
            'coure_id'   => $request->coure_id,
        ]);

        return redirect()->route('models.index')->with(['success' => 'Le Model est Changer' ]);
    }
    public function categoryStore(Request $request){

        $request->validate([

            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_name' => 'required|string',

        ]);


        if ($request->has('photo')){
            $imageName = time().'.'.$request->photo->extension();

            $request->photo->move(public_path('images/categories'), $imageName);
        }


        $categories = Category::create([
           'category_name' => $request->category_name,
           'description' => $request->description,
           'photo' => $imageName,
           'sous_category' => $request->sous_category,
        ]);

        return redirect()->route('category.index')->with(['success' => 'Le Cours Est Créé']);


    }
}
