<?php
$premises_heading = get_field('premises_heading');
?>
<section>
	<div class="grid grid-cols-2">
		<div class="p-4">
			<?php echo $premises_heading; ?>
		</div>
		<div>
			<?php
			if (have_rows('premises')) :
				while (have_rows('premises')) : the_row();
					$premises_number = get_sub_field('premises_number');
					$premises_room = get_sub_field('premises_room');
					$premises_sqm = get_sub_field('premises_sqm');
					$premises_price = get_sub_field('premises_price');
					$premises_status = get_sub_field('premises_status');
			?>
					<div class="flex justify-between gap-4 p-4 border-2">
						<span>Bostadsnummer</span>
						<span>Antal rum</span>
						<span>Kvadratmeter</span>
						<span>Pris</span>
						<span>Status</span>
					</div>
					<div class="flex justify-between p-2 border-2">
						<span><?php echo $premises_number; ?></span>
						<span><?php echo $premises_room; ?></span>
						<span><?php echo $premises_sqm ?></span>
						<span><?php echo $premises_price ?></span>
						<?php if ($premises_status == 'såld') : ?>
							<span> Såld </span>
						<?php else : ?>
							<span> Ledig </span>
						<?php endif; ?>
					</div>
			<?php
				endwhile;
			endif; ?>
		</div>
	</div>
</section>