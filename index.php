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
    }
    /*ul { 
      margin: 0 0 50px 0; 
      padding: 10px; 
      background: #fff; 
      -webkit-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.1); 
      box-shadow: 0 3px 7px rgba(0, 0, 0, 0.1);
    }*/
    li {
      display: inline-block;
      padding: 1.5em 0.5em;
      list-style: none;
      white-space: nowrap;
      text-align: center;
      overflow: hidden;
    }
    .collection svg { 
      width: 40px; 
      height: 40px; 
    }
    .icon-name { 
      padding: 6px 6px 0; 
      font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; 
      font-size: 12px; 
    }
    svg path,
    svg circle,
    svg ellipse,
    svg polygon,
    svg polyline { vector-effect: non-scaling-stroke; }
    h2 {
      font-size: 24px;
      margin: 40px 20px 10px;
      font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    }
  </style>
</head>
<body>
  <div style="height: 0; width: 0; position: absolute; visibility: hidden"><?php include_once 'sprites.svg'; ?></div>
  <ul class="collection">
    <!-- inject:svg -->
    <li><svg role="img" title="amazon"><use xlink:href="#amazon" /></svg><div class="icon-name">amazon</div></li>
    <li><svg role="img" title="behance"><use xlink:href="#behance" /></svg><div class="icon-name">behance</div></li>
    <li><svg role="img" title="buffer"><use xlink:href="#buffer" /></svg><div class="icon-name">buffer</div></li>
    <li><svg role="img" title="codepen"><use xlink:href="#codepen" /></svg><div class="icon-name">codepen</div></li>
    <li><svg role="img" title="dribbble"><use xlink:href="#dribbble" /></svg><div class="icon-name">dribbble</div></li>
    <li><svg role="img" title="email"><use xlink:href="#email" /></svg><div class="icon-name">email</div></li>
    <li><svg role="img" title="facebook"><use xlink:href="#facebook" /></svg><div class="icon-name">facebook</div></li>
    <li><svg role="img" title="facebook_square"><use xlink:href="#facebook_square" /></svg><div class="icon-name">facebook_square</div></li>
    <li><svg role="img" title="flickr"><use xlink:href="#flickr" /></svg><div class="icon-name">flickr</div></li>
    <li><svg role="img" title="github"><use xlink:href="#github" /></svg><div class="icon-name">github</div></li>
    <li><svg role="img" title="github_ring"><use xlink:href="#github_ring" /></svg><div class="icon-name">github_ring</div></li>
    <li><svg role="img" title="google"><use xlink:href="#google" /></svg><div class="icon-name">google</div></li>
    <li><svg role="img" title="googleplus"><use xlink:href="#googleplus" /></svg><div class="icon-name">googleplus</div></li>
    <li><svg role="img" title="instagram"><use xlink:href="#instagram" /></svg><div class="icon-name">instagram</div></li>
    <li><svg role="img" title="linkedin"><use xlink:href="#linkedin" /></svg><div class="icon-name">linkedin</div></li>
    <li><svg role="img" title="location"><use xlink:href="#location" /></svg><div class="icon-name">location</div></li>
    <li><svg role="img" title="phone"><use xlink:href="#phone" /></svg><div class="icon-name">phone</div></li>
    <li><svg role="img" title="pinterest"><use xlink:href="#pinterest" /></svg><div class="icon-name">pinterest</div></li>
    <li><svg role="img" title="reddit"><use xlink:href="#reddit" /></svg><div class="icon-name">reddit</div></li>
    <li><svg role="img" title="reddit_head"><use xlink:href="#reddit_head" /></svg><div class="icon-name">reddit_head</div></li>
    <li><svg role="img" title="rss"><use xlink:href="#rss" /></svg><div class="icon-name">rss</div></li>
    <li><svg role="img" title="sina_weibo"><use xlink:href="#sina_weibo" /></svg><div class="icon-name">sina_weibo</div></li>
    <li><svg role="img" title="snapchat"><use xlink:href="#snapchat" /></svg><div class="icon-name">snapchat</div></li>
    <li><svg role="img" title="soundcloud"><use xlink:href="#soundcloud" /></svg><div class="icon-name">soundcloud</div></li>
    <li><svg role="img" title="soundcloud_text"><use xlink:href="#soundcloud_text" /></svg><div class="icon-name">soundcloud_text</div></li>
    <li><svg role="img" title="tumblr"><use xlink:href="#tumblr" /></svg><div class="icon-name">tumblr</div></li>
    <li><svg role="img" title="twitter"><use xlink:href="#twitter" /></svg><div class="icon-name">twitter</div></li>
    <li><svg role="img" title="vine"><use xlink:href="#vine" /></svg><div class="icon-name">vine</div></li>
    <li><svg role="img" title="vk"><use xlink:href="#vk" /></svg><div class="icon-name">vk</div></li>
    <li><svg role="img" title="whatsapp"><use xlink:href="#whatsapp" /></svg><div class="icon-name">whatsapp</div></li>
    <li><svg role="img" title="youtube"><use xlink:href="#youtube" /></svg><div class="icon-name">youtube</div></li>
    <li><svg role="img" title="youtube_text"><use xlink:href="#youtube_text" /></svg><div class="icon-name">youtube_text</div></li>
    <li><svg role="img" title="angle1_down"><use xlink:href="#angle1_down" /></svg><div class="icon-name">angle1_down</div></li>
    <li><svg role="img" title="angle1_left"><use xlink:href="#angle1_left" /></svg><div class="icon-name">angle1_left</div></li>
    <li><svg role="img" title="angle1_right"><use xlink:href="#angle1_right" /></svg><div class="icon-name">angle1_right</div></li>
    <li><svg role="img" title="angle1_up"><use xlink:href="#angle1_up" /></svg><div class="icon-name">angle1_up</div></li>
    <li><svg role="img" title="angle2_down"><use xlink:href="#angle2_down" /></svg><div class="icon-name">angle2_down</div></li>
    <li><svg role="img" title="angle2_left"><use xlink:href="#angle2_left" /></svg><div class="icon-name">angle2_left</div></li>
    <li><svg role="img" title="angle2_right"><use xlink:href="#angle2_right" /></svg><div class="icon-name">angle2_right</div></li>
    <li><svg role="img" title="angle2_up"><use xlink:href="#angle2_up" /></svg><div class="icon-name">angle2_up</div></li>
    <li><svg role="img" title="arrow1_down"><use xlink:href="#arrow1_down" /></svg><div class="icon-name">arrow1_down</div></li>
    <li><svg role="img" title="arrow1_left"><use xlink:href="#arrow1_left" /></svg><div class="icon-name">arrow1_left</div></li>
    <li><svg role="img" title="arrow1_right"><use xlink:href="#arrow1_right" /></svg><div class="icon-name">arrow1_right</div></li>
    <li><svg role="img" title="arrow1_up"><use xlink:href="#arrow1_up" /></svg><div class="icon-name">arrow1_up</div></li>
    <li><svg role="img" title="arrow2_down"><use xlink:href="#arrow2_down" /></svg><div class="icon-name">arrow2_down</div></li>
    <li><svg role="img" title="arrow2_left"><use xlink:href="#arrow2_left" /></svg><div class="icon-name">arrow2_left</div></li>
    <li><svg role="img" title="arrow2_right"><use xlink:href="#arrow2_right" /></svg><div class="icon-name">arrow2_right</div></li>
    <li><svg role="img" title="arrow2_up"><use xlink:href="#arrow2_up" /></svg><div class="icon-name">arrow2_up</div></li>
    <li><svg role="img" title="close"><use xlink:href="#close" /></svg><div class="icon-name">close</div></li>
    <li><svg role="img" title="close_circle"><use xlink:href="#close_circle" /></svg><div class="icon-name">close_circle</div></li>
    <li><svg role="img" title="good"><use xlink:href="#good" /></svg><div class="icon-name">good</div></li>
    <li><svg role="img" title="good_fill"><use xlink:href="#good_fill" /></svg><div class="icon-name">good_fill</div></li>
    <li><svg role="img" title="label1"><use xlink:href="#label1" /></svg><div class="icon-name">label1</div></li>
    <li><svg role="img" title="label1_fill"><use xlink:href="#label1_fill" /></svg><div class="icon-name">label1_fill</div></li>
    <li><svg role="img" title="label2"><use xlink:href="#label2" /></svg><div class="icon-name">label2</div></li>
    <li><svg role="img" title="label2_fill"><use xlink:href="#label2_fill" /></svg><div class="icon-name">label2_fill</div></li>
    <li><svg role="img" title="menu"><use xlink:href="#menu" /></svg><div class="icon-name">menu</div></li>
    <li><svg role="img" title="menu_fill"><use xlink:href="#menu_fill" /></svg><div class="icon-name">menu_fill</div></li>
    <li><svg role="img" title="minus"><use xlink:href="#minus" /></svg><div class="icon-name">minus</div></li>
    <li><svg role="img" title="minus_circle"><use xlink:href="#minus_circle" /></svg><div class="icon-name">minus_circle</div></li>
    <li><svg role="img" title="play"><use xlink:href="#play" /></svg><div class="icon-name">play</div></li>
    <li><svg role="img" title="play_fill"><use xlink:href="#play_fill" /></svg><div class="icon-name">play_fill</div></li>
    <li><svg role="img" title="plus"><use xlink:href="#plus" /></svg><div class="icon-name">plus</div></li>
    <li><svg role="img" title="plus_circle"><use xlink:href="#plus_circle" /></svg><div class="icon-name">plus_circle</div></li>
    <li><svg role="img" title="right"><use xlink:href="#right" /></svg><div class="icon-name">right</div></li>
    <li><svg role="img" title="right_circle"><use xlink:href="#right_circle" /></svg><div class="icon-name">right_circle</div></li>
    <li><svg role="img" title="search"><use xlink:href="#search" /></svg><div class="icon-name">search</div></li>
    <li><svg role="img" title="share_arrow1"><use xlink:href="#share_arrow1" /></svg><div class="icon-name">share_arrow1</div></li>
    <li><svg role="img" title="share_arrow2"><use xlink:href="#share_arrow2" /></svg><div class="icon-name">share_arrow2</div></li>
    <li><svg role="img" title="share_arrow2_fill"><use xlink:href="#share_arrow2_fill" /></svg><div class="icon-name">share_arrow2_fill</div></li>
    <li><svg role="img" title="share_circle"><use xlink:href="#share_circle" /></svg><div class="icon-name">share_circle</div></li>
    <li><svg role="img" title="share_circle_fill"><use xlink:href="#share_circle_fill" /></svg><div class="icon-name">share_circle_fill</div></li>
    <li><svg role="img" title="star"><use xlink:href="#star" /></svg><div class="icon-name">star</div></li>
    <li><svg role="img" title="star_fill"><use xlink:href="#star_fill" /></svg><div class="icon-name">star_fill</div></li>
    <li><svg role="img" title="user"><use xlink:href="#user" /></svg><div class="icon-name">user</div></li>
    <li><svg role="img" title="user_fill"><use xlink:href="#user_fill" /></svg><div class="icon-name">user_fill</div></li>
    <!-- endinject -->
  </ul>
  <!-- <img src="svg/black/social/sina_weibo.svg" alt=""> -->
</body>
</html>