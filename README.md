<h2>PJES: podbe-json-easy-search</h2>
===============================
<img width="220px"src="http://podbe.wikibyte.org/wp-content/uploads/2013/02/podbe1.png">
 
Search read the PJA (in php) <br>
You can find the code on the Podbe Testpage:
* http://suche.wikibyte.org/podbe/ 


<h3>Shortcode:<h3>
<hr />
<img width="auto" src="https://github.com/Podbe/podbe-json-easy-search/blob/master/screens.png?raw=true">
<hr/>


<h3>About the Podbe JSON API:</h3>

Find more information to PJA in the <a href="https://github.com/Podbe/Podbe-API/blob/master/test-podbe-json.php">Testing PHP</a><br>
Send questions and comments to <a href="http://podbe.wikibyte.org/podbe/kontakt/">Michael McCouman jr.</a> under <a href="http://podbe.wikibyte.org/podbe/kontakt/">support&#64;wikibyte.org</a>.


<h4>XML Podcastpage (meta_key: podbe-types)</h4>
There are two types of variables, for example:<br>
<b>a:31:</b><br>
<b>s:7:</b><br>
<i>a</i> = array and 31 is the dimension of the array<br>
<i>s</i> = string and 7 is the length of the string

<h4>Extract from the WordPress xml backup dump</h4>
This information is required to view the metadata standard storage in the WP database.
<pre>
&lt;rss version="2.0"
  xmlns:excerpt="http://wordpress.org/export/"
  xmlns:content="http://purl.org/rss/1.0/modules/content/"
	xmlns:dc="http://purl.org/dc/elements/1.1/"
>
&lt;channel>
	&lt;title>Podbe&lt;/title>
	&lt;link>http://podbe.wikibyte.org&lt;/link>
	&lt;description>Das Podcast Verzeichnis&lt;/description>
	&lt;language>de-DE&lt;/language>
	&lt;wp:base_site_url>http://podbe.wikibyte.org&lt;/wp:base_site_url>
&lt;item>
        &lt;title>Herrenabend&lt;/title>
	&lt;link>http://podbe.wikibyte.org/herrenabend/&lt;/link>
	&lt;pubDate>Day, 01 Apr 2013 00:00:00 +0000&lt;/pubDate>
	&lt;guid isPermaLink="false">http://podbe.wikibyte.org/?p=1234&lt;/guid>
	&lt;wp:post_id>1234&lt;/wp:post_id>
	&lt;wp:post_name>herrenabend&lt;/wp:post_name>
	&lt;category domain="category" nicename="podcast">&lt;![CDATA[Banner]]>&lt;/category>
		...
		...
	&lt;wp:postmeta>
	&lt;wp:meta_key>podbe-types&lt;/wp:meta_key>
  &lt;wp:meta_value>&lt;![CDATA[
    a:31:{

	s:7:"heading";
	s:24:"Alles kann, nichts muss.";

	s:5:"image";s:92:"...1400x1400.jpg";
	s:7:"moderat";s:33:"Thilo Koldehoff / Christian Lück";

	s:15:"additional-info";
	s:689:"Zwei Herren, ein Abend, jede Menge.....“";

	s:6:"itunes";
	s:67:"https://itunes.apple.com/...";

	s:6:"podrss";
	s:34:"http://www.herrenabend-podcast.de/";

	s:3:"liz";
	s:16:"Herrenabend 2013";

	s:6:"lizurl";
	s:34:"http://podcasturl.de/";

	s:8:"feedread";
	s:47:"http://....xml";

	s:7:"pmdread";
	s:56:"http://....mp3";

	s:7:"twitter";
	s:34:"https://twitter.com/HerrenabendFTW";

	s:6:"appnet";
	s:33:"https://alpha.app.net/herrenabend";

	s:5:"gplus";
	s:79:"https://plus.google.com/...";

	s:6:"podcde";
	s:37:"http://www.podcast.de/...";

	s:9:"user-eins";
	s:5:"Thilo";

	s:16:"user-eins-avatar";
	s:81:"http://...300x300.jpg";

	s:14:"user-eins-mail";
	s:28:"thilo@herrenabend-podcast.de";

	s:14:"user-eins-info";
	s:886:"Was gibt man preis...";

	s:18:"user-eins-facebook";
	s:40:"...";

	s:17:"user-eins-twitter";
	s:28:"http://twitter.com/...";

	s:15:"user-eins-alpha";
	s:31:"https://alpha.app.net/saksa2000";

	s:9:"user-zwei";
	s:9:"Christian";

	s:16:"user-zwei-avatar";
	s:85:"http://....300x300.jpg";

	s:14:"user-zwei-mail";
	s:32:"...@....de";

	s:14:"user-zwei-info";
	s:143:"Wuppertaler; Podcaster ....";

	s:17:"user-zwei-twitter";
	s:32:"http://twitter.com/horstpaluppke";

	s:15:"user-zwei-alpha";
	s:35:"https://alpha.app.net/horstpaluppke";

	s:7:"bgolori";
	s:7:"#ffffff";

	s:16:"backgroundbanner";
	s:117:"http://....1000x10001.png";

	s:12:"playerdesign";
	s:5860:"{...}";

	s:13:"playerdesignm";
	s:125:"	{&quot;hue&quot;:&quot;177&quot;,&quot;sat&quot;:&quot;74&quot;,&quot;lum&quot;:&quot;4&quot;,&quot;gra&quot;:&quot;10&quot;}";

   }

   ]]>
       &lt;/wp:meta_value>
     &lt;/wp:postmeta>
  &lt;/item>
&lt;/channel>
</pre>
Find more about: <a href="https://github.com/Podbe/Podbe-API">Podbe-API</a>
