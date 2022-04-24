<?php

use App\Models\Footer;

function getFooter(){
   $main = Footer::latest()->get()->first();
    return $main;
}

