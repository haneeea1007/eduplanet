﻿﻿<?php

function insert_init_data($conn, $table_name){
  $flag="NO";
  $sql = "SELECT * from $table_name";
  $result=mysqli_query($conn,$sql) or die('Error: '.mysqli_error($conn));

  $is_set=mysqli_num_rows($result);

  if(!empty($is_set) ){
    $flag="OK";
  }

  if($flag=="NO"){
    switch($table_name){
          case 'g_members' :
            $sql = "INSERT INTO `g_members` VALUES (1,'test','1234', 'hanna0497@naver.com', '01011112222', '1991','수학', '2020-03-12','2019-01-02'),
                                                  (2,'test2','1234', 'hanna0497@naver.com', '01011112222', '1990','국어', '2020-03-12','2019-02-12'),
                                                  (3,'test3','1234', 'hanna0497@naver.com', '01011112222', '1996','수학', '2020-03-12','2019-02-14'),
                                                  (4,'test4','1234', 'hanna0497@naver.com', '01011112222', '1998','영어', '2020-03-12','2019-03-02'),
                                                  (5,'test5','1234', 'hanna0497@naver.com', '01011112222', '1994','미술', '2020-03-12', '2019-03-22'),
                                                  (6,'test6','1234', 'hanna0497@naver.com', '01011112222', '1990','미술', '2020-03-12', '2019-04-02'),
                                                  (7,'test7','1234', 'hanna0497@naver.com', '01011112222', '1994','미술', null, '2019-04-12'),
                                                  (8,'test8','1234', 'hanna0497@naver.com', '01011112222', '1992','영어', null, '2019-05-02'),
                                                  (9,'test9','1234', 'hanna0497@naver.com', '01011112222', '2001','영어', null, '2019-05-12'),
                                                  (10,'test10','1234', 'hanna0497@naver.com', '01011112222', '2005','영어', null, '2019-05-22'),
                                                  (11,'test11','1234', 'hanna0497@naver.com', '01011112222', '2009','영어', null, '2019-06-02'),
                                                  (12,'test12','1234', 'hanna0497@naver.com', '01011112222', '2010','영어', null, '2019-06-12'),
                                                  (13,'test13','1234', 'hanna0497@naver.com', '01011112222', '2003','영어', null, '2019-06-26');";
            break;
          case 'a_members' :
            $sql = "INSERT INTO `a_members` VALUES (1, 1, 'test','1234','hanna0497@naver.com','마이피아노교습소', '성미영', '2019_05_29_16_19_19_0.gif', '2020-03-12', '2020-01-02'),
                                                    (2, 2, 'test2','1234','hanna0497@naver.com','연필의작업실미술교습소', '어혜영', '2019_05_29_16_19_19_1.gif', '2020-03-12', '2019-01-22'),
                                                    (3, 3, 'test3','1234','hanna0497@naver.com','조이스영어교습소', '신중옥', '2019_05_29_16_19_19_2.gif', '2020-03-12', '2019-01-29'),
                                                    (4, 4, 'test4','1234','hanna0497@naver.com','다원셈수학교습소', '강은정', '2019_05_29_16_19_19_3.gif', '2020-03-12', '2019-02-02'),
                                                    (5, 0, 'test5','1234','hanna0497@naver.com','연정서예교습소', '성덕순', '2019_05_29_16_19_19_4.gif', null, '2019-02-22'),
                                                    (6, 0, 'test6','1234','hanna0497@naver.com','일리노이학원', '(주)일리노이학원', '2019_05_29_16_19_19_5.gif', null, '2019-03-02'),
                                                    (7, 0, 'test7','1234','hanna0497@naver.com','진음피아노학원', '최규선', '2019_05_29_16_19_19_6.gif', null, '2019-03-12'),
                                                    (8, 0, 'test8','1234','hanna0497@naver.com','청명멘토르학원', '문영숙', '2019_05_29_16_19_19_7.gif', null, '2019-04-02'),
                                                    (9, 0, 'test9','1234','hanna0497@naver.com','정수천컴퓨터학원', '정영환', '2019_05_29_16_19_19_8.gif', null, '2019-04-11'),
                                                    (10, 0, 'test10','1234','hanna0497@naver.com','전통주연구개발학원', '이상균', '2019_05_29_16_19_19_9.gif', null, '2019-04-21'),
                                                    (11, 0, 'test11','1234','hanna0497@naver.com','디자인포스미술학원', '이웅철', '2019_05_29_16_19_19_10.gif', null, '2019-05-02'),
                                                    (12, 0, 'test12','1234','hanna0497@naver.com','스카이학원', '홍수연', '2019_05_29_16_19_19_11.gif', null, '2019-05-04'),
                                                    (13, 0, 'test13','1234','hanna0497@naver.com','장은영음악학원', '장은영', '2019_05_29_16_19_19_12.gif', null, '2019-06-02'),
                                                    (14, 0, 'test14','1234','hanna0497@naver.com','박피아노학원', '박현', '2019_05_29_16_19_19_13.gif', null, '2019-06-12'),
                                                    (15, 0, 'test15','1234','hanna0497@naver.com','늘푸른입시종합학원', '박승진', '2019_05_29_16_19_19_14.gif', null, '2019-06-22');";
            break;
          case 'academy' :
            $sql = academy_init_data("가평군","가평읍");
            break;
          case 'teacher' :
            $sql = "INSERT INTO `teacher` VALUES (1, 1,'고양이','피아노','국제 냥쿠르 대상', '고양이샘', '2019_05_29_16_19_19_1.gif'),
                                                (2, 1,'너구리','피아노','피아노 20년 경력', '너구리샘', '2019_05_29_16_19_19_2.gif'),
                                                (3, 1,'햄스터','피아노','전 해바라기 피아노 원장', '햄스터샘', '2019_05_29_16_19_19_3.gif'),
                                                (4, 1,'패럿','피아노','서울대 패러글라이딩학과 졸업', '패럿샘', '2019_05_29_16_19_19_4.gif');";
            break;
        case 'lecture' :
            $sql = "INSERT INTO `lecture` VALUES (1, 1, 1, 1,'피아노-오전', '고양이샘'),
                                                (2, 1, 1, 2,'피아노-오전', '고양이샘'),
                                                (3, 1, 3, 2,'피아노-오전', '고양이샘'),
                                                (4, 1, 5, 1,'피아노-오전', '고양이샘'),
                                                (5, 1, 5, 2,'피아노-오전', '고양이샘');";
            break;
        case 'review' :
            $sql = "INSERT INTO `review` VALUES (1, 1, 1, 3, 5, 2, 5, 3, 4, '고양이샘 완전 좋아요! 이 세상 귀여움이 아니에요!', '접근성이 좋지 않아요! 교통이 별로에요', '2019-01-02'),
                                                (2, 1, 2, 3, 5, 2, 5, 3, 4, '고양이샘 완전 좋아요! 이 세상 귀여움이 아니에요!', '접근성이 좋지 않아요! 교통이 별로에요', '2019-01-12'),
                                                (3, 1, 3, 3, 5, 2, 5, 3, 4, '고양이샘 완전 좋아요! 이 세상 귀여움이 아니에요!', '접근성이 좋지 않아요! 교통이 별로에요', '2019-01-22'),
                                                (4, 1, 4, 3, 4, 3, 4, 3, 4, '고양이 선생님 좋아요. 귀여움.', '교통이 너무 안좋아요. 버스가 안와요.', '2019-02-02'),
                                                (5, 1, 5, 3, 4, 3, 4, 3, 4, '고양이 선생님 좋아요. 귀여움.', '교통이 너무 안좋아요. 버스가 안와요.', '2019-02-12'),
                                                (6, 1, 6, 3, 4, 3, 4, 3, 4, '고양이 선생님 좋아요. 귀여움.', '교통이 너무 안좋아요. 버스가 안와요.', '2019-02-13'),
                                                (7, 1, 7, 3, 4, 3, 4, 3, 4, '고양이 선생님 좋아요. 귀여움.', '교통이 너무 안좋아요. 버스가 안와요.', '2019-02-22'),
                                                (8, 1, 8, 4, 4, 3, 5, 3, 3, '햄스터샘 해바라기송 완전 잘쳐요. 실력 쩔어요. 시설이 좋아요.', '교통이 별로에요.', '2019-03-04'),
                                                (9, 1, 9, 4, 4, 3, 5, 3, 3, '햄스터샘 해바라기송 완전 잘쳐요. 실력 쩔어요. 시설이 좋아요.', '교통이 별로에요.', '2019-03-14'),
                                                (10, 1, 10, 4, 4, 3, 5, 3, 5, '고양이샘에게 수업받고 실력이 늘었어요. 시설이 최신식이에요.', '학원에 가려면 왕복 1시간 걸려요. 멀어요.', '2019-04-09'),
                                                (11, 1, 11, 4, 4, 3, 5, 3, 5, '고양이샘에게 수업받고 실력이 늘었어요. 시설이 최신식이에요.', '학원에 가려면 왕복 1시간 걸려요. 멀어요.', '2019-05-09'),
                                                (12, 1, 12, 4, 4, 3, 5, 3, 5, '고양이샘에게 수업받고 실력이 늘었어요. 시설이 최신식이에요.', '학원에 가려면 왕복 1시간 걸려요. 멀어요.', '2019-05-19'),
                                                (13, 1, 13, 4, 4, 3, 5, 3, 5, '고양이샘에게 수업받고 실력이 늘었어요. 시설이 최신식이에요.', '학원에 가려면 왕복 1시간 걸려요. 멀어요.', '2019-06-19'),
                                                (14, 1, 14, 4, 4, 3, 5, 3, 5, '고양이샘에게 수업받고 실력이 늘었어요. 시설이 최신식이에요.', '학원에 가려면 왕복 1시간 걸려요. 멀어요.', '2019-06-20'),
                                                (15, 1, 15, 4, 4, 3, 5, 3, 5, '고양이샘에게 수업받고 실력이 늘었어요. 시설이 최신식이에요.', '학원에 가려면 왕복 1시간 걸려요. 멀어요.', '2019-06-22');";
            break;
        case 'acd_story' :
          $sql = "INSERT INTO `acd_story` VALUES (1, 1, '마이피아노교습소', '고양이 선생님 냥쿠르 대상 수상', '가평에서 배우는 고오급 피아노', '내용입니다', 0, '2019-1-02', '사진', '2019_05_29_16_19_19_0.gif'),
                                              (2, 1, '마이피아노교습소', '나도 피아노를 칠 수 있다!', '패럿샘에게 배우는 야매피아노', '내용입니다', 0, '2019-01-03', '사진', '2019_05_29_16_19_19_1.gif'),
                                              (3, 1, '마이피아노교습소', '마이피아노를 만나고 내 인생이 달라져', '저도 젓가락 행진곡을 칠 수 있어요', '내용입니다', 0, '2019-01-04', '사진', '2019_05_29_16_19_19_2.gif'),
                                              (4, 1, '마이피아노교습소', '20년 경력 너구리샘', '짬에서 나오는 맬러디', '내용입니다', 0, '2019-01-13', '사진', '2019_05_29_16_19_19_3.gif'),
                                              (5, 1, '마이피아노교습소', '20년 경력 너구리샘', '짬에서 나오는 맬러디', '내용입니다', 0, '2019-01-23', '사진', '2019_05_29_16_19_19_18.gif'),
                                              (6, 1, '마이피아노교습소', '나도 피아노를 칠 수 있다!', '패럿샘에게 배우는 야매피아노', '내용입니다', 0, '2019-02-03', '사진', '2019_05_29_16_19_19_17.gif'),
                                              (7, 1, '마이피아노교습소', '마이피아노를 만나고 내 인생이 달라져', '저도 젓가락 행진곡을 칠 수 있어요', '내용입니다', 0, '2020-02-05', '사진', '2019_05_29_16_19_19_2.gif'),
                                              (8, 1, '마이피아노교습소', '20년 경력 너구리샘', '짬에서 나오는 맬러디', '내용입니다', 0, '2019-02-13', '사진', '2019_05_29_16_19_19_3.gif'),
                                              (9, 1, '마이피아노교습소', '고양이 선생님 냥쿠르 대상 수상', '가평에서 배우는 고오급 피아노', '내용입니다', 0, '2019-03-03', '사진', '2019_05_29_16_19_19_4.gif'),
                                              (10, 1, '마이피아노교습소', '고양이 선생님 냥쿠르 대상 수상', '가평에서 배우는 고오급 피아노', '내용입니다', 0, '2019-03-13', '사진', '2019_05_29_16_19_19_5.gif'),
                                              (11, 1, '마이피아노교습소', '고양이 선생님 냥쿠르 대상 수상', '가평에서 배우는 고오급 피아노', '내용입니다', 0, '2019-03-23', '사진', '2019_05_29_16_19_19_6.gif'),
                                              (12, 1, '마이피아노교습소', '고양이 선생님 냥쿠르 대상 수상', '가평에서 배우는 고오급 피아노', '내용입니다', 0, '2019-04-03', '사진', '2019_05_29_16_19_19_7.gif'),
                                              (13, 1, '마이피아노교습소', '고양이 선생님 냥쿠르 대상 수상', '가평에서 배우는 고오급 피아노', '내용입니다', 0, '2019-04-13', '사진', '2019_05_29_16_19_19_8.gif'),
                                              (14, 1, '마이피아노교습소', '고양이 선생님 냥쿠르 대상 수상', '가평에서 배우는 고오급 피아노', '내용입니다', 0, '2019-04-15', '사진', '2019_05_29_16_19_19_9.gif'),
                                              (15, 1, '마이피아노교습소', '고양이 선생님 냥쿠르 대상 수상', '가평에서 배우는 고오급 피아노', '내용입니다', 0, '2019-04-17', '사진', '2019_05_29_16_19_19_10.gif'),
                                              (16, 1, '마이피아노교습소', '고양이 선생님 냥쿠르 대상 수상', '가평에서 배우는 고오급 피아노', '내용입니다', 0, '2019-05-03', '사진', '2019_05_29_16_19_19_11.gif'),
                                              (17, 1, '마이피아노교습소', '고양이 선생님 냥쿠르 대상 수상', '가평에서 배우는 고오급 피아노', '내용입니다', 0, '2019-05-05', '사진', '2019_05_29_16_19_19_12.gif'),
                                              (18, 1, '마이피아노교습소', '고양이 선생님 냥쿠르 대상 수상', '가평에서 배우는 고오급 피아노', '내용입니다', 0, '2019-05-13', '사진', '2019_05_29_16_19_19_13.gif'),
                                              (19, 1, '마이피아노교습소', '고양이 선생님 냥쿠르 대상 수상', '가평에서 배우는 고오급 피아노', '내용입니다', 0, '2019-06-03', '사진', '2019_05_29_16_19_19_14.gif'),
                                              (20, 1, '마이피아노교습소', '고양이 선생님 냥쿠르 대상 수상', '가평에서 배우는 고오급 피아노', '내용입니다', 0, '2019-06-13', '사진', '2019_05_29_16_19_19_15.gif'),
                                              (21, 1, '마이피아노교습소', '고양이 선생님 냥쿠르 대상 수상', '가평에서 배우는 고오급 피아노', '내용입니다', 0, '2019-06-23', '사진', '2019_05_29_16_19_19_16.gif');";
          break;
        case 'product' :
          $sql = "INSERT INTO `product` VALUES (1, '프리미엄 1개월', 1),
                                                  (2, '프리미엄 2개월', 2),
                                                  (3, '프리미엄 3개월', 3),
                                                  (4, '학원관리 1개월', 1),
                                                  (5, '학원관리 2개월', 2),
                                                  (6, '학원관리 3개월', 3);";
          break;
        case 'gm_order' :
          $sql = "INSERT INTO `gm_order` VALUES (1, 1, '프리미엄 1개월', 1, '카카오페이', '결제완료', '2019-02-12'),
                                                  (2, 2, '프리미엄 2개월', 2, '카카오페이', '결제완료', '2019-02-14'),
                                                  (3, 3, '프리미엄 3개월', 3, '카카오페이', '결제완료', '2019-03-02'),
                                                  (4, 4, '프리미엄 3개월', 3, '카카오페이', '결제완료', '2019-04-02'),
                                                  (5, 5, '프리미엄 1개월', 1, '카카오페이', '결제완료', '2019-05-02'),
                                                  (6, 6, '프리미엄 2개월', 2, '카카오페이', '결제완료', '2019-06-02');";
          break;
        case 'am_order' :
          $sql = "INSERT INTO `am_order` VALUES (1, 1, '학원관리 1개월', 1, '카카오페이', '결제완료', '2019-02-12'),
                                                  (2, 2, '학원관리 2개월', 2, '카카오페이', '결제완료', '2019-03-14'),
                                                  (3, 3, '학원관리 3개월', 3, '카카오페이', '결제완료', '2019-05-02'),
                                                  (4, 4, '학원관리 3개월', 3, '카카오페이', '결제완료', '2019-06-02');";
          break;
        case 'sales' :
          $sql = "INSERT INTO `sales` VALUES (1, '2019-02-12', 1, 3, 4),
                                              (2, '2019-03-12', 2, 1, 3),
                                              (3, '2019-04-12', 3, 5, 8),
                                              (4, '2019-05-12', 3, 2, 6);";
          break; 
        
      default:
        echo "<script>alert('해당 테이블이름이 없습니다. ');</script>";
        break;
    }//end of switch

    if(mysqli_query($conn,$sql)){
      echo "<script>alert('$table_name 테이블 초기값 설정 완료');</script>";
    }else{
      echo "테이블 초기값 설정 실패 : ".mysqli_error($conn);
    }
  }//end of if flag

}//end of function

//가평읍의 학원 데이터 31개를 테스트 데이터로 DB에 저장
function academy_init_data($si_param, $dong_param){
  $sql ="INSERT INTO `academy` VALUES "; //리턴할 sql문장

  set_api_index(1);
  set_api_scale(31);

  $acd_array = get_academy_from_api($si_param, $dong_param);

  
  for($i=0; $i<sizeof($acd_array); $i++){
    $si_name = $acd_array[$i]->si_name;
    $dong_name = $acd_array[$i]->dong_name;
    $sector = $acd_array[$i]->sector;
    $acd_name = $acd_array[$i]->acd_name;
    $rprsn = $acd_array[$i]->rprsn;
    $class = $acd_array[$i]->class;
    $tel = $acd_array[$i]->tel;
    $address = $acd_array[$i]->address;
    $latitude = $acd_array[$i]->latitude;
    $longitude = $acd_array[$i]->longitude;

    $no = $i+1;

    $sql .= "($no, '$si_name','$dong_name','$sector','$acd_name','$rprsn','$class','$tel','$address', '$latitude', '$longitude', '', '', '')";

    if($i != sizeof($acd_array)-1){
      $sql .=", ";
    }
  }
  $sql .= ";";

  return $sql;
}

?>
