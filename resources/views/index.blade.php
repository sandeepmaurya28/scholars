
@include("header-footer/header")
<script>
    $(document).ready(function () {
        $("#noti").html('<div class="element"> <div class="san"></div> </div>');
        $.ajax({
            data:{
                notification:1
            },
            url:"/public/noti",
            type:"GET",
            success:function (data) {

                var obj=JSON.parse(data);
                var table="";
                $.each(obj,function (k,v) {
                    table+="<tr><td><i class=\"fa fa-hand-o-right\"  style=\"color:#05A6B3;width:20px;\"></i>";
                    table+=v.achievement+"<td></tr>" ;
                });
//               alert(table);
                $("#noti").empty();
                $("#noti").html(table);
            }
        });


//        $.ajax({
//            data:{
//                slides:1
//            },
//            url:"/public/noti",
//            type:"GET",
//            success:function (data) {
//                var obj=JSON.parse(data);
//                var sld="";
//                $.each(obj,function (k,v) {
//                    sld+="<div> <a u=image href='#'>";
//                    sld+="<img src='"+v.image_url+"'  />";
//                    sld+=" </a>";
//                    sld+= "</div>";
//                });
//                $("#slideId").html(sld);
//
//            }
//        });
    });


</script>
<div class="container">
    <div class="container" style="margin-top:10px;">
        <div class="row">
            <div class=" col-xs-12 col-lg-12">

                <ol class="breadcrumb" style="border-radius:0px;    padding: 1px 15px;">
                    <li class="row" style="display:block;">
                        <div class="col-xs-4 col-sm-3"><i class="fa fa-home" style="padding-right:7px;"></i><a href="/public">Home</a>
                        </div><div class="col-xs-8 col-sm-9">

                    <!--flash news-->

                                <marquee style="padding-top:3px;font-family: Play-Regular;">

                                    <img src="{{ URL::asset('images/nw.gif') }}">&nbsp;&nbsp;
                                   {{$data[1]->flash}}
                                     | &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

                                </marquee>


                        </div>
                    </li>


                </ol></div>

        </div>
    </div>

    <div class="container" style="">
    <div class="row">
        <!--student board-->
        <div class="col-xs-12 col-sm-3" >
            <div class="panel panel-default" style="border-radius:0px;" >
                <div class="panel-heading" style="background-color:#05A6B3;color:#f5f5f5; border-radius:0px;">
                    <p style="text-align:center;color:#fff;">Student's Board</p>
                </div>
                <div class="panel-body" style="max-height:256px;overflow:hidden;">


                    <marquee direction="up"  behavior="scroll" scrolldelay="100" onmouseover='this.stop()' onmouseout='this.start()'>
                        <table class="table bootstrap-datatable countries table-responsive">
                            <tbody style="text-align:justify;">
                      {{--student board--}}
                            @foreach($data[2] as $data)

                             <tr>

                                 <td> <i class="fa fa-hand-o-right"  style="color:#05A6B3;width:20px;"></i>

                                     <span style=""> {{$data->Review}}</span><br>
                                     <div style="float :right;">{{$data->Name}}
                                         <span style="font-size:12px; ">{{$data->Role}}
                                             </span><br>
                                         {{$data->time}}
                                     </div>
                                 </td>
                             <tr>


                       @endforeach







                            </tbody>
                        </table>
                    </marquee>





                </div>
            </div>
        </div>
        <!--student board-->
        <!--student board-->
        <!--  <div class="col-xs-12 col-sm-3" >
              <div class="panel panel-default" style="border-radius:0px;" >
                <div class="panel-heading" style="background-color:#05A6B3;color:#f5f5f5; border-radius:0px;">
                  <p style="text-align:center;color:#fff;">Student's Board</p>
                </div>
               <div class="panel-body" style="max-height:256px;overflow:hidden;">
                 <marquee direction="up"  behavior="scroll" scrolldelay="100" onmouseover='this.stop()' onmouseout='this.start()'>
                  <table class="table bootstrap-datatable countries table-responsive">

                    <tbody>

              </tbody>
                </table>
               </marquee>
             </div>

             </div>

         </div>-->

        <!--student board-->



        <div class=" col-xs-12  col-sm-6">
