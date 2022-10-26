jQuery(document).ready(function(){

	jQuery(".add").click(function(){
		var input1 = jQuery(".input1").val();
		var input2 = jQuery(".input2").val();
		var check ="add";
		all(input1, input2,check);
	});

	jQuery(".sub").click(function(){
		var input1 = jQuery(".input1").val();
		var input2 = jQuery(".input2").val();
		var check ="sub";
		all(input1, input2,check);
	});

	jQuery(".div").click(function(){
		var input1 = jQuery(".input1").val();
		var input2 = jQuery(".input2").val();
		var check ="div";
		all(input1, input2,check);
	});

	jQuery(".mult").click(function(){
		var input1 = jQuery(".input1").val();
		var input2 = jQuery(".input2").val();
		var check ="mul";
		all(input1, input2,check);
	});

});


function all(input1, input2,check){
	$.ajax({
		url:"calculation.php",
		type:"POST",
		data:{
			"val1":input1,
			"val2":input2,
			"check":check
		},
		success:function(res){
			jQuery(".result").val(res);	
		}
	});
}