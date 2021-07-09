<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ar\ArCommande;
use App\Models\En\EnCommande;
use App\Models\Fr\FrCommande;

class CommandeController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        //dd($request->language);
        // ar fr en
        // if ($request->language=='ar'){
        //     $cmAr=ArCommande::get();
        // }elseif($request->language=='fr'){
        //     $cmFr=FrCommande::get();
        // }elseif($request->language=='en'){
        //     $cmEn=EnCommande::get();

        // }else{
        //     $cm=[];
        // }
        
            $cmAr=ArCommande::get();
            $cmFr=FrCommande::get();

            
            $cmEn=EnCommande::get();


          


        // echo($cm);
       // dd($cm);
        return view('pages.market.commande.commande',compact(['cmAr','cmFr','cmEn',]));
    }
}
