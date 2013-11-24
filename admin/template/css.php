/** CSS **/

/*
 * CSS php dynamic
 * DO NOT TIDY!
 * @uses color variables $primary0 - $primary6, $secondary_0-$secondary_1 	
 *
 */

/** GLOBAL RESETS **/
:link,:visited {
	text-decoration: none}

h1,h2,h3,h4,h5,h6,pre,code {
	font-size: 1em;
	font-weight: 400;
	word-wrap: break-word;
}

ul,ol,li,h1,h2,h3,h4,h5,h6,pre,form,body,html,p,blockquote,fieldset,input {
	margin: 0;
	padding: 0;
}

body {
	height: 100%;
	font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
	font-size: 12px;
	background: #f6f6f6;
}

a img,
:link img,
:visited img {
	border: none;
}

.clear {
	clear: both;
}

.unformatted {
	white-space: pre;
	font-family: Consolas, "Andale Mono WT", "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", "DejaVu Sans Mono", "Bitstream Vera Sans Mono", "Liberation Mono", "Nimbus Mono L", Monaco, "Courier New", Courier, monospace;
	line-height: 15px;
	font-size: 11px;
	display: block;
	padding-bottom: 15px;
	color: #555;
	overflow: auto;
}

#help {
	display: none;
}

.imgthumb {
	display: none;
	width: 70px;
}

.imgthumb img {
	border: 1px solid #555;
}

.hidden {
	display: none;
}

html {
	overflow-y: scroll;
}

.clearfix:before, .clearfix:after {
	content: "\0020";
	display: block;
	height: 0;
	visibility: hidden;
}

.clearfix:after {
	clear: both;
}

.clearfix {
	zoom: 1;
}

:: selection {
	text-shadow: none !important;
	background: #a8d1ff;
	color: #111;
}

:: -moz-selection {
	text-shadow: none !important;
	background: #a8d1ff;
	color: #111;
}

:: -webkit-input-placeholder {
	color: #c3c3c3;
}

: -moz-placeholder {
	color: #c3c3c3;
}

/** HEADER / NAVIGATION **/
.header {
	color: #FFF;
	border-top: 1px solid <?php echo $primary_1; ?>;
	background: <?php echo $primary_3; ?>;	/* old browsers */
		background: -moz-linear-gradient(top, <?php echo $primary_4; ?> 0%, <?php echo $primary_2; ?> 100%);	/* firefox */
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $primary_4; ?>), color-stop(100%,<?php echo $primary_2; ?>));	/* webkit */
		filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='<?php echo $primary_4; ?>', endColorstr='<?php echo $primary_2; ?>',GradientType=0 );	/* ie */
	margin: 0 0 25px 0;
}

.header .wrapper {
	height: 95px;
	position: relative;
	border: none;
}

.wrapper .nav {
	list-style: none;
	font-size: 13px;
	position: absolute;
	bottom: 0px;
	left: 0;
	width: 960px;
}

.wrapper .nav li a {
	padding: 7px 13px;
	font-weight: 100 !important;
	text-decoration: none !important;
	display: block;
	border-radius: 5px 5px 0 0;
}

.wrapper .nav li a:link, 
.wrapper .nav li a:visited, 
.wrapper #pill li a:link, 
.wrapper #pill li a:visited {
	color: <?php echo $primary_6; ?>;
	background: <?php echo $primary_1; ?>;
	text-shadow: 1px 1px 0px rgba(0,0,0,.3);
}

.wrapper #pill li.debug a:link,
.wrapper #pill li.debug a:visited,
.wrapper #pill li.debug a:hover {
	color: #fff;
	background: #cc0000;
	padding: 4px 10px;
	font-weight: 700 !important;
	text-decoration: none !important;
	display: block;
	border-left: 1px solid <?php echo $primary_3; ?>;
}

#edit .wrapper .nav li a.pages,
#pages .wrapper .nav li a.pages,
#menu-manager .wrapper .nav li a.pages,
#plugins .wrapper .nav li a.plugins,
#settings .wrapper .nav li a.settings,
#components .wrapper .nav li a.theme,
#theme .wrapper .nav li a.theme,
#sitemap .wrapper .nav li a.theme,
#theme-edit .wrapper .nav li a.theme,
#navigation .wrapper .nav li a.theme,
#upload .wrapper .nav li a.files,
#image .wrapper .nav li a.files,
#backups .wrapper .nav li a.backups,
#support .wrapper .nav li a.support,
#log .wrapper .nav li a.support,
#health-check .wrapper .nav li a.support,
#backup-edit .wrapper .nav li a.backups,
#archive .wrapper .nav li a.backups, 
#load .wrapper .pages li a.pages,
#load .wrapper .plugins li a.plugins,
#load .wrapper .settings li a.settings,
#load .wrapper .theme li a.theme,
#load .wrapper .files li a.files,
#load .wrapper .backups li a.backups,
#load	.wrapper .support li a.support,
#load .wrapper .nav li a.current,
#loadtab .wrapper .nav li a.current {
	color: <?php echo $primary_1; ?>;
	background: #f6f6f6;
		background: -moz-linear-gradient(top, #FFF 3%, #F6F6F6 100%);	/* firefox */
		background: -webkit-gradient(linear, left top, left bottom, color-stop(3%,#FFF), color-stop(100%,#F6F6F6));	/* webkit */
	font-weight: bold !important;
	text-shadow: 1px 1px 0px rgba(255,244,255,.2);
	box-shadow: rgba(0,0,0, 0.10) 2px -2px 2px;
		-moz-box-shadow: rgba(0,0,0, 0.10) 2px -2px 2px;  
		-webkit-box-shadow: rgba(0,0,0, 0.10) 2px -2px 2px;
}

.wrapper .nav li a:active, 
.wrapper .nav li a:focus, 
.wrapper .nav li a:hover, 
.wrapper #pill li a:hover, 
.wrapper #pill li a:focus {
	color: #FFF;
	background: <?php echo $primary_0; ?>;
	text-shadow: 1px 1px 0px rgba(0,0,0,.4);
}

.wrapper .nav li {
	float: left;
	margin: 0 8px 0 0;
	position: relative;
}

.wrapper .nav li.rightnav {
	float: right;
	margin: 0 0 0 0;
	font-size: 11px;
 }

.wrapper .nav li.rightnav a.first {
	padding: 4px 10px;
	font-weight: 100 !important;
	text-decoration: none !important;
	display: block;
	border-radius: 0 3px 3px 0;
	border-left: 1px solid <?php echo $primary_3; ?>;
}

.wrapper .nav li.rightnav a.last {
	padding: 4px 10px;
	font-weight: 100;
	text-decoration: none !important;
	display: block;
	border-radius: 3px 0 0 3px;
}

/* warning alert on tab */
.nav li.rightnav .warning, .nav li.rightnav .info {
	position: absolute;
	top: -5px;
	left: -5px;
}

.nav li .warning, .nav li .info {
	position: absolute;
	top: -5px;
	right: -5px;
	font-size: 10px;
	color: #000;
	text-shadow: 1px 1px 0px rgba(255,255,255,.5);
	font-weight: bold;
	text-align: center;
	border-radius: 2px;
	display: block;
	width: 11px;
	border: 1px solid #FFCC33;
	background: #FFFF66;
	background: -moz-linear-gradient(top, #FFFF66 0%, #FFCC33 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#FFFF66), color-stop(100%,#FFCC33));
}

.nav li .info {
	font-family: serif;
	border: 1px solid #2DB1FF;
	background: #6FCCFF;
	background: -moz-linear-gradient(top, #BDF2FF 0%, #6FCCFF 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#BDF2FF), color-stop(100%,#6FCCFF));
}

.wrapper .nav li a em, .wrapper #pill li a em {
	font-style: normal;
}

.wrapper .nav li a:hover em, .wrapper .nav li a:focus em {
	border-bottom: 1px dotted #666;
}

.wrapper #pill {
	list-style: none;
	position: absolute;
	top: 0px;
	right: 0;
	font-size: 11px;
}

.wrapper #pill li {
	float: right;
}

.wrapper #pill li.leftnav a {
	padding: 4px 10px;
	font-weight: 100 !important;
	text-decoration: none !important;
	display: block;
	border-radius: 0 0 3px 0;
	border-left: 1px solid <?php echo $primary_3; ?>;
}

