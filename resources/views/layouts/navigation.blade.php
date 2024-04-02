<div class="mainnav__categoriy py-2">
    <h6 class="mainnav__caption mt-0 px-3 fw-bold">Navigation</h6>
    <ul class="mainnav__menu nav flex-column" id="myMenu">
        <li class="nav-item">
            <a href="{{route('home')}}" class="mininav-toggle nav-link {{ Route::is('home') ? 'active' : ''  }}" id="menuDashboard"><i class="demo-pli-home fs-5 me-2"></i>
                <span class="nav-label ms-1">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('kategori-index') }}" class="mininav-toggle nav-link {{ Route::is('kategori-index') ? 'active' : ''  }}" id="menuKategori"><i class="bi bi-cart fs-5 me-2"></i>
                <span class="nav-label ms-1">Kategori Produk</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('satuan-index') }}" class="mininav-toggle nav-link {{ Route::is('satuan-index') ? 'active' : ''  }}" id="menuSatuan"><i class="bi bi-clipboard fs-5 me-2"></i>
                <span class="nav-label ms-1">Satuan Produk</span>
            </a>
        </li>
    </ul>
</div>

<div class="mainnav__categoriy py-2">
    <h6 class="mainnav__caption mt-0 px-3 fw-bold">Data Management</h6>
    <ul class="mainnav__menu nav flex-column" id="myMenu">
        <li class="nav-item">
            <a href="#" class="nav-link mininav-toggle collapsed {{ Route::is('form-index') || Route::is('role-index') || Route::is('permission-index') ? 'active' : '' }}" data-bs-toggle="collapse" data-bs-target="#dataSubMenu" aria-expanded="false" aria-controls="dataSubMenu">
                <i class="bi bi-folder2-open fs-5 me-2"></i>
                <span class="nav-label ms-1">Data</span>
                {{-- <i class="bi bi-chevron-right fs-5 ms-auto"></i> --}}
            </a>
            <ul class="mininav-content nav collapse ms-2" id="dataSubMenu">
            @if(auth()->user()->hasRole('admin') || auth()->user()->hasRole('administrasi'))
            <li class="nav-item">
                <a href="{{route('form-index')}}" class="mininav-toggle nav-link {{ Route::is('form-index') ? 'active' : ''  }}" id="menuUser"><i class="bi bi-person fs-5 me-2"></i>
                    <span class="nav-label ms-1">User</span>
                </a>
            </li>
            @endif
            @role('admin')
            <li class="nav-item">
                <a href="{{ route('permission-index') }}" class="mininav-toggle nav-link {{ Route::is('permission-index') ? 'active' : ''  }}" id="menuPermission"><i class="bi bi-person-vcard fs-5 me-2"></i>
                    <span class="nav-label ms-1">Permission</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('role-index') }}" class="mininav-toggle nav-link {{ Route::is('role-index') ? 'active' : ''  }}" id="menuRole"><i class="bi bi-gear fs-5 me-2"></i>
                    <span class="nav-label ms-1">Role</span>
                </a>
            </li>
            @endrole
            </ul>
        </li>
    </ul>
</div>
