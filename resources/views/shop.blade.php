@extends('app')

@section('content')
    <div class="col-md-3">
        <a class="list-group-item" href="http://scotchtober-hinchk.c9.io/basket">
            My Cart

                                <span class="badge">
                    42
                </span>
        </a>
        <div class="list-group">
            <a class="list-group-item" href="http://scotchtober-hinchk.c9.io/browse/books">
                Books

                                    <span class="badge">
                        3
                    </span>
            </a>
            <a class="list-group-item" href="http://scotchtober-hinchk.c9.io/browse/games-consoles">
                Games &amp; Consoles

                                    <span class="badge">
                        2
                    </span>
            </a>
        </div>
    </div>
    <div class="col-md-9">
        <div class="row">
            <a href="http://scotchtober-hinchk.c9.io/basket"><h3>my shopping cart</h3></a>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-4 col-lg-3">
                <div class="thumbnail">
                    <img class="img-rounded" alt="Hogfather" src="http://placehold.it/179/179">

                    <div class="caption">
                        <a href="http://scotchtober-hinchk.c9.io/product/hogfather">
                            <h4 title="Hogfather">Hogfather</h4>
                        </a>
                        <div class="row">
                            <div class="col-xs-4">
                                <h5 class="">£9.99</h5>
                            </div>
                            <div class="col-xs-8">
                                <button type="submit" class="btn btn-sm btn-primary pull-right" data-request="miniBasket::onAddProduct" data-request-update="'minibasket' : '#minibasket'" data-request-data="id: 1, quantity: 1">
                                    Add to Basket
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-lg-3">
                <div class="thumbnail">
                    <img class="img-rounded" alt="Battlefield 3" src="http://placehold.it/179/179">

                    <div class="caption">
                        <a href="http://scotchtober-hinchk.c9.io/product/battlefield-3">
                            <h4 title="Battlefield 3">Battlefield 3</h4>
                        </a>
                        <div class="row">
                            <div class="col-xs-4">
                                <h5 class="">£18.00</h5>
                            </div>
                            <div class="col-xs-8">
                                <button type="submit" class="btn btn-sm btn-primary pull-right" data-request="miniBasket::onAddProduct" data-request-update="'minibasket' : '#minibasket'" data-request-data="id: 2, quantity: 1">
                                    Add to Basket
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-lg-3">
                <div class="thumbnail">
                    <img class="img-rounded" alt="Battlefield 4" src="http://placehold.it/179/179">

                    <div class="caption">
                        <a href="http://scotchtober-hinchk.c9.io/product/battlefield-4">
                            <h4 title="Battlefield 4">Battlefield 4</h4>
                        </a>
                        <div class="row">
                            <div class="col-xs-4">
                                <h5 class="">£38.95</h5>
                            </div>
                            <div class="col-xs-8">
                                <button type="submit" class="btn btn-sm btn-primary pull-right" data-request="miniBasket::onAddProduct" data-request-update="'minibasket' : '#minibasket'" data-request-data="id: 3, quantity: 1">
                                    Add to Basket
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-lg-3">
                <div class="thumbnail">
                    <img class="img-rounded" alt="Anathem" src="http://placehold.it/179/179">

                    <div class="caption">
                        <a href="http://scotchtober-hinchk.c9.io/product/anathem-neil-stephenson">
                            <h4 title="Anathem">Anathem</h4>
                        </a>
                        <div class="row">
                            <div class="col-xs-4">
                                <h5 class="">£6.99</h5>
                            </div>
                            <div class="col-xs-8">
                                <button type="submit" class="btn btn-sm btn-primary pull-right" data-request="miniBasket::onAddProduct" data-request-update="'minibasket' : '#minibasket'" data-request-data="id: 4, quantity: 1">
                                    Add to Basket
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-lg-3">
                <div class="thumbnail">
                    <img class="img-rounded" alt="Going Postal" src="http://placehold.it/179/179">

                    <div class="caption">
                        <a href="http://scotchtober-hinchk.c9.io/product/going-postal-terry-pratchett">
                            <h4 title="Going Postal">Going Postal</h4>
                        </a>
                        <div class="row">
                            <div class="col-xs-4">
                                <h5 class="">£8.99</h5>
                            </div>
                            <div class="col-xs-8">
                                <button type="submit" class="btn btn-sm btn-primary pull-right" data-request="miniBasket::onAddProduct" data-request-update="'minibasket' : '#minibasket'" data-request-data="id: 5, quantity: 1">
                                    Add to Basket
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
