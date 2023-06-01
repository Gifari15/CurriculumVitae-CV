<html>
    <head>
        <title>Curriculum Vitae</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <link rel="shortcut icon" href="assets/image/logo.png">
        
        <!-- FILE CSS BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.6.0/css/bootstrap.min.css"/>

        <!-- LINK ICON DARI FLATICON -->
        <!-- https://www.flaticon.com/icon-fonts-most-downloaded -->
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-straight/css/uicons-bold-straight.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-straight/css/uicons-solid-straight.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css'>
    </head>
    <body>
        <?php
            // VARAIBEL NAMA GAMBAR
            $imageName = "bandung";
        ?>

    <!-- CONTAINER LUAR CARD (width container tidak 100% jika nama class="container" karena dianggap menggunakan class bootstrap) -->
    <div class="containerr">
        <!-- CARD UTAMA -->
        <div class="portfolio">
            <!-- CARD KIRI -->
            <section class="header">
                <img class="header-img" src="assets/image/logo.png" alt="Profile" />
                <h1>M. Gifari A</h1>
                <h2>Android Developer</h2>

                <!-- SOSIAL MEDIA -->
                <div class="socials_media">
                    <a href="https://www.instagram.com/mgfamlh_/" style="text-decoration: none;"><i class="fi fi-brands-instagram"></i></a>
                    <a href="#" style="text-decoration: none;"><i class="fi fi-brands-telegram"></i></a>
                    <a href="https://www.linkedin.com/in/mochammad-gifari-490a88203/" style="text-decoration: none;"><i class="fi fi-brands-linkedin"></i></a>
                    <a href="https://github.com/Gifari15" style="text-decoration: none;"><i class="fi fi-brands-github"></i></a>
                </div>
                <a href="{{ route('download.image', $imageName) }}" class="btn-download">DownIoad CV</a>
            </section>
            <!-- AKHIR DARI CARD KIRI -->

            <!-- BAGIAN KANAN CARD -->
            <div class="content">
                <!-- HALAMAN HOME -->
                <section class="content-card" id="home"> 
                    <h1 style="font-weight:bold; font-size:2.84rem;">Hello, I am <span class="auto-type"></span></h1>
                </section>
                <!-- AKHIR DARI HALAMAN HOME -->

                <!-- HALAMAN ABOUT ME -->
                <section class="content-card-normal" id="about"> 
                    <div class="content-card-header">
                        <h1 class="title_konten">About me</h1>
                    </div>
                    <div class="separator-out">
                        <div class="separator-cuy"></div>
                    </div>
                    <div class="about">
                        <table border="0" width="100%">
                            <tr style="display:flex;">
                                <td width="135px" height="40px"><span style="font-weight:bold; font-size: 1.5vw;">Full Name</span></td>
                                <td><span style="margin-right:30px; margin-left:30px; font-size: 1.5vw;">:</span></td>
                                <td height="40px" width="70%"><span style="font-size: 1.5vw;">Mochammad Gifari Amatullah</span><hr></td>
                            </tr>
                        </table>
                    </div>
                    <div class="about" style="margin-top:24px; margin-bottom:12px;">
                        <table border="0" width="100%">
                            <tr style="display:flex;">
                                <td width="135px" height="40px"><span style="font-weight:bold; font-size: 1.5vw;">Date of Birth</span></td>
                                <td><span style="margin-right:30px; margin-left:30px; font-size: 1.5vw;">:</span></td>
                                <td height="40px" width="70%"><span style="font-size: 1.5vw;">Jan 15, 2005</span><hr></td>
                            </tr>
                        </table>
                    </div>
                    <div class="about" style="margin-top:12px; margin-bottom:12px;">
                        <table border="0" width="100%">
                            <tr style="display:flex;">
                                <td width="135px" height="40px"><span style="font-weight:bold; font-size: 1.5vw;">Address</span></td>
                                <td><span style="margin-right:30px; margin-left:30px; font-size: 1.5vw;">:</span></td>
                                <td height="40px" width="70%"><span style="font-size: 1.5vw;">Griya Asri Cahaya Cipageran K-33, Jl. Kolonel Masturi</span><hr></td>
                            </tr>
                        </table>
                    </div>
                    <div class="about" style="margin-top:12px; margin-bottom:12px;">
                        <table border="0" width="100%">
                            <tr style="display:flex;">
                                <td width="135px" height="40px"><span style="font-weight:bold; font-size: 1.5vw;">Phone</span></td>
                                <td><span style="margin-right:30px; margin-left:30px; font-size: 1.5vw;">:</span></td>
                                <td height="40px" width="70%"><span style="font-size: 1.5vw;">081322543149</span><hr></td>
                            </tr>
                        </table>
                    </div>
                    <div class="about" style="margin-top:12px; margin-bottom:12px;">
                        <table border="0" width="100%">
                            <tr style="display:flex;">
                                <td width="135px" height="40px"><span style="font-weight:bold; font-size: 1.5vw;">Email</span></td>
                                <td><span style="margin-right:30px; margin-left:30px; font-size: 1.5vw;">:</span></td>
                                <td height="40px" width="70%"><span style="font-size: 1.5vw;">mgifari2005@gmail.com</span><hr></td>
                            </tr>
                        </table>
                    </div>
                </section>
                <!-- AKHIR DARI HALAMAN ABOUT ME -->

                <!-- HALAMAN SKILLS -->
                <section class="content-card-normal" id="skill"> 
                    <div class="content-card-header">
                        <h1 class="title_konten">Skills</h1>
                    </div>
                    <div class="separator-out">
                        <div class="separator-label-skills"></div>
                    </div>
                    <div class="skills">
                        <span style="margin-top:10px; margin-bottom:10px;">
                            <span class="label-skills title_konten2">Java</span>
                            <div class="progress" style="height: 15px; width:90%; background-color:#c7c8c9;">
                                <div class="progress-bar progress-bg" style="width: 90%;" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                            </div>
                        </span>

                        <span style="margin-top:10px; margin-bottom:10px;">
                            <span class="label-skills title_konten2">Laravel</span>
                            <div class="progress" style="height: 15px; width:90%; background-color:#c7c8c9;">
                                <div class="progress-bar progress-bg" style="width: 85%;" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                            </div>
                        </span>

                        <span style="margin-top:10px; margin-bottom:10px;">
                            <span class="label-skills title_konten2">HTML / CSS</span>
                            <div class="progress" style="height: 15px; width:90%; background-color:#c7c8c9;">
                                <div class="progress-bar progress-bg" style="width: 75%;" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                            </div>
                        </span>

                        <span style="margin-top:10px; margin-bottom:10px;">
                            <span class="label-skills title_konten2">SQL</span>
                            <div class="progress" style="height: 15px; width:90%; background-color:#c7c8c9;">
                                <div class="progress-bar progress-bg" style="width: 90%;" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                            </div>
                        </span>

                        <span style="margin-top:10px; margin-bottom:10px;">
                            <span class="label-skills title_konten2">JavaScript</span>
                            <div class="progress" style="height: 15px; width:90%; background-color:#c7c8c9;">
                                <div class="progress-bar progress-bg" style="width: 70%;" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                            </div>
                        </span>
                    </div>
                </section>
                <!-- AKHIR DARI HALAMAN SKILLS -->

                <!-- HALAMAN PROJECT -->
                <section class="content-card-normal-project" id="project"> 
                    <div class="content-card-header-center">
                        <h1 class="title_konten">Project</h1>
                    </div>
                    <div class="project">
                        <span class="project-list">
                            <span class="project-title">Pengaduan Masyarakat</span>
                            <div class="project-list-teks">
                                <p style="line-height:1.8em;">
                                    Aplikasi pengaduan masyarakat adalah platform digital yang memungkinkan masyarakat untuk 
                                    melaporkan masalah atau keluhan kepada pihak yang berwenang.
                                </p>
                            </div>
                            <img src="assets/image/pengaduan.png" class="project-img"/>
                        </span>
                        <span class="project-list">
                            <span class="project-title">Bukapajak</span>
                            <div class="project-list-teks">
                                <p style="line-height:1.8em;">
                                    Ini merupakan keterangan singkat dari Project atau aplikasi yang pernah dibuat.
                                    Ini merupakan keterangan singkat dari Project atau aplikasi yang pernah dibuat
                                </p>
                            </div>
                            <img src="assets/image/bukapajak.png" class="project-img"/>
                        </span>
                        <span class="project-list">
                            <span class="project-title">Coming Soon</span>
                            <div class="project-list-teks">
                                <p style="line-height:1.8em;">
                                    Ini merupakan keterangan singkat dari Project atau aplikasi yang pernah dibuat.
                                    Ini merupakan keterangan singkat dari Project atau aplikasi yang pernah dibuat
                                </p>
                            </div>
                            <img src="assets/image/bandung.jpg" class="project-img"/>
                        </span>
                        <span class="project-list">
                            <span class="project-title">Coming Soon</span>
                            <div class="project-list-teks">
                                <p style="line-height:1.8em;">
                                    Ini merupakan keterangan singkat dari Project atau aplikasi yang pernah dibuat.
                                    Ini merupakan keterangan singkat dari Project atau aplikasi yang pernah dibuat
                                </p>
                            </div>
                            <img src="assets/image/yuuta.jpg" class="project-img"/>
                        </span>
                    </div>
                </section>
                <!-- AKHIR DARI HALAMAN PROJECT -->

                <!-- HALAMAN EDUCATION -->
                <section class="content-card-normal-timeline" style="padding-left:10px;" id="timeline"> 
                    <div class="content-card-header-center" style="margin-bottom:20px;">
                        <h1 class="title_konten">Education</h1>
                    </div>
                    <ul class="timeline">
                        <li class="timeline-item">
                            <h5 class="fw-bold">SDN Mawar (SD)</h5>
                            <span class="text-muted fw-bold">2011 - 2017</span>
                            <p class="text-muted" style="margin-top:5px;">
                                xyzqwertyfjskjfmakjsddicodingkf
                                hghsfanjimfksknwlelesindrcxff
                                skfkflfgttste edsffgdydr rndydsf.
                            </p><br>
                        </li>
                        <li class="timeline-item">
                            <h5 class="fw-bold">SMPN 5 Cimahi (SMP)</h5>
                            <span class="text-muted fw-bold">2017 - 2020</span>
                                <p class="text-muted" style="margin-top:5px;">
                                    xyzqwertyfjskjfmakjsddicodingkf
                                    hghsfanjimfksknwlelesindrcxff
                                    skfkflfgttste edsffgdydr rndydsf.
                                </p><br>
                        </li>
                        <li class="timeline-item">
                            <h5 class="fw-bold">SMKN 1 Cimahi - Rekayasa Perangkat Lunak (SMK)</h5>
                            <span class="text-muted fw-bold">2020 - 2023</span>
                                <p class="text-muted" style="margin-top:5px;">
                                    xyzqwertyfjskjfmakjsddicodingkf
                                    hghsfanjimfksknwlelesindrcxff
                                    skfkflfgttste edsffgdydr rndydsf.
                                </p><br>
                        </li>
                        <li class="timeline-item">
                            <h5 class="fw-bold">Universitas .......... - Teknik Informatika</h5>
                            <span class="text-muted fw-bold">2023 - 2027</span>
                                <p class="text-muted" style="margin-top:5px;">
                                    xyzqwertyfjskjfmakjsddicodingkf
                                    hghsfanjimfksknwlelesindrcxff
                                    skfkflfgttste edsffgdydr rndydsf.
                                </p>
                        </li>
                    
                    </ul>
                </section>
                <!-- AKHIR DARI HALAMAN EDUCATION -->
            </div>
            <!-- AKHIR DARI BAGIAN KANAN CARD -->

        </div>
        <!-- AKHIR DARI CARD UTAMA -->

        <!-- AWAL DARI MENU -->
        <div class="menu">
            <a href="#home" style="text-decoration: none;">
                <i class="fi fi-sr-home"></i>
            </a>
            <a href="#about" style="text-decoration: none;">
                <i class="fi fi-ss-user"></i>
            </a>
            <a href="#skill" style="text-decoration: none;">
                <i class="fi fi-ss-display-code"></i>
            </a>
            <a href="#project" style="text-decoration: none;">
                <i class="fi fi-sr-briefcase"></i>
            </a>
            <a href="#timeline" style="text-decoration: none;">
                <i class="fi fi-sr-hourglass-end"></i>
            </a>
        </div>
        <!-- AKHIR DARI MENU -->
    </div>
    <!-- AKHIR DARI CONTAINER LUAR CARD -->

    <!-- FILE JS BOOTSTRAP -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

    <!-- FILE JS TYPING EFFECT -->
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script>
        var typed = new Typed(".auto-type", {
            strings: ["Gifari", "Software Engineer"],
            typeSpeed: 80,
            backSpeed: 80,
            loop: true
        })
    </script>
    </body>
</html>