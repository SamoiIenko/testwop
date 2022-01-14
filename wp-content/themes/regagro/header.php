<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package regagro
 */

$baseDir = get_template_directory_uri();

?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<?php wp_head(); ?>
</head>

<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col d-flex justify-content-between">
					<div class="d-flex">
						<a href="/"><img src="<?php echo $baseDir;?>/img/regagro_logo.png"></a>
						<p class="header-text">Автоматизированная система <br> учета и регистрации животных</p>
					</div>
					<div class="d-flex align-items-center">
						<?php 
							wp_nav_menu( [
								'theme_location'  => 'main',
								'container'       => null,
								'menu_class'      => 'nav',
								'menu_id'         => 'nav',
							] );
						?>
							<button class="choose-reg-btn">Выберите регион</button>
							<form class="d-flex" autocomplete="off">
								<div class="autocomplete" style="width: 165px;">
									<input id="myInput" type="text" name="myCountry" placeholder="Выберите регион">
								</div>
							</form>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container-fluid regions-window">
			<div class="container">
				<div class="row">
					<div class="col d-flex justify-content-between align-items-center">
						<p class="name-republic">Укажите регион</p>
						<div class="links d-flex">
							<div class="d-flex align-items-center reg">
								<a href="https://passport.regagro.ru/login"><p>Региональная платформа</p></a>
								<svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M6.9425 10.6326C6.82865 10.7487 6.76565 10.9041 6.76708 11.0655C6.7685 11.2268 6.83423 11.3812 6.95011 11.4953C7.06599 11.6094 7.22275 11.6741 7.38662 11.6755C7.5505 11.6769 7.70837 11.6149 7.82625 11.5028L11.16 8.208C11.1891 8.17942 11.2122 8.14546 11.2279 8.10808C11.2437 8.0707 11.2518 8.03063 11.2518 7.99015C11.2518 7.94968 11.2437 7.90961 11.2279 7.87223C11.2122 7.83484 11.1891 7.80089 11.16 7.77231L7.82625 4.47877C7.70837 4.36667 7.5505 4.30464 7.38662 4.30605C7.22275 4.30745 7.06599 4.37217 6.95011 4.48627C6.83423 4.60036 6.7685 4.75471 6.76708 4.91606C6.76565 5.07741 6.82865 5.23286 6.9425 5.34892L9 7.38462H0.625C0.45924 7.38462 0.300268 7.44945 0.183058 7.56486C0.065848 7.68026 0 7.83679 0 8C0 8.16321 0.065848 8.31974 0.183058 8.43514C0.300268 8.55055 0.45924 8.61539 0.625 8.61539H9L6.9425 10.6326ZM13.75 0H5.625C5.45924 0 5.30027 0.064835 5.18306 0.180242C5.06585 0.295649 5 0.452174 5 0.615385C5 0.778595 5.06585 0.93512 5.18306 1.05053C5.30027 1.16593 5.45924 1.23077 5.625 1.23077H13.125C13.2908 1.23077 13.4497 1.2956 13.5669 1.41101C13.6842 1.52642 13.75 1.68294 13.75 1.84615V14.1538C13.75 14.3171 13.6842 14.4736 13.5669 14.589C13.4497 14.7044 13.2908 14.7692 13.125 14.7692H5.3125C5.14674 14.7692 4.98777 14.8341 4.87056 14.9495C4.75335 15.0649 4.6875 15.2214 4.6875 15.3846C4.6875 15.5478 4.75335 15.7044 4.87056 15.8198C4.98777 15.9352 5.14674 16 5.3125 16H13.75C14.0815 16 14.3995 15.8703 14.6339 15.6395C14.8683 15.4087 15 15.0957 15 14.7692V1.23077C15 0.904349 14.8683 0.591298 14.6339 0.360484C14.3995 0.12967 14.0815 0 13.75 0Z"
										fill="#757575" />
								</svg>
							</div>
							<div class="d-flex align-items-center">
								<a class="vet-system" href="#"><p>Ветеринарная система</p></a>
								<svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M6.9425 10.6326C6.82865 10.7487 6.76565 10.9041 6.76708 11.0655C6.7685 11.2268 6.83423 11.3812 6.95011 11.4953C7.06599 11.6094 7.22275 11.6741 7.38662 11.6755C7.5505 11.6769 7.70837 11.6149 7.82625 11.5028L11.16 8.208C11.1891 8.17942 11.2122 8.14546 11.2279 8.10808C11.2437 8.0707 11.2518 8.03063 11.2518 7.99015C11.2518 7.94968 11.2437 7.90961 11.2279 7.87223C11.2122 7.83484 11.1891 7.80089 11.16 7.77231L7.82625 4.47877C7.70837 4.36667 7.5505 4.30464 7.38662 4.30605C7.22275 4.30745 7.06599 4.37217 6.95011 4.48627C6.83423 4.60036 6.7685 4.75471 6.76708 4.91606C6.76565 5.07741 6.82865 5.23286 6.9425 5.34892L9 7.38462H0.625C0.45924 7.38462 0.300268 7.44945 0.183058 7.56486C0.065848 7.68026 0 7.83679 0 8C0 8.16321 0.065848 8.31974 0.183058 8.43514C0.300268 8.55055 0.45924 8.61539 0.625 8.61539H9L6.9425 10.6326ZM13.75 0H5.625C5.45924 0 5.30027 0.064835 5.18306 0.180242C5.06585 0.295649 5 0.452174 5 0.615385C5 0.778595 5.06585 0.93512 5.18306 1.05053C5.30027 1.16593 5.45924 1.23077 5.625 1.23077H13.125C13.2908 1.23077 13.4497 1.2956 13.5669 1.41101C13.6842 1.52642 13.75 1.68294 13.75 1.84615V14.1538C13.75 14.3171 13.6842 14.4736 13.5669 14.589C13.4497 14.7044 13.2908 14.7692 13.125 14.7692H5.3125C5.14674 14.7692 4.98777 14.8341 4.87056 14.9495C4.75335 15.0649 4.6875 15.2214 4.6875 15.3846C4.6875 15.5478 4.75335 15.7044 4.87056 15.8198C4.98777 15.9352 5.14674 16 5.3125 16H13.75C14.0815 16 14.3995 15.8703 14.6339 15.6395C14.8683 15.4087 15 15.0957 15 14.7692V1.23077C15 0.904349 14.8683 0.591298 14.6339 0.360484C14.3995 0.12967 14.0815 0 13.75 0Z"
										fill="#757575" />
								</svg>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<main>