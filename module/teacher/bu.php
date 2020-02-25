
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::Flair-ERMS:: Bugema University :: Student Portal</title>
<!--[if IE]>
	<link rel="stylesheet" type="text/css" href="stylesheet/ie-only.css" />
<![endif]-->

<noscript><meta http-equiv="refresh" content="0; url=javascripterror.html" /></noscript>

<![if !IE]>
<link rel="stylesheet" type="text/css" href="stylesheet/stylesheet.css" />
<![endif]> 

<link href="image/favicon.png" rel="icon" style="width:16px; height:16px;" />
<!--<link rel="stylesheet" type="text/css" href="javascript/jquery/ui/themes/ui-lightness/jquery-ui-1.8.16.custom.css" />-->
<link rel="stylesheet" type="text/css" href="javascript/jquery/ui/themes/smoothness/jquery-ui.css" />
<link rel="stylesheet" type="text/css" href="stylesheet/delete_confirm.css" />
<link rel="stylesheet" type="text/css" href="stylesheet/demo_table_jui.css" />
<!--<link rel="stylesheet" type="text/css" href="stylesheet/jquery.dataTables.css" />-->
<link rel="stylesheet" type="text/css" href="stylesheet/jquery.fancybox.css" />

<script type="text/javascript" src="javascript/jquery/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="javascript/jquery/ui/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="javascript/jquery/tabs.js"></script>
<script type="text/javascript" src="javascript/jquery/superfish/js/superfish.js"></script>
<script type="text/javascript" src="javascript/jquery/jquery.validate.js"></script>
<script type="text/javascript" src="javascript/jquery/jconfirmaction.jquery.js"></script>
<!--<script type="text/javascript" src="javascript/jquery/jquery.dataTables.min.js"></script>-->
<script type="text/javascript" src="javascript/jquery/jquery.dataTables.js"></script>
<script type="text/javascript" src="javascript/jquery/jquery.fancybox.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
<script type="text/javascript">
//-----------------------------------------
// Confirm Actions (delete, uninstall)
//-----------------------------------------
$(document).ready(function(){
    // Confirm Delete
    $('#form').submit(function(){
		<!--Write Something-->
    });
	
	$('.fancybox').fancybox(); <!--Fancy Box is a view big size image (ex: Profile photo, Family Photo)-->
});

$(document).ready(function() {
	$('.ask').jConfirmAction();
});
</script>

