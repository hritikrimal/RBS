$(document).ready(function () {
	// var swiper = new Swiper(".mySwiper", {
	// 	spaceBetween: 30,
	// 	effect: "fade",
	// 	loop: true,
	// 	autoplay: {
	// 		delay: 3600,
	// 		disableOnInteraction: false,
	// 	},

	// 	// remove this if page and nav removed
	// });
	// show property model
	$("#property_button").click(function () {
		$("#propertymodel").modal("show");
		return;
	});

	$("#register_btn").click(function () {
		$("#registermodel").modal("show");
		$("#propertymodel").modal("hide");
	});

	$("#register").click(function () {
		var name = $("#Name").val();
		var email = $("#exampleInputEmail1").val();
		// alert(email);
		var contact = $("#exampleInputContact1").val();
		var address = $("#exampleInpuAddress1").val();
		var password = $("#exampleInputPassword1").val();
		var con_password = $("#exampleInputConfirmPassword1").val();
		if (name === "") {
			alert("Name is required !");
			return;
		}
		if (email === "") {
			alert("Email is required !");
			return;
		}
		if (contact === "") {
			alert("Contact is required !");
			return;
		}
		if (address === "") {
			alert("Address is required !");
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

					// $(".register").each(function () {
					// 	$(this).val(" ");
					// });

					// fetch();
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

	$("#login_btn").click(function () {
		var gmail = $("#Email1").val();
		var password = $("#Password1").val();
		if (gmail === "") {
			alert("Gmail is required !");
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
					}
				}
			},
		});
	});
	// 	// to fetch data
	// 	function fetch() {
	// 		$.ajax({
	// 			url: "Home_con/fetch_data",
	// 			dataType: "Json",
	// 			type: "post",
	// 			data: {},
	// 			success: function (response) {
	// 				if (response.success) {
	// 					// console.log(response);
	// 					var tbody = "";
	// 					var i = 1;
	// 					for (var key in response.data) {
	// 						tbody += "<tr>";
	// 						tbody += "<td>" + i++ + "</td>";
	// 						tbody += "<td>" + response.data[key]["name"] + "</td>";
	// 						tbody += "<td>" + response.data[key]["email"] + "</td>";
	// 						tbody += `<td>
	//  							<div class="d-flex">
	//  								<a href="#" id="edit_btn" class="btn btn-primary btn-sm m-1 view" value="${response.data[key]["id"]}">Edit</a>
	//  								<a href="#" id="dlt_btn" class="btn btn-danger btn-sm m-1 reg_bill" value="${response.data[key]["id"]}">Delete</a>
	//  							</div>
	//  						</td>`;
	// 						tbody += "</tr>";
	// 					}
	// 					$("#info_tbody").html(tbody);
	// 				} else {
	// 					alert(response.error);
	// 				}
	// 			},
	// 		});
	// 	}
	// 	fetch();

	// 	// edit
	// 	$(document).on("click", "#edit_btn", function () {
	// 		var id = $(this).attr("value");
	// 		// alert(id);
	// 		$.ajax({
	// 			url: "Home_con/edit_data",
	// 			dataType: "json",
	// 			type: "post",
	// 			data: {
	// 				id: id,
	// 			},
	// 			success: function (response) {
	// 				// console.log(response);
	// 				$("#edit_username").val(response.data.name);
	// 				$("#edit_email").val(response.data.email);
	// 				$("#edit_model").modal("show");
	// 			},
	// 		});
	// 		$(document)
	// 			.off("click", "#update")
	// 			.on("click", "#update", function () {
	// 				var edit_name = $("#edit_username").val();
	// 				var edit_email = $("#edit_email").val();
	// 				// alert(edit_name);
	// 				// alert(edit_email);
	// 				$.ajax({
	// 					url: "Home_con/update_data",
	// 					dataType: "json",
	// 					type: "post",
	// 					data: {
	// 						id: id,
	// 						edit_name: edit_name,
	// 						edit_email: edit_email,
	// 					},
	// 					success: function (response) {
	// 						console.log("hi");

	// 						$("#edit_model").modal("hide");
	// 						$("#edit_form")[0].reset();
	// 						fetch();
	// 					},
	// 				});
	// 			});
	// 	});
	// 	$(document).on("click", "#dlt_btn", function () {
	// 		var id = $(this).attr("value");
	// 		// alert(id);
	// 		$.ajax({
	// 			url: "home_con/delete_data",
	// 			dataType: "json",
	// 			type: "post",
	// 			data: {
	// 				id: id,
	// 			},
	// 			success: function (response) {
	// 				// console.log(response);
	// 				fetch();
	// 			},
	// 		});
	// 	});

	function displayFlashMessage(message, duration) {
		var flashMessage = $(
			'<div class="toast w-100" role="alert" aria-live="assertive" aria-atomic="true">' +
				'<div class="toast-body">' +
				message +
				"</div>" +
				"</div>"
		);

		$("#flash-messages").append(flashMessage);

		var toast = new bootstrap.Toast(flashMessage[0]);
		toast.show();

		setTimeout(function () {
			flashMessage.toast("dispose");
		}, duration);
	}
});
