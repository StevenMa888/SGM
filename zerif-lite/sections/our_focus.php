<?php zerif_before_our_focus_trigger(); ?>



<section class="focus" id="focus">

  <script>
  jQuery(document).ready(function($){
    $( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
    $( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
  });
  </script>


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
			    <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
			  </div>
			  <div id="tabs-3">
			    <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
			  </div>
			</div>
		</div>



	</div> <!-- / END CONTAINER -->



	<?php zerif_bottom_our_focus_trigger(); ?>



</section>  <!-- / END FOCUS SECTION -->



<?php zerif_after_our_focus_trigger(); ?>