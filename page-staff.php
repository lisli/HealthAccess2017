<?php
/**
 * Template Name: Staff Page
 * 
 * @package Health_Access2017
 */

get_header(); ?>

<div class="breadcrumb"><?php get_breadcrumb(); ?></div>

<section id="primary" role="main" class="col pull-left s_span_8">

		<?php if( have_rows('staff') ): ?>

		<ul class="staff">

		<?php while( have_rows('staff') ): the_row(); 

			// vars
			$name = get_sub_field('name');
			$title = get_sub_field('title');
			$phone = get_sub_field('phone_number');
			$email = get_sub_field('email_address');
			$bio = get_sub_field('bio');
			$headshot = get_sub_field('headshot');

			?>

			<li class="staff-member">

				<img class="xs_span_2" src="<?php echo $headshot; ?>" alt="<?php echo $name ?>" />
				<div class="staff-info">
					<h4><?php echo $name; ?></h4>
					<p><?php echo $title; ?></p>
					<p><?php echo $phone; ?></p>
					<a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
					<button>Read Bio<i class="fa fa-plus" aria-hidden="true"></i></button>
				    <p class="bio"><?php echo $bio; ?></p>

				</div>
			</li>

		<?php endwhile; ?>

		</ul>

	<?php endif; ?>

</section><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>