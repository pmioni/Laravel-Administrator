<!DOCTYPE html>
<html lang="<?php echo Config::get('application.language') ?>">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta name="robots" content="noindex">
	<title>{{ Config::get('administrator::administrator.title') }}</title>

	@foreach ($css as $url)
    	<?php
        if (App::environment() == 'production')
        {
            $url = str_replace('http://', 'https://', $url);
        }
        ?>
		<link href="{{$url}}" media="all" type="text/css" rel="stylesheet">
	@endforeach

	<!--[if lte IE 9]>
		<link href="{{asset('packages/frozennode/administrator/css/browsers/lte-ie9.css')}}" media="all" type="text/css" rel="stylesheet">
	<![endif]-->

</head>
<body>
	<div id="wrapper">
		@include('administrator::partials.header')

		{{ $content }}

		@include('administrator::partials.footer')
	</div>

	@foreach ($js as $url)
	    <?php
	    if (App::environment() == 'production')
        {
            $url = str_replace('http://', 'https://', $url);
        }
	    ?>
		<script src="{{$url}}"></script>
	@endforeach
</body>
</html>