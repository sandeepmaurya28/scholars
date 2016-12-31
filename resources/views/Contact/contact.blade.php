<?php
/**
 * Created by PhpStorm.
 * User: Sandeep Maurya
 * Date: 12/5/2016
 * Time: 10:16 PM
 */?>

@include("../header-footer/header")
<div class="container" style="margin-top:10px;">
    <div class="row">
        <div class="col-lg-12">
            <!--<h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>-->
            <ol class="breadcrumb col-xs-6 col-sm-3" style="border-radius:0px; padding:4px 15px;">
                <li><i class="fa fa-home" style="padding-right:7px;"></i><a href="/public">Home</a></li>
                <li><i class="fa fa-comments " style="padding-right:7px;"></i>Contact Us Here</li>
            </ol>
            <div class="col-xs-6 col-sm-9" style="background-color:#f5f5f5;">
                <p style="padding: 15px;"></p>
            </div>
        </div>
    </div>
</div>

<script type='text/javascript'>
    function refreshCaptcha(){
        var img = document.images['captchaimg'];
        img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
    }
</script>

<!--contact section-->
<div class="container" style="margin-bottom:50px;">
    <div class="services-top heading" STYLE="MARGIN-TOP:30PX;">
        <h2 style=" color:#05A6B3; font-family: 'Montserrat-Regular'; font-size: 2.1em;font-weight: 500;text-align:center;">MESSAGE US HERE</h2>
    </div>
</div>


<div class="container" >

    <div id="part-1" class="col-xs-12 col-sm-12">


        <form class="form-horizontal " name="contact_form" action="javascript:void(0)"  method="POST" onsubmit="return validate(this)" role="form">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group row" id="form-g">
                        <label for="firstname" class=" col-xs-12 col-sm-4  control-label" id="label-1">NAME</label>  <span style="color:#05A6B3;" class="col-xs-12 col-sm-8" id="nameloc"></span>
                        <div class="col-sm-12 ">
                            <input type="text" name="username"  class="form-control" id="firstname" placeholder="Enter First Name" >
                        </div>
                    </div>
                    <div class="form-group row" id="form-g">
                        <label for="Email" class=" col-xs-12 col-sm-4 control-label" id="label-1">EMAIL ADDRESS</label> <span style="color:#05A6B3;" class="col-xs-12 col-sm-8" id="emailloc"></span>
                        <div class="col-sm-12  ">
                            <input type="text" name="email"class="form-control "  id="firstname"  placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="form-group row" id="form-g">
                        <label for="subject" class=" col-xs-12 col-sm-4 control-label" id="label-1">SUBJECT</label><span style="color:#05A6B3;" class="col-xs-12 col-sm-8" id="subjectloc"></span>
                        <div class="col-sm-12 col-sm-12 ">
                            <input type="text" name="subject" class="form-control "   id="subject" placeholder="Subject to...">
                        </div>
                    </div>

                </div>
                <div class="col-sm-6">
                    <div class="form-group row" id="form-mess">
                        <label for="subject" class=" col-xs-12 col-sm-4 control-label"  id="label-2">MESSAGE</label><span style="color:#05A6B3;" class="col-xs-12 col-sm-8" id="messageloc"></span>
                        <textarea  name="message"class="form-control col-sm-12"  id="message-area" rows="3" placeholder="Type Your Message Here..."></textarea>
                    </div>

                </div>
                <div class="col-sm-6" >



                    <div class="row" style="margin-bottom:20px;margin-left:0px;">
                        <img class="col-sm-4" name="captcha" style="border:1px solid #ddd;" src="includes/captcha/captcha.php?rand=<?php echo rand();?>" id='captchaimg'>

                        <a class="col-sm-4" href='javascript: refreshCaptcha();'><i style="padding-right:20px;" class="  fa fa-refresh fa-stack-2x">Refresh</i>


                        </a>
                    </div>
                    <div class="row" >
                        <div class="col-sm-12" style="margin-bottom:10px;"> Please Enter the Correct Captcha(If not visible Refresh It) </div>
                        <label for='message' class="col-sm-4" style="padding-left:27px;">Captcha Code :</label>
                        <input id="captcha_code"  class="col-sm-6" style="margin-left:18px;" name="captcha_code" type="text">
                        <br>
                    </div>




                </div>







                <div class="col-sm-6" style="margin-top:50px;">
                    <input type="Submit" style="max-width:460px;" class="btn btn-success btn-lg btn-block" value="Send Message">
                </div>
            </div>



        </form>






















    </div>

</div>
</div>

<div class="container">

    <div class="services-top heading" STYLE="MARGIN-TOP:60PX; ">
        <h1>OUR OFFICES</h1>
    </div>
</div>
<div class="container">
    <div class="row" style="margin-bottom:20px;">
        <div id="part-2" class="col-xs-12 col-sm-12">
            <div class=" col-xs-12 col-sm-4" id="add">
                <address>
                    <strong>Head Office</strong>
                    <br>
                    Near Shanker Ashram <br>Opp : Saini Ashram
                    <br > 1st Floor Jaipuri Cotton,
                    <BR>Jwalapur,Haridwar<br>
                    Uttarakhand ,India

                </address>
            </div>
            <div class=" col-xs-12 col-sm-4" id="add">
                <address>
                    <strong>Branch Office</strong>
                    <br>
                    G-217,RT-1 <br>Jurs Country,
                    <BR>Jwalapur,Haridwar<br>
                    Uttarakhand ,India

                </address>
            </div>
            <div class=" col-xs-12 col-sm-4" id="add">
                <address>
                    <strong>Help Line </strong>
                    <BR>
                    +91-8266001199,<br>+91-8171941571
                    <br>
                    <a href="">kpmishra84@rediffmail.com</a>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
                    <a href="">scholarshdr@gmail.com</a>

                    <br>

                </address>
            </div>
        </div>
    </div>
</div>
<!--end of contact section-->
<!--map-->
<div class="container" style="margin-bottom:30px;">
    <div id="map-me" class="row">
        <div   class="col-sm-12" style="background-color:#eee;">
            <div class="row col-sm-12" id="googleMap">

            </div>
        </div>
    </div>
</div>
<!--end of map section-->
@include("header-footer/footer")
