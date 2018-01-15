<?php

/*
Plugin Name: Signup page
Description: Signup page
Author: Adeel Ahmad
Version: 1.0.0
*/

function adeel(){
    if(is_page(2)) {
    ?>
    
    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="2W7YF42MRP5K8">
        <table>
        <tr><td><input type="hidden" name="on0" value="MEMBERSHIP SUBSCRIPTIONS">MEMBERSHIP SUBSCRIPTIONS</td></tr><tr><td><select name="os0">
        <option value="Standard">Standard $22.00 USD</option>
        <option value="Gold">Gold $699.00 USD</option>
        <option value="Platinum">Platinum $2,399.00 USD</option>
        </select> </td></tr>
        </table>
        <input type="hidden" name="currency_code" value="USD">
        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>
        
    <script>
        jQuery(function($){
            $("form.wpcf7-form").submit(function(e){
                e.preventDefault();
                console.log("adeel");
            });
        });

    </script>
    <?php
    }
}   


add_action("wp_footer", "adeel");
