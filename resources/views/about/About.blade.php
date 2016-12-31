<?php
/**
 * Created by PhpStorm.
 * User: Sandeep Maurya
 * Date: 12/5/2016
 * Time: 10:00 PM
 */?>

<!--start-about-->

@include("../header-footer/header")
<div class="container" style="margin-top:10px;">
    <div class="row">
        <div class="col-lg-12">
            <!--<h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>-->
            <ol class="breadcrumb col-xs-6 col-sm-3" style="border-radius:0px; padding:4px 15px;">
                <li><i class="fa fa-home" style="padding-right:7px;"></i><a href="public/">Home</a></li>
                <li><i class="fa fa-user " style="padding-right:7px;"></i>About Us</li>
            </ol>
            <div class="col-xs-6 col-sm-9" style="background-color:#f5f5f5;">
                <p style="padding: 15px;"></p>
            </div>
        </div>
    </div>
</div>
<div class="about" style="padding-top:30px;">
    <div class="container">
        <div class="about-top heading">
            <h1 style="    font-family: 'Montserrat-Regular';">About us</h1>
        </div>
        <div class="about-bottom">

            <img src="{{URL::asset("images/abt-3.jpg")}}" alt="" />
            <h4 style="text-align:justify;">We provide of what we are good at- Education. Getting proper Education & Knowledge is always the dream of every Parent's for their children. And we are here to fulfill that dream.
                <br>
            </h4>
            <h4 style="text-align:justify;">
                With an outstanding record in the past three years MGM Education has established themselves as a renowned figure in the field of Education.
                <br></h4>
            <h4 style="text-align:justify;">
                Over these successful years, MGM Education has now become one of the fastest growing Teaching academy in Haridwar(U.K). With the colaboration of over 60 faculties(Technical and Non-Technical), we shape every student's mind by giving them proper Guidance and Knowledge in their particular subjects.
            </h4>
        </div>
    </div>
</div>
<!--end-vision-->
<!--start-vision-->
<div class="vision" style="padding-top:50px;">
    <div class="container">
        <div class="vision-top heading">
            <h2 style=" color:#05A6B3; font-family: 'Montserrat-Regular';">VISION STATEMENT</h2>
        </div>
        <div class="vision-bottom">
            <div class="col-md-8 vision-left">
                <div class="col-md-5 vsn-left">
                    <img src="{{URL::asset("images/abt-1.jpg")}}" alt="" />
                </div>
                <div class="col-md-7 vsn-right" style="text-align:justify;">
                    <h4>!!Fill the brain with high thoughts, highest ideals, place them day and night before you and out of that will come Great work!!</h4>
                    <p>The function of education is to teach one to think intensively and to think critically. Intelligence plus character - that is the goal of true education.</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-4 vision-right">
                <ul>
                    <li><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span><a href="#">We Believe in Quality of Education </a></li>
                    <li><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span><a href="#">Feel Proud To Provide Education</a></li>
                    <li><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span><a href="#">Latest Techniques are Deployed</a></li>
                    <li><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span><a href="#">All Over Development with Us</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--end-vision-->
@include("header-footer/footer")



