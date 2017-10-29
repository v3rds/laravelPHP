<!DOCTYPE html>
<html>
<head>
	<title>@yield('header')</title>
</head>
<body>

	<p>@include('layouts.nav')</p>
	
	@yield('content')

	<p>@include('layouts.sidebar')</p>

	<p>@include('layouts.footer')</p>

</body>
</html>