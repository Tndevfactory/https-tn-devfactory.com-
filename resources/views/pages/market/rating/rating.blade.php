
@extends('layouts.app') 

@section('head')

<title>rating</title>
@endsection

@section('content')

            <div class="container px-4">
                         
                         <?php $data=[
                                'level1' => "homme", 
                                'level2' => "chaussures" ] 
                            ?>

                            @include('components.breadcrumb', $data)

                <div class="row row-cols-1 row-cols-md-2 container-fluid ">

                    <div class="col d-flex align-items-start mt-1 justify-content-center">
                        <div class="d-flex gy-3 flex-column p-3 ">
                             
                           <div  style='color: rgb(93, 13, 241)' class="fs-2 h4">Espadrit stanSmith bleu gyms</div> 
                           
                            <div>
                                <span class="fs-3 text-muted fw-light">Evaluation: </span> 
                                <span  style="font-size: 19px" class="stars  ms-2 mt-n1  d-inline-block text-decoration-none">
                                    <i  style="color: #ddd"  class="far fa-star"></i>
                                    <i  style="color: #ddd"   class="far fa-star"></i>
                                    <i  style="color: #ffba08" class="fas fa-star"></i>
                                    <i  style="color: #ffba08" class="fas fa-star"></i>
                                    <i  style="color: #ffba08" class="fas fa-star"></i>
                                </span>
                            </div>

                            <div>
                                <span class="fs-3 text-muted fw-light">Moyenne: </span> 
                                <span class="fs-3 text-muted fw-bold">2.75</span> 
                            </div>
                            
                        </div>
                    </div>

                    <div class="col">
                        <form class=" my-3" action="#" method="">
                            @csrf
                            <div class="mb-3">
                              <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                <option selected>Evaluer le produit</option>
                                <option value="1">1-pas du tout satisfait</option>
                                <option value="2">2-insatisfait</option>
                                <option value="3">3-neutre</option>
                                <option value="4">4-satisfait</option>
                                <option value="5">5-tres satisfait</option>
                              </select>
                            </div>
                            <div class="mb-3">
                              <div class="form-floating">
                                <textarea class="form-control" placeholder="Laisser votre avis" id="floatingTextarea"></textarea>
                                <label for="floatingTextarea">avis</label>
                              </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Enregistrer votre avis</button>
                          </form>
                    </div>

                
                </div>

                <div class="border-top my-3 border-secondary shadow-sm"></div>
                

                <div class="row row-cols-1 px-2 gx-1 gy-4 container-fluid justify-content-md-end">
                    <div class="col col-md-3">
                        <div class="mb-3 ">
                            <select class="form-select form-select-sm " aria-label=".form-select-sm example">
                              <option selected>Trier par</option>
                              <option value="1">Pas du tout satisfait</option>
                              <option value="2">Insatisfait</option>
                              <option value="3">Neutre</option>
                              <option value="4">Satisfait</option>
                              <option value="5">Tres satisfait</option>
                            </select>
                          </div>
                    </div>
                </div>   


                <div class="row row-cols-1 px-2 gx-1 gy-4 container-fluid">


                    @for ($i = 0; $i < 10; $i++)
                       
                        <div class="col-3 col-md-1 bg-white  ">
                              <img 
                              src="https://picsum.photos/300/200"
                              class="img-thumbnail  "
                              alt="..."
                          />
                        </div>
    
                        <div class="col-9 col-md-11 d-flex flex-column bg-white shadow-sm">
    
                            <div class=" ">
                                    <span class="text-muted fw-bold">Gilbert Panca</span> 
                                    <span  style="font-size: 12px" class=" ms-2 mt-n1  d-inline-block text-decoration-none">
                                        <i  style="color: #ddd"  class="far fa-star"></i>
                                        <i  style="color: #ddd"   class="far fa-star"></i>
                                        <i  style="color: #ffba08" class="fas fa-star"></i>
                                        <i  style="color: #ffba08" class="fas fa-star"></i>
                                        <i  style="color: #ffba08" class="fas fa-star"></i>
                                    </span>
                            </div>
        
                            <span class="text-muted fw-light small">12-avril-2021</span>
    
                            <span class="small mb-md-3 mt-1 ms-2">
                            un excellent produit, je le recommande, Quidem quasi voluptate similique 
                            illo exercitationem in eos provident sit est odio harum neque,  ut fuga deserunt.
                            allez acheter ...
                            </span> 
                     
                        </div>
    
                    @endfor

              </div>


            </div>

            @endsection
        