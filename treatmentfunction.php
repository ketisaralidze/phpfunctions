<?php

function displayTreatment () : void {
    $treatments = [
        [
            'image' => 'images/t1.png',
            'title' => 'Nephrologist Care',
            'text' => 'alteration in some form, by injected humour, or randomised words which dont look even slightly e sure there isnt anything',
            'link' => 'Read More',
        ],
        [
            'image' => 'images/t2.png',
            'title' => 'Eye Care',
            'text' => 'alteration in some form, by injected humour, or randomised words which dont look even slightly e sure there isnt anything',
            'link' => 'Read More',
        ],
        [
            'image' => 'images/3t.png',
            'title' => 'Pediatrician Clinic',
            'text' => 'alteration in some form, by injected humour, or randomised words which dont look even slightly e sure there isnt anything',
            'link' => 'Read More',
        ],
        [
            'image' => 'images/t4.png',
            'title' => 'Parental Care',
            'text' => 'alteration in some form, by injected humour, or randomised words which dont look even slightly e sure there isnt anything',
            'link' => 'Read More',
        ],

    ];


    foreach($treatments as $treatment) {
        
     echo ' <div class="row">
          <div class="col-md-6 col-lg-3">
          <div class="box ">
          <div class="img-box"> 
              <img src=" '. $treatment['image']  .' " alt="">
            </div>
            <div class="detail-box">
              <h4>'. $treatment['title'] .'</h4>
              <p>'.$treatment['text'] .'</p>
              <a href="">'. $treatment['link']  .'</a>
            </div>
          </div>
        </div>
      </div> ';

    }
}
