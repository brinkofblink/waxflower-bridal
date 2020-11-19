<?php namespace ProcessWire;

$posts = $pages->find("template=blog-post, sort=-blog_date, start=0, limit=$limit");
$parent = null;
	$out = '';
	foreach($posts as $item) {
		$date = $page->getUnformatted('blog_date');
    $year = date('Y', $date);
    $month = date('n', $date);
    $day = date('d', $date);
    $dateOutput = "$day/$month/$year";
		$out .= "<li><a href='{$item->url}'>{$item->title}</a><br><span>" . $dateOutput . "</span></li>";
		$parent = $item->parent;
	}
	if($out) {
		$out = 	"<h4>Recent blog posts</h4>" .
				"<ul class='recent-posts links'>$out</ul>" .
				"<p>" .
				"<a class='more' href='{$parent->url}'>" . __('More') . "</a> " .
				"</p>";
		echo $out;
	}
	else echo "<p>" . __('No recent posts') . "</p>";
