<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Concours;
use App\Models\Post;
use Illuminate\Http\Request;

class ConcourIdeeController extends Controller
{
    public function index(){
        $concours = Concours::with('post')->withCount('post')->get();

        return view("admin.concours.index",compact("concours"));
    }
    public function edit($id) {
        return view("admin.concours.edit");
    }
    public function all_posts(){
        $posts = Post::with('consours')->latest()->get();


        return view("admin.concours.posts",compact("posts"));
    }
    public function singlePost($id){
        $post = Post::where('id',$id)->first();


        $concours = Concours::where('id',$id)->first();
        $all_concours = Concours::all();

        return view('admin.concours.single_post',compact(['post','concours','all_concours']));
    }
    public function completerPost($id, Request $request){
        $post = Post::where('id',$id)->first();




        //update photo
        if ($request->has('photo')){
            $imageName = time().'.'.$request->photo->extension();

            $request->photo->move(public_path('images/concours/posts/'), $imageName);
        }else{
            $imageName=$post->photo;
        }

        //UPDATE CARTE NATIONAL
        if ($request->has('carte_national')){
            $carte_national = time().'.'.$request->carte_national->extension();

            $request->carte_national->move(public_path('images/concours/posts/carte_national/'), $carte_national);
        }else{
            $carte_national = $post->cart_national;
        }
        //UPDATE CV
        if ($request->has('cv')){
            $cv = time().'.'.$request->cv->extension();

            $request->cv->move(public_path('images/concours/posts/cv/'), $cv);
        }else{
            $cv=$post->cv;
        }
        //UPDATE CERTIFICAT
        if ($request->has('certificat')){
            $certificat = time().'.'.$request->certificat->extension();

            $request->certificat->move(public_path('images/concours/posts/certificat/'), $certificat);
        }else{
            $certificat=$post->certificat;
        }
        //UPDATE DEMANDE
        //UPDATE CERTIFICAT
        if ($request->has('demande')){
            $demande = time().'.'.$request->demande->extension();

            $request->demande->move(public_path('images/concours/posts/demande/'), $demande);
        }else{
            $demande=$post->Demande;
        }


        //UPDATE DATA
        $post->update([
            'post_id' =>$request->post_id,
            'photo' =>$imageName,
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'description'=>$request->description,
            'tele'=>$request->tele,
            'email'=>$request->email,
            'cart_national'=>$carte_national,
            'cv'=>$cv,
            'certificat'=>$certificat,
            'Demande'=>$demande,
            'status'=>"active"
        ]);


        return redirect()->route('ConcourIdee.poster.index')->with(['success' => 'La Demande Confermer' ]);





    }
    public function rejeterPost($id){
        $post = Post::findOrFail($id);
        $post->update([
            "status" => "reject"
        ]);

        return redirect()->route('ConcourIdee.poster.index')->with(['success' => 'La Demande Rejeter' ]);
    }
    public function delete($id) {
        $consours = Concours::find($id);
        $consours->delete();
        return redirect()->route('ConcourIdee.index');

    }

    public function create(){
        return view("admin.concours.create");
    }
    public function store(Request $request){

        if ($request->has('photo')){
            $imageName = time().'.'.$request->photo->extension();

            $request->photo->move(public_path('images/concours'), $imageName);
        }

        if ($request->has('attachement')){
            $fileName = time().'.'.$request->attachement->extension();

            $request->attachement->move(public_path('images/concours/attachment'), $fileName);
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
                $image_name_ar= "/images/concours/contenu_ar/" . time().$ar.'.png';
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
                $image_name= "/images/concours/contenu_fr/" . time().$fr.'.png';
                $path = public_path() . $image_name;
                file_put_contents($path, $data_fr);

                $img_fr->removeAttribute('src');
                $img_fr->setAttribute('src', $image_name);
            }

            $contenu_fr = $dom_fr->saveHTML();
        }

        $concours = Concours::create([
            'title_fr' => $request->title_fr,
            'title_ar' => $request->title_ar,
            'short_description_fr' => $request->short_description_fr,
            'short_description_ar' => $request->short_description_fr,
            'contenu_fr' => $contenu_fr,
            'contenu_ar' => $contenu_ar,
            'date_creation' => $request->date_creation,
            'limite_date' => $request->limite_date,
            'email' => $request->email,
            'photo' => $imageName,
            'tele' => $request->tele,
            'attachement' => $fileName,
            'lieu_fr' => $request->lieu_fr,
            'lieu_ar' => $request->lieu_ar,
        ]);

        return redirect()->route('ConcourIdee.index');




    }
}
