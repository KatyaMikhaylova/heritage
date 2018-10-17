<?php
function viewInit($file, $arr = [])
{
    $file = $file . '.html';
    include "views/$file";
}
viewInit('header');
viewInit('index');
viewInit('footer');