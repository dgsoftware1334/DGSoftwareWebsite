<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cours;
use App\Models\Offre;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Response;
class CoursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $x = DB::table('cours')
            ->join('offres', 'offres.id','cours.offre')
            ->select('cours.*','offres.titre')
            ->get();

        } catch (Exception $e) {
          return back()->withError('Une erreur est survenue, veuillez réessayer ultérieurement')->withInput();
    
        }
        return view('cours.index', ['cours' => $x]);
    }

    public function freeCourses()
    {
        try {
            $x = Cours::all()->where('offre','=','Gratuit');
            
        } catch (Exception $e) {
          return back()->withError('Une erreur est survenue, veuillez réessayer ultérieurement')->withInput();
    
        }
        return view('cours', ['cours' => $x]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $offres = Offre::get();
    
        return view('cours.create', ['offres' => $offres]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
         try {
            $x = new Cours();
            $x->offre= $request->input('offre');
            $x->cours= $request->input('cours');
            $x->description = $request->input('description');
            $x->durée = $request->input('durée');
            $x->catégories = $request->input('catégories');
            //save image
            if($request->hasFile('thumbnail')){
              $thumbnail= $request->input('cours').'_'. $request->input('catégories').'.'.$request->thumbnail->getClientOriginalExtenSion();
               $x->thumbnail = $request->thumbnail->storeAs('thumbnails',$thumbnail);
            }
            //save video
            if($request->hasFile('video')){
               $x->video = $request->video->store('cours');
            }
            $x->save();
            
        } catch(ModelNotFoundException $exception) {
            return back()->withError('Une erreur est survenue, veuillez réessayer ultérieurement')->withInput();
        }
        return redirect('cours')->with('success', "Le cours : ".$x->cours." ");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $x = Cours::findOrFail($id);
        // Add a rating of 5, from the currently authenticated user
        $x->rateOnce(5);
        $x->rateOnce(4.5);
        
        $count=$x->timesRated();
        $result=$x->ratings;
        $average=$x->averageRating;

        return view('cours.show', ['cours'=> $x, 'count' => $count, 'result' =>$result, 'average' => $average]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         try{
            $x =Cours::findOrFail($id);
            $cours =$x->cours;
            Storage::delete([$x->thumbnail,$x->video]);
            $x->delete();

        }catch(Exception $e){
            return back()->withError('Une erreur est survenue, veuillez réessayer ultérieurement')->withInput();
        }
        return back()->with('success', "Le cours : ".$cours." a été suprrimée avec succès.");
   
    }

    

    public function getVideo($id){
    
         $cours =Cours::find($id);
 if (Storage::exists($cours->video) && $cours->video !== null) {
        $file = "./storage/".$cours->video;
        $mime = 'video/mp4';
        $size = filesize($file);
        $length = $size;
        $start = 0;
        $end = $size - 1;

        header(sprintf('Content-type: %s', $mime));
        header('Accept-Ranges: bytes');

        if(isset($_SERVER['HTTP_RANGE']))
        {
          $c_start = $start;
          $c_end = $end;

          list(, $range) = explode('=', $_SERVER['HTTP_RANGE'], 2);

          if(strpos($range, ',') !== false)
          {
            header('HTTP/1.1 416 Requested Range Not Satisfiable');
            header(sprintf('Content-Range: bytes %d-%d/%d', $start, $end, $size));

            exit;
          }

          if($range == '-')
          {
              $c_start = $size - substr($range, 1);
          }
          else
          {
              $range  = explode('-', $range);
              $c_start = $range[0];
              $c_end   = (isset($range[1]) && is_numeric($range[1])) ? $range[1] : $size;
          }

          $c_end = ($c_end > $end) ? $end : $c_end;

          if($c_start > $c_end || $c_start > $size - 1 || $c_end >= $size)
          {
              header('HTTP/1.1 416 Requested Range Not Satisfiable');
              header(sprintf('Content-Range: bytes %d-%d/%d', $start, $end, $size));

              exit;
          }

          header('HTTP/1.1 206 Partial Content');

          $start = $c_start;
          $end = $c_end;
          $length = $end - $start + 1;
        }

        header("Content-Range: bytes $start-$end/$size");
        header(sprintf('Content-Length: %d', $length));

        $fh = fopen($file, 'rb');
        $buffer = 1024 * 8;

        fseek($fh, $start);

        while(true)
        {
          if(ftell($fh) >= $end) break;

          set_time_limit(0);

          echo fread($fh, $buffer);

          flush();
        }
    }
    else{
        return back()->withError("La video du cours : ".$cours->id."- ".$cours->cours."n'existe pas .")->withInput();
    }
    }
}
