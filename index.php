<?php
	require_once('dates.lib.php');
	require_once('countries.datas.php');
	require_once('countries.controller.php');

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

		<link type="text/css" href="assets/vendors/foundation/css/foundation.min.css" rel="stylesheet" media="screen" />
		<link type="text/css" href="assets/app/css/style.css" rel="stylesheet" media="screen" />

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
		    <dd data-magellan-arrival="where-I-am-now"><a href="#where-I-am-now">Where I am now</a></dd>
		    <dd data-magellan-arrival="where-I-planned-to-go"><a href="#where-I-planned-to-go">Where I planned to go</a></dd>
		    <dd data-magellan-arrival="where-I-want-to-go-or-go-back"><a href="#where-I-want-to-go-or-go-back">Where I want to go or go back</a></dd>
		    <dd data-magellan-arrival="where-I-have-been"><a href="#where-I-have-been">Where I've been</a></dd>
		    <dd data-magellan-arrival="tools"><a href="#tools">Tools</a></dd>
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
								<img src="assets/img/nicolas_bages_nepal_anapurnas.jpg" width="100%" alt="Annapurna, Nepal">
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
						I wanted to learn and to work so I started by a point. I draw a route on the 
						globe by being in search of my life and my future, learning about myself as much as I learned about others. 
						Today, I have the feeling that I found a lot. Guess what! It makes me want to explore even more.
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
						to discover new point of view. 
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
							<img src="assets/img/cs-icon.png" alt="Nicolas's CS profile" width="20" />
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
								<img src="assets/img/ng_traveler_logo_2014.png" alt="National Geographic Photo Contest 2014">
							</h2>
						</header>
						<p>
							I submitted 2 photos for the National Geographic Photo Contest 2014. 
							The result will be known in June. Check this out! Share! Like!
						</p>
						<figure class="columns large-6">
							<figcaption>
								Intha fisherman on Inle lake - <a class="call-to-action" href="http://travel.nationalgeographic.com/travel/traveler-magazine/photo-contest/2014/entries/rate/travel-portraits-week-2/#/244411">Vote now!</a>
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
						<p>
							You and I spent the last 19 month travelling the world together through these pictures. Now we have the opportunity 
							to keep going and live an extraordinary adventure.
						</p>
						<p>
							The Intha fisherman <a href="http://travel.nationalgeographic.com/travel/traveler-magazine/photo-contest/2014/entries/gallery/travel-portraits-week-2/">has been selected</a> 
							on the second week by National Geographic. I really need your vote to win this contest! Please 
							<a href="http://travel.nationalgeographic.com/travel/traveler-magazine/photo-contest/2014/entries/rate/travel-portraits-week-2/#/244411">visit the voting page</a> 
							and give a rate to your favorite photo. I need a good rate to win, over than 8. The result will be delivered in June this year.
						</p>
						<p>
							By offering your support you can be a part of the <a href="http://travel.nationalgeographic.com/travel/traveler-magazine/photo-contest/2014/prizes/">3 Grand Prizes</a>, 
							all travel oriented. 
							<a class="call-to-action" href="http://travel.nationalgeographic.com/travel/traveler-magazine/photo-contest/2014/entries/rate/travel-portraits-week-2/#/244411">Vote now!</a>
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
						<li><a href="https://www.facebook.com/spyesx"><img src="assets/img/facebook-icon.png" width="20" alt="Nicolas's Facebook profile" /> Facebook</a></li>
						<li><a href="https://www.couchsurfing.org/profile.html?id=FMAGLLP"><img src="assets/img/cs-icon.png" width="20" alt="Nicolas's CS profile" /> CouchSurfing</a></li>
						<li><a href="http://www.flickr.com/photos/spyesx/"><img src="assets/img/flickr-icon.png" width="20" alt="Nicolas's Fickr profile" /> Flickr</a></li>
						<li><a href="mailto:nicolas.bages@spyesx.fr"><img src="assets/img/mail-icon.png" width="20" alt="Nicolas's email" /> eMail</a></li>
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
						I just finished a 18 month world tour. Now I'm back to Europe and projects make me think 
						a Europe tour is coming! As usual, this trip isn't about going somewhere, take some pictures 
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
					<?php echo $countries->listing($sortered_countries['plan']); ?>
					<p>
						I'd love to meet you and hangout. Please 
						<span data-magellan-arrival="contact"><a href="#contact">contact me</a></span>.
					</p>
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
					<img src="http://chart.apis.google.com/chart?cht=map:fixed=-70,-180,80,180&chs=450x300&chf=bg,s,336699&chco=d0d0d0,cc0000&chd=s:99999999999999999999999999999999&chld=AT|FR|IE|IT|MC|ES|CH|GB|BO|AR|BR|CA|PE|KH|IN|JP|LA|MY|MM|NP|PH|SG|KR|TW|TH|VN|AU|NZ|NL|MX|US|PT" width="450" height="300" >
					<figcaption>
						Visited 32 states (14.2%)<br/>
						<a href="http://douweosinga.com/projects/visited?region=world">Create your own visited map of The World</a>
					</figcaption>
				</figure>
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


    <script src="assets/vendors/foundation/js/vendor/jquery.js"></script>
    <script src="assets/vendors/foundation/js/foundation.min.js"></script>
    <script src="assets/vendors/foundation/js/foundation/foundation.magellan.js"></script>
    <script>
      $(document).foundation();
    </script>
	</body>
</html>









