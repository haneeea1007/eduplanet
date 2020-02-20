$(document).ready(function () {

    // 리뷰 작성 버튼을 눌렀을 때    
    $("#review_write").click(function () {
        showPopup(this);
    });

    // 닫기 버튼을 눌렀을 때
    $("#button_close_popup").click(function (e) {
        e.preventDefault();
        closePopup();
    });

});

// 팝업 보여주기 함수
function showPopup(parameter) {
    $("#popup_wrap, #popup_content").show();
    setPopupPos("#popup_content");
    // scrollMove("#popup_content", 400);
}

// 팝업으로 스크롤 자동이동 (팝업창 위치를 알기 위해 팝업객체 가져오기)
// selector : 가져올 객체 (아이디, this등) // sec : 이동 시간
function scrollMove(selector, sec) {
    var offset = $(selector).offset();
    $('html, body').animate({
        scrollTop: offset.top
    }, sec);
}

// 화면 크기에 따라 가운데로 위치를 지정해주는 함수
function setPopupPos(selector) {
    // $(selector).css("top", (($(window).height() - $(selector).outerHeight()) / 2 + $(window).scrollTop()) + "px");
    $(selector).css("left", (($(window).width() - $(selector).outerWidth()) / 2 + $(window).scrollLeft()) + "px");
    $(selector).css("position", "absolute");
}

// 팝업 닫기 함수
function closePopup() {
    $("#popup_wrap, #popup_content").hide();
}

//////////////////////////////////////////////////////////////////////////////////////////////////

// 학원명 자동완성 함수
$(function(){
        
    $("#acd_name").autocomplete({

        source : function( request, response ) {

            $.ajax({
                type: 'post',
                url: "/eduplanet/mypage/auto_search.php",
                dataType: "json",
                data: { search : request.term },
                success: function(data) {
                    response(data);
                }
            });
        },

        // 최소 글자입력 수
        minLength: 1,

        // 검색결과를 보여주는 시간
        delay: 100,

        // 포커스 되었을 때 input에 넣어주기
        focus: function(event, ui) {
            $("#acd_name").val(ui.item.acd_name);
            $("#si_name").val(ui.item.si_name);
            $("#dong_name").val(ui.item.dong_name);
        },

        // 선택 했을 때 input에 넣어주기
        select: function(event, ui) {

            // $('#acd_name').val(ui.item.label); // display the selected text
             $('#acd_name').val(ui.item.acd_name); // save selected id to input
             $("#si_name").val(ui.item.si_name);
             $("#dong_name").val(ui.item.dong_name);
             $("#search_academy_check").html("");

            return false;
        }

    // 검색했을 때 나오는 자동완성 창을 커스텀하기
    }).autocomplete("instance")._renderItem = function(ul, item) {
        return $("<li>")
        .append("<div><b>" + item.acd_name + "</b><br><span style='font-size: 12px; color: gray;'>" + item.si_name + " / " + item.dong_name + "</span></div>").appendTo(ul);
    };
});

/////////////////////////////////////////////////////////////////////////////////////////////////////////

