<section id="works" class="uk-block uk-contrast uk-block-warning yellow-section">
  	<div class="uk-container uk-container-center">
		<div class="uk-grid" data-uk-grid-margin>
    		<div class="uk-width-1-1" >
     			<h2 class="uk-text-center fancy-title"><i class="uk-icon-briefcase"></i> Latest Works</h2>
			</div>

            <?php
                $query = new WP_Query([
                    'showposts' => 3,
                    'post_type' => 'work'
                ]);

                if ($query->have_posts()) {
                    while ($query->have_posts()): $query->the_post();
                        inc('partials/work');
                    endwhile;

                    wp_reset_postdata(); ?>

                    <div class="uk-width-1-1 uk-text-center">
                        <a class="uk-button uk-button-primary uk-button-large" href="/works">
                            <i class="uk-icon-briefcase"></i> See All Our Works
                        </a>
                    </div>
                <?php } else {
                    echo '<div class="uk-width-1-1 uk-text-center"><p>There are no posts yet. Please come back laler!</p></div>';
                }
            ?>

		</div>
	</div>
</section>