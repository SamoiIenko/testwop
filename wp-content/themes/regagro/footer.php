<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package regagro
 */

$baseDir = get_template_directory_uri();

?>

</main>

<footer>
	<div class="container-fluid">
		<div class="container">
			<div class="row d-flex justify-content-between">
				<div class="col-3">
					<div class="footer-block">
						<a href="/"><img class="regagro-logo-footer"
								src="<?php echo $baseDir;?>/img/regagro_logo_footer.png"></a>
						<a href="#">
							<p>Нормативная база</p>
						</a>
						<a href="#">
							<p>Техническая поддержка</p>
						</a>
						<p class="date">© 2016-<?php echo date('Y'); ?>, АС «REGAGRO» ®</p>
					</div>
				</div>
				<div class="col-3">
					<div class="footer-block">
						<h1>Региональная цифровая платформа</h1>
						<a href="#">
							<p>Регистрация</p>
						</a>
						<a href="#">
							<p>Кабинет ветеринарного врача</p>
						</a>
						<a href="#">
							<p>Кабинет руководителя РВС</p>
						</a>
						<a href="#">
							<p>Кабинет районного эпизоотолога</p>
						</a>
					</div>
				</div>
				<div class="col-2">
					<div class="footer-block">
						<h1>ВСЕЗВЕРИ</h1>
						<a href="#">
							<p>Кабинет эпизоотолога субъекта</p>
						</a>
						<a href="#">
							<p>Кабинет управления ветеринарии</p>
						</a>
						<a href="#">
							<p>Кабинет лаборатории</p>
						</a>
						<a href="#">
							<p>Поиск животных</p>
						</a>
					</div>
				</div>
				<div class="col-2">
					<div class="footer-block">
						<h1>1Ф АВТОМАТИЗАЦИЯ</h1>
						<a href="#">
							<p>Кабинет эпизоотолога субъекта</p>
						</a>
						<a href="#">
							<p>Кабинет управления ветеринарии</p>
						</a>
						<a href="#">
							<p>Кабинет лаборатории</p>
						</a>
						<a href="#">
							<p>Поиск животных</p>
						</a>
					</div>
				</div>
				<div class="col-1">
					<div class="footer-block">
						<div><img class="sk-footer" src="<?php echo $baseDir;?>/img/sk_footer.png"></div>
						<div class="d-flex justify-content-end mt-4"><img class="yt-footer"
								src="<?php echo $baseDir;?>/img/yt_footer.png"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
	integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
	crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
	integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
	crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://kit.fontawesome.com/ac812e20c1.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js" integrity="sha512-u9akINsQsAkG9xjc1cnGF4zw5TFDwkxuc9vUp5dltDWYCSmyd0meygbvgXrlc/z7/o4a19Fb5V0OUE58J7dcyw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="<?php echo $baseDir;?>/js/custom-code.js"></script>

<?php wp_footer(); ?>
</body>

</html>