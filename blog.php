<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>


	

	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/blog.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			Blog
		</h2>
	</section>	


	<!-- Content page -->
	<section class="bg0 p-t-62 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9 p-b-80">
					<div class="p-r-45 p-r-0-lg">
						<!-- item blog -->
						<div class="p-b-63">
							<a href="blog-detail.php" class="hov-img0 how-pos5-parent">
								<img src="images/pa1.jpg" alt="IMG-BLOG">

								
							</a>

							<div class="p-t-32">
								<h4 class="p-b-15">
									<a href="blog-detail.php" class="ltext-108 cl2 hov-cl1 trans-04">
										maneras inspiradoras de llevar poleras en verano
									</a>
								</h4>

								<p class="stext-117 cl6">
								Las poleras se convierten en una prenda imprescindible durante el verano, combinando estilo y comodidad de manera perfecta. Confeccionadas en tejidos ligeros y transpirables, como el algodón y las mezclas de algodón, permiten mantener una sensación de frescura incluso en los días más calurosos.
								</p>
							</div>
						</div>

						<!-- item blog -->
						<div class="p-b-63">
							<a href="blog-detail.php" class="hov-img0 how-pos5-parent">
								<img src="images/pa2.jpg" alt="IMG-BLOG">

								
							</a>

							<div class="p-t-32">
								<h4 class="p-b-15">
									<a href="blog-detail.php" class="ltext-108 cl2 hov-cl1 trans-04">
										La gran lista de regalos masculinos para estas fiestas
									</a>
								</h4>

								<p class="stext-117 cl6">
								Son extremadamente versátiles, ideales tanto para un día relajado en la playa como para una salida casual con amigos. La simplicidad de las poleras no solo facilita la creación de atuendos modernos y descomplicados, sino que también permite combinarlas con shorts, faldas o jeans, convirtiéndolas en la elección perfecta para cualquier ocasión veraniega.
								</p>

								
							</div>
						</div>

						<!-- item blog -->
						<div class="p-b-63">
							<a href="blog-detail.php" class="hov-img0 how-pos5-parent">
								<img src="images/pa3.jpg" alt="IMG-BLOG">

							</a>

							<div class="p-t-32">
								<h4 class="p-b-15">
									<a href="blog-detail.php" class="ltext-108 cl2 hov-cl1 trans-04">
										tendencias de moda de primavera a verano que hay que probar ya
									</a>
								</h4>

								<p class="stext-117 cl6">
								Esta temporada, las poleras están marcando tendencias con una mezcla vibrante de estilos y diseños innovadores. Las poleras oversize continúan siendo un favorito, ofreciendo una combinación de comodidad y un toque urbano
								</p>
							</div>
						</div>

						<!-- Pagination -->
						<div class="flex-l-m flex-w w-full p-t-10 m-lr--7">
							<a href="#" class="flex-c-m how-pagination1 trans-04 m-all-7 active-pagination1">
								1
							</a>

							<a href="vendor/blog-detail.php" class="flex-c-m how-pagination1 trans-04 m-all-7">
								2
							</a>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-lg-3 p-b-80">
					<div class="side-menu">
						<div class="bor17 of-hidden pos-relative">
							<input class="stext-103 cl2 plh4 size-116 p-l-28 p-r-55" type="text" name="search" placeholder="Search">

							<button class="flex-c-m size-122 ab-t-r fs-18 cl4 hov-cl1 trans-04">
								<i class="zmdi zmdi-search"></i>
							</button>
						</div>

						<div class="p-t-55">



							
							<h4 class="mtext-112 cl2 p-b-33">
								Categorías
							</h4>

							<ul>
								<li class="bor18">
									<a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
										Moda
									</a>
								</li>

								<li class="bor18">
									<a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
										Belleza
									</a>
								</li>

								<li class="bor18">
									<a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
										Estilo callejero
									</a>
								</li>

								<li class="bor18">
									<a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
										Estilo de vida
									</a>
								</li>

								
							</ul>
						</div>
<!-- categorias -->



						<div class="p-t-65">
						<h4 class="mtext-112 cl2 p-b-33">
								Productos destacados
							</h4>
						<?php
require 'includes/config/database.php';
$db=conectarDB();
    $con_sql="SELECT * FROM `productos` WHERE 1";
    $res=mysqli_query($db,$con_sql);
    while($reg=$res->fetch_assoc())
    {
?>
	

							<ul>
								<li class="flex-w flex-t p-b-30">
									<a href="#" class="wrao-pic-w size-214 hov-ovelay1 m-r-20">
										<img src="admin/producto/imagenes/<?php echo $reg['imagen'];?>" alt="PRODUCT" width='100' height='100'>
									</a>

									<div class="size-215 flex-col-t p-t-8">
										<a href="#" class="stext-116 cl8 hov-cl1 trans-04">
										<p><?php echo $reg['descripcion'];?></p>
										</a>

										<span class="stext-116 cl6 p-t-20">
										<p> Bs <?php echo $reg['precio'];?></p>
											
										</span>
									</div>
								</li>


<?php
    }
?>
						<div class="p-t-50">
							<h4 class="mtext-112 cl2 p-b-27">
								Etiquetas
							</h4>

							<div class="flex-w m-r--5">
								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Moda
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Estilo de vida
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Estilo callejero
								</a>

								
							</div>
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