.wrapper #pill li.rightnav a {
	padding: 4px 10px;
	font-weight: 100 !important;
	text-decoration: none !important;
	display: block;
	border-radius: 0 0 0 3px;
}

.wrapper {
	margin-left: auto;
	margin-right: auto;
	width: 960px;
	text-align: left;
	padding-top: 1px;
}

.wrapper p {
	line-height: 18px;
	margin: 0 0 20px 0;
}

.wrapper #maincontent ul, 
.wrapper #maincontent ol {
/*	line-height: 18px;
	margin: 0 0 20px 30px;*/
}

.wrapper a:link, 
.wrapper a:visited {
	color: <?php echo $primary_3; ?>;
	text-decoration: none;
	font-weight: bold;
}

.wrapper a:hover {
	color: #333;
	text-decoration: underline;
	font-weight: bold;
}

.inner {
	padding: 20px;
}

.header h1 {
	font-size: 25px;
	font-family: Georgia, Times, Times New Roman, serif;
	position: absolute;
	text-shadow: 1px 1px 0px <?php echo $primary_2; ?>;
	top: 17px;
	left: 0;
}

.header h1 a:link,
.header h1 a:visited,
.header h1 a:hover {
	font-weight: normal;
	color: <?php echo $primary_5; ?>;
	text-decoration: none;
}

.header h1 a:hover  {
	color: #FFF;
}

.wrapper h2 {
	font-size: 18px;
	font-family: Georgia, Times, Times New Roman, serif;
	color: #777;
	margin: 0 0 20px 0;
}

.wrapper h2 span {
	color: #bbb;
	font-style: italic;
}

h3 {
	font-size: 19px;
	font-family: Georgia, Times, Times New Roman, serif;
	font-weight: normal;
	font-style: italic;
	color: <?php echo $secondary_1; ?>;
	margin: 0 0 20px 0;
	text-shadow: 1px 1px 0 #fff;
}

h3.floated {
	font-size: 18px;
	font-weight: normal;
	font-family: Georgia, Times, Times New Roman, serif ;
	padding: 2px 0 0 0;
	color: <?php echo $secondary_1; ?>;
	float: left;
	display: block;
	margin: 0 0 5px 0;
}

h5,
div.h5 {
	margin: 10px 0 10px 0;
	font-size: 14px;
	line-height: 28px;
	display: block;
	padding: 3px 10px;
	background: #EEEEEE;
		background: -moz-linear-gradient(top, #f6f6f6 3%, #EEEEEE 100%);	/* firefox */
		background: -webkit-gradient(linear, left top, left bottom, color-stop(3%,#f6f6f6), color-stop(100%,#EEEEEE));	/* webkit */
	border: 1px solid #cccccc;
	text-shadow: 1px 1px 0 rgba(255,255,255,0.5);
	color: #999;
}

h5 a {
	text-decoration: none !important;
}

h5 img, 
tr.folder img {
	vertical-align: middle;
	margin: 0 5px 0 0;
	opacity: .5;
}

h5:hover img {
	opacity: 1;
}

.bodycontent ul, 
.bodycontent ol {
	margin: 0 0 20px 30px;
}

.bodycontent ul p, 
.bodycontent ol p {
	margin: 0 0 10px 0;
}

#maincontent {
	width: 690px;
	float: left;
	text-align: left;
}

#sidebar {
	width: 225px;
	float: right;
}

#sidebar .section {
	background: #fff;
	border: 1px solid #ccc;
	padding: 20px;
	margin: 0 0 30px 0;
	line-height: 18px;
}

#sidebar .section p.small {
	font-size: 11px;
	margin: 15px 0 0 0;
}

#sidebar .section input.text {
	width: 175px;
	font-size: 11px;
	padding: 4px;
	border: 1px solid #666;
}

#sidebar .snav {
	list-style: none;
	margin: 0 0 30px 0;
}

#sidebar .snav ul {
	list-style: none;
	margin: 0;
}

#sidebar .snav li {
	margin: 0 0 3px 0;
}

#sidebar .snav li ul li {
	margin: 0 0 3px 0;
}

#submit_line {
	margin: 15px 0 15px 0;
}

#sidebar #js_submit_line {
	margin: 0 0 0 12px;
}

#sidebar .snav li a {
	font-weight: bold;
	display: block;
	padding: 5px 15px 5px 15px;
	text-decoration: none;
	border-radius: 3px;
}

#sidebar .snav li a:link, 
#sidebar .snav li a:visited {
	margin-left: 13px;
	color: <?php echo $primary_6; ?>;
	background: <?php echo $primary_1; ?>;
	text-shadow: 1px 1px 0px <?php echo $primary_0; ?>;
	transition: all .2s ease-in-out;
		-webkit-transition: all .2s ease-in-out;
		-moz-transition: all .2s ease-in-out;
		-o-transition: all .2s ease-in-out;
}

#sidebar .snav li a.current {
    position: relative;
	cursor: default;
	color: #FFF;
	text-shadow: 1px 1px 0px <?php echo $secondary_0; ?>;
	border-radius: 0 3px 3px 0;
	height:14px;
    background-color:<?php echo $secondary_1; ?>;;
    margin-left:13px;
    padding-left:15px;	
}

#sidebar .snav li a.current:hover {
    background-color: <?php echo $secondary_1; ?>;
}

/* sidebar current arrow */
#sidebar .snav li a.current:after {
    right: 100%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    /*pointer-events: none;*/
}
#sidebar .snav li a.current:after {
    border-color: rgba(207, 56, 5, 0);
    border-right-color: <?php echo $secondary_1; ?>;;
    border-width: 12px;
    top: 50%;
    margin-top: -12px;
}
/**/

#sidebar .snav li a:hover {
	color: #FFF;
	background: <?php echo $primary_0; ?>;
	margin-left: 13px;
	text-shadow: 1px 1px 0px rgba(0,0,0,.25);
}

#sidebar .snav li a em  {
	font-style: normal;
}

#sidebar .snav li a:hover em, 
#sidebar .snav li a:focus em {
	border-bottom: 1px dotted #666;
}

#sidebar .snav li a.current:hover em, 
#sidebar .snav li a.current:focus em  {
	border-bottom: 1px dotted #fff;
}

#sidebar .snav small {
	color: #666;
}

/* sidebar plugins seperator */
#sidebar .snav li.last_sb + li.plugin_sb:before, #sidebar hr
{
	margin: 3px 3px 3px 16px;
	border:none;
	border-bottom: 1px solid <?php echo $primary_6; ?>;
	content: "";
	display: block;
	border-style:thin;
}
/**/

.edit-nav {
	margin: 0 0 15px 0;
}

.edit-nav a {
	font-size: 10px;
	text-transform: uppercase;
	display: block;
	padding: 4px 10px;
	float: right;
	margin: 0 0 0 5px;
	border-radius: 3px;
		-moz-border-radius: 3px;
		-webkit-border-radius: 3px;
	background-repeat: no-repeat;
	background-position: 94% center;
}

.edit-nav select {
	margin-top: 0px;
	float: right;
	padding: 2px;
	border: 1px solid #999;
	font-size: 11px;
	border-radius: 2px;
		-moz-border-radius: 2px;
		-webkit-border-radius: 2px;
}

.edit-nav p {
	float: right;
	font-size: 11px;
	margin: 0;
}

.edit-nav label {
	font-weight: 100;
	display: inline;
	font-size: 11px;
	color: #666;
	margin: 0;
	padding: 0;
}

.edit-nav a#metadata_toggle {
	background-image: url('images/plus.png');
	padding-right: 20px;
}

.edit-nav a#metadata_toggle.current {
	background-image: url('images/minus.png');
	 padding-right: 20px;
}

.edit-nav {
	height: 1%;
}

.edit-nav a:link, 
.edit-nav a:visited {
	line-height: 14px !important;
	background-color: <?php echo $primary_1; ?>;
	color: #ccc;
	font-weight: bold;
	text-decoration: none;
	text-shadow: 1px 1px 0px rgba(0,0,0,.2);
	transition: all .10s ease-in-out;
		-webkit-transition: all .10s ease-in-out;
		-moz-transition: all .10s ease-in-out;
		-o-transition: all .10s ease-in-out;
}

