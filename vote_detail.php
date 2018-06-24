<html lang="en">
    <head>
    <meta charset="UTF-8">
        <title>詳細投票資訊</title>
        <script src="https://d3js.org/d3.v4.0.0-alpha.4.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
        <script type="text/javascript">     
            
            $(document).ready(function() {

            })

        </script>

    <?php
        include("mysql/mysql.php");

        $id = $_GET["id"];
        $detail_vote = mysqli_query($link, "SELECT * FROM vote WHERE v_id = '$id' ");
        $row = mysqli_fetch_assoc($detail_vote);
        $u_id = 'gg';
        $all = '';

        //留言寫入資料庫
        if(isset($_POST["comment"])){
            $comment = $_POST["comment"];
            $c_date = date("Y-m-d");
            mysqli_query($link, "INSERT INTO comment (v_id, u_id, com, c_date) VALUES ('$id', '$u_id', '$comment', '$c_date')");
        }


        //連結留言資料庫
        $all_comment = mysqli_query($link, "SELECT * FROM comment WHERE v_id = '$id' ");
    ?>

        <meta charset="UTF-8">
        <title>詳細資訊</title>
    </head>
    <body>

    <ul>
        <li>圖片：<img src=' <?php echo $row["v_photo"]; ?>'</li>
        <li>標題：<?php echo $row["v_title"]; ?> </li>
        <li>發起人：<?php echo $row["v_user"]; ?></li>
        <li>描述：<?php echo $row["v_depiction"]; ?></li>
        <li>選項：</li>
        
        <ul>
            <?php
                //顯示項目與票數
                for($i=1; $i<=5; $i++){
                    if(empty($row['v_option'.$i]) == FALSE && $row['v_option'.$i] != "NULL"){
                        if( is_null($row['option'.$i.'_number']) == 1){
                            $num = 0;
                        }else{
                            $number = explode(',', $row['option'.$i.'_number']);
                            $num = count($number);   //數有幾個使用者投票
                        }
                        echo "<li>".$row['v_option'.$i]."：".$num."票</li>";
                    }
                }
            ?>
        </ul>
        <?php 

            //判斷投票是否已經截止
            date_default_timezone_set("Asia/Taipei");
            $date_line = strtotime($row["v_dateline_date"]." ".$row["v_dateline_time"]);
            $now = strtotime("now");
            echo "<li>截止日期：".$row["v_dateline_date"]." ".$row["v_dateline_time"]."</li>";
            if($date_line - $now <= 0){
                
            }else{
            //判斷使用者是否已經投票過
                for($i=1;$i<=5;$i++){
                    $option = $row['option'.$i.'_number'];
                    $all = $all.$option.',';           
                }
                $user = explode(',',$all);
                if(in_array($u_id,$user)){
    
                }else{
                    echo '<form action="cast_vote.php" method="post" enctype="multipart/form-data">';
                    echo '<input type="hidden" name="id" value="'.$id.'">';
                    echo '<input type="submit" value="我要投票">';
                    echo '</form>';
                }
            }
        ?>            
            <div class="comment_board">
                <h2>留言區</h2>
                <?php while($row2 = mysqli_fetch_assoc($all_comment)){ ?>
                    <li>使用者姓名：<?php echo $row2["u_id"]; ?> </li>
                    <li>評論：<?php echo $row2["com"]; ?> </li>
                    <li>時間：<?php echo $row2["c_date"]; ?> </li>
                <?php     }  ?>
                
                <div class="leave_comment">
                    <form action="vote_detail.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data">
                        <input type="text" name="comment">
                        <input type="submit" value="留言">
                    </form>
                </div>
            </div>

    </ul>
    </body>
</html>