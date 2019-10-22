<!DOCTYPE html>
<html>
<head>
	<title>@yield('judul')</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
	<script type="text/javascript" src="{{ asset('/js/bootstrap.min.js') }}"></script>
</head>
<body>
<div class="header">
	<nav class="navbar navbar-light bg-dark">
		<a class="navbar-brand m-auto text-light" href="#">KELOLA DATA BARANG</a>
	</nav>
	@yield('konten')
</div>
</body>
</html>