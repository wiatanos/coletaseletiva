//main sis
var data = new Date();
var ano_atual = data.getFullYear();
var mes_atual = data.getMonth()+1;


var geocorder, map, kmzLayer, geoXml;

function initialize() {
	geocoder = new google.maps.Geocoder();
	var latlng = new google.maps.LatLng(-23.6386442,-45.4337782);
	var mapOptions = {
		zoom: 13,
		center: latlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	}

	map = new google.maps.Map(document.getElementById('map'), mapOptions);

	// var ctaLayer = new google.maps.KmlLayer({
	// 	url: 'https://www.dropbox.com/s/5h6x7zypgtb8v6l/coleta.kml?dl=1',
	// 	map: map
	// });

	// console.log(ctaLayer);
	var kml = 'js/coleta.kml';
	var infowindow = new google.maps.InfoWindow({});

	var myParser = new geoXML3.parser({
		map: map,
        singleInfoWindow: true,
	});
	myParser.parse(kml);


	// Create the search box and link it to the UI element.
	var input = document.getElementById('pac-input');
	var searchBox = new google.maps.places.SearchBox(input);
	map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

  // Bias the SearchBox results towards current map's viewport.
	map.addListener('bounds_changed', function() {
	 searchBox.setBounds(map.getBounds());
	});

  	var markers = [];
  // Listen for the event fired when the user selects a prediction and retrieve
  // more details for that place.
  	searchBox.addListener('places_changed', function() {
  		var places = searchBox.getPlaces();

  		if (places.length === 0) {
  			return;
  		}

    // Clear out the old markers.
	    markers.forEach(function(marker) {
	    	marker.setMap(null);
	    });
	    markers = [];

	    // For each place, get the icon, name and location.
	    var bounds = new google.maps.LatLngBounds();
	    places.forEach(function(place) {
	    	if (!place.geometry) {
	    		console.log("Returned place contains no geometry");
	    		return;
	    	}
	    	var icon = {
	    		url: place.icon,
	    		size: new google.maps.Size(71, 71),
	    		origin: new google.maps.Point(0, 0),
	    		anchor: new google.maps.Point(17, 34),
	    		scaledSize: new google.maps.Size(25, 25)
	    	};

	      // Create a marker for each place.
	      markers.push(new google.maps.Marker({
	      	map: map,
	      	icon: icon,
	      	title: place.name,
	      	position: place.geometry.location
	      }));

	      if (place.geometry.viewport) {
		       // Only geocodes have viewport.
		       bounds.union(place.geometry.viewport);
		   } else {
		    bounds.extend(place.geometry.location);
		   }
		});
    	map.fitBounds(bounds);
	});
}




$( document ).ready( function() {

	google.maps.event.addDomListener(window, 'load', initialize);

	function buscaEndereco() {
		var address = $('#bairro').val() +','+ $('#endereco').val() + ', Caraguatatuba - SP';
		geocoder.geocode( { 'address': address}, function(results, status) {
			if (status === 'OK') {
				$('#lat').val(results[0].geometry.location.lat());
				$('#lng').val(results[0].geometry.location.lng());
			}
		});
	}

	$('#bairro').on('focusout', function function_name() {
		buscaEndereco();
	})

});


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
	if ($(this).val() === '2') {
		$("#form_contato").removeAttr('hidden');
		$("#form_agenda").attr('hidden', 'true');
	}else if($(this).val() === '1'){
		$("#form_agenda").removeAttr('hidden');
		$("#form_contato").attr('hidden', 'true');
	}else{
		$("#form_agenda").attr('hidden', 'true');
		$("#form_contato").attr('hidden', 'true');
	}
})