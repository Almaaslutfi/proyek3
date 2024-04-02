@extends('layouts.master')
@section ('content')
<div class="content__header content__boxed overlapping">
    <div class="content__wrap">
        <p class="lead">
            <h1>Dashboard</h1>
        </p>
    </div>
</div>
<div class="content__boxed">
    <div class="content__wrap">
        <div class="row">
            <div class="col-md-12">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row justify-content-between">
                            <div class="col-1 me-5">
                                <img height="145px" src="https://demo3.basawa-solution.com/img/profile-photos/foto-dashboard.jpg" alt="">
                            </div>
                            <div class="col-12 col-md">
                                <h2 style="color: grey"><span id="greeting"></span> {{ Auth::user()->first_name }} </h2>
                                <h5 class="mb-0 mb-md-5" style="color: grey"> <span id="date"></span></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    // Fungsi untuk mendapatkan ucapan selamat berdasarkan waktu
    function getGreeting() {
        var date = new Date();
        var hours = date.getHours();

        if (hours >= 5 && hours < 12) {
            return "Selamat Pagi";
        } else if (hours >= 12 && hours < 18) {
            return "Selamat Siang";
        } else {
            return "Selamat Malam";
        }
    }

    // Fungsi untuk mengupdate teks selamat siang dan tanggal setiap detik
    function updateGreetingAndDate() {
        var greetingElement = document.getElementById('greeting');
        var dateElement = document.getElementById('date');

        greetingElement.textContent = getGreeting();
        dateElement.textContent = new Date().toLocaleDateString('id-ID', { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' });
    }

    // Memanggil fungsi update setiap detik
    setInterval(updateGreetingAndDate, 1000);
</script>
