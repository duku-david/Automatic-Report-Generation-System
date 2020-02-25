
// getTeacherAtrendenceAll();
function getTeacherAtrendenceAll()
{
	$("#teacher").on("change",function(){
	   var initials = $("#teacher").val();
		$.ajax({
			url:"myTeacherAttendenceAll.php",
			type:"POST",
			data:{present:1,initials:initials},
			success:function(d)
			{
				$("#attendanceDisplay").html(d);
			}
		});	
	});
	
}

function getTeacherAtrendenceAbsentAll()
{
	$("#teacherAbsent").on("change",function(){
	   var initials = $("#teacherAbsent").val();
		$.ajax({
			url:"myTeacherAttendenceAll.php",
			type:"POST",
			data:{absent:1,initials:initials},
			success:function(d)
			{
				$("#AbsentDisplay").html(d);
			}
		});	
	});
	
}