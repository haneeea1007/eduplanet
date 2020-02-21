<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <title>결제 완료 페이지</title>
     <script src="http://code.jquery.com/jquery-1.12.4.min.js" charset="utf-8"></script>
     <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR&amp;display=swap" rel="stylesheet">
     <link rel="stylesheet" href="./css/bill.css">
  </head>
  <body>
    <header>
       <?php
       // include "../index_header.php";
       ?>
    </header>

    <?php
      include "../lib/db_connector.php";
      if(isset($_GET['product']) && isset($_GET['price']) && isset($_GET['payMethod']) && isset($_GET['expired_date'])){
        $product = $_GET['product'];
        $price = $_GET['price'];
        $payMethod = $_GET['payMethod'];
        $expired_date = $_GET['expired_date'];
      }else {
        echo "못 받아옴";
      };

      // 로그인 되어있는 user_no(gm_order테이블에서는 gm_no은 세션값으로 insert하기! 지금은 임시로)
      $user_no = 101;
      $status = "결제완료";
      $expired_date = date("yy-m-d", $expired_date);
      $sql = "INSERT INTO `gm_order` VALUES (null, $user_no, '$product', $price, '$payMethod', '$status', '$expired_date');";
      mysqli_query($conn, $sql);
      mysqli_close($conn);
    ?>

    <section>
      <div class="inner_section">
        <div class="thankyou_logo">
          <img src="../img/thank-you.png" width="100px" height="80px" alt="thank you!">
        </div>
        <div class="pay_end_wrap">
          <h2>결제가 완료되었습니다.</h2>
          <div class="pay_end_content">
            <ul>
              <li>
                <span class="key">상품명</span>
                <span class="value"><?=$product?></span>
              </li>
              <li>
                <span class="key">설명</span>
                <span class="value">학원정보/리뷰 열람</span>
              </li>
              <li>
                <span class="key">금액</span>
                <span class="value"><?=number_format($price)?>원</span>
              </li>
            </ul>
          </div>
          <div class="pay_end_button">
              <button type="button" name="button" onclick="location.href='../index.php'">확인</button>
          </div>

        </div>

      </div>

    </section>

    <footer>

    </footer>
  </body>
</html>
