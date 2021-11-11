<!DOCTYPE html>
<html>
<head>
  <title>ShoutOut Box</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600|Oswald" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="https://www.torrentbd.net/torrent/themes/material/theme.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="author" content="SkB"/>
    <meta name="description" content="TorrentBD is the leading Private Torrent Tracker in Bangladesh."/>
    <meta name="keywords" content="TorrentBD, BD, torrent, Bangladesh, BDIX, local site, high speed torrent"/>
    <link rel="apple-touch-icon" sizes="180x180" href="https://www.torrentbd.net/torrent/themes/material/static/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://www.torrentbd.net/torrent/themes/material/static/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://www.torrentbd.net/torrent/themes/material/static/favicon/favicon-16x16.png">
    <link rel="manifest" href="https://www.torrentbd.net/torrent/themes/material/static/favicon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <script type="text/javascript" src="https://www.torrentbd.net/torrent/themes/material/jquery-2.1.1.min.js"></script>

    <script src="https://www.torrentbd.net/torrent/themes/material/jquery.cookie.js"></script>
    <script type="text/javascript" src="https://www.torrentbd.net/torrent/themes/material/code264.js"></script>

    
            <link type="text/css" rel="stylesheet" href="https://www.torrentbd.net/torrent/themes/material/scheme_01_009.css"  media="screen,projection"/>
        
    <link type="text/css" rel="stylesheet" href="https://www.torrentbd.net/torrent/themes/material/inhouse_007.css"  media="screen,projection"/>

    <link type="text/css" rel="stylesheet" href="https://www.torrentbd.net/torrent/themes/immutables.css"  media="screen,projection"/>

</head>
<body>
    <!--
/*********************************************************
*
* SHOUTBOX
*
**********************************************************/
!-->

<div class="row card-panel shoutbox-container">

  <div class="col s12 content-title toggle" onclick="toggleShoutbox()">
    <h6 class="left">Shoutbox</h6>
    <span class="right toggle-indicator"><i class="material-icons">arrow_drop_down</i></span>
  </div>

  <span id="shoutbox-outline" class="toggle-outline" style="width: 100%">
  <div class="col s12 shouts" style="height: 250px; overflow: auto">    
    <div class="loading-container">
      <div class="loader-spinner"></div>
    </div>
  </div>

  <div class="col s12 shouts-send">
    <div class="row shout-send-container">
          <div class="input-field col s12 inline-submit-input" id="shout-text-container">
              <input id="shout_text" name="shout_text" type="text" class="shoutbox-text">

              <button id="sendShoutBtn" class="inline-submit-btn inline-btn-1" onclick="sendShout()"><i class="material-icons">send</i></button>
              <button class="inline-submit-btn inline-btn-2" onclick="toggleSmilies()" title="Smilies & Stickers"><i class="material-icons" style="color: #fbc02d">mood</i></button>
              <button id="shoutHistoryBtn" class="inline-submit-btn inline-btn-3" onclick="getShoutHistory()" title="Shout History"><i class="material-icons">history</i></button>

              <label for="first_name" class="shout-label">Shout Out Loud! &#9732;</label>
          </div>
          <div id="smilies-outline" class="col s12 toggle-outline" style="padding: 1.5rem">
            <div class="loading-container">
                <div class="loader-dzg"></div>
            </div>
          </div>
        </div>
  </div>
  </span>

</div>

</div>
</body>
</html>