<?php
/**
 * Created by PhpStorm.
 * User: Sandeep Maurya
 * Date: 12/7/2016
 * Time: 6:31 PM
 */
?>
@include("header-footer/header")
<div class="container" style="margin-top:10px;">
    <div class="row">
        <div class="col-lg-12">
            <!--<h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>-->
            <ol class="breadcrumb col-xs-6 col-sm-3" style="border-radius:0px; padding:4px 15px;">
                <li><i class="fa fa-home" style="padding-right:7px;"></i><a href="/public">Home</a></li>
                <li><i class="fa fa-user-md " style="padding-right:7px;"></i>Our Faculty</li>
            </ol>
            <div class="col-xs-6 col-sm-9" style="background-color:#f5f5f5;">

                <p style="padding: 15px;"></p>
            </div>
        </div>
    </div>
</div>

<!--di>rectors corner-->



<div class="container">

    <div class="teacher-top" style="margin-bottom:30px;margin-top:30px;">
        <h3 style=" font-family: 'Montserrat-Regular';">our Team</h3>
    </div>
         @php $id=0
         @endphp

         @foreach($faculty as $key=>$value)

                            @php  $val=$id % 2
                            @endphp
                             @if($val==1)
                            <div class="row" style="margin-top:60px;">
                                <div class="col-xs-12 col-sm-12" style="margin-bottom:60px; border-bottom:1px solid #ddd;padding-bottom:20px;">
                                    <div class="col-xs-12 col-md-6 director" class="">
                                        <div id="back-imgf" class="">
                                             <img src="{{$value->image_url}}" class="img-responsive img-circle col-xs-offset-3 col-sm-offset-5 " style="width:140px;height:140px;">
                                        </div>
                                        <h4><span>{{$value->Education}}</span>{{$value->Name}}</h4>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <p style="text-align:justify;">{{$value->detail}}</p>
                                    </div>
                                </div><hr>

                          @endif
                          @if($val==0)
                                    <div class="col-xs-12 col-sm-12"style="" >
                                        <div class="col-xs-12 col-md-6">
                                            <p style="text-align:justify;">{{$value->detail}}</p></div>
                                        <div class="col-xs-12 col-md-6 director" class="">
                                            <div id="back-imgf" class="">
                                                <img src="{{$value->image_url}}" class="img-responsive img-circle col-xs-offset-3 col-sm-offset-5 " style="width:140px;height:140px;">
                                            </div>
                                            <h4><span>{{$value->Education}}</span>{{$value->Name}}</h4>
                                        </div></div><hr></div><hr>

                                @endif
                        @php  $id++;
                        @endphp
                    @endforeach


<!-- <div class="row">

        <div class="col-xs-12 col-sm-12" style="margin-bottom:60px; border-bottom:1px solid #ddd;padding-bottom:20px;">
             <div class="col-xs-6 director" class="">
             	<div id="back-img" class="">
             	<img src="includes/images/expertimg.jpg" class="img-responsive img-circle col-sm-offset-5 " style="width:140px;height:140px;">
               </div>
             	<h4><span>JAVA Expert</span> Mr. KP MISHRA</h4>

             </div>
             <div class="col-xs-6">
                 <p>Aenean eu enim imperdiet, hendrerit purus congue, semper lectus. Nullam metus urna, efficitur in tristique a, suscipit in eros. Vestibulum tincidunt mattis ante, eu lobortis arcu convallis laoreet. Vivamus vestibulum dolor vel metus finibus aliquet. Donec nibh lorem. </p>
             </div>

        </div>
        <hr>


          <div class="col-xs-12 col-sm-12">


             <div class="col-xs-6">
                 <p>Aenean eu enim imperdiet, hendrerit purus congue, semper lectus. Nullam metus urna, efficitur in tristique a, suscipit in eros. Vestibulum tincidunt mattis ante, eu lobortis arcu convallis laoreet. Vivamus vestibulum dolor vel metus finibus aliquet. Donec nibh lorem. </p>
             </div>
              <div class="col-xs-6 director" class="">
             	<div id="back-img1" class="">
             	<img src="includes/images/sandeep.jpg" class="img-responsive img-circle col-sm-offset-5 " style="width:140px;height:140px;">
               </div>
             	<h4><span>PHP Expert</span> Mr. APS SPSPS</h4>

             </div>
          </div>

     </div>
-->



</div>
</div/>

<!--end of directors corner-->
@include("header-footer/footer")
