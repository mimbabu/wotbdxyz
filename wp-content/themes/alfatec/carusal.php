<?php
/**
 Template Name: carusal
 Displays Only carusal Template

 *@package Wordpress
 * @subpackage webite
 * @since website 1.0
*/

get_header();
 ?>




<!-- owl carusal start -->
<div class="my-carusal">
    <div class ="container">
    <div class="container-fluid">
<div class="owl-carousel owl-theme" id="owl-theme">
    <div class="item"><img src="<?php echo get_template_directory_uri();?>/New_Slider_image/N-Series2.0-2.5TDiesel02.jpg"><li style="list-style: none;
    padding: 20px; text-align: center;"><a href="#" >DIESEL FORK LIFT</a></li></div>
     <div class="item"><img src="<?php echo get_template_directory_uri();?>/New_Slider_image/TRUCK-2.jpg"><li style="list-style: none;
    padding: 20px; text-align: center;"><a href="#" >HAND PALLET TRUCK</a></li></div>
      <div class="item"><img src="<?php echo get_template_directory_uri();?>/New_Slider_image/LIFTER-3.jpg"><li style="list-style: none;
    padding: 20px; text-align: center;"><a href="#" >TILTING DRUM LIFTER</a></li></div>
       <div class="item"><img src="<?php echo get_template_directory_uri();?>/New_Slider_image/LIFT-4.png"><li style="list-style: none;
    padding: 20px; text-align: center;"><a href="#" >GUIDE RAIL CARGO LIFT</a></li>
       </div>
        <div class="item"><img src="<?php echo get_template_directory_uri();?>/New_Slider_image/CRANE-5.jpg"><li style="list-style: none;
    padding: 20px; text-align: center;"><a href="#" >OVERHEAD CRANE</a></li></div>
         <div class="item"><img src="<?php echo get_template_directory_uri();?>/New_Slider_image/BOOMLIFT-6.png"><li style="list-style: none;
    padding: 20px; text-align: center;"><a href="#" >SCISSOR & BOOMLIFT</a></li></div>
          <div class="item"><img src="<?php echo get_template_directory_uri();?>/New_Slider_image/FILTERS-7.jpg"><li style="list-style: none;
    padding: 20px; text-align: center;"><a href="#" >FILTERS</a></li></div>
           <div class="item"><img src="<?php echo get_template_directory_uri();?>/New_Slider_image/ATTACHMENT-8.png"><li style="list-style: none;
    padding: 20px; text-align: center;"><a href="#" >FORKLIFT ATTACHMENT</a></li></div>
            <div class="item"><img src="<?php echo get_template_directory_uri();?>/New_Slider_image/TOWERCRANE.png"><li style="list-style: none;
    padding: 20px; text-align: center;"><a href="#" >TOWER CRANE</a></li></div>
             <div class="item"><img src="<?php echo get_template_directory_uri();?>/New_Slider_image/CHARGER-10.jpg"><li style="list-style: none;
    padding: 20px; text-align: center;"><a href="#" >FORKLIFT BATTERY CHARGER</a></li></div>
    </div>
    </div>
  </div>
  </div>
<!-- end -->

  
     <script type="text/javascript">
 $(function(){("#bootnavbar").bootnavbar()});</script>
 <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery-3.5-min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/all.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/owl.carousel.min.js"></script>
<script type="text/javascript">
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    autoplay:true,
    autoplayTimeout:2000,
    stagePadding: 4,

    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
</script>

<?php  get_footer(); ?>