.edit-nav a:hover, 
#sidebar .edit-nav a:hover, 
.edit-nav a.current {
	background-color: <?php echo $secondary_1; ?>;
	color: #FFF;
	font-weight: bold;
	text-decoration: none;
	line-height: 14px !important;
	text-shadow: 1px 1px 0px rgba(0,0,0,.2);
}

.edit-nav a:link em, 
.edit-nav a:visited em {
	font-style: normal;
}

.edit-nav a.current em, 
.edit-nav a:hover em, 
.edit-nav a:focus em {
	font-style: normal;
	border-bottom: 1px dotted #FFF;
}

/* basic default table style */
.wrapper table {
	border-collapse: collapse;
	margin: 0 0 20px 0;
	width: 645px;
}

.wrapper table td {
	vertical-align: top;
	padding: 4px;
	border-bottom: 1px solid #eee;
	border-top: 1px solid #eee;
	line-height: 20px !important;
}

.wrapper table th {
	background: #FFF !important;
	padding: 2px 4px;
	font-size: 11px;
	border-top: 1px solid #FFF;
	color: #222;
	font-weight: bold;
	text-transform: uppercase;
	line-height: 20px !important;
	text-align: left;
}

.wrapper table tr.head {
}

.wrapper table td span {
	font-size: 12px;
	color: #777;
}

.wrapper table.highlight {
	text-shadow: 1px 1px 0 #fff;
}

.wrapper table.highlight tr:nth-child(odd) {
	 background: #f7f7f7;
}

.wrapper table tr#tr-index a {
	 font-weight: bold !important;
}

.wrapper table.highlight tr:hover {
	background: #FFFFD5 !important;
	text-shadow: none;
}

.wrapper table tr.currentpage{
	 background: #FFFFD1;
}

.wrapper table tr {
	border-bottom: 1px solid #eee;
	border-top: 1px solid #eee;
	transition: background-color .3s ease-in-out;
		-webkit-transition: background-color .3s ease-in-out;
		-moz-transition: background-color .3s ease-in-out;
		-o-transition: background-color .3s ease-in-out;
}

table td a {
	font-weight: normal !important;
}

.wrapper table.healthcheck tr td {
	font-size: 12px;
}

/* popup does not appear to be in use */
.popup table td {
	padding: 4px;
}

.popup table a:link, 
.popup table a:visited {
	color: <?php echo $primary_3; ?>;
	text-decoration: underline;
}

.popup table a:hover {
	color: #333;
	text-decoration: underline;
}

sup {
	color: #666;
	font-weight: 100 !important;
	vertical-align: baseline;
	font-size: 0.8em;
	position: relative;
	top: -0.4em;
}


/* default form css */
#maincontent .main {
	padding: 20px;
	background: #fff;
	border: 1px solid #c8c8c8;
	margin: 0 0 30px 0;
	box-shadow: rgba(0,0,0, 0.06) 0px 0px 4px;
		-moz-box-shadow: rgba(0,0,0, 0.06) 0px 0px 4px;
		-webkit-box-shadow: rgba(0,0,0, 0.06) 0px 0px 4px;
}

#maincontent .main .section {
	padding-top: 40px;
}

#themecontent{
	/* replaces #maincontent on theme editor page, fix for the above style interferring with codemirror for now */
	padding: 20px;
	background: white;
	border: 1px solid #C8C8C8;
	margin: 0 0 30px 0;
	box-shadow: rgba(0,0,0, 0.06) 0px 0px 4px;
		-moz-box-shadow: rgba(0,0,0, 0.06) 0px 0px 4px;
		-webkit-box-shadow: rgba(0,0,0, 0.06) 0px 0px 4px;
	border-image: initial;
}

form p {
	margin: 0 0 10px 0;
}

form input.text, 
form select.text {
	color: #333;
	border: 1px solid #aaa;
	padding: 3px;
	font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
	font-size: 11px;
	/*width: 510px;*/
	width:100%;
	border-radius: 2px;
    box-sizing: content-box;
    -moz-box-sizing: content-box;
    -webkit-box-sizing: content-box;
}

form input.text:focus, 
form select.text:focus, 
form textarea.text:focus {
	outline: none;
	border: 1px solid #666 !important;
	box-shadow: rgba(0,0,0, 0.10) 0px 0px 6px;
		-moz-box-shadow: rgba(0,0,0, 0.10) 0px 0px 6px;
		-webkit-box-shadow: rgba(0,0,0, 0.10) 0px 0px 6px;
}

form textarea {
	width: 100%;
	height: 420px;
	line-height: 15px;
	text-align: left;
	color: #333;
	border: 1px solid #aaa;
	padding: 3px;
	font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
	font-size: 11px;
	border-radius: 2px;
	tab-size:4; 
	 -moz-tab-size:4; 
	 -o-tab-size:4; 
}

textarea.short {
	height:62px;
}

form input[readonly], form select[readonly], form textarea[readonly] {
	background: #eeeeee;
	border: 1px solid #999;
	color: #666;
	cursor: default;
}

form input.capslock {
	background-image: url('images/capslock.png');
	background-position: right center;
	background-repeat: no-repeat;
}

textarea#codetext {
	height: 660px;
	width: 99%;
	font-family: Consolas, Monaco, "Courier New", Courier, monospace;
	font-size: 13px;
	line-height: 13px;
	overflow: scroll;
	overflow-y: scroll;
	overflow-x: scroll;
	 
}

#menu-items span {
	text-transform: lowercase;
}

label {
	padding: 0;
	margin: 0;
	color: #222;
	display: block;
	font-size: 12px;
	font-weight: bold;
	font-family: arial, helvetica, sans-serif
}

label span.right {
	float: right;
	color: #999;
	display: inline-block;
	margin-right: 15px;
	font-weight: 100 !important;
	font-size: 11px !important;
}

label span.right a:link, 
label span.right a:visited {
	font-size: 11px;
	color: #999;
	text-decoration: none;
	font-weight: 100 !important;
}

label span.right a:focus, 
label span.right a:hover {
	font-size: 11px;
	color: #333;
	text-decoration: underline;
	font-weight: 100 !important;
}

.inline label {
	display: inline-block;
	padding-top: 3px;
}

label.checkbox {
	width: 100px;
	margin-right: 3px;
	text-align: right;
	font-weight: normal;
}

/* meta dropdown style */
#metadata_window,fieldset {
	margin: 0 2px 0 0;
	background: #f9f9f9;
	border: 1px solid #e8e8e8;
	padding: 15px 10px 5px 10px;
	border-radius: 2px;
	text-shadow: 1px 1px 0 rgba(255,255,255,.3);
}

.rightopt {
	float: right;
	width: 48%;
}

.leftopt {
	float: left;
	width: 48%;
}

.wideopt {
	clear:both;
	width: 100%;
}

.leftopt p,.rightopt p,.wideopt p{
	margin:0 10px 15px 0;
}

.leftopt input,.rightopt input,.wideopt input{
	margin:0;
}

.leftopt select,.rightopt select,.wideopt select{
	margin:0;
}

input#post-menu-enable {
	width: 20px;
	padding: 0;
	margin: 0;
}

select.text.autowidth {
	width: 155px;
	float: right;
}

p.post-menu {
	margin-bottom: 5px;
}

a.viewlink img {
	vertical-align: baseline;
	margin-left: 15px;
	opacity: .5;
}

a.viewlink:hover img {
	opacity: 1;
}

#menu-items {
	height: 50px;
	background: #222;
	padding: 5px 18px 0 10px;
	position: relative;
	border-radius: 2px;
	margin-bottom:5px;
}

#menu-items #tick {
	margin-top: -10px;
	left: 5px;
	position: absolute;
}

#menu-items input, 
#menu-items select {
	border: 1px solid #000;
	padding:3px;
}

#menu-items span label {
	text-shadow: none;
	display: inline-block;
	font-size: 11px;
	line-height: 16px;
	color: #e3e3e3;
	font-weight: normal;
	margin: 0;
	padding: 0;
}

#menu-items select {
	padding: 2px 3px;
	/*margin-left:13px;*/
}

.countdownwrap {
	display: inline-block;
	color: #999;
	font-size: 11px;
	font-weight: normal;
	float: right;
}

.countdownwrap strong {
	color: #555;
	font-weight: normal;
}

.maxchars {
	color:red !important;
	font-weight:bold !important;
}

form table.formtable select {
	width: 275px;
	padding: 3px 4px;
}

