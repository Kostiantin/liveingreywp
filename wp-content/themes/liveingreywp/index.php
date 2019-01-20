<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="callout top-slogan-container">
				<div class="grid-container">
					<div class="main-slogan">
						<h1><?php the_field('we_create_authentic', 57);?></h1>
					</div>
					<div class="sub-slogan">
						<?php the_field('live_grey_tag',57);?>
					</div>
				</div>
			</div>

			<!-- Middle Section 1 -->
			<div class="mid-section-1">
				<div class="grid-container">
					<div class="grid-x">
						<div class="cell small-12 middle-6 large-6 main-video-container">

                            <?php echo wp_oembed_get(get_field('main_video',57)); ?>

						</div>
						<div class="cell small-12 middle-6 large-6">
							<h3>
								<?php the_field('article_header',57);?>
							</h3>
							<?php the_field('article_text',57);?>
							<a href="#" class="red-custom-button">
								<?php the_field('article_button_text',57);?>
							</a>
						</div>
					</div>
				</div>
			</div>


			<!-- Middle Section 2 -->
			<div class="mid-section-2">
				<div class="grid-container">
					<div class="grid-x">
						<div class="cell small-12 middle-12 large-12">
							<h2 class="text-center"><?php the_field('learn_through_experience',57);?></h2>
							<h3 class="text-center"><?php the_field('our_work_place_text',57);?></h3>
						</div>
						<div class="cell small-12 middle-4 large-4 left-cell">
							<div class="colored-sub-header">
								<div class="sub-header-text-holder">
									<?php the_field('values_work',57);?>
								</div>
							</div>
							<div class="arrow-down-image-holder">
								<img class="article-image" src="<?php the_field('red_down_arrow',57);?>" alt=""/>
							</div>
							<div class="description">
								<h4>01&nbsp;&nbsp;<?php the_field('values_work',57);?></h4>
								<p><?php the_field('values_work_description',57);?></p>
							</div>
						</div>
						<div class="cell small-12 middle-4 large-4 center-cell">
							<div class="colored-sub-header">
								<div class="sub-header-text-holder">
									<?php the_field('keep_it_real',57);?>
								</div>
							</div>
							<div class="arrow-down-image-holder">
								<img class="article-image" src="<?php the_field('grey_down_arrow', 57);?>" alt=""/>
							</div>
							<div class="description">
								<h4>02&nbsp;&nbsp;<?php the_field('keep_it_real',57);?></h4>
								<p><?php the_field('keep_it_real_description',57);?></p>
								<p class="special"><?php the_field('keep_it_real_sub_text',57);?></p>
							</div>
						</div>
						<div class="cell small-12 middle-4 large-4 right-cell">
							<div class="colored-sub-header">
								<div class="sub-header-text-holder">
									<?php the_field('on_purpose',57);?>
								</div>
							</div>
							<div class="arrow-down-image-holder">
								<img class="article-image" src="<?php the_field('orange_down_arrow', 57);?>" alt=""/>
							</div>
							<div class="description">
								<h4>03&nbsp;&nbsp;<?php the_field('on_purpose',57);?></h4>
								<p><?php the_field('on_purpose_description',57);?></p>
							</div>
						</div>
					</div>
				</div>
			</div>


			<!-- Middle Section 3 -->
			<div class="mid-section-3 ceo">
				<div class="grid-container">
					<div class="grid-x">
						<div class="cell small-12 middle-4 large-4 ceo-img">
							<img src="<?php the_field('ceo_image', 57);?>" alt=""/>
						</div>
						<div class="cell small-12 middle-8 large-8 ceo-content">
							<h3><?php the_field('note_from_ceo',57);?></h3>
							<p>
								<?php the_field('note_from_ceo_text',57);?>
							</p>
							<p class="ceo-name">- <?php the_field('name_of_ceo',57);?></p>
						</div>
					</div>
				</div>
			</div>

			<!-- Footer Sections -->
			<footer>

				<!-- Brands -->
				<div class="footer-section-1">
					<div class="grid-container">
						<div class="grid-x">
							<div class="cell small-12 middle-12 large-12">
								<h3 class="text-center">
									<?php the_field('who_we_worked_with',57);?>
								</h3>
							</div>
							<div class="cell small-12 middle-12 large-12">
								<div class="brands-container">
									<ul>
										<li class="iex">
											<a href="#" class="brands " style="background-image: url('<?php the_field('brands', 57)?>');"></a>
										</li>
										<li class="glint">
											<a href="#" class="brands " style="background-image: url('<?php the_field('brands', 57)?>');"></a>
										</li>
										<li class="pepsi">
											<a href="#" class="brands " style="background-image: url('<?php the_field('brands', 57)?>');"></a>
										</li>
										<li class="mkg">
											<a href="#" class="brands " style="background-image: url('<?php the_field('brands', 57)?>');"></a>
										</li>
										<li class="mls">
											<a href="#" class="brands " style="background-image: url('<?php the_field('brands', 57)?>');"></a>
										</li>
										<li class="lulu">
											<a href="#" class="brands " style="background-image: url('<?php the_field('brands', 57)?>');"></a>
										</li>
										<li class="johnson">
											<a href="#" class="brands " style="background-image: url('<?php the_field('brands', 57)?>');"></a>
										</li>
										<li class="warby">
											<a href="#" class="brands " style="background-image: url('<?php the_field('brands', 57)?>');"></a>
										</li>
										<li class="madison">
											<a href="#" class="brands " style="background-image: url('<?php the_field('brands', 57)?>');"></a>
										</li>
										<li class="greatist">
											<a href="#" class="brands " style="background-image: url('<?php the_field('brands', 57)?>');"></a>
										</li>
										<li class="rich-talent-group">
											<a href="#" class="brands " style="background-image: url('<?php the_field('brands', 57)?>');"></a>
										</li>
										<li class="do-something">
											<a href="#" class="brands " style="background-image: url('<?php the_field('brands', 57)?>');"></a>
										</li>
										<li class="charlie-rose">
											<a href="#" class="brands " style="background-image: url('<?php the_field('brands', 57)?>');"></a>
										</li>
										<li class="sumail">
											<a href="#" class="brands " style="background-image: url('<?php the_field('brands', 57)?>');"></a>
										</li>
										<li class="we-work">
											<a href="#" class="brands " style="background-image: url('<?php the_field('brands', 57)?>');"></a>
										</li>
										<li class="timeshop">
											<a href="#" class="brands " style="background-image: url('<?php the_field('brands', 57)?>');"></a>
										</li>
										<li class="poppin">
											<a href="#" class="brands " style="background-image: url('<?php the_field('brands', 57)?>');"></a>
										</li>
									</ul>

								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Work With Us -->
				<div class="footer-section-2">
					<div class="grid-container">
						<div class="grid-x">
							<div class="cell small-12 middle-12 large-12 text-center">
								<h3 class="text-center">
									<?php the_field('work_with_us',57);?>
								</h3>
								<h4>
									<?php the_field('curious_text',57);?>
								</h4>
							</div>
						</div>
						<form>
							<div class="grid-x">
								<fieldset class="large-6 cell">

									<input type="text" placeholder="Name">
									<input type="text" placeholder="Title">
									<input type="text" placeholder="Email">
									<input type="text" placeholder="Company Website">

								</fieldset>
								<fieldset class="large-6 cell">
									<select name="area" style="background-image:url('<?php the_field('select_arrow_down', 57);?>');">
										<option value="">CULTURE INTEREST AREA</option>
										<option value="1">BUSINESS</option>
										<option value="2">AFFILIATE PROGRAM</option>
										<option value="3">FRIENDSHIP</option>
									</select>
									<select name="how-you-find-us" style="background-image:url('<?php the_field('select_arrow_down', 57);?>');">
										<option value="">HOW DID YOU FIND US</option>
										<option value="1">GOOGLE</option>
										<option value="2">SOME ONE TOLD YOU</option>
										<option value="3">SOCIAL NETWORKS</option>
									</select>
									<div class="bottom-check-box-container">
										<input type="checkbox" name="sign-me-up"><label class="special-checkbox-label" for="sign-me-up">YES, SIGN ME UP FOR UPDATES</label>
										<input type="submit" class="float-right" value="SEND" onclick="return false;"/>
									</div>
								</fieldset>
							</div>
						</form>
					</div>
				</div>

				<!-- Footer Section 3 -->

			</footer>

		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php
get_footer();
