@extends('core::EJCTemplate.layouts.default')
@section('content')

  @include('core::EJCTemplate.sections.home.aboutEJC')
  @include('core::EJCTemplate.sections.home.aboutUs')
  @include('core::EJCTemplate.sections.home.education')
  @include('core::EJCTemplate.sections.home.interestAndAbilities')
  @include('core::EJCTemplate.sections.home.work')
  @include('core::EJCTemplate.sections.home.services')
  @include('core::EJCTemplate.sections.home.contact')

  
@stop

@section('scripts')
    <link rel="stylesheet" href="{{URL::asset('assets/js/owlCarousel/owl.carousel.css')}}">
    <script src="{{URL::asset('assets/js/owlCarousel/owl.carousel.min.js')}}"></script>
    <script>
      var homeAPI = (function($){
        var initClientsCarousel = function(){
          $("#owl-clients").owlCarousel({
                    autoPlay: 3000, //Set AutoPlay to 3 seconds
                    items : 4,
                    itemsDesktop : [1199,3],
                    itemsDesktopSmall : [979,3]

          });
        }

        var init = function(){
          initClientsCarousel();
        }

        return {
          init: init
        }

      }(jQuery));

      $(document).ready(function() {
        homeAPI.init();
      });
    </script>

@stop