table.cleantable {
	border-collapse: collapse;
	margin: 0 0 0 0;
}

table.cleantable tr {
	border: none;
}

table.cleantable tr td {
	border: none;
}

#autosavenotify {
	padding: 15px 0 0 13px;
	color: #666;
	text-shadow: 1px 1px 0 #fff;
	font-size: 11px;
}

#pagechangednotify {
	margin: 0px;
	padding: 15px 0 0 13px;
	color: #CC0000;
	text-shadow: 1px 1px 0 #fff;
	font-size: 11px;
}

p.backuplink {
	text-shadow: 1px 1px 0 rgba(255,255,255,.3);
	color: #888;
	font-size: 11px;
	margin: 20px -20px -20px -20px;
	padding: 10px 8px 10px 40px;
	background: #f9f9f9 url('images/clock.png') 20px center no-repeat;
	border-top: 1px solid #eee;
}

p.backuplink a {
	font-weight: 100 !important;
}

.editing {
	font-size: 10px;
	padding: 3px;
	display: block;
	/*margin-top: -13px;*/
	margin-bottom: -10px;
	color: #888;
	font-style: italic;
}

/* form submit button style */
/*
input.submit {
	padding: 5px 12px;
	font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
	font-weight: bold;
	cursor: pointer;
}*/

