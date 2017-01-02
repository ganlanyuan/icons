<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Icons</title>
  <style>
    body { 
      margin: 0; 
      overflow-x: hidden; 
      background: #f5f5f5;
      font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    }
    h2 {
      text-transform: capitalize;
    }
    .collection {
      margin: 0;
      padding: 0;
      text-align: center;
    }
    .item {
      display: inline-block;
      text-align: left;
      padding: 1.5em 1em;
      background: #fff;
      list-style: none;
      white-space: nowrap;
      text-align: center;
      overflow: hidden;
    }
    .item:hover input,
    .item:hover button {
      border-color: #000;
    }
    .item:hover button {
      color: #fff;
      background-color: #000;
    }
    .item:after {
      content: "Copied!";
      position: absolute;
      display: block;
      padding: 4px 10px;
      font-size: 12px;
      background: #91FF7D;
      opacity: 0;
      -webkit-transition: opacity 0.3s;
      -o-transition: opacity 0.3s;
      transition: opacity 0.3s;
    }
    .copied:after { opacity: 1; }
    .collection svg { 
      width: 61px; 
      height: 61px; 
    }
    .collection div:nth-child(-n+5) svg { 
      width: 180px;
    }
    br { margin-bottom: 50px; }
    svg {
      display: block;
      margin: 50px auto;
    }
    svg path,
    svg circle,
    svg ellipse,
    svg polygon,
    svg polyline { vector-effect: non-scaling-stroke; }
    #sina_weibo path { vector-effect: none; }
    h2 {
      font-size: 24px;
      margin: 40px 20px 10px;
    }
    input, button {
      font-size: 14px;
      height: 2.6em;
      padding: 0 10px;
      border: 1px solid #eee;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
      transition: all 0.25s;
    }
    button {
      color: #000;
      background: #eee;
      cursor: pointer;
    }
    #menu1-line path { transition: all 0.3s; transform-origin: 50% 50%; }
    /* hover */
    /*#menu1-line:hover path:nth-child(1) { transform: translateY(-4px); }
    #menu1-line:hover path:nth-child(3) { transform: translateY(4px); }*/

    /* active */
    #menu1-line:hover path:nth-child(2) { transform: scale(0); }
    /* arrow */
    /*#menu1-line:hover path:nth-child(1) { transform: rotate(-45deg) translateY(-2px); }
    #menu1-line:hover path:nth-child(3) { transform: rotate(45deg) translateY(2px); }*/
    /* remove */
    #menu1-line:hover path:nth-child(1) { transform: rotate(45deg) translateY(9px); }
    #menu1-line:hover path:nth-child(3) { transform: rotate(-45deg) translateY(-9px); }
  </style>
