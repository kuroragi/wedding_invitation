@extends('layouts.app')

@push('css')
<link rel="stylesheet" href="/css/adnan_cici/style.css">
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
@endpush

@section('content')
<div class="overlay" id="overlay">
    <p>Silahkan Tap Dimanapun Untuk Membuka Undangan</p>
</div>

<audio id="background-music" loop>
    <source src="{{ asset('storage/music/pernikahan kita.m4a') }}" type="audio/mpeg">
</audio>

<div class="sections">
    <section id="opening" class="opening">
        <div class="content-box">
            <img class="content-box-header" src="{{ asset('storage/another/header_content-box.png') }}" alt="">
            <h5>Pernikahan</h5>
            <h1 class="title title-glowing">Adnan & Cici</h1>
            <h6>Kepada Yang Terhormat</h5>
                <h3 class="title">{{ ucwords($guests[0]).' & '.ucwords($guests[1]) }}</h3>
                <small>Mohon maaf jika terdapat kesalahan dalam penyebutan nama dan gelar</small>
                <img class="content-box-footer" src="{{ asset('storage/another/footer_content-box.png') }}" alt="">
        </div>
    </section>

    <section class="ayat" id="ayat">
        <div class="content-box">
            <img class="content-box-header" src="{{ asset('storage/another/header_content-box.png') }}" alt="">
            <h2 class="title">Surat Ar-rum Ayat 21</h2>
            <p class="arabic">
                وَمِنْ آيَاتِهِ أَنْ خَلَقَ لَكُم مِّنْ أَنفُسِكُمْ أَزْوَاجًا لِّتَسْكُنُوا إِلَيْهَا
                وَجَعَلَ بَيْنَكُم مَّوَدَّةً وَرَحْمَةً إِنَّ فِي ذَٰلِكَ لَآيَاتٍ لِّقَوْمٍ يَتَفَكَّرُونَ
            </p>
            <p class="translation">
                Artinya: Dan di antara tanda-tanda kekuasaan-Nya adalah Dia menciptakan untukmu istri-istri
                dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya
                di antaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat
                tanda-tanda
                bagi kaum yang berpikir.
            </p>
            <img class="content-box-footer" src="{{ asset('storage/another/footer_content-box.png') }}" alt="">
        </div>
    </section>

    <section class="introduction" id="introduction">
        <div class="content-box">
            <img class="content-box-header" src="{{ asset('storage/another/header_content-box.png') }}" alt="">
            <h4 class="title">Assalamu'alaikum Wr. Wb.</h4>
            <p>dengan memohon rahmat dan ridho Allah Subhanahu Wa Ta'ala kami hendak melansungkan pernikahan untuk
                anak kami</p>
            <h4 class="title">Adnan Ridwan S.Kom</h4>
            <p>Putra Dari Bapak Suharyono & ibu Kasmiati</p>
            <h4 class="title">Chintya Risdayanti SE.</h4>
            <p>Putri Dari Bapak Kamal & Ibu Yayuk Heriyati</p>
            <img class="content-box-footer" src="{{ asset('storage/another/footer_content-box.png') }}" alt="">
        </div>
    </section>

    <section class="galery" id="galery">
        <div class="content-box">
            <img class="content-box-header" src="{{ asset('storage/another/header_content-box.png') }}" alt="">
            <h1 class="title">Galery</h1>
            <div class="main-images">
                <img src="{{ asset('storage/main_photo/202410301132_1.jpg') }}" alt="" id="popup" class="main-image">
                <img src="{{ asset('storage/main_photo/202410301132_2.jpg') }}" alt="" id="popup" class="main-image">
            </div>
            <div class="another-images">
                <img src="{{ asset('storage/additional_photo/202410301132_3.jpg') }}" alt="" id="popup"
                    class="another-image">
                <img src="{{ asset('storage/additional_photo/202410301132_4.jpg') }}" alt="" id="popup"
                    class="another-image">
                <img src="{{ asset('storage/additional_photo/202410301132_5.jpg') }}" alt="" id="popup"
                    class="another-image">
                <img src="{{ asset('storage/additional_photo/202410301132_6.jpg') }}" alt="" id="popup"
                    class="another-image">
                <img src="{{ asset('storage/additional_photo/202410301132_7.jpg') }}" alt="" id="popup"
                    class="another-image">
                <img src="{{ asset('storage/additional_photo/202410301132_8.jpg') }}" alt="" id="popup"
                    class="another-image">
            </div>
            <img class="content-box-footer" src="{{ asset('storage/another/footer_content-box.png') }}" alt="">
        </div>
    </section>

    <section class="wedding-section">
        <div class="content-box">
            <img class="content-box-header" src="{{ asset('storage/another/header_content-box.png') }}" alt="">
            <h1 class="title">Akad Nikah</h1>
            <div class="date-container">
                <div class="day">Ahad</div>
                <div class="date">
                    <span class="day-number">17</span>
                    <span class="year">2024</span>
                </div>
                <div class="month">November</div>
            </div>
            <p class="time">Pukul : 09.00 WIB</p>
            <p class="location-title">Lokasi</p>
            <p class="location">
                Bertempat Di,<br>
                Gedung Perindustrian jl. Hangtuah
            </p>
            <img class="content-box-footer" src="{{ asset('storage/another/footer_content-box.png') }}" alt="">
        </div>
        <div class="content-box">
            <img class="content-box-header" src="{{ asset('storage/another/header_content-box.png') }}" alt="">
            <h1 class="title">Resepsi</h1>
            <div class="date-container">
                <div class="day">Ahad</div>
                <div class="date">
                    <span class="day-number">17</span>
                    <span class="year">2024</span>
                </div>
                <div class="month">November</div>
            </div>
            <p class="time">Pukul : 11.00 WIB - Selesai</p>
            <p class="location-title">Lokasi</p>
            <p class="location">
                Bertempat Di,<br>
                Gedung Perindustrian jl. Hangtuah
            </p>

            <img class="content-box-footer" src="{{ asset('storage/another/footer_content-box.png') }}" alt="">
        </div>
        <div class="content-box">
            <img class="content-box-header" src="{{ asset('storage/another/header_content-box.png') }}" alt="">
            <h3 class="title">Alamat Acara</h3>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15958.625735376787!2d101.4854428!3d0.5161404!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5ad3637d8dec7%3A0xf94e4727e9fa197d!2sGedung%20perindustrian!5e0!3m2!1sen!2sid!4v1729914717255!5m2!1sen!2sid"
                style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                id="map-location" class="map-location"></iframe>

            <img class="content-box-footer" src="{{ asset('storage/another/footer_content-box.png') }}" alt="">
        </div>
    </section>

    <!-- <section class="streaming" id="streaming">
        <div class="content-box">
            <img class="content-box-header" src="{{ asset('storage/another/header_content-box.png') }}" alt="">
            <h1 class="title">Saksikan Secara Livestream</h1>
            <p>Ikuti Kami di Instagram : <a
                    href="https://www.instagram.com/chintyarisdayanti?igsh=MXIxbGtzdnF0b2N3Zg=="
                    class="livestream-ig">Chintya Risdayanti</a></p>

            <img class="content-box-footer" src="{{ asset('storage/another/footer_content-box.png') }}" alt="">
        </div>
    </section> -->

    <section class="envelope" id="envelope">
        <div class="content-box">
            <img class="content-box-header" src="{{ asset('storage/another/header_content-box.png') }}" alt="">
            <button class="envelope-button" id="envelope-button">Kirim Amplop</button>

            <img class="content-box-footer" src="{{ asset('storage/another/footer_content-box.png') }}" alt="">
        </div>
        <div id="envelope-detail" class="content-box d-none">
            <img class="content-box-header" src="{{ asset('storage/another/header_content-box.png') }}" alt="">
            <h3 class="title">Detail Rekening</h3>
            <div class="envelope-detail">
                <div class="bank-logo"><img src="{{ asset('storage/logo/logo-bri.png') }}" alt=""></div>
                <div class="bank-detail">Adnan Ridwan<br>221001007828505</div>
            </div>
            <div class="envelope-detail">
                <div class="bank-logo"><img src="{{ asset('storage/logo/logo-mandiri.png') }}" alt=""></div>
                <div class="bank-detail">Chintya Risdayanti<br>1080016058670</div>
            </div>
            <a href="https://wa.me/6282283944207?text=Konfirmasi%20Transfer" target="_blank"><button
                    class="wa-confirm">Konfirmasi
                    via WhatsApp</button></a>

            <img class="content-box-footer" src="{{ asset('storage/another/footer_content-box.png') }}" alt="">
        </div>
    </section>

    <section class="reserve" id="reserve">
        <div class="content-box">
            <img class="content-box-header" src="{{ asset('storage/another/header_content-box.png') }}" alt="">
            <h1 class="title">Konfirmasi Kehadiran</h1>
            <form action="">
                <input type="text" name="nama" placeholder="Nama Anda">
                <input type="text" name="alamat" placeholder="Alamat Anda">
                <button type="submit">Kirim</button>
            </form>

            <img class="content-box-footer" src="{{ asset('storage/another/footer_content-box.png') }}" alt="">
        </div>
    </section>

    <section class="section guest-messages">
        <div class="content-box">
            <img class="content-box-header" src="{{ asset('storage/another/header_content-box.png') }}" alt="">
            <h3 class="title">Pesan untuk Mempelai</h3>
            <form>
                <input type="text" placeholder="Nama Anda" class="form-input">
                <textarea placeholder="Pesan" class="form-textarea"></textarea>
                <button type="submit" class="form-button">Kirim Pesan</button>
            </form>
            <div class="messages">
                <div class="messages-detail">
                    <div class="sender">uum</div>
                    <div class="message">Selamat cuk, mudah2a jadi keluarga sakinnah mawaddah warahmah</div>
                </div>
            </div>

            <img class="content-box-footer" src="{{ asset('storage/another/footer_content-box.png') }}" alt="">
        </div>
    </section>

    <section class="section closing">
        <div class="content-box">
            <img class="content-box-header" src="{{ asset('storage/another/header_content-box.png') }}" alt="">
            <h3>Salam dari Mempelai</h3>
            <h1 class="title title-glowing">Adnan dan Cici</h1>
            <p>Terima kasih atas doa dan dukungannya...</p>
            <img class="content-box-footer" src="{{ asset('storage/another/footer_content-box.png') }}" alt="">
        </div>
    </section>

    <footer class="footer">
        <p>&copy; 2024 Wedding Invitation. All rights reserved.</p>
    </footer>
