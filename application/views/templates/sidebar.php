<!-- Sidebar -->
<ul class = "navbar-nav sidebar sidebar-dark accordion" id = "accordionSidebar" style = "background-color: #474747;">
  <hr class = "sidebar-divider-none mt-3">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class = "text-center d-none d-md-inline">
    <button class = "box border-0" id = "sidebarToggle"></button>
  </div>

  <!-- Query Menu -->
  <?php
    $role_id = $this->session->userdata('role_id');

    $queryMenu = "SELECT `user_menu`.`id`, `menu`
                  FROM `user_menu` JOIN `user_access`
                  ON `user_menu`.`id` = `user_access`.`menu_id`
                  WHERE `user_access`.`role_id` = $role_id
                  ORDER BY `user_access`.`menu_id` ASC";

    $menu = $this->db->query($queryMenu)->result_array();

    foreach ($menu as $mn) :
  ?>

  <?php
    $menuId = $mn['id'];

    $querySubMenu = "SELECT * FROM `user_submenu`
                     WHERE `menu_id` = $menuId 
                     AND `is_active` = 1";

    $subMenu = $this->db->query($querySubMenu)->result_array();

    foreach ($subMenu as $sm) :

    if ($title == $sm['title']) :
  ?>

  <li class = "nav-item active">
    <?php
      else :
    ?>
 
    <li class = "nav-item">
      <?php endif; ?>

      <a class = "nav-link pb-0" href = "<?= base_url($sm['url']); ?>">
        <i class = "<?= $sm['icon']; ?>"></i>
        <span><?= $sm['title']; ?></span>
      </a>
    </li>

    <?php endforeach; ?>
        
    <?php endforeach; ?>
  </li>
</ul>
<!-- End of Sidebar -->