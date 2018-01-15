<?php
 /**
 * Plugin Name: process-cart
 * Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
 * Description: adding metabox to wp.
 * Version: 1.0
 * Author: Saira
 * Author URI: http://URI_Of_The_Plugin_Author
 * License: GPL2
 */


 
add_action('woocommerce_checkout_order_processed','add_user_subscription_to_pms_table', 10, 1);

//add_action('woocommerce_order_status_completed','add_user_subscription_to_pms_table', 10, 1);


 
//add_action('my_page_hook','add_user_subscription_to_pms_table');

 
function add_user_subscription_to_pms_table($order_id) 
{

//echo "<h1>order hook</h1>"; //return;

	//$order_id = 1770;
	//echo $order_id;

 

   if ( ! $order_id )
        return;
        

    // Getting an instance of the order object
    $order = wc_get_order( $order_id );
    //var_dump($order);

    //if($order->is_paid())
    
    //{
    
    // we need 4 things to add records in wpgj_pms_member_subscriptions i-e 
    
    // $product_slug to match with pms subscription plans table to get that plan id (will be enterd in as wpgj_pms_member_subscriptions subscription_plan_id)
    // variation option to calculate expiry_date
    // user _id
    // order_id
	
	$order_items = $order->get_items();
	$user = $order->get_user();
	$user_id = $order->get_user_id();
	$order_date = $order->order_date;
	
	//echo"_________________ORder Date = ".$user_id ."_________________<br/>";
	
	//echo sizeof($order_items); exit;
 
	   foreach ( $order->get_items() as $item) 
	   {
				
				
				
				$product_id = $item['product_id'];
				
				
				// Get the product object
				$product = wc_get_product( $product_id );
				
				$post = get_post( $product_id );
				
				$product_slug = $post->post_name;

				
				
				$variation_id= $item['variation_id'];
				
				if($variation_id>0) // means its a variable product and has timespan, monthly, yearly etc
				{
					$variation = wc_get_product($variation_id);
					$variation = $variation->get_variation_attributes();
					//var_dump($variation);
					//echo $variation["attribute_options"]."<br/>";
					$duration =$variation["attribute_options"];
				}
				else // otherwise its a simple product
				{
					$duration = "monthly";
				}
				
				// calculate expiry
				
				if($duration == 'quarterly')
				{
					$expiration_date = date('Y-m-d H:i:s', strtotime("+3 months", strtotime($order_date)));
				}
				else if($duration == 'half_year')
				{
					$expiration_date = date('Y-m-d H:i:s', strtotime("+6 months", strtotime($order_date)));
				}
				else if($duration == 'yearly')
				{
					$expiration_date = date('Y-m-d H:i:s', strtotime("+1 year", strtotime($order_date)));
				}
				else /// add a month 
				{
					$expiration_date = date('Y-m-d H:i:s', strtotime("+1 month", strtotime($order_date)));
				}
				
				
				/// match both pricing plan, i-e, product and pms subscription plans
				global $wpdb;
				
				$wpqry = "SELECT * FROM wpgj_posts where `post_type`='pms-subscription' and post_name ='".$product_slug."'";
				//echo $wpqry ; 
				$results = $wpdb->get_row($wpqry); 
				
				$subscription_plan_id = $results->ID;
				//echo  "variation_id= ".$variation_id." <br/> product_id= ".$product_id." <br/> post-name =".$product_slug."  <br/>  subscription plan id=".$subscription_plan_id."<br/>Expirtaion Date".$expiration_date."<br/><hr/>";
		
		
				//echo $wpqry = "Insert into `wpgj_pms_member_subscriptions` SET `user_id`= ".$user_id." and `subscription_plan_id`= ".$subscription_plan_id." and `start_date`='".$order_date ."' and `expiration_date`='".$expiration_date."' and `status` = 'active'";
				
				$wpqry = "INSERT INTO `wpgj_pms_member_subscriptions` (`id`, `user_id`, `subscription_plan_id`, `start_date`, `expiration_date`, `status`, `payment_profile_id`, `payment_gateway`, `billing_amount`, `billing_duration`, `billing_duration_unit`, `billing_cycles`, `billing_next_payment`, `billing_last_payment`, `trial_end`) VALUES (NULL, '".$user_id."', '".$subscription_plan_id."', '".$order_date."', '".$expiration_date."', 'active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL)";
				
				$wpdb->query($wpqry);	
				//echo "<br/>";	
				
	
	    }


}

?>