/* Theme Name: Worthy - Free Powerful Theme by HtmlCoder
 * Author:HtmlCoder
 * Author URI:http://www.htmlcoder.me
 * Version:1.0.0
 * Created:November 2014
 * License: Creative Commons Attribution 3.0 License (https://creativecommons.org/licenses/by/3.0/)
 * File Description: Place here your custom scripts
 */

$(document).ready(function(){
	$("#footer-form").submit(function(event){
    var link = "mailto:contacto@dribyte.cl"
             + "&subject=" + $("#name2").val()
             + "&body=" + $("#message2").val();
    window.location.href = link;
	});
});