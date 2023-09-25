<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Actualite;
use Illuminate\Http\Request;

class ActualiteController extends Controller
{
    public function index(){
        $actualites = Actualite::all();

        return view('admin.actualite.index',compact('actualites'));
    }
    public function delete($id) {
        $actualites = Actualite::findOrFail($id);
        $actualites->delete();

        return redirect()->back();

    }
    public function edit($id){
        $actualites = Actualite::findOrFail($id);

        return view('admin.actualite.edit',compact('actualites'));
    }
    public function create(){
        return view('admin.actualite.create');
    }
    public function store(Request $request){









        if ($request->has('contenu_ar')){

            $contenu_ar = $request->input('contenu_ar');

            $dom_ar = new \DOMDocument();
            $dom_ar->loadHTML('<?xml encoding="utf-8" ?>' . $contenu_ar);


            $images_ar = $dom_ar->getElementsByTagName('img');

            foreach($images_ar as $ar => $img_ar){
                $data_ar = $img_ar->getAttribute('src');

                list($type, $data_ar) = explode(';', $data_ar);
                list(, $data_ar)      = explode(',', $data_ar);
                $data_ar = base64_decode($data_ar);
                $image_name_ar= "/images/contenu_ar/" . time().$ar.'.png';
                $path = public_path() . $image_name_ar;
                file_put_contents($path, $data_ar);

                $img_ar->removeAttribute('src');
                $img_ar->setAttribute('src', $image_name_ar);
            }

            $contenu_ar = $dom_ar->saveHTML();


        }


        if ($request->has('contenu_fr')){

            $contenu_fr = $request->input('contenu_fr');

            $dom_fr = new \DOMDocument();
            $dom_fr->loadHTML('<?xml encoding="utf-8" ?>' . $contenu_fr);

            $images_fr = $dom_fr->getElementsByTagName('img');

            foreach($images_fr as $fr => $img_fr){
                $data_fr = $img_fr->getAttribute('src');
                list($type, $data_fr) = explode(';', $data_fr);
                list(, $data_fr)      = explode(',', $data_fr);
                $data_fr = base64_decode($data_fr);
                $image_name= "/images/contenu_fr/" . time().$fr.'.png';
                $path = public_path() . $image_name;
                file_put_contents($path, $data_fr);

                $img_fr->removeAttribute('src');
                $img_fr->setAttribute('src', $image_name);
            }

            $contenu_fr = $dom_fr->saveHTML();
        }




        if ($request->has('photo')){
            $imageName = time().'.'.$request->photo->extension();

            $request->photo->move(public_path('images/actualite'), $imageName);
        }


        $actualite = Actualite::create([
           'title_fr' => $request->title_fr,
           'title_ar' => $request->title_ar,
           'date_creatnion' => $request->date_creation,
           'photo' => $imageName,
           'contenu_fr' => $contenu_fr,
           'contenu_ar' => $contenu_ar,
           'tags_fr' => $request->tags_fr,
           'tags_ar' => $request->tags_ar,
           'category_fr' => NULL,
           'category_ar' => NULL,
           'lieu_fr' => $request->lieu_fr,
           'lieu_ar' => $request->lieu_ar,
        ]);


        return redirect()->route('actualite.index')->with(['success' => 'Actualité a crée']);






    }

    public function update($id,Request $request){
        $actualite = Actualite::findOrFail($id);


        $request->validate([

            'title_fr' => 'required|string',
            'title_ar' => 'required|string',
            'contenu_ar' => 'required',
            'contenu_fr' => 'required',
        ]);

        if ($request->has('photo')){


            $request->validate([
                'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            //old photo
            unlink("images/actualite/".$actualite->photo);


            //new photo

            $imageName = time().'.'.$request->photo->extension();

            $request->photo->move(public_path('images/actualite'), $imageName);

        }else{
            $imageName = $actualite->photo;
        }

        if ($request->has('contenu_ar')){
            $contenu_ar = $request->input('contenu_ar');


            $dom_ar = new \DOMDocument();
            $dom_ar->loadHTML('<?xml encoding="utf-8" ?>' . $contenu_ar);


            $images_ar = $dom_ar->getElementsByTagName('img');

            foreach($images_ar as $ar => $img_ar){
                $data_ar = $img_ar->getAttribute('src');


                if (str_contains($data_ar,'base64')){

                    list($type, $data_ar) = explode(';', $data_ar);
                    list(, $data_ar)      = explode(',', $data_ar);

                    $data_ar = base64_decode($data_ar);
                    $image_name_ar= "/images/contenu_ar/" . time().$ar.'.png';
                    $path = public_path() . $image_name_ar;
                    file_put_contents($path, $data_ar);

                    $img_ar->removeAttribute('src');
                    $img_ar->setAttribute('src', $image_name_ar);
                }




            }

            $contenu_ar = $dom_ar->saveHTML();




        }


        if ($request->has('contenu_fr')){

            $contenu_fr = $request->input('contenu_fr');

            $dom_fr = new \DOMDocument();
            $dom_fr->loadHTML('<?xml encoding="utf-8" ?>' . $contenu_fr);

            $images_fr = $dom_fr->getElementsByTagName('img');

            foreach($images_fr as $fr => $img_fr){
                $data_fr = $img_fr->getAttribute('src');
                if (str_contains($data_fr,'base64')){
                    list($type, $data_fr) = explode(';', $data_fr);
                    list(, $data_fr)      = explode(',', $data_fr);
                    $data_fr = base64_decode($data_fr);
                    $image_name= "/images/contenu_fr/" . time().$fr.'.png';
                    $path = public_path() . $image_name;
                    file_put_contents($path, $data_fr);

                    $img_fr->removeAttribute('src');
                    $img_fr->setAttribute('src', $image_name);
                }

            }

            $contenu_fr = $dom_fr->saveHTML();

        }

        $actualite->update([

            'title_fr' => $request->title_fr,
            'title_ar' => $request->title_ar,
            'date_creatnion' => $request->date_creation,
            'photo' => $imageName,
            'contenu_fr' => $contenu_fr,
            'contenu_ar' => $contenu_ar,
            'tags_fr' => $request->tags_fr,
            'tags_ar' => $request->tags_ar,
            'category_fr' => NULL,
            'category_ar' => NULL,
            'lieu_fr' => $request->lieu_fr,
            'lieu_ar' => $request->lieu_ar,


        ]);

        return redirect()->route('actualite.index')->with(['success' => 'Actualité Est Mise à jour']);

    }
}
