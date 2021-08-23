<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Models\Visiteur;
use App\Models\Categorie;
use App\Models\Projet;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class ClientController extends Controller
{
    //
    public function home(){
        $data['titre']= 'MoMoDeV | Entreprise de développement d\'application web et mobile';
        $data['actuel']= 'acceuil';
        return view('client.home',$data);
        
    }

    public function application(){
        $data['titre']= 'Conception d\'application web et mobile - MoMoDev';
        $data['actuel']= 'application';
        return view('client.application',$data);
        
    }

    public function design(){
        $data['titre']= 'Conception de design graphique - MoMoDev';
        $data['actuel']= 'application';
        return view('client.design',$data);
        
    }

    public function videosurveillance(){
        $data['titre']= 'Installation caméra de surveillance Côte d\'Ivoire - MoMoDev';
        $data['actuel']= 'application';
        return view('client.videosurveillance',$data);
        
    }

    public function nos_realisation(){
        $data['titre']= 'Nos realisations - MoMoDev';
        $data['projets'] = Projet::all();
        $data['categories'] = Categorie::all();
        $data['current']= 'all';
        $data['actuel']= 'realisation';
        
        return view('client.realisation',$data);
    }

    public function all_project(){
        //$data['titre']= 'Nos realisations - MoMoDev';
        $data['sub_title'] = "Nos realisations";
        $data['projets'] = Projet::all();
        $data['categories'] = Categorie::all();
        $data['current']= 'all';
        if($data){
            $donne["dataHtml"] = view("chargement.view_categorie",$data)->render();
            return response()->json($donne); 
        }



        // if($data){
        //     $donne["dataHtml"] = view("chargement.view_projets",$data)->render();
        //     return response()->json($donne); 
        // }

        //return view('client.realisation',$data);
        
    }

    //@isset ($current)  @endisset
    public function projet_by_categorie(Categorie $categorie){
        
        $data['categorie']=$categorie;
        $data['current']= $categorie->id;
        $data['categories'] = Categorie::all();
        $data['projets'] = Projet::where('categorie_id','=',$categorie->id)->paginate(20);
        
        if($data){
            $donne["dataHtml"] = view("chargement.view_categorie",$data)->render();
            return response()->json($donne); 
        }
        
        //return view('client.realisation',$data);
    }


    public function detail_projet(Projet $projet){
        $data['titre']= 'Nos realisations - MoMoDev';
        $data['actuel']= 'realisation';
        $data['projets'] = Projet::all();
        $data['categories'] = Categorie::all();
        //$data['current']= 'all';
        $data['projet']=$projet;
        return view('client.detail_projet',$data);
    }

    
    

    

    

    public function contacter(Request $request){
        $validator = Validator::make($request->all(), [
                                    'nom' => 'required',
                                    'contact' => 'required',
                                    'email' =>  'email',
                                    'message' => 'required'
                                    ]);

        if(!$validator->passes()){
            return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
        }else{

            $visiteur = new Visiteur();
            $visiteur->nom = $request->input('nom');
            $visiteur->contact = $request->input('contact');
            $visiteur->message = $request->input('message');
            $visiteur->save();

            $visteurs = Visiteur::where('id', $visiteur->id)->first();
            $email = 'etienblog@gmail.com'; 
            Mail::to($email)->send(new SendMail($visteurs));

            if($visiteur){

                return response()->json(['status'=>1, 'msg'=>'Votre mésage a bien été envoyé']);
             }
        

        }
  
    }


    public function contact(){
        $data['titre']= 'Contactez - nous - MoMoDev';
        $data['actuel']= 'contact';
        return view('client.contact', $data);
        
    }
    
    
    
}
