/** custom js **/

// highlight current navbar tab
// $('.navbar li a').click(function(){
//   $(this).closest('li').addClass('active').siblings().removeClass('active');
//   return(false);
// });
// other option need to add id 'home' to body tag
$('#home a:contains("Home")').parent().addClass('active');

/** Shorthand for $( document ).ready() **/
$(function() {
  //console.log( "ready!" );
});