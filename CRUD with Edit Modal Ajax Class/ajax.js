jQuery(document).ready(function(){

	show();
	function show(){
		$.ajax({
			url:"functions.php",
			type:"POST",
			data:{
				'action':"show"
			},
			success:function(res){
				jQuery(".tData").html(res);
			}
		});	
	}

	jQuery(document).on("click",".addStudent",function(){
		var studentName = jQuery(".studentName").val()
		var fName = jQuery(".fName").val()
		var mName = jQuery(".studentName").val()
		var email = jQuery(".email").val()
		var status = jQuery(".status").val()
		var action = "insert"
		$.ajax({
			url:"functions.php",
			type:"POST",
			data:{
				'studentName': studentName,
				'fName': fName,
				'mName': mName,
				'email': email,
				'status': status,
				'action': action
			},
			success:function(res){
				show();
				jQuery(".mgs").html(res);
				jQuery(".mgs").fadeOut(3000);
				jQuery(".studentName").val("")
				jQuery(".fName").val("")
				jQuery(".studentName").val("")
				jQuery(".email").val("")
				jQuery(".status").val("")
			}
		});
	})

	jQuery(document).on("click","#addStudent",function(){
		var studentName = jQuery("#studentName").val()
		var fName = jQuery("#fName").val()
		var mName = jQuery("#studentName").val()
		var email = jQuery("#email").val()
		var status = jQuery("#status").val()
		var action = "insert"
		$.ajax({
			url:"functions.php",
			type:"POST",
			data:{
				'studentName': studentName,
				'fName': fName,
				'mName': mName,
				'email': email,
				'status': status,
				'action': action
			},
			success:function(res){
				show();
				jQuery("#add").modal("hide");
				jQuery(".mgs").html(res);
				jQuery(".mgs").fadeOut(3000);
				
			}
		});
	})

	jQuery(document).on("click",".active",function(){
		var id = jQuery(this).val();
		$.ajax({
			url:"functions.php",
			type:"POST",
			data:{
				'action':"inactive",
				'student_id': id
			},
			success:function(res){
				show();
			}
		});
	})

	jQuery(document).on("click",".del",function(){
		var id = jQuery(this).val();
		jQuery(".mdel").val(id);
	})

	jQuery(document).on("click",".mdel",function(){
		var id = jQuery(this).val();
		$.ajax({
			url:"functions.php",
			type:"POST",
			data:{
				'action':"delete",
				'student_id': id
			},
			success:function(res){
				show();
				jQuery("#del").modal("hide");
				jQuery(".mgs").html(res);
				jQuery(".mgs").fadeOut(3000);
			}
		});
	})

	jQuery(document).on("click",".inactive",function(){
		var id = jQuery(this).val();
		$.ajax({
			url:"functions.php",
			type:"POST",
			data:{
				'action':"active",
				'student_id': id
			},
			success:function(res){
				show();
			}
		});
	})

	jQuery(document).on("click",".edt",function(){
		var id = jQuery(this).val();
		jQuery(".medt").val(id);
		$.ajax({
			url:"functions.php",
			type:"POST",
			dataType:"JSON",
			data:{
				'action':"find",
				'student_id':id
			},
			success:function(res){
				jQuery(".ustudentName").val(res.studentName)
				jQuery(".ufName").val(res.fName)
				jQuery(".umName").val(res.mName)
				jQuery(".uemail").val(res.email)
				jQuery(".ustatus").val(res.status)
			}
		});
	})

	jQuery(document).on("click",".medt",function(){
		var id = jQuery(this).val()
		var studentName = jQuery(".ustudentName").val()
		var fName = jQuery(".ufName").val()
		var mName = jQuery(".ustudentName").val()
		var email = jQuery(".uemail").val()
		var status = jQuery(".ustatus").val()
		var action = "update"
		$.ajax({
			url:"functions.php",
			type:"POST",
			data:{
				'student_id': id,
				'studentName': studentName,
				'fName': fName,
				'mName': mName,
				'email': email,
				'status': status,
				'action': action
			},
			success:function(res){
				show();
				jQuery("#edt").modal("hide");
				jQuery(".mgs").html(res);
				jQuery(".mgs").fadeOut(3000);
			}
		});
	})

});