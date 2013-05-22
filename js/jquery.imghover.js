/*
 * Ex: hover effect, image link.
 * Update: 2011-05-01
 * auther: Luvsic
 * licence: MIT
 * info: http://luvsic.net/item/140
 * 
 */

jQuery(function(){

        $('a img').hover(
                function(){
                        $(this).fadeTo(0, 0.3).fadeTo('500', 0.8);
                },
                function(){
                        $(this).fadeTo('500', 1);
                }
        );

});