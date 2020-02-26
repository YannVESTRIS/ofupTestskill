<?php
class Helper
{
	private $arrThumbnails = array(
		"Le Monde" => "middle_00147",
		"Connaissance des arts" => "middle_05525",
		"Télé 7 jours" => "middle_02679",
		"Science & Vie" => "middle_02578",
		"Paris Match" => "middle_02533",
		"Le Point" => "middle_02405",
		"L'Histoire" => "middle_01842",
		"L'Express" => "middle_01722",
		"Elle" => "middle_01648"
	);

	public function thumbnail()
	{
		foreach ($this->arrThumbnails as $key => $value) {
			$li = "<li>";
			$li .= "<img";
			$li .= " src='./assets/images/mags_thumbnails/" . $value . ".jpg'";
			$li .= " alt=''";
			$li .= " />";
			$li .= "<h2>" . $key . "</h2>";
			$li .= "<p class='summary'>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>";
			$li .= "<p><a href='#!'>En savoir plus</a></p>";
			$li .= "</li>";
			echo $li;
		}
	}
}
