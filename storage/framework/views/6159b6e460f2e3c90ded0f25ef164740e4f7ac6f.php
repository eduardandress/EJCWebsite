<?php 
    $technologies = array(
        [
          'name' => 'Laravel (PHP)',
          'imageURL' =>'assets/images/technologies/laravel.svg' 
        ],
        [
          'name' =>'Symfony (PHP)',
          'imageURL' =>'assets/images/technologies/symfony.svg'
        ],
        [
          'name' =>'Javascript',
          'imageURL' =>'assets/images/technologies/js.png'
        ],
        [
          'name' =>'AngularJS',
          'imageURL' =>'assets/images/technologies/angular.svg'
        ],
        [
          'name' =>'ReactJS',
          'imageURL' =>'assets/images/technologies/react.png'
        ],
        [
          'name' =>'BackboneJS',
          'imageURL' =>'assets/images/technologies/backbone.png'
        ],
        [
          'name' =>'HTML5',
          'imageURL' =>'assets/images/technologies/html.png'
        ],
        [
          'name' =>'CSS3',
          'imageURL' =>'assets/images/technologies/CSS3Logo.jpg'
        ],
        [
          'name' =>'Bootstrap 3',
          'imageURL' =>'assets/images/technologies/bootstrap.png'
        ],
        [
          'name' =>'Materialize',
          'imageURL' =>'assets/images/technologies/materialize.png'
        ],
        [
          'name' =>'NodeJS',
          'imageURL' =>'assets/images/technologies/node.jpg'
        ],
        [
          'name' =>'Android(JAVA ME)',
          'imageURL' =>'assets/images/technologies/android-logo.jpg'
        ],
        [
          'name' =>'MySQL',
          'imageURL' =>'assets/images/technologies/mysql.png'
        ],
        [
          'name' =>'MongoDB',
          'imageURL' =>'assets/images/technologies/mongodb.png'
        ],
        [
          'name' =>'PostgreSQL',
          'imageURL' =>'assets/images/technologies/postgresql.png'
        ]

    ); 
?>
<div class="section no-pad-bot " id="aboutEJCSection">

  <h2 class="center-align"> About EJC </h2>


    <div class="row">
      <h3 class="center-align">Principles</h3>
      <div class="col s12 m4">
        <div class="icon-block principle">
            <h4><b>E</b>xtremely good service </h4>
            We strive to offer you high quality service, showing humility, respect and fairness toward all. <b>Your satisfaction & trust are our best reward</b>. 
        </div>
      </div>
      <div class="col s12 m4">
        <div class="icon-block principle">
            <h4><b>J</b>ob done</h4>
            We are fully commited to giving you the best product possible. Having always 100% feedback with you. So the moment we start, <b> we never stop until it's a job done!.</b>
        </div>
      </div>
      <div class="col s12 m4">
        <div class="icon-block principle">
            <h4><b>C</b>reative ideas</h4>
            We are in an everlasting tunnel of inspiration, as developers we wear many hats to see things in different perspectives, but collaboration contributes to innovation. <b>So let's bring our ideas together!.</b>
        </div>
      </div>
    </div>
   <div class="container">
      <h3 class="center-align"> Using the best technologies </h3>

      <div class="owl-carousel" id="owl-clients">
          <?php foreach($technologies as $technology): ?>
            <div class="item"> 
                  <div class="card small">
                    <div class="card-image waves-effect waves-block waves-light">
                      <img  class="responsive-img" src="<?php echo e(URL::asset($technology['imageURL'])); ?>">
                    </div>
                    <div class="card-content">
                      <span class="card-title  grey-text text-darken-4"><?php echo e($technology['name']); ?></span>
                    </div>
                  </div>
            </div>
          <?php endforeach; ?>
      </div>
    </div>
</div>
