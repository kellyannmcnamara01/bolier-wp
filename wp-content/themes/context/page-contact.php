<!-- Head
============================================= -->
<?php get_header(); ?>


	<!-- Header
    ============================================= -->
    <?php get_template_part( 'partials/layout/header', 'post' ); ?>



	<!-- Content
	============================================= -->
	<section id="main-content" style="padding: 30px; background: chartreuse;">




		<!-- Form
		=============================================
		*
		* Source: https://webaim.org/techniques/forms/controls
		*
		* Accessibility Form Notes to Follow
		*
		* As suggested on webaim, inputs should not be wrapped in labels, but rather have an id that matches a label's for att.
		* Form fields collecting certain types of user-specific information need appropriate autocomplete attributes to identify input purpose. Learn More -> https://www.w3.org/TR/WCAG21/#input-purposes 
		* Applying the aria-required="true" attribute to a form control will cause screen readers to announce "required" along with the label. No validation or "enforcement" mechanism comes along with this attribute, and it has no visual impact.
		* Fieldset and legend should only be used when a higher-level label is necessary.
		* Avoid using multiple-select menus
		* Screen readers announce the nested text for <button> elements, and the value attribute for input buttons. Form buttons must never be empty.
		* Reset buttons should not be used unless specifically needed, because they are easy to click by mistake. Learn More -> https://www.nngroup.com/articles/reset-and-cancel-buttons/
		* Image buttons (<input type="image">) must have equivalent alt text. Otherwise, screen reader users will just hear "button", with no indication of what the button does.
		============================================= -->

		<div class="row">
			<div class="col-xs-12">
				<form class="row" style="padding: 30px; background: darkviolet; color: #fff;">




					<!-- Text Input Example
					============================================= -->
					<div class="form-field col-xs-4">
						<label for="name">Name:</label>
						<input type="text" name="name" id="name" autocomplete="name" required aria-required="true">
					</div>




					<!-- Email Input Example
					============================================= -->
					<div class="form-field col-xs-4">
						<label for="email">Email:</label>
						<input type="email" name="email" id="email" autocomplete="email">
					</div>




					<!-- Phone Input Example
					============================================= -->
					<div class="form-field col-xs-4">
						<label for="phone">Phone:</label>
						<input type="tel" name="phone" id="phone" autocomplete="tel">
					</div>




					<!-- Url Input Example
					============================================= -->
					<div class="form-field col-xs-4">
						<label for="url">Url:</label>
						<input type="url" name="url" id="url">
					</div>




					<!-- Number Input Example
					============================================= -->
					<div class="form-field col-xs-4">
						<label for="number">Number:</label>
						<input type="number" name="number" id="number">
					</div>




					<!-- Range Input Example
					============================================= -->
					<div class="form-field col-xs-4">
						<label for="range">Range:</label>
						<input type="range" name="range" id="range">
					</div>




					<!-- Color Input Example
					============================================= -->
					<div class="form-field col-xs-4">
						<label for="color">Color Field:</label>
						<input type="color" name="color" id="color">
					</div>




					<!-- Password Input Example
					============================================= -->
					<div class="form-field col-xs-4">
						<label for="password">Password:</label>
						<input type="password" name="password" id="password">
					</div>




					<!-- Date Input Example
					============================================= -->
					<div class="form-field col-xs-4">
						<label for="date">Date:</label>
						<input type="date" name="date" id="date">
					</div>




					<!-- Time Input Example
					============================================= -->
					<div class="form-field col-xs-4">
						<label for="time">Time:</label>
						<input type="time" name="time" id="time">
					</div>




					<!-- Checkboxes within Fieldset
					============================================= -->
					<div class="form-field col-xs-6">
						<fieldset>
							<legend>Checkboxes in fieldset</legend>
							<input type="checkbox" name="red" id="red" value="red">
							<label for="red">Red</label>
							<input type="checkbox" name="yellow" id="yellow" value="yellow">
							<label for="yellow">Yellow</label>
							<input type="checkbox" name="blue" id="blue" value="blue">
							<label for="blue">Blue</label>
						</fieldset>
					</div>




					<!-- Radios within Fieldset
					============================================= -->
					<div class="form-field col-xs-6">
						<fieldset>
							<legend>Radios in fieldset</legend>
							<input type="radio" name="orange" id="orange" value="orange">
							<label for="orange">Orange</label>
							<input type="radio" name="green" id="green" value="green">
							<label for="green">Green</label>
							<input type="radio" name="purple" id="purple" value="purple">
							<label for="purple">Purple</label>
						</fieldset>
					</div>




					<!-- Select Example
					============================================= -->
					<div class="form-field col-xs-6">
						<label for="colours">Select Example</label>
						<select id="colours" name="colours">
							<option value="red">Red</option>
							<option value="yellow">Yellow</option>
							<option value="blue">Blue</option>
							<option value="orange">Orange</option>
							<option value="green">Green</option>
							<option value="purple">Purple</option>
						</select>
					</div>




					<!-- Select Example with Grouping
					============================================= -->
					<div class="form-field col-xs-6">
						<label for="colours2">Select Example with Grouping</label>
						<select id="colours2" name="colours2">
							<optgroup label="Primary">
								<option value="red">Red</option>
								<option value="yellow">Yellow</option>
								<option value="blue">Blue</option>
							</optgroup>
							<optgroup label="Secondary">
								<option value="orange">Orange</option>
								<option value="green">Green</option>
								<option value="purple">Purple</option>
							</optgroup>
						</select>
					</div>




					<!-- Buttons
					============================================= -->
					<input type="submit" name="submit" value="Submit Search">
					<input type="reset" name="reset" value="Reset">
					<button>Activate</button>s


				</form>
			</div>
		</div>

		<!-- IMPORTANT: include clear float below every row -->
        <div class="clear-float"></div>




		<div class="row">
			

			<!-- Page Content
			============================================= -->
			<main class="post-content col-xs-8" style="background: gold; color: white; padding: 30px; font-size: 16px;">

				<?php
					while( have_posts() ){
						the_post();

						global $post;
						$author_ID		= $post->post_author;
						$author_URL		= get_author_posts_url( $author_ID );

						?>


						<!-- Page Content Content
						============================================= -->
						<div class="post-content__content" style="padding: 30px; background: darkorange;">
							<?php the_content(); ?>

							<!-- wp_link_pages
							============================================= -->
							<?php get_template_part( 'partials/functions/wp-link-pages' ); ?>
							<!-- wp_link_pages [END] -->
							
						</div>
						<!-- Page Content Content [END] -->



						<!-- Comments
						============================================= -->
						<?php 
							if( comments_open() || get_comments_number() ){
								comments_template(); 
							}
						?>
						<!-- Comments [END] -->

						<?php
					}

				?>

			</main>
			<!-- Page Content [END] -->

			<?php get_sidebar(); ?>

			
		</div>

        <!-- IMPORTANT: include clear float below every row -->
        <div class="clear-float"></div> 
        
	</section>
	<!-- Content [END] -->

<!-- Footer
============================================= -->
<?php get_footer(); ?>