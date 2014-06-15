<?php

class Countries_Controller
{
	private $_countries;
	private $_filter;
	private $_now;

	public function __construct($countries)
	{
		$this->_countries = $countries;
		$this->_now = new DateTime('now', new DateTimeZone('Europe/Paris'));
	}

	public function sorter_categories()
	{
		$categories = array(
			'past' => array(),
			'present' => array(),
			'plan' => array(),
			'wish' => array(),
		);
		foreach ($this->_countries as $country)
		{
			if(empty($country['datein']))
			{
				$categories['wish'][] = $country;
			}
			else
			{
				$date_in = new DateTime($country['datein'], new DateTimeZone('Europe/Paris'));
				$date_out = new DateTime($country['dateout'], new DateTimeZone('Europe/Paris'));
				$diff_in = $this->_now->diff($date_in);
				$diff_out = $this->_now->diff($date_out);

				if($diff_in->invert == 1 && $diff_out->invert == 1)
				{
					$categories['past'][] = $country;
				}
				elseif($diff_in->invert == 1 && $diff_out->invert == 0)
				{
					$categories['now'][] = $country;
				}
				elseif($diff_in->invert == 0 && $diff_out->invert == 0)
				{
					$categories['plan'][] = $country;
				}
			}
		}

		return $categories;
	}

	public function listing($countries, $showDates = true)
	{
		$html = false;
		foreach($countries as $country)
		{
			$date_range = '';
			if($showDates && ! empty($country['datein']) )
			{
				$date_in = new DateTime($country['datein'], new DateTimeZone('Europe/Paris'));
				$date_out = new DateTime($country['dateout'], new DateTimeZone('Europe/Paris'));
				$date_range = '<p class="dates">'.$date_in->format('d.m.Y').' - '.$date_out->format('d.m.Y').'</p>';
			}

			$html .= '
				<div class="country">
					<p class="title">'.$country['name'].'</p>
					'.$date_range.'
				</div>
			';
		}
		return $html;
	}
}