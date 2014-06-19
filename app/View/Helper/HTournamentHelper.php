<?php
class HTournamentHelper extends AppHelper {
	
	public $helpers = array('Html');

	public function body($url) {
		return ('<body class="layout-bg" style="background-image:url('.$url.');">');
	}

	public function info($info) {
		return ('<h3 style="color:green;">'.$info.'</h3>');
	}

	public function game($game) {
		return ('<h4>'.$game.'</h4>');
	}

	public function date($start_tournament, $end_tournament) {
		return ('<h4>'."Tournois du ".'<br>'.$start_tournament. " au ".$end_tournament.'</h4>');
	}

	public function description($description) {
		return ('<h4>'."Description".'</h4>'.'<p>'.$description.'</p>');
	}

	public function date_register($end_register) {
		return ('<h3 style="text-align:center;">'."Inscription jusau'au :".'<br>'.'<br>'.$end_register.'</h3>');
	}

	public function tweet_off($tweet_off) {
		return ('<div class="paddb02">'.$tweet_off.'</div>');
	}

	public function tweet_flood($tweet_flood) {
		return ('<div class="paddb02">'.$tweet_flood.'</div>');
	}

	public function gmap($gmap) {
		return ('<div style="with-max:436px;">'.$gmap.'</div>');
	}
}