<?php
function viewInit($file, $arr = [])
{
    $file = $file . '.html';
    include "views/$file";
}

viewInit('header',  array('current' => 'about'));
viewInit('about_us');
viewInit('footer');