</div>

<div id="image-popup" class="image-popup d-none">
    <span onclick="closePopup()" class="close-btn">&times;</span>
    <img id="popup-img" class="popup-img" src="">
</div>
@endsection

@push('script')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<!-- <script src="https://unpkg.com/scrollreveal"></script> -->

<script>
    // Memilih semua elemen dengan class content-box
const contentBoxes = document.querySelectorAll('.content-box');

const observerOptions = {
    root: null, // Mengamati di viewport
    threshold: 0.1 // Berapa banyak dari element harus terlihat
};

const revealContentBox = (entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible'); // Menambahkan kelas visible saat terlihat
            observer.unobserve(entry.target); // Berhenti mengamati setelah muncul
        }
    });
};

const observer = new IntersectionObserver(revealContentBox, observerOptions);

// Observasi setiap content-box
contentBoxes.forEach(box => {
    observer.observe(box);
});
</script>

<script>
    $(document).ready(function () {
        $('#overlay').on('click', function () {
            $(this).addClass('d-none');
            $('#background-music')[0].play();
        })

        $('#galery').on('click', '#popup', function (e) {
            const src = $(this).attr('src');
            $('#image-popup').removeClass('d-none');
            $('#popup-img').attr('src', src);
        });

        $('#envelope-button').on('click', function (e) {
            $('#envelope-detail').removeClass('d-none');
        });
    });

    function closePopup() {
        $('#image-popup').addClass('d-none');
        $('#popup-img').attr('src', '');
    }
</script>
@endpush