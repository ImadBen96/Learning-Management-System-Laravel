<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Entrepreneurs;
use Illuminate\Http\Request;

class EntrepreneursController extends Controller
{
    public function index(){

        $entrpreneurs = Entrepreneurs::all();
        return view('admin.entrepreneurs.index',[
            'entrpreneurs' => $entrpreneurs
        ]);
    }
    public function edit($id) {

        return  view('admin.entrepreneurs.edit');
    }
    public function create(){

        return view('admin.entrepreneurs.create');
    }
    public function delete($id) {
        $entrepreneur = Entrepreneurs::find($id);
        $entrepreneur->delete();

        return redirect()->route('entrepreneurs.index');
    }
    public function store(Request $request){







        if ($request->has('image_profile')){
            $imageName = time().'.'.$request->image_profile->extension();

            $request->image_profile->move(public_path('images/entrepreneurs'), $imageName);
        }else{
            $imageName="";
        }
        ///$photo_1
        if ($request->has('photo_1')){
            $photo_1 = time().'.'.$request->photo_1->extension();

            $request->photo_1->move(public_path('images/entrepreneurs/photo_1'), $photo_1);
        }else{
            $photo_1="";
        }
        //$photo_1
        if ($request->has('photo_2')){
            $photo_2 = time().'.'.$request->photo_2->extension();

            $request->photo_2->move(public_path('images/entrepreneurs/photo_2'), $photo_2);
        }else{
            $photo_2="";
        }
        //$photo_3
        if ($request->has('photo_3')){
            $photo_3 = time().'.'.$request->photo_3->extension();

            $request->photo_3->move(public_path('images/entrepreneurs/photo_3'), $photo_3);
        }else{
            $photo_3="";
        }
        //photo_4
        if ($request->has('photo_4')){
            $photo_4 = time().'.'.$request->photo_4->extension();

            $request->photo_4->move(public_path('images/entrepreneurs/photo_4'), $photo_4);
        }else{
            $photo_4="";
        }
        //photo_5
        if ($request->has('photo_5')){
            $photo_5 = time().'.'.$request->photo_5->extension();

            $request->photo_5->move(public_path('images/entrepreneurs/photo_5'), $photo_5);
        }else{
            $photo_5="";
        }
        //photo_6
        if ($request->has('photo_6')){
            $photo_6 = time().'.'.$request->photo_6->extension();

            $request->photo_6->move(public_path('images/entrepreneurs/photo_6'), $photo_6);
        }else{
            $photo_6="";
        }

        if ($request->has('logo')){

            $logo_name = time().'.'.$request->logo->extension();

            $request->logo->move(public_path('images/entrepreneurs/logo'), $logo_name);
        }else{
            $logo_name =  "";
        }

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
                $image_name_ar= "/images/entrepreneurs/contenu_ar/" . time().$ar.'.png';
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
                $image_name= "/images/entrepreneurs/contenu_fr/" . time().$fr.'.png';
                $path = public_path() . $image_name;
                file_put_contents($path, $data_fr);

                $img_fr->removeAttribute('src');
                $img_fr->setAttribute('src', $image_name);
            }

            $contenu_fr = $dom_fr->saveHTML();
        }

        $new_services = array_filter($request->service_name, function($v){
            return !is_null($v) && $v !== '';
        });

//        return implode(",",$new_services);

        $entreprenours = Entrepreneurs::create([
            'image_profile'=>$imageName,
            'title_fr'   => $request->title_fr,
            'title_ar'  => $request->title_ar,
            'niveau_scolaire_fr'  => $request->niveau_scolaire_fr,
            'niveau_scolaire_ar'  => $request->niveau_scolaire_fr,
            'formation_professionnelle_fr' => $request->formation_professionnelle_fr,
            'formation_professionnelle_ar'=> $request->formation_professionnelle_ar,
            'age'=> $request->age,
            'project_name_fr'=> $request->project_name_fr,
            'project_name_ar'=> $request->project_name_ar,
            'logo'=> $logo_name,
            'short_description_fr'=> $request->short_description_fr,
            'short_description_ar'=> $request->short_description_ar,
            'statut_juridique_fr'=> $request->statut_juridique_fr,
            'statut_juridique_ar'=> $request->statut_juridique_ar,
            'category_fr'=> $request->category_fr,
            'category_ar'=> $request->category_ar,
            'secteur_activite_fr'=> $request->secteur_activite_fr,
            'secteur_activite_ar'=> $request->secteur_activite_ar,
            'domiciliation_fr'=> $request->domiciliation_fr,
            'domiciliation_ar'=> $request->domiciliation_ar,
            'canaux_communication_fr'=> $request->canaux_communication_fr,
            'canaux_communication_ar'=> $request->canaux_communication_ar,
            'capitale_initiale'=> $request->capitale_initiale,
            'apport_INDH'=> $request->apport_INDH,
            'apport_entrepreneur'=> $request->apport_entrepreneur,
            'opportunite_financement'=> $request->opportunite_financement,
            'contenu_fr'   => $contenu_fr,
            'contenu_ar'    => $contenu_ar,
            'photo_1' => $photo_1,
            'photo_2' => $photo_2,
            'photo_3' => $photo_3,
            'photo_4' => $photo_4,
            'photo_5' => $photo_5,
            'photo_6' => $photo_6,
            'service_name' => implode(",",$new_services),
        ]);

        return redirect()->route('entrepreneurs.index');

    }
}
