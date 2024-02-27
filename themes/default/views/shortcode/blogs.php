<?php
use TorMorten\Eventy\Facades\Eventy;

$blogs = Eventy::filter('blogs', 4);
?>
    <section class="container">
        <div class="row">
            <?php foreach($blogs as $blog): ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"><?= $blog->title ?></h4>
                            <p class="card-text"><?= $blog->content ?></p>
                            <a href="#" class="card-link">details</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
