<?php
	$counters = get_field('counter');
?>

<?php if(!empty($counters)) : ?>
	<div class="counter" id="particles-js--counter">
		<div class="counter__background">
			<?= file_get_contents(get_theme_file_path('/assets/images/red-banner.svg')); ?>
		</div>		
		<div class="counter__foreground">
			<?= file_get_contents(get_theme_file_path('/assets/images/red-trans-banner.svg')); ?>
		</div>
	    <div class="counter__overlay">
	        <div class="container">
		        <div class="row">
			        
			        <?php foreach($counters as $counter) : ?>
			        
			        	<?php if ($counter['number'] != '') : ?>
			        		<?php 
				        		$col = floor(12/Count($counters));
				        		$sym = $counter['symbol'];
				        		$sym_place = $counter['symbol_placement'];
				        		if ($sym != '') :
				        			$num = $sym_place == 0 ? $sym.'<span>0</span>' : '<span>0</span>'.$sym;
				        		else :
					        		$num = '<span>0</span>';
				        		endif;
				        	?>
					        <div class="column column--sm-6 column--md-<?= $col; ?> counter__col">
								<div class="counter-value" data-value="<?= $counter['number']; ?>" data-duration="<?= $counter['duration']*1000; ?>">
									<?= $num; ?>
								</div>
								<div class="counter-value--text"><?= $counter['subtext']; ?></div>
								<input type="hidden" value="false"/>
					        </div>
					        
				        <?php endif; ?>	  
				        
			        <?php endforeach; ?>		        			        
			        
		        </div>
	        </div>
	    </div>
	</div>
<?php endif; ?>
