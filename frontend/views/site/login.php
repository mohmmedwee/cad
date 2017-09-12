<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>
<style type="text/css">
    .control-label{
        display: none;
    }


    a:hover, a:focus {
    color: black;
    text-decoration: none;
}


a{
    color:black;

}


.facebook 
{
    display: none !important;
}
</style>
    <p>Please fill out the following fields to login:</p>

   <!--  <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder' =>'Username','class'=>'text_box5']) ?>

                <?= $form->field($model, 'password')->passwordInput(['placeholder'=>'Password','class'=>'text_box5']) ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div style="color:#999;margin:1em 0">
                    <?= Html::a(' Forgot Password', ['site/request-password-reset']) ?>
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'submit_btn', 'name' => 'login-button']) ?>
                </div>

 
                        <ul class="log-way">
                            <li><a href="#"><img src="images/facebook.png" alt="" title="facebook"></a></li>
                            <li><a href="#"><img src="images/twitter.png" alt="" title="twitter"></a></li>
                            <li><a href="#"><img src="images/google.png" alt="" title="google +"></a></li>
                        </ul>
                        
                        <div class="reg_link">Don't have an account ? <a href="?r=site%2Fsignup">Register Now</a></div>
                        
                        
                 <?= yii\authclient\widgets\AuthChoice::widget([
                'baseAuthUrl' => ['site/auth']
                    ]) ?>

            <?php ActiveForm::end(); ?>
        </div>
    </div> -->
</div>
 


     <!-- Inner banner -->
    <section class="inner-banner">
        <img src="images/inner-banner1.jpg" alt=""> 
        <h1>LOGIN</h1>
    </section>
    <!-- Inner banner -->
    
    
    <!--inner-->
    <section class="inner-wrapper">
        <article class="container">
        
        <div class="main-wrapper">
        
        <div class="row">
            <div class="col-md-12">
                <div class="navbar-top">
                    <ul>
                        <li><a href="?r=site%2Flogin" class="log_icon active">LOGIN</a></li>
                        <li><a href="?r=site%2Fsignup" class="reg_icon">REGISTER</a></li>

                    </ul>
                </div>
            </div>
        </div>
        
        <!--content-->
        <div class="content-wrapper">
        <h1>LOGIN</h1>
        
        <div class="row">
            <div class="col-md-6 col-sm-10 col-md-offset-3 col-sm-offset-1">
                <div class="log-wrap">
                   
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder' =>'Username','class'=>'text_box5']) ?>

                <?= $form->field($model, 'password')->passwordInput(['placeholder'=>'Password','class'=>'text_box5']) ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div class="form-group pull-right margin12">
                    <?= Html::a(' Forgot Password', ['site/request-password-reset']) ?>
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'submit_btn', 'name' => 'login-button']) ?>
                </div>

 
                        <ul class="log-way">
                            <li><a href="?r=site%2Fauth&authclient=facebook"><img src="images/facebook.png" alt="" title="facebook"></a></li>
                            <li><a href="#"><img src="images/twitter.png" alt="" title="twitter"></a></li>
                            <li><a href="#"><img src="images/google.png" alt="" title="google +"></a></li>
                        </ul>
                        
                        <div class="reg_link">Don't have an account ? <a href="?r=site%2Fsignup">Register Now</a></div>
                        
                        
                 <?= yii\authclient\widgets\AuthChoice::widget([
                'baseAuthUrl' => ['site/auth']
                    ]) ?>

            <?php ActiveForm::end(); ?>

                    
                    
                </div>
                
                
            </div>
            
            
            
        </div>
            
            
            
            
        </div>
        <!--content-->
        
            

            
            
            
            
        </div>


        </article>
    </section>
    <!--inner-->
    
    