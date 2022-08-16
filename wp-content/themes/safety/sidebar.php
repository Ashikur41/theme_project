    <div class="container pt-5">
        <div class="d-flex flex-column text-center mb-5">
            <h5 class="text-primary mb-3">Recent Blog</h5>
            <h1 class="m-0">Latest From Our Blog</h1>
        </div>
        <div class="row pb-3">
		<?php
			if(have_posts()):
			
			while(have_posts()):the_post();
			
		?>
            <div class="col-lg-4 mb-4">

                <div class="card mb-2 p-3">
                    <img class="card-img-top">
					<?php
					
					the_post_thumbnail( array( 315, 600 ) );
					
					
					
					?>
                    <div class="card-body bg-secondary d-flex align-items-center p-0">
                        <h6 class="card-title text-white text-truncate m-0 ml-3"><?php the_title()?></h6>
                        <a href="" class="fa fa-link d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white text-decoration-none m-0 ml-auto" style="width: 45px; height: 45px;"></a>
                    </div>
                    <div class="card-footer py-3 px-4">
                        <div class="d-flex mb-2">
                            <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                            <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                            <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                        </div>
                        <p class="m-0">
						<?php
						//the_content();
						the_excerpt()
						//the_ID()."</br>"
						//the_tags()."</br>"
						//the_meta()."</br>"
						//the_category()."</br>"
						//the_shortlink()."</br>"
						//next_post_link()."</br>"
						//previous_post_link()."</br>"
						
						?>
						</p>
                    </div>
                </div>

            </div>
		<?php
			endwhile;
			else:
			echo __('sorry,mytextdomaindev');
			endif;
		?>
        </div>
    </div>
    <!-- Blog End -->