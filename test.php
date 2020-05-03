<?php

$strUsername = 'testing';

$objResCurl = curl_init();

curl_setopt_array( $objResCurl, $arrstrCurlOptions );

print_r( $arrstrCurlOptions );


$strResult = curl_exec( $objResCurl );
?>
