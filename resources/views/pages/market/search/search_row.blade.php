

              <div class="row row-cols-1 g-3">
                @for ($i = 0; $i < 25; $i++)
                <div class="col">

                  <div class=" bg-white shadow-sm row row-cols-3 g-1">

                    <div class="col-3">
                          <img
                          src="https://picsum.photos/300/200"
                          class="img-thumbnail"
                          alt="..."
                      />
                    </div>

                    <div class="col-6 d-flex flex-column ">

                      <div class=" product_title_welcome card-title">
                        Espadrit Nike
                        <a  href="#"
                                    class=" mt-n1 d-inline-block text-decoration-none small">
                                    (2)
                                  </a>
    
                                    <a
                                        href="#"
                                        style="font-size: 12px"
                                        class="
                                            stars
                                            ms-2
                                            mt-n1
                                            d-inline-block
                                            text-decoration-none
                                        ">
                                        <i  style="color: #ddd"  class="far fa-star"></i>
                                        <i  style="color: #ddd"   class="far fa-star"></i>
                                        <i  style="color: #ffba08" class="fas fa-star"></i>
                                        <i  style="color: #ffba08" class="fas fa-star"></i>
                                        <i  style="color: #ffba08" class="fas fa-star"></i>
                                    </a>
                    </div>

                    <span class="product_description_welcome card-text small">
                      Espadrit Nike pump best choix footballers
                      Espadrit Nike pump best choix footballers
                      Espadrit Nike pump best choix footballers
                  </span> 
                    
                  <div
                  class="price_new_old d-flex justify-content-start g-3"
              >
                  <a href="#" class="price_new btn btn-default btn-sm small"
                      >1370.65</a
                  >

                  <a  href="#" class=" price_old btn btn-default btn-sm small
                          text-decoration-line-through text-muted
                      "
                      >1470.55</a
                  >
              </div>

                    </div>

                    <div class="col-3 d-flex align-items-center justify-content-center gap-1"> 

                      
                      <a href="{{route('produit', App::getLocale())}}"
                      type="button"
                      class="details_welcome btn btn-sm btn-primary" >
                        <span class="d-none d-md-inline-flex">Details </span>
                        <i class=" ms-1 far fa-eye "></i>
                     </a>

                      <button
                          type="button"
                          data-bs-toggle="modal"
                          data-bs-target="#exampleModal{{$i}}"
                          class="commander_welcome btn btn-sm  btn-success text-light"
                      >
                        <span class="d-none d-md-inline-flex">Acheter</span>
                        <i class="ms-1 fas fa-cart-plus "></i>
                      </button>


                    </div>
                  </div>
                      
                </div>{{-- end div col --}}


    
                {{-- modal start --}}
                <div
                    class="modal fade"
                    id="exampleModal{{$i}}"
                    tabindex="-1"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true"
                >
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div
                                style="height: 4vh; background-color: #e68f2b"
                                class="modal-header text-light "
                            >
                                <h6 class="modal-title" id="exampleModalLabel">
                                    <i class="fas fa-cart-arrow-down"></i> Article
                                    ajouté à votre panier
                                </h6>
                                <button
                                    type="button"
                                    class="btn-sm btn-close text-light"
                                    data-bs-dismiss="modal"
                                    aria-label="Close"
                                ></button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img
                                                src="https://picsum.photos/300/200"
                                                class="img-thumbnail"
                                                alt="..."
                                            />
                                        </div>
                                        <div class="col-md-10">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                      
                                                        <th scope="col">
                                                            Designation
                                                        </th>
                                                        <th scope="col">
                                                            Quantite
                                                        </th>
                                                        <th scope="col">Prix</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                       
                                                        <td>Bracelet</td>
                                                        <td>1</td>
                                                        <td>120.30</td>
                                                    </tr>
                                                </tbody>
                                            </table>
    
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button
                                    type="button"
                                    class="continuer_achat btn btn-sm small btn-success"
                                    data-bs-dismiss="modal"
                                >
                                    Continuer mes achats
                                </button>
                                {{-- to command detail --}}
                                <a
                                    href="{{route('panier', App::getLocale())}}"
                                    type="button"
                                    class="consulter_panier btn btn-sm small  btn-primary"
                                    >Consulter mon panier</a
                                >
                            </div>
                        </div>
                    </div>

                </div> {{-- modal end --}}
                @endfor
            </div>
        