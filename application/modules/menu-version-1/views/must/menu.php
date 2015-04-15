<div class="right menu">
  <a class="item <?php if (!empty($homepage)): ?>
          <?php echo $homepage; ?>
        <?php endif ?>" href="<?php echo base_url('menu-version-1/homepage'); ?>">Homepage</a>
  <a class="item <?php if (!empty($menu1)): ?>
          <?php echo $menu1; ?>
        <?php endif ?>" href="<?php echo base_url('menu-version-1/homepage/menu1'); ?>">Menu 1</a>
  <a class="item <?php if (!empty($menu2)): ?>
          <?php echo $menu2; ?>
        <?php endif ?>" href="<?php echo base_url('menu-version-1/homepage/menu2'); ?>">Menu 2</a>
  <a class="item <?php if (!empty($menu3)): ?>
          <?php echo $menu3; ?>
        <?php endif ?>" href="<?php echo base_url('menu-version-1/homepage/menu3'); ?>">Menu 3</a>
</div>