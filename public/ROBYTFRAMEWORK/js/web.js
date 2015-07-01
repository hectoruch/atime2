$(window).resize(function(){
    if($(window).height()<=530){
		$(".menu-hide a").css('margin-top',"1em");
	}
	if($(window).height()<=480){
		$(".menu-hide a").css('margin-top',"0.5em");
	}
	if($(window).height()<=430){
		$(".menu-hide a").css('margin-top',"0.1em");
	}
	if($(window).height()<=400){
		$(".menu-hide a").css('margin-top',"0.1em");
		$(".menu-hide a").css('font-size',"28px");
	}
	
	
	if($(window).height()>430){
		$(".menu-hide a").css('margin-top',"0.5em");
		$(".menu-hide a").css('font-size',"40px");
	}
	
	if($(window).height()>480){
		$(".menu-hide a").css('margin-top',"1em");
	}
	
	if($(window).height()>530){
		$(".menu-hide a").css('margin-top',"1.5em");
	}

});

$( document ).ready(function() {
   if($(window).height()<=530){
		$(".menu-hide a").css('margin-top',"1em");
	}
	if($(window).height()<=480){
		$(".menu-hide a").css('margin-top',"0.5em");
	}
	if($(window).height()<=430){
		$(".menu-hide a").css('margin-top',"0.1em");
	}
	if($(window).height()<=400){
		$(".menu-hide a").css('margin-top',"0.1em");
		$(".menu-hide a").css('font-size',"28px");
	}
});

$("#o1").click(function(){
	if($("#o1").hasClass('selected')){
		
	}else{
		if($("#o2").hasClass('selected')){
			$("#o2").removeClass('selected');
			$(".all2").css("display","none");
			$(".all1").css("display","block");
		}
		if($("#o3").hasClass('selected')){
			$("#o3").removeClass('selected');
			$(".all3").css("display","none");
			$(".all1").css("display","block");
		}
		if($("#o4").hasClass('selected')){
			$("#o4").removeClass('selected');
			$(".all4").css("display","none");
			$(".all1").css("display","block");
		}
		$("#o1").addClass('selected');	
	}
});

$("#o2").click(function(){
	if($("#o2").hasClass('selected')){
		
	}else{
		if($("#o1").hasClass('selected')){
			$("#o1").removeClass('selected');
			$(".all1").css("display","none");
			$(".all2").css("display","block");
		}
		if($("#o3").hasClass('selected')){
			$("#o3").removeClass('selected');
			$(".all3").css("display","none");
			$(".all2").css("display","block");
		}
		if($("#o4").hasClass('selected')){
			$("#o4").removeClass('selected');
			$(".all4").css("display","none");
			$(".all2").css("display","block");
		}
		$("#o2").addClass('selected');	
	}
});

$("#o3").click(function(){
	if($("#o3").hasClass('selected')){
		
	}else{
		if($("#o1").hasClass('selected')){
			$("#o1").removeClass('selected');
			$(".all1").css("display","none");
			$(".all3").css("display","block");
		}
		if($("#o2").hasClass('selected')){
			$("#o2").removeClass('selected');
			$(".all2").css("display","none");
			$(".all3").css("display","block");
		}
		if($("#o4").hasClass('selected')){
			$("#o4").removeClass('selected');
			$(".all4").css("display","none");
			$(".all3").css("display","block");
		}
		$("#o3").addClass('selected');	
	}
});

$("#o4").click(function(){
	if($("#o4").hasClass('selected')){
		
	}else{
		if($("#o1").hasClass('selected')){
			$("#o1").removeClass('selected');
			$(".all1").css("display","none");
			$(".all4").css("display","block");
		}
		if($("#o2").hasClass('selected')){
			$("#o2").removeClass('selected');
			$(".all2").css("display","none");
			$(".all4").css("display","block");
		}
		if($("#o3").hasClass('selected')){
			$("#o3").removeClass('selected');
			$(".all3").css("display","none");
			$(".all4").css("display","block");
		}
		$("#o4").addClass('selected');	
	}
});

function subir(){
	$('html, body').animate({
		scrollTop: 0
	}, 800);
}

var closeFn;
function closeShowingModal() {
	var showingModal = document.querySelector('.modal.show');
	if (!showingModal) return;
	showingModal.classList.remove('show');
	document.body.classList.remove('disable-mouse');
	if (closeFn) {
		closeFn();
		closeFn = null;
	}
}
document.addEventListener('click', function (e) {
	var target = e.target;
	if (target.dataset.ctaTarget) {
		closeFn = cta(target, document.querySelector(target.dataset.ctaTarget), { relativeToWindow: true }, function showModal(modal) {
			modal.classList.add('show');
			document.body.classList.add('disable-mouse');
		});
	}
	else if (target.classList.contains('modal-close-btn')) {
		closeShowingModal();
	}
});
document.addEventListener('keyup', function (e) {
	if (e.which === 27) {
		closeShowingModal();
	}
})