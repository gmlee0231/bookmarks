<?php

function createBookmarklet() {
	$l = OC_L10N::get('bookmarks');
	echo '<small>' . $l->t('Drag this to your browser bookmarks and click it, when you want to bookmark a webpage quickly:') . '</small>'
	. '<a class="button bookmarklet" href="javascript:(function(){var a=window,b=document,c=encodeURIComponent,e=document.getElementsByTagName(\'title\')[0].textContent,d=a.open(\'' . OCP\Util::linkToAbsolute('bookmarks', 'addBm.php') . '?output=popup&url=\'+c(b.location)+\'&title=\'+e,\'bkmk_popup\',\'left=\'+((a.screenX||a.screenLeft)+10)+\',top=\'+((a.screenY||a.screenTop)+10)+\',height=400px,width=550px,resizable=1,alwaysRaised=1\');a.setTimeout(function(){d.focus()},300);})();">'
	. $l->t('Read later') . '</a>';
} 
