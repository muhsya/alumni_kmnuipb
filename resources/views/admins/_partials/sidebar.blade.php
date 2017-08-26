<aside class="main-sidebar hidden-print">
  <section class="sidebar">
    <div class="user-panel">
      <div class="pull-left image"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image" class="img-circle"></div>
      <div class="pull-left info">
        <p>{{ ucwords(strtolower(\Auth::user()->name)) }}</p>
        <p class="designation">{{ ucwords(strtolower(\Auth::user()->role->name)) }}</p>
      </div>
    </div>
          <!-- Sidebar Menu-->
    <?php $adminUrl = 'no-enter-allowed'; ?>
    <ul class="sidebar-menu">
      <li {{ $route == 'index'? ' class=active ' : '' }}><a href="{{ asset($adminUrl) }}"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
      <li {{ $route == 'alumnis'? ' class=active ' : '' }}><a href="{{ asset($adminUrl . '/alumnis') }}"><i class="fa fa-users"></i><span>Alumni</span></a></li>
      <li {{ $route == 'faculties'? ' class=active ' : '' }}><a href="{{ asset($adminUrl . '/faculties') }}"><i class="fa fa-institution"></i><span>Fakultas</span></a></li>
      <li {{ $route == 'departments'? ' class=active ' : '' }}><a href="{{ asset($adminUrl . '/departments') }}"><i class="fa fa-book"></i><span>Departemen</span></a></li>
      <li {{ $route == 'contact-types'? ' class=active ' : '' }}><a href="{{ asset($adminUrl . '/contact-types') }}"><i class="fa fa-phone"></i><span>Kontak</span></a></li>
      <li {{ $route == 'education-types'? ' class=active ' : '' }}><a href="{{ asset($adminUrl . '/education-types') }}"><i class="fa fa-graduation-cap"></i><span>Pendidikan</span></a></li>
    </ul>
  </section>
</aside>
