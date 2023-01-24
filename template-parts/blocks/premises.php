<?php
$premises_heading = get_field('premises_heading');
$premises_stage = get_field('premises_stage');
?>
<section class="w-full max-w-screen-xl p-4 mx-auto">
	<div class="grid grid-cols-2 gap-10">
		<div class="p-4">
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
						<div class="grid grid-cols-5 p-4 border-2">
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