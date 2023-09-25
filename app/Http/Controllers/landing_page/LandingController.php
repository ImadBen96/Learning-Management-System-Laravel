<?php

namespace App\Http\Controllers\landing_page;

use App\Http\Controllers\Controller;
use App\Models\Actualite;
use App\Models\Carriere;
use App\Models\Carrieres;
use App\Models\Comment;
use App\Models\Concours;
use App\Models\Cours;
use App\Models\Entrepreneurs;
use App\Models\Post;
use App\Models\Recrutement;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function indexLanding(){
        $local = app()->getLocale();
        $actualites = Actualite::select('id','photo','title_'.$local,'contenu_'.$local,'created_at')->limit(3)->latest()->get();

        return view('landing_page.welcome',compact('actualites'));
    }
    public function getSingleActualite($id){
        $local = app()->getLocale();
        $actualite = Actualite::select('id','photo','title_'.$local,'contenu_'.$local,'tags_'.$local,'created_at')->where('id',$id)->first();
        $all_latest_actualites = Actualite::select('id','photo','title_'.$local,'contenu_'.$local,'created_at')->where('id','!=',$id)->limit(4)->latest()->get();
        $comments = Comment::select('name_'.$local,'subject_'.$local,'comment_'.$local,'type')->where('actualite_id',$id)->where('type',app()->getLocale())->get();



        return view('landing_page.single_actualite',compact(['actualite','all_latest_actualites','comments']));
    }
    public function Allcarriere() {
        $local = app()->getLocale();
        $Recrutements = Carriere::select('id','photo','title_'.$local,'content_'.$local,'date_creation','email','tele','attachement','short_description_'.$local,'lieu_'.$local,'created_at')->where('status','public')->latest()->get();



        return view('landing_page.carriere',compact('Recrutements'));
    }
    public function singleCarriere($id){
        $local = app()->getLocale();
        $carriere = Carriere::select('id','photo','title_'.$local,'content_'.$local,'date_creation','email','tele','attachement','short_description_'.$local,'lieu_'.$local,'created_at')->where('id',$id)->first();
        $carriere_autre = Carriere::select('id','photo','title_'.$local,'content_'.$local,'date_creation','email','tele','attachement','short_description_'.$local,'lieu_'.$local,'created_at')->where('id','!=',$id)->get();



        return view('landing_page.single_carriere',compact(['carriere','carriere_autre']));
    }
    public function single_recrutement($id){
        $Carrieres = Carrieres::find($id);
        $carriere_autres = Carrieres::where('id','!=',$id)->where('status','public')->get();


        return view('landing_page.single_recrutement',compact(["Carrieres",'carriere_autres']));
    }

    public function Allactualite(){
         $local = app()->getLocale();
        $actualites = Actualite::select('id','photo','title_'.$local,'contenu_'.$local,'created_at')->latest()->paginate(5);

       return view('landing_page.actualite',compact('actualites'));
    }

    public function axe_entrepreneuriat(){
        $local = app()->getLocale();
        $Entrepreneurs = Entrepreneurs::select('id','title_'.$local,'image_profile','niveau_scolaire_'.$local,'formation_professionnelle_'.$local,'age','project_name_'.$local,'logo','short_description_'.$local,'statut_juridique_'.$local,'category_'.$local,'secteur_activite_'.$local,'domiciliation_'.$local,'canaux_communication_'.$local,'capitale_initiale','apport_INDH','apport_entrepreneur','opportunite_financement','contenu_'.$local)->get();
        $concours = Concours::select('id','title_'.$local,'short_description_'.$local,'contenu_'.$local,'date_creation','limite_date','email','photo','tele','attachement','lieu_'.$local)->get();
        return view('landing_page.axe_entrepreneuriat',compact(['Entrepreneurs','concours']));
    }

    public function SingleEntrepreneuriat($id){
        $local = app()->getLocale();
        $Entrepreneurs = Entrepreneurs::select('id','title_'.$local,'image_profile','niveau_scolaire_'.$local,'formation_professionnelle_'.$local,'age','project_name_'.$local,'logo','short_description_'.$local,'statut_juridique_'.$local,'category_'.$local,'secteur_activite_'.$local,'domiciliation_'.$local,'canaux_communication_'.$local,'capitale_initiale','apport_INDH','apport_entrepreneur','opportunite_financement','contenu_'.$local,'photo_1','photo_2','photo_3','photo_4','photo_5','photo_6','service_name')->where('id',$id)->first();


        return view('landing_page.single_entrepreneurs',compact('Entrepreneurs'));
    }

    public function SingleConcours($id){
        $local = app()->getLocale();
        $concours = Concours::select('id','title_'.$local,'short_description_'.$local,'contenu_'.$local,'date_creation','limite_date','email','photo','tele','attachement','lieu_'.$local)->where('id',$id)->first();

        return view('landing_page.single_concours',compact('concours'));
    }

    public function getemployabilite(){
        $local = app()->getLocale();
        $Entrepreneurs = Entrepreneurs::select('id','title_'.$local,'image_profile','niveau_scolaire_'.$local,'formation_professionnelle_'.$local,'age','project_name_'.$local,'logo','short_description_'.$local,'statut_juridique_'.$local,'category_'.$local,'secteur_activite_'.$local,'domiciliation_'.$local,'canaux_communication_'.$local,'capitale_initiale','apport_INDH','apport_entrepreneur','opportunite_financement','contenu_'.$local)->get();
        $recrutements = Carrieres::where('status','public')->get();



        return view('landing_page.axe_employabilite',compact(["Entrepreneurs","recrutements"]));
    }
    public function poster_concours_store(Request $request){

        //UPLOAD PHOTO
        if ($request->has('photo')){
            $imageName = time().'.'.$request->photo->extension();

            $request->photo->move(public_path('images/concours/posts'), $imageName);
        }

        //UPLOAD carte_national
        if ($request->has('carte_national')){
            $carte_national = time().'.'.$request->carte_national->extension();

            $request->carte_national->move(public_path('images/concours/posts/carte_national'), $carte_national);
        }
        //UPLOAD cv
        if ($request->has('cv')){
            $cv = time().'.'.$request->cv->extension();

            $request->cv->move(public_path('images/concours/posts/cv'), $cv);
        }
        //UPLOAD certificat
        if ($request->has('certificat')){
            $certificat = time().'.'.$request->certificat->extension();

            $request->certificat->move(public_path('images/concours/posts/certificat'), $certificat);
        }
       //UPLOAD demande
        if ($request->has('demande')){
            $demande = time().'.'.$request->demande->extension();

            $request->demande->move(public_path('images/concours/posts/demande'), $demande);
        }


        $posts = Post::create([
           'post_id' => $request->id,
           'photo' => $imageName,
           'first_name' => $request->nom,
           'last_name' => $request->prenom,
           'description' => $request->short_description,
           'tele' => $request->phone,
           'email' => $request->email,
           'cart_national' => $carte_national,
           'cv' => $cv,
           'certificat' => $certificat,
           'Demande' => $demande,
           'status' => 'inactive',
        ]);

        return redirect()->back();
    }

    public function PostConcours($id){
        $local = app()->getLocale();
        $concours = Concours::select('id','title_'.$local,'short_description_'.$local,'contenu_'.$local,'date_creation','limite_date','email','photo','tele','attachement','lieu_'.$local)->where('id',$id)->first();


        return view('landing_page.poster_concours',compact("concours"));
    }

    public function storeComment(Request $request){

//        return $request;


        if ( app()->getLocale() == 'fr' ){
                $comment = Comment::create([
                'actualite_id' => $request->id,
                'name_fr'     => $request->name_fr,
                'subject_fr'     => $request->subject_fr,
                'comment_fr'     => $request->message_fr,
                'type'     => app()->getLocale(),
           ]);
        }elseif( app()->getLocale() == 'ar' ){
            $comment = Comment::create([
                'actualite_id' => $request->id,
                'name_ar'     => $request->name_ar,
                'subject_ar'     => $request->subject_ar,
                'comment_ar'     => $request->message_ar,
                'type'     => app()->getLocale(),
            ]);
        }

        return redirect()->back();


//
    }

    public function single_cours($name){
        $coure = Cours::find($name);
        $video = collect();
        $matt = collect();
        $description = $coure->description;
        $title = $coure->cours_name;
        $animateur = $coure->animateur;
        $animateur_descriptor = $coure->animateur_descriptor;
        $animateur_pic = $coure->animateur_pic;


            $temp = $coure->category;
            foreach ($temp as $t){
                $vid = $t->videos;
                $mt = $t->mats;
                foreach ($vid as $v){
                    $video->push(["id" => $v->id , "url" => $v->url , "title"=> $v->title]);
                }
                foreach ($mt as $m){
                    $matt->push(["id" => $m->id , "url" => $m->url , "title"=> $m->title]);
                }
            }

        return view('landing_page.single_cours' ,
            ["title" => $title ,
                "desc" => $description ,
                "video" => $video ,
                "mats"=> $matt,
                "animateur" => $animateur,
                'animateur_descriptor' => $animateur_descriptor,
                'animateur_pic' =>$animateur_pic

            ]);
    }
}
