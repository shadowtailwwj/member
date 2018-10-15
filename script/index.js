$(document).ready(function(){
	window.setTimeout(function(){
		$(".loading").fadeOut(500)
	},400)
	
  $(".yijicdan").click(function(){
    $(this).siblings(".erjicdn").toggle(200)
  })
})