input.submit {
	font: bold 13px Helvetica, Arial, sans-serif;
	text-decoration: none;
	padding: 7px 15px;
	text-shadow: 0 1px 0 rgba(255,255,255,.5);
	transition: all .218s;
		-webkit-transition: all .218s;
		-moz-transition: all .218s;
		-o-transition: all .218s;
	color: #333333;
	background: #dddddd;
		background: -webkit-gradient(linear,0% 40%,0% 70%,from(#eeeeee),to(#e1e1e1));
		background: -moz-linear-gradient(linear,0% 40%,0% 70%,from(#eeeeee),to(#e1e1e1));
	border: solid 1px #acacac;
	border-radius: 2px;
		-webkit-border-radius: 2px;
		-moz-border-radius: 2px;
	cursor: pointer;
	box-shadow: rgba(0,0,0, 0.06) 0px 0px 3px;
		-moz-box-shadow: rgba(0,0,0, 0.06) 0px 0px 3px;
		-webkit-box-shadow: rgba(0,0,0, 0.06) 0px 0px 3px;
}

input.submit:focus, input.submit:hover {
	color: #111111;
	background: #eeeeee;
		background: -webkit-gradient(linear,0% 40%,0% 70%,from(#eeeeee),to(#dddddd));
		background: -moz-linear-gradient(linear,0% 40%,0% 70%,from(#eeeeee),to(#dddddd));
	border: solid 1px #aaaaaa;
	box-shadow: rgba(0,0,0, 0.15) 0px 0px 4px;
		-moz-box-shadow: rgba(0,0,0, 0.15) 0px 0px 4px;
		-webkit-box-shadow: rgba(0,0,0, 0.15) 0px 0px 4px;	  
}

.leftsec,.rightsec {
	float: left;
	width: 50%;
	padding-bottom: 5px;
}

.widesec {
	clear: both;
	width: 100%;
	padding-bottom: 5px;
}

.widesec input.text, .rightsec input.text, .leftsec input.text {
	width: 100%;
	font-size:12px !important;
}	

.widesec input.text, .rightsec select.text, .leftsec select.text {
	width: 100%;
	font-size:12px !important;
}

.leftsec p,.rightsec p,.widesec p {
	margin: 0 20px 20px 0;
}

/* edit css */
form input.title {
	font-size: 19px;
	border-color: #999;
	width: 635px;
	padding: 3px 4px;
}

form input.secondary {
	width: 280px;
}

/* components css */
form.manyinputs input.text {
	width: 230px;
}

form.manyinputs textarea {
	width: 632px;
	height: 200px;
	font-size:12px !important;
	font-family: Consolas, Monaco, Menlo, 'Ubuntu Mono', 'Droid Sans Mono', monospace !important;
}

form.manyinputs p {
	margin: 0 0 25px 0;
}

.compdiv {
	padding: 10px 0 35px 0;
}

table.comptable {
	margin: 0px !important;
	width: 645px;
	background: #fff;
	border: none;
	padding: 0;
}

table.comptable tr td {
	font-size: 12px;
	border: none;
	padding: 0;
}

table.comptable tr td code {
	font-size: 11px;
	color: #666;
	padding: 0 4px 0 0;
	display: block;
	font-family: Consolas, Monaco, "Courier New", Courier, monospace;
}

table.comptable tr {
	border: none;
	border: none !important;
}

table.comptable tr td input.newtitle {
	margin-bottom: 2px !important;
}

.wrapper a.component {
	float: left;
	font-weight: bold;
	margin: 0 5px 5px 0;
	padding: 3px 10px;
	text-decoration: none;
	border-radius: 3px;
	-moz-border-radius: 3px;
	-khtml-border-radius: 3px;
	-webkit-border-radius: 3px;
}

.wrapper a.component:link, .wrapper a.component:visited {
	color: #666;
	background: #fff;
	border: 1px solid #999;
	text-decoration: none;
}

.wrapper a.component:hover {
	color: <?php echo $primary_6; ?>;
	background: <?php echo $primary_1; ?>;
	border: 1px solid <?php echo $primary_0; ?>;
	text-decoration: none;
}

.compdivlist {
	padding: 30px 0;
	text-align: center;
	margin: 0 0 0 15px;
	overflow: auto;
}

/* Notification styles
 *
 * alerts are now notifications 
 * use notify and notify_type
 * .error and .upddated are still supported for legacy alerts
 *
 */ 

.updated, .error, .notify {
	border: 1px solid #E6DB55;
	border-radius: 2px;
	background: #FFFBCC;
		background: -moz-linear-gradient(top, #FFFBCC 0%, #FFFBC1 100%);	/* firefox */
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#FFFBCC), color-stop(100%,#FFFBC1));	/* webkit */
	line-height: 22px;
	padding: 5px 10px;
	margin-bottom: 20px;
}

.updated p, .error p, .notify p {
	margin: 0;
	line-height: 22px;
}

.error, .notify_error {
	color: #990000;
	border-color: #cc0000;
	background: #F9DFDD;
		background: -moz-linear-gradient(top, #FCF0EF 0%, #F9DFDD 100%);	/* firefox */
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#FCF0EF), color-stop(100%,#F9DFDD));	/* webkit */
}

.notify_ok {
	border-color: #258815;
	color: #258815;
	background: #f0ffed;	/* Old browsers */
		background: -moz-linear-gradient(top,  #f0ffed 0%, #dfffd7 100%);	/* FF3.6+ */
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f0ffed), color-stop(100%,#dfffd7));	/* Chrome,Safari4+ */
		background: -webkit-linear-gradient(top,  #f0ffed 0%,#dfffd7 100%);	/* Chrome10+,Safari5.1+ */
		background: -o-linear-gradient(top,  #f0ffed 0%,#dfffd7 100%);	/* Opera 11.10+ */
		background: -ms-linear-gradient(top,  #f0ffed 0%,#dfffd7 100%);	/* IE10+ */
		background: linear-gradient(to bottom,  #f0ffed 0%,#dfffd7 100%);	/* W3C */
		filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#f0ffed', endColorstr='#dfffd7',GradientType=0 );	/* IE6-9 */
}

.notify_info {
	border-color: #2850C1;
	color: #2850C1;
	background: #edf4ff;	/* Old browsers */
		background: -moz-linear-gradient(top,  #edf4ff 0%, #d7e7ff 100%);	/* FF3.6+ */
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#edf4ff), color-stop(100%,#d7e7ff));	/* Chrome,Safari4+ */
		background: -webkit-linear-gradient(top,  #edf4ff 0%,#d7e7ff 100%);	/* Chrome10+,Safari5.1+ */
		background: -o-linear-gradient(top,  #edf4ff 0%,#d7e7ff 100%);	/* Opera 11.10+ */
		background: -ms-linear-gradient(top,  #edf4ff 0%,#d7e7ff 100%);	/* IE10+ */
		background: linear-gradient(to bottom,  #edf4ff 0%,#d7e7ff 100%);	/* W3C */
		filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#edf4ff', endColorstr='#d7e7ff',GradientType=0 );	/* IE6-9 */
}

.notify_warning {
	border-color: #878314;
	color: #878314;
	background: #fffed5;	/* Old browsers */
		background: -moz-linear-gradient(top,  #fffed5 0%, #fffdbf 100%);	/* FF3.6+ */
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fffed5), color-stop(100%,#fffdbf));	/* Chrome,Safari4+ */
		background: -webkit-linear-gradient(top,  #fffed5 0%,#fffdbf 100%);	/* Chrome10+,Safari5.1+ */
		background: -o-linear-gradient(top,  #fffed5 0%,#fffdbf 100%);	/* Opera 11.10+ */
		background: -ms-linear-gradient(top,  #fffed5 0%,#fffdbf 100%);	/* IE10+ */
		background: linear-gradient(to bottom,  #fffed5 0%,#fffdbf 100%);	/* W3C */
		filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#fffed5', endColorstr='#fffdbf',GradientType=0 );	/* IE6-9 */
}

.deletedrow {
	background-color: #FFB19B;
}

.error code, 
.notify code {
	color: #990000;
	font-size: 11px;
	font-family: Consolas, "Andale Mono WT", "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", "DejaVu Sans Mono", "Bitstream Vera Sans Mono", "Liberation Mono", "Nimbus Mono L", Monaco, "Courier New", Courier, monospace;
	 
	line-height: 14px;
	background: #fff;
	opacity: .8;
	padding: 1px;
}

.updated,
#temp_good_flash {
	color: #308000;
}

.hint {
	color: #777;
	-ms-word-break: break-all;
	    word-break: break-all;
	    word-break: break-word; 
	-webkit-hyphens: auto;
	   -moz-hyphens: auto;
	        hyphens: auto;
}

/* file listing table style */
#filetypetoggle {
	color: #999;
	font-size: 12px;
}

table td.delete {
	width: 20px;
	text-align: center;
}

table td.delete a {
	font-size: 18px !important;
	line-height: 16px;
}

.view {
	width: 48px;
	text-align: center;
}

.editl {
	width: 40px;
	text-align: center;
}

.editlw {
	width: 220px;
	text-align: left;
}

.delete a:link, 
.delete a:visited {
	color: #999 !important;
	text-decoration: none !important;
	padding: 1px;
	display: block;
	line-height: 16px;
	font-size: 12px;
	font-weight: normal;
	-webkit-transition: all .05s ease-in-out;
	-moz-transition: all .05s ease-in-out;
	-o-transition: all .05s ease-in-out;
	transition: all .05s ease-in-out;
	font-style:normal;
}

.delete a:hover {
	background: #D94136 !important;
	color: #fff !important;
	text-decoration: none !important;
	padding: 1px;
	line-height: 16px;
	display: block;
	font-size: 12px;
	font-weight: normal;
}

a.cancel:link, 
a.cancel:visited {	 
	font-weight: 100;
	color: #D94136 !important;
	text-decoration: underline;
	padding: 1px 3px;
	background: none !important;
	line-height: 16px;
	-webkit-transition: all .05s ease-in-out;
	-moz-transition: all .05s ease-in-out;
	-o-transition: all .05s ease-in-out;
	transition: all .05s ease-in-out;
}

a.cancel:hover {
	font-weight: 100;
	background: #D94136 !important;
	color: #fff !important;
	text-decoration: none !important;
	padding: 1px 3px;
	line-height: 16px;
}

a.cancel em {
	font-style: normal;
}

.wrapper .secondarylink {
	width: 20px;
	text-align: center;
	font-size: 12px;
	line-height: 14px;
}

.wrapper .secondarylink a:link, 
.wrapper .secondarylink a:visited {
	color: #aaa;
	text-decoration: none;
		font-weight: normal;
	padding: 1px;
	display: block;
	line-height: 16px;
	-webkit-transition: all .15s ease-in-out;
	-moz-transition: all .15s ease-in-out;
	-o-transition: all .15s ease-in-out;
	transition: all .15s ease-in-out;
}

.wrapper .secondarylink a:hover {
	background: <?php echo $primary_3; ?>;
	color: #FFF;
	text-decoration: none;
	font-weight: normal;
	padding: 1px;
	display: block;
	line-height: 16px;
}

.delete a:link, .delete a:visited, .wrapper .secondarylink a:link, .wrapper .secondarylink a:visited, a.cancel:link, a.updatelink:link{
	border-radius:3px;
}

/* backup info display */
table.simple td {
	border: 1px solid #eee;
	border-collapse: collapse;
	color: #555;
	font-size: 12px;
	padding: 4px 10px 4px 4px;
}

table.simple {
	width: 100%;
	border: 1px solid #aaa;
}

table.simple td.title {
	width: 125px;
	color: #222;
	font-weight: bold;
}


/* footer */
#footer {
	border-top: 1px solid #e3e3e3;
	text-shadow: 1px 1px 0 rgba(255,255,255,.4);
	margin: 40px 0 0 0;
	padding: 10px 0;
	font-size: 11px;
	color: #888;
}

#footer p {
	margin: 0 0 8px 0;
}

#footer a:link, 
#footer a:visited {
	font-weight: 100;
	color: #888;
}

#footer a:focus, 
#footer a:hover {
	font-weight: 100;
	color: #333;
}	
#footer .gslogo a {
	float: right;
	width: 60px;
	text-align: right;
	opacity: .10;	
}

#footer .footer-left {
	float: left;
	width: 85%;
}

#footer .gslogo a:link,
#footer .gslogo a:visited  {
	transition: opacity .2s ease-in-out;
		-webkit-transition: opacity .2s ease-in-out;
		-moz-transition: opacity .2s ease-in-out;
		-o-transition: opacity .2s ease-in-out;
}

#footer .gslogo a:hover  {
	opacity: 1;
}

.toggle {
	display: none;
}

.editable {
	padding: 3px 1px;
	cursor: pointer;
	transition: background-color .3s ease-in-out;
		-webkit-transition: background-color .3s ease-in-out;
		-moz-transition: background-color .3s ease-in-out;
		-o-transition: background-color .3s ease-in-out;
}

.editable:hover {
	 background: #FCFBB8;
}

.wrapper table td span.ERRmsg {
	color: #D94136;
	font-color: 12px;
}

.wrapper table td span.OKmsg {
	color: #308000;
	font-color: 12px;
}

.wrapper table td span.WARNmsg {
	color: #FFA500;
	font-color: 12px;
}

.wrapper table td span.INFOmsg {
	color: #2B5CB3;
	font-color: 12px;
}

.wrapper table.highlight tr.img-highlight {
	background: #FFFFD1 !important;
}

.wrapper table.highlight tr.img-highlight td a.primarylink {
	font-weight: bold !important;
}


#sidebar .uploadform {
	padding: 5px 15px;
}


/* JQuery Uploadify Styles */
.uploadify-queue-item {
	font-size: 10px;
	padding: 8px 15px;
	width: 190px;
}

.uploadify-error {
	color: #D94136 !important;
}

.uploadify-error .uploadify-progress-bar {
	background-color: #D94136 !important;
}	

#sidebar .snav li .cancel {
	float: right;
}

#sidebar .snav li .cancel a:link,
#sidebar .snav li .cancel a:visited,
#sidebar .snav li .cancel a:hover {
	padding:0 !important;
	margin: 0 4px 0 0 !important;
	width: 11px !important;
	opacity: .8;	
	background: transaparent !important;
}

.uploadify-progress {
	background-color: #FFF;
	margin-top: 5px;
	width: 97%;
}

.uploadify-progress-bar {
	background-color: <?php echo $primary_6; ?>;
	width: 1px;
	height: 4px;
}

#sidebar .snav li.upload {
	display: block;
	border-radius: 4px;
		-moz-border-radius: 4px;
		-khtml-border-radius: 4px;
		-webkit-border-radius: 4px;
	margin-left: 13px;
	color: #FFF;
	background: <?php echo $primary_1; ?>;
	font-weight: 100;
}

.uploadify-button {
	width: 100%;
	border-radius: 4px;
		-webkit-border-radius: 4px;
		-moz-border-radius: 4px;
	display: block;
	font-weight: bold;
	color: #AFC5CF;
	background: #182227;
	text-shadow: 1px 1px 0px #0E1316;
	transition: all .3s ease-in-out;
		-webkit-transition: all .3s ease-in-out;
		-moz-transition: all .3s ease-in-out;
		-o-transition: all .3s ease-in-out;
}

.uploadify:hover .uploadify-button {
	background-color: #0e1316;
	color: #ffffff;
	text-shadow: 1px 1px 0px #000;
}

.uploadify-button-text{
	padding: 5px 15px 5px 15px;
	/*display: block;*/
}

.uploadify {
	position: relative;
	margin-bottom: 1em;
}


/* Image Editor Styles */
textarea.copykit {
	font-family: Consolas, "Andale Mono WT", "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", "DejaVu Sans Mono", "Bitstream Vera Sans Mono", "Liberation Mono", "Nimbus Mono L", Monaco, "Courier New", Courier, monospace;
	font-size: 12px;
	outline: none
	color: #666;
	border: 1px solid #aaa;
	line-height: 17px;
	padding: 4px;
	border-radius: 2px;
		-moz-border-radius: 2px;
		-khtml-border-radius: 2px;
		-webkit-border-radius: 2px;
	width: 98%;
	height: 70px;
	margin-bottom: 10px;
}

#handw {
	z-index: 1;
	padding: 8px;
	background: #000;
	opacity: .80;
	color: #fff;
	font-size: 11px;
	width: 150px;
	text-align: center;
	margin: 5px 0 0 0;
}

#handw span {
	font-size: 15px;
	font-weight: bold;
}

#jcropform .submit {
	margin: 20px 0 0 0;
}

#jcrop_open {
}

a.updatelink:link, 
a.updatelink:visited {
	color: #CF3805;
	padding: 1px 3px;
}

a.updatelink:hover, 
a.updatelink:focus {
	color: #FFF;
	background-color: #2AA206;
	padding: 1px 3px;
}

/* Labels */
.label {
	padding: 1px 6px;	
	border-radius: 3px;	
	text-align: center;
	color: #F2F2F2;	
	margin:3px;
}

.label a{
	color: white;
}

.label a:hover{
	color: lightgray;
}

.label-ok {
	background-color: #2AA206;
}

.label-error {
	background-color: #CF1A0D;
}

.label-warn {
	background-color: orange;
}

.label-info {
	background-color: #2B5CB3;
}

.label-medium {
	color: #000000;
	background-color: #999;
}

.label-light{
	color: #666;
	background: #FFF;
	border: 1px solid #999;	
}

#hc_version.label {
	width: 280px;
	text-align: left;
	padding: 9px 9px 9px 15px;
	font-weight:normal;
}

#hc_alert {
	float: right;
	margin-top: -15px;
	font-weight: bold;
	color: #5C5C5C;
}

#hc_alert .label {
	color: #FCFCFC !important;
	width: 90px;
	text-align: center;
	padding: 1px 10px;
	font-weight: normal;
	font-weight: bold;
}

.wrapper table td span.label {
	font-weight: bold;
	color: #FCFCFC !important;
	text-shadow: none !important;
	width:50px;
	display:block;
	line-height:normal;
	float:right;
	margin:0;
}

td.hc_item {
	width: 330px;
}

/* File Browser Styles */
#filebrowser {
	background: #fff;
}


/* plugin styles */
table tr.enabled {
	background: #fff;
}

#maincontent table tr.enabled td span {
	color: #333;
}

table tr.disabled {
	background: #f6f6f6;
}

table tr.disabled td b {
	color: #666;
}


/* Logged out specific styles */
body#index {
	background: #f9f9f9;
}

#index .header,
#resetpassword .header,
#setup .header,
#install .header,
#setup .gslogo,
#install .gslogo,
#index .gslogo,
#resetpassword .gslogo {
	display: none;
}

