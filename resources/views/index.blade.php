@extends('mylayouts.app')
@section('metadata')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Apostolic Ministers Conference">

<meta name="author" content="
Apostolic Ministers Conference is a HOLYGHOST anchored Assembly that was birthed in 2015 to address the following issues. Borne out of a vision received by God's Servant,<strong> Rev. Gabriel Amedu </strong>in 2014,<br>

 the Conference focuses on bringing Ministers together across non-denominational lines so as to:
 Set them ablaze for greater exploits amc">
@endsection
@section('content')



  <div style=" text-align:right; padding-right:50px; background:rgb(206, 206, 238) wow zoomInBig" >
    
    
    <a href="https://web.facebook.com/search/top?q=apostolic%20ministers%27%20conference"><i class="fa fa-facebook-square fa-2x text text-primary"></i> </a>  
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
   <a href="https://twitter.com/Apostolicminis1?t=7-_0moe3tuGgbnPgGJJPDg&s=09"><li class="fa fa-twitter-square fa-2x text text-primary"></li></a> 
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
   <a href="https://www.youtube.com/channel/UC44MsS-pQqHQM5UpmZ0dQIA"><li class="fa fa-youtube-square fa-2x text text-danger"></li></a>
  </div>
  </div>
  
  <section class="home-slide text-light" id="intro" style="margin-top: 5px">
    <!-- Carousel -->
    <div style="padding-left:15px; padding-right:15px; margin-bottom: 20px">
<div class="carousel slide" data-ride="carousel" id="carousel-example-generic"><!-- Indicators -->
<ol class="carousel-indicators">
  <li class="" data-slide-to="1" data-target="#carousel-example-generic" class="active"></li>
  <li data-slide-to="2" data-target="#carousel-example-generic" ></li>
  <li class="" data-slide-to="3" data-target="#carousel-example-generic"></li>
  <li data-slide-to="4" data-target="#carousel-example-generic" ></li>

  
  
</ol>
<!-- Wrapper for slides -->

<div class="carousel-inner">
<div class="item active"><img class="img-responsive" alt="first slide" src="images/indeximg/slides/slide1.jpg"  style="width: 100%; height:340px"> 
</div>

<div class="item"><img alt="slide 2" src="images/indeximg/slides/slide2.jpg" style="width: 100%; height:340px"> <!-- Static Header -->    
 <div class=" carousel-caption">
  </div>
</div>

<div class="item"><img alt="slide 3" src="images/indeximg/slides/slide3.jpg" style="width: 100%; height:340px" > <!-- Static Header -->    
  <div class=" carousel-caption">
   </div>
 </div>

 
 <div class="item"><img alt="slide 4" src="images/indeximg/slides/slide4.jpg"  style="width: 100%; height:340px"> <!-- Static Header -->    
  <div class=" carousel-caption">
   </div>
 </div>
 

 

<!-- Controls --></div>
 </div>
<p>&nbsp;</p>
<div class="reg-title">
  <a href="{{ url('register') }}"><h3><I class="bg bg-black-300">
  2022 AMC Registration Is Ongoing <br><i>click here to register <i class="fa fa-sign-in fa-2x"></I></h3></a>
  </div>
<!-- /carousel --></section><!--endof slide -->
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-4 wow fadeInUpBig">
        <div class="left_sidebar">
          <div class="single_widget">
            <h2><i  id="videos">FEATURED VIDEOS</i></h2>
            <ul class="post_nav">
              <li>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
<!--Wrapperforslides-->
<div class="carousel-inner"role="listbox">
<div class="item active">
  <iframe width="100%" height="315"
   src="https://www.youtube.com/embed/tXINF5umKJo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>


<!--Leftandrightcontrols-->

<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="right carousel-control"href="#myCarousel" role="button"data-slide="next">
<span class="glyphicon glyphicon-chevron-right"aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div> <p>&nbsp;</p>
              <div class="wow fadeInUp">
              <a href="{{ url('about') }}">
                <img src="images/indeximg/banner2.png" class="img-responsive">
              </a>
              <span class="btn btn-primary"> <a href="{{ url('contact') }}"  role="button">Click here to partner with us </a> </span>
            </div>
          </li>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-8">
        <div class="middle_content">
          <h2><i><a href="{{ url('conference_impact') }}" style="color:white"> Conference Impact </a></i></h2>
         
          <ul>
            <li class="">
 
