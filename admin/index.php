
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- favicon -->
  <link rel="shortcut icon" href="/eduplanet/img/favicon.png">
  <!-- jquery -->
  <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="/eduplanet/admin/js/admin.js"></script>
  <script src="/eduplanet/admin/js/index.js"></script>
  <!-- css -->
  <link rel="stylesheet" href="/eduplanet/admin/css/index.css">
  <link rel="stylesheet" href="/eduplanet/admin/css/nav.css">
  <!-- 폰트 -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Do+Hyeon|Jua|Montserrat&display=swap" rel="stylesheet">
  <!-- 아이콘 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
  <!-- 차트 -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
  <title>에듀플래닛 관리자페이지</title>
</head>
<body>
<main>
<?php
  include_once 'nav.php';
  include_once '../lib/db_connector.php';

  $y = isset($_GET["y"])? $_GET["y"]: date("Y") ;
  $m = isset($_GET["m"])? $_GET["m"]: date("n") ;
?>
<!-- 페이지 변수를 자바스크립트로 넘겨줌 -->
<script>
  var y = <?=$y?>;
  var m = <?=$m?>;
</script>
<section>
  <div class="sec_top">
    <span onclick="prevDateChange('index')"><i class="fas fa-angle-left"></i></span>
    <select id="top_select_year" dir="rtl" onchange="topSelect_init_Setting('index')">
<?php
    for($i = 2018; $i<=date("Y"); $i++){
      echo "<option>$i</option>";
    }
?>
    </select>
    <span>년 </span>
    <select id="top_select_month" dir="rtl" onchange="hrefDateChange('index')">
<?php
    $last_m = $y==date("Y")? date("n"): 12;
    for($i = 1; $i<=$last_m ; $i++){
      echo "<option>$i</option>";
    }
?>
    </select>
    <span>월 </span>
    <span onclick="nextDateChange('index')"><i class="fas fa-angle-right"></i></span>
  </div>
  <div class="sec_content">
    <div id="dash_topline">
      <div>
        <span>전체 매출</span><br>
        <span>&#8361; 208,230</span>
        <span class="caret up"><i class="fas fa-caret-up"></i></span>
      </div>
      <div>
        <span>일반회원 순증가</span><br>
        <span class="dash_topline_i"><i class="fas fa-user"></i> <span id="increse_gm"></span></span>
        <span class="caret up"><i class="fas fa-caret-up"></i></span>
      </div>
      <div>
        <span>사업자회원 순증가</span><br>
        <span class="dash_topline_i"><i class="fas fa-user-tie"></i> <span id="increse_am"></span></span>
        <span class="caret down"><i class="fas fa-caret-down"></i></span>
      </div>
      <div>
        <span>신규리뷰</span><br>
        <span class="dash_topline_i"><i class="fas fa-star"></i> 89</span>
        <span class="caret up"><i class="fas fa-caret-up"></i></span>
      </div>
      <div>
        <span>신규포스팅</span><br>
        <span class="dash_topline_i"><i class="fas fa-edit"></i> 57</span>
        <span class="caret down"><i class="fas fa-caret-down"></i></span>
      </div>
    </div>
    <div id="dash_salesGraph_wrap">
      <div id="dash_salesGraph_cell1">
        <h4><i class="fas fa-chart-line"></i>&nbsp;&nbsp;&nbsp;Sales Graph<span>단위: 천원</span></h4>
        <canvas id="dash_salesGraph"></canvas>
      </div>
      <div id="dash_salesGraph_cell2">
        <div class="dash_salesGraph_detail">
          <span class="dash_salesGraph_label">전체 매출</span>
          <span class="dash_salesGraph_data">
            209,310&nbsp;&nbsp;&nbsp;<span class="caret up"><i class="fas fa-caret-up"></i></span>
            <p>전 월 대비 10%&nbsp;&nbsp;&nbsp;<span class="caret up"><i class="fas fa-caret-up"></i></span></p></span>
        </div>
        <div class="dash_salesGraph_detail">
          <span class="dash_salesGraph_label">일반회원 매출</span>
          <span class="dash_salesGraph_data">
            109,310&nbsp;&nbsp;&nbsp;<span class="caret up"><i class="fas fa-caret-up"></i></span>
            <p>전 월 대비 8%&nbsp;&nbsp;&nbsp;<span class="caret up"><i class="fas fa-caret-up"></i></span></p></span>
        </div>
        <div class="dash_salesGraph_detail">
          <span class="dash_salesGraph_label">사업자회원 매출</span>
          <span class="dash_salesGraph_data">
            99,310&nbsp;&nbsp;&nbsp;<span class="caret down"><i class="fas fa-caret-down"></i></span>
            <p>전 월 대비 7%&nbsp;&nbsp;&nbsp;<span class="caret down"><i class="fas fa-caret-down"></i></span></p></span>
        </div>
      </div>
    </div>
    <div style="display:flex; width:960px; margin-bottom: 50px;">
      <div id="dash_membersGraph_wrap">
        <h4><i class="fas fa-chart-line"></i>&nbsp;&nbsp;&nbsp;Member's Graph<span>단위: 명</span></h4>
        <canvas id="dash_membersGraph"></canvas>
      </div>
      <div id="dash_reviewGraph_wrap">
        <h4><i class="fas fa-chart-line"></i>&nbsp;&nbsp;&nbsp;Review's Graph<span>단위: 개</span></h4>
        <canvas id="dash_reviewGraph"></canvas>
      </div>
      <div id="dash_postGraph_wrap">
        <h4><i class="fas fa-chart-line"></i>&nbsp;&nbsp;&nbsp;Posting's Graph<span>단위: 개</span></h4>
        <canvas id="dash_postGraph"></canvas>
      </div>
    </div>
  </div>
</section>
</main>
</body>
</html>