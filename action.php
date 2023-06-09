<?php

require_once "vendor/autoload.php";

if(isset($_GET['page'])){
    if("home" == $_GET['page']){
        $blogs = new \App\classes\Blog();
        include "pages/include/home.php";
    }elseif ("details" == $_GET['page']){
        include "pages/template-parts/blog-details.php";
    }elseif ("contact" == $_GET['page']){
        include "pages/template-parts/contact.php";
    }elseif ("about-us" == $_GET['page']){
        include "pages/template-parts/about.php";
    }
}
