<?php

function printTestimonials() : void {

$testimonials = [
    [
        'name' => 'Morijorch',
        'title' => 'Default model text',
        'text' => 'editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum  will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various',
    ],
    [
        'name' => 'Rochak',
        'title' => 'Default model text',
        'text' => 'editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum  will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various',
    ],
    [
        'name' => 'Brad Johns',
        'title' => 'Default model text',
        'text' => 'editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum  will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Variouseditors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various',
    ]
];


    foreach ($testimonials as $testimonial) {
        echo '
                <div class="box">
                  <div class="client_info">
                    <div class="client_name">
                      <h5>'.$testimonial['name'] .'</h5>
                      <h6>'. $testimonial['title'] .'</h6>
                    </div>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                  </div>
                  <p>'. $testimonial['text'] .'</p>
                </div>
              </div>';
          }
};