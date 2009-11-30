<?php

// Whatever you put inside this area will get triggered on activation.
if (isset($_GET['activated'] ) && $pagenow == "themes.php" ) {
	update_option('comicpress-graphicnav_directory', 'silver');
} 

?>