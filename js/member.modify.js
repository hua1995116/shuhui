$(function(){
	//更换头像
	$("#groupface").click(function(){
		if($(".choose_face").css("display") == "none"){
			$(".choose_face").slideDown();
		}
	})
	var li = $(".choose_face ul li");
	li.click(function(){
		var index = li.index(this);
		var src = li.eq(index).find("img").attr("src");
		$("#groupface").attr("src",src);
		$(".groupface").val(src);
		$(".choose_face").slideUp();
	})
})