<style type="text/css">
html {
    margin: 0;
    padding: 0;
    height: 100%;
}
body {
    margin: 0;
    padding: 0;
    height: 100%;
    background: #FFFFFF;
}
body, td, th, input, select, textarea, option, optgroup {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 12px;
    color: #000000;
}
input[type='text'], input[type='password'] {
    padding: 2px;
}
select {
    padding: 1px;
}
textarea {
    padding: 2px;
}
a, a:visited {
    color: #003366;
    text-decoration: underline;
    cursor: pointer;
}
a img {
    border: 0;
}
form {
    margin: 0;
    padding: 0;
}
label {
    cursor: pointer;
}
#header{
    width:100%;
}
#header .div1 {
    height: 55px;
    padding: 0px 30px;
    min-width: 1200px;
    /*background: url('../image/header.png') repeat-x;*/
    background: rgb(238,238,238); /* Old browsers */
    background: -moz-linear-gradient(top,  rgba(238,238,238,1) 0%, rgba(204,204,204,1) 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(238,238,238,1)), color-stop(100%,rgba(204,204,204,1))); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top,  rgba(238,238,238,1) 0%,rgba(204,204,204,1) 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top,  rgba(238,238,238,1) 0%,rgba(204,204,204,1) 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top,  rgba(238,238,238,1) 0%,rgba(204,204,204,1) 100%); /* IE10+ */
    background: linear-gradient(to bottom,  rgba(238,238,238,1) 0%,rgba(204,204,204,1) 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#eeeeee', endColorstr='#cccccc',GradientType=0 ); /* IE6-9 */
}
#header .div2 {
    color: #FFFFFF;
    padding: 3px 0px 0px 0px;
    float: left;
}
#header .div3 {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 12px;
    color: #000;
    text-align: right;
    padding: 15px 0px 0px 0px;
    float: right;
}
#header .div2 span {
    font-weight: bold;
}
#menu {
    /*background: url('../image/menu.png') repeat-x;*/
    background: #316398 url('../image/bg.png') repeat-x;
    position: relative;
    z-index: 1;
    height: 34px;
    clear: both;
    padding: 0px 30px;
    min-width: 1200px;
}
#menu > ul.left {
    float: left;
}
#menu > ul.right {
    float: right;
}
#menu > ul {
    position: relative;
    margin: 0;
    padding: 0;
}
#menu > ul ul {
    list-style: none;
    margin: 0;
    padding: 0;
    /*background: #1C3755;*/
    background: url('../image/transparent.png');
}
#menu > ul a {
    display: block;
    color: #FFFFFF;
    text-decoration: none;
    padding: 5px;
}
#menu > ul > li + li {
    background: url('../image/split.png') center left no-repeat;
}
#menu > ul .top, #menu > ul li li.sfhover {
    padding: 10px 15px 9px 17px;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 12px;
    color: #FFFFFF;
    text-align: center;
}
#menu > ul ul li {
    padding: 2px;
}
#menu > ul .selected .top {
    background: #1C3755;
    /*background: url('../image/selected.png') repeat-x;*/
    color: #FFFFFF;
    font-weight:bold;
}
#menu > ul .selected:hover a.top, #menu > ul .sfhover a.top {
}
#menu > ul .parent {
    background: url('../image/arrow-right.png') 95% center no-repeat;
}
#menu > ul li {
    float: left;
    list-style: none;
}
#menu > ul li ul {
    position: absolute;
}
#menu > ul li li {
    clear: both;
}
#menu > ul li ul a {
    color: #FFFFFF;
    height: 15px;
    width: 145px;
}
#menu > ul li ul ul {
    margin: -27px 0 0 157px;
}
#menu > ul li li:hover, #menu > ul li li.sfhover {
    background: #C55B27;
    color: #000000;
}
#container {
    height: 100%;
}
body > #container {
    height: auto;
    min-height: 542px; /*100%*/
}
#content {
    background: #FFFFFF url('../image/background.png') 0px 1px repeat-x;
    padding: 10px 30px 0px 30px;
    min-width: 1200px;

    /*padding-bottom: 128px;*/
}
#footer {
    min-width: 1200px;
    padding: 25px 60px 0px 0px;
    background: #FFFFFF url('../image/footer.png') repeat-x;
    height: 30px;
    text-align: center;
    font-size: 12px;
    color: #333;
    position: relative;
    /*margin-top: -128px;*/
    clear: both;
    border:0px solid #F00;
}
#footer a {
    color: #333;
    text-decoration: underline;
}
.breadcrumb, .breadcrumb a {
    font-size: 12px;
    color: #666;
    margin-bottom: 15px;
}
.success {
    padding: 10px 10px 10px 33px;
    margin-bottom: 15px;
    background: #EAF7D9 url('../image/success.png') 10px center no-repeat;
    border: 1px solid #BBDF8D;
    color: #555555;
    -webkit-border-radius: 5px 5px 5px 5px;
    -moz-border-radius: 5px 5px 5px 5px;
    -khtml-border-radius: 5px 5px 5px 5px;
    border-radius: 5px 5px 5px 5px;
}
.warning {
    padding: 10px 10px 10px 33px;
    margin-bottom: 15px;
    background: #FFD1D1 url('../image/warning.png') 10px center no-repeat;
    border: 1px solid #F8ACAC;
    color: #555555;
    -webkit-border-radius: 5px 5px 5px 5px;
    -moz-border-radius: 5px 5px 5px 5px;
    -khtml-border-radius: 5px 5px 5px 5px;
    border-radius: 5px 5px 5px 5px;
}
.attention {
    padding: 10px 10px 10px 33px;
    margin-bottom: 15px;
    background: #FFF5CC url('../image/attention.png') 10px center no-repeat;
    border: 1px solid #F2DD8C;
    color: #555555;
    -webkit-border-radius: 5px 5px 5px 5px;
    -moz-border-radius: 5px 5px 5px 5px;
    -khtml-border-radius: 5px 5px 5px 5px;
    border-radius: 5px 5px 5px 5px;
}
.required {
    color: #FF0000;
    font-weight: bold;
}
.error {
    margin-top: 3px;
    color: #FF0000;
    display: block;
    font-size: 12px;
    font-weight: normal;
}
.help {
    color: #666;
    font-size: 11px;
    font-weight: normal;
    font-family: Verdana, Geneva, sans-serif;
    display: block;
}
.icon {
    vertical-align: middle;
    cursor: pointer;
}
.image {
    border: 1px solid #EEEEEE;
    padding: 10px;
    display: inline-block;
}
.image img {
    margin-bottom: 5px;
}
.box {
    /*margin-bottom: 15px;*/
    min-height:440px;
}
.box > .heading {
    height: 38px;
    padding-left: 7px;
    padding-right: 7px;
    border: 1px solid #DBDBDB;
    background: url('../image/box.png') repeat-x;
    -webkit-border-radius: 7px 7px 0px 0px;
    -moz-border-radius: 7px 7px 0px 0px;
    -khtml-border-radius: 7px 7px 0px 0px;
    border-radius: 7px 7px 0px 0px;
}
.box > .heading h1 {
    margin: 0px;
    padding: 11px 0px 0px 0px;
    color: #316398;
    font-size: 16px;
    float: left;
}
.box > .heading h1 img {
    float: left;
    margin-top: -1px;
    margin-left: 3px;
    margin-right: 8px;
}
.box > .heading .buttons {
    float: right;
    padding-top: 7px;
    margin-right: 5px;
}
.box > .heading .buttons .button {
    margin-left: 5px;
}
.box > .content h2 { 
    /*text-transform: uppercase;*/
    color: #316398;
    font-size: 15px;
    font-weight: bold;
    padding-bottom: 3px;
    border-bottom: 1px dotted #000000;  
}

.box > .content h3 { 
    /*text-transform: uppercase;*/
    color: #316398;
    font-size: 15px;
    font-weight: bold;
    padding-bottom: 3px;
    border-bottom: 1px dotted #000000;  
}

.box > .content {
    padding: 10px;
    border-left: 1px solid #CCCCCC;
    border-right: 1px solid #CCCCCC;
    border-bottom: 1px solid #CCCCCC;
    /*min-height: 340px;*/
    overflow: auto;
}

.box > .content-new {
    padding: 10px;
    border-left: 1px solid #CCCCCC;
    border-right: 1px solid #CCCCCC;
    border-bottom: 1px solid #CCCCCC;
    /*min-height: 250px;*/
    overflow: auto;
}
a.button, .list a.button {
    text-decoration: none;
    color: #FFF;
    display: inline-block;
    /*padding: 5px 15px 5px 15px;*/
    padding: 5px 10px 5px 10px;
    background: #316398;
    -webkit-border-radius: 10px 10px 10px 10px;
    -moz-border-radius: 10px 10px 10px 10px;
    -khtml-border-radius: 10px 10px 10px 10px;
    border-radius: 10px 10px 10px 10px;
}

