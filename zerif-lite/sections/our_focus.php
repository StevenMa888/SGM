<?php zerif_before_our_focus_trigger(); ?>



<section class="focus" id="focus">

  <script>
  jQuery(document).ready(function($){
    $( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
    $( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
  });
  </script>

  <style>
  .ui-tabs-vertical { width: 55em; }
  .ui-tabs-vertical .ui-tabs-nav { padding: .2em .1em .2em .2em; float: left; width: 12em; }
  .ui-tabs-vertical .ui-tabs-nav li { clear: left; width: 100%; border-bottom-width: 1px !important; border-right-width: 0 !important; margin: 0 -1px .2em 0; }
  .ui-tabs-vertical .ui-tabs-nav li a { display:block; }
  .ui-tabs-vertical .ui-tabs-nav li.ui-tabs-active { padding-bottom: 0; padding-right: .1em; border-right-width: 1px; }
  .ui-tabs-vertical .ui-tabs-panel { padding: 1em; float: right; width: 40em;}
  </style>


	<?php zerif_top_our_focus_trigger(); ?>



	<div class="container">



		<!-- SECTION HEADER -->



		<div class="section-header">



			<!-- SECTION TITLE AND SUBTITLE -->



			<?php



			/* Title */

			zerif_our_focus_header_title_trigger();



			/* Subtitle */

			zerif_our_focus_header_subtitle_trigger();



			?>



		</div>



		<div class="row">
			<div id="tabs">
			  <ul>
			    <li><a href="#tabs-1">Branding</a></li>
			    <li><a href="#tabs-2">Media Relations</a></li>
			    <li><a href="#tabs-3">Social Media Marketing</a></li>
			  </ul>
			  <div id="tabs-1">
			    <p>No need to lecture. Just answer the following questions:</p>
			    <p>1. What are the top three things you want people to think about when they hear your brand name?</p>
			    <p>2. What do you want people to remember about your brand?</p>
			    <p>3. What do people actually recall?</p>
			    <p>If you’re struggling to answer these questions, we can help!.</p>
			  </div>
			  <div id="tabs-2">
			    <p>We write the kind of press releases that don’t make editors cringe. We don’t waste their time on the phone or in social, so we’re very specific with our approach. We help you get noticed for the right reasons. Then, we blend in social media marketing to enhance our outreach.</p>
			  </div>
			  <div id="tabs-3">
			    <p>Real-time Posting:<br>How many times have you hosted an event and you didn’t have anyone posting to your social media pages during the event? We do that! We attend your event and take photos of the VIPs, the crowd, the speeches and we post during your event so everything is captured in real time! Hire us for your next event and watch your social media engagement increase dramatically!</p>
					<p> </p>
					<p>Scheduled:<br>We write the content that increases engagement. Some firms are worried about increased likes or followers. But, what good is having 10,000 followers if none of them react to your posts? We work with you to create an editorial calendar, timely and strategic social media posts, and to setup a Hootsuite account for automated scheduling. If you don’t have the time or capacity to tweet – we do!</p>
			  </div>
			</div>
		</div>



	</div> <!-- / END CONTAINER -->



	<?php zerif_bottom_our_focus_trigger(); ?>



</section>  <!-- / END FOCUS SECTION -->



<?php zerif_after_our_focus_trigger(); ?>