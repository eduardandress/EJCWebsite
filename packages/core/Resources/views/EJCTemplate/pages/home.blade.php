@extends('core::EJCTemplate.layouts.default')


@section('content')

  @include('core::EJCTemplate.sections.home.aboutEJC')
  @include('core::EJCTemplate.sections.home.services')
  @include('core::EJCTemplate.sections.home.aboutUs')
  @include('core::EJCTemplate.sections.home.education')
  @include('core::EJCTemplate.sections.home.interestAndAbilities')
  @include('core::EJCTemplate.sections.home.work')
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

      
       var EJCNotifications = (function(){

           var ejcConversation = [
              {
                from: "J",
                message: "Hello and welcome! I'm J.",
                animationClass: "show animated bounceInLeft",
                delay: 3000
              },
              {
                from: "E",
                message: "I'm E. Nice to meet you!",
                animationClass: "show animated bounceInLeft",
                delay: 3000
              },
              {
                from: "J",
                message: "We are going to share our development ideas & projects in our <strong> new blog</strong>!",
                animationClass: "show animated fadeIn",
                delay: 8000
              },
              {
                from: "E",
                message: "Don't forget to check it out soon!",
                animationClass: "show animated fadeIn",
                delay: 3000
              }

            ];


           var _members = [{
                          id: "E", 
                          pictUrl:  "{{URL::asset('assets/images/E.png')}}" 
                         },
                         {
                          id: "J", 
                          pictUrl: "{{URL::asset('assets/images/J.png')}}" 
                         }];

            var showNotification = function(){

                var $wrapper = $("<div class='ejcNotiWrapper'></div>");
                var memberImgs = _members.map(function(e, i){
                     return "<div class='img-wr'> <div class='msgContainer'></div><img class='member-img' width='100' height = '100' data-member='"+e.id+"' src='"+e.pictUrl+"'/> </div>" ;
                });

                $wrapper.append(memberImgs.join(""));
                $("body").append($wrapper);
                var imgElements = $wrapper.find(".member-img");


                var animateMsg = function(startIndex, conversation){

                  var $notiWrapper = $('.ejcNotiWrapper');
                  var msg = conversation[startIndex];
                  if(!msg){  
                    $notiWrapper.hide();
                    return; 
                  }

                  var memberID = msg.from;

                  var imgItem = imgElements.filter(function(i, el){ 
                    return $(el).data("member").trim() === memberID.trim() 
                  });
                  imgElements.addClass('hide')

                  if(imgItem){

                    var $memberContainer = $(imgItem).eq(0).closest(".img-wr");
                    var $msgContainer = $memberContainer.find(".msgContainer")

                    $notiWrapper.find(".msgContainer")
                                .addClass('hide');

                    setTimeout(function(){

                      $(imgItem).addClass('show animated bounceInUp').removeClass('hide');
                                            
                       setTimeout(function(){
                     
                            $msgContainer.html(msg.message)
                                         .addClass(msg.animationClass)
                                         .removeClass('hide');

                            setTimeout(function(){
                              animateMsg(++startIndex, conversation)
                            }, msg.delay)

                       }, 1000);

                    }, 1000);
                   
                   
                  }

                }

                var startConversation = function(conversation){
                   setTimeout(function(){
                      animateMsg(0, conversation)
                   }, 10000)

                }

              
             
                startConversation(ejcConversation);

            }

            return  {
                showNotification: showNotification
            }

       }())

      


        var init = function(){
          initClientsCarousel();
           EJCNotifications.showNotification();
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
