{"filter":false,"title":"index_view.php","tooltip":"/view/index_view.php","undoManager":{"mark":8,"position":8,"stack":[[{"start":{"row":62,"column":11},"end":{"row":62,"column":40},"action":"remove","lines":["itle description, Sep 2, 2017"],"id":2},{"start":{"row":62,"column":10},"end":{"row":62,"column":11},"action":"remove","lines":["T"]}],[{"start":{"row":62,"column":10},"end":{"row":62,"column":15},"action":"insert","lines":["イベントに"],"id":10}],[{"start":{"row":62,"column":15},"end":{"row":62,"column":20},"action":"insert","lines":["参加しよう"],"id":19}],[{"start":{"row":62,"column":20},"end":{"row":62,"column":21},"action":"insert","lines":["！"],"id":20}],[{"start":{"row":50,"column":10},"end":{"row":50,"column":40},"action":"remove","lines":["Title description, Dec 7, 2017"],"id":21}],[{"start":{"row":50,"column":10},"end":{"row":50,"column":15},"action":"insert","lines":["イベントを"],"id":29}],[{"start":{"row":50,"column":15},"end":{"row":50,"column":20},"action":"insert","lines":["主催しよう"],"id":51}],[{"start":{"row":50,"column":20},"end":{"row":50,"column":21},"action":"insert","lines":["！"],"id":52}],[{"start":{"row":0,"column":0},"end":{"row":72,"column":0},"action":"remove","lines":["<!DOCTYPE html>","<html lang=\"ja\">","<head>","  <title>EventRunner</title>","  <?php include VIEW_PATH . 'templates/head.php'; ?>","  <style>","  .fakeimg {","    height: 200px;","    background: #aaa;","  }","  </style>","</head>","<body>","","<div class=\"jumbotron text-center\" style=\"margin-bottom:0\">","  <h1>EventRunner</h1>","  <p>イベントを主催・参加を管理するアプリケーションです</p> ","</div>","<?php include VIEW_PATH . 'templates/header_logined.php'; ?>","","<?php include VIEW_PATH . 'templates/messages.php'; ?>","<div class=\"container\" style=\"margin-top:30px\">","  <div class=\"row\">","    <div class=\"col-sm-4\">","      <h2>このサイトについて</h2>","      <h5>イベント管理アプリ</h5>","      <div class=\"fakeimg\"><img src=\"../assets/images/workshop_img.jpg\" alt=\"ワークショップの写真\" width=\"350\" height=\"200\"></div>","      <p>開発者は、地域のボランテイア団体に所属し活動していました。所属する団体でのイベントの管理や参加表明など、SNSを用いて行っておりました。</p>","      <p>個人で、情報収集ができ、かつ、参加イベントの管理が行えるプラットフォームがあればいいなぁと思い、開発してみることにしました。</p>","      <p>行事の情報収集や参加表明などができるプラットフォームとしてお使いください。</p>","      <h3>Some Links</h3>","      <p>各種SNSのアカウント</p>","      <ul class=\"nav nav-pills flex-column\">","        <li class=\"nav-item\">","          <a class=\"nav-link\" href=\"https://github.com/KasumiHarada/EventRunner\">GitHub</a>","        </li>","        <li class=\"nav-item\">","          <a class=\"nav-link\" href=\"https://qiita.com/hasumi0001\">Qiita</a>","        </li>","        <li class=\"nav-item\">","          <a class=\"nav-link\" href=\"https://twitter.com/hasumi0001\">Twitter</a>","        </li>","        <li class=\"nav-item\">","          <a class=\"nav-link\" href=\"https://www.facebook.com/kasumih1\">Facebook</a>","        </li>","      </ul>","      <hr class=\"d-sm-none\">","    </div>","    <div class=\"col-sm-8\">","      <h2>イベントを主催する</h2>","      <h5>イベントを主催しよう！</h5>","      <div class=\"fakeimg\"><img src=\"../assets/images/volunteer.jpg\" alt=\"ボランテイアの写真\" width=\"350\" height=\"200\"></div>","      <style>","      img {","  width: 100%;","","  object-fit: cover;","}","</style>","      <p>イベントを主催ページから、必要項目を入力し、イベントを開催することができます。</p>","      <br>","      <h2>イベントに参加する</h2>","      <h5>イベントに参加しよう！</h5>","      <div class=\"fakeimg\"><img src=\"../assets/images/paper.jpg\" alt=\"子供の写真\" width=\"350\" height=\"200\"></div>","      <p>イベントページから、興味があるイベントの情報を取得することができます。「参加」ボタンをクリックで、簡単に参加登録をすることができます。</p>","    </div>","  </div>","</div>","","</body>","<?php include VIEW_PATH . 'templates/footer_logined.php'; ?>","</html>",""],"id":53},{"start":{"row":0,"column":0},"end":{"row":57,"column":0},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"ja\">","<head>","  <title>EventRunner</title>","  <?php include VIEW_PATH . 'templates/head.php'; ?>","  <style>","  .fakeimg {","    height: 200px;","    background: #aaa;","  }","  </style>","</head>","<body>","","<div class=\"jumbotron text-center\" style=\"margin-bottom:0\">","  <h1>EventRunner</h1>","  <p>イベントを主催・参加を管理するアプリケーションです</p> ","</div>","<?php include VIEW_PATH . 'templates/header_logined.php'; ?>","","<?php include VIEW_PATH . 'templates/messages.php'; ?>","<div class=\"container\" style=\"margin-top:30px\">","  <div class=\"row\">","    <div class=\"col-sm-4\">","      <h2>このサイトについて</h2>","      <h5>イベント管理アプリ</h5>","      <div class=\"fakeimg\"><img src=\"../assets/images/workshop_img.jpg\" alt=\"ワークショップの写真\" width=\"350\" height=\"200\"></div>","      <p>開発者は、地域のボランテイア団体に所属し活動し���いました。所属する団体でのイベントの管理や参加表明など、SNSを用いて行っておりました。</p>","      <p>個人で、情報収集ができ、かつ、参加イベントの管理が行えるプラットフォームがあればいいなぁと思い、開発してみることにしました。</p>","      <p>行事の情報収集や参加表明などができるプラットフォームとしてお使いください。</p>","      ","      <hr class=\"d-sm-none\">","    </div>","    <div class=\"col-sm-8\">","      <h2>イベントを主催する</h2>","      <h5>イベントを開こう</h5>","      <div class=\"fakeimg\"><img src=\"../assets/images/volunteer.jpg\" alt=\"ボランテイアの写真\" width=\"350\" height=\"200\"></div>","      <style>","      img {","  width: 100%;","","  object-fit: cover;","}","</style>","      <p>イベントを主催ページから、必要項目を入力し、イベントを開催することができます。</p>","      <br>","      <h2>イベントに参加する</h2>","      <h5>イベントに参加しよう</h5>","      <div class=\"fakeimg\"><img src=\"../assets/images/paper.jpg\" alt=\"子供の写真\" width=\"350\" height=\"200\"></div>","      <p>イベントページから、興味があるイベントの情報を取得することができます。「参加」ボタンをクリックで、簡単に参加登録をすることができます。</p>","    </div>","  </div>","</div>","","</body>","<?php include VIEW_PATH . 'templates/footer_logined.php'; ?>","</html>",""]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":57,"column":0},"end":{"row":57,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1597013533199,"hash":"9eb950e37b3722a1d8f69138e88f7eb4dfcdedd0"}