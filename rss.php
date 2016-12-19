

<?php
$rss = simplexml_load_file("http://news.google.com/news?hl=ja&ned=us&ie=UTF-8&oe=UTF-8&output=rss");
foreach($rss->channel->item as $item){
echo "<p><a href ='$item ->link'>$item->title</a></p>";
}
?>