$(function () {
	function location(url) {
		window.location.href = '/' + url;
	}

	function loginForm(url, name, data) {
		let str = '';
		$.each(data.split('.'), function (k, v) {
			str += '&' + v + '=' + $('#' + v).val();
		});
		$.ajax({
			type: "POST",
			url: "/" + url,
			data: name + '_f=1' + str,
			cache: false,
			success: function (msg) {
				console.log(msg);
				let response = JSON.parse(msg);
				if (response['go']) {
					location(response['go']);
				} else {
					alert(response['message'])
				}
			}
		});
	}

	$('#login_button').click(function (e) {
		e.preventDefault();
		loginForm('gform', 'login', 'login_name.login_pass.login_capcha');
	});

	$('#rec_button').click(function (e) {
		e.preventDefault();
		loginForm('gform', 'recovery', 'rec_name.rec_capcha');
	});

	$('#reg_button').click(function (e) {
		e.preventDefault();
		loginForm('gform', 'register', 'reg_name.reg_pass.reg_capcha');
	});

	$('#conf_button').click(function (e) {
		e.preventDefault();
		loginForm('gform', 'confirm', 'conf_name.conf_pass.conf_capcha');
	});

});