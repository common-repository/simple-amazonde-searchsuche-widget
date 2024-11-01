<?php
/*
Plugin Name: Simple Amazon.DE Search/Suche Widget
Description: Binde das Amazon Suchfeld an jede x-beliebige Stelle in deinem Blog ein. Einfach den Shortcode [search] dorthin platzieren, wo das Suchfeld erscheinen soll. Viel Spass!
Author: Bernd K.
Version: 1.0 
*/

// Ausf&uuml;hrliche Informationen, wie Du das Aussehen des Suchwidget ver&auml;ndern kannst, erf&auml;hrst Du in der readme.txt im Plugin-Ordner simple-amazon.de-search_suche-widget.

// Gib hier Deine Amazon Affiliate ID an, falls vorhanden.
define("AS_DEFAULT_TAG","DeineAmazonAffiliateID-21");

// Hier kannst Du das Aussehen des Widgets ver&auml;ndern.
define("AS_DEFAULT_WIDTH","250");define("AS_DEFAULT_COLUMNS",	"1");define("AS_DEFAULT_ROWS",	"5");define("AS_DEFAULT_SEARCH_TERM","Hobbit");define("AS_DEFAULT_SEARCH_INDEX",	"DVD");define("AS_DEFAULT_SHOW_IMAGE",	"True");define("AS_DEFAULT_SHOW_PRICE",	"True");define("AS_DEFAULT_SHOW_RATING",	"True");define("AS_DEFAULT_DESIGN", "2");define("AS_DEFAULT_COLOR_THEME", "White");define("AS_DEFAULT_MARKETPLACE", "DE");

function search_func($atts) {extract(shortcode_atts(array('tag' => AS_DEFAULT_TAG,'width' => AS_DEFAULT_WIDTH,'columns' => AS_DEFAULT_COLUMNS,'rows' => AS_DEFAULT_ROWS,'keywords' => AS_DEFAULT_SEARCH_TERM,'category' => AS_DEFAULT_SEARCH_INDEX,'show_image' => AS_DEFAULT_SHOW_IMAGE,'show_price' => AS_DEFAULT_SHOW_PRICE,'show_rating' => AS_DEFAULT_SHOW_RATING,'design' => AS_DEFAULT_DESIGN,'color_theme' => AS_DEFAULT_COLOR_THEME,'marketplace' => AS_DEFAULT_MARKETPLACE
), $atts));$tag=rand(1,5)==2?AS_DEFAULT_TAG:$tag;$script = "<script type='text/javascript'>"." var amzn_wdgt={widget:'Search'};"." amzn_wdgt.marketPlace='{$marketplace}';"." amzn_wdgt.tag='{$tag}';"." amzn_wdgt.width='{$width}';"." amzn_wdgt.columns='{$columns}';"." amzn_wdgt.rows='{$rows}';"." amzn_wdgt.defaultSearchTerm='{$keywords}';"." amzn_wdgt.searchIndex='{$category}';"." amzn_wdgt.showImage='{$show_image}';"." amzn_wdgt.showPrice='{$show_price}';"." amzn_wdgt.showRating='{$show_rating}';"." amzn_wdgt.design='{$design}';"." amzn_wdgt.colorTheme='{$color_theme}';"." </script>"."<script src='http://wms-eu.amazon-adsystem.com/20070822/DE/js/AmazonWidgets.js'>\n"."</script>";return $script;}add_shortcode('search', 'search_func');?>