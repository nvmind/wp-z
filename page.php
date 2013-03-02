<?php get_header(); ?>
		
			<div id="content" class="row	">
			
				<div id="inner-content" class="wrap clearfix">
			
				    <div id="main" class="eightcol first clearfix" role="main">

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
						    <header class="article-header">
									
									<div class="row">

											<div class=" large-6 column">
												<div class="panel">
									  		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum quaerat quae consequuntur in nemo at doloribus nobis harum et reiciendis sapiente dignissimos id nulla consectetur doloremque iusto possimus veniam architecto.
												</div>
											</div>

											<div class="large-6 column">
												<div class="panel">
										  		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum quaerat quae consequuntur in nemo at doloribus nobis harum et reiciendis sapiente dignissimos id nulla consectetur doloremque iusto possimus veniam architecto.
												</div>
											</div>

									</div>


						    </header> <!-- end article header -->
					
						    <section class="entry-content clearfix" itemprop="articleBody">
							    <?php the_content(); ?>
							</section> <!-- end article section -->
						
						    <footer class="article-footer">
                  <?php the_tags('<span class="tags">' . __('Tags:', 'bonestheme') . '</span> ', ', ', ''); ?>
							
						    </footer> <!-- end article footer -->
						    
						    <?php comments_template(); ?>
					
					    </article> <!-- end article -->
					
					    <?php endwhile; else : ?>
					
    					    <article id="post-not-found" class="hentry clearfix">
    					    	<header class="article-header">
    					    		<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
    					    	</header>
    					    	<section class="entry-content">
    					    		<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
    					    	</section>
    					    	<footer class="article-footer">
    					    	    <p><?php _e("This is the error message in the page.php template.", "bonestheme"); ?></p>
    					    	</footer>
    					    </article>
					
					    <?php endif; ?>
			
    				</div> <!-- end #main -->
    
				    <?php get_sidebar(); ?>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
