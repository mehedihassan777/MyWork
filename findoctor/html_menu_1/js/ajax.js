$(document).ready(function() {
	$('#calendar').datepicker({
		todayHighlight: true,
		daysOfWeekDisabled: [0],
		weekStart: 1,
		format: "yyyy-mm-dd",
		datesDisabled: ["2017/10/20", "2017/11/21","2017/12/21", "2018/01/21","2018/02/21","2018/03/21"],
	});
	$('#calendar').on('changeDate', function(e) {
		var date = e.format();
		//console.log(date);
	    $('#my_hidden_input').val(date);
	});
});