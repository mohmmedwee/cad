<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
      <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" >

<?php $this->beginBody() ?>

 <!-- <div class="wrap"> -->
  <!--   <?php
    NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Contact', 'url' => ['/site/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>  -->


        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">

        <div class="top_bar">
            <div class="container">
                <a href="#" class="lang-switch"><img src="images/globe.png" alt=""> عربي</a>
                <ul class="top-nav">

                <?php 
                 if (Yii::$app->user->isGuest) { ?>
      
    
                    <li><a href="?r=site%2Flogin">Login</a></li>    
                    <li><a href="?r=site%2Fsignup">Register</a></li>
                    

             
                 <?php  } else { ?>

                <li style="float: right;
    font-family: 'GE_SS_Two_Light';
    font-size: 16px;
    color: #fff;">    <?= Yii::$app->user->identity->username ?>  

                <?= 

                  Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout ',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()

                ?>

               <?php   } ?>
             

</li>


                 

                    
                    
                </ul>
            </div>
        </div>


        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="?r=site%2Findex">
                    <div class="logo"><img src="images/logo.png" alt=""></div>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav main-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li><a class="page-scroll" href="index.html">Home</a></li>
                     <li> <a class="page-scroll" href="about-me.html">About Me</a></li>
                    <li><a class="page-scroll" href="how-it-works.html">How it works</a></li>
                    <li><a class="page-scroll" href="sample-drawings.html">Sample Drawing</a></li>
                    <li><a class="page-scroll" href="drawing-request.html">Drawing Request</a></li>
                    <li><a class="page-scroll" href="contact-us.html">Contact Us</a></li>
                    <li><a class="page-scroll" href="online-courses.html">Courses</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
 
 <!-- <div class="container"> -->
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
   <!--  </div> -->
 </div> 
 
<!-- <footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>
 -->

     <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content vidoo">
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <iframe width="100%" height="460" src="https://www.youtube.com/embed/vqqOJq8I-hw" frameborder="0" allowfullscreen></iframe>


            </div>
        </div>
    </div>
    



    <footer >
      <div class="container">
        <div class="row">
          <aside class="col-md-6"><p>© 2017 CAD Consilio . All rights reseved.</p></aside>
          <aside class="col-md-6"><div class="pwrd"><p>Powered By</p><a href="http://www.mawaqaa.com/" target="_blank"><img src="images/company-icon.png" alt=""></a></div></aside>
          
          
        </div>
        
        
      </div>
    </footer>


</section>

    <script>
    $(document).on('ready', function(){
    $('.crosscover').crosscover({
      // controller: true,
      dotNav: true
    });
    });
  </script>

  
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOaSmNcBHf07FWaVlO4pXgyFYMjmCPAEg"></script>
    
    <script>

        $(function(){
            //default
            $('.map-canvas').prettyMaps({
                address: 'Kuwait City',
                image: 'images/map-icon.png',
                hue: '#f1be16',
                saturation: -40
            });
      
     });  
  </script>
   
   <script>
     $(function(){
    $('#myModal').on('hidden.bs.modal', function(){
    $('#myModal').hide();
    $('#myModal iframe').attr("src", jQuery("#myModal iframe").attr("src"));
    });

  });

  </script>
  
  <script>
    $(document).ready(function () {
        $('.launchmodal').click(function () {
            $('#myModal').modal({
                keyboard: false,
                backdrop: 'static',
            })
        });
    });
 </script>
<?php $this->endBody() ?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</html>
<?php $this->endPage() ?>
