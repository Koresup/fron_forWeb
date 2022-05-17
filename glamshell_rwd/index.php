<!-- include 코드는 php이므로 php 파일로 변환 필요 -->
  <? include_once $_SERVER["DOCUMENT_ROOT"]."/glamshell_rwd/inc/start.html" ?>

  <link rel="stylesheet" href="./css/main.css">

</head>
<body>
  <ul class="skipmenu_list"> <!--숨김 메뉴-->
    <li><a href="#">메뉴 바로가기</a></li>
    <li><a href="#">본문 바로가기</a></li>
    <li><a href="#">하단 바로가기</a></li>
  </ul>

  <? include_once $_SERVER["DOCUMENT_ROOT"]."/glamshell_rwd/inc/header.html" ?>

  <!-- 0509(월) -->
  <div id='visual_wrap'>
    <!-- 의미가 있는 콘텐츠를 받는 녀석은 section / 반대는 div -->
    <section id='visual'>
      <h2 class="hidden">메인 비쥬얼</h2>
      <ul id="visual_list">
        <li><a href="#"><img src="./images/visual_img_01.jpg" alt="Crystal~~~"></a></li> <!-- 이미지에 텍스트가 있으면 그 텍스트를 alt에 넣는다 -->
        <li><a href="#"><img src="./images/visual_img_02.jpg" alt="Crystal~~~"></a></li>
        <li><a href="#"><img src="./images/visual_img_03.jpg" alt="Crystal~~~"></a></li>
      </ul>
      <a href="#" id="next_btn"><img src="./images/next_btn.png" alt="다음 보기"></a>
      <a href="#" id="prev_btn"><img src="./images/prev_btn.png" alt="이전 보기"></a>
    </section>
  </div>

  <div id="contents_wrap">
    <section id="contents">
      <h2 class="hidden">컨텐츠 영역</h2>
      <section id="useinstall">
        <h3 class="hidden">설치 사용법 안내</h3>
        <ul id="useinstall_list">
          <li>
            <p class="useinstall_title">HOW TO INSTALL</p>
            <p class="useinstall_img"><img src="./images/banner_img_01.gif" alt="이미지설명"></p>
            <p class="useinstall_text">제품 사용법을 자세히 안내해 드립니다.</p>
          </li>
          <li>
            <p class="useinstall_title">HOW TO INSTALL</p>
            <p class="useinstall_img"><img src="./images/banner_img_02.gif" alt="이미지설명"></p>
            <p class="useinstall_text">제품 사용법을 자세히 안내해 드립니다.</p>
          </li>
          <li>
            <p class="useinstall_title">HOW TO INSTALL</p>
            <p class="useinstall_img"><img src="./images/banner_img_03.gif" alt="이미지설명"></p>
            <p class="useinstall_text">제품 사용법을 자세히 안내해 드립니다.</p>
          </li>
          <li>
            <p class="useinstall_title">HOW TO INSTALL</p>
            <p class="useinstall_img"><img src="./images/banner_img_04.gif" alt="이미지설명"></p>
            <p class="useinstall_text">제품 사용법을 자세히 안내해 드립니다.</p>
          </li>
        </ul>
      </section>

    </section>
  </div>

  <? include_once $_SERVER["DOCUMENT_ROOT"]."/glamshell_rwd/inc/footer.html" ?>

</body>
</html>