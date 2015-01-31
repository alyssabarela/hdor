/** custom js **/

// highlight current navbar tab
// $('.navbar li a').click(function(){
//   $(this).closest('li').addClass('active').siblings().removeClass('active');
//   return(false);
// });
// other option need to add id 'home' to body tag
$('#Home a:contains("Home")').parent().addClass('active');
$('#About a:contains("About")').parent().addClass('active');
$('#Friends a:contains("Friends")').parent().addClass('active');
$('#Events a:contains("Events")').parent().addClass('active');
$('#Contact a:contains("Contact")').parent().addClass('active');

/** Shorthand for $( document ).ready() **/
$(function() {
  //console.log( "ready!" );
});