<?php

function printSlider($name,$text,$image) {
    $links = [
        ['button', 'Contact Us'],
    ];
 

       echo '<div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <div class="play_btn">
                      <button>
                        <i class="fa fa-play" aria-hidden="true"></i>
                      </button>
                    </div>
                    <h1> '. $name .'</h1>
                    <p> '. $text .' </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="'. $image .'" alt="">';
                 
    

    foreach ($links as $link) {
        echo '<a href="">' . $link[1] . ' </a>';
    }

     echo '</div>
    </div>';
}