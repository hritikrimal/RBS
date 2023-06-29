$(document).ready(function () {
	$("#property_button").click(function () {
		$("#propertymodel").modal("show");
		return;
	});
	$("#login_close").click(function () {
		$(".log_in").val("");
	});
	$("#loin_cross").click(function () {
		$(".log_in").val("");
	});

	$("#reg_cross").click(function () {
		$(".register").val("");
	});
	$("#register_close").click(function () {
		$(".register").val("");
	});

	$("#register_btn").click(function () {
		$("#registermodel").modal("show");
		$("#propertymodel").modal("hide");
	});

	$("#register").click(function () {
		var name = $("#Name").val().trim();
		var email = $("#exampleInputEmail1").val().trim();
		var pattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		var number_pattern = /^[9]\d{9}$/;
		var name_pattern = /^[A-Za-z ]+$/;

		// alert(email);
		var contact = $("#exampleInputContact1").val().trim();
		var address = $("#exampleInpuAddress1").val().trim();
		var password = $("#exampleInputPassword1").val();
		var con_password = $("#exampleInputConfirmPassword1").val();
		if (name === "") {
			alert("Name is required !");
			return;
		}
		if (!name_pattern.test(name)) {
			alert("Name must contain only alphabets and spaces!");
			return;
		}
		if (email === "") {
			alert("Email is required !");
			return;
		}
		if (!pattern.test(email)) {
			alert("enter valid email");
			return;
		}
		if (contact === "") {
			alert("Contact is required !");
			return;
		}
		if (!number_pattern.test(contact)) {
			alert("Enter valid Phone Number !");
			return;
		}
		if (address === "") {
			alert("Address is required !");
			return;
		}
		if (!name_pattern.test(address)) {
			alert("Address must contain only alphabets and spaces!");
			return;
		}
		if (password === "") {
			alert("Password is required !");
			return;
		}
		if (con_password === "") {
			alert("Confirm Password is required !");
			return;
		}
		if (password != con_password) {
			alert("Password dosen`t match !");
			return;
		}

		$.ajax({
			url: "home_con/register",
			dataType: "json",
			type: "POST",
			data: {
				name: name,
				email: email,
				contact: contact,
				address: address,
				password: password,
				con_password: con_password,
			},
			success: function (response) {
				if (response.success) {
					$("#registermodel").modal("hide");
					$(".register").val("");
					console.log(response);
				} else {
					console.log(response);
					if (response.errors) {
						// Display validation errors as flash messages
						alert(response.errors);
					}
				}
			},
		});
	});
	// phone number validation only 10 digit entry
	$("#exampleInputContact1").on("input", function () {
		var mobileNumber = $(this).val();

		if (mobileNumber.length > 10) {
			mobileNumber = mobileNumber.slice(0, 10);
			$(this).val(mobileNumber);
		}
	});

	$("#login_btn").click(function () {
		var gmail = $("#Email1").val();
		var password = $("#Password1").val();
		var pattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

		if (gmail === "") {
			alert("Gmail is required !");
			return;
		}
		if (!pattern.test(gmail)) {
			alert("enter valid email");
			return;
		}
		if (password === "") {
			alert("Password is required !");
			return;
		}

		$.ajax({
			url: "home_con/login",
			dataType: "json",
			type: "POST",
			data: {
				gmail: gmail,
				password: password,
			},
			success: function (response) {
				if (response.success) {
					console.log(response);
					$("#propertymodel").modal("hide");
					$(".log_in").val("");
					window.location.href = response.url;
					console.log(response.url);
				} else {
					console.log(response);
					if (response.errors) {
						// Display validation errors as flash messages
						alert(response.errors);
						$(".log_in").val("");
					}
				}
			},
		});
	});
});
