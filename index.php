<?php

/* DokuWiki setup */
if(!defined('DOKU_INC')) define('DOKU_INC',dirname(__FILE__).'/../');
require_once(DOKU_INC.'inc/init.php');

?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>MAKE.OPENDATA.CH – Swiss Open Data Camp</title>
    <meta name="description" content="An Open Data Camp in Switzerland that brings experts and makers together to put digital transparency to work">
    <meta name="author" content="Swiss Open Data Foundation">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link href="/assets/vendor/bootstrap/bootstrap-1.1.0.min.css" rel="stylesheet">
    <link href="/assets/app/stylesheets/base.css" rel="stylesheet">
	<link href="inc/css/zurb_buttons.css" rel="stylesheet" type="text/css" />
		
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
    <!-- <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114.png"> -->

	<style type="text/css">
	.ss-base-body{font-size:.8em}.ss-textarea{max-width:99%}.ss-choice-item{margin:0;line-height:1.3em;padding-bottom:.5em}.ss-form-entry input{vertical-align:middle;margin-top:0}.g{color:#666}.i{display:inline}.ss-form-desc{font:inherit;width:99%;margin:0}.ss-q-title{display:block;font-weight:bold}.ss-q-help{display:block;color:#666;margin:.1em 0 .25em 0}.ss-q-long{max-width:90%}.ss-form-entry{margin-bottom:1.5em;zoom:1;}.ss-choices{list-style:none;margin:.5em 0 0 0;padding:0}.ss-powered-by{display:block;clear:left;color:#666;margin:1em 0.2em 0.2em}.ss-powered-by a:link,.ss-powered-by a:visited{color:#666}.ss-terms{display:block;clear:left;margin:1em 0.2em 0.2em}.ss-required-asterisk{color:#c43b1d}.ss-section-title{background-color:#eee;padding:0.4em;margin:2em -0.4em 0}.ss-section-description{margin-top:0.5em}.ss-no-ignore-whitespace{white-space:pre-wrap;white-space:-moz-pre-wrap;word-wrap:break-word}.ss-page-title{margin:0;padding:0}.ss-confirmation-header{font-size:140%;padding-bottom:1em}.ss-gridnumbers{text-align:center;border-bottom:1px solid #d3d8d3}.ss-gridnumber{display:block;padding:0.5em 0 .5em}.ss-gridrow{text-align:center;color:#666;border-bottom:1px solid #d3d8d3;padding:.5em .25em}.ss-grid-row-even{background-color:#fff}.ss-grid-row-odd{background-color:#f2f2f2}.ss-gridrow-leftlabel{padding:0 1em}.ss-grideditor-columns input{line-height:150%}.ss-grideditor-editor .ss-magiclist-ul span.ss-header{font-weight:bold;padding-right:1em}.ss-grid .errorbox-component .errorbox-good,.ss-grid .errorbox-component .errorbox-bad{display:none}.ss-scalenumbers{text-align:center}.ss-scalenumber{display:block;padding:0.5em 0 .5em}.ss-scalerow{text-align:center;color:#666;border:1px solid #d3d8d3;border-left:0;border-right:0;padding:.5em .25em}td.ss-leftlabel{text-align:right;padding-left:0}td.ss-rightlabel{text-align:left;padding-right:0}.errorbox-bad{border:2px solid #c43b1d;background-color:#ffe6cc;padding:2px}.errorheader{color:#c43b1d}.ss-base-body{width:99%}.ss-confirmation-banner{background-color:#ffff87;padding:1em}

	#ss-form .ss-choices { list-style:none; margin-left: 16em; }
	#ss-form .ss-choices li {
		display: inline-block;
		vertical-align: top;
	}
	#ss-form .ss-choice-label { width:auto; }
	#ss-form .ss-choices label { text-align:left; }
	#ss-form .ss-form-entry { margin-bottom: 0; }
	#ss-form label, #ss-form .ss-q-help { text-align:left; color: white; }
	#ss-form textarea { width: 30em; height: 3em; }
	#ss-form .ss-choice-item:last-child { display: block; }
	#ss-form .ss-choice-item:last-child label:last-child { width: auto; }
	.ss-required-asterisk { text-align:right; color:black; font:10pt sans-serif; }
	
	.section-sponsor table { background: white; }
	.section-sponsor table a { color: green; text-decoration: none; font-size: 123%; margin-left:1em; }

	</style>
  </head>

  <body>
    <div class="container">
      <div id="header" class="row">
        <div class="span4">
          <h1 id="logo"><img src="/assets/app/images/make.opendata.ch_logo.png" alt="MAKE.OPENDATA.CH CAMP" /></h1>
        </div>
        <div class="span8">
          <h2 id="date">Bern, 27 April 2012</h2>
          <p id="blurb">
                    <?= p_wiki_xhtml("bern:intro") ?>
          </p>
        </div>
        <!-- <div id="action">
          <a class="btn" href="doku.php?id=de:home&do=register&lang=en">Register</a>
        </div> -->
        <div id="utilities">
          <ul>
            <li id="share_slider" class="slider">
              <span class="slide_label">
                Share
              </span>
              <div id="share_buttons">
                <span id="share_twitter" class="share_button">
                  <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
                </span>
                <span id="share_facebook" class="share_button">
                  <div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#appId=141719789255556&amp;xfbml=1"></script><fb:like href="http://makeopendata.ch/" send="false" layout="button_count" width="100" show_faces="false" font="arial"></fb:like>
                </span>
                <span id="share_google" class="share_button">
                  <g:plusone size="medium"></g:plusone>
                </span>
              </div>
            </li>
            <li id="contact_slider" class="slider">
              <span class="slide_label">
                Contact
              </span>
              <div id="contact_buttons">
                <span id="contact_twitter" class="contact_button">
                  <a href="http://twitter.com/opendataCH">Twitter</a>
                </span>
                <span id="contact_email" class="contact_button">
                  <a href="mailto:info@opendata.ch">Email</a>
                </span>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="page-header">
        <h1>Info<span></span></h1>
      </div>

      <div class="row section-what">
        <div class="span14 offset2">
          <?= p_wiki_xhtml("bern:info") ?>
	    </div>
      </div>
      
      <div class="page-header">
        <h1>Anmeldung<span></span></h1>
      </div>

      <div class="row section-register">
        <div class="span14 offset2">
         	<form action="https://docs.google.com/spreadsheet/formResponse?formkey=dDhlWC1BR3RickxXRDJsdVI4U3BXakE6MQ&amp;embedded=true&amp;ifq" method="POST" id="ss-form" target="_blank">

         	<!-- Registration form -->
