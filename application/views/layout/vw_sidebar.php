<!-- Sidebar Menu -->
<ul class="sidebar-menu">
<li class="header"><?php echo strtoupper($this->session->userdata('user_category'));?></li>
  
<?php if($this->session->userdata('user_category') == 'admin'): ?>
  <!-- Optionally, you can add icons to the links -->
  <li class="treeview">
    <a href="#"><i class="fa fa-link"></i> <span>Donasi</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
      <li><a href="#">Kelola Donasi</a></li>
      <li><a href="#">Rekap Donasi</a></li>
    </ul>
  </li>
  <li><a href="#"><i class="fa fa-link"></i> <span>Home</span></a></li>
  <li class="treeview">
    <a href="#"><i class="fa fa-link"></i> <span>User</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
      <li><a href="#">Add New User</a></li>
      <li><a href="#">All Users</a></li>
    </ul>
  </li>
<?php elseif($this->session->userdata('user_category') == 'donator'): ?>

<?php endif;?>
  
</ul><!-- /.sidebar-menu -->

  