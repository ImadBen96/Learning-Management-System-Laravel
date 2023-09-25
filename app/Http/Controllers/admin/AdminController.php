<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Acceuil;
use App\Models\Actualite;
use App\Models\Category;
use App\Models\Cours;
use App\Models\User;
use AWS\CRT\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function index(){

        $type = Auth::user()->role_name;

        if ($type == "ADMIN"){
            return view('admin.dashboard');
        }elseif ($type == "STUDENT"){
            $data = collect();
            $acc = Acceuil::where("user_id" , Auth::id())->first();

            if ($acc !== null && $acc->oriente_vers !== null){
                $cat = Category::where("category_name" , $acc->oriente_vers)->first();



                $courses = Cours::where("category_id" , $cat->id)->get();

                $sectionNum = 0;
                $videosNum = 0 ;
                foreach ($courses as $cours){
                    $sections = $cours->category;

                    foreach ($sections as $section){
                        $temp = count($section->videos);
                        $videosNum =$videosNum + $temp;
                        $temp1 = count($section->mats);
                        $sectionNum = $sectionNum + $temp1;
                    }

                    $data->push(["name" => $cours->id , "photo" => $cours->photo , "created_at" => $cours->created_at , "category"=> $cat->category_name , "modules" => $sectionNum ,"animateur" => $cours->animateur ,"videos"  => $videosNum]);
                }
            }

            return view('student.dashboard' , ["data" => $data]);
        }elseif($type == "VIP"){
            return view('vip.dashboard');
        }

    }
    public function PreInscription(){
        $acceuils = Acceuil::where('status','in_active')->get();

        return view('admin.students.pre_inscriptionindex',compact('acceuils'));
    }
    public function getdelete($id){
        $acceuils = Acceuil::find($id);
        $acceuils->delete();
        return redirect()->route('pre-inscription');

    }
    public function complete($id){
        $acceuil = Acceuil::findOrFail($id);
        return view('admin.students.completed_reg',compact('acceuil'));
    }
    public function completeStore($id, Request $request){
        $acceuil = Acceuil::findOrFail($id);

        if ($acceuil){

            //Upload image
            if ($request->has('image_profile')){
                //old image
                $imagePath = public_path('images/acceuil/'.$acceuil->image_profile);
//                if(File::exists($imagePath)){
//                    unlink($imagePath);
//                }
                //new image

                $imageName = time().'.'.$request->image_profile->extension();
                $request->image_profile->move(public_path('images/acceuil'), $imageName);


            }else{
                $imageName = $acceuil->image_profile;
            }
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

           // return  $user->id;

            //update acceuil
            $acceuil->update([
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


        }

        return redirect()->route('student.index');
    }

    public function test(){

        $profile = 'مرحبا';
        $oDom = new \DOMDocument();
        $oDom->loadHTML('<?xml encoding="utf-8" ?>' . $profile);
        echo $oDom->saveHTML();

    }
    public function another(){
        $local = app()->getLocale();
        $actualites = Actualite::select('id','photo','title_'.$local,'contenu_'.$local)->get();

        return view('another',compact('actualites'));
    }
}
