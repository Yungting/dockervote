<html lang="en">
    <head>
    <?php

        include("mysql/mysql.php");

        $id = $_POST["id"];
        $detail_vote = mysqli_query($link, "SELECT * FROM vote WHERE v_id = '$id' ");
        $row = mysqli_fetch_assoc($detail_vote);
    ?>

        <meta charset="UTF-8">
        <title>投票頁</title>
        <script src="https://d3js.org/d3.v4.0.0-alpha.4.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
        <script type="text/javascript">     
        var mutiple = '<?php echo $row["v_mutiple"]; ?>';
        
        //控制每次最多可投幾票
        $(document).ready(function() {
            // 項目 選取的checkbox
            $('input[type=checkbox]').click(function() {
                // 若不行多選，則把其他選項關閉
                if(mutiple == "no"){
					$("input[name='radio[]']:checked").prop('checked', false);	
                    $(this).prop("checked", true);
				}else{
                    $("input[name='radio[]']").attr('disabled', false);
				}
            });
        })
        </script>

    </head>
    <body>

    <ul>
        <li>圖片：<?php echo $row["v_photo"]; ?></li>
        <li>標題：<?php echo $row["v_title"]; ?> </li>
        <li>發起人：<?php echo $row["v_user"]; ?></li>
        <li>描述：<?php echo $row["v_depiction"]; ?></li>
        <li>選項：</li>
        <form action="save_vote.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value=" <?php echo $id; ?> ">
            <?php
            //是否能複選            
            if($row["v_mutiple"] == "yes"){
                echo '<p name="mutiple">可以複選</p>';
            }else{
                echo '<p name="mutiple">只能選一個選項</p>';
            }

            echo '<li><input type="checkbox" class="magic-checkbox" name="radio[]" value="option1">'.$row['v_option1'].'</li>';
            echo '<li><input type="checkbox" class="magic-checkbox" name="radio[]" value="option2">'.$row['v_option2'].'</li>';


            if(empty($row['v_option5']) == FALSE && $row['v_option5'] != "NULL"){
                echo '<li><input type="checkbox" class="magic-checkbox" name="radio[]" value="option3">'.$row['v_option3'].'</li>';
                echo '<li><input type="checkbox" class="magic-checkbox" name="radio[]" value="option4">'.$row['v_option4'].'</li>';
                echo '<li><input type="checkbox" class="magic-checkbox" name="radio[]" value="option5">'.$row['v_option5'].'</li>';
            }else if(empty($row['v_option4']) == FALSE && $row['v_option4'] != "NULL"){
                echo '<li><input type="checkbox" class="magic-checkbox" name="radio[]" value="option3">'.$row['v_option3'].'</li>';
                echo '<li><input type="checkbox" class="magic-checkbox" name="radio[]" value="option4">'.$row['v_option4'].'</li>';
            }else if(empty($row['v_option3']) == FALSE && $row['v_option3'] != "NULL"){
                echo '<li><input type="checkbox" class="magic-checkbox" name="radio[]" value="option3">'.$row['v_option3'].'</li>';
            }else{
                
            }
            ?>

            <input type="submit" value="投票">
        </form>
    </ul>
    </body>
</html>





