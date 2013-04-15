<?php
//Info Testpage
echo '<h1> Test Json der Podbe Suche</h1>';

/**
* Test Jason in PHP
$json = '{"status":"ok","post":{"id":130,"type":"post","slug":"psychologie-der-schule-2","url":"http:\/\/podbe.wikibyte.org\/psychologie-der-schule-2\/","status":"publish","title":"Psychologie der Schule","title_plain":"Psychologie der Schule","content":"\r\n\t\t\t<div class=\"kk-star-ratings  bottom-right rgt\" data-id=\"130\">\r\n\t\t\t    <div class=\"kksr-stars kksr-star gray\">\r\n\t\t\t        <div class=\"kksr-fuel kksr-star yellow\" style=\"width:0%;\"><\/div>\r\n\t\t\t        <!-- kksr-fuel --><a href=\"#1\"><\/a><a href=\"#2\"><\/a><a href=\"#3\"><\/a><a href=\"#4\"><\/a><a href=\"#5\"><\/a>\r\n\t\t\t    <\/div>\r\n\t\t\t    <!-- kksr-stars -->\r\n\t\t\t    <div class=\"kksr-legend\">Gib deine Stimme!<\/div>\r\n\t\t\t    <!-- kksr-legend -->\r\n\t\t\t<\/div>\r\n\t\t\t<!-- kk-star-ratings -->\r\n\t\t\t<br clear=\"both\" \/>","excerpt":"\"Psychologie der Schule\" konzentriert sich auf neueste Erkenntnisse der Lehr-\/ und Lernpsychologie. Ziel ist es, eine Br\u00fccke zu schlagen, zwischen Forschung und Praxis. Was nutzt all die psychologische Forschung, wenn wir sie nicht benutzen?","date":"2013-02-21 22:19:54","modified":"2013-04-07 12:12:29","categories":[{"id":1,"slug":"podcast","title":"Banner","description":"Alle Podcast in dieser Kategorie werden automatisch eingebunden als Banner","parent":0,"post_count":27},{"id":23,"slug":"education","title":"Bildung","description":"","parent":0,"post_count":2}],"tags":[],"author":{"id":1,"slug":"mccouman","name":"Raptor","first_name":"","last_name":"","nickname":"Raptor","url":"","description":"Nach Anfrage oder automatisch erstellt durch einen Staff. Dies ist dein Podcast und du m\u00f6chtest ihn \u00fcbernehmen? Dann registriere dich und wir \u00fcbergeben diesen Beitrag an dich ;)"},"comments":[],"attachments":[],"comment_count":0,"comment_status":"open","thumbnail":"http:\/\/podbe.wikibyte.org\/wp-content\/uploads\/2013\/02\/PsychologiederSchule1-150x150.jpg"},"previous_url":"http:\/\/podbe.wikibyte.org\/braincasts\/","next_url":"http:\/\/podbe.wikibyte.org\/hoaxilla-podcast\/"}';
	var_dump(json_decode($json));
	var_dump(json_decode($json, true));
*/

//URL Input
$jsonfile = file_get_contents('http://podbe.wikibyte.org/podbeapi/?json=core.get_search_results&search=das%20podcast-ding');	
$suche = json_decode($jsonfile,TRUE);

################################################## Test Outputs ########################################################

/*
* search podbe:
* # Search 		
*/
echo '<br>Search Test:<br> '.$suche['posts'][0]["podcasting-page"][0]["heading"];



######################################## Json output ###########################################
echo '<hr />
Der Output von <code>http://podbe.wikibyte.org/podbeapi/?json=core.get_search_results&search=das%20podcast-ding</code>
<hr />';


echo '<pre>';

//Json URL Strings & Arrays
var_dump($suche);

echo '</pre>';
?>