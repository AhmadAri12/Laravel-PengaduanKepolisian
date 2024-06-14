<div class="sidebar">
        <div class="logo-details">
            <img src="{{ asset('assets/gambar/logo.png') }}" alt="Pengaduan" class="logo" />
        </div>
        <ul class="nav-links">
            <li>
                <a href="/dashboard"  class="{{ request()->Is('dashboard*') ? 'active' : '' }}">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            </li>
            <li>
                <a href="/pengaduan" class="{{ request()->Is('pengaduan*') ? 'active' : '' }}">
                    <i class='bx bx-history'></i>
                    <span class="links_name">History Pengaduan</span>
                </a>
            </li>
            <li>
                <a href="/kategori" class="{{ request()->Is('kategori*') ? 'active' : '' }}">
                    <i class='bx bx-file'></i>
                    <span class="links_name">Kategori Pengaduan</span>
                </a>
            </li>
            <li class="log_out">
                <a href="/">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>