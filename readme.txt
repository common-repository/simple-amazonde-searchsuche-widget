=== Simple Amazon.de Search/Suche Widget ===
Contributors: Bernd K.
Tags: shortcodes, sidebar, posts, plugin, suche, amazon.de, suchfeld, amazon, affiliate, geld verdienen, search, widget
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8W9AB75B3GKDY
Requires at least: 2.5
Tested up to: 3.8.1
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html


Suchfeld Widget für den Amazon.de Marktplatz - Einfaches platzieren von Suchfeldern an x-beliebiger Stelle im Blog durch Shortcodes.

== Description ==

Simple Amazon.de Search/Suche Widget - verfolgt ein einfaches Ziel: Ein Amazon.de Suchfeld mittels Shortcode in Deine Beitr&auml;ge einzuf&uuml;gen. Wie? Ganz Simple. F&uuml;ge den Shortcode [search] an die Stelle, an der das Suchfeld erscheinen soll. Fertig ;)

Amazon Widgets sind geniale kleine Helferlein f&uuml;r Deinen Blog. Deine Besucher k&ouml;nnen schnell nach einen Artikel suchen und die Ergebnisse werden unter dem Suchfeld angezeigt. Ausserdem kannst Du nebenbei auch noch Geld mit dem Widget verdienen, wenn Du &uuml;ber eine AmazonAffiliateID verf&uuml;gst. 


= Information =

Hier einige M&ouml;glichkeiten wie das Suchwidget eingebunden werden kann:

a. [search] - Standart Variante
Dieser Shortcode erzeugt ein 160px Suchfeld mit 1 Spalte und 1 Reihe.

b. [search keywords="hobbit" category="dvd"]
Diese Variante zeigt Dir alle Ergebnisse des Suchwortes 'hobbit' aus der Amazon Kategorie 'dvd' in der Standart Variante.

c. [search width="500" columns="2" rows="3"]
Dieser Shortcode erzeugt ein 500px Suchfeld mit 2 Spalten und 3 Reihen.

d. [search design="1" color_theme="White"]
Diese Variante erzeugt ein weisses Design Suchfeld. Bitte stelle sicher, das Du die korrekte Design Nummer ausw&auml;hlst.
Design: ColorTheme
1: Blues, Pistachio, RedGrey, Pink, Pumpkin
2:Default, Blue, Grey, Orange, Pink, White
3:Cinnamon, Peppermint, Spearmint
4:Onyx, Cobalt, Ruby
5:BrushedSteel, BrushedNickel, BrushedCopper

1. [search show_rating="False" show_price="False"]
Hier wird ein Suchfeld erstellt, in welcher Bewertungen und Preise der angezeigten Artikel ausgeblendet sind.

1. [Search tag="DeineAmazonAffiliateID-21" show_price="false" show_rating="false" keywords="hobbit"]
Ein Suchfeld mit 'hobbit' Artikel wird angezeigt. Bewertungen und Preise sind ausgeblendet. Der 'tag' Parameter ist hier das Highlight. Damit kannst Du, solltest Du &uuml;ber eine AmazonAffiliateID verf&uuml;gen, bei jedem Produktverkauf &uuml;ber das Widget eine Provision verdienen.


== Installation ==

Erstens: Lade folgende Datei `simple-amazon.de-search_suche-widget.php` in das Plugin-Verzeichnis `/wp-content/plugins/` Deines Blogs
Zweitens: Aktiviere das Plugin unter ==> Plugins ==> Installierte Plugins im Admin Account Deines Blogs
Drittens: Gehe im Admin-Account zu den ==> Plugins und w&auml;hle ==> Editor. &Auml;ndere in der Datei 'simple-amazon.de-search_suche-widget.php' die AmazonAffiliateID und trage Deine ID ein, die Du vom Amazon Partnerprogramm erhalten hast.

== Upgrade Notice ==

N/A

== Frequently Asked Questions ==

Wo finde ich die Amazon Kategorien?
Hier gibt es die g&uuml;ltige Kategorienliste:
http://docs.amazonwebservices.com/AWSECommerceService/latest/DG/index.html?APPNDX_SearchIndexValues.html

Wie kann ich die Gr&ouml;sse des Suchfeldes &auml;ndern?
Du kannst die Weite 'width', die Spalten 'columns' und die Reihen 'rows' &auml;ndern.
Beispiel: [search width="400" rows="2" columns="5"]
Die Gr&ouml;ssenangaben d&uuml;rfen zwischen 150 und 800 liegen.

Ich m&ouml;chte ein Suchfeld f&uuml;r den Amazon Marktplatz Frankreich erzeugen?
&Auml;ndere den Parameter marketplace="FR". Zul&auml;ssige Marktpl&auml;tze sind: JP, FR, DE, GB, US, CA

Kann ich Produktbilder anzeigen lassen?
Ja und Nein. Bei der Anzeige von Produktbildern kann es manchmal zu Reibereien zwischen dem Amazon Code und dem Wordpress Code kommen. Du kannst es aber mit dem 'show_image' Parameter versuchen: [search show_image="True"] 

Mein Widget wird in der Sidebar nicht angezeigt? Was kann ich tun?
In Wordpress ist die Anzeige von Shortcodes in Sidebars nicht direkt vorgesehen. 
F&uuml;ge einfach folgenden Code: 

`add_filter('widget_text', 'do_shortcode');`

in die functions.php innerhalb dieser Tags 

`<?php und ?>` 

am Anfang oder am Ende ein. Die functions.php findest Du &uuml;blicherweise im Order 'wp-content/themes/DeinTheme/functions.php'

Das wars. Geschafft. Nun kannst Du mit dem Einbinden der Suchfelder beginnen. Viel Spass!


= Systemanforderungen =
PHP 5.2.4
WordPress ab 3.8


= Unterstützung =
PayPal: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8W9AB75B3GKDY


== Changelog ==
1.0
Kompatibilit&auml;t zu WordPress 3.8.1


== Screenshots ==

1. Widget 160px
2. Widget 500px
3. Widget 800px
4. Widget Designs
