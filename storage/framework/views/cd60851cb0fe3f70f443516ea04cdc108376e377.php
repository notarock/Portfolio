

	<?php if($lstProjets->isEmpty()): ?>

	<div class="row mt centered">	
		<h2>Il n'y a pas de projets à montrés.</h2>
	</div><!-- /row -->

	<?php else: ?>

	<div class="container pt">
		<div class="row mt centered">	

			<?php $__currentLoopData = $lstProjets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $projet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

			<div class="col-lg-4">
				<a class="zoom green" href="/projets/<?php echo e($projet->id); ?>"><img class="img-responsive" src="/img/projets/<?php echo e($projet->picture); ?>" alt="" /></a>
				<p><?php echo e($projet->name); ?></p>
			</div>

			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		</div><!-- /row -->
	</div><!-- /container -->
	
	<?php endif; ?>

