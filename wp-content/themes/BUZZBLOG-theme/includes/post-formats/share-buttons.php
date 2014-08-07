<!-- .share-buttons -->
<?php
$social_share = of_get_option('social_share');
$shareon = of_get_option('shareon');
$facebook_share = of_get_option('facebook_share');
$twitter_share = of_get_option('twitter_share');
$gplus_share = of_get_option('gplus_share');
$digg_share = of_get_option('digg_share');
$reddit_share = of_get_option('reddit_share');
$linkedin_share = of_get_option('linkedin_share');
$pinterest_share = of_get_option('pinterest_share');
$stumbleupon_share = of_get_option('stumbleupon_share');
$tumblr_share = of_get_option('tumblr_share');
$email_share = of_get_option('email_share');
if ($social_share=='true') {
?>
<div class="share-buttons">
	<?php
		/* get permalink */
		$permalink = get_permalink(get_the_ID());
		$titleget = get_the_title();
	?>

<!-- <a class="facebook" target="_blank" onclick="return !window.open(this.href, 'Facebook', 'width=640,height=300')" href="http://www.facebook.com/sharer/sharer.php?u=<?php //echo $permalink; ?>">Facebook</a> -->
<?php
if ($shareon=='true') { ?>
<div class="shareon"><?php echo theme_locals("share_on"); ?></div>
<?php } ?>
<?php
if ($facebook_share=='true') { ?>
<a class="hs-icon icon-facebook-1" onClick="window.open('http://www.facebook.com/sharer.php?u=<?php echo $permalink;?>','Facebook','width=600,height=300,left='+(screen.availWidth/2-300)+',top='+(screen.availHeight/2-150)+''); return false;" href="http://www.facebook.com/sharer.php?u=<?php echo $permalink;?>"></a>
<?php } ?>
<?php
if ($twitter_share=='true') { ?>
<a class="hs-icon icon-twitter" onClick="window.open('http://twitter.com/share?url=<?php echo $permalink; ?>&amp;text=<?php echo str_replace(" ", "%20", $titleget); ?>','Twitter share','width=600,height=300,left='+(screen.availWidth/2-300)+',top='+(screen.availHeight/2-150)+''); return false;" href="http://twitter.com/share?url=<?php echo $permalink; ?>&amp;text=<?php echo str_replace(" ", "%20", $titleget); ?>"></a>
<?php } ?>
<?php
if ($gplus_share=='true') { ?>
<a class="hs-icon icon-gplus" onClick="window.open('https://plus.google.com/share?url=<?php echo $permalink; ?>','Google plus','width=585,height=666,left='+(screen.availWidth/2-292)+',top='+(screen.availHeight/2-333)+''); return false;" href="https://plus.google.com/share?url=<?php echo $permalink; ?>"></a>
<?php } ?>
<?php
if ($digg_share=='true') { ?>
<a class="hs-icon icon-digg" onClick="window.open('http://www.digg.com/submit?url=<?php echo $permalink; ?>','Digg','width=715,height=330,left='+(screen.availWidth/2-357)+',top='+(screen.availHeight/2-165)+''); return false;" href="http://www.digg.com/submit?url=<?php echo $permalink; ?>"></a>
<?php } ?>
<?php
if ($reddit_share=='true') { ?>
<a class="hs-icon icon-reddit" onClick="window.open('http://reddit.com/submit?url=<?php echo $permalink; ?>&amp;title=<?php echo str_replace(" ", "%20", $titleget); ?>','Reddit','width=617,height=514,left='+(screen.availWidth/2-308)+',top='+(screen.availHeight/2-257)+''); return false;" href="http://reddit.com/submit?url=<?php echo $permalink; ?>&amp;title=<?php echo str_replace(" ", "%20", $titleget); ?>"></a>
<?php } ?>
<?php
if ($linkedin_share=='true') { ?>
<a class="hs-icon icon-linkedin" onClick="window.open('http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $permalink; ?>','Linkedin','width=863,height=500,left='+(screen.availWidth/2-431)+',top='+(screen.availHeight/2-250)+''); return false;" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $permalink; ?>"></a>
<?php } ?>
<?php
if ($pinterest_share=='true') { ?>
<a class="hs-icon icon-pinterest" href='javascript:void((function()%7Bvar%20e=document.createElement(&apos;script&apos;);e.setAttribute(&apos;type&apos;,&apos;text/javascript&apos;);e.setAttribute(&apos;charset&apos;,&apos;UTF-8&apos;);e.setAttribute(&apos;src&apos;,&apos;http://assets.pinterest.com/js/pinmarklet.js?r=&apos;+Math.random()*99999999);document.body.appendChild(e)%7D)());'></a>
<?php } ?>
<?php
if ($stumbleupon_share=='true') { ?>
<a class="hs-icon icon-stumbleupon" onClick="window.open('http://www.stumbleupon.com/submit?url=<?php echo $permalink; ?>&amp;title=<?php echo str_replace(" ", "%20", $titleget); ?>','Stumbleupon','width=600,height=300,left='+(screen.availWidth/2-300)+',top='+(screen.availHeight/2-150)+''); return false;" href="http://www.stumbleupon.com/submit?url=<?php echo $permalink; ?>&amp;title=<?php echo str_replace(" ", "%20", $titleget); ?>"></a>
<?php } ?>
<?php
if ($tumblr_share=='true') {
$str = $permalink;
$str = preg_replace('#^https?://#', '', $str);
?>
<a class="hs-icon icon-tumblr" onClick="window.open('http://www.tumblr.com/share/link?url=<?php echo $str; ?>&amp;name=<?php echo str_replace(" ", "%20", $titleget); ?>','Tumblr','width=600,height=300,left='+(screen.availWidth/2-300)+',top='+(screen.availHeight/2-150)+''); return false;" href="http://www.tumblr.com/share/link?url=<?php echo $str; ?>&amp;name=<?php echo str_replace(" ", "%20", $titleget); ?>"></a>
<?php } ?>
<?php
if ($email_share=='true') { ?>
<a class="hs-icon icon-mail" href="mailto:?Subject=<?php echo str_replace(" ", "%20", $titleget); ?>&amp;Body=<?php echo $permalink; ?>"></a>
<?php } ?>
</div><!-- //.share-buttons -->
<?php } ?>