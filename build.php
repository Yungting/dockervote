<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>建立投票</title>
    <script src="js/jquery-3.2.1.min.js"></script>
</head>
<body>
    <form action="save_build.php" method="post" enctype="multipart/form-data">
        <h3>上傳圖片</h3>
        <input type="file" name="addPhoto">
        
        <h3>投票名稱</h3>
        <input type="text" name="title">
        
        <h3>相關敘述</h3>
        <input type="text" name="depiction">

        <h3>選項</h3>
        <input type="checkbox" name="mutiple" value="mutiple">可以複選<br>
        <p><input type="radio" disabled><input type="text" placeholder="選項1" name="text[]"></p>
        <p><input type="radio" disabled><input type="text" placeholder="選項2" name="text[]"></p>

        <!-- 新增投票選項   -->
		<!-- 
			id(addOption-btn) 配合js 
			在div(showBlock) 新增一個 23行append()中的東西， 前面是輸入選項內容，後面是X的按鈕(移除選項用)
			id是用來設定上限與刪除選項用的，如果沒用到可不設
		-->
		<div id="showBlock"></div>
		<a id="addOption-btn">新增投票選項<i class="far fa-plus-square"></i></a>

        <h3>截止時間</h3>
        <input type="date" name="dateline_date">
        <input type="time" name="dateline_time"> 

        <input type="submit" value="建立投票"><input type="reset" value="全部清除">
    </form>
    <script src="js/jquery.magnific-popup.js"></script>
	<script>
		/* 新增投票選項 */
		//set the default value
		var txtId = 1;
		var optionId = txtId + 2;

		//add input block in showBlock
		$("#addOption-btn").click(function () {
		
			$("#showBlock").append('<p id="p' + txtId + '"><input type="radio" disabled><input type="text" id="in'+txtId+'" name="text[]" placeholder="選項 '+optionId+'"/> <button id="delOption-btn" onclick="deltxt('+txtId+')"><i class="fas fa-times">刪除</i></button></p>');
			txtId++;
			optionId++;
		if(optionId>5){
			$("#addOption-btn").hide();
		}
		});

		//移除選項
		function deltxt(id) {
		if(optionId>5){
			$("#addOption-btn").show();
		}
		optionId--;

		$("#p"+id).remove();
		var k=3;
		for(var i=1;i<=txtId;i++){
			if( document.getElementById("in"+i) ){
			$("#in"+i).attr('placeholder','選項 '+k)
			k++;
			}
		}

		
		}
	</script>    
</body>
</html>