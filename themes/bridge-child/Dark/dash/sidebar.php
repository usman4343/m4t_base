<!-- Right Sidebar -->
<div class="side-bar right-bar">
    <a href="javascript:void(0);" class="right-bar-toggle">
        <i class="zmdi zmdi-close-circle-o"></i>
    </a>
    <h4 class="">Notifications</h4>
    <div class="notification-list nicescroll">
        <ul class="list-group list-no-border user-list">
			<?php
				$args = array(
					"post_type" => "m4t_PN",
					"posts_per_page" => 10
				);
				$loop = new WP_QUERY($args);
				$m4t_user = wp_get_current_user();

				while($loop->have_posts()) {
					$loop->the_post();
					$title = substr(get_the_title(), 0, 30);
					$content = substr(get_the_content(), 0, 30);	
					$time = human_time_diff(get_the_time("U"), current_time("timestamp")) . " ago";				
					$image = get_avatar_url($m4t_user->ID);
					?>
				    <li class="list-group-item">
				        <a href="#" class="user-list-item">
				            <div class="avatar">
				                <img src="<?php echo $image; ?>" alt="">
				            </div>
				            <div class="user-desc">
				                <span class="name"><?php echo $title; ?></span>
				                <span class="desc"><?php echo $content; ?></span>
				                <span class="time"><?php echo $time; ?></span>
				            </div>
				        </a>
				    </li>
			<?php } ?>            

        </ul>
    </div>
</div>
<!-- /Right-bar -->
