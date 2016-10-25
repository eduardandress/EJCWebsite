<?php $__env->startSection('content'); ?>

  <?php echo $__env->make('core::EJCTemplate.sections.home.aboutEJC', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->make('core::EJCTemplate.sections.home.services', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->make('core::EJCTemplate.sections.home.aboutUs', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->make('core::EJCTemplate.sections.home.education', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->make('core::EJCTemplate.sections.home.interestAndAbilities', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->make('core::EJCTemplate.sections.home.work', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->make('core::EJCTemplate.sections.home.contact', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/js/owlCarousel/owl.carousel.css')); ?>">
    <script src="<?php echo e(URL::asset('assets/js/owlCarousel/owl.carousel.min.js')); ?>"></script>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('core::EJCTemplate.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>