#index #maincontent,
#resetpassword #maincontent,
#setup #maincontent,
#install #maincontent {
	width: 100%;
}

#index #maincontent .main,
#resetpassword #maincontent .main,
#setup #maincontent .main,
#install #maincontent .main {
	margin: 50px auto 0 auto;
	float: none;
	text-align: left;
	border-radius: 5px;
		-moz-border-radius: 5px;
		-khtml-border-radius: 5px;
		-webkit-border-radius: 5px;
	box-shadow: rgba(0,0,0, 0.05) 0px 0px 10px;
		-moz-box-shadow: rgba(0,0,0, 0.05) 0px 0px 10px;
		-webkit-box-shadow: rgba(0,0,0, 0.05) 0px 0px 10px;
	background: #FFF;
	width: 645px;
}

#setup #maincontent .main {
	width: 270px;
}

#setup input.text {
	width: 250px;
}

#index #maincontent .main,
#resetpassword #maincontent .main {
	width: 270px;
	border-bottom: 1px solid #999;
	border-right: 1px solid #999;
	text-shadow: 1px 1px 0 #fff;
	background: #FFF;
		background: -moz-linear-gradient(top, #f9f9f9 5%, #eeeeee 100%);	/* firefox */
		background: -webkit-gradient(linear, left top, left bottom, color-stop(5%,#f9f9f9), color-stop(100%,#eeeeee));	/* webkit */
}

#resetpassword form input.text,
#index form input.text {
	width: 255px;
	font-size: 18px;
	padding: 5px;
	margin-top: 2px;
}

#index form input.submit {
}

#index p.cta,
#resetpassword p.cta {
	font-size: 11px;
	margin: 0 0 0 0;
	color: #999;
	text-align: center;
}

#index form p,
#resetpassword form p {
	margin-bottom: 15px;
}

#index p.cta a,
#resetpassword p.cta a {
	font-weight: 100;
}

#setup .error, 
#setup .updated,
#install .error, 
#install .updated,
#index .error, 
#index .updated,
#resetpassword .error, 
#resetpassword .updated {
	margin: 25px auto -23px auto;
	width: 290px;
	line-height: 18px;
	padding: 5px 10px;
}

#setup #footer,#install #footer,#index #footer, #resetpassword #footer {
	width: 270px;
	border-top: none;
	margin: 0 auto 20px auto;
	text-align: center;
}

#index .footer-left,#resetpassword .footer-left  {
	float: none;
	width: 100%;
}

.desc {
	font-size: 12px;
	line-height: 17px;
	border-bottom: 1px dotted #ccc;
	padding: 0 0 15px 0;
	margin: 0 0 5px 0;
}

#filter-search  {
	margin: 0 0 10px 0;
	display: none;
}

#filter-search input.text {
	width: 250px;
	font-size: 11px;
	padding: 3px;
}

#createfolder {
	font-weight: 100;
	font-size: 11px;
	text-decoration: underline !important;
}

h5 .crumbs, div.h5 .crumbs {
	float: left;
}

#new-folder {
	float: left;
	padding-left: 5px;
}

#new-folder form {
	display: none;
}

#new-folder .cancel {
	font-size: 11px;
	text-shadow: none !important;
}

#new-folder input.submit {
	font-size: 11px;
	padding: 3px;
}

#new-folder input.text {
	width: 120px;
	font-size: 11px;
	padding: 3px;
}

#edit #dropdown {
	display: inline-block;
	padding: 3px 15px;
	position: relative;
}

#edit #dropdown h6 {
	font-weight: bold;
	font-size: 11px;
	color: #777;
	margin-bottom: 5px;
	font-weight: 100;
	padding-right: 15px;
	display: inline-block;
	background: transparent url('images/utick.png') right center no-repeat;
}

#edit #dropdown:hover h6 {
	visibility: hidden;
}

#edit #dropdown ul {
	display: none;
	text-shadow: 1px 1px 0 #fff;
	list-style: none;
	margin: 0;
	font-size: 11px;
	opacity: 0;
	background: #f6f6f6;
	border: 1px solid #ccc;
	position: absolute;
	top: -5px;
	left: 5px;
	min-width: 100px;
	border-radius: 2px;
		-moz-border-radius: 2px;
		-khtml-border-radius: 2px;
		-webkit-border-radius: 2px;
	transition: opacity .3s ease-in-out;
		-webkit-transition: opacity .3s ease-in-out;
		-moz-transition: opacity .3s ease-in-out;
		-o-transition: opacity .3s ease-in-out;
	box-shadow: rgba(0,0,0, 0.2) 1px 1px 3px 0;
		-moz-box-shadow: rgba(0,0,0, 0.2) 1px 1px 3px 0;
		-webkit-box-shadow: rgba(0,0,0, 0.2) 1px 1px 3px 0;
	overflow: hidden;
}

