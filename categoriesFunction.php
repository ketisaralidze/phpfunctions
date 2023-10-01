<?php

function printNavigation()  {
    $categories = [
        [
            'link' =>'about.php',
            'name' => 'Home',
        ],
        [
            'link' => '#',
            'name' => 'About',
          
        ],
        [
            'link' => '#',
            'name' => 'Treatment',
        ],
        [
            'link' => '#',
            'name' => 'Doctors',
        ],
        [
            'link' => '#',
            'name' => 'Testimonial',
        ],
        [
            'link' => '#',
            'name' => 'Contact Us',
        ],
        [
            'link' => '#',
            'name' => 'login',
        ],
        [
            'link' => '#',
            'name' => 'signup',
        ],
    ];

 foreach($categories as $category) {
        echo ' <nav class="navigation">
            <a class ="link" href ="' . $category['link']. '">' . $category['name'] .'</a>';        
    }



// function printLinks() {
//     $links = [
//         [ 'fa fa-user','Login', 
//           'Sign Up', 'fa fa-user',
//         ]
//     ];

   
//     foreach ($links as $link) {
//         echo ' <a href=""><i class="fa '. $link[1] .'" aria-hidden="true"></i>';
//     }
// }
}