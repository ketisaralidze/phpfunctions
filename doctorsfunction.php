<?php
 
 
 function printDoctors ($name, $title, $image) {
     $Links = [
         ["Facebook", "fa-facebook"],
         ["Twitter", "fa-twitter"],
         ["LinkedIn", "fa-linkedin"],
         ["Instagram", "fa-instagram"],
         

     ];
  
     echo '<div class="item">
             <div class="box">
               <div class="img-box">
                 <img src="' . $image . '" alt="" />
               </div>
               <div class="detail-box">
                 <h5>' . $name . '</h5>
                 <h6>' . $title. '</h6>
                 <div class="social_box">';

        
 
     foreach ($Links as $link) {
         echo '<a href=""><i class="fa ' . $link[1] . '" aria-hidden=""></i></a>';
     }
 
           echo  '</div>
               </div>
             </div>
           </div>';
  }  
 ?>