.list {
    border-collapse: collapse;
    width: 100%;
    border-top: 1px solid #DDDDDD;
    border-left: 1px solid #DDDDDD;
    margin-bottom: 20px;
}
.list td {
    border-right: 1px solid #DDDDDD;
    border-bottom: 1px solid #DDDDDD;
}
.list thead td {
    background-color: #EFEFEF;
    padding: 0px 5px;
}
.list thead td a, .list thead td {
    text-decoration: none;
    color: #222222;
    font-weight: bold;
}
.list tbody td a {
    text-decoration: underline;
}
.list tbody td {
    vertical-align: middle;
    padding: 0px 5px;
    background: #FFFFFF;
}
.list .left {
    text-align: left;
    padding: 7px;
}
.list .right {
    text-align: right;
    padding: 7px;
}
.list .center {
    text-align: center;
    padding: 7px;
}
.list .asc {
    padding-right: 15px;
    background: url('../image/asc.png') right center no-repeat;
}
.list .desc {
    padding-right: 15px;
    background: url('../image/desc.png') right center no-repeat;
}
.list tr.filter td {
    padding: 5px;
    background: #E7EFEF;
}
.pagination {
    border-top: 1px solid #DDDDDD;
    display: inline-block;
    width: 100%;
    padding-top: 6px;
}
.pagination .links {
    float: left;
    padding-top: 6px;
}
.pagination .links a {
    border: 1px solid #DDDDDD;
    padding: 4px 10px;
    font-size: 12px;
    text-decoration: none;
    color: #A3A3A3;
}
.pagination .links b {
    border: 1px solid #269BC6;
    padding: 4px 10px;
    font-size: 12px;
    font-weight: normal;
    text-decoration: none;
    color: #269BC6;
    background: #FFFFFF;
}
.pagination .results {
    float: right;
    padding-top: 6px;
    font-size: 12px;
}
table.form {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}
table.form > tbody > tr > td:first-child {
    width: 200px;
}
table.form > tbody > tr > td {
    padding: 10px;
    color: #000000;
    border-bottom: 1px dotted #CCCCCC;
}
.scrollbox {
    border: 1px solid #CCCCCC;
    width: 350px;
    height: 100px;
    background: #FFFFFF;
    overflow-y: scroll;
}
.scrollbox img {
    float: right;
    cursor: pointer;
}
.htabs {
    padding: 0px 0px 0px 10px;
    height: 30px;
    line-height: 16px;
    border-bottom: 1px solid #DDDDDD;
    margin-bottom: 5px;
}
.htabs a {
    border-top: 1px solid #DDDDDD;
    border-left: 1px solid #DDDDDD;
    border-right: 1px solid #DDDDDD;
    background: #FFFFFF url('../image/tab.png') repeat-x;
    padding: 7px 5px 6px 5px;
    float: left;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 13px;
    font-weight: bold;
    text-align: center;
    text-decoration: none;
    color: #000000;
    margin-right: 2px;
    display: none;
}
.htabs a.selected {
    padding-bottom: 7px;
    background: #FFFFFF;
}
.vtabs {
    width: 215px;
    padding: 4px 0px;
    min-height: auto;
    float: left;
    display: block;
    border-right: 1px solid #316398;
}
.vtabs a {
    display: none;
}
.vtabs a, .vtabs span {
    display: block;
    float: left;
    width: 200px;
    margin-bottom: 5px;
    clear: both;
    border-top: 1px solid #316398;
    border-left: 1px solid #316398;
    border-bottom: 1px solid #316398;
    background: #316398 url('../image/bg.png') repeat-x;
    /*padding: 6px 14px 7px 15px;*/
    padding:8px 14px 8px 0px;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 13px;
    font-weight: bold;
    text-align: right;
    text-decoration: none;
    color: #fff;
    border-radius:4px 0px 0px 4px;
}
.vtabs a.selected {
    padding-right: 15px;
    background: #FFFFFF;
    color:#000;
}
.vtabs a img, .vtabs span img {
    position: relative;
    top: 3px;
    cursor: pointer;
}
.vtabs-content {
    margin-left: 205px;
}

.vtabsright {
    width: 215px;
    padding: 4px 0px;
    min-height: auto;
    float: right;
    display: block;
    border-left: 1px solid #316398;
}
.vtabsright a {
    display: none;
}
.vtabsright a, .vtabsright span {
    display: block;
    float: left;
    width: 200px;
    margin-bottom: 5px;
    clear: both;
    border-top: 1px solid #316398;
    border-right: 1px solid #316398;
    border-bottom: 1px solid #316398;
    background: #316398 url('../image/bg.png') repeat-x;
    /*padding: 6px 14px 7px 15px;*/
    padding:8px 8px 8px 14px;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 13px;
    font-weight: bold;
    text-align: left;
    text-decoration: none;
    color: #fff;
    border-radius:0px 4px 4px 0px;
}
.vtabsright a.selected {
    margin-left: -1px;
    background: #FFFFFF;
    color:#000;
}
.vtabsright a img, .vtabsright span img {
    position: relative;
    top: 3px;
    cursor: pointer;
}
.vtabsright-content {
    margin-left: 205px;
}

