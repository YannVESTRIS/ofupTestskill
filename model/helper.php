<?php
class Helper
{
	private $arrThumbnails = array(
		"middle_00147",
		"middle_05525",
		"middle_02679",
		"middle_02578",
		"middle_02533",
		"middle_02405",
		"middle_01842",
		"middle_01722",
		"middle_01648"
	);

	public function thumbnail()
	{
		foreach ($this->arrThumbnails as $value) {
			$li = "<li>";
			$li .= "<img";
			$li .= " src='./assets/images/mags_thumbnails/" . $value . ".jpg'";
			// $li .= " height='318' width='247'";
			$li .= " alt=''";
			$li .= " />";
			// $li .= "<p class='add'><a>Ajouter</a></p>";
			$li .= "<p><a href='#!'>En savoir plus</a></p>";
			$li .= "</li>";
			echo $li;
		}
	}
}
