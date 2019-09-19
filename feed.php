//facebook_feed.php
<?php
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	$page_id = 'ehulaserwispl';
	$access_token = 'EAATcXTARFbMBAJnk3Dv8RgmK4xyj86KYua1TC8D6A02LhZC8KjYJaLLRkZABkxvuNQL3pW4d5mHtfYwZCY0gqH6T0ZBkb5eAGmfrPk1HsBZAZCyBSZBnQqSZCXmmZCIQOjZCqDOX3Y4GfZAnxmAyg8yRZC4JpaR1BLvThSCZAy5XAFL0Y7QZDZD';
	$json_object = @file_get_contents('https://graph.facebook.com/' . $page_id .
	'/posts?access_token=' . $access_token . '&fields=message,link,comments.summary(true),shares,full_picture,likes.summary(true),created_time&limit=5');
include ('facebook_functions.php');
posts();
	if(isset($fbdata->{'paging'}->{'next'})){
		echo '<div class="load_more"><a href="' . $next . '">Load More</a></div>';
	}
});