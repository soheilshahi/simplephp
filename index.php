<?php
curl_setopt_array(
    $ch, array( 
    CURLOPT_URL => 'http://imdb.com/',
    CURLOPT_RETURNTRANSFER => true
));
 
$output = curl_exec($ch);
echo $output;
