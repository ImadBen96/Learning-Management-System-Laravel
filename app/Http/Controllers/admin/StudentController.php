<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Acceuil;
use App\Models\Field;
use App\Models\Form;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class StudentController extends Controller
{
    public function index(){
        $acceuils = Acceuil::where('status','active')->get();
//        return $acceuils;
         return view('admin.students.index',compact('acceuils'));
    }
    public function create(){
        return view('admin.students.create');
    }
    public function edit($id) {
        $acceils = Acceuil::find($id);

        return view('admin.students.edit',[
            'acceils' => $acceils,
        ]);
    }
    public function update(Request $request, $id) {
        $acceuil = Acceuil::find($id);

        if ($request->has('image_profile')){
            $imageName = time().'.'.$request->image_profile->extension();

            $request->image_profile->move(public_path('images/acceuil'), $imageName);
        }else{
            $imageName = $acceuil->image_profile;
        }
        if ($request->has('email')) {

            $user = User::find( $acceuil->user_id );
            $user->email = $request->email;
            $user->save();
        }

        $acceuil->update([
            'image_profile' => $imageName,

            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'nationality' => $request->nationality,
            'genre' => $request->genre,
            'date_naissance' => $request->date_naissance,
            'lieu_naissance' => $request->lieu_naissance,
            'territoire' => $request->territoire,
            'autre_province' => $request->autre_province,
            'address' => $request->address,
            'cin' => $request->cin,
            'tel1' => $request->tel1,
            'email1' => $request->email1,
            'tel2' => $request->tel2,
            'connu_notre_service' => implode(',',$request->connu_notre_service),
            'connu_notre_service_autre' => $request->connu_notre_service_autre,
            'membres_de_famille' => $request->membres_de_famille,
            'personnes_ayant_une_activite_salariale' => $request->personnes_ayant_une_activite_salariale,
            'ressources' => $request->ressources,
            'situation_familiale' => $request->situation_familiale,
            'logement' => $request->logement,
            'handicap_quelconque' => $request->handicap_quelconque,
            'type_de_handicap' => $request->type_de_handicap,
            'cause_du_handicap' => $request->cause_du_handicap,
            'mobilite' => $request->mobilite,
            'maladie_chronique' => $request->maladie_chronique,
            'maladie_chronique_oui' => $request->maladie_chronique_oui,
            'rendement_travail' => $request->rendement_travail,
            'rendement_travail_oui' => $request->rendement_travail_oui,
            'niveau_scolaire' => $request->niveau_scolaire,
            'niveau_scolaire_avec_diplome' => $request->niveau_scolaire_avec_diplome,
            'oriente_vers' => $request->oriente_vers,
            'oriente_vers_autre' => $request->oriente_vers_autre,
            'objectif_professionnel' => $request->objectif_professionnel,
            'souhait_formation' => $request->souhait_formation,
            'souhait_formation_oui' => $request->souhait_formation_oui,
            'disponible' => $request->disponible,
            'status'     => 'in_active'
        ]);


        return redirect()->route('student.index');


    }

    public function delete($id) {
        $acceuil = Acceuil::find($id);
        $user = User::find($acceuil->user_id);

        $acceuil->delete();
        $user->delete();
        return redirect()->back();
    }
    public function storeAccount(Request $request){









     //upload profile image

        if ($request->has('image_profile')){
            $imageName = time().'.'.$request->image_profile->extension();

            $request->image_profile->move(public_path('images/acceuil'), $imageName);
        }else{
            $imageName = '';
        }
     //create acceuil table

        $acceuil = Acceuil::create([

            'image_profile' => $imageName,

            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'nationality' => $request->nationality,
            'genre' => $request->genre,
            'date_naissance' => $request->date_naissance,
            'lieu_naissance' => $request->lieu_naissance,
            'territoire' => $request->territoire,
            'autre_province' => $request->autre_province,
            'address' => $request->address,
            'cin' => $request->cin,
            'tel1' => $request->tel1,
            'email1' => $request->email1,
            'tel2' => $request->tel2,
            'connu_notre_service' => implode(',',$request->connu_notre_service),
            'connu_notre_service_autre' => $request->connu_notre_service_autre,
            'membres_de_famille' => $request->membres_de_famille,
            'personnes_ayant_une_activite_salariale' => $request->personnes_ayant_une_activite_salariale,
            'ressources' => $request->ressources,
            'situation_familiale' => $request->situation_familiale,
            'logement' => $request->logement,
            'handicap_quelconque' => $request->handicap_quelconque,
            'type_de_handicap' => $request->type_de_handicap,
            'cause_du_handicap' => $request->cause_du_handicap,
            'mobilite' => $request->mobilite,
            'maladie_chronique' => $request->maladie_chronique,
            'maladie_chronique_oui' => $request->maladie_chronique_oui,
            'rendement_travail' => $request->rendement_travail,
            'rendement_travail_oui' => $request->rendement_travail_oui,
            'niveau_scolaire' => $request->niveau_scolaire,
            'niveau_scolaire_avec_diplome' => $request->niveau_scolaire_avec_diplome,
            'oriente_vers' => $request->oriente_vers,
            'oriente_vers_autre' => $request->oriente_vers_autre,
            'objectif_professionnel' => $request->objectif_professionnel,
            'souhait_formation' => $request->souhait_formation,
            'souhait_formation_oui' => $request->souhait_formation_oui,
            'disponible' => $request->disponible,
            'status'     => 'in_active'

        ]);


        return redirect()->route('thankyou');




    }
    public function thankyou()
    {
        return view('landing_page.thank_you');
    }


    public function createAccount(){
        return view('landing_page.create_account');
    }

    public function store(Request $request){


        //create user
        $user = User::create([

            'full_name' => $request->first_name .' '. $request->last_name,
            'role_name' => 'STUDENT',
            'email' => $request->email,
            'address' => $request->address,
            'phone_number' => $request->tel1,
            'date_of_birth' => $request->date_naissance,
            'password' => bcrypt($request->password)
        ]);

        //upload profile image

        if ($request->has('image_profile')){
            $imageName = time().'.'.$request->image_profile->extension();

            $request->image_profile->move(public_path('images/acceuil'), $imageName);
        }else{
            $imageName = '';
        }

        //create acceuil
        $acceuil = Acceuil::create([

            'image_profile' => $imageName,
            'user_id' => $user->id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'nationality' => $request->nationality,
            'genre' => $request->genre,
            'date_naissance' => $request->date_naissance,
            'lieu_naissance' => $request->lieu_naissance,
            'territoire' => $request->territoire,
            'autre_province' => $request->autre_province,
            'address' => $request->address,
            'cin' => $request->cin,
            'tel1' => $request->tel1,
            'email1' => $request->email1,
            'tel2' => $request->tel2,
            'connu_notre_service' => implode(',',$request->connu_notre_service),
            'connu_notre_service_autre' => $request->connu_notre_service_autre,
            'membres_de_famille' => $request->membres_de_famille,
            'personnes_ayant_une_activite_salariale' => $request->personnes_ayant_une_activite_salariale,
            'ressources' => $request->ressources,
            'situation_familiale' => $request->situation_familiale,
            'logement' => $request->logement,
            'handicap_quelconque' => $request->handicap_quelconque,
            'type_de_handicap' => $request->type_de_handicap,
            'cause_du_handicap' => $request->cause_du_handicap,
            'mobilite' => $request->mobilite,
            'maladie_chronique' => $request->maladie_chronique,
            'maladie_chronique_oui' => $request->maladie_chronique_oui,
            'rendement_travail' => $request->rendement_travail,
            'rendement_travail_oui' => $request->rendement_travail_oui,
            'niveau_scolaire' => $request->niveau_scolaire,
            'niveau_scolaire_avec_diplome' => $request->niveau_scolaire_avec_diplome,
            'oriente_vers' => $request->oriente_vers,
            'oriente_vers_autre' => $request->oriente_vers_autre,
            'objectif_professionnel' => $request->objectif_professionnel,
            'souhait_formation' => $request->souhait_formation,
            'souhait_formation_oui' => $request->souhait_formation_oui,
            'disponible' => $request->disponible,
            'status'     => 'active'

        ]);


        return redirect()->back();

    }
}
