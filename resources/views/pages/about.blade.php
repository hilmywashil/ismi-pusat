@extends('layouts.app')

@section('title', 'Tentang ISMI')

@section('content')
    <section class="wrapper-mosque-page">
        <div class="about-hero">
            <div class="heading" data-aos="fade-up">
                <h2>Tentang Kami</h2>
                <h1>Ikatan Saudagar Muslim Indonesia</h1>
            </div>
            <div class="buttons" data-aos="fade-up">
                <a href="#more" class="btn">Selengkapnya<i class="fa fa-arrow-down"></i></a>
            </div>
        </div>
    </section>
    <section class="wrapper-white-2" id="more">
        <div class="about">
            <div class="left" data-aos="fade-up">
                <h1>Bersama ISMI,<br>Menguatkan Saudagar Muslim</h1>
                <div class="content">
                    <p>
                        Ikatan Saudagar Muslim se-Indonesia (ISMI) adalah organisasi yang
                        menghimpun para pengusaha dan profesional Muslim dari berbagai sektor
                        usaha di seluruh Indonesia. ISMI hadir sebagai wadah kolaborasi,
                        silaturahmi, dan penguatan ekonomi umat dengan berlandaskan nilai-nilai
                        Islam yang berintegritas, amanah, serta berorientasi pada kemaslahatan
                        bersama.
                    </p>

                    <p>
                        Didirikan dengan semangat membangun kemandirian ekonomi bangsa,
                        ISMI berkomitmen untuk:
                    </p>

                    <ul>
                        <li>Mendorong pertumbuhan wirausaha Muslim yang tangguh dan berdaya saing.</li>
                        <li>Mengembangkan jejaring bisnis yang kuat, saling mendukung, dan berkelanjutan.</li>
                        <li>Menerapkan praktik bisnis yang etis, profesional, dan sesuai prinsip syariah.</li>
                        <li>Berkontribusi aktif dalam pembangunan sosial dan pemberdayaan masyarakat.</li>
                    </ul>

                    <p>
                        Melalui berbagai program seperti forum bisnis, pelatihan kewirausahaan,
                        pendampingan usaha, serta kolaborasi strategis lintas sektor, ISMI
                        berupaya menciptakan ekosistem ekonomi yang inklusif dan berdampak luas.
                    </p>
                </div>
            </div>
            <div class="right" data-aos="fade-up">
                <img src="{{ asset('images/h-ilham-habibie.png') }}" alt="H Ilham Habibie">
            </div>
        </div>
    </section>
    <section class="wrapper-green">
        <div class="sejarah" data-aos="fade-up">
            <div class="left">
                <img src="{{ asset('images/mosque-shape.png') }}" alt="Mosque Shape">
            </div>
            <div class="right">
                <h1>Sekilas Perjalanan ISMI</h1>
                <div class="content">
                    <p>
                        TENTANG ISMI Ikatan Saudagar Muslim se-Indonesia (ISMI) didirikan oleh 4 ormas besar, yaitu : NU,
                        MUHAMMADIYAH, ICMI dan MUI di Jakarta pada tanggal 18 Desember 2012 sebagai institusi per-kumpulan
                        Saudagar Muslim Seluruh Indonesia, merupakan kebutuhan dalam kancah da’wah bil hal membangun
                        perekonomian dan kesejahteraan umat, bangsa dan negara.
                    </p>
                    <p>
                        ISMI sebagai wadah Saudagar / Pengusaha Muslim yang merupakan mayoritas pengusaha di negara
                        Indonesia
                        sudah sepatutnya menjadi penopang perekonomian nasional di tengah perubahan yang terjadi di dunia.
                        ISMI
                        perlu mendorong ekonomi Islam sebagai konsep yang rahmatan lil ‘alamin untuk dimanifestasikan dalam
                        suatu tindakan yang melingkupi peningkatan kesejahteraan, pemerataan kesempatan, penegakan kebenaran
                        dan
                        keadilan serta turut memperkokoh persatuan dan kesatuan bangsa dan negara dalam bingkai : Pancasila,
                        UUD
                        1945, Bhinneka Tunggal Ika, dan NKRI.
                    </p>

                    <p>Problematika dan tantangan perekonomian dalam lingkup regional, nasional maupun internasional saat
                        ini
                        dalam kondisi kritis dan sangat kompleks, sehingga perlu dijadikan perhatian khusus. ISMI perlu
                        menganalisis secara mendalam dan mengajukan solusi yang terbaik guna penyelamatan ekonomi yang
                        membawa
                        pada kesejahteraan masyarakat di Indonesia pada khususnya dan umat manusia di dunia pada umumnya.
                    </p>

                    <p>Saudagar/ Pengusaha Muslim di Indonesia harus mengambil peran dan langkah nyata dalam pemecahan
                        sistem
                        ekonomi yang ada saat ini. Oleh Karenanya, sudah sepatutnya pengusaha muslim menjadi pelaku utama
                        yang
                        memberi manfaat, kontribusi besar dan menjadi tiang/ soko guru perekonomian UKM (Usaha Kecil dan
                        Menengah) nasional di tengah perubahan yang terjadi di dunia global dan di era digital.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="visi-misi">
        <div class="left" data-aos="fade-up">
            <h1>Visi dan Misi Kami</h1>
            <div class="isi">
                <h2>Visi</h2>
                <p>Menjadi wadah persatuan Saudagar Muslim menuju kesuksesan dalam berbisnis dan mencapai kesejahteraan
                    bersama.</p>
            </div>
            <div class="isi">
                <h2>Misi</h2>
                <p>Mendorong penumbuhan, pengembangan dan kemandirian Saudagar Muslim.
                    Meningkatkan sumber daya manusia, daya saing dan peran aktif dalam ekonomi skala nasional, regional dan
                    internasional.
                    Meningkatkan kerjasama dan jaringan usaha Saudagar Muslim se-Indonesia</p>
            </div>
        </div>
        <div class="right">
            <img src="{{ asset('images/reading-quran.jpg') }}" alt="Reading Qur'an">
        </div>
    </section>
    <section class="tagline">
        <div class="left">
            <img src="{{ asset('images/mosque-not-shaped.jpg') }}" alt="Reading Qur'an">
        </div>
        <div class="right" data-aos="fade-up">
            <div class="isi">
                <h2>Tagline ISMI</h2>
                <p>Merangkai Persatuan, Kesuksesan dan Kesejahteraan.(Dengan modal sosial yang sangat potensial karena
                    didirikan oleh NU, Muhammadiyah, ICMI dan MUI, seharusnya ISMI mampu merangkai persatuansaudagar muslim
                    se-Indonesia.</p>
            </div>
            <div class="isi">
                <h2>Peran ISMI</h2>
                <p>Sebagai Penegasan ISMI tidak berbisnis langsung tatapi ISMI Fokus sebagai inisiator program dengan konsep
                    mendalam, mendorong program, mengkomunikasikan program, memediasi program dan mengadvokasi program.
                    Terangkum sbb :</p>
                <p>Berikut peran ISMI dalam pengembahan usaha :</p>
                <ul>
                    <li>Koordinator (Koordinasi & Regulasi program)</li>
                    <li>Inisiator (Inisiasi & Inovasi program2 aplikatif)</li>
                    <li>Fasilitator (Fasilitasi & Mediasi)</li>
                    <li>Agregator (Agregasi, Kolaborasi & Advokasi)</li>
                </ul>
            </div>
        </div>

    </section>

@endsection