<?php $__env->startSection('content'); ?>


	<!-- +++++ Projects Section +++++ -->
	
	<div class="container pt">
		<div class="row mt">
			<div class="col-lg-6 col-lg-offset-3 centered">
				<h3><?php echo e($projet->name); ?></h3>
				<hr>
				<p><?php echo e($projet->description); ?></p>
			</div>
		</div>
		<div class="row mt centered">	
			<div class="col-lg-8 col-lg-offset-2">
				<p><img class="img-responsive" src="/img/projets/<?php echo e($projet->picture); ?>" alt=""></p>
				<p><bt>Créer par: <a href="#">Roch D'Amour</a></bt> - <bt>Catégorie: <a href="/categories/<?php echo e($projet->categorie->id); ?>"><?php echo e($projet->categorie->name); ?></a></bt> - <bt>Date : <?php echo e($projet->updated_at->diffForHumans()); ?></bt></p>
			</div>
		</div><!-- /row -->
	</div><!-- /container -->
	



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>