#edit #dropdown li {
	line-height: 22px;
	border-bottom: #eee 1px solid;
	padding: 0 8px;
}

#edit #dropdown li:last-child {
	border: none;
}

#edit #dropdown li a:link, 
#edit #dropdown li a:visited,
#edit #dropdown li a:hover {
	font-weight: 100;
	color: #666;
	text-decoration: none;
	display: block;
}

#edit #dropdown li:hover {
	background: #fff;
}

#edit #dropdown li:hover a {
	color: #cc0000;
}

#edit #dropdown li.alertme:hover {
	background: #cc0000;
}

#edit #dropdown li.alertme:hover a {
	color: #FFF;
	text-shadow: none;
}

#edit #dropdown:hover ul {
	display: block;
	opacity: 1;
}

.wrapper #maincontent ul#menu-order {
	list-style: none;
	margin: 0 0 25px 0;
}

#menu-order li {
	text-shadow: 1px 1px solid rgba(255,255,255,.3);
	cursor: move;
	display: block;
	margin: 2px 0;
	border: 1px solid #eee;
	background: #fbfbfb;
	padding: 5px 10px;
}

#menu-order li:hover {
	border: 1px solid #ccc;
	background: #f6f6f6;
}

#menu-order li em {
	float: right;
	color: #666;
}

#menu-order li.placeholder-menu {
	height: 18px;
	background: #FFB164;
	border: 1px solid #FF9933;
}

#theme_select {
	font-size:16px;
	font-weight:bold;	
}

#theme-edit #maincontent {
	width: 100%;
}

#theme-edit #sidebar {
	display: none;
}

#gsdebug{
	border: 1px solid #FF9933;
	padding: 5px;
	background: white;
	height: 300px;
	overflow: scroll;
}

.ajaxwait {
	background-image: url('images/ajax.gif');
	background-position: center;
	background-repeat: no-repeat;
}

.ajaxwait_dark {
	background-image: url('images/ajax_dark.gif');
}

.ajaxwait_tint_dark {
	background-color: #F6F6F6;
}

a.disabled:link,
a.disabled:visited {
	pointer-events: none;
	cursor: default;
	text-decoration: none !important;
	color: #CCC !important;	
}

/* 
 * Theme Editor custom layout
 */

#theme-edit .updated, #theme-edit .error, #theme-edit .notify {
	margin: 0 15px 15px 15px;
}

#theme-edit #header .wrapper{
	width:950px;
}

#theme-edit .wrapper{
	width: 100%;
	max-width:1680px;
}

#theme-edit #footer{
	margin-left: 15px;
	margin-right: 15px;
}

#theme-edit .bodycontent {
	margin:0 15px;
}

#theme_edit_wrap {
	width:100%;
	margin:0;
	padding:0;	
}

#theme_edit_wrap .well{
	background-color:#F9F9F9;	
	border:1px solid #E8E8E8;
	border-radius: 2px;
	padding:6px;
	line-height:27px;
	height:24px;
}	

#theme_edit_nav {
	width: 20%;
	float: left;
}

#theme_edit_select{
	margin-right:10px;
}

#theme_edit_select select{
	width:100%;
	padding: 2px;
	border-radius: 2px;
	border: 1px solid rgb(189, 189, 189);
}

#theme_edit_select .well{
	background-color:#DDD;
}

#theme_edit_code {
	float:left;
	width:80%;	
}

#theme_edit_code .well{
	padding-left: 12px;
	margin-bottom:14px;
}

#theme_edit_code .CodeMirror{
	/*border:1px solid #E8E8E8;*/
	border-radius:2px;
	min-height:550px;	
}

#cm_themeselect {
	float: right;
}

#theme_filemanager {
	margin: 14px 10px 20px 0;
	background: #F9F9F9;
	border: 1px solid #E8E8E8;
	border-radius:2px;
	padding:15px 10px 15px 10px;
	/*height: 60%;*/
	padding: 8px;
	overflow: auto;

}

#theme_filemanager ul {
		display: block;
		margin: 0 !important;
		padding: 0;
		line-height: 14px !important;
}
#theme_filemanager li {
		display: block;
		margin: 0;
		padding: 2px 0;
		list-style: none;
}
#theme_filemanager ul ul li {
		margin-left: 20px;
		white-space: nowrap;
}
#theme_filemanager a {
		display: block;
		min-width: 100%;
		cursor: pointer;
		padding: 5px 0;
		border-radius: 5px;
		text-decoration: none;
		font-weight: normal;
		font-family: sans-serif;
		color: #333;
}

#theme_filemanager ul ul{
	display:none;
}

#theme_filemanager a:hover, #file-manager a.context-menu-active {
		background-color: #E0E0E0;
		text-decoration:none;
		font-weight:normal;
}

#theme_filemanager a.open {
		background-color: #E0E0E0;
		font-weight:bold;
}

#theme_filemanager .well{
	border-radius:4px;
	background-color:#CCC;
	padding:4px 8px;
}

#theme_filemanager #theme-folder{
	width:100% !important;
}

/* ICONS */

#theme_filemanager a {
		background-repeat: no-repeat;
		background-position: 6px 6px;
		text-indent: 28px;
		padding-top: 6px;
}

#theme_filemanager .directory {
		background-image: url(images/filemanager/folder.png);
}

#theme_filemanager .dir-open {
		background-image: url(images/filemanager/folder-open.png);
}

/* File Extension icons*/
.file {    background-image: url(images/filemanager/text-x-generic.png); }
.ext- {background-image: url(images/filemanager/text-x-preview.png);}
.ext-js {background-image: url(images/filemanager/application-javascript.png);}
.ext-html {background-image: url(images/filemanager/text-html.png);}
.ext-htm {background-image: url(images/filemanager/text-html.png);}
.ext-php {background-image: url(images/filemanager/application-x-php.png);}
.ext-css {background-image: url(images/filemanager/text-css.png);}
.ext-theme {background-image: url(images/filemanager/preferences-desktop-theme.png);}
.ext-wait {background-image: url(images/ajax_dark.gif);}

/* Grayscale */
.desaturate, .dir-empty{
		filter: grayscale(100%); /* Current draft standard */
		-webkit-filter: grayscale(100%); /* New WebKit */
		-moz-filter: grayscale(100%);
		-ms-filter: grayscale(100%); 
		-o-filter: grayscale(100%); /* Not yet supported in Gecko, Opera or IE */ 
		/*filter: url(resources.svg#desaturate); /* Gecko */*/
		filter: gray; /* IE */
		-webkit-filter: grayscale(1); /* Old WebKit */
}

/* codemirror */
/* CodeMirror WEBKIT SCROLLBARS */

/* scroll on focus only */
.CodeMirror:not(.CodeMirror-focused) .CodeMirror-hscrollbar,
.CodeMirror:not(.CodeMirror-focused) .CodeMirror-vscrollbar
{
	/*visibility: hidden !important;*/
	opacity:0.2;
}

.CodeMirror .CodeMirror-hscrollbar,
.CodeMirror .CodeMirror-vscrollbar{
	/*visibility: visible;*/
	opacity:1;
}

.CodeMirror .CodeMirror-hscrollbar{
	margin: 0px 15px 2px 2px;	
}

.CodeMirror .CodeMirror-vscrollbar{
	margin: 2px 2px 15px 0;	
}

.CodeMirror ::-webkit-scrollbar {
		width: 10px;
		height: 10px;
}
.CodeMirror ::-webkit-scrollbar-track-piece {
		background-color: rgba(100,100,100,.2);
		-webkit-border-radius: 0;
		border-radius: 3px;
}

.CodeMirror ::-webkit-scrollbar-track-piece:vertical {
	/*margin-bottom:10px;*/
}

.CodeMirror ::-webkit-scrollbar-track-piece:horizontal {
	/*margin-right:10px;*/
}

.CodeMirror ::-webkit-scrollbar-thumb:vertical {
		height: 25px;
		background-color: rgba(100,100,100,.5);
		-webkit-border-radius: 3px;
		border:1px solid #666;	
}
.CodeMirror ::-webkit-scrollbar-thumb:vertical:hover {
		background-color: #666;
}
.CodeMirror ::-webkit-scrollbar-thumb:horizontal {
		width: 25px;
		background-color: rgba(100,100,100,.5);
		-webkit-border-radius: 3px;
		border:1px solid #666;
}
.CodeMirror ::-webkit-scrollbar-thumb:horizontal:hover {
		background-color: #666;
}
.CodeMirror ::-webkit-scrollbar-corner {
		background-color: transparent;
}

