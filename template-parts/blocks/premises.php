<?php
$premises_heading = get_field('premises_heading');
$premises_stage = get_field('premises_stage');
?>
<section class="w-full max-w-screen-xl px-4 py-4 mx-auto border-b border-gray-500 lg:py-10 ">
	<div class="grid grid-span-2 lg:grid-cols-2 lg:gap-10">
		<div class="w-full p-4">
			<?php echo $premises_heading; ?>
		</div>
		<div class="p-4">
			<h2> <?php echo $premises_stage; ?></h2>
			<?php
			if (have_rows('premises')) :
				while (have_rows('premises')) : the_row();
					$premises_number = get_sub_field('premises_number');
					$premises_room = get_sub_field('premises_room');
					$premises_sqm = get_sub_field('premises_sqm');
					$premises_price = get_sub_field('premises_price');
					$premises_status = get_sub_field('premises_status');
			?>
					<div class="grid justify-between w-full p-4 border-t border-l border-gray-500 grid-span-5 lg:grid-cols-5">
						<span><?php echo $premises_number; ?></span>
						<span><?php echo $premises_room; ?></span>
						<span><?php echo $premises_sqm ?></span>
						<span><?php echo $premises_price ?></span>
						<span><?php if ($premises_status == 'såld') : ?>
								<span> Såld </span>
							<?php else : ?>
								<span> Ledig </span>
							<?php endif; ?>
						</span>
					</div>

			<?php
				endwhile;
			endif; ?>
		</div>
	</div>
</section>