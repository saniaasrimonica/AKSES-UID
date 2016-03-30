<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- main title -->
    <title>{{ $title }}</title>
    <link href="{{ url('packages/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
	body{
		padding-top: 20px;
	}
    </style>
  </head>
  <body>
    <div class="container">
      <!-- inilah main content kita -->
      {{ $content }}
    </div>
    <script src="{{ url('packages/js/jquery.min.js') }}"></script>
    <script src="{{ url('packages/js/bootstrap.min.js') }}"></script>
  </body>
</html>
