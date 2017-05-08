<?php

namespace IdnoPlugins\GeniusBlocker {

    class Main extends \Idno\Common\Plugin {


	function registerPages() {
	    \Idno\Core\Idno::site()->template()->extendTemplate('shell/footer', 'geniusblocker/shell/footer');
	}

    }

}