<div class="ss-required-asterisk">* Erforderlich</div>

<div class="errorbox-good">
<div class="ss-item ss-item-required ss-text"><div class="ss-form-entry"><label class="ss-q-title" for="entry_1">Name
<span class="ss-required-asterisk">*</span></label>
<label class="ss-q-help" for="entry_1"></label>
<input type="text" name="entry.1.single" value="" class="ss-q-short" id="entry_1"></div></div></div>
<br> <div class="errorbox-good">
<div class="ss-item ss-item-required ss-text"><div class="ss-form-entry"><label class="ss-q-title" for="entry_2">Email
<span class="ss-required-asterisk">*</span></label>
<label class="ss-q-help" for="entry_2"></label>
<input type="text" name="entry.2.single" value="" class="ss-q-short" id="entry_2"></div></div></div>
<br> <div class="errorbox-good">

<div class="ss-item ss-item-required ss-checkbox"><div class="ss-form-entry"><label class="ss-q-title" for="entry_5">Skills
<span class="ss-required-asterisk">*</span></label>
<label class="ss-q-help" for="entry_5">Ich nehme teil als...</label>
<ul class="ss-choices"><li class="ss-choice-item"><label class="ss-choice-label"><input type="checkbox" name="entry.5.group" value="Developer: Softwareentwickler, Informatikstudent etc." class="ss-q-checkbox" id="group_5_1">
Developer: Softwareentwickler, Informatikstudent etc.</label></li> <li class="ss-choice-item"><label class="ss-choice-label"><input type="checkbox" name="entry.5.group" value="Designer: Grafiker f&uuml;r Web und Mobile, Usabilityprofi etc." class="ss-q-checkbox" id="group_5_2">
Designer: Grafiker f&uuml;r Web und Mobile, Usabilityprofi etc.</label></li> <li class="ss-choice-item"><label class="ss-choice-label"><input type="checkbox" name="entry.5.group" value="Ideengeber: Fachexperte, Datenbesitzer, Journalist, Forscher etc." class="ss-q-checkbox" id="group_5_3">
Ideengeber: Fachexperte, Datenbesitzer, Journalist, Forscher etc.</label></li>
</ul></div></div></div>
<br> <div class="errorbox-good">

