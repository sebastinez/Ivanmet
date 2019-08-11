<?php

libxml_use_internal_errors(true);
libxml_get_errors(true);

$rss_feed = @simplexml_load_file("https://www.clarin.com/rss/economia/");
if($rss_feed ===  FALSE) {
  unset($rss_feed);
}
   ?>
<div class="bodyimg"></div>
<div class="body-container">
  <div class="body-container-header" id="text">Noticias</div>
  <div class="body-container-text">
    <div>En este espacio compartimos noticias vinculadas a comercio exterior que pudieran ser de su interés.</div>
<?php
if(!empty($rss_feed)) {
$i=0;
foreach ($rss_feed->channel->item as $feed_item) {
if($i>=10) break;
?>
<a href="<?php echo $feed_item->link; ?>">
<div class="newsBox">
<div style="display:flex;flex-direction:row;justify-content:space-between;"><div><h2 style="color:black;"><?php echo $feed_item->title; ?></h2></div><div><?php echo date("d/m/Y", strtotime($feed_item->pubDate)); ?></div>
</div>
<div style="color:black;"><?php echo $feed_item->description; ?></div>
</div>
</a>
<?php
$i++;
}} else {
  ?><div class="newsBox"><h2>No se pudo establecer la conexion, intente mas tarde por favor</h2></div><?php
}
?>

  </div>
</div>
