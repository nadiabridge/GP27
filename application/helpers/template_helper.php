<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//verificar se o nome da funçao que vamos criar já existe
if(!function_exists('setMenuActiveItem')){
	/**
	 * Sets the menu item active
	 * @param 	boolean $flag - the flag that sets the menu item active or not
	 * @return 	string 	- add a css class to the item
	 */
	function setMenuActiveItem($flag = false){
		if($flag){
			return 'active mainmenu__item';
		}else{
			return 'mainmenu__item';
		}
	}
}

if(!function_exists('getAlertHTMLFromMsg')){
	/**
	 * Gets the alert HTML from message.
	 * @param      <type>  $msg    The message
	 */
	function getAlertHTMLFromMsg($msg){
		$html='<div class="alert alert-'.$msg['type'].' alert-dismissable">';
		$html.='<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
		$html.='<div class="text-left">';
		$html.= $msg['text'];
		$html.='</div>';
		$html.='</div>';
		return $html;
	}
}