<?php 
    $content=file_get_contents('http://www.nytimes.com/'); 
    preg_match( '/<title>(.*?)<\/title>/is' , $content , $title );
echo $title[1]; 
?>

