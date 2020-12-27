<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;
use App\Models\Galerie;
use App\Models\Lien;
use Illuminate\Support\Facades\DB;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class GalerieController extends Controller
{

    public function __construct(){
       
        $this->middleware('auth');

    }

    
     /*              INDEX GALERY    */
    public function indexGalery(){

        $galeries = DB::table('galeries')->get();
        $services = DB::table('services')->get();
        

        return view('galerie.index', ['galeries' => $galeries,'services'=>$services]);
    }



    /*      STORE NEW GALERIE     */
    public function galerieStore(Request $request){

        $service = Service::where('titre', '=', $request->input('srvname'))->first();


        $galerie = new Galerie();
        $galerie->titre = $request->input('titre');
        $galerie->id_service = $service->id;
        $galerie->description= $request->input('description');

        if($request->hasFile('files')){
            $destionation_path = 'public/img/Galerie/';
            $image = $request->file('files');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('files')->storeAs($destionation_path,$image_name);

            
            $galerie->main_image = $image_name;
        }
        $galerie->save();

        return redirect('galerie')->with('success', 'Nouvelle galerie insérée avec succès!');



    }

    /*    SHOW GALERIE     */
    public function ShowGalerie($id){

    	$galeries = Galerie::find($id);
        $arr['lien'] = DB::table('liens')->select('liens.*')->where('id_galerie', '=', $id)->paginate(3);

    	return view('galerie.show',['galeries'=>$galeries])->with($arr);
    }


    /*   STORE NEW LIENS   */
    public function NewLiens(Request $request,$id){

        $lien = new Lien();

        if($request->hasFile('files')){
            $destionation_path = 'public/img/Galerie'; // file store PATH
            $image = $request->file('files'); // file NAME
            $image_name = $image->getClientOriginalName(); // Get the origine name of the file
            $path = $request->file('files')->storeAs($destionation_path,$image_name);

            
            $lien->nom = $image_name; // store the name of the file in liens table
            $lien->path= $destionation_path.$image_name; // store the file path

            //split to get the extension name
            $splitName = explode('.', $image_name, 2); 
            $type = $splitName[1];

            //verify to store the mime and the type
            if($type=='jpg' || $type=='jpeg' || $type=="webp"){
                $lien->mime = 'image/jpeg';
                $lien->type ='image';

            }else if( $type=='png' ){
                $lien->mime ='image/png';
                $lien->type = 'image';

            }else if($type=='gif'){
                $lien->mime = 'image/gif;';
                 $lien->type = 'image';

            }else if($type=='wm' || $type == 'wmx'){

                $lien->mime = "video/x-ms-wm";
                $lien->type = 'video';

            }else if($type=='mp4'){

                $lien->mime = "application/mp4";
                $lien->type = 'video';

            }else if($type =="exe"){
                $lien->mime ='application/x-msdownload';
                $lien->type ='application';
            }else{
                return  redirect()->route('ShowGalerie', ['id' => $id])->with('delete', 'Erreur mime!');

            }

            $lien->description='description';
            $lien->id_galerie=$id;
            $lien->save();

            return redirect()->route('ShowGalerie', ['id' => $id])->with('success', 'Nouveau fihier insérer avec succès!');

        }else{
            return  redirect()->route('ShowGalerie', ['id' => $id])->with('delete', 'Veuillez selectionnez un fichier!');

        }

        
        
        

    }

    /*  DESTROY ALL GALERIE  */
    public function Destroy($id){

        $galerie = Galerie::find($id);
        $liens = DB::delete('delete from liens where id_galerie='.$id);


        $galerie->delete();


        return redirect('galerie')->with('delete', 'Lien supprimé!');

    } 

    /*  DESTROY LIEN*/
    public function DestroyLien($id,$id1){

        $lien = Lien::find($id);
        //$this->authorize('delete',$a);

        $image_path = $lien->nom;  // Value is not URL but directory file path
        Storage::delete($image_path);

        $lien->delete();

        return redirect()->route('ShowGalerie', ['id' => $id1])->with('delete', 'Lien supprimé!');

    }
}
