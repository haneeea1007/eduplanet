<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>에듀플래닛</title>

    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/eduplanet/index_header_searchbar_out.css">

</head>

<body>

    <div class="body_wrap">

        <div class="index_header_wrap">

            <!-- 헤더 메뉴 -->
            <div class="index_header_menu">

                <ul class="index_header_menu_ul_left">
                    <li>
                        <a href="/eduplanet/index.php">
                            <div class="index_header_home_img">
                                <img src="/eduplanet/img/index_header_home.png" alt="index_header_logo_img">
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
                                    <li>리뷰 작성</li>
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
                                    <li><a href="#">내 정보</a></li>
                                    <li><a href="#">찜목록</a></li>
                                    <li><a href="#">멤버십/결제</a></li>
                                    <li><a href="#">로그아웃</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>

                </ul>

            </div>

        </div>

        <div class="index_header_search_wrap">

            <div class="index_header_search">

                <a href="/eduplanet/index.php">
                    <div class="index_header_search_logo">
                        <img src="/eduplanet/img/eduplanet_logo.png" alt="index_header_search_logo">
                    </div>
                </a>


                <div class="index_main_title">

                    <div class="index_main_search">

                        <select name="select_district" id="select_district">
                            <option selected>시/군 선택</option>
                            <option value="district_01">가평군</option>
                            <option value="district_02">고양시</option>
                            <option value="district_03">과천시</option>
                            <option value="district_04">광명시</option>
                            <option value="district_05">광주시</option>
                            <option value="district_06">구리시</option>
                            <option value="district_07">군포시</option>
                            <option value="district_08">김포시</option>
                            <option value="district_09">남양주시</option>
                            <option value="district_10">동두천시</option>
                            <option value="district_11">부천시</option>
                            <option value="district_12">성남시</option>
                            <option value="district_13">수원시</option>
                            <option value="district_14">시흥시</option>
                            <option value="district_15">안산시</option>
                            <option value="district_16">안성시</option>
                            <option value="district_17">안양시</option>
                            <option value="district_18">양주시</option>
                            <option value="district_19">양평군</option>
                            <option value="district_20">여주시</option>
                            <option value="district_21">연천군</option>
                            <option value="district_22">오산시</option>
                            <option value="district_23">용인시</option>
                            <option value="district_24">의왕시</option>
                            <option value="district_25">의정부시</option>
                            <option value="district_26">이천시</option>
                            <option value="district_27">파주시</option>
                            <option value="district_28">평택시</option>
                            <option value="district_29">포천시</option>
                            <option value="district_30">하남시</option>
                            <option value="district_31">화성시</option>
                        </select>

                        <input placeholder="학원 이름으로 검색" type="text" name="" id="input_main_serach">
                        <button id="button_main_search" type="button">검색</button>

                    </div>

                </div>

            </div>
        </div>
    </div>

</body>

</html>