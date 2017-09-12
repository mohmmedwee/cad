<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use frontend\models\Countries;
use yii\helpers\ArrayHelper;


$this->title = 'Signup';
// $this->params['breadcrumbs'][] = $this->title;
?>

<style type="text/css">
    
.control-label{
    display: none;
}

</style>

 <!--<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true , 'placeholder'=>'User name' ,'class'=>'text_box5']) ?>

                <?= $form->field($model, 'email')->textInput(['placeholder'=>'email','class'=>'text_box5']) ?>
               <?= $form->field($model, 'firstname')->textInput(['placeholder'=>'First Name' ,'class'=>'text_box5']) ?>
                <?= $form->field($model, 'lastname')->textInput(['placeholder'=>'Last Name' , 'class'=>'text_box5']) ?>
                 <?= $form->field($model, 'phone')->textInput(['placeholder'=>'Phone','class'=>'text_box5']) ?>
                 <?= $form->field($model, 'address')->textInput(['placeholder'=>'Address','class'=>'text_box5']) ?>
                <?= $form->field($model, 'education')->textInput(['placeholder'=>'Education  & Qualification','class'=>'text_box5']) ?>
               <!--   <?=$form ->field($model , 'img')?> -->

             <!--     <?= $form->field($model, 'birthday')->textInput(['placeholder'=>'Date of Birth','class'=>'text_box5']) ?>


                <?= $form->field($model, 'password')->passwordInput(['placeholder'=>'Password', 'class'=>'text_box5']) ?>




                <div class="form-group">
                    <?= Html::submitButton('Sumbit', ['class' => 'sub_btn', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div> -->

 



    <!-- Inner banner -->
    <section class="inner-banner">
        <img src="images/inner-banner1.jpg" alt=""> 
        <h1>REGISTER</h1>
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
        <h1>REGISTER</h1>
          <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

        <div class="row">
            
                <div class="col-md-6 col-sm-10 col-md-offset-3 col-sm-offset-1">
                    <div class="log-wrap">
                    <ul class="log-way">
                                <li><a href="#"><img src="images/facebook.png" alt="" title="facebook"></a></li>
                                <li><a href="#"><img src="images/twitter.png" alt="" title="twitter"></a></li>
                                <li><a href="#"><img src="images/google.png" alt="" title="google +"></a></li>
                    </ul>
                    
                    <div class="form-fill"><h5>OR   <span>(  Fill the Below form to Register  )</span></h5></div>
                    
                    
                    </div>
                </div>
        
        
            <div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">
                <div class="reg-wrap">
                
                    <div class="row">
                    <aside class="col-md-12">  <?= $form->field($model, 'username')->textInput(['autofocus' => true , 'placeholder'=>'User name' ,'class'=>'text_box5']) ?> </aside>
                        <aside class="col-md-6 col-sm-6">

                        
                          <?= $form->field($model, 'firstname')->textInput(['placeholder'=>'First Name' ,'class'=>'text_box5']) ?>

                        </aside>
                        <aside class="col-md-6 col-sm-6">
                         <?= $form->field($model, 'lastname')->textInput(['placeholder'=>'Last Name' , 'class'=>'text_box5']) ?>
                        </aside>
                        <aside class="col-md-6 col-sm-6">  <?= $form->field($model, 'email')->textInput(['placeholder'=>'email','class'=>'text_box5']) ?></aside>
                        <aside class="col-md-6 col-sm-6"><?= $form->field($model, 'phone')->textInput(['placeholder'=>'Phone','class'=>'text_box5']) ?></aside>
                        <aside class="col-md-6 col-sm-6"> <?= $form->field($model, 'address')->textInput(['placeholder'=>'Address','class'=>'text_box5']) ?></aside>
                        <aside class="col-md-6 col-sm-6"> <?= $form->field($model, 'birthday')->textInput(['placeholder'=>'Date of Birth','class'=>'text_box5']) ?>
                        </aside>


                        <aside class="col-md-6 col-sm-6">
                            <?= $form->field($model, 'education')->textInput(['placeholder'=>'Education  & Qualification','class'=>'text_box5']) ?>
                        </aside>
                        <aside class="col-md-6 col-sm-6">



                        <?= $form->field($model, 'Country')->dropDownList(


array("AFGHANISTAN"=>"AFGHANISTAN","ALBANIA"=>"ALBANIA","ALGERIA"=>"ALGERIA","AMERICAN SAMOA"=>"AMERICAN SAMOA","ANDORRA"=>"ANDORRA","ANGOLA"=>"ANGOLA","ANGUILLA"=>"ANGUILLA","ANTARCTICA"=>"ANTARCTICA","ANTIGUA AND BARBUDA"=>"ANTIGUA AND BARBUDA","ARGENTINA"=>"ARGENTINA","ARMENIA"=>"ARMENIA","ARUBA"=>"ARUBA","AUSTRALIA"=>"AUSTRALIA","AUSTRIA"=>"AUSTRIA","AZERBAIJAN"=>"AZERBAIJAN","BAHRAIN"=>"BAHRAIN","BANGLADESH"=>"BANGLADESH","BARBADOS"=>"BARBADOS","BELARUS"=>"BELARUS","BELGIUM"=>"BELGIUM","BELIZE"=>"BELIZE","BENIN"=>"BENIN","BERMUDA"=>"BERMUDA","BHUTAN"=>"BHUTAN","BOLIVIA"=>"BOLIVIA","BOSNIA AND HERZEGOVINA"=>"BOSNIA AND HERZEGOVINA","BOTSWANA"=>"BOTSWANA","BOUVET ISLAND"=>"BOUVET ISLAND","BRAZIL"=>"BRAZIL","BRITISH INDIAN OCEAN TERRITORY"=>"BRITISH INDIAN OCEAN TERRITORY","BRUNEI DARUSSALAM"=>"BRUNEI DARUSSALAM","BULGARIA"=>"BULGARIA","BURKINA FASO"=>"BURKINA FASO","BURUNDI"=>"BURUNDI","CAMBODIA"=>"CAMBODIA","CAMEROON"=>"CAMEROON","CANADA"=>"CANADA","CAPE VERDE"=>"CAPE VERDE","CAYMAN ISLANDS"=>"CAYMAN ISLANDS","CENTRAL AFRICAN REPUBLIC"=>"CENTRAL AFRICAN REPUBLIC","CHAD"=>"CHAD","CHILE"=>"CHILE","CHINA"=>"CHINA","CHRISTMAS ISLAND"=>"CHRISTMAS ISLAND","COCOS (KEELING) ISLANDS"=>"COCOS (KEELING) ISLANDS","COLOMBIA"=>"COLOMBIA","COMOROS"=>"COMOROS","CONGO"=>"CONGO","CONGO, THE DEMOCRATIC REPUBLIC OF THE"=>"CONGO, THE DEMOCRATIC REPUBLIC OF THE","COOK ISLANDS"=>"COOK ISLANDS","COSTA RICA"=>"COSTA RICA","COTE D IVOIRE"=>"COTE D IVOIRE","CROATIA"=>"CROATIA","CUBA"=>"CUBA","CYPRUS"=>"CYPRUS","CZECH REPUBLIC"=>"CZECH REPUBLIC","DENMARK"=>"DENMARK","DJIBOUTI"=>"DJIBOUTI","DOMINICA"=>"DOMINICA","DOMINICAN REPUBLIC"=>"DOMINICAN REPUBLIC","EAST TIMOR"=>"EAST TIMOR","ECUADOR"=>"ECUADOR","EGYPT"=>"EGYPT","EL SALVADOR"=>"EL SALVADOR","EQUATORIAL GUINEA"=>"EQUATORIAL GUINEA","ERITREA"=>"ERITREA","ESTONIA"=>"ESTONIA","ETHIOPIA"=>"ETHIOPIA","FALKLAND ISLANDS (MALVINAS)"=>"FALKLAND ISLANDS (MALVINAS)","FAROE ISLANDS"=>"FAROE ISLANDS","FIJI"=>"FIJI","FINLAND"=>"FINLAND","FRANCE"=>"FRANCE","FRENCH GUIANA"=>"FRENCH GUIANA","FRENCH POLYNESIA"=>"FRENCH POLYNESIA","FRENCH SOUTHERN TERRITORIES"=>"FRENCH SOUTHERN TERRITORIES","GABON"=>"GABON","GAMBIA"=>"GAMBIA","GEORGIA"=>"GEORGIA","GERMANY"=>"GERMANY","GHANA"=>"GHANA","GIBRALTAR"=>"GIBRALTAR","GREECE"=>"GREECE","GREENLAND"=>"GREENLAND","GRENADA"=>"GRENADA","GUADELOUPE"=>"GUADELOUPE","GUAM"=>"GUAM","GUATEMALA"=>"GUATEMALA","GUINEA"=>"GUINEA","GUINEA-BISSAU"=>"GUINEA-BISSAU","GUYANA"=>"GUYANA","HAITI"=>"HAITI","HEARD ISLAND AND MCDONALD ISLANDS"=>"HEARD ISLAND AND MCDONALD ISLANDS","HOLY SEE (VATICAN CITY STATE)"=>"HOLY SEE (VATICAN CITY STATE)","HONDURAS"=>"HONDURAS","HONG KONG"=>"HONG KONG","HUNGARY"=>"HUNGARY","ICELAND"=>"ICELAND","INDIA"=>"INDIA","INDONESIA"=>"INDONESIA","IRAN, ISLAMIC REPUBLIC OF"=>"IRAN, ISLAMIC REPUBLIC OF","IRAQ"=>"IRAQ","IRELAND"=>"IRELAND","ISRAEL"=>"ISRAEL","ITALY"=>"ITALY","JAMAICA"=>"JAMAICA","JAPAN"=>"JAPAN","JORDAN"=>"JORDAN","KAZAKSTAN"=>"KAZAKSTAN","KENYA"=>"KENYA","KIRIBATI"=>"KIRIBATI","KOREA DEMOCRATIC PEOPLES REPUBLIC OF"=>"KOREA DEMOCRATIC PEOPLES REPUBLIC OF","KOREA REPUBLIC OF"=>"KOREA REPUBLIC OF","KUWAIT"=>"KUWAIT","KYRGYZSTAN"=>"KYRGYZSTAN","LAO PEOPLES DEMOCRATIC REPUBLIC"=>"LAO PEOPLES DEMOCRATIC REPUBLIC","LATVIA"=>"LATVIA","LEBANON"=>"LEBANON","LESOTHO"=>"LESOTHO","LIBERIA"=>"LIBERIA","LIBYAN ARAB JAMAHIRIYA"=>"LIBYAN ARAB JAMAHIRIYA","LIECHTENSTEIN"=>"LIECHTENSTEIN","LITHUANIA"=>"LITHUANIA","LUXEMBOURG"=>"LUXEMBOURG","MACAU"=>"MACAU","MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF"=>"MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF","MADAGASCAR"=>"MADAGASCAR","MALAWI"=>"MALAWI","MALAYSIA"=>"MALAYSIA","MALDIVES"=>"MALDIVES","MALI"=>"MALI","MALTA"=>"MALTA","MARSHALL ISLANDS"=>"MARSHALL ISLANDS","MARTINIQUE"=>"MARTINIQUE","MAURITANIA"=>"MAURITANIA","MAURITIUS"=>"MAURITIUS","MAYOTTE"=>"MAYOTTE","MEXICO"=>"MEXICO","MICRONESIA, FEDERATED STATES OF"=>"MICRONESIA, FEDERATED STATES OF","MOLDOVA, REPUBLIC OF"=>"MOLDOVA, REPUBLIC OF","MONACO"=>"MONACO","MONGOLIA"=>"MONGOLIA","MONTSERRAT"=>"MONTSERRAT","MOROCCO"=>"MOROCCO","MOZAMBIQUE"=>"MOZAMBIQUE","MYANMAR"=>"MYANMAR","NAMIBIA"=>"NAMIBIA","NAURU"=>"NAURU","NEPAL"=>"NEPAL","NETHERLANDS"=>"NETHERLANDS","NETHERLANDS ANTILLES"=>"NETHERLANDS ANTILLES","NEW CALEDONIA"=>"NEW CALEDONIA","NEW ZEALAND"=>"NEW ZEALAND","NICARAGUA"=>"NICARAGUA","NIGER"=>"NIGER","NIGERIA"=>"NIGERIA","NIUE"=>"NIUE","NORFOLK ISLAND"=>"NORFOLK ISLAND","NORTHERN MARIANA ISLANDS"=>"NORTHERN MARIANA ISLANDS","NORWAY"=>"NORWAY","OMAN"=>"OMAN","PAKISTAN"=>"PAKISTAN","PALAU"=>"PALAU","PALESTINIAN TERRITORY, OCCUPIED"=>"PALESTINIAN TERRITORY, OCCUPIED","PANAMA"=>"PANAMA","PAPUA NEW GUINEA"=>"PAPUA NEW GUINEA","PARAGUAY"=>"PARAGUAY","PERU"=>"PERU","PHILIPPINES"=>"PHILIPPINES","PITCAIRN"=>"PITCAIRN","POLAND"=>"POLAND","PORTUGAL"=>"PORTUGAL","PUERTO RICO"=>"PUERTO RICO","QATAR"=>"QATAR","REUNION"=>"REUNION","ROMANIA"=>"ROMANIA","RUSSIAN FEDERATION"=>"RUSSIAN FEDERATION","RWANDA"=>"RWANDA","SAINT HELENA"=>"SAINT HELENA","SAINT KITTS AND NEVIS"=>"SAINT KITTS AND NEVIS","SAINT LUCIA"=>"SAINT LUCIA","SAINT PIERRE AND MIQUELON"=>"SAINT PIERRE AND MIQUELON","SAINT VINCENT AND THE GRENADINES"=>"SAINT VINCENT AND THE GRENADINES","SAMOA"=>"SAMOA","SAN MARINO"=>"SAN MARINO","SAO TOME AND PRINCIPE"=>"SAO TOME AND PRINCIPE","SAUDI ARABIA"=>"SAUDI ARABIA","SENEGAL"=>"SENEGAL","SEYCHELLES"=>"SEYCHELLES","SIERRA LEONE"=>"SIERRA LEONE","SINGAPORE"=>"SINGAPORE","SLOVAKIA"=>"SLOVAKIA","SLOVENIA"=>"SLOVENIA","SOLOMON ISLANDS"=>"SOLOMON ISLANDS","SOMALIA"=>"SOMALIA","SOUTH AFRICA"=>"SOUTH AFRICA","SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS"=>"SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS","SPAIN"=>"SPAIN","SRI LANKA"=>"SRI LANKA","SUDAN"=>"SUDAN","SURINAME"=>"SURINAME","SVALBARD AND JAN MAYEN"=>"SVALBARD AND JAN MAYEN","SWAZILAND"=>"SWAZILAND","SWEDEN"=>"SWEDEN","SWITZERLAND"=>"SWITZERLAND","SYRIAN ARAB REPUBLIC"=>"SYRIAN ARAB REPUBLIC","TAIWAN, PROVINCE OF CHINA"=>"TAIWAN, PROVINCE OF CHINA","TAJIKISTAN"=>"TAJIKISTAN","TANZANIA, UNITED REPUBLIC OF"=>"TANZANIA, UNITED REPUBLIC OF","THAILAND"=>"THAILAND","TOGO"=>"TOGO","TOKELAU"=>"TOKELAU","TONGA"=>"TONGA","TRINIDAD AND TOBAGO"=>"TRINIDAD AND TOBAGO","TUNISIA"=>"TUNISIA","TURKEY"=>"TURKEY","TURKMENISTAN"=>"TURKMENISTAN","TURKS AND CAICOS ISLANDS"=>"TURKS AND CAICOS ISLANDS","TUVALU"=>"TUVALU","UGANDA"=>"UGANDA","UKRAINE"=>"UKRAINE","UNITED ARAB EMIRATES"=>"UNITED ARAB EMIRATES","UNITED KINGDOM"=>"UNITED KINGDOM","UNITED STATES"=>"UNITED STATES","UNITED STATES MINOR OUTLYING ISLANDS"=>"UNITED STATES MINOR OUTLYING ISLANDS","URUGUAY"=>"URUGUAY","UZBEKISTAN"=>"UZBEKISTAN","VANUATU"=>"VANUATU","VENEZUELA"=>"VENEZUELA","VIET NAM"=>"VIET NAM","VIRGIN ISLANDS, BRITISH"=>"VIRGIN ISLANDS, BRITISH","VIRGIN ISLANDS, U.S."=>"VIRGIN ISLANDS, U.S.","WALLIS AND FUTUNA"=>"WALLIS AND FUTUNA","WESTERN SAHARA"=>"WESTERN SAHARA","YEMEN"=>"YEMEN","YUGOSLAVIA"=>"YUGOSLAVIA","ZAMBIA"=>"ZAMBIA","ZIMBABWE"=>"ZIMBABWE") , array('class'=>'text_box5 selectt')        
                ) ?>
</aside>





                        <aside class="col-md-6 col-sm-6"> <?= $form->field($model, 'password')->passwordInput(['placeholder'=>'Password', 'class'=>'text_box5']) ?>

                            </aside>


                        <aside class="col-md-6 col-sm-6"><?= $form->field($model, 'confim')->passwordInput(['placeholder'=>'confim', 'class'=>'text_box5']) ?></aside>
                    
                    </div>
                    
                    <div class="row btn-groups">
                            <aside class="col-md-6 col-sm-6 col-xs-6"><?= Html::resetButton('Reset', ['class' => 'sub_btn pull-right', 'name' => 'signup-button']) ?></aside>
                            <aside class="col-md-6 col-sm-6 col-xs-6"> <?= Html::submitButton('Sumbit', ['class' => 'sub_btn', 'name' => 'signup-button']) ?></aside>
                            
                        </div>

                    
                </div>
                
                
            </div>
            
            
            
        </div>
            
            
            
            
        </div>
        <!--content-->
        
            

            
            
            
            
            
        </div>
            <?php ActiveForm::end(); ?>


        </article>

    </section>
    <!--inner-->
    