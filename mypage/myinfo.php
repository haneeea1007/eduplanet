<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>에듀플래닛</title>

    <script src="http://code.jquery.com/jquery-1.12.4.min.js" charset="utf-8"></script>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/eduplanet/mypage/css/myinfo.css">
    <script src="/eduplanet/mypage/js/myinfo_modify.js"></script>

</head>

<body>
    <div class="body_wrap">

        <header>
            <div class="header_searchbar_fix">
                <?php include_once '../index/index_header_searchbar_in.php'; ?>
            </div>

            <div class="header_mypage">
                <?php include_once './mypage_header.php'; ?>
            </div>
        </header>

        <div class="mypage_user_menu_background">
            <div class="mypage_user_menu">
                <ul>
                    <a href="/eduplanet/mypage/myinfo.php">
                        <li id="mypage_user_myinfo">내 정보</li>
                    </a>
                    <a href="/eduplanet/mypage/follow.php">
                        <li id="mypage_user_follow">찜목록</li>
                    </a>
                    <a href="/eduplanet/mypage/membership_pay.php">
                        <li id="mypage_user_membership">멤버십/결제</li>
                    </a>
                    <a href="/eduplanet/mypage/review_mylist.php">
                        <li id="mypage_user_review">리뷰</li>
                    </a>
                </ul>
            </div>
        </div>

        <div class="mypage_content_wrap">

            <div class="mypage_content">

                <div class="myinfo_title">
                    <h2>내 정보</h2>
                    <p>* 정보를 수정하신 후 수정완료 버튼을 눌러 주세요.</p>
                </div>

                <div class="myinfo_content">

                    <div class="myinfo_content_form">

                        <form id="form_member" action="./g_members_insert.php" method="post" autocomplete="on">
                            <div class="formBox">
                                <label for="inputId">아이디</label>
                                <input type="text" class="formInput" id="inputId" name="inputId" placeholder="아이디를 입력해주세요" disabled>
                                <p class="subMsg" id="idSubMsg"></p>
                            </div>
                            <div class="formBox">
                                <label for="inputPw1">비밀번호</label>
                                <input type="password" class="formInput" id="inputPw1" name="inputPw1" placeholder="비밀번호를 입력해주세요" required>
                            </div>
                            <div class="formBox">
                                <label for="inputPw2">비밀번호 확인</label>
                                <input type="password" class="formInput" id="inputPw2" name="inputPw2" placeholder="비밀번호를 확인해주세요" required>
                                <p class="subMsg" id="pwSubMsg"></p>
                            </div>
                            <div class="formBox">
                                <label for="inputEmail">이메일</label>
                                <input type="email" class="formInput" id="inputEmail" name="inputEmail" placeholder="이메일을 입력해주세요" required>
                                <p class="subMsg" id="emailSubMsg"></p>
                            </div>
                            <div class="formBox">
                                <label for="inputTel">전화번호</label>
                                <input type="tel" class="formInput" id="inputTel" name="inputTel" placeholder="전화번호를 -없이 입력해주세요" required>
                                <p class="subMsg" id="telSubMsg"></p>
                            </div>
                            <div class="formBox">
                                <label for="inputIntres">관심과목</label>
                                <input type="text" class="formInput" id="inputIntres" name="inputIntres" placeholder="관심과목을 입력해주세요" required>
                                <p class="subMsg" id="intresSubMsg"></p>
                            </div>
                            <div class="formBox">
                                <label for="inputAge">출생년도</label>
                                <select id="inputAge" name="inputAge" title="year" required></select>
                            </div>
                    </div>


                    <div class="button_div">
                        <input type="button" id="btnFormSubmit" value="수정완료" onclick="document.getElementById('form_member').submit()" disabled>
                    </div>
                    </form>
                </div>









            </div>

        </div>





        <footer>
            <?php include "../index/footer.php"; ?>
        </footer>


    </div>

</body>

</html>