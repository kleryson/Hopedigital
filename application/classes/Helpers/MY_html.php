<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MY_html
 *
 * @author padrao
 */
class html  extends Kohana_HTML {
	
	public static $html;

	public function div($conteudo){
		return '<div>'.$conteudo.'</div>';
	}
}

?>