.accordion-heading {
    background: #EFEFEF;
    border: 1px solid #DDDDDD;
    padding: 8px;
    font-weight: bold;
    font-size: 13px;
    color: #555555;
    margin-bottom: 15px;
}
.accordion-heading a {
    float: right;
    margin-top: 1px;
    font-weight: normal;
    text-decoration: none;
}
.accordion-content {
    padding: 0px 0px 15px 0px;
    overflow: auto;
}
.scrollbox div {
    padding: 3px;
}
.scrollbox div input {
    margin: 0px;
    padding: 0px;
    margin-right: 3px;
}
.scrollbox div.even {
    background: #FFFFFF;
}
.scrollbox div.odd {
    background: #E4EEF7;
}
.overview {
    float: left;
    width: 49%;
    margin-bottom: 20px;
}
.overview table {
    width: 100%;
}
.overview td + td {
    text-align: right;
}
.statistic {
    float: right;
    width: 49%;
    margin-bottom: 20px;
}
.range {
    float: right;
    color: #FFF;
    vertical-align: middle;
}
.range {
    padding-top: 1px;
    padding-right: 1px;
}
.range, .range select {
    font-size: 11px;
}
.latest {
    clear: both;
}
.latest tbody td {
    background: #FFF;
}
.dashboard-heading {
    background: #547C96;
    color: #FFF;
    border-bottom: 1px solid #8EAEC3;
    padding: 5px;
    font-size: 14px;
    font-weight: bold;
}
.dashboard-content {
    background: #FCFCFC;
    border: 1px solid #8EAEC3;
    padding: 10px;
    min-height: 180px;
}
.refresh {
    cursor: pointer;
    position: relative;
    top: 3px;
}

/*Balaji CSS Style*/
.txtBox {
  border:1px solid #CCCCCC;
  color:#5A5655;
  font:13px;
  font-family:"Open Sans","lucida grande","Segoe UI",arial,verdana,"lucida sans unicode",tahoma,sans-serif;
  padding:2px;
  width:324px;
}
.txtBox:focus {
  border:1px solid #EA8511;
}

.txtBox1 {
  border:1px solid #CCCCCC;
  color:#5A5655;
  font:13px;
  font-family:"Open Sans","lucida grande","Segoe UI",arial,verdana,"lucida sans unicode",tahoma,sans-serif;
  padding:2px;
  width:330px;
}
.txtBox1:focus {
  border:1px solid #EA8511;
}

.txtBox2 {
  border:1px solid #CCCCCC;
  color:#5A5655;
  font:13px;
  font-family:"Open Sans","lucida grande","Segoe UI",arial,verdana,"lucida sans unicode",tahoma,sans-serif;
  padding:2px;
  width:50px;
}
.txtBox2:focus {
  border:1px solid #EA8511;
}

.txtBox3 {
  border:1px solid #CCCCCC;
  color:#5A5655;
  font:13px;
  font-family:"Open Sans","lucida grande","Segoe UI",arial,verdana,"lucida sans unicode",tahoma,sans-serif;
  padding:2px;
  width:100px;
}
.txtBox3:focus {
  border:1px solid #EA8511;
}

legend {
        color:#0481b1;
        font-size:16px;
        padding:0 10px;
        background:#fff;
        -moz-border-radius:4px;
        box-shadow: 0 1px 5px rgba(4, 129, 177, 0.5);
        padding:5px 10px;
       
        font-family:Helvetica, sans-serif;
        font-weight:bold;
    }
    
