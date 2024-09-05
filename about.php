<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>


	


	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-01.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			Acerca de
		</h2>
	</section>	


	<!-- Content page -->
	<section class="bg0 p-t-75 p-b-120">
		<div class="container">
			<div class="row p-b-148">
				<div class="col-md-7 col-lg-8">
					<div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
						<h3 class="mtext-111 cl2 p-b-16">
							Sobre nosotros
						</h3>

						<p class="stext-113 cl6 p-b-26">
						En Polandinos, nos apasiona ofrecer poleras que no solo reflejan las últimas tendencias de moda, sino que también representan calidad y sostenibilidad. Desde nuestros humildes comienzos, hemos crecido hasta convertirnos en una marca reconocida por nuestro compromiso con la excelencia y la satisfacción del cliente. Cada polera que diseñamos es una combinación de creatividad, confort y durabilidad, elaborada con los mejores materiales ecológicos disponibles. Nos enorgullecemos de trabajar con diseñadores talentosos y artesanos dedicados que comparten nuestra visión de moda ética y responsable. En [Nombre de la Tienda], no solo vendemos ropa; creamos experiencias y conexiones con nuestros clientes, ofreciendo productos que no solo se ven bien, sino que también te hacen sentir bien. Únete a nuestra comunidad y descubre la diferencia que hace una polera diseñada con pasión y propósito.
						</p>

						<p class="stext-113 cl6 p-b-26">
						cada polera cuenta una historia de pasión, creatividad y dedicación. Lo que comenzó como un pequeño emprendimiento impulsado por el amor a la moda y el diseño, se ha transformado en una marca que celebra la individualidad y la sostenibilidad. Nos enorgullece ofrecer productos que no solo son estilísticamente únicos, sino también éticamente producidos. Colaboramos estrechamente con proveedores y artesanos locales, garantizando que cada etapa de producción respete tanto a las personas como al planeta. Nuestro objetivo es inspirar a nuestros clientes a expresarse a través de la moda, brindándoles prendas que son tan cómodas como elegantes.
						</p>

					</div>
				</div>

				<div class="col-11 col-md-5 col-lg-4 m-lr-auto">
					<div class="how-bor1 ">
						<div class="hov-img0">
							<img src="images/hom6.jpg" alt="IMG">
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="order-md-2 col-md-7 col-lg-8 p-b-30">
					<div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
						<h3 class="mtext-111 cl2 p-b-16">
							Nuestra misión
						</h3>

						<p class="stext-113 cl6 p-b-26">
						nuestra misión es redefinir la moda cotidiana con poleras que combinan estilo, calidad y sostenibilidad. Nos esforzamos por crear prendas que no solo se adapten a las últimas tendencias, sino que también ofrezcan comodidad y durabilidad para el uso diario. Estamos comprometidos con prácticas éticas y responsables en toda nuestra cadena de producción, desde la selección de materiales ecológicos hasta la colaboración con artesanos y proveedores que comparten nuestros valores. Nuestro objetivo es empoderar a nuestros clientes a través de la moda, ofreciéndoles productos que les permitan expresar su individualidad de manera consciente y responsable. creemos que cada polera debe contar una historia, y trabajamos incansablemente para asegurarnos de que esa historia sea positiva para nuestros clientes y para el mundo.
						</p>

						<div class="bor16 p-l-29 p-b-9 m-t-22">
							<p class="stext-114 cl6 p-r-40 p-b-11">
							En un mundo en constante cambio, cada elección que hacemos tiene un impacto. Desde lo que vestimos hasta cómo interactuamos con los demás, nuestras decisiones definen no solo nuestra propia historia, sino también el mundo que compartimos. A medida que avanzamos, recordemos la importancia de elegir con conciencia y responsabilidad, buscando siempre contribuir positivamente a nuestra comunidad y al medio ambiente. Juntos, podemos construir un futuro más brillante y sostenible para todos.							</p>

							<span class="stext-111 cl8">
								- Polandinos
							</span>
						</div>
					</div>
				</div>

				<div class="order-md-1 col-11 col-md-5 col-lg-4 m-lr-auto p-b-30">
					<div class="how-bor2">
						<div class="hov-img0">
							<img src="images/recuerda.jpg" alt="IMG">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	
	
		

	<!-- Footer -->
<?php
    incluirTemplate('footer');
?>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	
</body>
</html>