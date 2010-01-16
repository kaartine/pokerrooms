<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN">
	<html dir="LTR" lang="fi">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<meta name="description" content="PokerShop, Pokerituotteita jokaiseen tilaisuuteen">
	<meta name="keywords" content="pokeri, pelimerkkejä, pelimerkit, pelikortteja, pelikortit, pelipöydät, pelipöytä, pelihuopa">
	<meta name="distribution" content="global">
	<meta name="robots" content="index,follow">
	 <title>Pokershop.fi - Suomen laajin pokerituotevalikoima</title>
	<base href="http://www.pokershop.fi/">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	
	</head>
	

<?php
/**
 * Copyright Jukka Kaartinen 2010
 */
 
require_once("rooms.txt");
?>
	
	<table cellpadding="0" cellspacing="0" width="100%" border="0">
	  <tbody><tr>
	    <td class="infoBoxHeading" height="14"><img src="images/infobox/corner_right_left.gif" alt="" height="14" width="11" border="0"></td>
	    <td class="infoBoxHeading" height="14" width="100%">Pokerihuoneet</td>
	    <td class="infoBoxHeading" height="14" nowrap="nowrap"><img src="images/pixel_trans.gif" alt="" height="14" width="11" border="0"></td>
	  </tr>
	</tbody></table>
      	<table class="infoBox" cellpadding="1" cellspacing="0" width="100%" border="0">
	  <tbody><tr>
	    <td><table class="infoBoxContents" cellpadding="3" cellspacing="0" width="100%" border="0">
	  <tbody><tr>
<td><img src="images/pixel_trans.gif" alt="" height="1" width="100%" border="0"></td>
</tr>
<?php

global $rooms;

foreach( $rooms as $room )
{

print('	  <tr> ');
print('	    <td class="boxText"><a href="'.$room[2].'"><img src="http://127.0.0.1/~kaartine/rooms/'.$room[1].'" alt="" border="0"></a><a href="'. $room[2].'">'. $room[0] .'</a><br /><br /></td>');
print('	  </tr>');

}
?>
	   <tr>
   <td><img src="images/pixel_trans.gif" alt="" height="1" width="100%" border="0"></td>
  </tr>
</tbody></table>
 </td>
 </tr>
</tbody></table>
