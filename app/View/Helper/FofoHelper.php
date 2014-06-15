<?php
class FofoHelper extends AppHelper {
	
	public function content($name, $created, $nb_categories) {
		$content = '<div class="bg">';
		$content .= '<h3>'.$name.'</h3>';
		$content .= '<p>'.$created.'</p>';
		$content .= '<p>NB de categories: '.$nb_categories.'</p>';
		$content .= '</div>';
		return($content);
	}
}
