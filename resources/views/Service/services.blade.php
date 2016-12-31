<?php
/**
 * Created by PhpStorm.
 * User: Sandeep Maurya
 * Date: 12/6/2016
 * Time: 11:40 PM
 */?>
@include("../header-footer/header")
<div class="container" style="margin-top:10px;">
    <div class="row">
        <div class="col-lg-12">
            <!--<h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>-->
            <ol class="breadcrumb col-xs-6 col-sm-3" style="border-radius:0px; padding:4px 15px;">
                <li><i class="fa fa-home" style="padding-right:7px;"></i><a href="/public">Home</a></li>
                <li><i class="fa fa-leaf " style="padding-right:7px;"></i>Services</li>
            </ol>
            <div class="col-xs-6 col-sm-9" style="background-color:#f5f5f5;">
                <p style="padding: 15px;"></p>



            </div>
        </div>
    </div>
</div>






<!--start-over-->
<div class="over" style="margin-top:30px;">
    <div class="container">
        <div class="over-top heading">
            <h2 style=" color:#05A6B3; font-family: 'Montserrat-Regular'; font-size: 2.1em;font-weight: 500;text-align:center;">Services overview</h2>
        </div>
        <div class="over-bottom">
           @php $id=0;
           @endphp
            @foreach($service as $key=>$value)

                @php $val=$id % 2
                @endphp
                @if ($val==0)

                    <div class="over-1" style="height: 300px;">
                        <div class=" col-xs-12 col-md-6 over-left">
                            <div class=" col-xs-12 col-md-6 o-left">
                                <img src="{{$value->image_url}}" alt="" />
                            </div>
                            <div class=" col-xs-12 col-md-6 o-left">
                                <h4>{{$value->service}}</h4>
                                <p style="color:#111;text-align:justify;font-family:sans-serif;font-weight:500;">{{$value->detail}}</p>
                                <button class="btn btn-default"><a href="#">Read More ...</a></button>

                            </div>

                            <div class="clearfix"></div>
                        </div>
                    @else

                            <div class=" col-xs-12 col-md-6 over-left">
                                <div class=" col-xs-12 col-md-6 o-left">
                                    <img src="{{$value->image_url}}" alt="" />
                                </div>
                                <div class=" col-xs-12 col-md-6 o-left">
                                    <h4>{{$value->service}}</h4>
                                    <p style="color:#111;text-align:justify;font-family:sans-serif;font-weight:500;">{{$value->detail}}</p>
                                    <button class="btn btn-default"><a href="#">Read More ...</a></button>

                                </div>
                                <div class="clearfix"></div>

                            </div>

                            <div class="clearfix"></div>
                    </div>
                    @endif
                   @php $id++;
                   @endphp
            @endforeach








        </div>
    </div>
</div>
<!--end-over-->

@include("../header-footer/footer")