fieldset {
        border-radius:4px;
        background: #fff; 
        background: -moz-linear-gradient(#fff, #f9fdff);
        background: -o-linear-gradient(#fff, #f9fdff);
        background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#fff), to(#f9fdff)); 
        background: -webkit-linear-gradient(#fff, #f9fdff);
        padding:10px;
        border-color:rgba(4, 129, 177, 0.4);
    }
    
.table_border_radious {
        border-radius:4px;
        background: #fff; 
        background: -moz-linear-gradient(#fff, #f9fdff);
        background: -o-linear-gradient(#fff, #f9fdff);
        background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#fff), to(#f9fdff)); 
        background: -webkit-linear-gradient(#fff, #f9fdff);
        padding:0px;
        border:1px solid #dfdfdf;
    }   
.table_border_radious1 {
        border-radius:4px;
        background: #fff; 
        background: -moz-linear-gradient(#fff, #f9fdff);
        background: -o-linear-gradient(#fff, #f9fdff);
        background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#fff), to(#f9fdff)); 
        background: -webkit-linear-gradient(#fff, #f9fdff);
        padding:5px;
        border:1px solid #dfdfdf;
    }   
.view_buttons{
    border-radius:4px;
    padding:5px;
    background-color:#676862; 
    color:#FFF; font-weight:bold; 
    font-family:Arial, Helvetica, sans-serif; 
    cursor:pointer; 
}
.input_types{
    border-radius:4px; 
    border:1px solid #C0C0C0; 
    height:20px;
    width:250px;
    padding-left:5px;
}

.input_types{
    border-radius:4px; 
    border:1px solid #C0C0C0; 
    padding:0px;
}

.input_types_select{
    border-radius:4px; 
    border:1px solid #C0C0C0; 
    height:25px;
    width:200px;
    padding-left:5px;
}

.input_types_textarea{
    border-radius:4px; 
    border:1px solid #C0C0C0; 
    /*width:250px;*/
    padding-left:5px;
}

.submitbutton {
    cursor:pointer;
    margin-left: 5px;
    text-decoration: none;
    color: #FFF;
    display: inline-block;
    padding: 5px 10px 5px 10px;
    background: #316398;
    -webkit-border-radius: 10px 10px 10px 10px;
    -moz-border-radius: 10px 10px 10px 10px;
    -khtml-border-radius: 10px 10px 10px 10px;
    border-radius: 10px 10px 10px 10px;
    border:none;
}

.anchorbutton {
    cursor:pointer;
    margin-left: 0px;
    text-decoration: none;
    color: #FFF;
    display: inline-block;
    padding: 6px 13px 6px 13px;
    background: #316398;
    -webkit-border-radius: 10px 10px 10px 10px;
    -moz-border-radius: 10px 10px 10px 10px;
    -khtml-border-radius: 10px 10px 10px 10px;
    border-radius: 10px 10px 10px 10px;
    border:none;
}

#calendarlist a{
    cursor:pointer;
    margin-left: 0px;
    text-decoration: none;
    color: #000;
    font-size:14px;
    display: inline-block;
    padding: 6px 13px 6px 13px;
    background: #fff;
    -webkit-border-radius: 10px 10px 10px 10px;
    -moz-border-radius: 10px 10px 10px 10px;
    -khtml-border-radius: 10px 10px 10px 10px;
    border-radius: 10px 10px 0px 0px;
    border-top:1px solid #316398;
    border-left:1px solid #316398;
    border-right:1px solid #316398;
}

.field_title {
    text-align:right;
}

.mandatory {
    color:#F00;
    padding-left:2px;
}

.dashboard_icons{
    text-align:center;
    border-radius:4px; 
    border:1px solid #C0C0C0; 
    font-size:14px;
    font-weight:bold;
    height:25px;
    width:128px;
    padding-left:5px;
    padding-top:10px;
}

.dashboardpagebtn {
  background: #f1af33;
  background-image: -webkit-linear-gradient(top, #f1af33, #316398);
  background-image: -moz-linear-gradient(top, #f1af33, #316398);
  background-image: -ms-linear-gradient(top, #f1af33, #316398);
  background-image: -o-linear-gradient(top, #f1af33, #316398);
  background-image: linear-gradient(to bottom, #f1af33, #316398);
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 4px;
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
}

.dashboardpagebtn:hover {
  background: #676862;
  background-image: -webkit-linear-gradient(top, #676862, #979891);
  background-image: -moz-linear-gradient(top, #676862, #979891);
  background-image: -ms-linear-gradient(top, #676862, #979891);
  background-image: -o-linear-gradient(top, #676862, #979891);
  background-image: linear-gradient(to bottom, #676862, #979891);
  text-decoration: none;
}   

.mandatorycolor
{
    padding-left:2px;
    font-size:12px;
    color:#F00;
}

#imagePreview {
    padding:5px;
    border:1px solid #333;
    width: 150px;
    height: 150px;
    background-position: center center;
    background-size: cover;
    -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
    display: inline-block;
}

.highlight {
    background-color:#999;
}

.customtable th{padding:4px;background: #dfdfdf;}
.customtable tr:nth-child(even) {background: #FFF;}
.customtable tr:nth-child(odd) {background: #E0DBDB;}
.customtable td{padding:2px 2px 2px 4px;}

/*col:first-child {background: #FF0}
col:nth-child(2n+3) {background: #CCC} Column Wise bg color change*/

/*Jquery Page Loading Process Symbol*/
#loading-div-background{
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    background: #fff;
    width: 100%;
    height: 100%;
}

#loading-div{
    width: 300px;
    height: 150px;
    background-color: #fff;
   /* border: 5px solid #1468b3;*/
    text-align: center;
    color: #202020;
    position: absolute;
    left: 50%;
    top: 50%;
    margin-left: -150px;
    margin-top: -100px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    behavior: url("/css/pie/PIE.htc"); /* HANDLES IE */
}
/*Jquery Page Loading Process Symbol*/

#profile_menu {
    height:auto;
    margin-top:1px;
    margin-left:-10px;
    padding:0px;
    display:none;
    position:absolute;
    z-index:100;
    /*opacity:0.9;*/
}

#profile_menu > ul{
    margin:0px;
    padding:0px;
    -moz-border-radius-topleft:5px;
    -moz-border-radius-bottomleft:5px;
    -moz-border-radius-bottomright:5px;
    border-radius:0px 0px 5px 5px;
    border-top:0px solid #fff;
    border-bottom:2px solid #fff;
    border-left:2px solid #fff;
    border-right:2px solid #fff;
}

#profile_menu > ul li {
    width:200px;
    list-style: none;
    text-align:right;
    border-bottom:1px solid #dfdfdf;
}

#profile_menu > ul a {
    display: block;
    color: #316398;
    text-decoration: none;
    padding: 7px 5px 7px 0px;
    background: #fff;
    font-size:11px;
    font-weight:bold;
}

#profile_menu > ul a:hover {
    display: block;
    color: #fff;
    background-color:#316398;
}


</style>
</head>

<body>
<!--Container DIV Start-->
<div id="container"> 
<style type="text/css">
.blink_me {
  animation: blinker 3s linear infinite;
}

@keyframes blinker {  
  50% { opacity: 0; }
}

#profile_menu {
	margin-left:-115px;
}
</style>
<div id="header"> <!--Header DIV Start-->
    <div class="div1">
    <table width="100%" cellpadding="0"  cellspacing="0" border="0">
    <tr>
    <td valign="top" align="left"  style="padding-top:2px;"><img src="image/bugemalogo.png" title="Home" onclick="location = '/student/'" style="cursor:pointer;" /></td>
    <td valign="top" align="right" style="padding-top:15px;">
        </td>
    <!--<td align="center"><img src="image/bugemalogo.png" title="Home" onclick="location = '/student/'"/></td>-->
    <!--<td align="right" width="35%">
             Logged @&nbsp;08-11-2019&nbsp;11:01 AM    &nbsp;|&nbsp; Last Successful Login : &nbsp;08-11-2019&nbsp;10:57 AM            </td>-->
    <td valign="top" align="right" style="padding-top:2px;">
        <table cellpadding="0" cellspacing="0">
    <tr>
    <td valign="top"><img align="middle" src="getMyImage.php?id=20769" border="1" width="50" height="50" /></td>
    <td style="background-color:#ddd;"><a class="profile"><img align="middle" src="image/desc-white.png" style="padding:5px;"/></a></td>
    </tr>
    </table>
    <div id="profile_menu">
    <ul>
    <li><a href="javascript://">Logged @&nbsp;08-11-2019&nbsp;11:01 AM</a></li>
    <li><a href="javascript://">Last Login : &nbsp;08-11-2019&nbsp;10:57 AM</a></li>
        <li><a href="change_password">Change Password</a></li>
        <li><a href="logout.php">Logout&nbsp;&nbsp;<img align="top" alt="Logout" title="Logout" src="image/lock.png" /></a></li>
    </ul>
    </div>
        </td>
    </tr>
    </table>
    
    </div>
    <div id="menu">
    <ul class="left" style="display: none;">
    <li id="dashboard"><a href="/student/" class="top">Home</a></li>
    </ul>
    </li>
    </ul>
    <ul class="right">
    <li id="store"><a class="top" href="javascript://" style="cursor:auto;">17/BSS/BU/R/0006</a></li>
    <li id="store"><a class="top" href="javascript://" style="cursor:auto;">DUKU DAVID JOSEPH</a></li>

        <li id="store"><a class="top" href="javascript://">BACHELOR OF SCIENCE IN SOFTWARE ENGINEERING AND APPLICATIONS DEVELOPMENT</a></li>
    <li id="store"><a class="top" href="javascript://">Main Campus</a></li>
    <li id="store"><a class="top" href="logout.php"><!--Logout--><img alt="Logout" title="Logout" src="image/lock.png" /></a></li>
    </ul>
    <script type="text/javascript"><!--
    $(document).ready(function() {
    $('#menu > ul').superfish({
    hoverClass	 : 'sfHover',
    pathClass	 : 'overideThisToUse',
    delay		 : 0,
    animation	 : {height: 'show'},
    speed		 : 'normal',
    autoArrows   : false,
    dropShadows  : false, 
    disableHI	 : false, /* set to true to disable hoverIntent detection */
    onInit		 : function(){},
    onBeforeShow : function(){},
    onShow		 : function(){},
    onHide		 : function(){}
    });
    
    $('#menu > ul').css('display', 'block');
    });
    
    function getURLVar(urlVarName) {
    var urlHalves = String(document.location).toLowerCase().split('?');
    var urlVarValue = '';
    
    if (urlHalves[1]) {
    var urlVars = urlHalves[1].split('&');
    
    for (var i = 0; i <= (urlVars.length); i++) {
    if (urlVars[i]) {
    var urlVarPair = urlVars[i].split('=');
    
    if (urlVarPair[0] && urlVarPair[0] == urlVarName.toLowerCase()) {
    urlVarValue = urlVarPair[1];
    }
    }
    }
    }
    
    return urlVarValue;
    } 
    
    $(document).ready(function() {
    route = getURLVar('route');
    
    if (!route) {
    $('#dashboard').addClass('selected');
    } else {
    part = route.split('/');
    
    url = part[0];
    
    if (part[1]) {
    url += '/' + part[1];
    }
    
    $('a[href*=\'' + url + '\']').parents('li[id]').addClass('selected');
    }
    });
    //--></script> 
    </div>
</div><!--Header DIV End-->
<script type="text/javascript">
        $(document).ready(function() {
            $(".profile").click(function(e) {          
				e.preventDefault();
                $("div#profile_menu").toggle();
				$(".profile").toggleClass("menu-open");
            });
			
			$("div#profile_menu").mouseup(function() {
				return false
			});
			$(document).mouseup(function(e) {
				if($(e.target).parent("a.profile").length==0) {
					$(".profile").removeClass("menu-open");
					$("div#profile_menu").hide();
				}
			});			
			
        });
</script>
<!--Content DIV Start-->
<div id="content">

<!--Write Something (Working Area) START-->
<table width="100%" cellpadding="0" cellspacing="0">
<tr>
<td valign="top"><div class="vtabs"> <!--id="tabs" -->
	            <a href="studentprofile?pg=o4el" >Student Profile</a>

                <a href="courseregistration?pg=o4em" >Course Registration</a>

                <a href="registrationcard?pg=o4en" >Registration Card</a>

                <a href="classpermit?pg=o4eo" >Class Permit</a>

                <a href="feesdetails?pg=o4ep" >Fees Detail</a>

                <a href="examclearance?pg=o4eq" >Exam Clearance</a>

                <a href="library?pg=o4et" >Library</a>

        
    <a href="previouscr?pg=pYqr" >Previous Registrations</a>
    </div></td>
<td valign="top" width="100%" style="padding:0px 5px 0px 5px;">
    <div class="box">
        <div class="heading">
        <h1><img src="image/category.png" alt="" />Student Transcript - Corewise</h1>
                <div class="buttons">
        <a href="student_transcriptcorewise_print" class="submitbutton" target="_blank" style="color:#FFF;">Print Preview</a>
        </div>
                </div>
        <div class="content">
        <!--WORKING AREA-->
            <table width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr>
    <td valign="top" width="30%">
        <table width="100%" cellspacing="0" cellpadding="10" border="0">
        <tr>
        <td width="17%"><strong>Award(s)</strong></td>
        <td width="2%">:</td>
        <td style="color: #316398; font-weight:bold;">BACHELOR OF SCIENCE IN SOFTWARE ENGINEERING AND APPLICATIONS DEVELOPMENT</td>
        </tr>
        
        <tr bgcolor="#F4F4F4">
        <td><strong>Entrance Credentials</strong></td>
        <td>:</td>
        <td style="color: #316398; font-weight:bold;">Undergraduate</td>
        </tr>
        
        <tr>
        <td><strong>Major</strong></td>
        <td>:</td>
        <td style="color: #316398; font-weight:bold;">SOFTWARE ENGINEERING AND APPLICATION DEVELOPMENT</td>
        </tr>
        
        <tr bgcolor="#F4F4F4">
        <td><strong>First&nbsp;Date&nbsp;of&nbsp;Registration‎</strong></td>
        <td>:</td>
        <td style="color: #316398; font-weight:bold;">08/16/2017</td>
        </tr>

        <!--<tr>
        <td><strong>Completion Date</strong></td>
        <td>:</td>
        <td></td>
        </tr>-->
        
        
        </table>
    </td>
    </tr>
    
    <tr>
    <td valign="top" width="30%"><br />

    <h2>Corewise - Course Details</h2>
    <table width="100%" cellspacing="0" cellpadding="5" class="display" border="1" id="CoreTable" style="border:1px solid #C0C0C0;">
    <thead>
    <tr>
        <th align="left">Core Type</th>
        <th style="display:none;">Course Details</th>
    </tr>
    </thead>
    
    <tbody>
    		<tr>
        <td>Major</td>
        <td style="display:none;">[{"value1":"BGCT  111","value2":"FUNDAMENTALS OF COMPUTERS & OFFICE APPLICATIONS","value3":"C+","value4":"4","value5":"14.00"},{"value1":"BICT 121","value2":"FUND. OF RELATIONAL DATABASE SYSTEMS","value3":"B","value4":"3","value5":"12.00"},{"value1":"BICT 151","value2":"FUNDAMENTALS OF WEB DEVELOPMENT","value3":"B","value4":"3","value5":"12.00"},{"value1":"BSCT 111","value2":"SOFTWARE ENGINEERING PROFESSIONAL CONCEPTS","value3":"B","value4":"3","value5":"12.00"},{"value1":"BSCT 121","value2":"PROGRAMMING CONCEPTS USING C\/C++","value3":"A","value4":"3","value5":"15.00"},{"value1":"BMCT  112","value2":"COMPUTER SCIENCE MATH I","value3":"A","value4":"3","value5":"15.00"},{"value1":"BSCT 122","value2":"PROGRAMMING (VB\/VB.NETC#\/C#.NET)","value3":"A","value4":"3","value5":"15.00"},{"value1":"BICT 231","value2":"SYSTEM ANALYSIS & DESIGN","value3":"B+","value4":"3","value5":"13.50"},{"value1":"BNCT 221","value2":"COMPUTER ARCHITECTURE & ORGANIZATION","value3":"A","value4":"3","value5":"15.00"},{"value1":"BSCT 211","value2":"DATA STRUCTURES AND ALGORITHMS","value3":"C+","value4":"3","value5":"10.50"},{"value1":"BSCT 221","value2":"OBJECT ORIENTED PROGRAMMING (C++,JAVA)","value3":"A","value4":"3","value5":"15.00"},{"value1":"BICT 222","value2":"INTERNET & WEB PROGRAMMING","value3":"A","value4":"3","value5":"15.00"},{"value1":"BSCT 212","value2":"LINUX BASICS","value3":"B+","value4":"3","value5":"13.50"}]</td>
		</tr>
				<tr>
        <td>General</td>
        <td style="display:none;">[{"value1":"GBIO 101","value2":"HEALTH PRINCIPLES & HIV \/AIDS","value3":"D+","value4":"3","value5":"7.50"},{"value1":"GENG  101","value2":"INTRODUCTION TO WRITING SKILLS","value3":"D+","value4":"3","value5":"7.50"},{"value1":"GREL 101","value2":"CHRISTIAN BELIEFS","value3":"B","value4":"3","value5":"12.00"}]</td>
		</tr>
				<tr>
        <td>Cognate</td>
        <td style="display:none;">[{"value1":"BICT 112","value2":"INFORMATION SYSTEMS","value3":"C","value4":"3","value5":"9.00"},{"value1":"BMCT 132","value2":"DISCRETE MATHEMATIC","value3":"C+","value4":"3","value5":"10.50"},{"value1":"BSCT 112","value2":"SOFTWARE  ENGINEERING","value3":"A","value4":"3","value5":"15.00"},{"value1":"BICT  221","value2":"RELATIONAL DATABASE II","value3":"C+","value4":"3","value5":"10.50"},{"value1":"BNCT  231","value2":"WINDOWS CLIENT SERVER ADMINISTRATION","value3":"B","value4":"3","value5":"12.00"},{"value1":"BNCT 212","value2":"COMPUTER NETWORK AND DATA COMMUNICATION","value3":"B+","value4":"3","value5":"13.50"},{"value1":"BSCT  222","value2":"USER INTERFACE DESIGN","value3":"A","value4":"3","value5":"15.00"}]</td>
		</tr>
				<tr>
        <td>Elective</td>
        <td style="display:none;">[{"value1":"BICT 132","value2":"MULTIMEDIA SYSTEMS","value3":"B","value4":"3","value5":"12.00"},{"value1":"BNCT 222","value2":"NETWORK AND INFORMATION SECURITY","value3":"B","value4":"3","value5":"12.00"}]</td>
		</tr>
				<tr>
        <td>Research</td>
        <td style="display:none;">[{"value1":"BRES 201","value2":"BUSINESS RESEARCH I","value3":"B","value4":"3","value5":"12.00"}]</td>
		</tr>
				<tr>
        <td>OTHER COURSES</td>
        <td style="display:none;">[{"value1":"BWIT 201","value2":"BASIC ENTREPRENEURSHIP I","value3":"C+","value4":"4","value5":"14.00"}]</td>
		</tr>
				</tbody>
    
    </table>
    </td>
    </tr>
    </table>
    
    <table align="center" cellpadding="5" cellspacing="0">
            <tr>
        <td>GPS FOR</td><td>2017-2018</td>
        <td> - Semester - </td><td>1</td>
        <td> : </td><td>72.50</td>
        </tr>
            <tr>
        <td>GPS FOR</td><td>2017-2018</td>
        <td> - Semester - </td><td>2</td>
        <td> : </td><td>84.00</td>
        </tr>
            <tr>
        <td>GPS FOR</td><td>2018-2019</td>
        <td> - Semester - </td><td>1</td>
        <td> : </td><td>90.50</td>
        </tr>
            <tr>
        <td>GPS FOR</td><td>2018-2019</td>
        <td> - Semester - </td><td>2</td>
        <td> : </td><td>93.00</td>
        </tr>
        <!--<tr>
    <td colspan="4">Total Grade Points </td>
    <td> : </td><td>???</td>
    </tr>
    <tr>
    <td colspan="4">Total GPA </td>
    <td> : </td><td>???</td>
    </tr>-->
    </table>    
    
    </div>
</div>
</td>
<td valign="top"><div class="vtabsright"> <!--id="tabs" -->
	        <a href="studenttranscriptcorewise?pg=o4mn"  class="selected" >Assessment Sheet</a>
            <a href="studenttranscriptsemesterwise?pg=o4il" >Assessment Sheet - Semester</a>
            <a href="gradeslip?pg=o4iq" >Grade Slip</a>
            <a href="graduationclearance?pg=o4ir" >Application - Graduation</a>
            <a href="examinationpassslip?pg=o4is" >Examination Pass Slip</a>
            <a href="graduationstatus?pg=o4mm" >Graduation Status</a>
            <a href="registrationstatus?pg=o4ml" >Registration Status</a>
            <a href="updatecontactinfo?pg=o4mk" >Update Contact Info</a>
        

</div>
</td>
</tr>
</table>
<!--Write Something (Working Area) END-->
</div>
<!--Content DIV End-->
</div>
<!--Container DIV End-->
<table width="100%" cellpadding="0" cellspacing="0" border="0" style="padding:0px 5px 0px 5px;">
<tr>
<td align="left">Last Login Time : 08-11-2019&nbsp;10:57 AM</td>
<td align="right">Current Login Time : 08-11-2019&nbsp;11:01 AM</td>
</tr>
</table>
<div id="footer"><a href="#">::Flair-ERMS:: Bugema University :: Student Portal</a> © 2019 All Rights Reserved.</div></body>
</html>
<script type="text/javascript" charset="utf-8">
/* Formating function for row details */
function fnFormatDetails ( oTable, nTr )
{
	
	var aData = oTable.fnGetData( nTr );
	var arrayFromPHP = JSON.parse(aData[2]);
	//var arrayFromPHP = {"Outputs":{"value1":"Student Profile","value2":"Mani","value3":"Suresh","value4":"Vinoth","value5":"Kalyan"}};
	
	//var arr = [ 1, 2, 3, 4, 5, 6 ];
	var sOut = '<table width="100%" cellpadding="5" cellspacing="0" border="1">';
	sOut += '<tr style="background-color:#1C3755;"><th align="left" style="color:#FFFFFF;">Course ID</th><th style="color:#FFFFFF;">Course Name</th><th style="color:#FFFFFF;">Grade</th><th style="color:#FFFFFF;">Credits</th><th style="color:#FFFFFF;">Points</th></tr>';
	
	$.each(arrayFromPHP , function(index, element){
	//for ( var i = 0, l = arr.length; i < l; i++ ) {
	sOut += '<tr style="background-color:#346598"><td style="color:#FFFFFF;">'+element.value1+'</td><td style="color:#FFFFFF;">'+element.value2+'</td><td align="center" style="color:#FFFFFF;">'+element.value3+'</td><td align="center" style="color:#FFFFFF;">'+element.value4+'</td><td align="center" style="color:#FFFFFF;">'+element.value5+'</td></tr>';
	//sOut += '<tr><td>'+value.valone+'</td><td>'+value.valtwo+'</td><td>'+aData[3]+'</td><td>'+aData[4]+'</td></tr>';
	//alert( index + ": " + element.value1 );
		//}
	});
	
	
	sOut += '</table>';
	return sOut;
}

$(document).ready(function() {
	/*
	 * Insert a 'details' column to the table
	 */
	var nCloneTh = document.createElement( 'th' );
	var nCloneTd = document.createElement( 'td' );
	nCloneTd.innerHTML = '<img src="image/details_open.png">';
	nCloneTd.className = "center";
	
	$('#CoreTable thead tr').each( function () {
		this.insertBefore( nCloneTh, this.childNodes[0] );
	} );
	
	$('#CoreTable tbody tr').each( function () {
		this.insertBefore(  nCloneTd.cloneNode( true ), this.childNodes[0] );
	} );
	
	/*
	 * Initialse DataTables, with no sorting on the 'details' column
	 */
	var oTable = $('#CoreTable').dataTable( {
		"bFilter": true, // Search Option Removed
		"bInfo": true,	// Search Option Removed
		"bJQueryUI": true,
		"sPaginationType": "full_numbers",
		"aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]

	});
	
	/* Add event listener for opening and closing details
	 * Note that the indicator for showing which row is open is not controlled by DataTables,
	 * rather it is done here
	 */
	$('#CoreTable tbody td img').live('click', function () {
		var nTr = $(this).parents('tr')[0];
		if ( oTable.fnIsOpen(nTr) )
		{
			/* This row is already open - close it */
			this.src = "image/details_open.png";
			oTable.fnClose( nTr );
		}
		else
		{
			/* Open this row */
			this.src = "image/details_close.png";
			oTable.fnOpen( nTr, fnFormatDetails(oTable, nTr), 'details' );
		}
	} );
} );
</script>