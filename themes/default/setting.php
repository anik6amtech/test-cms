<?php
use App\Models\Blog;

use TorMorten\Eventy\Facades\Eventy;



Eventy::addAction('web_css', function () {
    $jsFiles = glob(base_path('themes/'.config('theme.active').'/assets/css/*.css'));

    foreach ($jsFiles as $file) {
        echo '<link href="' . url(str_replace(base_path(), '', $file)) . '"  rel="stylesheet">';
    }
});



Eventy::addAction('web_js', function () {
    $jsFiles = glob(base_path('themes/'.config('theme.active').'/assets/js/*.js'));

    foreach ($jsFiles as $file) {
        echo '<script src="' . url(str_replace(base_path(), '', $file)) . '"></script>';
    }
});


Eventy::addAction('web_header', function() {

 include('views/partials/header.php');

});


Eventy::addAction('web_footer', function() {

    include('views/partials/footer.php');

   });




   Eventy::addFilter('web_blogs', function() {
    ob_start(); // Start output buffering
    include 'views/shortcode/blogs.php'; // Include the PHP file
    $content = ob_get_clean(); // Get the buffered content and clean the buffer
    return $content; // Return the content
});
