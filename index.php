<?php
/**
 * This is for the blog page
 */
get_header();
?>
<!-- content-holder -->
<div class="content-holder">
	<!--wrapper -->
	<div id="wrapper">
	<!--scroll-bar -->
	<div class="scr-bar_dec"></div>
	<div class="scr-bar_container">
		<div class="content no_tp" data-pagetitle="<?php echo esc_attr('My Latest Blogs', 'shadin') ?>" data-pagesubtitle="<?php echo esc_attr('Blogs', 'shadin') ?>">
			<div class="bg-top"></div>
			<div class="bg-bottom"></div>
			<!--section  -->
			<section>
				<div class="row">
					<div class="col-md-8">
						<!--post  -->
						<?php
							$args = array (
								'post_type' 		=> 'post',
								'posts_per_page'	=> 5,
								'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
							);
							$post_query = new WP_Query($args);
							if($post_query->have_posts()) {
								while($post_query->have_posts()) {
									$post_query->the_post();
									?>
										<div class="post fl-wrap">
											<div class="section-title fl-wrap">
												<h3><?php echo esc_html(get_the_title(), 'shadin') ?></h3>
												<span class="post-date">
													<i class="far fa-calendar"></i>
													<?php echo esc_html(get_the_date('j F Y'), 'shadin'); ?>
												</span>
											</div>
											<div class="post-media">
												<img
													src="<?php echo esc_url(get_the_post_thumbnail_url(), 'shadin');?>"
													class="respimg"
													alt="<?php echo esc_attr(get_the_title(), 'shadin') ?>"
												/>
											</div>
											<div class="post-opt single_post-opt">
												<ul class="no-list-style">
													<?php 
														$views_count = get_post_meta( get_the_ID(), 'visitor_count', true );
														if ($views_count > 0) {
															$views_text = $views_count == 1 ? 'view' : 'views';
															?>
															<li>
																<i class="fal fa-eye"></i>
																<span><?php echo $views_count . ' ' . $views_text; ?></span>
															</li>
															<?php
														}
													?>
													<?php 
														$comment_count = get_comments_number();
														if ($comment_count > 0) {
															$comment_text = $comment_count == 1 ? 'comment' : 'comments';
															?>
															<li>
																<i class="far fa-comments-alt"></i>
																<span><?php echo $comment_count . ' ' . $comment_text; ?></span>
															</li>
															<?php
														}
													?>
												</ul>
											</div>
											<div class="box-text-wrap fl-wrap">
												<p><?php echo esc_html(get_the_excerpt(), "shadin") ?></p>
												<a href="<?php echo esc_url(get_permalink()); ?>" class="btn ajax color-bg">
													<span><?php echo esc_html("Read More", "shadin") ?></span>
												</a>
											</div>
										</div>
									<?php
								}
								// Pagination
								$total_pages = $post_query->max_num_pages;

								if ($total_pages > 1) {
									$current_page = max(1, get_query_var('paged'));
							
									$pagination_links = paginate_links(array(
										'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
										'format' => '?paged=%#%',
										'current' => $current_page,
										'total' => $total_pages,
										'prev_text' => __('<i class="fas fa-caret-left"></i>'),
										'next_text' => __('<i class="fas fa-caret-right"></i>'),
										'before_page_number' => '',
										'after_page_number' => '.',
										'type' => 'array',
									));
							
									if (!empty($pagination_links)) {
										echo '<div class="pagination">';
										foreach ($pagination_links as $link) {
											if (strpos($link, 'current') !== false) {
												$link = str_replace(array('current', '<span', '</span>'), array('current-page', '<a', '</a>'), $link);
											}
											echo $link;
										}
										echo '</div>';
									}
								}
								wp_reset_postdata();
							} else {
							  echo 'No Projects found';
							}
						?>
						<!-- <div class="post fl-wrap">
							<div class="section-title fl-wrap">
								<h3>Blog Post Title</h3>
								<span class="post-date"
								><i class="far fa-calendar"></i>15 march 2022
								</span>
							</div>
							<div class="post-media fl-wrap">
								<div class="single-slider-wrap fl-wrap">
								<div class="single-slider fl-wrap">
									<div class="swiper-container">
									<div class="swiper-wrapper lightgallery">
										<div class="swiper-slide hov_zoom">
										<img src="<?php echo get_template_directory_uri();?>/images/folio/9.jpg" alt="" /><a
											href="<?php echo get_template_directory_uri();?>/images/folio/9.jpg"
											class="box-media-zoom popup-image"
											><i class="fas fa-search"></i
										></a>
										</div>
										<div class="swiper-slide hov_zoom">
										<img src="<?php echo get_template_directory_uri();?>/images/folio/10.jpg" alt="" /><a
											href="<?php echo get_template_directory_uri();?>/images/folio/10.jpg"
											class="box-media-zoom popup-image"
											><i class="fas fa-search"></i
										></a>
										</div>
										<div class="swiper-slide hov_zoom">
										<img src="<?php echo get_template_directory_uri();?>/images/folio/11.jpg" alt="" /><a
											href="<?php echo get_template_directory_uri();?>/images/folio/11.jpg"
											class="box-media-zoom popup-image"
											><i class="fas fa-search"></i
										></a>
										</div>
									</div>
									</div>
									<div class="ss-button ss-button-prev">
									<i class="fal fa-angle-left"></i>
									</div>
									<div class="ss-button ss-button-next">
									<i class="fal fa-angle-right"></i>
									</div>
									<div class="css-pagination-wrap">
									<div class="tc-pagination slider-pag"></div>
									</div>
								</div>
								</div>
							</div>
							<div class="post-opt single_post-opt">
								<ul class="no-list-style">
								<li>
									<i class="fal fa-eye"></i> <span>164 views</span>
								</li>
								<li>
									<i class="far fa-comments-alt"></i>
									<span>3 commnets</span>
								</li>
								</ul>
							</div>
							<div class="box-text-wrap fl-wrap">
								<p>
								Sed do eiusmod tempor incididunt ut labore et dolore
								magna aliqua. Ut enim ad minim veniam, quis nostrud
								exercitation ullamco laboris nisi ut aliquip ex ea
								commodo consequat. Dolore magna aliqua.
								</p>
								<a href="blog-single.html" class="btn ajax color-bg"
								><span>Read More</span></a
								>
							</div>
						</div> -->
						<!--post  end-->

						<!--pagination-->
						<!-- <div class="pagination">
							<a href="#" class="prevposts-link"><i class="fas fa-caret-left"></i></a>
							<a href="#">01.</a>
							<a href="#" class="current-page">02.</a>
							<a href="#">03.</a>
							<a href="#">04.</a>
							<a href="#" class="nextposts-link"><i class="fas fa-caret-right"></i></a>
						</div> -->
						<!--pagination end-->
						
					</div>
					<!-- sidebar -->
					<div class="col-md-4">
						<div class="main-sidebar fixed-bar fl-wrap">
						<div class="widget-sidebar ws_column">
							<!-- widget -->
							<div class="widget-inner">
							<form action="#">
								<input
								name="se"
								id="se2"
								type="text"
								class="search"
								placeholder="Search..."
								value=""
								/>
								<button class="search-submit" id="submit_btn2">
								<i class="fa fa-search transition"></i>
								</button>
							</form>
							</div>
							<h3>Tags</h3>
							<div class="widget-inner">
							<ul class="post-tags">
								<li><a href="#">Paint</a></li>
								<li><a href="#">Construction</a></li>
								<li><a href="#">Build</a></li>
								<li><a href="#">Poster</a></li>
								<li><a href="#">Trends</a></li>
							</ul>
							</div>
							<!-- widget end  -->
							<!-- widget -->
							<h3>Categories</h3>
							<div class="widget-inner">
							<ul class="cat-wid">
								<li class="cat-item">
								<a href="#">Standard</a><span>3</span>
								</li>
								<li class="cat-item">
								<a href="#">Video</a> <span>6</span>
								</li>
								<li class="cat-item">
								<a href="#">Gallery</a> <span>12</span>
								</li>
								<li class="cat-item">
								<a href="#">Quotes</a> <span>4</span>
								</li>
							</ul>
							</div>
							<!-- widget end  -->
							<!-- widget  -->
							<h3>Last Posts</h3>
							<div class="widget-inner">
							<ul class="widget-posts">
								<li class="clearfix">
								<a
									href="blog-single.html"
									class="widget-posts-img"
									><img
									src="images/folio/4.jpg"
									class="respimg"
									alt=""
								/></a>
								<div class="widget-posts-descr">
									<a href="#" title=""
									>Vivamus dapibus rutrum</a
									>
									<span class="widget-posts-date"
									><i class="far fa-calendar"></i> 27 Mar 2021
									</span>
								</div>
								</li>
								<li class="clearfix">
								<a
									href="blog-single.html"
									class="widget-posts-img"
									><img
									src="images/folio/5.jpg"
									class="respimg"
									alt=""
								/></a>
								<div class="widget-posts-descr">
									<a href="#" title=""> Integer sagittis</a>
									<span class="widget-posts-date"
									><i class="far fa-calendar"></i> 12 May
									2021</span
									>
								</div>
								</li>
								<li class="clearfix">
								<a
									href="blog-single.html"
									class="widget-posts-img"
									><img
									src="images/folio/6.jpg"
									class="respimg"
									alt=""
								/></a>
								<div class="widget-posts-descr">
									<a href="#" title="">Snowy Mountains Trip</a>
									<span class="widget-posts-date"
									><i class="far fa-calendar"></i> 22 Feb 2021
									</span>
								</div>
								</li>
							</ul>
							</div>
							<!-- widget end  -->
							<!-- widget -->
							<h3>Subscribe</h3>
							<div class="widget-inner">
							<div class="subcribe-form fl-wrap">
								<form id="subscribe">
								<input
									class="enteremail"
									name="email"
									id="subscribe-email"
									placeholder="Your Email"
									spellcheck="false"
									type="text"
								/>
								<button
									type="submit"
									id="subscribe-button"
									class="subscribe-button gradient-bg"
								>
									Submit
								</button>
								<label
									for="subscribe-email"
									class="subscribe-message"
								></label>
								</form>
							</div>
							</div>
							<!-- widget end  -->
						</div>
						</div>
					</div>
					<!-- sidebar end -->
				</div>
			</section>
			<!--section end-->
			<div class="to-top-wrap">
				<div class="to-top color-bg">
					<i class="fas fa-caret-up"></i>
				</div>
			</div>
		</div>
	</div>
	<!--scroll-bar end -->
	<!--share end -->
	<div class="share-wrapper">
		<div class="share-container isShare"></div>
	</div>
	<!--share end -->
	</div>
	<!--wrapper end -->
	<!--page-load -->
	<div class="page-load">
		<div class="pl-spinner"><span></span></div>
	</div>
	<!--page-load end -->
</div>
<!-- content-holder end -->
<?php
get_footer();
