<!DOCTYPE html>
<html lang="">
	<head>
        <meta charset="utf-8">
        
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>@yield('title')</title>
		<link rel="stylesheet" href="/css/style.css">
		<link rel="stylesheet" href="/css/responsive.css">
        <link rel="stylesheet" href="/css/book.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/admin.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css">
		<script src="https://code.jquery.com/jquery-latest.js"></script>
	</head>
    <body>
		@include('particals.header')
		@yield('carts404')


		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script type ="text/javascript" src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" ></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
		<script src="/js/template.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
		<script src="/js/ajax.js"></script>
</body>
</html>