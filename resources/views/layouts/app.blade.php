<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, height=device-height">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="csrf-token" content="{{csrf_token()}}">
	<title>StChrisCloud</title>
	<link rel=icon href="{{url('/storage')}}/{{setting('site.logo')}}">
	<link rel="stylesheet" href="{{url('css/app.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<style>
		.bg-primary {
			background-color: {{setting('site.site_background')}} !important; 
		}

		.border-primary {
			border: 1px {{setting('site.site_background')}} solid !important;
		}
		.border-top-primary{
			border-top: 1px {{setting('site.site_background')}} solid;
		}
		.border-bottom-primary{
			border-bottom: 1px {{setting('site.site_background')}} solid;
		}
		.primary-color{
			color: {{setting('site.site_background')}} !important;
		}
	</style>
</head>

<body>
	<div class="container-fluid no-padding">
		@include('layouts.partials.nav') @yield('content')
	</div>
	<script src="{{url('/js/app.js')}}"></script>
</body>

</html>