<div class="ss-item  ss-checkbox"><div class="ss-form-entry"><label class="ss-q-title" for="entry_4">Thematik
</label>
<label class="ss-q-help" for="entry_4">Ich interessiere mich f&uuml;r folgende Themen...</label>
<ul class="ss-choices"><li class="ss-choice-item"><label class="ss-choice-label"><input type="checkbox" name="entry.4.group" value="Umwelt, Energie" class="ss-q-checkbox" id="group_4_1">
Umwelt, Energie</label></li> <li class="ss-choice-item"><label class="ss-choice-label"><input type="checkbox" name="entry.4.group" value="Mobilit&auml;t, &ouml;ffentlicher Verkehr, Transport" class="ss-q-checkbox" id="group_4_2">
Mobilit&auml;t, &ouml;ffentlicher Verkehr, Transport</label></li> <li class="ss-choice-item"><label class="ss-choice-label"><input type="checkbox" name="entry.4.group" value="Finanzen, Beschaffung, Wirtschaft" class="ss-q-checkbox" id="group_4_3">
Finanzen, Beschaffung, Wirtschaft</label></li> <li class="ss-choice-item"><label class="ss-choice-label"><input type="checkbox" name="entry.4.group" value="Politik, Gesellschaft, Forschung" class="ss-q-checkbox" id="group_4_4">

Politik, Gesellschaft, Forschung</label></li> <li class="ss-choice-item"><label class="ss-choice-label"><input type="checkbox" name="entry.4.group" value="Informatik, Kommunikation" class="ss-q-checkbox" id="group_4_5">
Informatik, Kommunikation</label></li> <li class="ss-choice-item"><label class="ss-choice-label"><input type="checkbox" name="entry.4.group" value="Datenjournalismus, Presse" class="ss-q-checkbox" id="group_4_6">
Datenjournalismus, Presse</label></li> <li class="ss-choice-item"><label class="ss-choice-label"><input type="checkbox" name="entry.4.group" value="Entwicklungshilfe, NGOs, Stiftungen" class="ss-q-checkbox" id="group_4_7">
Entwicklungshilfe, NGOs, Stiftungen</label></li>
<li class="ss-choice-item"><input type="checkbox" name="entry.4.group" value="__option__" class="ss-q-checkbox" id="other_option:4">
<label for="other_option:4">Sonstiges:</label>
<input type="text" name="entry.4.group.other_option_" value="" class="ss-q-other"></li></ul></div></div></div>
<br> <div class="errorbox-good">

<div class="ss-item  ss-paragraph-text"><div class="ss-form-entry"><label class="ss-q-title" for="entry_3">Comments
</label>
<label class="ss-q-help" for="entry_3">Angaben zu den vorhandenen Daten etc.</label>
<textarea name="entry.3.single" rows="8" cols="75" class="ss-q-long" id="entry_3"></textarea></div></div></div>
<br>
<input type="hidden" name="pageNumber" value="0">
<input type="hidden" name="backupCache" value="">

<center>
<input type="submit" name="submit" value="Senden" style="font-size:18pt;">
</center>
</form>

			<!-- End Registration Form -->
			
<center><span class="button"><a onclick="$('#regstats').show();$(this).parent().hide(); return false;" href="#" class="icon white-arrow-right">Statistik zeigen</a></span></center>
<iframe src="registrations.html" width="620" height="410" style="display:none;border:none;background:#fff" id="regstats"></iframe>
		</div>
      </div>

      <div class="page-header">
        <h1>Vorgehen<span></span></h1>
      </div>

      <div class="row section-who">
        <div class="span14 offset2">
         	<?= p_wiki_xhtml("bern:plan") ?>
        </div>
      </div>

      <div class="page-header">
        <h1>Ablauf<span></span></h1>
      </div>

      <div class="row section-when">
        <div class="span14 offset2">
          <?= p_wiki_xhtml("bern:schedule") ?>
        </div>
      </div>

      <div class="page-header">
        <h1>Team<span></span></h1>
      </div>

      <div class="row section-about">
        <div class="span14 offset2">
          <?= p_wiki_xhtml("bern:team") ?>
        </div>
      </div>

      <div class="page-header">
        <h1>Sponsors<span></span></h1>
      </div>

      <div class="row section-sponsor">
        <div class="span14 offset2">
          <?= p_wiki_xhtml("bern:sponsors") ?>
        </div>
      </div>

    </div><!-- #content -->
    <div id="footer">
      <p>&copy; make.opendata.ch</p>
    </div>
  </div> <!-- /container -->
    <script type="text/javascript" src="/assets/vendor/jquery/jquery-1.6.min.js"></script>
    <script src="https://apis.google.com/js/plusone.js"></script>
    <script type="text/javascript" src="/assets/app/javascripts/base.js"></script>
  </body>
</html>