</head>
<body>
  <div style="height: 0; width: 0; position: absolute; visibility: hidden"><?php include_once 'sprites.svg'; ?></div>
  <div class="collection">
    <!-- inject:svg -->
    <br><h2>app store badges</h2><div class="item"><svg role="img" title="appstore" id="appstore"><use xlink:href="#appstore" /></svg><input type="text" class="icon-name" id="appstore-copy" value="appstore"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#appstore-copy">Copy</button></div>
    <div class="item"><svg role="img" title="googleplay" id="googleplay"><use xlink:href="#googleplay" /></svg><input type="text" class="icon-name" id="googleplay-copy" value="googleplay"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#googleplay-copy">Copy</button></div>
    <div class="item"><svg role="img" title="googleplay_alt" id="googleplay_alt"><use xlink:href="#googleplay_alt" /></svg><input type="text" class="icon-name" id="googleplay_alt-copy" value="googleplay_alt"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#googleplay_alt-copy">Copy</button></div>
    <br><h2>fill</h2><div class="item"><svg role="img" title="dislike1-fill" id="dislike1-fill"><use xlink:href="#dislike1-fill" /></svg><input type="text" class="icon-name" id="dislike1-fill-copy" value="dislike1-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#dislike1-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="dislike2-fill" id="dislike2-fill"><use xlink:href="#dislike2-fill" /></svg><input type="text" class="icon-name" id="dislike2-fill-copy" value="dislike2-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#dislike2-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="dislike3-fill" id="dislike3-fill"><use xlink:href="#dislike3-fill" /></svg><input type="text" class="icon-name" id="dislike3-fill-copy" value="dislike3-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#dislike3-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="downarrow-fill" id="downarrow-fill"><use xlink:href="#downarrow-fill" /></svg><input type="text" class="icon-name" id="downarrow-fill-copy" value="downarrow-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#downarrow-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="eye-fill" id="eye-fill"><use xlink:href="#eye-fill" /></svg><input type="text" class="icon-name" id="eye-fill-copy" value="eye-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#eye-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="fastbackward-fill" id="fastbackward-fill"><use xlink:href="#fastbackward-fill" /></svg><input type="text" class="icon-name" id="fastbackward-fill-copy" value="fastbackward-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#fastbackward-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="fastforward-fill" id="fastforward-fill"><use xlink:href="#fastforward-fill" /></svg><input type="text" class="icon-name" id="fastforward-fill-copy" value="fastforward-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#fastforward-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="forward-fill" id="forward-fill"><use xlink:href="#forward-fill" /></svg><input type="text" class="icon-name" id="forward-fill-copy" value="forward-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#forward-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="grid-circle-fill" id="grid-circle-fill"><use xlink:href="#grid-circle-fill" /></svg><input type="text" class="icon-name" id="grid-circle-fill-copy" value="grid-circle-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#grid-circle-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="grid-rect-fill" id="grid-rect-fill"><use xlink:href="#grid-rect-fill" /></svg><input type="text" class="icon-name" id="grid-rect-fill-copy" value="grid-rect-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#grid-rect-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="heart-fill" id="heart-fill"><use xlink:href="#heart-fill" /></svg><input type="text" class="icon-name" id="heart-fill-copy" value="heart-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#heart-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="home-fill" id="home-fill"><use xlink:href="#home-fill" /></svg><input type="text" class="icon-name" id="home-fill-copy" value="home-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#home-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="leftarrow-fill" id="leftarrow-fill"><use xlink:href="#leftarrow-fill" /></svg><input type="text" class="icon-name" id="leftarrow-fill-copy" value="leftarrow-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#leftarrow-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="like1-fill" id="like1-fill"><use xlink:href="#like1-fill" /></svg><input type="text" class="icon-name" id="like1-fill-copy" value="like1-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#like1-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="like2-fill" id="like2-fill"><use xlink:href="#like2-fill" /></svg><input type="text" class="icon-name" id="like2-fill-copy" value="like2-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#like2-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="like3-fill" id="like3-fill"><use xlink:href="#like3-fill" /></svg><input type="text" class="icon-name" id="like3-fill-copy" value="like3-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#like3-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="menu-circle-fill-horizontal" id="menu-circle-fill-horizontal"><use xlink:href="#menu-circle-fill-horizontal" /></svg><input type="text" class="icon-name" id="menu-circle-fill-horizontal-copy" value="menu-circle-fill-horizontal"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#menu-circle-fill-horizontal-copy">Copy</button></div>
    <div class="item"><svg role="img" title="menu-circle-fill-vertical" id="menu-circle-fill-vertical"><use xlink:href="#menu-circle-fill-vertical" /></svg><input type="text" class="icon-name" id="menu-circle-fill-vertical-copy" value="menu-circle-fill-vertical"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#menu-circle-fill-vertical-copy">Copy</button></div>
    <div class="item"><svg role="img" title="menu-rect-fill-horizontal" id="menu-rect-fill-horizontal"><use xlink:href="#menu-rect-fill-horizontal" /></svg><input type="text" class="icon-name" id="menu-rect-fill-horizontal-copy" value="menu-rect-fill-horizontal"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#menu-rect-fill-horizontal-copy">Copy</button></div>
    <div class="item"><svg role="img" title="menu-rect-fill-vertical" id="menu-rect-fill-vertical"><use xlink:href="#menu-rect-fill-vertical" /></svg><input type="text" class="icon-name" id="menu-rect-fill-vertical-copy" value="menu-rect-fill-vertical"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#menu-rect-fill-vertical-copy">Copy</button></div>
    <div class="item"><svg role="img" title="menu1-fill" id="menu1-fill"><use xlink:href="#menu1-fill" /></svg><input type="text" class="icon-name" id="menu1-fill-copy" value="menu1-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#menu1-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="menu2-fill" id="menu2-fill"><use xlink:href="#menu2-fill" /></svg><input type="text" class="icon-name" id="menu2-fill-copy" value="menu2-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#menu2-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="pause-fill" id="pause-fill"><use xlink:href="#pause-fill" /></svg><input type="text" class="icon-name" id="pause-fill-copy" value="pause-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#pause-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="photogallery-fill" id="photogallery-fill"><use xlink:href="#photogallery-fill" /></svg><input type="text" class="icon-name" id="photogallery-fill-copy" value="photogallery-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#photogallery-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="pin-fill" id="pin-fill"><use xlink:href="#pin-fill" /></svg><input type="text" class="icon-name" id="pin-fill-copy" value="pin-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#pin-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="play-circle-fill" id="play-circle-fill"><use xlink:href="#play-circle-fill" /></svg><input type="text" class="icon-name" id="play-circle-fill-copy" value="play-circle-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#play-circle-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="playarrow-fill" id="playarrow-fill"><use xlink:href="#playarrow-fill" /></svg><input type="text" class="icon-name" id="playarrow-fill-copy" value="playarrow-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#playarrow-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="playnext-fill" id="playnext-fill"><use xlink:href="#playnext-fill" /></svg><input type="text" class="icon-name" id="playnext-fill-copy" value="playnext-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#playnext-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="playprev-fill" id="playprev-fill"><use xlink:href="#playprev-fill" /></svg><input type="text" class="icon-name" id="playprev-fill-copy" value="playprev-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#playprev-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="rightarrow-fill" id="rightarrow-fill"><use xlink:href="#rightarrow-fill" /></svg><input type="text" class="icon-name" id="rightarrow-fill-copy" value="rightarrow-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#rightarrow-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="share-circle-fill" id="share-circle-fill"><use xlink:href="#share-circle-fill" /></svg><input type="text" class="icon-name" id="share-circle-fill-copy" value="share-circle-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#share-circle-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="star-fill" id="star-fill"><use xlink:href="#star-fill" /></svg><input type="text" class="icon-name" id="star-fill-copy" value="star-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#star-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="tag1-fill" id="tag1-fill"><use xlink:href="#tag1-fill" /></svg><input type="text" class="icon-name" id="tag1-fill-copy" value="tag1-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#tag1-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="tag2-fill" id="tag2-fill"><use xlink:href="#tag2-fill" /></svg><input type="text" class="icon-name" id="tag2-fill-copy" value="tag2-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#tag2-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="uparrow-fill" id="uparrow-fill"><use xlink:href="#uparrow-fill" /></svg><input type="text" class="icon-name" id="uparrow-fill-copy" value="uparrow-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#uparrow-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="user1-fill" id="user1-fill"><use xlink:href="#user1-fill" /></svg><input type="text" class="icon-name" id="user1-fill-copy" value="user1-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#user1-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="user2-fill" id="user2-fill"><use xlink:href="#user2-fill" /></svg><input type="text" class="icon-name" id="user2-fill-copy" value="user2-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#user2-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="user3-fill" id="user3-fill"><use xlink:href="#user3-fill" /></svg><input type="text" class="icon-name" id="user3-fill-copy" value="user3-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#user3-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="user4-fill" id="user4-fill"><use xlink:href="#user4-fill" /></svg><input type="text" class="icon-name" id="user4-fill-copy" value="user4-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#user4-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="volumedown1-fill" id="volumedown1-fill"><use xlink:href="#volumedown1-fill" /></svg><input type="text" class="icon-name" id="volumedown1-fill-copy" value="volumedown1-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#volumedown1-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="volumedown2-fill" id="volumedown2-fill"><use xlink:href="#volumedown2-fill" /></svg><input type="text" class="icon-name" id="volumedown2-fill-copy" value="volumedown2-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#volumedown2-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="volumeoff-fill" id="volumeoff-fill"><use xlink:href="#volumeoff-fill" /></svg><input type="text" class="icon-name" id="volumeoff-fill-copy" value="volumeoff-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#volumeoff-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="volumeup1-fill" id="volumeup1-fill"><use xlink:href="#volumeup1-fill" /></svg><input type="text" class="icon-name" id="volumeup1-fill-copy" value="volumeup1-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#volumeup1-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="volumeup2-fill" id="volumeup2-fill"><use xlink:href="#volumeup2-fill" /></svg><input type="text" class="icon-name" id="volumeup2-fill-copy" value="volumeup2-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#volumeup2-fill-copy">Copy</button></div>
    <br><h2>line</h2><div class="item"><svg role="img" title="add-circle-line" id="add-circle-line"><use xlink:href="#add-circle-line" /></svg><input type="text" class="icon-name" id="add-circle-line-copy" value="add-circle-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#add-circle-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="add-line" id="add-line"><use xlink:href="#add-line" /></svg><input type="text" class="icon-name" id="add-line-copy" value="add-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#add-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="checked-circle-line" id="checked-circle-line"><use xlink:href="#checked-circle-line" /></svg><input type="text" class="icon-name" id="checked-circle-line-copy" value="checked-circle-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#checked-circle-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="checked-line" id="checked-line"><use xlink:href="#checked-line" /></svg><input type="text" class="icon-name" id="checked-line-copy" value="checked-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#checked-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="dislike1-line" id="dislike1-line"><use xlink:href="#dislike1-line" /></svg><input type="text" class="icon-name" id="dislike1-line-copy" value="dislike1-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#dislike1-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="dislike2-line" id="dislike2-line"><use xlink:href="#dislike2-line" /></svg><input type="text" class="icon-name" id="dislike2-line-copy" value="dislike2-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#dislike2-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="dislike3-line" id="dislike3-line"><use xlink:href="#dislike3-line" /></svg><input type="text" class="icon-name" id="dislike3-line-copy" value="dislike3-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#dislike3-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="downangle135" id="downangle135"><use xlink:href="#downangle135" /></svg><input type="text" class="icon-name" id="downangle135-copy" value="downangle135"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#downangle135-copy">Copy</button></div>
    <div class="item"><svg role="img" title="downangle90" id="downangle90"><use xlink:href="#downangle90" /></svg><input type="text" class="icon-name" id="downangle90-copy" value="downangle90"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#downangle90-copy">Copy</button></div>
    <div class="item"><svg role="img" title="downarrow-line" id="downarrow-line"><use xlink:href="#downarrow-line" /></svg><input type="text" class="icon-name" id="downarrow-line-copy" value="downarrow-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#downarrow-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="eye-line" id="eye-line"><use xlink:href="#eye-line" /></svg><input type="text" class="icon-name" id="eye-line-copy" value="eye-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#eye-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="fastbackward-line" id="fastbackward-line"><use xlink:href="#fastbackward-line" /></svg><input type="text" class="icon-name" id="fastbackward-line-copy" value="fastbackward-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#fastbackward-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="fastforward-line" id="fastforward-line"><use xlink:href="#fastforward-line" /></svg><input type="text" class="icon-name" id="fastforward-line-copy" value="fastforward-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#fastforward-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="forward-line" id="forward-line"><use xlink:href="#forward-line" /></svg><input type="text" class="icon-name" id="forward-line-copy" value="forward-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#forward-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="grid-circle-line" id="grid-circle-line"><use xlink:href="#grid-circle-line" /></svg><input type="text" class="icon-name" id="grid-circle-line-copy" value="grid-circle-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#grid-circle-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="grid-rect-line" id="grid-rect-line"><use xlink:href="#grid-rect-line" /></svg><input type="text" class="icon-name" id="grid-rect-line-copy" value="grid-rect-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#grid-rect-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="heart-line" id="heart-line"><use xlink:href="#heart-line" /></svg><input type="text" class="icon-name" id="heart-line-copy" value="heart-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#heart-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="home-line" id="home-line"><use xlink:href="#home-line" /></svg><input type="text" class="icon-name" id="home-line-copy" value="home-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#home-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="leftangle135" id="leftangle135"><use xlink:href="#leftangle135" /></svg><input type="text" class="icon-name" id="leftangle135-copy" value="leftangle135"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#leftangle135-copy">Copy</button></div>
    <div class="item"><svg role="img" title="leftangle90" id="leftangle90"><use xlink:href="#leftangle90" /></svg><input type="text" class="icon-name" id="leftangle90-copy" value="leftangle90"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#leftangle90-copy">Copy</button></div>
    <div class="item"><svg role="img" title="leftarrow-line" id="leftarrow-line"><use xlink:href="#leftarrow-line" /></svg><input type="text" class="icon-name" id="leftarrow-line-copy" value="leftarrow-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#leftarrow-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="like1-line" id="like1-line"><use xlink:href="#like1-line" /></svg><input type="text" class="icon-name" id="like1-line-copy" value="like1-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#like1-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="like2-line" id="like2-line"><use xlink:href="#like2-line" /></svg><input type="text" class="icon-name" id="like2-line-copy" value="like2-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#like2-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="like3-line" id="like3-line"><use xlink:href="#like3-line" /></svg><input type="text" class="icon-name" id="like3-line-copy" value="like3-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#like3-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="menu-circle-line-horizontal" id="menu-circle-line-horizontal"><use xlink:href="#menu-circle-line-horizontal" /></svg><input type="text" class="icon-name" id="menu-circle-line-horizontal-copy" value="menu-circle-line-horizontal"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#menu-circle-line-horizontal-copy">Copy</button></div>
    <div class="item"><svg role="img" title="menu-circle-line-vertical" id="menu-circle-line-vertical"><use xlink:href="#menu-circle-line-vertical" /></svg><input type="text" class="icon-name" id="menu-circle-line-vertical-copy" value="menu-circle-line-vertical"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#menu-circle-line-vertical-copy">Copy</button></div>
    <div class="item"><svg role="img" title="menu-rect-line-horizontal" id="menu-rect-line-horizontal"><use xlink:href="#menu-rect-line-horizontal" /></svg><input type="text" class="icon-name" id="menu-rect-line-horizontal-copy" value="menu-rect-line-horizontal"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#menu-rect-line-horizontal-copy">Copy</button></div>
    <div class="item"><svg role="img" title="menu-rect-line-vertical" id="menu-rect-line-vertical"><use xlink:href="#menu-rect-line-vertical" /></svg><input type="text" class="icon-name" id="menu-rect-line-vertical-copy" value="menu-rect-line-vertical"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#menu-rect-line-vertical-copy">Copy</button></div>
    <div class="item"><svg role="img" title="menu1-line" id="menu1-line"><use xlink:href="#menu1-line" /></svg><input type="text" class="icon-name" id="menu1-line-copy" value="menu1-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#menu1-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="menu2-line" id="menu2-line"><use xlink:href="#menu2-line" /></svg><input type="text" class="icon-name" id="menu2-line-copy" value="menu2-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#menu2-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="pause-line" id="pause-line"><use xlink:href="#pause-line" /></svg><input type="text" class="icon-name" id="pause-line-copy" value="pause-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#pause-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="photogallery-line" id="photogallery-line"><use xlink:href="#photogallery-line" /></svg><input type="text" class="icon-name" id="photogallery-line-copy" value="photogallery-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#photogallery-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="pin-line" id="pin-line"><use xlink:href="#pin-line" /></svg><input type="text" class="icon-name" id="pin-line-copy" value="pin-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#pin-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="play-circle-line" id="play-circle-line"><use xlink:href="#play-circle-line" /></svg><input type="text" class="icon-name" id="play-circle-line-copy" value="play-circle-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#play-circle-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="playarrow-line" id="playarrow-line"><use xlink:href="#playarrow-line" /></svg><input type="text" class="icon-name" id="playarrow-line-copy" value="playarrow-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#playarrow-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="playnext-line" id="playnext-line"><use xlink:href="#playnext-line" /></svg><input type="text" class="icon-name" id="playnext-line-copy" value="playnext-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#playnext-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="playprev-line" id="playprev-line"><use xlink:href="#playprev-line" /></svg><input type="text" class="icon-name" id="playprev-line-copy" value="playprev-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#playprev-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="remove-circle-line" id="remove-circle-line"><use xlink:href="#remove-circle-line" /></svg><input type="text" class="icon-name" id="remove-circle-line-copy" value="remove-circle-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#remove-circle-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="remove-line" id="remove-line"><use xlink:href="#remove-line" /></svg><input type="text" class="icon-name" id="remove-line-copy" value="remove-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#remove-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="rightangle135" id="rightangle135"><use xlink:href="#rightangle135" /></svg><input type="text" class="icon-name" id="rightangle135-copy" value="rightangle135"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#rightangle135-copy">Copy</button></div>
    <div class="item"><svg role="img" title="rightangle90" id="rightangle90"><use xlink:href="#rightangle90" /></svg><input type="text" class="icon-name" id="rightangle90-copy" value="rightangle90"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#rightangle90-copy">Copy</button></div>
    <div class="item"><svg role="img" title="rightarrow-line" id="rightarrow-line"><use xlink:href="#rightarrow-line" /></svg><input type="text" class="icon-name" id="rightarrow-line-copy" value="rightarrow-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#rightarrow-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="search-line" id="search-line"><use xlink:href="#search-line" /></svg><input type="text" class="icon-name" id="search-line-copy" value="search-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#search-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="send-line" id="send-line"><use xlink:href="#send-line" /></svg><input type="text" class="icon-name" id="send-line-copy" value="send-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#send-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="share-circle-line" id="share-circle-line"><use xlink:href="#share-circle-line" /></svg><input type="text" class="icon-name" id="share-circle-line-copy" value="share-circle-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#share-circle-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="star-line" id="star-line"><use xlink:href="#star-line" /></svg><input type="text" class="icon-name" id="star-line-copy" value="star-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#star-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="tag1-line" id="tag1-line"><use xlink:href="#tag1-line" /></svg><input type="text" class="icon-name" id="tag1-line-copy" value="tag1-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#tag1-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="tag2-line" id="tag2-line"><use xlink:href="#tag2-line" /></svg><input type="text" class="icon-name" id="tag2-line-copy" value="tag2-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#tag2-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="unchecked-circle-line" id="unchecked-circle-line"><use xlink:href="#unchecked-circle-line" /></svg><input type="text" class="icon-name" id="unchecked-circle-line-copy" value="unchecked-circle-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#unchecked-circle-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="unchecked-line" id="unchecked-line"><use xlink:href="#unchecked-line" /></svg><input type="text" class="icon-name" id="unchecked-line-copy" value="unchecked-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#unchecked-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="upangle135" id="upangle135"><use xlink:href="#upangle135" /></svg><input type="text" class="icon-name" id="upangle135-copy" value="upangle135"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#upangle135-copy">Copy</button></div>
    <div class="item"><svg role="img" title="upangle90" id="upangle90"><use xlink:href="#upangle90" /></svg><input type="text" class="icon-name" id="upangle90-copy" value="upangle90"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#upangle90-copy">Copy</button></div>
    <div class="item"><svg role="img" title="uparrow-line" id="uparrow-line"><use xlink:href="#uparrow-line" /></svg><input type="text" class="icon-name" id="uparrow-line-copy" value="uparrow-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#uparrow-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="user2-line" id="user2-line"><use xlink:href="#user2-line" /></svg><input type="text" class="icon-name" id="user2-line-copy" value="user2-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#user2-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="user3-line" id="user3-line"><use xlink:href="#user3-line" /></svg><input type="text" class="icon-name" id="user3-line-copy" value="user3-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#user3-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="user4-line" id="user4-line"><use xlink:href="#user4-line" /></svg><input type="text" class="icon-name" id="user4-line-copy" value="user4-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#user4-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="user5-line" id="user5-line"><use xlink:href="#user5-line" /></svg><input type="text" class="icon-name" id="user5-line-copy" value="user5-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#user5-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="volumedown1-line" id="volumedown1-line"><use xlink:href="#volumedown1-line" /></svg><input type="text" class="icon-name" id="volumedown1-line-copy" value="volumedown1-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#volumedown1-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="volumedown2-line" id="volumedown2-line"><use xlink:href="#volumedown2-line" /></svg><input type="text" class="icon-name" id="volumedown2-line-copy" value="volumedown2-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#volumedown2-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="volumeoff-line" id="volumeoff-line"><use xlink:href="#volumeoff-line" /></svg><input type="text" class="icon-name" id="volumeoff-line-copy" value="volumeoff-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#volumeoff-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="volumeup1-line" id="volumeup1-line"><use xlink:href="#volumeup1-line" /></svg><input type="text" class="icon-name" id="volumeup1-line-copy" value="volumeup1-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#volumeup1-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="volumeup2-line" id="volumeup2-line"><use xlink:href="#volumeup2-line" /></svg><input type="text" class="icon-name" id="volumeup2-line-copy" value="volumeup2-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#volumeup2-line-copy">Copy</button></div>
    <br><h2>social</h2><div class="item"><svg role="img" title="amazon" id="amazon"><use xlink:href="#amazon" /></svg><input type="text" class="icon-name" id="amazon-copy" value="amazon"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#amazon-copy">Copy</button></div>
    <div class="item"><svg role="img" title="behance" id="behance"><use xlink:href="#behance" /></svg><input type="text" class="icon-name" id="behance-copy" value="behance"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#behance-copy">Copy</button></div>
    <div class="item"><svg role="img" title="buffer" id="buffer"><use xlink:href="#buffer" /></svg><input type="text" class="icon-name" id="buffer-copy" value="buffer"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#buffer-copy">Copy</button></div>
    <div class="item"><svg role="img" title="codepen" id="codepen"><use xlink:href="#codepen" /></svg><input type="text" class="icon-name" id="codepen-copy" value="codepen"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#codepen-copy">Copy</button></div>
    <div class="item"><svg role="img" title="delicious" id="delicious"><use xlink:href="#delicious" /></svg><input type="text" class="icon-name" id="delicious-copy" value="delicious"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#delicious-copy">Copy</button></div>
    <div class="item"><svg role="img" title="dribbble" id="dribbble"><use xlink:href="#dribbble" /></svg><input type="text" class="icon-name" id="dribbble-copy" value="dribbble"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#dribbble-copy">Copy</button></div>
    <div class="item"><svg role="img" title="email" id="email"><use xlink:href="#email" /></svg><input type="text" class="icon-name" id="email-copy" value="email"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#email-copy">Copy</button></div>
    <div class="item"><svg role="img" title="facebook" id="facebook"><use xlink:href="#facebook" /></svg><input type="text" class="icon-name" id="facebook-copy" value="facebook"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#facebook-copy">Copy</button></div>
    <div class="item"><svg role="img" title="facebook_square" id="facebook_square"><use xlink:href="#facebook_square" /></svg><input type="text" class="icon-name" id="facebook_square-copy" value="facebook_square"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#facebook_square-copy">Copy</button></div>
    <div class="item"><svg role="img" title="flickr" id="flickr"><use xlink:href="#flickr" /></svg><input type="text" class="icon-name" id="flickr-copy" value="flickr"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#flickr-copy">Copy</button></div>
    <div class="item"><svg role="img" title="github" id="github"><use xlink:href="#github" /></svg><input type="text" class="icon-name" id="github-copy" value="github"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#github-copy">Copy</button></div>
    <div class="item"><svg role="img" title="github_ring" id="github_ring"><use xlink:href="#github_ring" /></svg><input type="text" class="icon-name" id="github_ring-copy" value="github_ring"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#github_ring-copy">Copy</button></div>
    <div class="item"><svg role="img" title="google" id="google"><use xlink:href="#google" /></svg><input type="text" class="icon-name" id="google-copy" value="google"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#google-copy">Copy</button></div>
    <div class="item"><svg role="img" title="googleplus" id="googleplus"><use xlink:href="#googleplus" /></svg><input type="text" class="icon-name" id="googleplus-copy" value="googleplus"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#googleplus-copy">Copy</button></div>
    <div class="item"><svg role="img" title="googleplus_noplus" id="googleplus_noplus"><use xlink:href="#googleplus_noplus" /></svg><input type="text" class="icon-name" id="googleplus_noplus-copy" value="googleplus_noplus"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#googleplus_noplus-copy">Copy</button></div>
    <div class="item"><svg role="img" title="instagram" id="instagram"><use xlink:href="#instagram" /></svg><input type="text" class="icon-name" id="instagram-copy" value="instagram"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#instagram-copy">Copy</button></div>
    <div class="item"><svg role="img" title="linkedin" id="linkedin"><use xlink:href="#linkedin" /></svg><input type="text" class="icon-name" id="linkedin-copy" value="linkedin"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#linkedin-copy">Copy</button></div>
    <div class="item"><svg role="img" title="location" id="location"><use xlink:href="#location" /></svg><input type="text" class="icon-name" id="location-copy" value="location"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#location-copy">Copy</button></div>
    <div class="item"><svg role="img" title="medium" id="medium"><use xlink:href="#medium" /></svg><input type="text" class="icon-name" id="medium-copy" value="medium"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#medium-copy">Copy</button></div>
    <div class="item"><svg role="img" title="phone" id="phone"><use xlink:href="#phone" /></svg><input type="text" class="icon-name" id="phone-copy" value="phone"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#phone-copy">Copy</button></div>
    <div class="item"><svg role="img" title="pinterest" id="pinterest"><use xlink:href="#pinterest" /></svg><input type="text" class="icon-name" id="pinterest-copy" value="pinterest"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#pinterest-copy">Copy</button></div>
    <div class="item"><svg role="img" title="reddit" id="reddit"><use xlink:href="#reddit" /></svg><input type="text" class="icon-name" id="reddit-copy" value="reddit"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#reddit-copy">Copy</button></div>
    <div class="item"><svg role="img" title="reddit_head" id="reddit_head"><use xlink:href="#reddit_head" /></svg><input type="text" class="icon-name" id="reddit_head-copy" value="reddit_head"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#reddit_head-copy">Copy</button></div>
    <div class="item"><svg role="img" title="rss" id="rss"><use xlink:href="#rss" /></svg><input type="text" class="icon-name" id="rss-copy" value="rss"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#rss-copy">Copy</button></div>
    <div class="item"><svg role="img" title="sina_weibo" id="sina_weibo"><use xlink:href="#sina_weibo" /></svg><input type="text" class="icon-name" id="sina_weibo-copy" value="sina_weibo"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#sina_weibo-copy">Copy</button></div>
    <div class="item"><svg role="img" title="snapchat" id="snapchat"><use xlink:href="#snapchat" /></svg><input type="text" class="icon-name" id="snapchat-copy" value="snapchat"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#snapchat-copy">Copy</button></div>
    <div class="item"><svg role="img" title="soundcloud" id="soundcloud"><use xlink:href="#soundcloud" /></svg><input type="text" class="icon-name" id="soundcloud-copy" value="soundcloud"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#soundcloud-copy">Copy</button></div>
    <div class="item"><svg role="img" title="soundcloud_notext" id="soundcloud_notext"><use xlink:href="#soundcloud_notext" /></svg><input type="text" class="icon-name" id="soundcloud_notext-copy" value="soundcloud_notext"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#soundcloud_notext-copy">Copy</button></div>
    <div class="item"><svg role="img" title="soundcloud_text" id="soundcloud_text"><use xlink:href="#soundcloud_text" /></svg><input type="text" class="icon-name" id="soundcloud_text-copy" value="soundcloud_text"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#soundcloud_text-copy">Copy</button></div>
    <div class="item"><svg role="img" title="tumblr" id="tumblr"><use xlink:href="#tumblr" /></svg><input type="text" class="icon-name" id="tumblr-copy" value="tumblr"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#tumblr-copy">Copy</button></div>
    <div class="item"><svg role="img" title="twitter" id="twitter"><use xlink:href="#twitter" /></svg><input type="text" class="icon-name" id="twitter-copy" value="twitter"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#twitter-copy">Copy</button></div>
    <div class="item"><svg role="img" title="vine" id="vine"><use xlink:href="#vine" /></svg><input type="text" class="icon-name" id="vine-copy" value="vine"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#vine-copy">Copy</button></div>
    <div class="item"><svg role="img" title="vk" id="vk"><use xlink:href="#vk" /></svg><input type="text" class="icon-name" id="vk-copy" value="vk"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#vk-copy">Copy</button></div>
    <div class="item"><svg role="img" title="whatsapp" id="whatsapp"><use xlink:href="#whatsapp" /></svg><input type="text" class="icon-name" id="whatsapp-copy" value="whatsapp"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#whatsapp-copy">Copy</button></div>
    <div class="item"><svg role="img" title="youtube" id="youtube"><use xlink:href="#youtube" /></svg><input type="text" class="icon-name" id="youtube-copy" value="youtube"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#youtube-copy">Copy</button></div>
    <div class="item"><svg role="img" title="youtube_text" id="youtube_text"><use xlink:href="#youtube_text" /></svg><input type="text" class="icon-name" id="youtube_text-copy" value="youtube_text"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#youtube_text-copy">Copy</button></div>
    <br><h2>flags</h2><div class="item"><svg role="img" title="bd" id="bd"><use xlink:href="#bd" /></svg><input type="text" class="icon-name" id="bd-copy" value="bd"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#bd-copy">Copy</button></div>
    <div class="item"><svg role="img" title="br" id="br"><use xlink:href="#br" /></svg><input type="text" class="icon-name" id="br-copy" value="br"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#br-copy">Copy</button></div>
    <div class="item"><svg role="img" title="cn" id="cn"><use xlink:href="#cn" /></svg><input type="text" class="icon-name" id="cn-copy" value="cn"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#cn-copy">Copy</button></div>
    <div class="item"><svg role="img" title="cz" id="cz"><use xlink:href="#cz" /></svg><input type="text" class="icon-name" id="cz-copy" value="cz"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#cz-copy">Copy</button></div>
    <div class="item"><svg role="img" title="da" id="da"><use xlink:href="#da" /></svg><input type="text" class="icon-name" id="da-copy" value="da"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#da-copy">Copy</button></div>
    <div class="item"><svg role="img" title="de" id="de"><use xlink:href="#de" /></svg><input type="text" class="icon-name" id="de-copy" value="de"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#de-copy">Copy</button></div>
    <div class="item"><svg role="img" title="es" id="es"><use xlink:href="#es" /></svg><input type="text" class="icon-name" id="es-copy" value="es"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#es-copy">Copy</button></div>
    <div class="item"><svg role="img" title="fr" id="fr"><use xlink:href="#fr" /></svg><input type="text" class="icon-name" id="fr-copy" value="fr"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#fr-copy">Copy</button></div>
    <div class="item"><svg role="img" title="gb" id="gb"><use xlink:href="#gb" /></svg><input type="text" class="icon-name" id="gb-copy" value="gb"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#gb-copy">Copy</button></div>
    <div class="item"><svg role="img" title="id" id="id"><use xlink:href="#id" /></svg><input type="text" class="icon-name" id="id-copy" value="id"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#id-copy">Copy</button></div>
    <div class="item"><svg role="img" title="in" id="in"><use xlink:href="#in" /></svg><input type="text" class="icon-name" id="in-copy" value="in"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#in-copy">Copy</button></div>
    <div class="item"><svg role="img" title="it" id="it"><use xlink:href="#it" /></svg><input type="text" class="icon-name" id="it-copy" value="it"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#it-copy">Copy</button></div>
    <div class="item"><svg role="img" title="jp" id="jp"><use xlink:href="#jp" /></svg><input type="text" class="icon-name" id="jp-copy" value="jp"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#jp-copy">Copy</button></div>
    <div class="item"><svg role="img" title="kr" id="kr"><use xlink:href="#kr" /></svg><input type="text" class="icon-name" id="kr-copy" value="kr"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#kr-copy">Copy</button></div>
    <div class="item"><svg role="img" title="ng" id="ng"><use xlink:href="#ng" /></svg><input type="text" class="icon-name" id="ng-copy" value="ng"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#ng-copy">Copy</button></div>
    <div class="item"><svg role="img" title="nl" id="nl"><use xlink:href="#nl" /></svg><input type="text" class="icon-name" id="nl-copy" value="nl"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#nl-copy">Copy</button></div>
    <div class="item"><svg role="img" title="ph" id="ph"><use xlink:href="#ph" /></svg><input type="text" class="icon-name" id="ph-copy" value="ph"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#ph-copy">Copy</button></div>
    <div class="item"><svg role="img" title="pk" id="pk"><use xlink:href="#pk" /></svg><input type="text" class="icon-name" id="pk-copy" value="pk"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#pk-copy">Copy</button></div>
    <div class="item"><svg role="img" title="pl" id="pl"><use xlink:href="#pl" /></svg><input type="text" class="icon-name" id="pl-copy" value="pl"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#pl-copy">Copy</button></div>
    <div class="item"><svg role="img" title="pt" id="pt"><use xlink:href="#pt" /></svg><input type="text" class="icon-name" id="pt-copy" value="pt"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#pt-copy">Copy</button></div>
    <div class="item"><svg role="img" title="ru" id="ru"><use xlink:href="#ru" /></svg><input type="text" class="icon-name" id="ru-copy" value="ru"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#ru-copy">Copy</button></div>
    <div class="item"><svg role="img" title="se" id="se"><use xlink:href="#se" /></svg><input type="text" class="icon-name" id="se-copy" value="se"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#se-copy">Copy</button></div>
    <div class="item"><svg role="img" title="tr" id="tr"><use xlink:href="#tr" /></svg><input type="text" class="icon-name" id="tr-copy" value="tr"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#tr-copy">Copy</button></div>
    <div class="item"><svg role="img" title="us" id="us"><use xlink:href="#us" /></svg><input type="text" class="icon-name" id="us-copy" value="us"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#us-copy">Copy</button></div>
    <!-- endinject -->
  </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.16/clipboard.min.js"></script>
<script>
  var clipboard = new Clipboard('.copy-button');
  clipboard.on('success', function(e) {
      console.log(e.trigger.parentNode);
      e.trigger.parentNode.className = 'item copied';
      setTimeout(function () {
        e.trigger.parentNode.className = 'item';
      }, 1000);

      e.clearSelection();
  });

  clipboard.on('error', function(e) {
      console.error('Action:', e.action);
      console.error('Trigger:', e.trigger);
  });
</script>
</body>
</html>