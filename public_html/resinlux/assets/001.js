// jQuery(document).ready(function($){
//     $('i.fa-bars').on('click',function(e){
//         e.stopPropagation();
//         $('#slideout-menu').toggleClass('d-show');
//     });
//     $('i.fa-window-close').on('click',function(c){
//         c.stopPropagation();
//         $('#slideout-menu').toggleClass('d-show');
//     });
//     // $('ul.menu-mobile-icon li:has(ul)>a').before('<i class="fa fa-angle-down"></i>');
//     // $(".fa-angle-down").click(function () {
//     //     $(this).parent().children("ul.sub-menu").slideToggle(), $(this).toggleClass("fa-angle-down fa-angle-up")
//     // });
// });
jQuery(document).ready(function($) {
$('i.fa-bars').on('click',function () {
    $('#slideout-menu').toggleClass('.d-show');
})
});