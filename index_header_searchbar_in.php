<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>에듀플래닛</title>

    <!-- 제이쿼리 -->
    <script src="http://code.jquery.com/jquery-1.12.4.min.js" charset="utf-8"></script>

    <!-- 자동완성 -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- 폰트 -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR&amp;display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="/eduplanet/index_header_searchbar_in.css">

    <!-- 스크립트 -->
    <script src="/eduplanet/searchbar_in.js"></script>

</head>

<body>

    <div class="body_wrap">
        <div class="index_header_wrap">

            <!-- 헤더 메뉴 -->
            <div class="index_header_menu">

                <ul class="index_header_menu_ul_left">
                    <li>
                        <a href="/eduplanet/index.php">
                            <div class="index_header_logo_img">
                                <img src="/eduplanet/img/eduplanet_logo.png" alt="index_header_logo_img">
                            </div>

                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <span>학원</span>
                            <div class="index_header_menu_hover">
                                <img src="/eduplanet/img/index_header_hover.png" alt="index_header_menu_hover">
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="/eduplanet/acd_story/index.php">
                            <span>스토리</span>
                            <div class="index_header_menu_hover">
                                <img src="/eduplanet/img/index_header_hover.png" alt="index_header_menu_hover">
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <span>멤버십</span>
                            <div class="index_header_menu_hover">
                                <img src="/eduplanet/img/index_header_hover.png" alt="index_header_menu_hover">
                            </div>
                        </a>
                    </li>

                </ul>

                <form name="search_academy_form" action="#" method="post">
                    <div class="index_header_searchbar_in">
                        <input placeholder="학원 이름으로 검색" type="text" name="acd_name" id="acd_name_in">
                        <button id="button_main_search" type="button">검색</button>
                    </div>
                </form>

                <ul class="index_header_menu_ul_right">

                    <li>
                        <!-- 리뷰쓰기 -->
                        <div class="index_header_review_img">
                            <img src="/eduplanet/img/index_header_review.png" alt="index_header_review">
                        </div>

                        <div class="index_header_menu_hover_detail">
                            <img src="/eduplanet/img/index_header_hover.png" alt="index_header_menu_hover">

                            <div class="index_header_menu_hover_detail_review">
                                <ul>
                                    <li id="review_write"  onclick="showPopup(1);">리뷰 작성</li>
                                </ul>

                            </div>
                        </div>
                    </li>

                    <li>
                        <!-- 내정보 -->
                        <div class="index_header_profile_img">
                            <img src="/eduplanet/img/index_header_profile.png" alt="index_header_profile">
                        </div>

                        <div class="index_header_menu_hover_detail">
                            <img src="/eduplanet/img/index_header_hover.png" alt="index_header_menu_hover">

                            <div class="index_header_menu_hover_detail_profile">
                                <ul>
                                    <a href="/eduplanet/mypage/myinfo.php">
                                        <li>내 정보</li>
                                    </a>
                                    <a href="/eduplanet/mypage/follow.php">
                                        <li>찜목록</li>
                                    </a>
                                    <a href="/eduplanet/mypage/membership_pay.php">
                                        <li>멤버십/결제</li>
                                    </a>
                                    <a href="/eduplanet/mypage/review_mylist.php">
                                        <li>리뷰</li>
                                    </a>
                                    <a href="#">
                                        <li>로그아웃</li>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>

            </div>

        </div>
    </div>

    <?php include "mypage/review_write_popup.php"; ?>

</body>

</html>