<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Carriere;
use Illuminate\Http\Request;

class CarriereController extends Controller
{
    public function index(){
        $carrieres = Carriere::all();


        return view('admin.carriere.index',compact('carrieres'));
    }
    public function create(){
         return view('admin.carriere.create');
    }
    public function edit($id){
        $carriere = Carriere::findOrFail($id);

        return view('admin.carriere.edit',compact("carriere"));
    }
    public function delete($id) {
        $carriere = Carriere::findOrFail($id);
        $carriere->delete();

        return redirect() ->back();
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
                $image_name_ar= "/images/carriere/contenu_ar/" . time().$ar.'.png';
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
            $dom_fr->loadHTML('<?xml encoding="utf-8" ?>' . $contenu_fr);;
            $images_fr = $dom_fr->getElementsByTagName('img');

            foreach($images_fr as $fr => $img_fr){
                $data_fr = $img_fr->getAttribute('src');
                list($type, $data_fr) = explode(';', $data_fr);
                list(, $data_fr)      = explode(',', $data_fr);
                $data_fr = base64_decode($data_fr);
                $image_name= "/images/carriere/contenu_fr/" . time().$fr.'.png';
                $path = public_path() . $image_name;
                file_put_contents($path, $data_fr);

                $img_fr->removeAttribute('src');
                $img_fr->setAttribute('src', $image_name);
            }

            $contenu_fr = $dom_fr->saveHTML();
        }

        if ($request->has('photo')){
            $imageName = time().'.'.$request->photo->extension();

            $request->photo->move(public_path('images/carriere'), $imageName);
        }
        if ($request->has('attachement')){
            $fileName = time().'.'.$request->attachement->extension();

            $request->attachement->move(public_path('images/carriere/attachment'), $fileName);
        }


        $carriere = Carriere::create([
           'title_fr' => $request->title_fr,
           'title_ar' => $request->title_ar,
           'content_fr' => $contenu_fr,
           'content_ar' => $contenu_ar,
           'photo' => $imageName,
           'date_creation' => $request->date_creation,
           'email' => $request->email,
           'tele' => $request->tele,
           'attachement' => $fileName,
           'short_description_fr' => $request->short_description_fr,
           'short_description_ar' => $request->short_description_ar,
           'lieu_fr' => $request->lieu_fr,
           'lieu_ar' => $request->lieu_ar,
            'status' => $request->status,
        ]);


        return redirect()->route('carriere.index');


    }
    public function update($id,Request $request){


        $request->validate([

            'title_fr' => 'required|string',
            'title_ar' => 'required|string',
            'contenu_ar' => 'required',
            'contenu_fr' => 'required',
        ]);

        $carriere = Carriere::find($id);

        if ($request->has('photo')){

            $request->validate([
                'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            //old photo
            unlink("images/carriere/".$carriere->photo);


            //new photo

            $imageName = time().'.'.$request->photo->extension();

            $request->photo->move(public_path('images/carriere'), $imageName);



        }else{
            $imageName = $carriere->photo;

        }




        if ($request->has('attachement')){

            //old photo
            unlink("images/carriere/attachment/".$carriere->attachement);


            $fileName = time().'.'.$request->attachement->extension();

            $request->attachement->move(public_path('images/carriere/attachment'), $fileName);
        }else{
            $fileName = $carriere->attachement;
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
                    $image_name_ar= "/images/carriere/contenu_ar/" . time().$ar.'.png';
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
                    $image_name= "/images/carriere/contenu_ar/" . time().$fr.'.png';
                    $path = public_path() . $image_name;
                    file_put_contents($path, $data_fr);

                    $img_fr->removeAttribute('src');
                    $img_fr->setAttribute('src', $image_name);
                }

            }

            $contenu_fr = $dom_fr->saveHTML();


        }



        //update in database !!
        $carriere->update([
            'title_fr' => $request->title_fr,
            'title_ar' => $request->title_ar,
            'content_fr' => $contenu_fr,
            'content_ar' => $contenu_ar,
            'photo' => $imageName,
            'date_creation' => $request->date_creation,
            'email' => $request->email,
            'tele' => $request->tele,
            'attachement' => $fileName,
            'short_description_fr' => $request->short_description_fr,
            'short_description_ar' => $request->short_description_ar,
            'lieu_fr' => $request->lieu_fr,
            'lieu_ar' => $request->lieu_ar,
            'status' => $request->status,
        ]);

        return redirect()->route('carriere.index')->with(['success' => "Offer D'emploi Est Mise à jour."]);


    }
}
