<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="footer-section-3">
			<div class="grid-container">

				<ul>
					<li class="sign-up-button-container">
						<a href="#">
							SIGN UP FOR OUR NEWSLETTER
						</a>
					</li>
					<li class="social-icons-container">
						<a href="<?php the_field('facebook',57);?>">
							<img class="top-social-link-img fb" src="<?php echo get_field('facebook_icon', 57);?>" alt=""/>
							<img class="top-social-link-img fb grey" src="<?php echo get_field('facebook_icon_grey', 57);?>" alt=""/>
						</a>
						<a href="<?php the_field('instagram',57);?>">
							<img class="top-social-link-img inst" src="<?php echo get_field('instagram_icon', 57);?>" alt=""/>
							<img class="top-social-link-img inst grey" src="<?php echo get_field('instagram_icon_grey', 57);?>" alt=""/>
						</a>
						<a href="<?php the_field('twitter',57);?>">
							<img class="top-social-link-img twt" src="<?php echo get_field('twitter_icon', 57);?>" alt=""/>
							<img class="top-social-link-img twt grey" src="<?php echo get_field('twitter_icon_grey', 57);?>" alt=""/>
						</a>
						<a href="<?php the_field('linkedin',57);?>">
							<img class="top-social-link-img in" src="<?php echo get_field('linkedin_icon', 57);?>" alt=""/>
							<img class="top-social-link-img in grey" src="<?php echo get_field('linked_in_icon_grey', 57);?>" alt=""/>
						</a>
						<a href="<?php the_field('pinterest',57);?>">
							<img class="top-social-link-img pint" src="<?php echo get_field('pinterest_icon', 57);?>" alt=""/>
							<img class="top-social-link-img pint grey" src="<?php echo get_field('pinterest_icon_grey', 57);?>" alt=""/>
						</a>
					</li>
					<li>
						<span><?php the_field('footer_slogan',57);?></span> | <span><?php the_field('design_by',57);?></span>
					</li>
				</ul>

			</div>
		</div>
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
