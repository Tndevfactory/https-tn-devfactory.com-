@extends('layouts.app') 

@section('head')

<title>search</title>
@endsection

@section('content')
<div id="search">


<div class="container">
  
     <?php $data=[
        'level1' =>
    "homme", 'level2' => "chaussures" ] ?> @include('components.breadcrumb', $data)
   
     <div class="row row-cols-1 row-cols-sm-2 ">
       {{-- block filter start--}}
       <div class="col-sm-3  d-none d-md-block ">
        <div class="border-top my-1 border-light shadow-sm"></div>
       <h4>Filtrer par</h4>
       <div class="prix">
         <label for="customRange3" class="form-label text-muted h5 my-3">Prix</label>
         <div class="label d-flex justify-content-between">
           <span class='small text-muted'>moins cher</span>
           <span  class='small text-muted'>plus cher</span>
         </div>
         <input type="range" class="form-range" min="0" max="5000" step="100" id="customRange3">
       </div>
       <div class="modele my-3">
         <div  class="text-muted h5 mb-2">Modele</div>
         <div class="form-check">
           <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
           <label class="form-check-label" for="defaultCheck1">
             Samsung
           </label>
         </div>
         <div class="form-check">
           <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" >
           <label class="form-check-label" for="defaultCheck2">
             nokia
           </label>
         </div>
         <div class="form-check">
           <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" >
           <label class="form-check-label" for="defaultCheck2">
             Lg
           </label>
         </div>
         <div class="form-check">
           <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" >
           <label class="form-check-label" for="defaultCheck2">
             Blackberry
           </label>
         </div>
       </div>
       <div class="avis my-3">
         <div   class="text-muted h5  mb-2">Avis</div>
         <div class="form-check">
           <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
           <label class="form-check-label" for="exampleRadios1">
             Le plus evalue
           </label>
         </div>
         <div class="form-check">
           <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
           <label class="form-check-label" for="exampleRadios2">
             le moins evalue
           </label>
         </div>
         <div class="form-check">
           <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" >
           <label class="form-check-label" for="exampleRadios3">
             sans avis
           </label>
         </div>
       </div>
 
       </div>
{{-- block filter end--}}

 {{-- block contenu start--}}
       <div class="col col-sm-9  p-3">
         
           <div class="row  row-cols-sm-3 d-flex justify-content-center align-items-center ">
             <div class="col-3 ">
                <span class="d-flex gap-1 text-muted small ms-md-3"> 23 articles  </span>  
              </div>
             <div class="col-6  ">
              <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option selected>Trier par</option>
                <option value="1">prix croissant</option>
                <option value="2">prix decroissant</option>
                <option value="3">plus vendu</option>
                <option value="3">moins vendu</option>
                <option value="3">nouveaux</option>
              </select>
             </div>
             <div class="col-3  d-flex justify-content-center gap-3 align-items-center  p-1">

              <a href="#" class="text-dark" ><i class=" search_column_btn fas fa-grip-vertical"></i> </a> 
              <a href="#" class="text-dark" ><i class=" search_row_btn fas fa-grip-horizontal"></i></a>

            </div>

           </div>
           <div class="border-top my-3 border-light shadow-sm"></div>

           <div class="products_category">
            
              <div class="search_column d-block">
              @include('pages.market.search.search_column')
              </div>

              <div class="search_row d-none">
                @include('pages.market.search.search_row')
              </div>
              
           </div>
         
          </div>
          {{-- block contenu end--}}
      
     </div>
   </div>
</div>
</div>{{-- search id  end--}}
@endsection