<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/homeGuest.css') }}" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">BERANDA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">PROFIL</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">GALERI</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">DOKUMEN</a>
            </li>
        </ul>
    </div>
</nav>


<div class="container">
    <h1 class="section-title">BIDANG</h1>
    <table class="section-table">
        <tr class="section-content">
            <td>
                <h2>Bidang Layanan Pemerintah Berbasis Elektronik (e-Gov)</h2>
                <p>Merupakan bidang yang menangani digitalisasi layanan...</p>
                <ul>
                    <li>Pembangunan dan pengembangan sistem informasi</li>
                    <li>Penyediaan layanan berbasis digital</li>
                    <li>Tata kelola dan evaluasi layanan elektronik</li>
                </ul>
            </td>
            <td>
                <img src="{{ asset('image/1719896242.png') }}" alt="e-Gov">
            </td>
        </tr>
        <tr class="section-content">
            <td>
                <img src="{{ asset('image/1719896242.png') }}" alt="IT Infrastructure">
            </td>
            <td>
                <h2>Bidang Keamanan dan Infrastruktur Teknologi Informasi</h2>
                <p>Merupakan bidang yang menangani penyediaan dan pengelolaan...</p>
                <ul>
                    <li>Jaringan intra pemerintah</li>
                    <li>CCTV</li>
                    <li>Pusat Data</li>
                    <li>Sistem Manajemen Keamanan Informasi</li>
                </ul>
            </td>
        </tr>
    </table>
</div>
<div>

</div>
<div class="footer">
        <div class="social-icons">
            <a href="https://www.google.com" target="_blank">Google</a>
            <a href="https://www.microsoft.com" target="_blank">Microsoft</a>
            <a href="https://aws.amazon.com" target="_blank">AWS</a>
            <a href="https://www.ibm.com" target="_blank">IBM</a>
            <a href="https://line.me" target="_blank">LINE</a>
        </div>
        <p>&copy; 2022-2023 | Dinas Komunikasi dan Informatika Kota Nganjuk</p>
        <p>Alamat: Jl. Merdeka Nomor 21 Nganjuk, Nganjuk, East Java</p>
        <p>Email: Kominfonganjuuk@gmail.com</p>
        <p>Telepon: (031) 5312144 Psw. 384 / 241, (031) 99277339</p>
    </div>

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
