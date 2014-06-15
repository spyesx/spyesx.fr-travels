<?php


	function isStoryReady($date2, $tZone2, $date1 = 'now', $tZone1 = 'Europe/Paris'){
		$d1 = new DateTime($date1, new DateTimeZone($tZone1)); 
		$d2 = new DateTime($date2, new DateTimeZone($tZone2)); 
		$diff = $d1->diff($d2);

		if($diff->invert == 1){
			return '<div id="isready"><a href="the_story.php">here we are! let\'s read the story!</a></div>';
		} else {
			return '';
		}
	}

	function diffDate($date2, $tZone2, $date1 = 'now', $tZone1 = 'Europe/Paris'){
		$d1 = new DateTime($date1, new DateTimeZone($tZone1)); 
		$d2 = new DateTime($date2, new DateTimeZone($tZone2)); 
		$diff = $d1->diff($d2);

		if($diff->invert == 0){
			return '
				<span>'.$diff->m.'</span> months 
				<span>'.$diff->d.'</span> days 
				<!--<span>'.$diff->h.'</span> hours 
				<span>'.$diff->i.'</span> minutes 
				<span>'.$diff->s.'</span> seconds --> ―   
				<span>'.$diff->days.'</span> days
			';
		} else {
			return '
				<span>0</span> months 
				<span>0</span> days 
				<span>0</span> hours 
				<span>0</span> minutes 
				<span>0</span> seconds ―   
				<span>0</span> days
			';
		}
	}
?>