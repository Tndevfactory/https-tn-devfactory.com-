@extends('layouts.app') 

@section('head')

<title>shopping cart</title>


@endsection



@section('content')

<div class="container ">
  
     <?php $data=[
             'level1' => "panier", 
           'level2' => "details" ]
            ?>
     @include('components.breadcrumb', $data)
   
     <div class="row row-cols-1 row-cols-sm-2 ">

        <div class="col-sm-8 ">

          <div class="row row-cols-2 row-cols-sm-4 p-3">
             <div class="col-sm-2  ">
              <img
              src="https://picsum.photos/900/601"
              class="img_screen  img-thumbnail"
              alt="..."
          />
             </div>
             <div class="col-sm-7 d-flex justify-content-start align-items-center">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit
             </div>

             <div class="col-sm-2 d-flex justify-content-center align-items-center">
              <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group border border-1" role="group" aria-label="First group">
                  <button type="button" class="btn btn-light text-danger fw-bolder">- </button>
                  <button type="button" class="btn btn-light border border-1">2</button>
                  <button type="button" class="btn btn-light text-success fw-bolde  border border-1">+</button>
                </div>
              </div>

             </div>
             <div class="col-sm-1 d-flex justify-content-center align-items-center">
               <a href="#" class="text-decoration-none">  <i class="fas fa-trash-alt text-danger"></i></a>
             
            </div>
          </div>

          <div class="row row-cols-2 row-cols-sm-4 p-3">
             <div class="col-sm-2  ">
              <img
              src="https://picsum.photos/900/601"
              class="img_screen  img-thumbnail"
              alt="..."
          />
             </div>
             <div class="col-sm-7 d-flex justify-content-start align-items-center">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit
             </div>

             <div class="col-sm-2 d-flex justify-content-center align-items-center">
              <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group border border-1" role="group" aria-label="First group">
                  <button type="button" class="btn btn-light text-danger fw-bolder">- </button>
                  <button type="button" class="btn btn-light border border-1">2</button>
                  <button type="button" class="btn btn-light text-success fw-bolde  border border-1">+</button>
                </div>
              </div>

             </div>
             <div class="col-sm-1 d-flex justify-content-center align-items-center">
              <a href="#" class="text-decoration-none">  <i class="fas fa-trash-alt text-danger"></i></a>
             </div>
          </div>

          <div class="row row-cols-2 row-cols-sm-4 p-3">
             <div class="col-sm-2  ">
              <img
              src="https://picsum.photos/900/601"
              class="img_screen  img-thumbnail"
              alt="..."
          />
             </div>
             <div class="col-sm-7 d-flex justify-content-start align-items-center">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit
             </div>

             <div class="col-sm-2 d-flex justify-content-center align-items-center">
              <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group border border-1" role="group" aria-label="First group">
                  <button type="button" class="btn btn-light text-danger fw-bolder">- </button>
                  <button type="button" class="btn btn-light border border-1">2</button>
                  <button type="button" class="btn btn-light text-success fw-bolde  border border-1">+</button>
                </div>
              </div>

             </div>
             <div class="col-sm-1 d-flex justify-content-center align-items-center">
              <a href="#" class="text-decoration-none">  <i class="fas fa-trash-alt text-danger"></i></a>
             </div>
          </div>

         

         

          



        </div>

        <div class="col-sm-4 p3" >
          <form action="">

            <ul class="list-group list-group-flush">
              <li class="list-group-item d-flex justify-content-between"> <span>Nombre articles</span>  <span>4</span>   </li>
              <li class="list-group-item d-flex justify-content-between"> <span>Frais livraison</span>  <span>30.25 TND</span>   </li>
              <li class="list-group-item d-flex justify-content-between"> <span>Total HT</span>  <span>1330.25 TND</span>   </li>
              <li class="list-group-item d-flex justify-content-between"> <span>Code coupon réduction</span>  <span><input type="text" value=""></span>   </li>
             
            </ul>
            <div class="d-grid gap-2 mt-3">
              <a href="{{route('commande', App::getLocale())}}" class="btn btn-success" type="button">Commander</a>
              <a href='{{route('welcome', App::getLocale())}}' class="btn btn-primary" type="button">Continuer mes Achats</a>
            </div>
          </form>

        </div>


     </div>



</div>






@endsection