@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-body">
                    <div class='box'>
                        <div class='box-header'>
                            <h4 class='box-title'>Foxy Hypermedia-Space! <small> Simple and fast</small></h4>
                            <!-- tools box -->
                            <div class="pull-right box-tools">
                                <button class="btn btn-default btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                <button class="btn btn-default btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                            </div><!-- /. tools -->
                        </div><!-- /.box-header -->
                        <div class='box-body pad'>
                            <h2>FoxyAPI Skunkworks</h2>
                            <p>client authenticate <a href="/foxyapi/login">link start</a></p>
                        </div>
                    </div>
				</div>
			</div>
		</div>
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
                        <h2>Basic FoxyCart Example Skunkworks</h2>
                        <p>continue to <a href="/cart">cart</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
	</div>
</div>
@endsection
