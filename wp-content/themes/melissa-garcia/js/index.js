var Home;
var vista;
var cancionTitulo;
var cancionUrl;
var videoUrl;
var imagenSrc;

$(document).ready(function(){

	var vistaHome;

	vistaHome = function() {

		var me = this;

		me.Funciones = {

			InicializarEventos: function(){
				$('body').on('click', '.enlace_menu', me.Eventos.mostrarVistas);
				$('body').on('click', '.titulo_cancion', me.Eventos.cargarCancionYLyric);
				$('body').on('click', '.titulo_seccion_galeria', me.Eventos.cargarGaleriaSeleccionada);
				$('body').on('click', '.thumbnail_img', me.Eventos.cargarImagenSegunThumbnail);
				$('body').on('click', '.enlace_video_youtube', me.Eventos.reproducirVideo);
				$('body').on('click', '.icono_cerrar_popup', me.Eventos.cerrarPopupVideo);
			}

		};

		me.Eventos = {

			mostrarVistas : function(e){
				e.preventDefault();
				vista = $(this).attr('href');

				if(vista == '#Inicio'){
					$('.vista_web').fadeOut();
					console.log("Es la vista de Inicio");
				} else {
					$('.vista_web').fadeOut();
					$('.vista_web').find('.main_wrapper').removeClass('mostrar_main_wrapper');
					setTimeout(function(){
						$(vista).fadeIn();
						$(vista).find('.main_wrapper').addClass('mostrar_main_wrapper');
					}, 500);
				}
			},

			reproducirVideo : function(e){
				e.preventDefault();
				videoUrl = $(this).attr('href');

				$('.widget_soundcloud iframe').attr('src','');
				$('.video_youtube iframe').attr('src',videoUrl);
				$('.fondo_popup_video_youtube').fadeIn(300);
				setTimeout(function(){
					$('.video_youtube').fadeIn();
					$('.video_youtube').addClass('mostrar_video_youtube');
				}, 400);
			},

			cerrarPopupVideo : function(){
				$('.video_youtube').removeClass('mostrar_video_youtube');
				setTimeout(function(){
					$('.video_youtube').fadeOut();
					$('.video_youtube iframe').attr('src','');
					$('.titulo_cancion').removeClass('titulo_cancion_activo');
					$('.titulo_cancion').first().addClass('titulo_cancion_activo');
					$('.fondo_popup_video_youtube').fadeOut();
					$('.widget_soundcloud iframe').attr('src','https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/319945682&amp;color=%23ff5500&amp;auto_play=true&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true');
				}, 400);
			},

			cargarCancionYLyric : function(e){
				e.preventDefault();
				cancionUrl = $(this).attr("href");
				cancionTitulo = $(this).attr("title");

				$('.lyrics_canciones > div').hide();
				$('[data-letra-cancion="'+cancionTitulo+'"]').fadeIn(600);
				$('.titulo_cancion').removeClass('titulo_cancion_activo');
				$(this).addClass('titulo_cancion_activo');
				$('.reproductor_soundcloud').fadeOut(300);
				setTimeout(function(){
					$('.reproductor_soundcloud').attr('src',cancionUrl);
					$('.reproductor_soundcloud').fadeIn(700); 
				}, 300);
			},

			cargarGaleriaSeleccionada : function(e) {
				e.preventDefault();
				$('.titulo_seccion_galeria').removeClass('seccion_galeria_activa');
				$(this).addClass('seccion_galeria_activa');
			},

			cargarImagenSegunThumbnail : function(e){
				e.preventDefault();
				imagenSrc = $(this).find('img').attr("src");

				$('.thumbnail_img').removeClass('imagen_activa');
				$(this).addClass('imagen_activa');
				$('.full_img').find('img').fadeOut(200);
				setTimeout(function(){
					$('.full_img').find('img').attr('src',imagenSrc);
					$('.full_img').find('img').fadeIn(200);
				}, 300);
			}

		};

		me.Inicializar = function(){
			me.Funciones.InicializarEventos();
		}

	}

	Home = new vistaHome();
	Home.Inicializar();

});