.CodeMirror-focused .cm-matchhighlight{ 
	border: 1px solid #777777;
	border-radius: 3px;
	margin:-1px; /* border offset */
}

.CodeMirror-focused .CodeMirror-activeline-background{
	background-color:gray;
	opacity:.08;
}

.CodeMirror-foldmarker {
	color: white;
	text-shadow: #000 1px 1px 2px, #000 -1px -1px 2px, #000 1px -1px 2px, #000 -1px 1px 2px;
	font-family: arial;
	line-height: .3;
	cursor: pointer;
}

.codewrap {
	font-size: 13px;
	line-height: 13px;	
}

/* codemirror overrides */
.codewrap .CodeMirror {
	font-family: Consolas, Monaco, Menlo, 'Ubuntu Mono', 'Droid Sans Mono', monospace;	
	height: auto;
	max-height: 550px;/* autosizing max height */
	background-color:#FEFEFE;
	/*padding-bottom:20px;*/
	border: 3px solid rgba(128,128, 128, .15);
    -webkit-background-clip: padding-box !important; /* for Safari */
    background-clip: padding-box !important; /* for IE9+, Firefox 4+, Opera, Chrome */
}

/* codemirror focused border highlight style */
.codewrap .CodeMirror.CodeMirror-focused{
/*    outline: none;
    border-color: #9ecaed;
    box-shadow: 0 0 10px #9ecaed;*/
}

.codewrap .CodeMirror-scroll {
	max-height: inherit; /* autosizing max height */
	overflow-y: auto;
	overflow-x: auto;
}

.codewrap .CodeMirror.CodeMirror-fullscreen{
    border: none;
}    

.CodeMirror-fullscreen {
	border: none;
	display: block;
	position: fixed !important;
	top: 0; left: 0;
	width: 100% !important;
	z-index: 9999;
	background-color:#FFF;
  	max-height: none !important;	
}

.CodeMirror-fullscreen .CodeMirror-scroll, .CodeMirror.ui-resizable-resizing, .CodeMirror.ui-resizable-resizing .CodeMirror-scroll{
  	max-height: none !important;		
}

.CodeMirror .overlay_but_fullscrn a {
	position: absolute;
	top: 4px;
	right: 4px;
	width: 16px;
	height: 16px;
	padding: 2px;
	background-color: #777777;
	border-radius: 4px;
	color: whitesmoke;
	font-size: 16px;
	text-align: center;
	text-decoration:none;
	z-index: 9998;
	font-weight: normal;
	opacity:.2;
	transition: all 300ms;
}

.CodeMirror .overlay_but_fullscrn a.scrolled {
	right: 14px;
}

.CodeMirror .overlay_but_fullscrn a:hover {
	opacity:.6;
}

/* jquiry-ui theme overrides 
	tab border bug https://github.com/jquery/download.jqueryui.com/issues/87
*/

.CodeMirror .ui-icon-gripsmall-diagonal-se {
	background-position: -64px -224px;
	background-color: rgba(119, 119, 119, 0.2);
	border-radius: 4px;
	width: 13px;
	height: 13px;
}

.CodeMirror .ui-icon-gripsmall-diagonal-se:hover {
	background-color: rgba(119, 119, 119, 0.6);
}

#maincontent .ui-tabs .ui-tabs-panel {
	border-width: 0 !important; 
	padding: 0;	
	margin:10px 0px;
}

#maincontent .ui-widget-content {
	border-width:0 !important;
}	

#maincontent a.ui-tabs-anchor, #maincontent a.ui-tabs-anchor:hover{
	outline:0;
	font-weight:normal;
}

#maincontent .ui-tabs .ui-tabs-nav {
	padding:0 !important;
}

#maincontent .ui-tabs .ui-tabs-nav.ui-widget-header {
	border-top:none !important;
	border-left:none !important;
	border-right:none !important;
	background:none !important;
	border-bottom: 1px solid #aaa;
	border-radius:0 !important;
}

/* jui tabs */
#tabs ul.tab-list{
	display:none;
}

#tabs.ui-tabs ul.tab-list{
	display:block;
}

/* jqueryui tabs specivity overrides */
#tabs textarea {
	font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
	font-size: 11px;	
}

/* prevent ui tabs fouc */
.tab {
	display:none;
}

.tab fieldset legend{
	display: none;
}

.outline {
	border: 1px dotted gray;
}


/* Admin theme colors */

/* background-color */
  .primary_0.back, .darkest-back               { background-color: <?php echo $primary_0;   ?>;}
  .primary_1.back, .darker-back                { background-color: <?php echo $primary_1;   ?>;}
  .primary_2.back, .dark-back                  { background-color: <?php echo $primary_2;   ?>;}
  .primary_3.back, .middle-back                { background-color: <?php echo $primary_3;   ?>;}
  .primary_4.back, .light-back                 { background-color: <?php echo $primary_4;   ?>;}
  .primary_5.back, .lighter-back               { background-color: <?php echo $primary_5;   ?>;}
  .primary_6.back, .lightest-back              { background-color: <?php echo $primary_6;   ?>;}
.secondary_0.back, .secondary.darkest-back     { background-color: <?php echo $secondary_0; ?>;}
.secondary_1.back, .secondary.lightest-back    { background-color: <?php echo $secondary_1; ?>;}

/* color */
  .primary_0.color, .darkest-color             { color: <?php echo $primary_0;   ?>;}
  .primary_1.color, .darker-color              { color: <?php echo $primary_1;   ?>;}
  .primary_2.color, .dark-color                { color: <?php echo $primary_2;   ?>;}
  .primary_3.color, .middle-color              { color: <?php echo $primary_3;   ?>;}
  .primary_4.color, .light-color               { color: <?php echo $primary_4;   ?>;}
  .primary_5.color, .lighter-color             { color: <?php echo $primary_5;   ?>;}
  .primary_6.color, .lightest-color            { color: <?php echo $primary_6;   ?>;}
.secondary_0.color, .secondary.darkest-color   { color: <?php echo $secondary_0; ?>;}
.secondary_1.color, .secondary.lightest-color  { color: <?php echo $secondary_1; ?>;}

/* border color */
  .primary_0.border-color, .darkest-border             { border-color: <?php echo $primary_0;   ?>;}
  .primary_1.border-color, .darker-border              { border-color: <?php echo $primary_1;   ?>;}
  .primary_2.border-color, .dark-border                { border-color: <?php echo $primary_2;   ?>;}
  .primary_3.border-color, .middle-border              { border-color: <?php echo $primary_3;   ?>;}
  .primary_4.border-color, .light-border               { border-color: <?php echo $primary_4;   ?>;}
  .primary_5.border-color, .lighter-border             { border-color: <?php echo $primary_5;   ?>;}
  .primary_6.border-color, .lightest-border            { border-color: <?php echo $primary_6;   ?>;}
.secondary_0.border-color, .secondary.darkest-border   { border-color: <?php echo $secondary_0; ?>;}
.secondary_1.border-color, .secondary.lightest-border  { border-color: <?php echo $secondary_1; ?>;}

/* debug color */
  .primary_0.border-debug:after, .darkest-debug:after             { content: "<?php echo $primary_0;   ?>";}
  .primary_1.border-debug:after, .darker-debug:after              { content: "<?php echo $primary_1;   ?>";}
  .primary_2.border-debug:after, .dark-debug:after                { content: "<?php echo $primary_2;   ?>";}
  .primary_3.border-debug:after, .middle-debug:after              { content: "<?php echo $primary_3;   ?>";}
  .primary_4.border-debug:after, .light-debug:after               { content: "<?php echo $primary_4;   ?>";}
  .primary_5.border-debug:after, .lighter-debug:after             { content: "<?php echo $primary_5;   ?>";}
  .primary_6.border-debug:after, .lightest-debug:after            { content: "<?php echo $primary_6;   ?>";}
.secondary_0.border-debug:after, .secondary.darkest-debug:after   { content: "<?php echo $secondary_0; ?>";}
.secondary_1.border-debug:after, .secondary.lightest-debug:after  { content: "<?php echo $secondary_1; ?>";}

/*END*/