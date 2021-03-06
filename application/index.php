<?php
require_once("./common.php");
$common_obj = new Common;
$is_sp = $common_obj->is_sp();
?>
<head>
<?php if ($is_sp) { ?>
<link rel="stylesheet" href="./index_sp.css">
<?php } else { ?>
<link rel="stylesheet" href="./index_pc.css">
<?php } ?>
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
</head>
<body>
<div class="contents">
  <?php $path = './'?>
  <?php require_once("./header.php");?>
  <div class="main">
    <div class="main-img">
      <img src="./tears_stone.png">
    </div>
    <div class="main-text">
      <div class="center">
          <div class="search_result" style="display:none">
            <p>検索結果<span id="search_text"></span></p>
            <div id="search_result">
            </div> 
          </div>
          <form class="search_box">
              <input class="text_box" id="text_box" type="text" name="search" placeholder="目的地<?php echo $is_sp? '': '・キーワード'?>などを入力してください" autocomplete="off">
              <span class="search_icon"></span>
              <input class="btn" id="btn" type="button" name="btn" value="検索">
          </form>
          <?php require_once("./japan_map.php");?>
      </div>
    </div>
  </div>
  <div class="footer">

    <h1>footer</h1>
  </div>
</body>
<script type="text/javascript" src="index.js"></script>

