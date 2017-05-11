<html>
	<head>
		<title>AJAX</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<script src="./jquery/jquery-3.2.1.min.js"></script>
		<script>
		$(document).ready(function () {
			$("#LED_SW").click(function () {
				var SW = $("input[name='SW']:checked").val();
				$.ajax({
					url: "http://192.168.0.103/sw",
					method: 'POST',
					data: { led: SW },
					dataType: "json",
					success: function (data, status) {
						alert("数据：" + data.data + "\n状态：" + status);
					}
				});
			});
		});
		</script>		
		
	</head>
	<body>
		<div id="LED_SW">
			<input type="radio" id="LED_ON" class="SW" value="on" name="SW">
				<label for="LED_ON">開</label>
			<input type="radio" id="LED_OFF" class="SW" value="off" name="SW" checked="checked">
				<label for="LED_OFF">關</label>				
		</div>
	</body>
</html>
