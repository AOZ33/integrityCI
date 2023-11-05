<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion bg" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon ">
            <img src="<?php echo base_url(); ?>assets/img/wm.png" alt="logo" width="50">
        </div>
        <div class="sidebar-brand-text mx-3">Nesnumoto</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <?php
    $role_id = $this->session->userdata('role_id');
    $queryMenu = "SELECT `user_menu`.`id`,`menu`,`icon` 
                    FROM `user_menu` JOIN `user_access_menu` 
                    ON `user_menu`.`id` = `user_access_menu`.`menu_id` 
                    WHERE `user_access_menu`.`role_id` = $role_id
                    ORDER BY `user_access_menu`.`menu_id` ASC
                    ";
    $menu = $this->db->query($queryMenu)->result_array();

    ?>

<?php 
foreach ($menu as $m) : 
?>
<li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse<?= $m['id']; ?>"
                    aria-expanded="true" aria-controls="collapse<?= $m['id']; ?>">
                    <i class="<?= $m['icon']; ?>"></i>
                    <span><?= $m['menu']; ?></span>
                </a>
                <div id="collapse<?= $m['id']; ?>" class="collapse" aria-labelledby="heading<?= $m['id']; ?>" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"><?= $m['menu']; ?>:</h6>
                        <?php
                        $menuId = $m['id'];
                        $querySubMenu = "SELECT *
                                        FROM `user_sub_menu` JOIN `user_menu` 
                                        ON `user_sub_menu`.`menu_id` = `user_menu`.`id` 
                                        WHERE `user_sub_menu`.`menu_id` = $menuId
                                        AND `user_sub_menu`.`is_active` = 1
                                        ";

                        $subMenu = $this->db->query($querySubMenu)->result_array();
                        ?>
                        <?php foreach ($subMenu as $sm) : ?>
                        <a class="collapse-item" href="<?= base_url($sm['url']); ?>">
                        <i class="<?= $sm['icon']; ?>"></i>
                        <?= $sm['title']; ?>
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>
</li>
<?php endforeach; ?>

    <!-- Heading -->
    <!-- <?php foreach ($menu as $m) : ?>
        <div class="sidebar-heading">
            <?= $m['menu']; ?>
        </div>

        <?php
        $menuId = $m['id'];
        $querySubMenu = "SELECT *
                        FROM `user_sub_menu` JOIN `user_menu` 
                        ON `user_sub_menu`.`menu_id` = `user_menu`.`id` 
                        WHERE `user_sub_menu`.`menu_id` = $menuId
                        AND `user_sub_menu`.`is_active` = 1
                        ";

        $subMenu = $this->db->query($querySubMenu)->result_array();
        ?>

        <?php foreach ($subMenu as $sm) : ?>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url($sm['url']); ?>">
                    <span><?= $sm['title']; ?></span></a>
            </li>
        <?php endforeach; ?>

        <hr class="sidebar-divider">


    <?php endforeach; ?> -->


 <hr class="sidebar-divider d-none d-md-block">

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout') ?>" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Nav Item - Tables -->




    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>

<!-- End of Sidebar -->