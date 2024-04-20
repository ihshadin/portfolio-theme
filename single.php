<?php
/**
 * The template for displaying all blog single posts
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
		<div
		class="content no_tp"
		data-pagetitle="Blog Post Title"
		data-pagesubtitle="Stories"
		>
		<div class="bg-top"></div>
		<div class="bg-bottom"></div>
		<!--section  -->
		<section>
			<div class="row">
			<div class="col-md-8">
				<!--post  -->
				<div class="post fl-wrap">
				<div class="section-title fl-wrap">
					<h3>Blog Post Title</h3>
					<span class="post-date"
					><i class="far fa-calendar"></i>15 march 2021
					</span>
				</div>
				<div class="post-media fl-wrap">
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
				</div>
				<div class="box-text-wrap fl-wrap">
					<div class="post-opt single_post-opt">
					<ul class="no-list-style">
						<li>
						<i class="fal fa-eye"></i>
						<span>164 views</span>
						</li>
						<li>
						<i class="far fa-comments-alt"></i>
						<span>6 commnets</span>
						</li>
					</ul>
					</div>
					<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing
					elit. Proin ornare sem sed quam tempus aliquet vitae
					eget dolor. Proin eu ultrices libero. Curabitur
					vulputate vestibulum elementum. Suspendisse id neque
					a nibh mollis blandit. Quisque varius eros ac purus
					dignissim. Proin eu ultrices libero. Curabitur
					vulputate vestibulum elementum. Suspendisse id neque
					a nibh mollis blandit. Quisque varius eros ac purus
					dignissim.
					</p>
					<ul class="post-tags">
					<li><a href="#">Design</a></li>
					<li><a href="#">Video</a></li>
					<li><a href="#">Photo</a></li>
					</ul>
				</div>
				</div>
				<!--post  end-->
				<div class="fl-wrap content-box">
				<div class="pr-subtitle">Comments</div>
				<div id="comments" class="single-post-comm fl-wrap">
					<ul class="commentlist clearafix">
					<li class="comment">
						<div class="comment-author">
						<img
							alt=""
							src="images/avatar/2.jpg"
							width="50"
							height="50"
						/>
						</div>
						<div class="comment-body">
						<h4>Kevin Antony</h4>
						<div class="comment-num">01.</div>
						<div class="clearfix"></div>
						<p>
							Lorem ipsum dolor sit amet, consectetuer
							adipiscing elit. Phasellus hendrerit.
							Pellentesque aliquet nibh nec urna. In nisi
							neque, aliquet vel, dapibus id, mattis vel,
							nisi. .
						</p>
						<a class="comment-reply-link" href="#"
							><i class="fas fa-reply"></i> Reply</a
						>
						<div class="comment-meta">January 02, 2022</div>
						<div class="comment-body_dec"></div>
						</div>
					</li>
					</ul>
				</div>
				<!--comments end -->
				</div>
				<div id="addcom" class="fl-wrap">
				<div class="pr-subtitle">Leave A Comment</div>
				<div class="comment-reply-form fl-wrap">
					<form
					id="add-comment"
					class="add-comment custom-form"
					>
					<fieldset>
						<div class="row">
						<div class="col-md-6">
							<div class="input-wrap">
							<i class="far fa-user-plus"></i
							><input
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
							<i class="far fa-envelope"></i
							><input
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
						<i class="far fa-comment-alt"></i
						><textarea
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
