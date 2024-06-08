<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style_admin.css') }}" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/f3f15ac6f4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
@include('sidebar.side')
    <div class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Dashboard</span>
            </div>
            <div class="profile-details">
                <i class='bx bxs-user'></i>
                <span class="admin_name">Admin Pengaduan</span>
            </div>
        </nav>
        <div class="home-content">
            @yield('content')
        </div>
    </div>
</body>
<script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
        sidebar.classList.toggle("active");
        if (sidebar.classList.contains("active")) {
            sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    };

    function myFunction() {
        const months = ["Januari", "Februari", "Maret", "April", "Mei",
            "Juni", "Juli", "Agustus", "September",
            "Oktober", "November", "Desember"
        ];
        const days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis",
            "Jumat", "Sabtu"
        ];
        let date = new Date();
        let jam = date.getHours();
        let tanggal = date.getDate();
        let hari = days[date.getDay()];
        let bulan = months[date.getMonth()];
        let tahun = date.getFullYear();
        let m = date.getMinutes();
        let s = date.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById("date").innerHTML = `${hari}, ${tanggal} ${bulan} ${tahun}, ${jam}:${m}:${s}`;
        requestAnimationFrame(myFunction);
    }

    function checkTime(i) {
        if (i < 10) {
            i = "0" + i;
        }
        return i;
    }

    window.onload = function() {
        let date = new Date();
        let jam = date.getHours();
        if (jam >= 4 && jam <= 10) {
            document.getElementById("text").insertAdjacentText("afterbegin", "Selamat Pagi, ");
        } else if (jam >= 11 && jam <= 14) {
            document.getElementById("text").insertAdjacentText("afterbegin", "Selamat Siang, ");
        } else if (jam >= 15 && jam <= 18) {
            document.getElementById("text").insertAdjacentText("afterbegin", "Selamat Sore, ");
        } else {
            document.getElementById("text").insertAdjacentText("afterbegin", "Selamat Malam, ");
        }
        myFunction();
    };
    
</script>
</html>
