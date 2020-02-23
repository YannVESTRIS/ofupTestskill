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
			$li .= " alt=''";
			$li .= " />";
			$li .= "<p>ajouter au panier</p>";
			$li .= "<p>en savoir plus</p>";
			$li .= "</li>";
			echo $li;
		}
	}
}
