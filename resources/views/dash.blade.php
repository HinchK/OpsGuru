<html>
	<head>
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 72px;
				margin-bottom: 30px;
			}

			.quote {
				font-size: 24px;
			}
		</style>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="../../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link href="../../dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
	</head>
	{{--<body class="skin-red">--}}
    <body>
		<div class="container">
			<div class="content">
                <div class="row">
                    <img src="{{ $user->getAvatar() }}" class="img circle">

                    <div class="title">Welcome, to Laravel 5</div>
                    <div class="quote">{{ Inspiring::quote() }}</div>
                </div>
                <div class="row">
                    @if($authenticated === true)
                        <h4>{{ $user->getNickname() }} is Authenticated</h4>
                        <p>continue to <a href="/home">home</a></p>
                    @else
                        <h3>Welcome, {{ $user->getNickname() }}, you don't appear to be a member of the ORG ... papers please!.</h3>
                        <div class="panel-body">
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                                <div class='box'>
                                    <div class='box-header'>
                                        <h3 class='box-title'>Connect me to my Team!<small>Simple and fast</small></h3>
                                        <!-- tools box -->
                                        <div class="pull-right box-tools">
                                            <button class="btn btn-default btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                            <button class="btn btn-default btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                                        </div><!-- /. tools -->
                                    </div><!-- /.box-header -->
                                    <div class='box-body pad'>
                                        <form class="form-horizontal" role="form" method="POST" action="/auth/register">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Name</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" name="name" value="{{ $user->getName() }}">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4 control-label">E-Mail Address</label>
                                                <div class="col-md-6">
                                                    <input type="email" class="form-control" name="email" value="{{ $user->getEmail() }}">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Nickname</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" name="nick_name" value="{{ $user->getNickname() }}"
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Avatar</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" name="avatar" value="{{ $user->getAvatar() }}">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-md-6 col-md-offset-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        Register
                                                    </button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                    @endif
                </div>
			</div>
                <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
                <!-- AdminLTE App -->
                <script src="../../dist/js/app.min.js" type="text/javascript"></script>
                <!-- AdminLTE for demo purposes -->
                <script src="../../dist/js/demo.js" type="text/javascript"></script>
		</div>
	</body>
</html>
