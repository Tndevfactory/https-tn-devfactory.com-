

<div id="gsap_carousel">
<div class="container">

<div class="wrapper">
    <div class="boxes">
        @for ($i = 0; $i < 10; $i++)
        <div class="box ">
            <div class="card" style="width: 18rem">
                <div class="promo_rate d-flex justify-content-between">
                    <button
                        class="
                            btn btn-sm
                            badge
                            rounded-pill
                            bg-primary
                            text-light
                        "
                    >
                        Nouveau <i class="fas fa-level-up-alt"></i>
                    </button>
                    <button
                        class="
                            btn btn-sm
                            badge
                            rounded-pill
                            bg-success
                            text-light
                        "
                    >
                        -25% <i class="fas fa-sort-down"></i>
                    </button>
                </div>
                <div class="overlay">
                    {{-- to product detail --}}
                    <a
                        href="#"
                        type="button"
                        class="details btn btn-sm bg-primary"
                    >
                        Details <i class="far fa-eye"></i>
                    </a>
                    <button
                        type="button"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal"
                        class="commander btn btn-sm bg-success text-light"
                    >
                        Acheter<i class="fas fa-cart-plus"></i>
                    </button>
                </div>
                <img
                    src="https://picsum.photos/300/202"
                    class="card-img-top"
                    alt="..."
                />
                <div class="card-body">
                    <div class="name_rate_avis d-flex align-items-start">
                        <h5 class="card-title text-secondary">
                            Espadrit Nike
                        </h5>
                        <div class="star_avis">
                            {{-- rating avis --}}
                            <a
                                href="#"
                                style="font-size: 12px"
                                class="
                                    stars
                                    ms-2
                                    mt-n1
                                    d-inline-block
                                    text-decoration-none
                                "
                            >
                                <i
                                    style="color: rgb(175, 153, 153)"
                                    class="far fa-star"
                                ></i>
                                <i
                                    style="color: #ddd"
                                    class="far fa-star"
                                ></i>
                                <i
                                    style="color: #ffba08"
                                    class="fas fa-star"
                                ></i>
                                <i
                                    style="color: #ffba08"
                                    class="fas fa-star"
                                ></i>
                                <i
                                    style="color: #ffba08"
                                    class="fas fa-star"
                                ></i>
                            </a>
                            <a
                                href="#"
                                class="
                                    text-muted
                                    ms-1
                                    mt-n3
                                    d-inline-block
                                    text-decoration-none
                                    fw-light
                                    fs-6
                                "
                                >(2)</a
                            >
                        </div>
                    </div>
                    <p class="card-text text-secondary">
                        Espadrit Nike pump best choix pour les footballers
                    </p>
                    <div
                        class="price_old_new d-flex justify-content-between"
                    >
                        <a href="#" class="btn btn-default text-success"
                            >1370 TND</a
                        >
                        <a
                            href="#"
                            class="
                                btn btn-default
                                text-decoration-line-through text-muted
                            "
                            >1470 TND</a
                        >
                    </div>
                </div>
            </div>
        </div>

        {{-- modal --}}
        <div
            class="modal fade"
            id="exampleModal"
            tabindex="-1"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div
                        style="height: 4vh; background-color: #11a74b"
                        class="modal-header text-light bg-success"
                    >
                        <h6 class="modal-title" id="exampleModalLabel">
                            <i class="fas fa-cart-arrow-down"></i> Article
                            ajouté à votre panier
                        </h6>
                        <button
                            type="button"
                            class="btn-sm btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4">
                                    <img
                                        src="https://picsum.photos/300/200"
                                        class="img-thumbnail"
                                        alt="..."
                                    />
                                </div>
                                <div class="col-md-8">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">Article</th>
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
                                            <tr class="table-success">
                                                <th scope="row">
                                                    <i
                                                        class="
                                                            fas
                                                            fa-long-arrow-alt-right
                                                        "
                                                    ></i>
                                                </th>
                                                <td>Bracelet</td>
                                                <td>1</td>
                                                <td>120.30</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">Panier</th>
                                                <th scope="col">
                                                    # Articles
                                                </th>
                                                <th scope="col">Taxes</th>
                                                <th scope="col">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <i
                                                        class="
                                                            fas
                                                            fa-cart-arrow-down
                                                        "
                                                    ></i>
                                                </th>
                                                <td>5</td>
                                                <td>7.89</td>
                                                <td>1320.89</td>
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
                            class="continuer_achat btn btn-success"
                            data-bs-dismiss="modal"
                        >
                            Continuer mes achats
                        </button>
                        {{-- to command detail --}}
                        <a
                            href="#"
                            type="button"
                            class="consulter_panier btn btn-primary"
                            >Consulter mon panier</a
                        >
                    </div>
                </div>
            </div>
        </div>
        @endfor
    </div>

</div>
</div>

</div>