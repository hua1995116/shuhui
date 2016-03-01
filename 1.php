<?php 
function extend_1( $file_name ) 
{ 
$retval =""; 
$pt = strrpos ( $file_name , "." ); 
if ( $pt ) $retval = substr ( $file_name , 0,  $pt ); 
return ( $retval ); 
}
$asf="12312312.mp3";
$asf=extend_1($asf);
echo $asf;
?>