$(document).ready(function(){
	var $modTitle = $('.mod-servicos .title'),
	$modList = $('.mod-servicos .list');
	$modList.on('mouseover', function(event) {
		event.preventDefault();
		var $data = $(this).data('list');
		$modTitle.removeClass('active');
		$modTitle.each(function(index, el) {
			if ($(this).data('title') == $data) {
				$(this).addClass('active');
			}
		});
	});
	var $modServicos = $('.mod-servicos'),
	$modServicosActive = $('.mod-servicos.active'),
	$closeModServicos = $('#closeModServicos'),
	$abrirModServicos = $('#abrirOquefazemos');
	$abrirModServicos.on('click', toggleModServicos);
	$modServicos.on('mouseleave', function(event){
		if ($(this).hasClass('active')) {
			$modServicos.toggleClass('active');
		}
	});
	$closeModServicos.on('click', toggleModServicos);
	function toggleModServicos(event) {
		event.preventDefault();
		$modServicos.toggleClass('active');
	}
});