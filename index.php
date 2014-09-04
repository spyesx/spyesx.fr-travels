<?php
	include('php/config.php');

	require_once('php/dates.lib.php');
	require_once('php/countries.datas.php');
	require_once('php/countries.controller.php');

	$countries = new Countries_Controller($datas_countries);
	$sortered_countries = $countries->sorter_categories();
?>

<!DOCTYPE html>
<!--
	Nicolas Bages - spyesx
	nicolas.bages@weinto.com
	www.spyesx.fr
-->
<html prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#" class="no-js" lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<title>Nico's travels and more.</title>
		<meta name="dcterms.rightsHolder" content="spyesx, Nicolas Bages." />
		<meta name="dcterms.dateCopyrighted" content="2011-2014">
		<meta name="dcterms.rights" content="Statement of copyright">
		<meta name="keywords" content="time, dates, spyesx" />
		<meta name="description" lang="" content="Time is the longest distance between two places. ~tennessee williams" />
		<meta name="revisit-after" content="7 days" />
		<meta name="robots" content="index, follow" />
		<link rel="canonical" href="http://spyesx.fr/travels/" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link type="text/css" href="<?php echo ENV; ?>/css/vendors/foundation/foundation.min.css" rel="stylesheet" media="screen" />
		<link type="text/css" href="<?php echo ENV; ?>/css/app/style.css" rel="stylesheet" media="screen" />

		<meta property="og:title" content="Nico's travels" />
		<meta property="og:description" content="I travel for the silence, the light and the smell. I travel to understand and to be understood." />
		<meta property="og:image" content="http://spyesx.fr/travels/assets/img/nicolas_bages_nepal_anapurnas.jpg" />
		<meta property="og:url" content="http://spyesx.fr/travels/" />
		<meta property="og:type" content="website" />
		<meta property="og:site_name" content="Nico's travels" />

	</head>
	<body>

		<div class="magellan-container" data-magellan-expedition="fixed" data-options="destination_threshold:65;throttle_delay:0;">
		  <dl class="sub-nav">
		  	<dt></dt>
		    <dd data-magellan-arrival="about"><a href="#about">About</a></dd>
		    <dd data-magellan-arrival="contact"><a href="#contact">Contact</a></dd>
		    <dd data-magellan-arrival="where-I-am-now"><a href="#where-I-am-now">Now</a></dd>
		    <dd data-magellan-arrival="where-I-planned-to-go"><a href="#where-I-planned-to-go">Tomorrow</a></dd>
		    <dd data-magellan-arrival="where-I-want-to-go-or-go-back"><a href="#where-I-want-to-go-or-go-back">Wishes</a></dd>
		    <dd data-magellan-arrival="where-I-have-been"><a href="#where-I-have-been">Yesterday</a></dd>
		    <dd data-magellan-arrival="you-know-youre-a-traveler-when"><a href="#you-know-youre-a-traveler-when">Traveler?</a></dd>
		    <dd data-magellan-arrival="tools"><a href="#tools">Tools</a></dd>
		    <dd data-magellan-arrival="comments"><a href="#comments">Your voice</a></dd>
		  </dl>
		</div>

		<div id="body" class="page">

			<article class="row">
				<div class="columns large-12">
					<header>
							<p><a name="about"></a></p>
							<h1 data-magellan-destination="about">
								Hello I'm <a href="http://spyesx.fr">Nico</a>', a french travel lover :)
							</h1>
							<figure>
								<img src="<?php echo ENV; ?>/img/nicolas_bages_nepal_anapurnas.jpg" width="100%" alt="Annapurna, Nepal">
							</figure>
					</header>
					<section class="socialnetwork-share socialnetwork-share-top">
						<!-- AddThis Button BEGIN -->
						<div class="addthis_toolbox addthis_default_style ">
						<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
						<a class="addthis_button_tweet"></a>
						<a class="addthis_button_google_plusone" g:plusone:layout="button_count"></a>
						<a class="addthis_counter addthis_pill_style"></a>
						</div>
						<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
						<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=spyesx"></script>
						<!-- AddThis Button END -->
					</section>

					<p>
						My long term travels started by Australia and a van in 2008. The experience I had there 
						changed my life forever. I can't stop thinking that we have so much to see, so much to live, 
						so much to experience and finally so much to learn on ourself and on the world.
					</p>

					<p>
						I wanted to learn and to work so I started by a point. I drew a route on the 
						globe by being in search of my life and my future, learning about myself as much as I learned about others. 
						Today I have the feeling that I found a lot. Guess what! It makes me want to explore even more.
					</p>

					<p>
						I travel for the silence, the light and the smell. I travel to understand and to be understood. 
						I don't travel for a map. Not anymore.
					</p>

					<p>
						People often say "I travel to meet people, to talk to people" like they are going to the 
						zoo and the locals are the animals. I travel to observe people and the nature facing 
						their daily life to find ways to improve ours.
					</p>

					<p>
						As a <abbr title="User eXperience">UX</abbr> designer, I apply the methods and process I use 
						every day to find new ideas and new solutions to solve new problems. It's amazing how impressive it is 
						to discover a new point of view. 
					</p>

					<p>
						On the top of that you might think I did everything by myself. Travels are made of unexpected encounters 
						even though I figured out that everything happens when you need it. I couldn't say "I did this" 
						without mentioning and thanking eveyone I meet on the road. Without human interactions I think I'd still 
						be trying to find who I am.
					</p>

					<p>
						That's why I'd love to meet you, your friends, your family, your work, your hobbies or everything you'd 
						like to share! If you are interested in meeting me, if you think we have something to share, please, have a 
						look at the list bellow and send me a place to go by mail at nicolas.bages@spyesx.fr or directly from 
						<a href="https://www.couchsurfing.org/profile.html?id=FMAGLLP" class="couchsurfing-link">
							<img src="<?php echo ENV; ?>/img/cs-icon.png" alt="Nicolas's CS profile" width="20" />
							couchsurfing
						</a>. Be careful anyway. We could become friends!
					</p>

					<section>
						<p>
							Time before my come back to France : <?php echo diffDate('2014-05-17 01:30:00', 'Europe/Paris'); ?>
						</p>
					</section>

					<section id="nationalgeographic-contest">
						<header>
							<h2>
								<img src="<?php echo ENV; ?>/img/ng_traveler_logo_2014.png" alt="National Geographic Photo Contest 2014">
							</h2>
						</header>
						<p>
							I submitted 2 photos for the National Geographic Photo Contest 2014. 
							The result will be known in June. Check this out! Share! Like!
						</p>
						<figure class="columns large-6">
							<figcaption>
								Intha fisherman on Inle lake
							</figcaption>
							<a href="http://travel.nationalgeographic.com/travel/traveler-magazine/photo-contest/2014/entries/244411/view/">
								<img src="http://travel.nationalgeographic.com/u/TvyamNb-BivtNwcoxtkc5xGBuGkIMh_nj4UJHQKuoXEuxL4n6WqdQpCelJGdEb-2qdsLWxa_je0B0A/" alt="Intha fisherman on Inle lake">
							</a>
						</figure>
						<figure class="columns large-6">
							<figcaption>
								Humanlike
							</figcaption>
							<a href="http://travel.nationalgeographic.com/travel/traveler-magazine/photo-contest/2014/entries/244419/view/">
								<img src="http://travel.nationalgeographic.com/u/TvyamNb-BivtNwcoxtkc5xGBuGkIMh_nj4UJHQKuoXEuxL0vBc4u7aJ6RkiT0iG7OlHXJpV749SyPw/" alt="Humanlike">
							</a>
						</figure>
						<div class="clear">&nbsp;</div>
						<p><a href="http://travel.nationalgeographic.com/travel/traveler-magazine/photo-contest/2014/entries/gallery/winners-winners/">The result is online :)</a></p>
						<p>
							The Intha fisherman has been selected on the second week by National Geographic. Thank to all of you for your votes and 
							support until the last second! Unfortunately we didn't win this year. Be sure I'll propose a new photo in 2015!
						</p>
					</section>

					<div class="clear">&nbsp;</div>
				</div>
				<div class="clear">&nbsp;</div>
			</article>
			

			<article class="row">
				<div class="columns large-12">
					<header>
						<p><a name="contact"></a></p>
						<h2 data-magellan-destination="contact">How to contact me?</h2>
					</header>
					<ul id="social-networks">
						<li><a href="https://www.facebook.com/spyesx"><img src="<?php echo ENV; ?>/img/facebook-icon.png" width="20" alt="Nicolas's Facebook profile" /> Facebook</a></li>
						<li><a href="https://www.couchsurfing.org/profile.html?id=FMAGLLP"><img src="<?php echo ENV; ?>/img/cs-icon.png" width="20" alt="Nicolas's CS profile" /> CouchSurfing</a></li>
						<li><a href="http://www.flickr.com/photos/spyesx/"><img src="<?php echo ENV; ?>/img/flickr-icon.png" width="20" alt="Nicolas's Fickr profile" /> Flickr</a></li>
						<li><a href="mailto:nicolas.bages@spyesx.fr"><img src="<?php echo ENV; ?>/img/mail-icon.png" width="20" alt="Nicolas's email" /> eMail</a></li>
					</ul>
					<div class="clear">&nbsp;</div>
				</div>
				<div class="clear">&nbsp;</div>
			</article>

			<article class="row route">
				<div class="columns large-12">
					<header>
						<p><a name="where-I-am-now"></a></p>
						<h2 data-magellan-destination="where-I-am-now">Where I am now</h2>
					</header>
					<p>
						The world tour is done! 19 month on the road :)
						Since I'm back to Europe, projects made me think about a Europe tour started in July 2014!
						As usual, this trip isn't about going somewhere, take some pictures 
						and leave as fast as I came. I want to discover new sport, local cooking, stories and more. 
						It's also about to meet you, your friends, your lifestyle and why not your job.
					</p>
					<?php echo $countries->listing($sortered_countries['now']); ?>

					<section class="socialnetwork-share socialnetwork-share-contact">
						<!-- AddThis Button BEGIN -->
						<div class="addthis_toolbox addthis_default_style ">
						<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
						<a class="addthis_button_tweet"></a>
						<a class="addthis_button_google_plusone" g:plusone:layout="button_count"></a>
						<a class="addthis_counter addthis_pill_style"></a>
						</div>
						<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
						<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=spyesx"></script>
						<!-- AddThis Button END -->
					</section>
					<div class="clear">&nbsp;</div>

				</div>
				<div class="clear">&nbsp;</div>
			</article>

			<article class="row route">
				<div class="columns large-12">
					<header>
						<p><a name="where-I-planned-to-go"></a></p>
						<h2 data-magellan-destination="where-I-planned-to-go">Where I planned to go</h2>
					</header>
					<p>
						I'd love to meet you and hangout. Please 
						<span data-magellan-arrival="contact"><a href="#contact">contact me</a></span>.
						<br />
						Dates are supposed to change without prior notice. It's up to you to contact me early enough!
					</p>
					<?php echo $countries->listing($sortered_countries['plan']); ?>
					<div class="clear">&nbsp;</div>
				</div>
				<div class="clear">&nbsp;</div>
			</article>

			<article class="row route">
				<div class="columns large-12">
					<header>
						<p><a name="where-I-want-to-go-or-go-back"></a></p>
						<h2 data-magellan-destination="where-I-want-to-go-or-go-back">Where I want to go or go back</h2>
					</header>
					<?php echo $countries->listing($sortered_countries['wish']); ?>
					<p>
						Please <span data-magellan-arrival="contact"><a href="#contact">contact me</a></span> 
						if you'd like me to visit you in a country not listed above.
					</p>
				</div>
				<div class="clear">&nbsp;</div>
			</article>

			<article class="row route">
				<div class="columns large-12">
					<header>
						<p><a name="where-I-have-been"></a></p>
						<h2 data-magellan-destination="where-I-have-been">Where I've been</h2>
					</header>
					<?php echo $countries->listing($sortered_countries['past'], false); ?>
					<div class="clear">&nbsp;</div>
				</div>
				<div class="clear">&nbsp;</div>
				<figure  class="map">
					<img src="http://chart.apis.google.com/chart?cht=map:fixed=-70,-180,80,180&chs=450x300&chf=bg,s,336699&chco=d0d0d0,cc0000&chd=s:999999999999999999999999999999999&chld=AT|FR|IE|IT|MC|ES|CH|GB|BO|AR|BR|CA|PE|KH|IN|JP|LA|MY|MM|NP|PH|SG|KR|TW|TH|VN|AU|NZ|NL|MX|US|PT|VA" width="450" height="300" >
					<figcaption>
						Visited 33 states (14.6%)<br/>
						<a href="http://douweosinga.com/projects/visited?region=world">Create your own visited map of The World</a>
					</figcaption>
				</figure>
			</article>

			<article class="row">
				<div class="columns large-12">
					<header>
						<p><a name="you-know-youre-a-traveler-when"></a></p>
						<h2 data-magellan-destination="you-know-youre-a-traveler-when">You know you are a traveler when</h2>
					</header>

					<p>
						Lexie Koss and I started this list when we were on a bus in Cambodia. It was a 7h journey from Kratie to  Kampong Cham. At the begining it was just a way 
						to spend time on something fun. As she left to go back home I kept writing it on the road.
					</p>

					<ol>
						<?php
							include('php/you_now_you_are_a_traveler_when.php');
							$html_evidences = '';
							foreach ($traveler_evidences as $evidence) {
								$html_evidences .= '<li>'.$evidence.'</li>';
							}
							echo $html_evidences;
						?>
					</ol>
					<div class="clear">&nbsp;</div>
				</div>
				<div class="clear">&nbsp;</div>
			</article>

			<article class="row">
				<div class="columns large-12">
					<header>
						<p><a name="tools"></a></p>
						<h2 data-magellan-destination="tools">Tools</h2>
					</header>
					<ul>
						<li><a href="iata_icao_codes">IATA &amp; ICAO Codes</a></li>
						
					</ul>
					<div class="clear">&nbsp;</div>
				</div>
				<div class="clear">&nbsp;</div>
			</article>


			<article class="row">
				<div class="columns large-12">
					<header>
						<p><a name="comments"></a></p>
						<h2 data-magellan-destination="comments">Your voice!</h2>
					</header>

					<p>Let's add a public place to talk!</p>

					<p>
						“Your voice” is available since the 15th of June, 2014. Feel free to give advises, comments, contacts, feebacks and more.
					</p>

					<section class="socialnetwork-share socialnetwork-share-top">
						<!-- AddThis Button BEGIN -->
						<div class="addthis_toolbox addthis_default_style ">
						<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
						<a class="addthis_button_tweet"></a>
						<a class="addthis_button_google_plusone" g:plusone:layout="button_count"></a>
						<a class="addthis_counter addthis_pill_style"></a>
						</div>
						<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
						<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=spyesx"></script>
						<!-- AddThis Button END -->
					</section>

				    <div id="disqus_thread"></div>
				    <script type="text/javascript">
				        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
				        var disqus_shortname = 'spyesxfr'; // required: replace example with your forum shortname

				        /* * * DON'T EDIT BELOW THIS LINE * * */
				        (function() {
				            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
				            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
				            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
				        })();
				    </script>
				    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
				    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
				    

					<div class="clear">&nbsp;</div>
				</div>
				<div class="clear">&nbsp;</div>
			</article>

		</div>




		<footer>
			If you wanna learn more about me feel free to visit <a href="http://spyesx.fr">spyesx.fr</a>
		</footer>


	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-4005134-2']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
	<!-- AddThis Welcome BEGIN -->
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=spyesx"></script>


    <script src="<?php echo ENV; ?>/js/vendors/foundation/vendor/jquery.js"></script>
    <script src="<?php echo ENV; ?>/js/vendors/foundation/foundation.min.js"></script>
    <script src="<?php echo ENV; ?>/js/vendors/foundation/foundation/foundation.magellan.js"></script>
    <script>
      $(document).foundation();
    </script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-4005134-2', 'auto');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');

</script>

	</body>
</html>









