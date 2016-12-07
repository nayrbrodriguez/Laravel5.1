
<!DOCTYPE html>
<html>
    <head>
        
	<title>@yield('title')</title>
	@section('head')
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/layout.css') }}">

	@show
      

    </head>
    <body>
    		<H1>Registration Form</H1>
    		{!!Form::open(array('url' => 'welcome'))!!}
    		{!!Form::label('firstname','First Name')!!}
    		{!!Form::text('firstname')!!}
    		
    		{!!Form::label('lastname','Last Name')!!}
    		{!!Form::text('lastname')!!}

    		{!!Form::submit('Sign Up')!!}
    		{!!Form::close()!!}
    </body>
</html>