// 별점을 클릭했을 때 별점 이미지와 텍스트를 바꿔주는 함수
function reviewStarSetting(group, score) {

    // 총 만족도
    if (group === 0) {

        switch (score) {

            case 1:
                document.getElementById("total_star_text").innerHTML = "매우 불만족";
                document.getElementById("total_star_img_1").style.backgroundPosition = "-50px -350px";
                document.getElementById("total_star_img_2").style.backgroundPosition = "0 -350px";
                document.getElementById("total_star_img_3").style.backgroundPosition = "0 -350px";
                document.getElementById("total_star_img_4").style.backgroundPosition = "0 -350px";
                document.getElementById("total_star_img_5").style.backgroundPosition = "0 -350px";
                break;

            case 2:
                document.getElementById("total_star_text").innerHTML = "불만족";
                document.getElementById("total_star_img_1").style.backgroundPosition = "-50px -350px";
                document.getElementById("total_star_img_2").style.backgroundPosition = "-50px -350px";
                document.getElementById("total_star_img_3").style.backgroundPosition = "0 -350px";
                document.getElementById("total_star_img_4").style.backgroundPosition = "0 -350px";
                document.getElementById("total_star_img_5").style.backgroundPosition = "0 -350px";
                break;

            case 3:
                document.getElementById("total_star_text").innerHTML = "보통";
                document.getElementById("total_star_img_1").style.backgroundPosition = "-50px -350px";
                document.getElementById("total_star_img_2").style.backgroundPosition = "-50px -350px";
                document.getElementById("total_star_img_3").style.backgroundPosition = "-50px -350px";
                document.getElementById("total_star_img_4").style.backgroundPosition = "0 -350px";
                document.getElementById("total_star_img_5").style.backgroundPosition = "0 -350px";
                break;

            case 4:
                document.getElementById("total_star_text").innerHTML = "만족";
                document.getElementById("total_star_img_1").style.backgroundPosition = "-50px -350px";
                document.getElementById("total_star_img_2").style.backgroundPosition = "-50px -350px";
                document.getElementById("total_star_img_3").style.backgroundPosition = "-50px -350px";
                document.getElementById("total_star_img_4").style.backgroundPosition = "-50px -350px";
                document.getElementById("total_star_img_5").style.backgroundPosition = "0 -350px";
                break;

            case 5:
                document.getElementById("total_star_text").innerHTML = "매우 만족";
                document.getElementById("total_star_img_1").style.backgroundPosition = "-50px -350px";
                document.getElementById("total_star_img_2").style.backgroundPosition = "-50px -350px";
                document.getElementById("total_star_img_3").style.backgroundPosition = "-50px -350px";
                document.getElementById("total_star_img_4").style.backgroundPosition = "-50px -350px";
                document.getElementById("total_star_img_5").style.backgroundPosition = "-50px -350px";
                break;
        }

        // 시설 만족도
    } else if (group === 1) {

        switch (score) {

            case 1:
                document.getElementById("facility_star_text").innerHTML = "매우 불만족";
                document.getElementById("facility_star_img_1").style.backgroundPosition = "0 -50px";
                document.getElementById("facility_star_img_2").style.backgroundPosition = "0 0";
                document.getElementById("facility_star_img_3").style.backgroundPosition = "0 0";
                document.getElementById("facility_star_img_4").style.backgroundPosition = "0 0";
                document.getElementById("facility_star_img_5").style.backgroundPosition = "0 0";
                break;

            case 2:
                document.getElementById("facility_star_text").innerHTML = "불만족";
                document.getElementById("facility_star_img_1").style.backgroundPosition = "0 -50px";
                document.getElementById("facility_star_img_2").style.backgroundPosition = "0 -50px";
                document.getElementById("facility_star_img_3").style.backgroundPosition = "0 0";
                document.getElementById("facility_star_img_4").style.backgroundPosition = "0 0";
                document.getElementById("facility_star_img_5").style.backgroundPosition = "0 0";
                break;

            case 3:
                document.getElementById("facility_star_text").innerHTML = "보통";
                document.getElementById("facility_star_img_1").style.backgroundPosition = "0 -50px";
                document.getElementById("facility_star_img_2").style.backgroundPosition = "0 -50px";
                document.getElementById("facility_star_img_3").style.backgroundPosition = "0 -50px";
                document.getElementById("facility_star_img_4").style.backgroundPosition = "0 0";
                document.getElementById("facility_star_img_5").style.backgroundPosition = "0 0";
                break;

            case 4:
                document.getElementById("facility_star_text").innerHTML = "만족";
                document.getElementById("facility_star_img_1").style.backgroundPosition = "0 -50px";
                document.getElementById("facility_star_img_2").style.backgroundPosition = "0 -50px";
                document.getElementById("facility_star_img_3").style.backgroundPosition = "0 -50px";
                document.getElementById("facility_star_img_4").style.backgroundPosition = "0 -50px";
                document.getElementById("facility_star_img_5").style.backgroundPosition = "0 0";
                break;

            case 5:
                document.getElementById("facility_star_text").innerHTML = "매우 만족";
                document.getElementById("facility_star_img_1").style.backgroundPosition = "0 -50px";
                document.getElementById("facility_star_img_2").style.backgroundPosition = "0 -50px";
                document.getElementById("facility_star_img_3").style.backgroundPosition = "0 -50px";
                document.getElementById("facility_star_img_4").style.backgroundPosition = "0 -50px";
                document.getElementById("facility_star_img_5").style.backgroundPosition = "0 -50px";
                break;
        }

        // 교통 편의성 
    } else if (group === 2) {

        switch (score) {

            case 1:
                document.getElementById("acsbl_star_text").innerHTML = "매우 불만족";
                document.getElementById("acsbl_star_img_1").style.backgroundPosition = "0 -50px";
                document.getElementById("acsbl_star_img_2").style.backgroundPosition = "0 0";
                document.getElementById("acsbl_star_img_3").style.backgroundPosition = "0 0";
                document.getElementById("acsbl_star_img_4").style.backgroundPosition = "0 0";
                document.getElementById("acsbl_star_img_5").style.backgroundPosition = "0 0";
                break;

            case 2:
                document.getElementById("acsbl_star_text").innerHTML = "불만족";
                document.getElementById("acsbl_star_img_1").style.backgroundPosition = "0 -50px";
                document.getElementById("acsbl_star_img_2").style.backgroundPosition = "0 -50px";
                document.getElementById("acsbl_star_img_3").style.backgroundPosition = "0 0";
                document.getElementById("acsbl_star_img_4").style.backgroundPosition = "0 0";
                document.getElementById("acsbl_star_img_5").style.backgroundPosition = "0 0";
                break;

            case 3:
                document.getElementById("acsbl_star_text").innerHTML = "보통";
                document.getElementById("acsbl_star_img_1").style.backgroundPosition = "0 -50px";
                document.getElementById("acsbl_star_img_2").style.backgroundPosition = "0 -50px";
                document.getElementById("acsbl_star_img_3").style.backgroundPosition = "0 -50px";
                document.getElementById("acsbl_star_img_4").style.backgroundPosition = "0 0";
                document.getElementById("acsbl_star_img_5").style.backgroundPosition = "0 0";
                break;

            case 4:
                document.getElementById("acsbl_star_text").innerHTML = "만족";
                document.getElementById("acsbl_star_img_1").style.backgroundPosition = "0 -50px";
                document.getElementById("acsbl_star_img_2").style.backgroundPosition = "0 -50px";
                document.getElementById("acsbl_star_img_3").style.backgroundPosition = "0 -50px";
                document.getElementById("acsbl_star_img_4").style.backgroundPosition = "0 -50px";
                document.getElementById("acsbl_star_img_5").style.backgroundPosition = "0 0";
                break;

            case 5:
                document.getElementById("acsbl_star_text").innerHTML = "매우 만족";
                document.getElementById("acsbl_star_img_1").style.backgroundPosition = "0 -50px";
                document.getElementById("acsbl_star_img_2").style.backgroundPosition = "0 -50px";
                document.getElementById("acsbl_star_img_3").style.backgroundPosition = "0 -50px";
                document.getElementById("acsbl_star_img_4").style.backgroundPosition = "0 -50px";
                document.getElementById("acsbl_star_img_5").style.backgroundPosition = "0 -50px";
                break;
        }

        // 강사 만족도
    } else if (group === 3) {

        switch (score) {

            case 1:
                document.getElementById("teacher_star_text").innerHTML = "매우 불만족";
                document.getElementById("teacher_star_img_1").style.backgroundPosition = "0 -50px";
                document.getElementById("teacher_star_img_2").style.backgroundPosition = "0 0";
                document.getElementById("teacher_star_img_3").style.backgroundPosition = "0 0";
                document.getElementById("teacher_star_img_4").style.backgroundPosition = "0 0";
                document.getElementById("teacher_star_img_5").style.backgroundPosition = "0 0";
                break;

            case 2:
                document.getElementById("teacher_star_text").innerHTML = "불만족";
                document.getElementById("teacher_star_img_1").style.backgroundPosition = "0 -50px";
                document.getElementById("teacher_star_img_2").style.backgroundPosition = "0 -50px";
                document.getElementById("teacher_star_img_3").style.backgroundPosition = "0 0";
                document.getElementById("teacher_star_img_4").style.backgroundPosition = "0 0";
                document.getElementById("teacher_star_img_5").style.backgroundPosition = "0 0";
                break;

            case 3:
                document.getElementById("teacher_star_text").innerHTML = "보통";
                document.getElementById("teacher_star_img_1").style.backgroundPosition = "0 -50px";
                document.getElementById("teacher_star_img_2").style.backgroundPosition = "0 -50px";
                document.getElementById("teacher_star_img_3").style.backgroundPosition = "0 -50px";
                document.getElementById("teacher_star_img_4").style.backgroundPosition = "0 0";
                document.getElementById("teacher_star_img_5").style.backgroundPosition = "0 0";
                break;

            case 4:
                document.getElementById("teacher_star_text").innerHTML = "만족";
                document.getElementById("teacher_star_img_1").style.backgroundPosition = "0 -50px";
                document.getElementById("teacher_star_img_2").style.backgroundPosition = "0 -50px";
                document.getElementById("teacher_star_img_3").style.backgroundPosition = "0 -50px";
                document.getElementById("teacher_star_img_4").style.backgroundPosition = "0 -50px";
                document.getElementById("teacher_star_img_5").style.backgroundPosition = "0 0";
                break;

            case 5:
                document.getElementById("teacher_star_text").innerHTML = "매우 만족";
                document.getElementById("teacher_star_img_1").style.backgroundPosition = "0 -50px";
                document.getElementById("teacher_star_img_2").style.backgroundPosition = "0 -50px";
                document.getElementById("teacher_star_img_3").style.backgroundPosition = "0 -50px";
                document.getElementById("teacher_star_img_4").style.backgroundPosition = "0 -50px";
                document.getElementById("teacher_star_img_5").style.backgroundPosition = "0 -50px";
                break;
        }

        // 수업료 만족도
    } else if (group === 4) {

        switch (score) {

            case 1:
                document.getElementById("cost_efct_star_text").innerHTML = "매우 불만족";
                document.getElementById("cost_efct_star_img_1").style.backgroundPosition = "0 -50px";
                document.getElementById("cost_efct_star_img_2").style.backgroundPosition = "0 0";
                document.getElementById("cost_efct_star_img_3").style.backgroundPosition = "0 0";
                document.getElementById("cost_efct_star_img_4").style.backgroundPosition = "0 0";
                document.getElementById("cost_efct_star_img_5").style.backgroundPosition = "0 0";
                break;

            case 2:
                document.getElementById("cost_efct_star_text").innerHTML = "불만족";
                document.getElementById("cost_efct_star_img_1").style.backgroundPosition = "0 -50px";
                document.getElementById("cost_efct_star_img_2").style.backgroundPosition = "0 -50px";
                document.getElementById("cost_efct_star_img_3").style.backgroundPosition = "0 0";
                document.getElementById("cost_efct_star_img_4").style.backgroundPosition = "0 0";
                document.getElementById("cost_efct_star_img_5").style.backgroundPosition = "0 0";
                break;

            case 3:
                document.getElementById("cost_efct_star_text").innerHTML = "보통";
                document.getElementById("cost_efct_star_img_1").style.backgroundPosition = "0 -50px";
                document.getElementById("cost_efct_star_img_2").style.backgroundPosition = "0 -50px";
                document.getElementById("cost_efct_star_img_3").style.backgroundPosition = "0 -50px";
                document.getElementById("cost_efct_star_img_4").style.backgroundPosition = "0 0";
                document.getElementById("cost_efct_star_img_5").style.backgroundPosition = "0 0";
                break;

            case 4:
                document.getElementById("cost_efct_star_text").innerHTML = "만족";
                document.getElementById("cost_efct_star_img_1").style.backgroundPosition = "0 -50px";
                document.getElementById("cost_efct_star_img_2").style.backgroundPosition = "0 -50px";
                document.getElementById("cost_efct_star_img_3").style.backgroundPosition = "0 -50px";
                document.getElementById("cost_efct_star_img_4").style.backgroundPosition = "0 -50px";
                document.getElementById("cost_efct_star_img_5").style.backgroundPosition = "0 0";
                break;

            case 5:
                document.getElementById("cost_efct_star_text").innerHTML = "매우 만족";
                document.getElementById("cost_efct_star_img_1").style.backgroundPosition = "0 -50px";
                document.getElementById("cost_efct_star_img_2").style.backgroundPosition = "0 -50px";
                document.getElementById("cost_efct_star_img_3").style.backgroundPosition = "0 -50px";
                document.getElementById("cost_efct_star_img_4").style.backgroundPosition = "0 -50px";
                document.getElementById("cost_efct_star_img_5").style.backgroundPosition = "0 -50px";
                break;
        }

        // 학업 성취도
    } else if (group === 5) {

        switch (score) {

            case 1:
                document.getElementById("achievement_star_text").innerHTML = "매우 불만족";
                document.getElementById("achievement_star_img_1").style.backgroundPosition = "0 -50px";
                document.getElementById("achievement_star_img_2").style.backgroundPosition = "0 0";
                document.getElementById("achievement_star_img_3").style.backgroundPosition = "0 0";
                document.getElementById("achievement_star_img_4").style.backgroundPosition = "0 0";
                document.getElementById("achievement_star_img_5").style.backgroundPosition = "0 0";
                break;

            case 2:
                document.getElementById("achievement_star_text").innerHTML = "불만족";
                document.getElementById("achievement_star_img_1").style.backgroundPosition = "0 -50px";
                document.getElementById("achievement_star_img_2").style.backgroundPosition = "0 -50px";
                document.getElementById("achievement_star_img_3").style.backgroundPosition = "0 0";
                document.getElementById("achievement_star_img_4").style.backgroundPosition = "0 0";
                document.getElementById("achievement_star_img_5").style.backgroundPosition = "0 0";
                break;

            case 3:
                document.getElementById("achievement_star_text").innerHTML = "보통";
                document.getElementById("achievement_star_img_1").style.backgroundPosition = "0 -50px";
                document.getElementById("achievement_star_img_2").style.backgroundPosition = "0 -50px";
                document.getElementById("achievement_star_img_3").style.backgroundPosition = "0 -50px";
                document.getElementById("achievement_star_img_4").style.backgroundPosition = "0 0";
                document.getElementById("achievement_star_img_5").style.backgroundPosition = "0 0";
                break;

            case 4:
                document.getElementById("achievement_star_text").innerHTML = "만족";
                document.getElementById("achievement_star_img_1").style.backgroundPosition = "0 -50px";
                document.getElementById("achievement_star_img_2").style.backgroundPosition = "0 -50px";
                document.getElementById("achievement_star_img_3").style.backgroundPosition = "0 -50px";
                document.getElementById("achievement_star_img_4").style.backgroundPosition = "0 -50px";
                document.getElementById("achievement_star_img_5").style.backgroundPosition = "0 0";
                break;

            case 5:
                document.getElementById("achievement_star_text").innerHTML = "매우 만족";
                document.getElementById("achievement_star_img_1").style.backgroundPosition = "0 -50px";
                document.getElementById("achievement_star_img_2").style.backgroundPosition = "0 -50px";
                document.getElementById("achievement_star_img_3").style.backgroundPosition = "0 -50px";
                document.getElementById("achievement_star_img_4").style.backgroundPosition = "0 -50px";
                document.getElementById("achievement_star_img_5").style.backgroundPosition = "0 -50px";
                break;
        }
    }
}

