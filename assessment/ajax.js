jQuery(document).ready(function(){

	show();
	function show(){
		$.ajax({
			url:"function.php",
			type:"POST",
			data:{
				'action':"show"
			},
			success:function(res){
				jQuery(".data").html(res);
			}
		});	
	}

	jQuery(document).on("click",".add",function(){
		//alert("ok");
		var name = jQuery(".name").val();
		var phone = jQuery(".phone").val();
		var address = jQuery(".address").val();
		var edu = jQuery(".edu").val();
		var skill = jQuery(".skill").val();
		var action = "insert";
		$.ajax({
			url:"function.php",
			type:"POST",
			data:{
				'name': name,
				'phone': phone,
				'address': address,
				'edu': edu,
				'skill': skill,
				'action': action
			},
			success:function(res){
				alert(res);
				show();
				
			}
		});
	})


	jQuery(document).on("change","select",function(){
		var id = $(this).attr("id");
		var col = $(this).attr("class");
		var uval = jQuery(this).val();
		$.ajax({
			url:"function.php",
			type:"POST",
			data:{
				'id':id,
				'col':col,
				'uval':uval,
				'action':"update"
			},
			success:function(res){
				if(res=="Updated")
				alert(res);
				show();
			}
		});	
	})
	
});