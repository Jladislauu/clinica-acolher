<nav id="navmenu" class="navmenu">
  <ul>
    <?php foreach ($categories->db as $key=>$fields):
    if($fields['list']):  ?>
    <li>
      <a href="<?php echo DOMAIN_CATEGORIES.$key; ?>"><?php echo $fields['name']; ?></a>
    </li>
    <?php endif;endforeach; ?>
  </ul>
  <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>
<a class="btn-getstarted" href="<?php echo $site->url(); ?>">Início</a>
<a class="btn-getstarted" href="https://lightgrey-manatee-733013.hostingersite.com/">Site</a>