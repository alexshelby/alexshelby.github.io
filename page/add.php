<script src="./jquery-3.2.1.min.js"></script>
<script type="text/javascript">
	$(document).ready (function () {
		$("#sub").click (function() {
			var name = $("#name").val();var foto = $("#foto").val();
			var fail = '';
			if (name.length<2) {fail = "<div style='color:red;'>Слишком короткое название</div>"}
			else if(foto.length < 1) { fail= "<div style='color:red;'>Вы не добавили фотографию</div>"}
			if (fail != '') {
				$('#fail').html (fail + '<div></div>');
				$('#fail').show ();
				return false;
			}
			$.ajax ({
				url: '../addform.php',
				type: 'POST',
				cache: false,
				data: { 'name': name, 'foto': foto},
				dataType: 'html',
				success: function(data){
					if (data == "<div style='color:green;'>Сообщение отправлено</div>") {
						$('#fail').html (data);
						$('#fail').show ();
					};
				}
			});
		});
	});
</script>
<center>
		<div class="file-upload">
		     <label>
		          <input type="file" id='foto' name="foto">
		          <img src="./image/foto.png">
		     </label>
		</div><br>
		<input type="text" id='name' placeholder='Введите название' name="name" style='border-radius: 10px;padding: 5px;'><br>
		<br>
<div id='fail'></div><br>
		<input type='button' id='sub' name='submit' value='Добавить фото'>
</center>