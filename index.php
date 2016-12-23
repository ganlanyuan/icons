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
      width: 60px; 
      height: 60px; 
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
  </style>
</head>
<body>
  <div style="height: 0; width: 0; position: absolute; visibility: hidden"><?php include_once 'sprites.svg'; ?></div>
  <div class="collection">
    <!-- inject:svg -->
    <br><h2>app store badges</h2><div class="item"><svg role="img" title="appstore"><use xlink:href="#appstore" /></svg><input type="text" class="icon-name" id="appstore-copy" value="appstore"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#appstore-copy">Copy</button></div>
    <div class="item"><svg role="img" title="googleplay"><use xlink:href="#googleplay" /></svg><input type="text" class="icon-name" id="googleplay-copy" value="googleplay"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#googleplay-copy">Copy</button></div>
    <div class="item"><svg role="img" title="googleplay_alt"><use xlink:href="#googleplay_alt" /></svg><input type="text" class="icon-name" id="googleplay_alt-copy" value="googleplay_alt"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#googleplay_alt-copy">Copy</button></div>
    <br><h2>social</h2><div class="item"><svg role="img" title="amazon"><use xlink:href="#amazon" /></svg><input type="text" class="icon-name" id="amazon-copy" value="amazon"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#amazon-copy">Copy</button></div>
    <div class="item"><svg role="img" title="behance"><use xlink:href="#behance" /></svg><input type="text" class="icon-name" id="behance-copy" value="behance"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#behance-copy">Copy</button></div>
    <div class="item"><svg role="img" title="buffer"><use xlink:href="#buffer" /></svg><input type="text" class="icon-name" id="buffer-copy" value="buffer"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#buffer-copy">Copy</button></div>
    <div class="item"><svg role="img" title="codepen"><use xlink:href="#codepen" /></svg><input type="text" class="icon-name" id="codepen-copy" value="codepen"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#codepen-copy">Copy</button></div>
    <div class="item"><svg role="img" title="delicious"><use xlink:href="#delicious" /></svg><input type="text" class="icon-name" id="delicious-copy" value="delicious"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#delicious-copy">Copy</button></div>
    <div class="item"><svg role="img" title="dribbble"><use xlink:href="#dribbble" /></svg><input type="text" class="icon-name" id="dribbble-copy" value="dribbble"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#dribbble-copy">Copy</button></div>
    <div class="item"><svg role="img" title="email"><use xlink:href="#email" /></svg><input type="text" class="icon-name" id="email-copy" value="email"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#email-copy">Copy</button></div>
    <div class="item"><svg role="img" title="facebook"><use xlink:href="#facebook" /></svg><input type="text" class="icon-name" id="facebook-copy" value="facebook"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#facebook-copy">Copy</button></div>
    <div class="item"><svg role="img" title="facebook_square"><use xlink:href="#facebook_square" /></svg><input type="text" class="icon-name" id="facebook_square-copy" value="facebook_square"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#facebook_square-copy">Copy</button></div>
    <div class="item"><svg role="img" title="flickr"><use xlink:href="#flickr" /></svg><input type="text" class="icon-name" id="flickr-copy" value="flickr"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#flickr-copy">Copy</button></div>
    <div class="item"><svg role="img" title="github"><use xlink:href="#github" /></svg><input type="text" class="icon-name" id="github-copy" value="github"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#github-copy">Copy</button></div>
    <div class="item"><svg role="img" title="github_ring"><use xlink:href="#github_ring" /></svg><input type="text" class="icon-name" id="github_ring-copy" value="github_ring"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#github_ring-copy">Copy</button></div>
    <div class="item"><svg role="img" title="google"><use xlink:href="#google" /></svg><input type="text" class="icon-name" id="google-copy" value="google"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#google-copy">Copy</button></div>
    <div class="item"><svg role="img" title="googleplus"><use xlink:href="#googleplus" /></svg><input type="text" class="icon-name" id="googleplus-copy" value="googleplus"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#googleplus-copy">Copy</button></div>
    <div class="item"><svg role="img" title="googleplus_noplus"><use xlink:href="#googleplus_noplus" /></svg><input type="text" class="icon-name" id="googleplus_noplus-copy" value="googleplus_noplus"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#googleplus_noplus-copy">Copy</button></div>
    <div class="item"><svg role="img" title="instagram"><use xlink:href="#instagram" /></svg><input type="text" class="icon-name" id="instagram-copy" value="instagram"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#instagram-copy">Copy</button></div>
    <div class="item"><svg role="img" title="linkedin"><use xlink:href="#linkedin" /></svg><input type="text" class="icon-name" id="linkedin-copy" value="linkedin"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#linkedin-copy">Copy</button></div>
    <div class="item"><svg role="img" title="location"><use xlink:href="#location" /></svg><input type="text" class="icon-name" id="location-copy" value="location"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#location-copy">Copy</button></div>
    <div class="item"><svg role="img" title="medium"><use xlink:href="#medium" /></svg><input type="text" class="icon-name" id="medium-copy" value="medium"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#medium-copy">Copy</button></div>
    <div class="item"><svg role="img" title="phone"><use xlink:href="#phone" /></svg><input type="text" class="icon-name" id="phone-copy" value="phone"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#phone-copy">Copy</button></div>
    <div class="item"><svg role="img" title="pinterest"><use xlink:href="#pinterest" /></svg><input type="text" class="icon-name" id="pinterest-copy" value="pinterest"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#pinterest-copy">Copy</button></div>
    <div class="item"><svg role="img" title="reddit"><use xlink:href="#reddit" /></svg><input type="text" class="icon-name" id="reddit-copy" value="reddit"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#reddit-copy">Copy</button></div>
    <div class="item"><svg role="img" title="reddit_head"><use xlink:href="#reddit_head" /></svg><input type="text" class="icon-name" id="reddit_head-copy" value="reddit_head"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#reddit_head-copy">Copy</button></div>
    <div class="item"><svg role="img" title="rss"><use xlink:href="#rss" /></svg><input type="text" class="icon-name" id="rss-copy" value="rss"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#rss-copy">Copy</button></div>
    <div class="item"><svg role="img" title="sina_weibo"><use xlink:href="#sina_weibo" /></svg><input type="text" class="icon-name" id="sina_weibo-copy" value="sina_weibo"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#sina_weibo-copy">Copy</button></div>
    <div class="item"><svg role="img" title="snapchat"><use xlink:href="#snapchat" /></svg><input type="text" class="icon-name" id="snapchat-copy" value="snapchat"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#snapchat-copy">Copy</button></div>
    <div class="item"><svg role="img" title="soundcloud"><use xlink:href="#soundcloud" /></svg><input type="text" class="icon-name" id="soundcloud-copy" value="soundcloud"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#soundcloud-copy">Copy</button></div>
    <div class="item"><svg role="img" title="soundcloud_notext"><use xlink:href="#soundcloud_notext" /></svg><input type="text" class="icon-name" id="soundcloud_notext-copy" value="soundcloud_notext"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#soundcloud_notext-copy">Copy</button></div>
    <div class="item"><svg role="img" title="soundcloud_text"><use xlink:href="#soundcloud_text" /></svg><input type="text" class="icon-name" id="soundcloud_text-copy" value="soundcloud_text"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#soundcloud_text-copy">Copy</button></div>
    <div class="item"><svg role="img" title="tumblr"><use xlink:href="#tumblr" /></svg><input type="text" class="icon-name" id="tumblr-copy" value="tumblr"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#tumblr-copy">Copy</button></div>
    <div class="item"><svg role="img" title="twitter"><use xlink:href="#twitter" /></svg><input type="text" class="icon-name" id="twitter-copy" value="twitter"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#twitter-copy">Copy</button></div>
    <div class="item"><svg role="img" title="vine"><use xlink:href="#vine" /></svg><input type="text" class="icon-name" id="vine-copy" value="vine"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#vine-copy">Copy</button></div>
    <div class="item"><svg role="img" title="vk"><use xlink:href="#vk" /></svg><input type="text" class="icon-name" id="vk-copy" value="vk"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#vk-copy">Copy</button></div>
    <div class="item"><svg role="img" title="whatsapp"><use xlink:href="#whatsapp" /></svg><input type="text" class="icon-name" id="whatsapp-copy" value="whatsapp"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#whatsapp-copy">Copy</button></div>
    <div class="item"><svg role="img" title="youtube"><use xlink:href="#youtube" /></svg><input type="text" class="icon-name" id="youtube-copy" value="youtube"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#youtube-copy">Copy</button></div>
    <div class="item"><svg role="img" title="youtube_text"><use xlink:href="#youtube_text" /></svg><input type="text" class="icon-name" id="youtube_text-copy" value="youtube_text"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#youtube_text-copy">Copy</button></div>
    <br><h2>new</h2><div class="item"><svg role="img" title="add-circle-line"><use xlink:href="#add-circle-line" /></svg><input type="text" class="icon-name" id="add-circle-line-copy" value="add-circle-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#add-circle-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="add-line"><use xlink:href="#add-line" /></svg><input type="text" class="icon-name" id="add-line-copy" value="add-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#add-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="checked-circle-line"><use xlink:href="#checked-circle-line" /></svg><input type="text" class="icon-name" id="checked-circle-line-copy" value="checked-circle-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#checked-circle-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="checked-line"><use xlink:href="#checked-line" /></svg><input type="text" class="icon-name" id="checked-line-copy" value="checked-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#checked-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="downangle135"><use xlink:href="#downangle135" /></svg><input type="text" class="icon-name" id="downangle135-copy" value="downangle135"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#downangle135-copy">Copy</button></div>
    <div class="item"><svg role="img" title="downangle90"><use xlink:href="#downangle90" /></svg><input type="text" class="icon-name" id="downangle90-copy" value="downangle90"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#downangle90-copy">Copy</button></div>
    <div class="item"><svg role="img" title="downarrow-fill"><use xlink:href="#downarrow-fill" /></svg><input type="text" class="icon-name" id="downarrow-fill-copy" value="downarrow-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#downarrow-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="downarrow-line"><use xlink:href="#downarrow-line" /></svg><input type="text" class="icon-name" id="downarrow-line-copy" value="downarrow-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#downarrow-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="forward-fill"><use xlink:href="#forward-fill" /></svg><input type="text" class="icon-name" id="forward-fill-copy" value="forward-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#forward-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="forward-line"><use xlink:href="#forward-line" /></svg><input type="text" class="icon-name" id="forward-line-copy" value="forward-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#forward-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="grid-circle-fill"><use xlink:href="#grid-circle-fill" /></svg><input type="text" class="icon-name" id="grid-circle-fill-copy" value="grid-circle-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#grid-circle-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="grid-circle-line"><use xlink:href="#grid-circle-line" /></svg><input type="text" class="icon-name" id="grid-circle-line-copy" value="grid-circle-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#grid-circle-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="grid-rect-fill"><use xlink:href="#grid-rect-fill" /></svg><input type="text" class="icon-name" id="grid-rect-fill-copy" value="grid-rect-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#grid-rect-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="grid-rect-line"><use xlink:href="#grid-rect-line" /></svg><input type="text" class="icon-name" id="grid-rect-line-copy" value="grid-rect-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#grid-rect-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="leftangle135"><use xlink:href="#leftangle135" /></svg><input type="text" class="icon-name" id="leftangle135-copy" value="leftangle135"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#leftangle135-copy">Copy</button></div>
    <div class="item"><svg role="img" title="leftangle90"><use xlink:href="#leftangle90" /></svg><input type="text" class="icon-name" id="leftangle90-copy" value="leftangle90"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#leftangle90-copy">Copy</button></div>
    <div class="item"><svg role="img" title="leftarrow-fill"><use xlink:href="#leftarrow-fill" /></svg><input type="text" class="icon-name" id="leftarrow-fill-copy" value="leftarrow-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#leftarrow-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="leftarrow-line"><use xlink:href="#leftarrow-line" /></svg><input type="text" class="icon-name" id="leftarrow-line-copy" value="leftarrow-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#leftarrow-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="like1-fill"><use xlink:href="#like1-fill" /></svg><input type="text" class="icon-name" id="like1-fill-copy" value="like1-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#like1-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="like1-line"><use xlink:href="#like1-line" /></svg><input type="text" class="icon-name" id="like1-line-copy" value="like1-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#like1-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="like2-fill"><use xlink:href="#like2-fill" /></svg><input type="text" class="icon-name" id="like2-fill-copy" value="like2-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#like2-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="like2-line"><use xlink:href="#like2-line" /></svg><input type="text" class="icon-name" id="like2-line-copy" value="like2-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#like2-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="like3-fill"><use xlink:href="#like3-fill" /></svg><input type="text" class="icon-name" id="like3-fill-copy" value="like3-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#like3-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="like3-line"><use xlink:href="#like3-line" /></svg><input type="text" class="icon-name" id="like3-line-copy" value="like3-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#like3-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="menu-circle-fill-horizontal"><use xlink:href="#menu-circle-fill-horizontal" /></svg><input type="text" class="icon-name" id="menu-circle-fill-horizontal-copy" value="menu-circle-fill-horizontal"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#menu-circle-fill-horizontal-copy">Copy</button></div>
    <div class="item"><svg role="img" title="menu-circle-fill-vertical"><use xlink:href="#menu-circle-fill-vertical" /></svg><input type="text" class="icon-name" id="menu-circle-fill-vertical-copy" value="menu-circle-fill-vertical"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#menu-circle-fill-vertical-copy">Copy</button></div>
    <div class="item"><svg role="img" title="menu-circle-line-horizontal"><use xlink:href="#menu-circle-line-horizontal" /></svg><input type="text" class="icon-name" id="menu-circle-line-horizontal-copy" value="menu-circle-line-horizontal"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#menu-circle-line-horizontal-copy">Copy</button></div>
    <div class="item"><svg role="img" title="menu-circle-line-vertical"><use xlink:href="#menu-circle-line-vertical" /></svg><input type="text" class="icon-name" id="menu-circle-line-vertical-copy" value="menu-circle-line-vertical"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#menu-circle-line-vertical-copy">Copy</button></div>
    <div class="item"><svg role="img" title="menu-rect-fill-horizontal"><use xlink:href="#menu-rect-fill-horizontal" /></svg><input type="text" class="icon-name" id="menu-rect-fill-horizontal-copy" value="menu-rect-fill-horizontal"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#menu-rect-fill-horizontal-copy">Copy</button></div>
    <div class="item"><svg role="img" title="menu-rect-fill-vertical"><use xlink:href="#menu-rect-fill-vertical" /></svg><input type="text" class="icon-name" id="menu-rect-fill-vertical-copy" value="menu-rect-fill-vertical"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#menu-rect-fill-vertical-copy">Copy</button></div>
    <div class="item"><svg role="img" title="menu-rect-line-horizontal"><use xlink:href="#menu-rect-line-horizontal" /></svg><input type="text" class="icon-name" id="menu-rect-line-horizontal-copy" value="menu-rect-line-horizontal"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#menu-rect-line-horizontal-copy">Copy</button></div>
    <div class="item"><svg role="img" title="menu-rect-line-vertical"><use xlink:href="#menu-rect-line-vertical" /></svg><input type="text" class="icon-name" id="menu-rect-line-vertical-copy" value="menu-rect-line-vertical"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#menu-rect-line-vertical-copy">Copy</button></div>
    <div class="item"><svg role="img" title="menu1-fill"><use xlink:href="#menu1-fill" /></svg><input type="text" class="icon-name" id="menu1-fill-copy" value="menu1-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#menu1-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="menu1-line"><use xlink:href="#menu1-line" /></svg><input type="text" class="icon-name" id="menu1-line-copy" value="menu1-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#menu1-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="menu2-fill"><use xlink:href="#menu2-fill" /></svg><input type="text" class="icon-name" id="menu2-fill-copy" value="menu2-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#menu2-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="menu2-line"><use xlink:href="#menu2-line" /></svg><input type="text" class="icon-name" id="menu2-line-copy" value="menu2-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#menu2-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="play-circle-fill"><use xlink:href="#play-circle-fill" /></svg><input type="text" class="icon-name" id="play-circle-fill-copy" value="play-circle-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#play-circle-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="play-circle-line"><use xlink:href="#play-circle-line" /></svg><input type="text" class="icon-name" id="play-circle-line-copy" value="play-circle-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#play-circle-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="playarrow-fill"><use xlink:href="#playarrow-fill" /></svg><input type="text" class="icon-name" id="playarrow-fill-copy" value="playarrow-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#playarrow-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="playarrow-line"><use xlink:href="#playarrow-line" /></svg><input type="text" class="icon-name" id="playarrow-line-copy" value="playarrow-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#playarrow-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="remove-circle-line"><use xlink:href="#remove-circle-line" /></svg><input type="text" class="icon-name" id="remove-circle-line-copy" value="remove-circle-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#remove-circle-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="remove-line"><use xlink:href="#remove-line" /></svg><input type="text" class="icon-name" id="remove-line-copy" value="remove-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#remove-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="rightangle135"><use xlink:href="#rightangle135" /></svg><input type="text" class="icon-name" id="rightangle135-copy" value="rightangle135"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#rightangle135-copy">Copy</button></div>
    <div class="item"><svg role="img" title="rightangle90"><use xlink:href="#rightangle90" /></svg><input type="text" class="icon-name" id="rightangle90-copy" value="rightangle90"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#rightangle90-copy">Copy</button></div>
    <div class="item"><svg role="img" title="rightarrow-fill"><use xlink:href="#rightarrow-fill" /></svg><input type="text" class="icon-name" id="rightarrow-fill-copy" value="rightarrow-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#rightarrow-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="rightarrow-line"><use xlink:href="#rightarrow-line" /></svg><input type="text" class="icon-name" id="rightarrow-line-copy" value="rightarrow-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#rightarrow-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="search-line"><use xlink:href="#search-line" /></svg><input type="text" class="icon-name" id="search-line-copy" value="search-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#search-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="send-line"><use xlink:href="#send-line" /></svg><input type="text" class="icon-name" id="send-line-copy" value="send-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#send-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="share-circle-fill"><use xlink:href="#share-circle-fill" /></svg><input type="text" class="icon-name" id="share-circle-fill-copy" value="share-circle-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#share-circle-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="share-circle-line"><use xlink:href="#share-circle-line" /></svg><input type="text" class="icon-name" id="share-circle-line-copy" value="share-circle-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#share-circle-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="star-fill"><use xlink:href="#star-fill" /></svg><input type="text" class="icon-name" id="star-fill-copy" value="star-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#star-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="star-line"><use xlink:href="#star-line" /></svg><input type="text" class="icon-name" id="star-line-copy" value="star-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#star-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="tag1-fill"><use xlink:href="#tag1-fill" /></svg><input type="text" class="icon-name" id="tag1-fill-copy" value="tag1-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#tag1-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="tag1-line"><use xlink:href="#tag1-line" /></svg><input type="text" class="icon-name" id="tag1-line-copy" value="tag1-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#tag1-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="tag2-fill"><use xlink:href="#tag2-fill" /></svg><input type="text" class="icon-name" id="tag2-fill-copy" value="tag2-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#tag2-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="tag2-line"><use xlink:href="#tag2-line" /></svg><input type="text" class="icon-name" id="tag2-line-copy" value="tag2-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#tag2-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="unchecked-circle-line"><use xlink:href="#unchecked-circle-line" /></svg><input type="text" class="icon-name" id="unchecked-circle-line-copy" value="unchecked-circle-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#unchecked-circle-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="unchecked-line"><use xlink:href="#unchecked-line" /></svg><input type="text" class="icon-name" id="unchecked-line-copy" value="unchecked-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#unchecked-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="upangle135"><use xlink:href="#upangle135" /></svg><input type="text" class="icon-name" id="upangle135-copy" value="upangle135"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#upangle135-copy">Copy</button></div>
    <div class="item"><svg role="img" title="upangle90"><use xlink:href="#upangle90" /></svg><input type="text" class="icon-name" id="upangle90-copy" value="upangle90"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#upangle90-copy">Copy</button></div>
    <div class="item"><svg role="img" title="uparrow-fill"><use xlink:href="#uparrow-fill" /></svg><input type="text" class="icon-name" id="uparrow-fill-copy" value="uparrow-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#uparrow-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="uparrow-line"><use xlink:href="#uparrow-line" /></svg><input type="text" class="icon-name" id="uparrow-line-copy" value="uparrow-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#uparrow-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="user1-fill"><use xlink:href="#user1-fill" /></svg><input type="text" class="icon-name" id="user1-fill-copy" value="user1-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#user1-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="user2-fill"><use xlink:href="#user2-fill" /></svg><input type="text" class="icon-name" id="user2-fill-copy" value="user2-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#user2-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="user2-line"><use xlink:href="#user2-line" /></svg><input type="text" class="icon-name" id="user2-line-copy" value="user2-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#user2-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="user3-fill"><use xlink:href="#user3-fill" /></svg><input type="text" class="icon-name" id="user3-fill-copy" value="user3-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#user3-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="user3-line"><use xlink:href="#user3-line" /></svg><input type="text" class="icon-name" id="user3-line-copy" value="user3-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#user3-line-copy">Copy</button></div>
    <div class="item"><svg role="img" title="user4-fill"><use xlink:href="#user4-fill" /></svg><input type="text" class="icon-name" id="user4-fill-copy" value="user4-fill"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#user4-fill-copy">Copy</button></div>
    <div class="item"><svg role="img" title="user4-line"><use xlink:href="#user4-line" /></svg><input type="text" class="icon-name" id="user4-line-copy" value="user4-line"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#user4-line-copy">Copy</button></div>
    <br><h2>flags</h2><div class="item"><svg role="img" title="bd"><use xlink:href="#bd" /></svg><input type="text" class="icon-name" id="bd-copy" value="bd"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#bd-copy">Copy</button></div>
    <div class="item"><svg role="img" title="br"><use xlink:href="#br" /></svg><input type="text" class="icon-name" id="br-copy" value="br"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#br-copy">Copy</button></div>
    <div class="item"><svg role="img" title="cn"><use xlink:href="#cn" /></svg><input type="text" class="icon-name" id="cn-copy" value="cn"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#cn-copy">Copy</button></div>
    <div class="item"><svg role="img" title="cz"><use xlink:href="#cz" /></svg><input type="text" class="icon-name" id="cz-copy" value="cz"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#cz-copy">Copy</button></div>
    <div class="item"><svg role="img" title="da"><use xlink:href="#da" /></svg><input type="text" class="icon-name" id="da-copy" value="da"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#da-copy">Copy</button></div>
    <div class="item"><svg role="img" title="de"><use xlink:href="#de" /></svg><input type="text" class="icon-name" id="de-copy" value="de"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#de-copy">Copy</button></div>
    <div class="item"><svg role="img" title="es"><use xlink:href="#es" /></svg><input type="text" class="icon-name" id="es-copy" value="es"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#es-copy">Copy</button></div>
    <div class="item"><svg role="img" title="fr"><use xlink:href="#fr" /></svg><input type="text" class="icon-name" id="fr-copy" value="fr"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#fr-copy">Copy</button></div>
    <div class="item"><svg role="img" title="gb"><use xlink:href="#gb" /></svg><input type="text" class="icon-name" id="gb-copy" value="gb"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#gb-copy">Copy</button></div>
    <div class="item"><svg role="img" title="id"><use xlink:href="#id" /></svg><input type="text" class="icon-name" id="id-copy" value="id"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#id-copy">Copy</button></div>
    <div class="item"><svg role="img" title="in"><use xlink:href="#in" /></svg><input type="text" class="icon-name" id="in-copy" value="in"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#in-copy">Copy</button></div>
    <div class="item"><svg role="img" title="it"><use xlink:href="#it" /></svg><input type="text" class="icon-name" id="it-copy" value="it"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#it-copy">Copy</button></div>
    <div class="item"><svg role="img" title="jp"><use xlink:href="#jp" /></svg><input type="text" class="icon-name" id="jp-copy" value="jp"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#jp-copy">Copy</button></div>
    <div class="item"><svg role="img" title="kr"><use xlink:href="#kr" /></svg><input type="text" class="icon-name" id="kr-copy" value="kr"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#kr-copy">Copy</button></div>
    <div class="item"><svg role="img" title="ng"><use xlink:href="#ng" /></svg><input type="text" class="icon-name" id="ng-copy" value="ng"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#ng-copy">Copy</button></div>
    <div class="item"><svg role="img" title="nl"><use xlink:href="#nl" /></svg><input type="text" class="icon-name" id="nl-copy" value="nl"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#nl-copy">Copy</button></div>
    <div class="item"><svg role="img" title="ph"><use xlink:href="#ph" /></svg><input type="text" class="icon-name" id="ph-copy" value="ph"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#ph-copy">Copy</button></div>
    <div class="item"><svg role="img" title="pk"><use xlink:href="#pk" /></svg><input type="text" class="icon-name" id="pk-copy" value="pk"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#pk-copy">Copy</button></div>
    <div class="item"><svg role="img" title="pl"><use xlink:href="#pl" /></svg><input type="text" class="icon-name" id="pl-copy" value="pl"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#pl-copy">Copy</button></div>
    <div class="item"><svg role="img" title="pt"><use xlink:href="#pt" /></svg><input type="text" class="icon-name" id="pt-copy" value="pt"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#pt-copy">Copy</button></div>
    <div class="item"><svg role="img" title="ru"><use xlink:href="#ru" /></svg><input type="text" class="icon-name" id="ru-copy" value="ru"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#ru-copy">Copy</button></div>
    <div class="item"><svg role="img" title="se"><use xlink:href="#se" /></svg><input type="text" class="icon-name" id="se-copy" value="se"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#se-copy">Copy</button></div>
    <div class="item"><svg role="img" title="tr"><use xlink:href="#tr" /></svg><input type="text" class="icon-name" id="tr-copy" value="tr"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#tr-copy">Copy</button></div>
    <div class="item"><svg role="img" title="us"><use xlink:href="#us" /></svg><input type="text" class="icon-name" id="us-copy" value="us"><button class="copy-button" data-clipboard-action="copy" data-clipboard-target="#us-copy">Copy</button></div>
    <!-- endinject -->
  </div>
  <!-- <img src="svg/black/social/sina_weibo.svg" alt=""> -->
<script src="clipboard.min.js"></script>
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