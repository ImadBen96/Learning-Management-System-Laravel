<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Carriere;
use App\Models\Carrieres;
use App\Models\Recrutement;
use AWS\CRT\Log;
use Illuminate\Http\Request;

class recrutementController extends Controller
{
    public function index(){
        $recretements = Carrieres::all();

        return view("admin.recrutement.index",compact('recretements'));
    }

    public function delete($id) {
        $recrutments = Carrieres::find($id);
        $recrutments->delete();

        return redirect()->back();
    }
    public function create(){
        return view("admin.recrutement.create");
    }
    public function studentDisp() {
        $carriers = Carriere::all();
            return view('student.recrutement',
            [
                'carriers' => $carriers,
            ]);
    }
    public function edit($id){
       $recrutments = Carrieres::find($id);


       return view("admin.recrutement.edit",compact('recrutments'));
    }
    public function update($id,Request $request){




        $recrutments = Carrieres::find($id);

        if ($request->has('photo')){

            $request->validate([
                'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            //old photo
            unlink("images/recrutement/".$recrutments->photo);


            //new photo

            $imageName = time().'.'.$request->photo->extension();

            $request->photo->move(public_path('images/recrutement/'), $imageName);



        }else{
            $imageName = $recrutments->photo;

        }

        $recrutments->update([

            'post'                       => $request->post,
            'photo'                      => $imageName,
            'societe'                    => $request->societe,
            'date_de_debut'              => $request->date_de_debut,

            'type_de_contrat'            => $request->type_de_contrat,
            'lieu_de_travail'            => $request->lieu_de_travail,
            'caractéristiques_du_poste'  => $request->caractéristiques_du_poste,
            'Formation'                  => $request->Formation,
            'Expérience_professionnelle' => $request->Expérience_professionnelle

        ]);


        return redirect()->route('recrutement.index')->with(['success' => "Carriére Est Mise à jour."]);

    }
    public function store(Request $request){



//        $request->validate([
//            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//            'title_fr' => 'required|string',
//            'title_ar' => 'required|string',
//            'contenu_ar' => 'required',
//            'contenu_fr' => 'required',
//        ]);
//

        if ($request->has('photo')){
            $imageName = time().'.'.$request->photo->extension();

            $request->photo->move(public_path('images/recrutement'), $imageName);
        }else{
            $imageName="";
        }

        $carriere = Carrieres::create([

            'post'                       => $request->post,
            'photo'                      => $imageName,
            'societe'                    => $request->societe,
            'date_de_debut'              => $request->date_de_debut,

            'type_de_contrat'            => $request->type_de_contrat,
            'lieu_de_travail'            => $request->lieu_de_travail,
            'caractéristiques_du_poste'  => $request->caractéristiques_du_poste,
            'Formation'                  => $request->Formation,
            'Expérience_professionnelle' => $request->Expérience_professionnelle

        ]);



        return redirect()->route('recrutement.index')->with(['success' => 'Carriére a crée']);

    }

}
