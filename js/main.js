//main sis
var data = new Date();
var ano_atual = data.getFullYear();
var mes_atual = data.getMonth()+1;


var geocorder, map, kmzLayer;

function initialize() {
	geocoder = new google.maps.Geocoder();
	var latlng = new google.maps.LatLng(-23.6386442,-45.4337782);
	var mapOptions = {
		zoom: 13,
		center: latlng,
			//mapTypeId: google.maps.MapTypeId.ROADMAP,
			//mapTypeControl: false,
			//disableDefaultUI: true,
		}

		map = new google.maps.Map(document.getElementById('map'), mapOptions);

		var ctaLayer = new google.maps.KmlLayer({
			url: 'mapa.kml',
			map: map
		});

		//Resize Function
		// google.maps.event.addDomListener(window, "resize", function() {
		// 	var center = map.getCenter();
		// 	google.maps.event.trigger(map, "resize");
		// 	map.setCenter(center);
		// });

		console.log(ctaLayer);
	}

	$( document ).ready( function() {

		google.maps.event.addDomListener(window, 'load', initialize);

		function buscaEndereco() {
			var address = $('#bairro').val() +','+ $('#endereco').val() + ', Caraguatatuba - SP';
			geocoder.geocode( { 'address': address}, function(results, status) {
				if (status == 'OK') {
					$('#lat').val(results[0].geometry.location.lat());
					$('#lng').val(results[0].geometry.location.lng());
				}
			});
		}

		$('#bairro').on('focusout', function function_name() {
			buscaEndereco();
		})

	});

//ancora

// function scrollNav() {
// 	$('a').click(function(){
//     //Toggle Class
//     $(".active").removeClass("active");
//     $(this).closest('li').addClass("active");
//     var theClass = $(this).attr("class");
//     $('.'+theClass).parent('li').addClass('active');
//     //Animate
//     $('html, body').stop().animate({
//     	scrollTop: $( $(this).attr('href') ).offset().top - 160
//     }, 400);
//     return false;
// });
// 	$('.scrollTop a').scrollTop();
// }
// scrollNav();

//nav

$(document).ready(function(){
	var aChildren = $("nav li").children();
	var aArray = [];
	for (var i=0; i < aChildren.length; i++) {    
		var aChild = aChildren[i];
		var ahref = $(aChild).attr('href');
		aArray.push(ahref);
	}     
	$(window).scroll(function(){
		var windowPos = $(window).scrollTop();
		var windowHeight = $(window).height();
		var docHeight = $(document).height();
		for (var i=0; i < aArray.length; i++) {
			var theID = aArray[i];
			var divPos = $(theID).offset().top; 
			var divHeight = $(theID).height(); 
			if (windowPos >= divPos && windowPos < (divPos + divHeight)) {
				$("a[href='" + theID + "']").addClass("name-active");
			} else {
				$("a[href='" + theID + "']").removeClass("name-active");
			}
		}
		if(windowPos + windowHeight === docHeight) {
			if (!$("nav li:last-child a").hasClass("name-active")) {
				var navActiveCurrent = $(".name-active").attr("href");
				$("a[href='" + navActiveCurrent + "']").removeClass("name-active");
				$("nav li:last-child a").addClass("name-active");
			}
		}
	});
	$("nav a").click(function(evn){
		evn.preventDefault();
		$('html,body').scrollTo(this.hash, this.hash);
	});

	$.scrollTo = $.fn.scrollTo = function(x, y, options){
		if (!(this instanceof $)) return $.fn.scrollTo.apply($('html, body'), arguments);
		options = $.extend({}, {
			gap: {
				x: 0,
				y: 0
			},
			animation: {
				easing: 'swing',
				duration: 600,
				complete: $.noop,
				step: $.noop
			}
		}, options);
		return this.each(function(){
			var elem = $(this);
			elem.stop().animate({
				scrollLeft: !isNaN(Number(x)) ? x : $(y).offset().left + options.gap.x,
				scrollTop: !isNaN(Number(y)) ? y : $(y).offset().top + options.gap.y
			}, options.animation);
		});
	};
});


//VALIDACAO

$(document).ready(function(){

	$('#form_agenda').validate({
		rules: {
			email:{
				email: true
			},
			telefone:{
				telefone: true,
			},
			data_coleta:{
				validaDataBR: true,
			}
		},
		errorPlacement: function(error, element) {
			element.parent().after(error);
		}
	})

	$('#form_contato').validate({
		rules: {
			email:{
				email: true
			},
			mensagem:{
				required: true,
				maxlength: 250
			}
		},
		errorPlacement: function(error, element) {
			element.parent().after(error);
		}
	})


	jQuery.extend(jQuery.validator.messages, {
		required: "Esse campo é obrigatorio",
		email: "Digite um email válido",
		maxlength: "Numero de caracteres excedido",
	})
	$('input').each(function (){
		$(this).rules('add', {
			required: true
		})
	})

	$('#btn_agenda').on('submit',function(event){
		event.preventDefault();
		if ($('#form_agenda').valid() === true) {
			event.submit();
		}
	})

	$('#btn_contato').on('submit',function(event){
		event.preventDefault();
		if ($('#form_contato').valid() === true) {
			event.submit();
		}
	})

})

// MASK
$('#telefone').mask('(00) 0000-00000');
$('#peso').mask('00.00');
$('#cep').mask('00000-000');
$('#data').mask('00/00/0000');

//url
$(document).ready(function () {
	if (document.location.href.indexOf('sucess') > -1 ) {
		BootstrapDialog.show({
			title: 'Mensagem',
			message: 'Coleta Agendada!',
			buttons: [{
				label: 'Fechar',
				action: function(dialogItself){
					dialogItself.close();
				}
			}]
		});
		window.history.pushState('base_url', "Title", '/coletaseletiva');
	}

	if (document.location.href.indexOf('mail_ok') > -1 ) {
		BootstrapDialog.show({
			title: 'Mensagem',
			message: 'Mensagem enviada com sucesso!',
			buttons: [{
				label: 'Fechar',
				action: function(dialogItself){
					dialogItself.close();
				}
			}]
		});
		window.history.pushState('base_url', "Title", '/coletaseletiva');
	}
})

//conato change

$('#select_contato').on('change', function(){
	if ($(this).val() == '2') {
		$("#form_contato").removeAttr('hidden');
		$("#form_agenda").attr('hidden', 'true');
	}else if($(this).val() == '1'){
		$("#form_agenda").removeAttr('hidden');
		$("#form_contato").attr('hidden', 'true');
	}else{
		$("#form_agenda").attr('hidden', 'true');
		$("#form_contato").attr('hidden', 'true');
	}
})