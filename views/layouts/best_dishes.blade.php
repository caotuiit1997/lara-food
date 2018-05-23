<?php
 use App\Product;
 $best_dishes = Product::all();
 $count_dishes = count($best_dishes);
?>
<div class="bestdisheswrapper">
    <div id="bestdishes" class="container">
       
		 <h2 class="wow fadeInUp" data-wow-delay="0.3s">SẢN PHẨM</h2>
      <div class="slider">
      		    <ul class="slides">
          	 	 <li class="slide">
                    <div class="item">
                          <img src="images/thumb1.png" width="226" height="225" alt="sliderimg" class="wow flipInX"
                           data-wow-delay=".8s"> 
                          <h3>Pasta Capellini</h3>
                      </div> <!-- end of item-->
                      
                   <div class="item2">
                          <img src="images/thumb2.jpg" width="226" height="225" alt="sliderimg" class="wow flipInX"
                           data-wow-delay=".8s"> 
                          <h3>Pasta Pillus</h3>
                      </div> <!-- end of item-->
                      
                   <div class="item3">
                          <img src="images/thumb3.png" width="226" height="225" alt="sliderimg" class="wow flipInX"
                           data-wow-delay=".8s"> 
                          <h3>Pasta Fusilli</h3>
                      </div> <!-- end of item-->
                  </li>
                   <li class="slide">
                    <div class="item">
                          <img src="images/thumb1.png" width="226" height="225" alt="sliderimg" > 
                          <h3>Pasta Capellini</h3>
                      </div> <!-- end of item-->
                      
                   <div class="item2">
                          <img src="images/thumb2.jpg" width="226" height="225" alt="sliderimg"> 
                          <h3>Pasta Pillus</h3>
                      </div> <!-- end of item-->
                      
                   <div class="item3">
                          <img src="images/thumb3.png" width="226" height="225" alt="sliderimg"> 
                          <h3>Pasta Fusilli</h3>
                      </div> <!-- end of item-->
                  </li>
                   
        </ul>
      </div> <!-- end of slider-->
    </div> <!-- end of besth dishes-->
</div> <!-- end of bestdishes wrapper-->

 <script type="text/javascript">
    $(document).ready(function(){
        $('.bestdisheswrapper .slider').glide({
        autoplay: false,
        animationDuration: 700,
        arrows: true,
        navigation:false,
        });
    });
    
</script>