<?php
/**
 * Template for displaying instructor of single course.
 *
 * This template can be overridden by copying it to yourtheme/learnpress/single-course/instructor.php.
 *
 * @author   ThimPress
 * @package  Learnpress/Templates
 * @version  3.0.0
 */

/**
 * Prevent loading this file directly
 */
defined( 'ABSPATH' ) || exit();

$course = LP_Global::course();
?>

<div class="course-author">

	<div class="course-author-content">
		<?php echo $course->get_instructor()->get_profile_picture(); ?>
		<div class="author-contain">
			<label itemprop="jobTitle"><?php esc_html_e( 'Teacher', 'eduma' ); ?></label>

			<div class="value" itemprop="name">
				<?php echo $course->get_instructor_html(); ?>
			</div>
		</div>
	</div>
</div>