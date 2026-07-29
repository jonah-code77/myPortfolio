

<?php use App\Core\View; ?>

 <?php View::section('content'); ?>
    <h3 class="fw-bold text-uppercase">Projects</h3>
    <div class="row g-4 mt-3">
        <?php if(!empty($projects)): ?>
            <?php foreach($projects as $project): ?>
                <div class="col-md-4">
                    <div class="card p-3 h-100 bg-dark border-light">
                        <img src="<?= $project['image'] ?>" alt="<?= $project['title'] ?>" 
                        class="card-img-top" style="width: 100%; height: 200px; object-fit: cover;">
                        <div class="card-body bg-secondary text-light">
                            <h5 class="card-title"><?= $project['title'] ?></h5>
                            <p class="card-text"><?= $project['description'] ?></p>
                            <a href="<?= $project['link'] ?>" target="_blank" class="btn btn-info">view project</a>
                        </div>
                    </div>
                </div>
        <?php endforeach; ?>
     <?php else : ?>
        <p class="text-center">No project</p>
    <?php endif; ?>
    </div>
    
    <?php View::endSection(); ?>
 

