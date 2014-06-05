/* JQ SEARCH FORM
 * 
 * Description: Archivo de javascript que realiza el toogle del formulario de busqueda en Wordpress
 * Author: José V.
 * Version: 1.0
 *
 */

jQuery().ready(function($){

	$('#btnsearch').bind('click',function(){
		$('#fs').slideToggle('slideOut');
	});

});