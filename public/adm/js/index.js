$(function () {
    $("#new_admin_ubmit").click(function () {
        var password = $("#password").val();
        var confirmPassword = $("#re_password").val();
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            $('#re_password').val('');
            $('#re_password').focus();
            return false;
        }
        return true;
    });

    $("#change_password").click(function () {
        var password = $("#new_password").val();
        var confirmPassword = $("#re_enter_new_password").val();
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            $('#re_enter_new_password').val('');
            $('#re_enter_new_password').focus();
            return false;
        }
        return true;
    });

    $('#compose_message').click(function(){
    	//var param = $('#frm_comp_message').serialize();
        if($('textarea#message ').val() == ''){
            alert('Please mention the comment !!!');
            $('textarea#message').focus();
            return false;
        }
        var file_name = new FormData($("#frm_comp_message")[0]);
    	$.ajax({
			url: '/admin/composemessage',
			type: 'POST',
			data: file_name,
			async: false,
            processData: false,
            contentType: false,
			error: function(){
				alert("Error Loading Problem");
			},
			success: function(data){
				if(data == 'true'){
                    alert('Your message has been successfully submitted.');
                    location.reload();
                } else {
                    alert('Plase try again !!!');
                }
			},
		});
    });

    $(document).on('click', '#edit_quote', function(){
    	$('#balance_amount, #discount_quote').prop('disabled', false);
    	$('#edit_quote').css('display', 'none');
    	$('#update_quote, #cancel_quote').css('display', 'block');
    });

    $(document).on('click', '#update_quote', function(){
    	if($('textarea#discount_quote ').val() == ''){
    		alert('Please mention the remark below !!!');
    		$('textarea#discount_quote').focus();
    		return false;
    	} else {
    		var param = $('#frm_update_quote').serialize();
	    	$.ajax({
				url: '/admin/updateamoutramark',
				type: 'POST',
				data: param,
				async:false,
				error: function(){
					alert("Error Loading Problem");
				},
				success: function(data){
					if(data == 'success'){
						$('#balance_amount, #discount_quote').prop('disabled', true);
				    	$('#update_quote, #cancel_quote').css('display', 'none');
				    	$('#edit_quote').css('display', 'block');
						alert('You have successfully update the quote.');
						location.reload();
					} else {
						alert('Something wrong. Please try again !!!');
					}
				},
			});
    	}
    	
    });

    $(document).on('click', '#cancel_quote', function(){
    	$('#balance_amount, #discount_quote').prop('disabled', true);
    	$('#update_quote, #cancel_quote').css('display', 'none');
    	$('#edit_quote').css('display', 'block');
    });

    $(document).on('click', '#search_order_id', function(){
        var order_id = $("#payment_order_id").val();
		$("#pay_amount").val('');
		$("#total_amount").val('');
        $.ajax({
            url: '/admin/getassignmentpaymentdetails?order_id='+order_id,
            type: 'GET',
            dataType: 'json',
            async:false,
            error: function(){
                alert("Error Loading Problem");
            },
            success: function(data){
				if(data == null){
					$('#useremail').val('');
					$('#username').val('');
					$('#assignment_subject').val('');
					$('#assignment_page').val('');
					$('#assignment_desc').val('');
					$('#assignment_deadline').val('');
					$('#assignment_time').val('');
				} else {
					$('#useremail').val(data['email']);
					$('#username').val(data['name']);
					$('#assignment_subject').val(data['subject']);
					$('#assignment_page').val(data['no_pages']);
					$('#assignment_desc').val(data['description']);
					$('#assignment_deadline').val(data['deadline_date']);
					$('#assignment_time').val(data['deadline_time']);	
				}
            },
        });
    });
	
	
	$(document).on('change', '#payment_order_type', function(){
		var order_type = $(this).val();
		var param = $('#generate_paymentlink').serialize();
		$('#useremail').val('');
		$('#username').val('');
		$('#assignment_subject').val('');
		$('#assignment_page').val('');
		$('#assignment_desc').val('');
		$('#assignment_deadline').val('');
		$('#assignment_time').val('');
		$("#pay_amount").val('');
		$("#total_amount").val('');
		$("#payment_link").text('');
		
		if(order_type == 'new'){
			$('#submit_payment_link').css('display', 'none');
			$('#registeruser_payment_link').css('display', 'block');
		} else {
			$('#registeruser_payment_link').css('display', 'none');
			$('#submit_payment_link').css('display', 'block');
		}
	});
	
	$(document).on('click', '#registeruser_payment_link', function(){
		var param = $('#generate_paymentlink').serialize();
		//alert(param);
		$.ajax({
			url: '/admin/chatregistration',
			type: 'POST',
			data: param,
			async: false,
			error: function(){
				alert("Error Loading Problem");
			},
			success: function(response){
				if(response == 'false'){
					alert('Plase try again !!!');
				} else {
					$('#payment_link').text(response);
					alert('Your payment link has been successfully submitted. Please check your mail.');
					//location.reload();
				}
			},
		});
	});
	
	
	$(document).on('click', '#submit_payment_link', function(){
		var param = $('#generate_paymentlink').serialize();
		$.ajax({
			url: '/admin/savepayment',
			type: 'POST',
			data: param,
			async: false,
			error: function(){
				alert("Error Loading Problem");
			},
			success: function(data){
				if(data == 'false'){
					alert('Plase try again !!!');
				} else {
					$('#payment_link').text(data);
					alert('Your payment link has been successfully submitted. Please check your mail.');
					//location.reload();
				}
			},
		});
	});
	
	
	$(document).on('click', '#send_payment_request', function(){
		var payment_order_id = $(this).data('orderid');
		var pay_amount = $(this).data('payamount');
		if(pay_amount == 0){
			alert('No Due Amount');
			return false;
		}

		$.ajax({
			url: '/admin/savepayment',
			type: 'GET',
			data: 'payment_order_id=' + payment_order_id + '&pay_amount=' + pay_amount,
			async: false,
			error: function(){
				alert("Error Loading Problem");
			},
			success: function(data){
				if(data == 'false'){
					alert('Plase try again !!!');
				} else {
					$('#show_payment_link').text(data);
					alert('Your payment link has been successfully sent.');
				}
			},
		});
	});
	
	
	$(document).on('click', '#send_invoice_details', function(){
		var payment_order_id = $(this).data('orderid');

		$.ajax({
			url: '/admin/sendinvoice',
			type: 'GET',
			data: 'payment_order_id=' + payment_order_id,
			async: false,
			error: function(){
				alert("Error Loading Problem");
			},
			success: function(data){
				if(data == 'false'){
					alert('Plase try again !!!');
				} else {
					alert('Order invoice details sent to the registered email.');
				}
			},
		});
	});
	
	

});

