<?php
/**
 * Created by PhpStorm.
 * User: Sandeep Maurya
 * Date: 12/5/2016
 * Time: 10:25 PM
 */?>
@include("../header-footer/header")

<div class="container" style="margin-top:10px;">
    <div class="row">
        <div class="col-lg-12">
            <!--<h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>-->
            <ol class="breadcrumb col-xs-6 col-sm-3" style="border-radius:0px; padding:4px 15px;">
                <li><i class="fa fa-home" style="padding-right:7px;"></i><a href="/public">Home</a></li>
                <li><i class="fa fa-list " style="padding-right:7px;"></i>Courses</li>
            </ol>
            <div class="col-xs-6 col-sm-9" style="background-color:#f5f5f5;">
               <p style="padding: 15px;"></p>

            </div>
        </div>
    </div>
</div>



<div class="services" style="padding-top:30px;">
    <div class="container">
        <div class="services-top heading">
            <h2 style=" color:#05A6B3; font-family: 'Montserrat-Regular'; font-size: 2.1em;font-weight: 500;text-align:center;">Courses we offer</h2>
        </div>
        <div class="services-bottom" style="">


                    @foreach($course as $data=>$value)

                <div class=" col-xs-12 col-sm-3 services-left" style="margin-bottom:50px; width:320px; height:495px; margin-right:60px; border:1px solid #ddd; padding:0px 0px 20px 0px;">
                    <img width="318px" height="197px" src="{{$value->image_url}}" alt="" />
                    <h4><span>0{{$data+1}}</span>{{$value->heading}}</h4>
                    <p style="color:#111;font-family:sans-serif;font-weight:400;text-align:justify;padding:20px 20px 0px 20px" >{{$value->details}}</p>
                  <button class="btn btn-default"><a href="#">Know More ...</a></button>
                </div>

                @endforeach















            <div class="clearfix"></div>
        </div>
    </div>
</div>

@include("header-footer/footer")


