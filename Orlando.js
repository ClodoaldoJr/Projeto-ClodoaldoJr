		$(document).ready(function(){

			$("#logotipo").on("mouseover",function(){

			$("header #logotipo").toggleClass("efeito")


			}).on("mouseout", function(){

				$("header #logotipo").toggleClass("efeito")

			});

		});

		$(".News-slider").slick({
			infinite: true,
			slidesToShow: 3,
			slidesRoScroll: 1,
			centerMode: true,
			prevArrow: $("#arrow-prev"),
			nextArrow: $("#arrow-next"),

		});