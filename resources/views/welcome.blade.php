<x-navbar></x-navbar>

<x-layout>
    <!--Hero Section-->
    <section class="mt-1" id="beranda">
        <div class="container">
            <div class="row align-items-center position-relative">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="pe-lg-3">
                        <h1 class="display-3 fw-bold mb-4 animate-on-load" data-aos="fade-down">Ayo Cegah <span
                                class="text-primary">Stunting</span> Pada
                            Anak-Anak Kita.</h1>
                        <p class="lead mb-4" data-aos="fade-right">Stunting bisa dicegah dengan asupan gizi yang cukup
                            dan
                            pola asuh yang baik.
                            Mari bersama-sama mewujudkan generasi sehat dan cerdas untuk masa depan yang lebih baik.
                        </p>
                    </div>
                    <div class="d-grid d-sm-flex">
                        <a class="btn btn-lg btn-outline-primary" href="{{ route('faq') }}">Selengkapnya</a>
                    </div>
                </div>
                <div class="col-lg-6 position-relative img-container">
                    <img alt="Image Description" class="img-fluid imganak" id="imgSlide" src="../assets/anak1.jpeg">
                    <button class="btn btn-icon btn-primary position-absolute top-50 start-0 translate-middle-y"
                        id="slideLeft">
                        &larr;
                    </button>
                    <button class="btn btn-icon btn-primary position-absolute top-50 end-0 translate-middle-y"
                        id="slideRight">
                        &rarr;
                    </button>
                </div>
            </div>
            <div class="container my-5">
                <h4 class="text-center display-7 fw-bold mb-4">LAYANAN YANG KAMI BERIKAN</h4>
                <div class="layanan">
                    <div class="layanan-content">
                        <div class="card card-custom text-center p-3">
                            <div class="card-body">
                                <div class="card-icon">📚</div>
                                <h5 class="card-title mt-3">EDUKASI TENTANG STUNTING</h5>
                            </div>
                        </div>
                        <div class="card card-custom text-center p-3">
                            <div class="card-body">
                                <div class="card-icon">🚫</div>
                                <h5 class="card-title mt-3">PENCEGAHAN STUNTING</h5>
                            </div>
                        </div>
                        <div class="card card-custom text-center p-3">
                            <div class="card-body">
                                <div class="card-icon">🍏</div>
                                <h5 class="card-title mt-3">REKOMENDASI MAKANAN SEHAT</h5>
                            </div>
                        </div>
                        <div class="card card-custom text-center p-3">
                            <div class="card-body">
                                <div class="card-icon">🩺</div>
                                <h5 class="card-title mt-3">KONSULTASI KESEHATAN</h5>
                            </div>
                        </div>
                        <div class="card card-custom text-center p-3">
                            <div class="card-body">
                                <div class="card-icon">👶</div>
                                <h5 class="card-title mt-3">PERAWATAN BAYI DAN ANAK</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!--Tentang Kami-->
    <section class="py-5">
        <div class="container">
            <div class="text-center" data-aos="fade-down">
                <span class="text-muted">Baca Dulu</span>
                <h2 class="display-5 fw-bold mb-3">Tentang Kami</h2>
            </div>
            <div class="row gx-5">
                <div class="col-md-6">
                    <div class="lead text-center text-md-start">
                        <p class="lead" data-aos="flip-left" style="text-align: justify;">
                            Kami hadir untuk membantu orang tua dalam menyediakan makanan yang sehat dan bergizi untuk
                            anak-anak yang membutuhkan penambahan berat badan. Di website ini, kami menawarkan berbagai
                            opsi makanan yang direkomendasikan oleh ahli gizi, yang tidak hanya lezat tetapi juga kaya
                            akan nutrisi yang dibutuhkan untuk mendukung pertumbuhan optimal anak-anak.
                        </p>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="lead text-center text-md-start">
                        <p class="lead mb-0" data-aos="flip-right" style="text-align: justify;">
                            Setiap makanan yang kami rekomendasikan dilengkapi dengan informasi detail mengenai
                            bahan-bahan yang digunakan, termasuk sumber protein, karbohidrat kompleks, serta vitamin dan
                            mineral penting. Kami juga menyediakan panduan praktis untuk memastikan makanan yang
                            disajikan dapat memenuhi kebutuhan kalori dan nutrisi harian anak-anak Anda.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Menu Makanan-->
    <section class="py-5" id="menumakanan">
        <div class="container">
            <div class="row justify-content-center text-center mb-4 mb-md-5">
                <div class="col-xl-9 col-xxl-8" data-aos="flip-up">
                    <span class="text-muted">Rekomendasi Kami</span>
                    <h2 class="display-5 fw-bold">Makanan Sehat Pencegah Stunting</h2>
                    <p class="lead">Berikut kami rekomendasikan makanan sehat yang kaya akan nutrisi penting untuk
                        mendukung pertumbuhan optimal dan mencegah stunting pada anak-anak.</p>
                </div>
            </div>
            <div class="row align-items-center gy-md-5">
                <div class="col-md-6" data-aos="fade-right">
                    <div class="mt-4 mt-md-0"><img alt="" class="img-fluid rounded my-md-0 my-4"
                            src="../assets/Bubur.jpg"></div>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <a class="text-primary fw-semibold text-decoration-none" href="">Makanan</a>
                    <h2 class="fw-semibold my-1">Bubur Ayam Bawang</h2>
                    <div class="text-muted">
                        14/8/2024
                    </div>
                    <p class="my-4" style="text-align: justify;">Bubur ayam bawang merupakan menu yang sangat baik
                        untuk mencegah stunting karena
                        mengandung protein dari ayam dan karbohidrat kompleks dari beras. Protein penting untuk
                        pertumbuhan dan perbaikan sel, sementara karbohidrat memberikan energi yang dibutuhkan tubuh
                        untuk berfungsi dengan optimal. Selain itu, bawang merah dan bawang putih dalam hidangan ini
                        memiliki sifat anti-inflamasi dan antibakteri yang mendukung sistem kekebalan tubuh.</p><a
                        class="btn-link"
                        href="https://drive.google.com/file/d/1wLVxFIW7od0q1ZZWFdy8Rm8jDEN6_VsB/view?usp=drive_link">Download
                        Resep</a>
                </div>
                <div class="col-md-6" data-aos="fade-right">
                    <div class="mt-4 mt-md-0"><img alt="" class="img-fluid rounded my-md-0 my-4"
                            src="../assets/gurame.jpg"></div>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <a class="text-primary fw-semibold text-decoration-none" href="">Makanan</a>
                    <h2 class="fw-semibold my-1">Ikan Nila Acar Kuning</h2>
                    <div class="text-muted">
                        14/8/2024
                    </div>
                    <p class="my-4" style="text-align: justify;">Ikan nila acar kuning kaya akan asam lemak omega-3
                        yang mendukung perkembangan
                        otak dan sistem saraf pada anak-anak, serta mencegah defisiensi nutrisi yang dapat berkontribusi
                        pada stunting. Ciri khas acar kuning, yaitu kunyit, mengandung kurkumin yang memiliki sifat
                        anti-inflamasi dan antioksidan yang membantu meningkatkan daya tahan tubuh.</p><a
                        class="btn-link"
                        href="https://drive.google.com/file/d/10_40DDQDNxfRfMp_Zqmw12EhgmCrK-7V/view?usp=drive_link">Download
                        Resep</a>
                </div>
                <div class="col-md-6" data-aos="fade-right">
                    <div class="mt-4 mt-md-0"><img alt="" class="img-fluid rounded my-md-0 my-4"
                            src="../assets/mijawi.jpg"></div>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <a class="text-primary fw-semibold text-decoration-none" href="">Makanan</a>
                    <h2 class="fw-semibold my-1">Martabak Mi Ja Wi (Mi Jamur Sawi)</h2>
                    <div class="text-muted">
                        14/8/2024
                    </div>
                    <p class="my-4" style="text-align: justify;">Martabak mi ja wi menggabungkan mi, jamur, dan sawi
                        yang kaya akan vitamin,
                        mineral, dan serat. Jamur mengandung vitamin D yang penting untuk kesehatan tulang, sementara
                        sawi memberikan zat besi dan vitamin C yang meningkatkan penyerapan zat besi. Kombinasi ini
                        mendukung pertumbuhan tulang dan mencegah anemia yang sering kali terkait dengan stunting.</p><a
                        class="btn-link"
                        href="https://drive.google.com/file/d/1i40x06NFJZ7s6p3RRHJ0a8DIR5X0ZRIO/view?usp=sharing">Download
                        Resep</a>
                </div>

                <div class="col-md-6" data-aos="fade-right">
                    <div class="mt-4 mt-md-0"><img alt="" class="img-fluid rounded my-md-0 my-4"
                            src="../assets/oatpisang.jpg"></div>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <a class="text-primary fw-semibold text-decoration-none" href="">Makanan</a>
                    <h2 class="fw-semibold my-1">Bubur Oat Pisang Keju</h2>
                    <div class="text-muted">
                        14/8/2024
                    </div>
                    <p class="my-4" style="text-align: justify;">Bubur oat pisang keju adalah pilihan sarapan yang
                        sangat baik untuk pertumbuhan
                        anak. Oat kaya akan serat dan nutrisi yang mendukung sistem pencernaan dan memberikan energi
                        jangka panjang, sedangkan pisang menyediakan kalium dan vitamin B6 untuk fungsi otak yang
                        optimal. Keju menambah asupan protein dan kalsium untuk kesehatan tulang yang baik.</p><a
                        class="btn-link"
                        href="https://drive.google.com/file/d/1FjJGC37dgrka3Y7wINseW3f3PF53dEQh/view?usp=drive_link">Download
                        Resep</a>
                </div>

                <div class="col-md-6" data-aos="fade-right">
                    <div class="mt-4 mt-md-0"><img alt="" class="img-fluid rounded my-md-0 my-4"
                            src="../assets/supkacang.jpg"></div>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <a class="text-primary fw-semibold text-decoration-none" href="">Makanan</a>
                    <h2 class="fw-semibold my-1">Sup Kacang Merah Sayuran</h2>
                    <div class="text-muted">
                        14/8/2024
                    </div>
                    <p class="my-4" style="text-align: justify;">Sup kacang merah sayuran merupakan sumber protein
                        nabati dan serat yang membantu
                        pertumbuhan dan pencernaan. Kacang merah mengandung zat besi dan folat yang mendukung produksi
                        sel darah merah dan mencegah anemia, sedangkan sayuran menambah vitamin dan mineral yang
                        diperlukan untuk perkembangan yang sehat.</p><a class="btn-link"
                        href="https://drive.google.com/file/d/1mTCEX2aPpMVHw7x_CtLFK9T4HfqHJ4_S/view?usp=drive_link">Download
                        Resep</a>
                </div>

                <div class="col-md-6" data-aos="fade-right">
                    <div class="mt-4 mt-md-0"><img alt="" class="img-fluid rounded my-md-0 my-4"
                            src="../assets/omlete.jpg"></div>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <a class="text-primary fw-semibold text-decoration-none" href="">Makanan</a>
                    <h2 class="fw-semibold my-1">Omlet Keju Bayam</h2>
                    <div class="text-muted">
                        14/8/2024
                    </div>
                    <p class="my-4" style="text-align: justify;">Omlet keju bayam merupakan makanan bergizi dengan
                        protein dari telur dan keju,
                        serta vitamin dan mineral dari bayam. Telur menyediakan protein berkualitas tinggi yang
                        mendukung pertumbuhan otot dan jaringan, sementara bayam kaya akan zat besi, vitamin A, dan
                        vitamin K, yang penting untuk kesehatan tulang dan penglihatan.</p><a class="btn-link"
                        href="https://drive.google.com/file/d/1pz9H8sdoHa79mdSwqKXfjVmrzqjJxWOD/view?usp=drive_link">Download
                        Resep</a>
                </div>

                <div class="col-md-6" data-aos="fade-right">
                    <div class="mt-4 mt-md-0"><img alt="" class="img-fluid rounded my-md-0 my-4"
                            src="../assets/pisang.jpg"></div>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <a class="text-primary fw-semibold text-decoration-none" href="">Camilan</a>
                    <h2 class="fw-semibold my-1">Smoothies Pisang dan Yogurt</h2>
                    <div class="text-muted">
                        14/8/2024
                    </div>
                    <p class="my-4" style="text-align: justify;">Smoothies pisang dan yogurt adalah pilihan camilan
                        yang kaya akan nutrisi. Pisang
                        memberikan vitamin B6, potasium, dan energi, sedangkan yogurt mengandung kalsium dan protein
                        yang mendukung kesehatan tulang dan otot. Kombinasi ini tidak hanya lezat tetapi juga mendukung
                        pertumbuhan optimal dan kesehatan pencernaan.</p><a class="btn-link"
                        href="https://drive.google.com/file/d/1UpdKYxzx8Skh4ERNOA6gs-B_FCJWkCZX/view?usp=drive_link">Download
                        Resep</a>
                </div>

            </div>
        </div>
    </section>

    <!--Gallery Kami-->
    <section class="py-5" id="gallery">
        <div class="container">
            <div class="row justify-content-center text-center mb-3 mb-md-5">
                <div class="col-lg-8 col-xxl-7" data-aos="fade-down">
                    <span class="text-muted">Lihat Juga</span>
                    <h2 class="display-5 fw-bold mb-3">Gallery Kami</h2>
                    <p class="lead">Selamat datang di Galeri Kami! Di sini, Anda dapat melihat berbagai hidangan
                        bergizi yang kami rekomendasikan untuk membantu penambahan berat badan anak Anda. Setiap gambar
                        membawa inspirasi untuk menciptakan makanan sehat yang lezat dan menarik bagi si kecil.</p>
                </div>
            </div>
            <div class="row gy-4">
                <div class="col-md-6 col-xl-4"><img alt="Foto5" class="img-fluid rounded"
                        src="../assets/foto1.png" data-aos="fade-right"></div>
                <div class="col-md-6 col-xl-4">
                    <div class="bg-light rounded h-100 d-flex align-items-center">
                        <div class="text-center p-5 p-md-3" data-aos="fade-up">
                            <h4>Beberapa Foto Kami</h4>
                            <p class="mt-3
                            mb-0">Jelajahi lebih banyak pilihan makanan yang
                                kaya akan nutrisi di galeri kami. Setiap foto mewakili komitmen kami dalam menyediakan
                                solusi terbaik untuk kebutuhan gizi anak-anak Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4"><img alt="Foto1" class="img-fluid rounded"
                        src="../assets/foto2.png" data-aos="fade-left"></div>
                <div class="col-md-6 col-xl-4"><img alt="Foto2" class="img-fluid rounded"
                        src="../assets/foto3.png" data-aos="fade-right"></div>
                <div class="col-md-6 col-xl-4"><img alt="Foto3" class="img-fluid rounded"
                        src="../assets/foto4.png" data-aos="fade-up"></div>
                <div class="col-md-6 col-xl-4"><img alt="Foto4" class="img-fluid rounded"
                        src="../assets/foto5.png" data-aos="fade-left"></div>
            </div>
        </div>
    </section>

    <!--Kontak Kami-->
    <section class="py-5" id="kontakkami">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8 col-xxl-7" data-aos="flip-up">
                    <span class="text-muted">Mari Berbincang</span>
                    <h2 class="display-5 fw-bold mb-3">Kontak Kami</h2>
                    <p class="lead">Kami senang mendengar dari Anda! Jika Anda memiliki pertanyaan, saran, atau ingin
                        mengetahui lebih lanjut tentang rekomendasi makanan penunjang kenaikan berat badan anak, jangan
                        ragu untuk menghubungi kami. Tim kami siap membantu Anda dengan informasi yang dibutuhkan untuk
                        mendukung kesehatan dan pertumbuhan anak-anak Anda.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 mt-2">
                    <form action="#" onsubmit="MessageToWhatsapp()">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <input class="form-control bg-light" id="namaDepan" placeholder="Nama Depan"
                                        type="text" data-aos="fade-right">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <input class="form-control bg-light" id="namaBelakang"
                                        placeholder="Nama Belakang" type="text" data-aos="fade-left">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <textarea class="form-control bg-light" id="pesan" placeholder="Tulis Pesan Anda Disini...." rows="4"
                                        data-aos="fade-down"></textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-grid">
                                    <button class="btn btn-primary" type="submit" data-aos="fade-up">Send
                                        message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layout>

<x-footer></x-footer>
