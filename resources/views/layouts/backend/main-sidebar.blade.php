 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="{{ route('dashboard') }}" class="brand-link">
         <span class="brand-text font-weight-light ml-3">KPKDES</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="/logo.png" class="elevation-2" alt="User Image">
             </div>
             <div class="info">
                 <a href="{{ route('user.edit', auth()->user()->id) }}" class="d-block">{{ auth()->user()->name }}</a>
             </div>
         </div>
         @auth
         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                 <!-- PARIWISATA -->
                 @canany('apbd_rekening-list', 'tenaga_kerja-list')
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon far fa-circle text-danger"></i>
                         <p>
                            APBD
                         </p>
                     </a>
                     <ul class="nav nav-treeview">

                        @can('apbd_rekening-list')
                        <li class="nav-item">
                            <a href="{{ route('apbd_rekening.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    APBD Desa
                                </p>
                            </a>
                        </li>
                        @endcan

                        @can('tenaga_kerja-list')
                        <li class="nav-item">
                             <a href="{{ route('tenaga_kerja.index') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>
                                    Pekerja/Tenaga Kerja
                                 </p>
                             </a>
                        </li>
                        @endcan
                         
                     </ul>
                 </li>
                @endcanany

                @canany('penduduk-list')
                 <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p>
                           DTKS
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                       @can('penduduk-list')
                       <li class="nav-item">
                           <a href="{{ route('penduduk.index') }}" class="nav-link">
                               <i class="far fa-circle nav-icon"></i>
                               <p>
                                   DTKS
                               </p>
                           </a>
                       </li>
                       @endcan
                    </ul>
                </li>
                @endcanany

                @canany('bidang-list', 'desa-list', 'hubungan-list', 'kabupaten-list', 'kecamatan-list', 'pekerjaan-list', 'sumber_dana-list')
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon far fa-circle text-danger"></i>
                         <p>
                            Referensi
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                        
                         @can('bidang-list')
                         <li class="nav-item">
                             <a href="{{ route('bidang.index') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>
                                    Bidang
                                 </p>
                             </a>
                         </li>
                         @endcan

                         @can('desa-list')
                         <li class="nav-item">
                             <a href="{{ route('desa.index') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>
                                    Desa
                                 </p>
                             </a>
                         </li>
                         @endcan

                         @can('hubungan-list')
                         <li class="nav-item">
                             <a href="{{ route('hubungan.index') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>
                                    Hubungan
                                 </p>
                             </a>
                         </li>
                         @endcan

                         @can('kabupaten-list')
                         <li class="nav-item">
                             <a href="{{ route('kabupaten.index') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>
                                    Kabupaten
                                 </p>
                             </a>
                         </li>
                         @endcan

                         @can('kecamatan-list')
                         <li class="nav-item">
                             <a href="{{ route('kecamatan.index') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>
                                     Kecamatan
                                 </p>
                             </a>
                         </li>
                         @endcan

                         @can('pekerjaan-list')
                         <li class="nav-item">
                             <a href="{{ route('pekerjaan.index') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>
                                     Pekerjaan
                                 </p>
                             </a>
                         </li>
                         @endcan

                         @can('sumber_dana-list')
                         <li class="nav-item">
                             <a href="{{ route('sumber_dana.index') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>
                                    Sumber Dana
                                 </p>
                             </a>
                         </li>
                         @endcan

                     </ul>
                 </li>
                @endcanany

                {{-- @@canany(['update', 'view', 'delete'], $post) --}}
                    
                @endcanany
                 @canany('role-list', 'user-list')
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon far fa-circle text-danger"></i>
                         <p>
                             Pengaturan
                         </p>
                     </a>
                     <ul class="nav nav-treeview">

                         @can('role-list')
                         <li class="nav-item">
                             <a href="{{ route('roles.index') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>
                                     Roles
                                 </p>
                             </a>
                         </li>
                         @endcan

                         @can('user-list')
                         <li class="nav-item">
                             <a href="{{ route('user.index') }}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>
                                     Users
                                 </p>
                             </a>
                         </li>
                         @endcan

                     </ul>
                 </li>
                 @endcanany

                @canany('import-excel')
                 <li class="nav-item">
                     <a href="{{ route('excel.create') }}" class="nav-link">
                         <i class="nav-icon fas fa-sign-out-alt text-danger"></i>
                         <p>
                             Import Excel
                         </p>
                     </a>

                 </li>
                @endcanany

                 <li class="nav-item">
                     <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                         <i class="nav-icon fas fa-sign-out-alt text-danger"></i>
                         <p>
                             {{ __('Logout') }}
                         </p>
                     </a>

                 </li>
             </ul>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 @csrf
             </form>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>