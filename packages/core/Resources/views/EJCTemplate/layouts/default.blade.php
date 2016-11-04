<!DOCTYPE html>
<html lang="en">
<head>
    @include('core::EJCTemplate.includes.head')
</head>
<body>
		<header>
	        @include('core::EJCTemplate.includes.header')
	        @include('core::EJCTemplate.includes.bannersection')
		</header>

        <div class="container-fluid">
                @yield('content')
        </div>

    @include('core::EJCTemplate.includes.footer')
	  @yield('scripts')

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="{{URL::asset('assets/mScrollTop/material-scrolltop.css')}}" type="text/css" rel="stylesheet" />
<link href="{{URL::asset('assets/css/animate.css')}}" type="text/css" rel="stylesheet" />
<script type='text/javascript' src='{{URL::asset('assets/js/wow.min.js')}}' ></script>
<link href="{{URL::asset('assets/font-awesome-4.6.3/css/font-awesome.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">

</body>
</html>