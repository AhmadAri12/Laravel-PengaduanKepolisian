<div class="sidebar">
        <div class="logo-details">
            <img src="{{ asset('assets/gambar/logo.png') }}" alt="Pengaduan" class="logo" />
        </div>
        <ul class="nav-links">
            <li>
                <a href="admin.php">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/history" class="{{ request()->Is('history*') ? 'active' : '' }}">
                    <i class='bx bx-box'></i>
                    <span class="links_name">History Pengaduan</span>
                </a>
            </li>
            <li>
                <a href="/kategori" class="{{ request()->Is('kategori*') ? 'active' : '' }}">
                    <i class='bx bx-list-ul'></i>
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