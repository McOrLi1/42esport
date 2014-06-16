<?php
class HLayoutHelper extends AppHelper {

	public function homebar_elem($text, $icon, $position, $url) {
		$content = '<li>'.'<a href="'.$url.'">'.'<button type="button" style="';
		switch ($position) {
			case 'left': $str = 'border-radius: 0px; border-bottom-left-radius: 6px;'; break;
			case 'mid': $str = 'border-radius: 0px;'; break;
			case 'right': $str = 'border-radius: 0px; border-bottom-right-radius: 6px;'; break;
		}
		$content .= $str.'" class="btn btn-default btn-lg left">';
		$content .= '<span class="glyphicon '.$icon.'">'.$text.'</span>';
		$content .= '</button>'.'</a>'.'</li>';
		return ($content);
	}

}
