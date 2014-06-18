<?php
class HTournamentHelper extends AppHelper {
	
	public $helpers = array('Html');

	public function body($url) {
		return ('<body class="layout-bg" style="background-image:url('.$url.');">');
	}

}