// 텍스트 길이를 구해 실시간으로 화면에 보여주는 함수
// 글자 길이 제한을 넘었을 때 1이 추가되는 것 수정함
function countTextLength(input) {

    switch (input) {

        case 1:
            var text = document.getElementById("one_line").value;
            document.getElementById("text_length_one_line").innerHTML = text.length;

            if (text.length === 81) {
                document.getElementById("text_length_one_line").innerHTML = 80;
            }
            break;

        case 2:
            var text = document.getElementById("benefit").value;
            document.getElementById("text_length_benefit").innerHTML = text.length;

            if (text.length === 251) {
                document.getElementById("text_length_one_line").innerHTML = 80;
            }
            break;

        case 3:
            var text = document.getElementById("drawback").value;
            document.getElementById("text_length_drawback").innerHTML = text.length;

            if (text.length === 251) {
                document.getElementById("text_length_one_line").innerHTML = 80;
            }
            break;

    }
}

// 학원을 선택했을 때 옆의 text 사라지기
function checkAcademy() {

    if (document.getElementById("acd_name").value === "") {
        document.getElementById("search_academy_check").innerHTML = "학원을 선택해 주세요.";
    }

}

///////////////////////////////////////////////////////////////////////////////////////////

// 등록하기 버튼을 눌렀을 때
function registReview() {

        if (document.getElementById("acd_name").value != "" &&
            document.getElementById("total_star_text").innerHTML != "" &&
            document.getElementById("one_line").value != "" &&
            document.getElementById("benefit").value != "" &&
            document.getElementById("drawback").value != "" &&
            document.getElementById("facility_star_text").innerHTML != "" &&
            document.getElementById("acsbl_star_text").innerHTML != "" &&
            document.getElementById("teacher_star_text").innerHTML != "" &&
            document.getElementById("cost_efct_star_text").innerHTML != "" &&
            document.getElementById("achievement_star_text").innerHTML != "") {

            if (document.getElementById("one_line").value.length < 20) {
                alert("한줄평은 20자 이상이어야 합니다.");
            } else if (document.getElementById("benefit").value.length < 30) {
                alert("장점은 30자 이상이어야 합니다.");

            } else if (document.getElementById("drawback").value.length < 30) {
                alert("단점은 30자 이상이어야 합니다.");

            } else {

                document.review_form.submit();
            }


        } else {
            alert("입력하지 않은 항목이 있습니다.");
        }
        

      
}

