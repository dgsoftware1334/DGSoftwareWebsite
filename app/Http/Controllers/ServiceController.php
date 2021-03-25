<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Commande;
use App\Models\Galerie;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('BackEnd.services.index',['services' => $services]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('BackEnd.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $validator = $request->validate([ 
                'titre' => 'required|string|unique:services|max:255',
                'description' =>'required|string',
                'prix' =>'numeric|nullable', 
                'photo'=>'mimes:jpeg,bmp,png,jpg,svg|image|filled|max:2500',
                
            ] ); 

            $service = new Service();
            $service->titre = $request->input('titre');
            $service->description = $request->input('description');
            $service->prix = $request->input('prix'); 
            if($request->hasFile('photo')){ 
            $image =  $request->file('photo')->getClientOriginalName();
            $service->photo = $request->file('photo')->storeAs('services',$image);
            }
             
            $service->save();
        
            return redirect('services')->with('success', 'Le service a été ajouté avec succès!'); 

        }catch (Exception $e) {
            return redirect('services')->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $s = Service::find($id);
        $photos = Galerie::where('service_id',$id)->select('main_image')->orderBy('created_at')->get();
        return view('BackEnd.services.show',['photos' => $photos, 's' => $s]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            
            $service = Service::find($id);
            return view('BackEnd.services.edit',['service' => $service]);

        } catch (Exception $e) {
             return redirect('services')->with('error', $e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $service = Service::find($id);
            $validator = $request->validate([ 
                'titre' => 'required|string|max:255|unique:services,titre,'.$service->id,
                'description' =>'required|string',
                'prix' =>'numeric|nullable', 
                'photo'=>'mimes:jpeg,bmp,png,jpg,svg|image|filled|max:2500',
                
            ] ); 

            $service->titre = $request->input('titre');
            $service->description = $request->input('description');
            $service->prix = $request->input('prix'); 
            if($request->hasFile('photo')){ 
            $image =  $request->file('photo')->getClientOriginalName();
                $service->photo = $request->file('photo')->storeAs('services',$image);
            }
             
            $service->save();
        
            return redirect('services')->with('success', 'Le service a été modifié avec succès!'); 
        } catch (Exception $e) {
            
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $x = Service::find($id); 

            Galerie::where('service_id',$id)->delete();
            Commande::where('service',$x->id)->delete();
            $x->delete();
            return back()->with('success',"Le service a été supprimé avec tous ses photo et commandes.");
        } catch(ModelNotFoundException $exception) {
            return back()->withError('Une erreur est survenue, veuillez réessayer ultérieurement')->withInput();
        }
    }
}
