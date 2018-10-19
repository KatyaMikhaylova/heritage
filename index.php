<?php
function viewInit($file, $arr = [])
{
    $file = $file . '.html';
    include "views/$file";
}
viewInit('header', array('current' => 'index'));
viewInit('index');
viewInit('footer');