<div id="impact" class="carousel slide" data-ride="carousel">
<!--Wrapperforslides-->
<div class="carousel-inner"role="listbox">
<div class="item active">
<img src="images/indeximg/impact1.jpg"alt="image" class="impactimgindex">
</div>
<div class="item">
<img src="images/indeximg/impact2.jpg"alt="image" class="impactimgindex">
</div>
<div class="item">
<img src="images/indeximg/impact3.jpg"alt="conference impact" class="impactimgindex">
</div>
<div class="item">
<img src="images/indeximg/impact4.jpg"alt="conference impact" class="impactimgindex">
</div>
<div class="item">
<img src="images/indeximg/impact5.jpg"alt="conference impact" class="impactimgindex">
</div>


</div>
<!--Leftandrightcontrols-->

<a class="left carousel-control" href="#impact" role="button" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="right carousel-control"href="#impact" role="button"data-slide="next">
<span class="glyphicon glyphicon-chevron-right"aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div>
<li>  <span class="bg bg-primary"><a href="{{ url('conference_impact') }}"> <h3 class="btn btn-default text text-primary ">view more</h3></a></span> </li>
   </li>
            <li class=""  id="mission"  >
              <br><br>

              <figure class="featured_img wow fadeInUpBig"><a href="#">

                <img src= "images/indeximg/images1.png" alt="images" width="100%" class="img-responsive"></a>
              </figure>
              <article class="">

               <div class="article_category wow fadeInUpBig" id="vision"><a href="#"><i class="fa fa-angle-right"></i></a><a href="#"><i class="fa fa-angle-right"></i></a><a href="#"></a></div>
                <h2 class="article_titile"><a href="{{ url('about') }}"
                  class="">Mission Statement</a></h2>
                <p> 
                 <p class=""> The Conference seeks to re-ignite </p>Apostolicism, Charismaticism, Pentecostalism and multiply the anointing of God in men, like Samson's 300 foxes of fire. The Conference provides an atmosphere of fellowship with the Holy Spirit so as to impregnate gospel ministers with new seed vision... <a href="{{ url('about') }}" role="button" class="btn btn-primary btn-sm btn-rounded"> Read more...</a> 
                 
                </p>
              </article>
            </li>
            <li class="">
              <ul class="" style="z-index:100px;">
                    <li class="">
                <h2 class="article_titile"><a href="{{ url('about') }}" class=".btn btn-default">OUR VISION</a></h2>
                <summary id="vision">
                <p> Apostolic Ministers Conference is a <strong>HOLYGHOST</strong> anchored assembly that was birthed in 2015 to address the above issues. </i>Borne out of a vision received by God's Servant,<strong> Rev. Gabriel Amedu </strong> in 2014,the Conference focuses on bringing ministers together across non-denominational lines so as to...
                  <a href="{{ url('about') }}" role="button" class="btn btn-primary btn-sm btn-rounded"> Read more...</a> 
              </p>
            </summary>
          </li>
    
      </div>
    </div>
      <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="right_sidebar">
          <div class="single_widget">
            <h2><i><a href="#" style="color:white">Recent Audio Messages </a></i></h2>
            <ul class="ppost_nav" id="audio">
                  <li class="wow fadeInUp">
                     <figure class="featured_img wow bounceInUp">

                <a href="#"><img src="images/indeximg/audio.jpg" alt="converner photo" class="img-responsive" style="width:100%; height:220px"> </a> </figure><br>

             
                                 <audio controls width="100%">
                          <source src="'.'.mp3" type="audio/mpeg">
                          your browser cant play this type of audio
                          </audio>
                     
               
             
           <span class="bg bg-primary"><a href="#"> <h3 class="btn btn-default text text-primary">view more</h3></a></span>
            </figure>
                </li>
                <li class="">
                         <div class="single_widget">   
              <h2><i><a href="#" style="color:white"><i>e</i>-library </a></i></h2>
            </div>
              <figure class="featured_img wow fadeInRight">                
                <a href="#"><img src="images/indeximg/ebooks.jpg" alt="converner photo" class="img-responsive" style="width:100%; height:220px"> </a> </figure><br> 
              <span class="bg bg-primary"><a href="#"> 
                <h3 class="btn btn-default text text-primary ">view more</h3></a></span>
            </figure>
                </li>
           <br><br>
          
            
            </ul>
            </div>
            </div>
          </div>
      </div>
</section> 
@endsection 