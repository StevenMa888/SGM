<?php zerif_before_about_us_trigger(); ?>



<section class="about-us" id="aboutus">


	<script>
		function switchTab(tab) {
			var tabs = ["why-founded", "our-founder", "work-with-sgm"];
			tabs.forEach(function(t){
				if (t != tab) jQuery("." + t).hide();
				jQuery(".about-us .buttons button[name=" + t + "]").removeClass("active");
			});
			jQuery("." + tab).show();
			jQuery(".about-us .buttons button[name=" + tab + "]").addClass("active");
		}
	</script>

	<?php zerif_top_about_us_trigger(); ?>



	<div class="container">



		<div class="row">



			<div class="col-lg-6">



				<!-- SECTION HEADER -->

				<div class="why-founded">

					<div class="section-header">



						<?php



						/* Title */

						zerif_about_us_header_title_trigger();



						/* Subtitle */

						zerif_about_us_header_subtitle_trigger();



						?>



					</div><!-- / END SECTION HEADER -->



					<!-- 3 COLUMNS OF ABOUT US-->



					<div class="row">



						<!-- COLUMN 1 - BIG MESSAGE ABOUT THE COMPANY-->



					<?php



						$zerif_aboutus_biglefttitle 	= get_theme_mod('zerif_aboutus_biglefttitle',__('Everything you see here is responsive and mobile-friendly.','zerif-lite'));

						$zerif_aboutus_text 			= get_theme_mod('zerif_aboutus_text','Welcome, consectetur adipiscing elit. Nulla nec massa enim. Aliquam viverra at est ullamcorper sollicitudin. Proin a leo sit amet nunc malesuada imperdiet pharetra ut eros.<br><br> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec massa enim. Aliquam viverra at est ullamcorper sollicitudin. Proin a leo sit amet nunc malesuada imperdiet pharetra ut eros. <br><br>Mauris vel nunc at ipsum fermentum pellentesque quis ut massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas non adipiscing massa. Sed ut fringilla sapien. Cras sollicitudin, lectus sed tincidunt cursus, magna lectus vehicula augue, a lobortis dui orci et est.');



						$zerif_aboutus_feature1_title 	= get_theme_mod('zerif_aboutus_feature1_title',__('YOUR SKILL #1','zerif-lite'));

						$zerif_aboutus_feature1_text 	= get_theme_mod('zerif_aboutus_feature1_text');



						$zerif_aboutus_feature2_title 	= get_theme_mod('zerif_aboutus_feature2_title',__('YOUR SKILL #2','zerif-lite'));

						$zerif_aboutus_feature2_text 	= get_theme_mod('zerif_aboutus_feature2_text');



						$zerif_aboutus_feature3_title 	= get_theme_mod('zerif_aboutus_feature3_title',__('YOUR SKILL #3','zerif-lite'));

						$zerif_aboutus_feature3_text 	= get_theme_mod('zerif_aboutus_feature3_text');



						$zerif_aboutus_feature4_title 	= get_theme_mod('zerif_aboutus_feature4_title',__('YOUR SKILL #4','zerif-lite'));

						$zerif_aboutus_feature4_text 	= get_theme_mod('zerif_aboutus_feature4_text');



						$text_and_skills = '';

						switch (

							(empty($zerif_aboutus_biglefttitle) ? 0 : 1)

							+ (empty($zerif_aboutus_text) ? 0 : 1)

							+

								( empty($zerif_aboutus_feature1_title) && empty($zerif_aboutus_feature1_text) ?

								( empty($zerif_aboutus_feature2_title) && empty($zerif_aboutus_feature2_text) ?

								( empty($zerif_aboutus_feature3_title) && empty($zerif_aboutus_feature3_text) ?

								( empty($zerif_aboutus_feature4_title) && empty($zerif_aboutus_feature4_text) ?

								0 && $text_and_skills=''

								: 1 && $text_and_skills='text_and_skills' )

								: 1 && $text_and_skills='text_and_skills' )

								: 1 && $text_and_skills='text_and_skills' )

								: 1 && $text_and_skills='text_and_skills' )

							) {

							case 3:

								$colCount = 4;

								break;

							case 2:

								$colCount = 6;

								break;

							default:

								$colCount = 12;

						}



							if( !empty($zerif_aboutus_biglefttitle) ):



								echo '<div class="col-lg-' . $colCount . ' col-md-' . $colCount . ' column zerif-rtl-big-title">';



									echo '<div class="big-intro" data-scrollreveal="enter left after 0s over 1s">';



										echo wp_kses_post( $zerif_aboutus_biglefttitle );



									echo '</div>';



								echo '</div>';



							endif;



						if( !empty($zerif_aboutus_text) ):



							echo '<div class="col-lg-' . $colCount . ' col-md-' . $colCount . ' column ' . $text_and_skills . '" data-scrollreveal="enter bottom after 0s over 1s">';



								echo '<p>';



									echo wp_kses_post( $zerif_aboutus_text );



								echo '</p>';



							echo '</div>';



						endif;



						$there_is_skills = '';

						(

							!empty($zerif_aboutus_feature1_title) || !empty($zerif_aboutus_feature1_text) ? $there_is_skills='yes' :

							!empty($zerif_aboutus_feature2_title) || !empty($zerif_aboutus_feature2_text) ? $there_is_skills='yes' :

							!empty($zerif_aboutus_feature3_title) || !empty($zerif_aboutus_feature3_text) ? $there_is_skills='yes' :

							!empty($zerif_aboutus_feature4_title) || !empty($zerif_aboutus_feature4_text) ? $there_is_skills='yes' :

							$there_is_skills='');



						$zerif_aboutus_feature1_nr 	= get_theme_mod('zerif_aboutus_feature1_nr', '80');

						$zerif_aboutus_feature2_nr 	= get_theme_mod('zerif_aboutus_feature2_nr', '91');

						$zerif_aboutus_feature3_nr 	= get_theme_mod('zerif_aboutus_feature3_nr', '88');

						$zerif_aboutus_feature4_nr 	= get_theme_mod('zerif_aboutus_feature4_nr', '95');



						/* COLUMN 1 - SKILS */



						if ( $there_is_skills!='' ) :



					?>

						<div class="col-lg-<?php echo $colCount; ?> col-md-<?php echo $colCount; ?> column zerif-rtl-skills ">



							<ul class="skills" data-scrollreveal="enter right after 0s over 1s">



								<!-- SKILL ONE -->



								<?php if( !empty($zerif_aboutus_feature1_nr) || !empty($zerif_aboutus_feature1_title) || !empty($zerif_aboutus_feature1_text) ): ?>



								<li class="skill skill_1">



									<?php



										if( !empty($zerif_aboutus_feature1_nr) ):



											echo '<div class="skill-count">';



												echo '<input type="text" value="'.esc_attr( $zerif_aboutus_feature1_nr ).'" data-thickness=".2" class="skill1" tabindex="-1">';



											echo '</div>';



										endif;



										if( !empty($zerif_aboutus_feature1_title) ):

											echo '<div class="section-legend">'.wp_kses_post( $zerif_aboutus_feature1_title ).'</div>';

										elseif ( is_customize_preview() ):

											echo '<div class="section-legend zerif_hidden_if_not_customizer"></div>';

										endif;



										if( !empty($zerif_aboutus_feature1_text) ):

											echo '<p>'.wp_kses_post( $zerif_aboutus_feature1_text ).'</p>';

										elseif ( is_customize_preview() ):

											echo '<p class="zerif_hidden_if_not_customizer"></p>';

										endif;



									?>



								</li>



								<?php endif; ?>



								<!-- SKILL TWO -->



								<?php

									if( !empty($zerif_aboutus_feature2_nr) || !empty($zerif_aboutus_feature2_title) || !empty($zerif_aboutus_feature2_text) ):

								?>



								<li class="skill skill_2">



									<?php



										if( !empty($zerif_aboutus_feature2_nr) ):



											echo '<div class="skill-count">';



												echo '<input type="text" value="'.esc_attr( $zerif_aboutus_feature2_nr ).'" data-thickness=".2" class="skill2" tabindex="-1">';



											echo '</div>';



										endif;







										if( !empty($zerif_aboutus_feature2_title) ):

											echo '<div class="section-legend">'.wp_kses_post( $zerif_aboutus_feature2_title ).'</div>';

										elseif ( is_customize_preview() ):

											echo '<div class="section-legend zerif_hidden_if_not_customizer"></div>';

										endif;



										if( !empty($zerif_aboutus_feature2_text) ):

											echo '<p>'.wp_kses_post( $zerif_aboutus_feature2_text ).'</p>';

										elseif ( is_customize_preview() ):

											echo '<p class="zerif_hidden_if_not_customizer"></p>';

										endif;



									?>



								</li>



								<?php endif; ?>



								<!-- SKILL THREE -->

								<?php

									if( !empty($zerif_aboutus_feature3_nr) || !empty($zerif_aboutus_feature3_title) || !empty($zerif_aboutus_feature3_text) ):

								?>

								<li class="skill skill_3">



									<?php



										if( !empty($zerif_aboutus_feature3_nr) ):



											echo '<div class="skill-count">';



												echo '<input type="text" value="'.esc_attr( $zerif_aboutus_feature3_nr ).'" data-thickness=".2" class="skill3" tabindex="-1">';



											echo '</div>';



										endif;



										if( !empty($zerif_aboutus_feature3_title) ):

											echo '<div class="section-legend">'.wp_kses_post( $zerif_aboutus_feature3_title ).'</div>';

										elseif ( is_customize_preview() ):

											echo '<div class="section-legend zerif_hidden_if_not_customizer"></div>';

										endif;



										if( !empty($zerif_aboutus_feature3_text) ):

											echo '<p>'.wp_kses_post( $zerif_aboutus_feature3_text ).'</p>';

										elseif ( is_customize_preview() ):

											echo '<p class="zerif_hidden_if_not_customizer"></p>';

										endif;



									?>



								</li>



								<?php endif; ?>



								<!-- SKILL FOUR -->

								<?php

									if( !empty($zerif_aboutus_feature4_nr) || !empty($zerif_aboutus_feature4_title) || !empty($zerif_aboutus_feature4_text) ):

								?>



								<li class="skill skill_4">



									<?php



										if( !empty($zerif_aboutus_feature4_nr) ):



											echo '<div class="skill-count">';



												echo '<input type="text" value="'.esc_attr( $zerif_aboutus_feature4_nr ).'" data-thickness=".2" class="skill4" tabindex="-1">';



											echo '</div>';



										endif;



										if( !empty($zerif_aboutus_feature4_title) ):

											echo '<div class="section-legend">'.wp_kses_post( $zerif_aboutus_feature4_title ).'</div>';

										elseif ( is_customize_preview() ):

											echo '<div class="section-legend zerif_hidden_if_not_customizer"></div>';

										endif;



										if( !empty($zerif_aboutus_feature4_text) ):

											echo '<p>'.wp_kses_post( $zerif_aboutus_feature4_text ).'</p>';

										elseif ( is_customize_preview() ):

											echo '<p class="zerif_hidden_if_not_customizer"></p>';

										endif;



									?>



								</li>



								<?php endif; ?>



							</ul>



						</div> <!-- / END SKILLS COLUMN-->



						<?php endif; ?>



					</div> <!-- / END 3 COLUMNS OF ABOUT US-->

				</div>

			<!-- CLIENTS -->

			<?php

				if(is_active_sidebar( 'sidebar-aboutus' )):

					echo '<div class="our-clients">';

						echo '<h2><span class="section-footer-title">'.__('OUR HAPPY CLIENTS','zerif-lite').'</span></h2>';

					echo '</div>';



					echo '<div class="client-list">';

						echo '<div data-scrollreveal="enter right move 60px after 0.00s over 2.5s">';

						dynamic_sidebar( 'sidebar-aboutus' );

						echo '</div>';

					echo '</div> ';

				endif;

			?>

				<div class="our-founder">

						<div class="section-header">

							<h2 class="white-text">Michelle Miller Grooves, Ed.D.</h2>
							<div class="white-text section-legend">Committed to empowering local entrepreneurs</div>

						</div>

						<div class="row">

							<div class="col-lg-12 col-md-12 column " data-scrollreveal="enter bottom after 0s over 1s" data-sr-init="true" data-sr-complete="true">
								<p>Michelle Miller Groves earned her Doctor of Education in Interdisciplinary Leadership from Creighton University. As a former adjunct lecturer of Advertising, Public Relations, Marketing and Communications, Dr. Miller Groves taught for various universities around Boston including Suffolk University, New England Institute of Art, Fisher College and Northeastern University. She holds a Masters of Communications from Suffolk University, which she completed in 2008. While lecturing, she noticed that students wanted meaningful marketing internships; and that nonprofits and small businesses could use internship assistance. After multiple iterations, she founded Social Good Marketing to assist both aforementioned groups. Meanwhile, Dr. Miller Groves expanded her service portfolio to include media relations work, thanks to Kelley Chunn & Associates, Inc. Dr. Miller Groves continues to establish herself in the community by surrounding herself with self-motivated, seasoned entrepreneurs who have a desire for social change.
								<br>
								<br>
								Dr. Miller Groves regularly volunteers her time with various organizations around Boston. Having been rooted in the Boston Latin School Step Squad, she started the Suffolk University Step Team during her college years and it is still in existence today. Fast forward to 2012 when Dr. Miller Groves served as Publicity Committee Chair for the Boston Chapter of the Spelman College Alumnae's 6th Annual Blueprint Conference for Middle & High School Girls, and as Talent Show Committee member for the BELL Foundation. In 2013, she served as a Roundtable Presenter for The Freedom House’s Road to Success program. In 2014, Dr. Miller Groves received the opportunity to present social media strategies and techniques to over 35 non-profits supported by the Lenny Zakim Fund. And in 2015, she was a Roundtable Speaker for the Massachusetts Conference for Women. If Dr. Miller Groves is afforded the opportunity to pay it forward using her skills sets, she does. It's her life's ultimate purpose.</p>
							</div>

						</div>

				</div>



				<div class="work-with-sgm">

					<div class="section-header">

							<h2 class="white-text">Team Up With Us</h2>
							<div class="white-text section-legend">Tap into our marketing knowledge</div>

						</div>

						<div class="row">

							<div class="col-lg-12 col-md-12 column " data-scrollreveal="enter bottom after 0s over 1s" data-sr-init="true" data-sr-complete="true">
								<p>Michelle speaks!
									<br>
									<br>
									Michelle has spoken at the Northeastern University Millennial Conference (workshop presenter); The National Association of Black Journalists Conference (panelist); The Lenny Zakim Fund (social media and media relations training and workshop presenter); The Massachusetts Conference for Women (Roundtable Speaker) and many other places.
									<br>
									<br>
									Email us at president.sgminc@gmail.com if you’d like Social Media Marketing, Media Relations, or Public Speaking training.
									<br>
									<br>
									To schedule a speaking engagement, please email president.sgminc@gmail.com.
									<br>
									<br>
									<br>
									Partner with us:
									<br>
									<br>
									At SGM, we use a collaborative business model. We collaborate with web designers, graphic designers, videographers, multicultural marketing professionals and event planners to provide clients with optimal services. Our partners are experienced, reliable professionals who take great pride in their work so rest assured that you’re in good hands. We can also collaborate with our clients when the opportunity arises!
									<br>
									<br>
									For more information on partnership opportunities, please email president.sgminc@gmail.com.
									<br>
									<br>
									<br>
									Intern with us:
									<br>
									<br>
									SGM proudly works college juniors and seniors as interns to provide them with quality work experiences. This helps to make the candidate more marketable to employers before they even graduate college. Additionally, the intern’s assigned organization has the opportunity to hire the intern afterwards. Finally, college interns can receive academic course credit for their work.
									<br>
									<br>
									If you’re interested in an internship opportunity, please send your resume to info.sgminc@gmail.com.
								</p>
							</div>

						</div>

				</div>



			</div> <!-- / END LEFT TEXT -->



			<div class="col-lg-6">

				<div class="why-founded"><iframe width="560" height="315" src="https://www.youtube.com/embed/xvNR32gql2U" frameborder="0" allowfullscreen></iframe></div>

				<div class="our-founder"><img src="http://marketingsocialgood.com/wp-content/uploads/2016/07/Social_Good_-_Michelle_Miller_Groves_big_t580.jpg"></div>

				<div class="work-with-sgm">
					<img src="http://marketingsocialgood.com/wp-content/uploads/2016/07/SGM_Interns.jpeg">
					<p>Past clients and collaborators</p>
				</div>

			</div>



		</div>



	</div> <!-- / END CONTAINER -->



	<?php zerif_bottom_about_us_trigger(); ?>


	<div class="buttons">
		<button class="active" name="why-founded" onclick=switchTab("why-founded")>Why SGM was founded</button>
		<button name="our-founder" onclick=switchTab("our-founder")>Our founder</button>
		<button name="work-with-sgm" onclick=switchTab("work-with-sgm")>Work with SGM</button>
	</div>


</section> <!-- END ABOUT US SECTION -->



<?php zerif_after_about_us_trigger(); ?>