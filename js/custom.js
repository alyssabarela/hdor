/** custom js **/

// highlight current navbar tab
$('#Home a:contains("Home")').parent().addClass('active');
$('#About a:contains("About")').parent().addClass('active');
$('#Friends a:contains("Friends")').parent().addClass('active');
$('#Events a:contains("Events")').parent().addClass('active');
$('#Contact a:contains("Contact")').parent().addClass('active');

/** Shorthand for $( document ).ready() **/
$(function() {
  //console.log( "ready!" );
});