<!--slider part-->

            <!-- Caption Style -->
            <style>
                .captionOrange, .captionBlack
                {
                    color: #fff;
                    font-size: 20px;
                    line-height: 30px;
                    text-align: center;
                    border-radius: 4px;
                }
                .captionOrange
                {
                    background: #EB5100;
                    background-color: rgba(235, 81, 0, 0.6);
                }
                .captionBlack
                {
                    font-size:16px;
                    background: #000;
                    background-color: rgba(0, 0, 0, 0.4);
                }
                a.captionOrange, A.captionOrange:active, A.captionOrange:visited
                {
                    color: #ffffff;
                    text-decoration: none;
                }
                a.captionOrange:hover
                {
                    color: #eb5100;
                    text-decoration: underline;
                    background-color: #eeeeee;
                    background-color: rgba(238, 238, 238, 0.7);
                }

            </style>
            <!-- use jssor.slider.min.js instead for release -->
            <!-- jssor.slider.min.js = (jssor.js + jssor.slider.js) -->

            <script>
                jssor_slider2_starter = function (containerId) {
                    //Reference http://www.jssor.com/development/slider-with-slideshow-no-jquery.html
                    //Reference http://www.jssor.com/development/tool-slideshow-transition-viewer.html

                    var _SlideshowTransitions = [
                        //Swing Outside in Stairs
                        {$Duration: 1200, x: 0.2, y: -0.1, $Delay: 20, $Cols: 8, $Rows: 4, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 260, $Easing: { $Left: $JssorEasing$.$EaseInWave, $Top: $JssorEasing$.$EaseInWave, $Clip: $JssorEasing$.$EaseOutQuad }, $Outside: true, $Round: { $Left: 1.3, $Top: 2.5} }

                        //Dodge Dance Outside out Stairs
                        , { $Duration: 1500, x: 0.3, y: -0.3, $Delay: 20, $Cols: 8, $Rows: 4, $Clip: 15, $During: { $Left: [0.1, 0.9], $Top: [0.1, 0.9] }, $SlideOut: true, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 260, $Easing: { $Left: $JssorEasing$.$EaseInJump, $Top: $JssorEasing$.$EaseInJump, $Clip: $JssorEasing$.$EaseOutQuad }, $Outside: true, $Round: { $Left: 0.8, $Top: 2.5} }

                        //Dodge Pet Outside in Stairs
                        , { $Duration: 1500, x: 0.2, y: -0.1, $Delay: 20, $Cols: 8, $Rows: 4, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 260, $Easing: { $Left: $JssorEasing$.$EaseInWave, $Top: $JssorEasing$.$EaseInWave, $Clip: $JssorEasing$.$EaseOutQuad }, $Outside: true, $Round: { $Left: 0.8, $Top: 2.5} }

                        //Dodge Dance Outside in Random
                        , { $Duration: 1500, x: 0.3, y: -0.3, $Delay: 80, $Cols: 8, $Rows: 4, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $Easing: { $Left: $JssorEasing$.$EaseInJump, $Top: $JssorEasing$.$EaseInJump, $Clip: $JssorEasing$.$EaseOutQuad }, $Outside: true, $Round: { $Left: 0.8, $Top: 2.5} }

                        //Flutter out Wind
                        , { $Duration: 1800, x: 1, y: 0.2, $Delay: 30, $Cols: 10, $Rows: 5, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $SlideOut: true, $Reverse: true, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 2050, $Easing: { $Left: $JssorEasing$.$EaseInOutSine, $Top: $JssorEasing$.$EaseOutWave, $Clip: $JssorEasing$.$EaseInOutQuad }, $Outside: true, $Round: { $Top: 1.3} }

                        //Collapse Stairs
                        , { $Duration: 1200, $Delay: 30, $Cols: 8, $Rows: 4, $Clip: 15, $SlideOut: true, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 2049, $Easing: $JssorEasing$.$EaseOutQuad }

                        //Collapse Random
                        , { $Duration: 1000, $Delay: 80, $Cols: 8, $Rows: 4, $Clip: 15, $SlideOut: true, $Easing: $JssorEasing$.$EaseOutQuad }

                        //Vertical Chess Stripe
                        , { $Duration: 1000, y: -1, $Cols: 12, $Formation: $JssorSlideshowFormations$.$FormationStraight, $ChessMode: { $Column: 12} }

                        //Extrude out Stripe
                        , { $Duration: 1000, x: -0.2, $Delay: 40, $Cols: 12, $SlideOut: true, $Formation: $JssorSlideshowFormations$.$FormationStraight, $Assembly: 260, $Easing: { $Left: $JssorEasing$.$EaseInOutExpo, $Opacity: $JssorEasing$.$EaseInOutQuad }, $Opacity: 2, $Outside: true, $Round: { $Top: 0.5} }

                        //Dominoes Stripe
                        , { $Duration: 2000, y: -1, $Delay: 60, $Cols: 15, $SlideOut: true, $Formation: $JssorSlideshowFormations$.$FormationStraight, $Easing: $JssorEasing$.$EaseOutJump, $Round: { $Top: 1.5} }
                    ];

                    var options = {
                        $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                        $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                        $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                        $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                        $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                        $SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                        $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                        //$SlideWidth: 550,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                        //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                        $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                        $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                        $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                        $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                        $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                        $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                        $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                            $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                            $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                            $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                            $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                        },

                        $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                            $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                            $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                            $AutoCenter: 0,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                            $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                            $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                            $SpacingX: 10,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                            $SpacingY: 10,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                            $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                        },

                        $ArrowNavigatorOptions: {
                            $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                            $ChanceToShow: 2                                //[Required] 0 Never, 1 Mouse Over, 2 Always
                        }
                    };

                    var jssor_slider2 = new $JssorSlider$(containerId, options);

                    //responsive code begin
                    //you can remove responsive code if you don't want the slider scales while window resizes
                    function ScaleSlider() {
                        var parentWidth = jssor_slider2.$Elmt.parentNode.clientWidth;
                        if (parentWidth)
                            jssor_slider2.$ScaleWidth(Math.min(parentWidth, 550));
                        else
                            $Jssor$.$Delay(ScaleSlider, 30);
                    }

                    ScaleSlider();
                    $Jssor$.$AddEvent(window, "load", ScaleSlider);

                    $Jssor$.$AddEvent(window, "resize", $Jssor$.$WindowResizeFilter(window, ScaleSlider));
                    $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                    //responsive code end
                }
            </script>
            <!-- Jssor Slider Begin -->
            <!-- To move inline styles to css file/block, please specify a class name for each element. -->
            <div id="slider2_container" style="position: relative; margin-bottom:20px;top: 0px; left: 0px; width: 550px;
        height: 300px;">

                <!-- Loading Screen -->
                <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                    <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                    </div>
                    <div style="position: absolute; display: block;
                top: 0px; left: 0px;width: 100%;height:100%;">
                    </div>
                </div>

                <!-- Slides Container -->
                <div u="slides" id="slideId"  style="cursor: move; position: absolute; left: 0px; top: 0px; width: 550px; height: 300px;
            overflow: hidden;">


                    {{--@foreach($data[0] as $data)--}}

                        {{--<div>--}}
                            {{--<a u=image href='#'>--}}
                                {{--<img src="{{$data->image_url}}"  />--}}
                            {{--</a>--}}
                        {{--</div>--}}

                            {{--@endforeach--}}











                </div>

                <!--#region Bullet Navigator Skin Begin -->
                <!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
                <style>
                    /* jssor slider bullet navigator skin 01 css */
                    /*
                    .jssorb01 div           (normal)
                    .jssorb01 div:hover     (normal mouseover)
                    .jssorb01 .av           (active)
                    .jssorb01 .av:hover     (active mouseover)
                    .jssorb01 .dn           (mousedown)
                    */
                    .jssorb01 {
                        position: absolute;
                    }
                    .jssorb01 div, .jssorb01 div:hover, .jssorb01 .av {
                        position: absolute;
                        /* size of bullet elment */
                        width: 12px;
                        height: 12px;
                        filter: alpha(opacity=70);
                        opacity: .7;
                        overflow: hidden;
                        cursor: pointer;
                        border: #000 1px solid;
                    }
                    .jssorb01 div { background-color: gray; }
                    .jssorb01 div:hover, .jssorb01 .av:hover { background-color: #d3d3d3; }
                    .jssorb01 .av { background-color: #fff; }
                    .jssorb01 .dn, .jssorb01 .dn:hover { background-color: #555555; }
                </style>
                <!-- bullet navigator container -->
                <div u="navigator" class="jssorb01" style="bottom: 16px; right: 10px;">
                    <!-- bullet navigator item prototype -->
                    <div u="prototype"></div>
                </div>
                <!--#endregion Bullet Navigator Skin End -->

                <!--#region Arrow Navigator Skin Begin -->
                <!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html -->
                <style>
                    /* jssor slider arrow navigator skin 05 css */
                    /*
                    .jssora05l                  (normal)
                    .jssora05r                  (normal)
                    .jssora05l:hover            (normal mouseover)
                    .jssora05r:hover            (normal mouseover)
                    .jssora05l.jssora05ldn      (mousedown)
                    .jssora05r.jssora05rdn      (mousedown)
                    */
                    .jssora05l, .jssora05r {
                        display: block;
                        position: absolute;
                        /* size of arrow element */
                        width: 40px;
                        height: 40px;
                        cursor: pointer;
                        /*background: url(includes/images/slider/a17.png) no-repeat;*/
                        overflow: hidden;
                    }
                    .jssora05l { background-position: -10px -40px; }
                    .jssora05r { background-position: -70px -40px; }
                    .jssora05l:hover { background-position: -130px -40px; }
                    .jssora05r:hover { background-position: -190px -40px; }
                    .jssora05l.jssora05ldn { background-position: -250px -40px; }
                    .jssora05r.jssora05rdn { background-position: -310px -40px; }
                </style>
                <!-- Arrow Left -->
                <span u="arrowleft" class="jssora05l" style="top: 123px; left: 8px;">
        </span>
                <!-- Arrow Right -->
                <span u="arrowright" class="jssora05r" style="top: 123px; right: 8px;">
        </span>

                <!-- Trigger -->
                <script>
                    jssor_slider2_starter('slider2_container');
                </script>
            </div>
            <!-- Jssor Slider End -->

            <!--end of slider part-->
        </div>

        <div class="col-xs-12 col-sm-3" >
            <div class="panel panel-default" style="border-radius:0px;" >
                <div class="panel-heading" style="background-color:#05A6B3;color:#f5f5f5; border-radius:0px;">
                    <p style="text-align:center;color:#fff;">Notifications</p>

                </div>
                <div class="panel-body" style="max-height:256px;overflow:hidden;">
                    <marquee direction="up"  behavior="scroll" scrolldelay="100" onmouseover='this.stop()' onmouseout='this.start()'>
                        <table class="table bootstrap-datatable countries table-responsive">
                     {{--notification--}}
                            <tbody id="noti">






                            </tbody>
                        </table>
                    </marquee>
                </div>

            </div>

        </div>

    </div>
</div>





<!--directors corner-->
<hr>

<div class="container" style="margin-top:60px; ">
<div class="row">

    <div class="col-xs-12 col-sm-12" style="margin-bottom:60px; border-bottom:1px solid #ddd;padding-bottom:20px;">
        <div class="col-xs-12 col-sm-6 director" class="">
            <div id="back-img" class="">

                <img src="{{ URL::asset('images/expertimg.jpg') }}" class="img-responsive img-circle col-xs-offset-3 col-sm-offset-5 " style="width:140px;height:140px;">
            </div>
            <h4><span>Director</span> Mr. KP MISHRA</h4>

        </div>
        <div class="col-xs-12 col-sm-6" style="text-align:justify;">
            <p><q >Coaching classes  play a supportive role. They guide and orient the students in the right direction by familiarizing them with the range of content they must cover for the exams; help them develop their skills and abilities by providing essential study material; through mock tests with model papers; and assessments of tests.</q> </p><br>
            <p><q>If a student is sincere and hardworking and can grab concepts from the books, then going in for a home tutor or coaching is best  idea at early age. We provide much better knowledge than regular courses and provide all the necessary material to go about the preparation.</q></p>
        </div>

    </div>

    <!-- <div class="col-xs-12 col-sm-12">


        <div class="col-xs-6" style="text-align:justify;">
            <p>Aenean eu enim imperdiet, hendrerit purus congue, semper lectus. Nullam metus urna, efficitur in tristique a, suscipit in eros. Vestibulum tincidunt mattis ante, eu lobortis arcu convallis laoreet. Vivamus vestibulum dolor vel metus finibus aliquet. Donec nibh lorem. </p>
                         <p>Aenean eu enim imperdiet, hendrerit purus congue, semper lectus. Nullam metus urna, efficitur in tristique a, suscipit in eros. Vestibulum tincidunt mattis ante, eu lobortis arcu convallis laoreet. Vivamus vestibulum dolor vel metus finibus aliquet. Donec nibh lorem. </p>

        </div>
         <div class="col-xs-6 director" class="">
            <div id="back-img1" class="">
            <img src="http://www.mgmeducation.in/includes/images/sandeep.jpg" class="img-responsive img-circle col-sm-offset-5 " style="width:140px;height:140px;">
          </div>
            <h4><span>Manager</span> Mr. APS SPSPS</h4>

        </div>
     </div>

  -->

</div>
</div>
<hr>
<!--end of directors corner-->


<div class="main_btm"><!-- start main_btm -->
    <div class="container">

        <!----start-img-cursual---->
        <div id="owl-demo" class="owl-carousel text-center">


              {{--@foreach($data[3] as $data)--}}
                {{--<div class="item">--}}
                    {{--<div class="cau_left">--}}
                        {{--<img class="lazyOwl img-circle" style="width:220px;height:220px;" data-src="includes/'{{$data->image_url}}'" alt="Lazy Owl Image">--}}
                    {{--</div>--}}
                    {{--<div class="cau_left">--}}

                        {{--<h4><a href="#">{{$data->gtitle}}</a></h4>--}}
                        {{--<p>--}}

                        {{--</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                  {{--@endforeach--}}





        <!--End-img-cursual-->
        </div>
    </div>

</div>
    </div>

@include("header-footer/footer")


