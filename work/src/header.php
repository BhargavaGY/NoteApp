<?php session_start(); 
    require '/var/www/vendor/autoload.php'; 
    $login = parse_ini_file('/var/www/html/mongologin.ini');
    $ip = $login['ip'];
    $user = $login['user'];
    $pwd = $login['pwd'];
    $connection = new MongoDB\Client("mongodb://$user:$pwd@$ip:27017");
	$db = $connection-> postsdb;
?>

<!DOCTYPE html>

<html>
<title>OurNoteOrganizer</title>

<!-- css file -->
<head>

<style>

body {
    font-family: Sans-serif;
}

.menu {
    background-color: black;
    font-family: Sans-serif;
    font-size: 16px;
    color: white;
    border-spacing: 0;
}


td {
    text-align: left;
    vertical-align: center;
    word-wrap: break-word;
    padding: 3px;
    border-spacing: 0;
}

td.search {
    text-align: center;
}


table {
    border-spacing: 0;
    table-layout: fixed;
}

h3 { font-family: Sans-serif; }

p { 
    font-family: Sans-serif; 
    word-wrap: break-word;
}


div {
    font-family: Sans-serif; 
    word-wrap: break-word;
}
div.overview {
    word-wrap: break-word;
    position: relative;
    max-width: 350px;
    min-height: 220px;
    max-height: 310px;

}
div.overview:hover { box-shadow: 1px 1px 3px gray; }

div.post {
    font-family: Sans-serif;
    position: relative;

}
img {
    border-radius: 7px;
}

input[type=submit]{
    min-width: 50px;
    background-color: #fc034e;
    padding: 5px;
    border-radius: 18px;
    border-color: #fc034e;
    color: white;
    text-align: center;
    box-shadow: 0 0 0;
    border: none;
}

input[type=submit].view {
    position: absolute;
    vertical-align: bottom;
    bottom: 3px;
}

input[type=submit]:hover { box-shadow: 1px 1px 3px gray; }

input[type=submit].search {
    min-width: 70px;
    border-radius: 18px;
}

input[type=text].search{
    min-width: 500px;
    border-radius: 18px;
    border-style: solid;
    border-color: gray;
    padding-left: 15px;
    min-height: 30px;
}
input[type=text].search:hover{
    border-color: #fc034e;
}
select {
    min-width: 50px;
    background-color: #fc034e;
    padding: 5px;
    border-radius: 18px;
    border-color: #fc034e;
    color: white;
    text-align: center;
    box-shadow: 0 0 0;
    border: none;
}


.title{
    color: white;
    font-family: Sans-serif;
    font-size: 22px;
    text-align: center;
}

.title:hover{
     background-image: linear-gradient(#27252E, #3b3b3b);
}


.titlebar {
    position: fixed;
    top: 0px;
    left: 0px;
    width: 100%;
    background-color: #27252E;
    min-height: 50px;
    z-index: 1;
    vertical-align: middle;
    border-spacing: 0;
    
}
.titlelink {
    color: white;
    text-decoration: none;
}

.dropdownlink:hover{
     background-image: linear-gradient(#27252E, #3b3b3b);
}
.usrname { }
     
.logoutdropdown {
    display: none;
    position: absolute;
    background-color: #27252E;
    color: white;
    font-family: Sans-serif;
    font-size: 18px;
    min-width: 190px;
    box-shadow: 0px 0px 5px 0px black;
    padding: 8px 8px;
    z-index: 2;
}
.usrname:hover .logoutdropdown {
    display: block;
}

.titleimage{
    max-width: 70px;
}

.bodypadding {
    padding-top: 50px;
}


.giantinput {
    min-height: 400px;
    min-width: 800px;
    word-wrap: break-word;
    font-family: Sans-serif;
    font-size: 16px;

}

.postlink {
    word-wrap: break-word;
    overflow-wrap: break-word; 
    font-family: Sans-serif;
    font-size: 16px;
    border-radius: 5px;
	padding: 5px;
	background-color: white;
	border: 2px solid #27252E;
	
}

.center {
   padding: 200px 0;
   text-align: center;
   color: white;
   font-size: 22px;
   font-family: Sans-serif;
}


</style>
<link rel='icon' href='ournoteorganizericon.png'>
</head>

<body>


