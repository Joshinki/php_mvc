<h1>SHOWING ALL GAMES</h1>
<?php
	foreach($games as $title => $r) {
		echo '<a href="?view=' . $title . '">' . $r->title . '</a><br />';
	}
?>