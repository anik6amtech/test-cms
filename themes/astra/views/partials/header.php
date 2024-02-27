
<?php
use TorMorten\Eventy\Facades\Eventy;
$links = Eventy::filter('menues', 3); // Change 3 to the number of links you want
?>

<!-- static example  https://dev.to/typo3freelancer/updated-bootstrap-5-1-1-navbar-multi-level-and-mega-menu-4j1o -->


<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Bootstrap </a>

    <div class="collapse navbar-collapse" id="navbar-content">
      <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
      <?php foreach ($links as $link): ?>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="<?= $link->page_title ?>" href="<?= url('/redirect', ['page' => $link->id]) ?>"><?= $link->slug ?></a>
                    </li>
                <?php endforeach; ?>

      </ul>
      <form class="d-flex ms-auto">
          <div class="input-group">
              <input class="form-control border-0 mr-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-primary border-0" type="submit">Search</button>
          </div>
      </form>
    </div>
  </div>
</nav>

