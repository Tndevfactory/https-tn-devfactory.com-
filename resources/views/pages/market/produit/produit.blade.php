@extends('layouts.app') @section('head')

<title>produit</title>

@endsection @section('content')

<div class="container">
    <?php $data=[
             'level1' =>
    "homme", 'level2' => "chaussures tt" ] ?> @include('components.breadcrumb',
    $data)

    <div class="row row-cols-1 row-cols-sm-2">
        <div class="col-sm-6">
            <div class="img-zoom-container d-none d-md-block">
                <img
                    id="myimage"
                    class="img-fluid img_big_screen"
                    src="{{ asset('/images/p9.jpg') }}"
                    alt="product"
                />
                <div id="myresult" class="img-zoom-result"></div>
            </div>

            <div class="row row-cols-2 row-cols-sm-4 my-3 g-3">
                <div class="col">
                    <img
                        src="{{ asset('/images/p9.jpg') }}"
                        class="img_screen img-thumbnail"
                        alt="..."
                    />
                </div>
                <div class="col">
                    <img
                        src="{{ asset('/images/p3.jpg') }}"
                        class="img_screen img-thumbnail"
                        alt="..."
                    />
                </div>
                <div class="col">
                    <img
                        src="{{ asset('/images/p4.jpg') }}"
                        class="img_screen img-thumbnail"
                        alt="..."
                    />
                </div>
                <div class="col">
                    <img
                        src="{{ asset('/images/p5.jpg') }}"
                        class="img_screen img-thumbnail"
                        alt="..."
                    />
                </div>
            </div>
        </div>

        {{-- block product right start--}}
        <div class="col-sm-6 p-3">
            <span class="h3 product_title"
                >Basket Adidas Stan Smith Blanc / Rouge</span
            >
            <p>Reference: <span>utiu4474333</span></p>
            <div class="row row-cols-2 p-1 g-3">
                <div class="col-3">Prix:</div>
                <div class="col-9 product_price">134.55 TND</div>

                <div class="col-3">
                    Pointure <span class="d-none d-md-inline">/ taille</span>:
                </div>
                <div class="col-9">
                    <select
                        class="form-select form-select-sm"
                        aria-label=".form-select-sm example"
                    >
                        <option selected></option>
                        <option value="1">S</option>
                        <option value="2">M</option>
                        <option value="3">XL</option>
                        <option value="3">XXL</option>
                    </select>
                </div>

                <div class="col-3">Couleur:</div>
                <div class="col-9">
                    <select
                        class="form-select form-select-sm"
                        aria-label=".form-select-sm example"
                    >
                        <option selected></option>
                        <option value="1">Rouge</option>
                        <option value="2">Noir</option>
                        <option value="3">Bleu</option>
                        <option value="3">Vert</option>
                    </select>
                </div>

                <div class="col-3">Quantite:</div>
                <div class="col-9">
                    <select
                        class="form-select form-select-sm"
                        aria-label=".form-select-sm example"
                    >
                        <option selected></option>
                        <option value="1">1</option>

                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="3">4</option>
                        <option value="3">5</option>
                    </select>
                </div>
            </div>

            <div class="d-grid">
                <button class="my-3 btn btn-primary">
                    <i class="fas fa-cart-plus"></i> Ajouter au panier
                </button>
            </div>
            <div class="my-4">
                <span> vendu par :</span>
                <span> <a href="#">Sport & casual</a></span>
            </div>
        </div>
        {{-- block product right end--}}
    </div>

    <div id="tabDiv" class="container-fluid my-4 mx-auto d-none d-sm-block">
        <nav class="nav nav-pills flex-column flex-sm-row">
            <a
                id="descriptionLink"
                class="tablinks active flex-sm-fill text-sm-center nav-link"
                href="#"
                >Description</a
            >
            <a
                id="ficheTechniqueLink"
                class="tablinks flex-sm-fill text-sm-center nav-link"
                href="#"
                >Fiche technique</a
            >
            <a
                id="livraisonLink"
                class="tablinks flex-sm-fill text-sm-center nav-link"
                href="#"
                >Livraison</a
            >
            <a
                id="avisLink"
                class="tablinks flex-sm-fill text-sm-center nav-link"
                href="#"
                >Avis</a
            >
        </nav>

        <div id="description" class="tabcontent p-3">
            1111111Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Nihil dicta quasi quibusdam fuga magnam harum qui, adipisci enim,
            alias distinctio maxime, id voluptatibus culpa consequuntur.
            Laudantium est et aut consectetur!
        </div>
        <div id="ficheTechnique" class="tabcontent p-3">
            222222Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Nihil dicta quasi quibusdam fuga magnam harum qui, adipisci enim,
            alias distinctio maxime, id voluptatibus culpa consequuntur.
            Laudantium est et aut consectetur! 2Lorem ipsum dolor, sit amet
            consectetur adipisicing elit. Nihil dicta quasi quibusdam fuga
            magnam harum qui, adipisci enim, alias distinctio maxime, id
            voluptatibus culpa consequuntur. Laudantium est et aut consectetur!
        </div>
        <div id="livraison" class="tabcontent p-3">
            3Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil
            dicta quasi quibusdam fuga magnam harum qui, adipisci enim, alias
            distinctio maxime, id voluptatibus culpa consequuntur. Laudantium
            est et aut consectetur!
        </div>
        <div id="avis" class="tabcontent p-3">
            4Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil
            dicta quasi quibusdam fuga magnam harum qui, adipisci enim, alias
            distinctio maxime, id voluptatibus culpa consequuntur. Laudantium
            est et aut consectetur! 4Lorem ipsum dolor, sit amet consectetur
            adipisicing elit. Nihil dicta quasi quibusdam fuga magnam harum qui,
            adipisci enim, alias distinctio maxime, id voluptatibus culpa
            consequuntur. Laudantium est et aut consectetur! 4Lorem ipsum dolor,
            sit amet consectetur adipisicing elit. Nihil dicta quasi quibusdam
            fuga magnam harum qui, adipisci enim, alias distinctio maxime, id
            voluptatibus culpa consequuntur. Laudantium est et aut consectetur!
        </div>
    </div>

    <div class="accordion mt-3 d-block d-sm-none" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button
                    class="accordion-button"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseOne"
                    aria-expanded="true"
                    aria-controls="collapseOne"
                >
                    Chaussures
                </button>
            </h2>
            <div
                id="collapseOne"
                class="accordion-collapse collapse show"
                aria-labelledby="headingOne"
                data-bs-parent="#accordionExample"
            >
                <div class="accordion-body">
                    <ul class="list-group">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                        <li class="list-group-item">A fourth item</li>
                        <li class="list-group-item">And a fifth one</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo"
                    aria-expanded="false"
                    aria-controls="collapseTwo"
                >
                    Costumes
                </button>
            </h2>
            <div
                id="collapseTwo"
                class="accordion-collapse collapse"
                aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample"
            >
                <div class="accordion-body">
                    <ul class="list-group">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                        <li class="list-group-item">A fourth item</li>
                        <li class="list-group-item">And a fifth one</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseThree"
                    aria-expanded="false"
                    aria-controls="collapseThree"
                >
                    T-shirt
                </button>
            </h2>
            <div
                id="collapseThree"
                class="accordion-collapse collapse"
                aria-labelledby="headingThree"
                data-bs-parent="#accordionExample"
            >
                <div class="accordion-body">
                    <ul class="list-group">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                        <li class="list-group-item">A fourth item</li>
                        <li class="list-group-item">And a fifth one</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
