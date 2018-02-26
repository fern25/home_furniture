$(document).ready(function(){
	
	$("#s1").click(function(){
		$("#append").html();
		$("#append").html("You click 1");
	});

	$("#s2").click(function){
		$("#append").html();
		$("#append").html("You click 2");
	});
	
	$("#s3").click(function){
		$("#append").html();
		$("#append").html("You click 3");
	});
	
	$("#s4").click(function){
		$("#append").html();
		$("#append").html("You click 4");
	});

	$("#s5").click(function){
		$("#append").html();
		$("#append").html("You click 5");
	});


	//hover style function
	$("#s1").mouseenter(function(){
			$(this).attr("src","pictures/ystar.png");
		});
		$("#s2").mouseenter(function(){
			$(this).attr("src","pictures/ystar.png");
			$("#s1").attr("src","pictures/ystar.png");
		});
		$("#s3").mouseenter(function(){
			$(this).attr("src","pictures/ystar.png");
			$("#s2").attr("src","pictures/ystar.png");
			$("#s1").attr("src","pictures/ystar.png");
		});
		$("#s4").mouseenter(function(){
			$(this).attr("src","pictures/ystar.png");
			$("#s3").attr("src","pictures/ystar.png");
			$("#s2").attr("src","pictures/ystar.png");
			$("#s1").attr("src","pictures/ystar.png");
		});
		$("#s5").mouseenter(function(){
			$(this).attr("src","pictures/ystar.png");
			$("#s4").attr("src","pictures/ystar.png");
			$("#s3").attr("src","pictures/ystar.png");
			$("#s2").attr("src","pictures/ystar.png");
			$("#s1").attr("src","pictures/ystar.png");
		});

});