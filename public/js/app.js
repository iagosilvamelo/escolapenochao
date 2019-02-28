//
// Efeito Scroll
// 
var $target = $('.scroll-anime'),
	animationClass = 'scroll-anime-start',
	offset = $(window).height() * 3/4;

function animeScroll(){
	var documentTop = $(document).scrollTop();

	$target.each(function(){
		var itemTop = $(this).offset().top;

		if (documentTop > itemTop - offset){
			$(this).addClass(animationClass);
		} else {
			$(this).removeClass(animationClass);
		}
	});
}

animeScroll();

$(document).scroll(function(){
	animeScroll();
});



//
// Efeito Maquina de Escrever
// 
function typeWriter(elemento) {
	const textoArray = elemento.innerHTML.split('');
	elemento.innerHTML = '';
	textoArray.forEach((letra, i) =>{
		setTimeout(function(){
			elemento.innerHTML += letra;
		}, 75 * i)
	})
}

const digit = document.querySelector('.digitar');
typeWriter(digit);