<?php

namespace App\Http\Controllers;
use ZipArchive;
use App\Models\Lab;
use Illuminate\Http\Request;

class LabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fImport(Request $request)
    {
        
        // dd($request->fzip->extension());
        dd($request->fexcel->extension());
         return  [
             'zip' => $request->file,
             'excel' => $request->excel,
        
        ] ;
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function excelImport(Request $request)
    {
        
        dd($request->all());
        dd($request->fexcel->extension());
         return  [
             'zip' => $request->file,
             'excel' => $request->excel,
        
        ] ;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function zipImportExtract(Request $request)
    {
        $zipName = time().'.'.$request->fzip->extension();
        $request->fzip->move(public_path('images'), $zipName);
        $zip = new ZipArchive;

        if ($zip->open(public_path('images'). DIRECTORY_SEPARATOR .$zipName) === TRUE) {
                $zip->extractTo(public_path('images'));
                $zip->close();
                echo 'ok';
            } else {
                echo 'failed';
            }

         //dd(public_path('images'). DIRECTORY_SEPARATOR .$zipName);


        //  return  [
        //      'zip' => $request->fzip->extension(),
        //      'success' => 'extract done',
        
        // ] ;
    }

////////////////////////////////////////////////////
    /**
     * Display a listing of the resource.
     * matt excelImport
     *
     * @return \Illuminate\Http\Response
     */
    public function fileImportExport(Request $request)
    {

       
        dd($request->all());

         return  [
             'zip' => $request->fzip->extension(),
             'excel' => $request->fexcel->extension(),
        
        ] ;
    }

    

    /**
     * Display a listing of the resource.
     * matt excelImport
     *
     * @return \Illuminate\Http\Response
     */
    public function fileImport(Request $request)
    {

       
        dd($request->all());

         return  [
             'zip' => $request->fzip->extension(),
             'excel' => $request->fexcel->extension(),
        
        ] ;
    }

    

    /**
     * Display a listing of the resource.
     * matt excelImport
     *
     * @return \Illuminate\Http\Response
     */
    public function fileExport(Request $request)
    {

       
        dd($request->all());

         return  [
             'zip' => $request->fzip->extension(),
             'excel' => $request->fexcel->extension(),
        
        ] ;
    }

    

    
}
