@extends('layouts.app')

@section('title')
Dashboard | Pengaduan Admin
@endsection

@section('content')
<div class="overview-boxes">
    <div class="box">
        <div class="box-content">
            <h2 id="text">Admin Pengaduan</h2>
            <h3 id="date"></h3>
        </div>
    </div>

    <div class="cardBox">
        <!-- Card for Total History Pengaduan -->
        <div class="card">
            <div class="card-content">
                <div class="numbers">{{ $totalPengaduan }}</div>
                <div class="cardName">Total History Pengaduan</div>
            </div>
            <div class="iconBx">
                <i class='bx bx-history'></i>
            </div>
        </div>
        
        <!-- Card for Total Categories Pengaduan -->
        <div class="card">
            <div class="card-content">
                <div class="numbers">{{ $totalKategori }}</div>
                <div class="cardName">Total Categories Pengaduan</div>
            </div>
            <div class="iconBx">
                <i class='bx bx-category'></i>
            </div>
        </div>
    </div>
</div>
<style>
    .overview-boxes {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .cardBox {
        display: flex;
        gap: 20px;
        margin-top: 20px;
    }

    .card {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
        border-radius: 10px;
        background-color: white;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
        cursor: pointer;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .card .card-content {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .card .numbers {
        font-size: 2rem;
        font-weight: bold;
        color: #000;
    }

    .card .cardName {
        font-size: 1rem;
        color: #333;
    }

    .card .iconBx {
        font-size: 2rem;
        color: #6c63ff;
    }
</style>
@endsection

<script>
    function myFunction() {
        const months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
        const days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
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
