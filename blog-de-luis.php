<!DOCTYPE html>
<html lang="en">
<head>
<?php
	include 'particles/head.php';
?>

</head>
<body>
	<?php
		include 'particles/preload.php';
		include 'particles/menu.php';
	?>	
	<!-- intro section start -->
	<section class="intro-section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1 class="section-title line">En el Blog de Luis!</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- intro section end -->
	<!-- page section start -->
	<div class="page-section">
		<div class="container">
			<div class="row mb-5">
				<!-- blog item -->
				<div class="col-md-6">
					<div class="blog-item">
						<figure class="thumb">
							<img src="imgpost/1.png" alt="">
						</figure>
						<article class="blog-content">
							<h2>Tu web con experiencia de usuario (UX)</h2>
							<div class="blog-meta">22 de Mayo del 2018 / Luis Bernal</div>
							<p>Hoy les comparto lo esencial que todo proyecto web debe tener como pilar y que en Update Global Marketing siempre tenemos en cuenta: User experience design o Diseño considerando la experiencia de tu usuario, la User Experience.(UX)</p>
							<a href="post/tu-web-con-experiencia-de-usuario-ux.php" class="read-more">Leer Mas...</a>
						</article>
					</div>
				</div>
				<!-- blog item -->
				<div class="col-md-6">
					<div class="blog-item">
						<figure class="thumb">
							<img src="imgpost/designcanada.jpg" alt="">
						</figure>
						<article class="blog-content">
							<h2>Design Canada gana el sitio del mes de abril de 2018</h2>
							<div class="blog-meta">24 de Mayo del 2018 / Luis Bernal</div>
							<p>Es alucinante el tema de esta paginaweb canadience, por su simplismmo sus grandes letras y sus efectos cordinados, una gran experiencia de usuarios y elegancia todo al mismo tiempo.</p>
							<a href="post/desing-canada-gana-premio.php" class="read-more">Leer Mas...</a>
						</article>
					</div>
				</div>	
				<!-- blog item -->
				<div class="col-md-6">
					<div class="blog-item">
						<figure class="thumb">
							<img src="imgpost/fonts.png" alt="">
						</figure>
						<article class="blog-content">
							<h2>20 mejores fuentes web de Google</h2>
							<div class="blog-meta">28 de Mayo del 2018 / Luis Bernal</div>
							<p>Estamos experimentando un momento de gran creatividad en el uso de la tipografía web.</p>
							<a href="post/20-fuentes-de-google-impresionantes-para-web.php" class="read-more">Leer Mas...</a>
						</article>
					</div>
				</div>		
			</div>
		</div>
	</div>
	<!-- page section end -->
	<?php
		include 'particles/footer.php';
		include 'particles/script.php';
	?>
</body>
</html>