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
	</head>
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
                    @else
                        <h3>{{ $user->getNickname() }} has not been Authenticated...</h3>
                    @endif
                </div>
			</div>
		</div>
	</body>
</html>
