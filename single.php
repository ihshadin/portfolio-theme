<?php
/**
 * The template for displaying all blog single posts
 */
get_header();
visitor_counter(get_the_ID())
?>
<div class="content no_tp" data-pagetitle="Blog Post Title" data-pagesubtitle="Stories" >
	<div class="bg-top"></div>
	<div class="bg-bottom"></div>
	<!--section  -->
	<section>
		<div class="row">
			<div class="col-md-12">
				<!--post  -->
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
					<!-- <div class="post-media fl-wrap">
						<div class="single-slider-wrap fl-wrap">
						<div class="single-slider fl-wrap">
							<div class="swiper-container">
							<div class="swiper-wrapper lightgallery">
								<div class="swiper-slide hov_zoom">
								<img src="images/folio/9.jpg" alt="" /><a
									href="images/folio/9.jpg"
									class="box-media-zoom popup-image"
									><i class="fas fa-search"></i
								></a>
								</div>
								<div class="swiper-slide hov_zoom">
								<img src="images/folio/10.jpg" alt="" /><a
									href="images/folio/10.jpg"
									class="box-media-zoom popup-image"
									><i class="fas fa-search"></i
								></a>
								</div>
								<div class="swiper-slide hov_zoom">
								<img src="images/folio/11.jpg" alt="" /><a
									href="images/folio/11.jpg"
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
					</div> -->
					<div class="box-text-wrap fl-wrap">
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
						<div class="single_post_content">
							<?php echo the_content(); ?>
						</div>
						<ul class="post-tags">
							<!-- <li><a href="#">Design</a></li>
							<li><a href="#">Video</a></li>
							<li><a href="#">Photo</a></li> -->
							<?php
							$post_tags = get_the_tags();
							if($post_tags) {
								foreach($post_tags as $tag) {
									echo '<li><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></li>';
								}
							}
							?>
						</ul>
					</div>
				</div>
				<!--post  end-->
				<?php comments_template(); ?>
				<div id="addcom" class="fl-wrap">
					<div class="pr-subtitle">Leave A Comment</div>
					<div class="comment-reply-form fl-wrap">
						<form id="add-comment" class="add-comment custom-form">
							<fieldset>
								<div class="row">
									<div class="col-md-6">
										<div class="input-wrap">
											<i class="far fa-user-plus"></i>
											<input
												type="text"
												name="name"
												id="name"
												placeholder="Your Name *"
												value=""
											/>
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-wrap">
											<i class="far fa-envelope"></i>
											<input
												type="text"
												name="email"
												id="email"
												placeholder="Email Address*"
												value=""
											/>
										</div>
									</div>
								</div>
								<div class="input-wrap">
									<i class="far fa-comment-alt"></i>
									<textarea
										name="comments"
										id="comments2"
										cols="40"
										rows="3"
										placeholder="YourComment:"
									></textarea>
								</div>
							</fieldset>
							<button class="btn float-btn color-bg" id="submit">
								<span>Add Commnet</span>
							</button>
						</form>
					</div>
				</div>
				<!--end respond-->
			</div>
		</div>
	</section>
	<!--section end-->
<?php
get_footer();
