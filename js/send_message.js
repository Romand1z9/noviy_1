			$(document).ready(function () {
	 			$('#send').click(function(event) {
					event.preventDefault();
					//var x = 'just string'; 
					var x = 777;
					var name = $('input[name=name]').val();
					var email = $('input[name=email]').val();
					var phone = $('input[name=phone]').val();
					var pattern_email = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,6}\.)?[a-z]{2,6}$/i;
					var pattern_phone = /^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/;
					var result;
					$('#result_message').css({'color':'red'});
					if (name.length < 3) {
						result = 'Длина имени должна быть не меньше трёх символов. И без пробелов!';
						$('input[name=name]').css({'background-color':'#FFE4C4'});
					}
					else if (!pattern_email.test(email)) {
						result = 'Вы ввели некорректный email';
						$('input[name=email]').css({'background-color':'#FFE4C4'});
					}
					else if (!pattern_phone.test(phone)) {
						result = 'Вы ввели некоректный номер телефона';
						$('input[name=phone]').css({'background-color':'#FFE4C4'});
					}
					else {
						var dir = "/crm/configs/import/lead.php";
						$.ajax({
			              type: "POST",
			              url: dir,
			              data: {name: name, phone: phone, email: email},
			              success: function(data){
			                //console.log(data);
			               	$('input[name=name]').val('').css({'background-color':'#ffffff'});
			                $('input[name=phone]').val('').css({'background-color':'#ffffff'});
			                $('input[name=email]').val('').css({'background-color':'#ffffff'});
			              }
			            });
						result = 'Сообщение отправлено!';
						$('#result_message').css({'color':'green'});
						/*$.ajax({
							type: "POST",
							url: "js/simg.php",
							success: function () {
								alert('OK');
							}
						});*/
					}
					$('#result_message').html(result);
				});
			});