<!DOCTYPE html>
<html lang="en">
<head>
    @include('core::EJCTemplate.includes.head')
</head>
<body>
      @include('core::EJCTemplate.includes.header')

     
      <div class="row">
           @yield('content')
      </div>
      @include('core::EJCTemplate.includes.footer')
      @yield('scripts')
      
</body>
</html>