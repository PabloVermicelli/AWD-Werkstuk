<?php 
/* 
Plugin Name: Opdracht 3
Plugin URI: http://iwtsl.ehb.be/~mathias.papeleu
Description: Deze plugin haalt vuile woorden uit je pagina!
Version: 1.0 
Author: Mathias Papeleu
Author URI: http://escapevelocity.be
*/

add_action('the_content', 'profanityFilter');

function profanityFilter($content){
    $profanities = array("shit", "fuck", "ass");
    $content=str_ireplace($profanities,"beep",$content);
    return $content;
}


?>