@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">


                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class='box'>
                            <div class='box-header'>
                                <h4 class='box-title'>LocalDev Showcase <small> Laravel Shopper</small></h4>
                                <!-- tools box -->
                                <div class="pull-right box-tools">
                                    <button class="btn btn-default btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                    <button class="btn btn-default btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                                </div><!-- /. tools -->
                            </div><!-- /.box-header -->
                            <div class='box-body pad'>
                                <h3>Basic FoxyCart Example Skunkworks</h3>
                                <a href="https://eyopsguru.foxycart.com/cart?name=Cool%20Example&price=10&color=red&code=sku123">Add a red Cool Example</a>
                            </div>
                            <div class='box-body pad'>
                                <h4>Basic FoxyCart Shop</h4>
                                <!-- form example -->
                                <form action="https://eyopsguru.foxycart.com/cart" method="post" accept-charset="utf-8">
                                    <input type="hidden" name="name" value="Cool Example" />
                                    <input type="hidden" name="price" value="10" />
                                    <input type="hidden" name="code" value="sku123" />
                                    <label class="label_left">Size</label>
                                    <select name="size">
                                        <option value="small">Small</option>
                                        <option value="medium">Medium</option>
                                        <option value="large">Large</option>
                                    </select>
                                    <input type="submit" value="Add a Cool Example" class="submit" />
                                </form>
                                <a href="/basket"><h4>my shopping cart</h4></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
