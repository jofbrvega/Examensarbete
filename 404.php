<?php get_header(); ?>
<section class="w-full h-screen bg-top bg-cover bg-[#b4b8a5]">
	<div class="flex flex-col items-center justify-center h-screen text-white">
		<h1 class="text-6xl my-4 md:text-[8rem] leading-none">404</h1>
		<p class="mb-3 text-lg leading-none md:text-xl">Kunde inte hitta sidan.</p>
		<a href="<?php echo esc_url(home_url('/')); ?>" class="text-lg leading-none underline md:text-xl underline-offset-1">Gå tillbaka till startsidan.</a>
	</div>
</section>
<?php
get_footer();
