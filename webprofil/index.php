<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Andhi Rohman</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>

<body>

    <!-- sidebar -->
    <input type="checkbox" id="check">
    <div class="sidebar">
        <ul>
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#contact">Mahasiswa</a></li>
        </ul>
    </div>

    <!-- bagian header -->
    <header>
        <div class="container">
            <h1><a href="">Andhi Rohman</a></h1>
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#contact">Mahasiswa</a></li>
            </ul>

            <!-- menu mobile -->
            <label for="check" class="mobile-menu"><i class="fas fa-bars fa-2x"></i></label>
        </div>
    </header>

    <!-- bagian banner -->
    <section class="banner">
        <div class="container">
            <div class="banner-left">
                <img src="img/Andhi.jpeg">
                <h2>Hai...<br>
                    Saya adalah seorang <span class="efek-ngetik"></span></h2>
                <p>Selamat datang di website portfolio Sederhana saya!</p>
            </div>
        </div>
    </section>

    <!-- bagian about -->
    <section id="about">
        <div class="container">
            <h3>About</h3>
            <p>Saya adalah Mahasiswa Universitas Islam Sultan Agung Semarang Angkatan 2021 Fakultas Teknologi Industri Prodi Teknik Informatika Saya berasal dari Demak Jawa Tengah tepatnya di Prigi Kalikondang Rt 02 Rw 05, </p>
            <p>Sebelum saya belajar di Universitas Islam Sultan Agung saya berasal dari SMA N 3 Demak dari jurusan IPA dan juga SMP N 1 Demak, </p>
        </div>
    </section>

    <!-- bagian skills -->
    <section id="skills">
        <div class="container">
            <h3>Skills</h3>
            <h4>HTML</h4>
            <div class="bar">
                <span class="nilai html">100%</span>
            </div>

            <h4>CSS</h4>
            <div class="bar">
                <span class="nilai css">90%</span>
            </div>

            <h4>Javascript</h4>
            <div class="bar">
                <span class="nilai js">80%</span>
            </div>

            <h4>PHP</h4>
            <div class="bar">
                <span class="nilai php">100%</span>
            </div>

            <h4>Photoshop</h4>
            <div class="bar">
                <span class="nilai ps">85%</span>
            </div>
        </div>
    </section>


    <!-- bagian portfolio -->
    <section id="portfolio">
        <div class="container">
            <h3>Portfolio</h3>
            <div class="col-4">
                <a href="">
                    <img src="img/query.jpeg">
                    <span>Portfolio 1</span>
                </a>
            </div>

            <div class="col-4">
                <a href="">
                    <img src="img/program.jpeg">
                    <span>Portfolio 2</span>
                </a>
            </div>

            <div class="col-4">
                <a href="">
                    <img src="img/laptop.jpg">
                    <span>Portfolio 3</span>
                </a>
            </div>

            <div class="col-4">
                <a href="">
                    <img src="img/mabar.jpeg">
                    <span>Portfolio 4</span>
                </a>
            </div>

            <div class="col-4">
                <a href="">
                    <img src="img/franco.jpeg">
                    <span>Portfolio 1</span>
                </a>
            </div>

            <div class="col-4">
                <a href="">
                    <img src="img/ngoding.jpeg">
                    <span>Portfolio 2</span>
                </a>
            </div>

            <div class="col-4">
                <a href="">
                    <img src="img/pusing.jpeg">
                    <span>Portfolio 3</span>
                </a>
            </div>

            <div class="col-4">
                <a href="">
                    <img src="img/aku.jpeg">
                    <span>Portfolio 4</span>
                </a>
            </div>
        </div>
    </section>

    <!-- bagian contact -->
    <section id="contact">
        <div class="container">
            <h3>Contact</h3>
            <div class="col-3">
                <h4>Alamat</h4>
                <p>Prigi Kalikondang Rt 02 Rw 05 Kab Demak Kec Demak</p>
            </div>

            <div class="col-3">
                <h4>Email</h4>
                <p>andhirohman56@gmail.com</p>
            </div>

            <div class="col-3">
                <h4>Telp/Hp</h4>
                <p>+62 821 7897 6763</p>
            </div>
        </div>
    </section>

    <!-- bagian Mahasiswa -->
    <div class="container">
        <a href="#" class="list-group-item active">
            <DIV align="center"> MAHASISWA </DIV>
        </a>
        <div class="col-4">
            <a href="">
                <img src="img/laptop.jpg">
                <a href="../joy/index.php" class="list-group-item">CRUD</a>
            </a>
        </div>
    </div>

    <!-- bagian footer -->
    <footer>
        <div class="container">
            <small>Copyright &copy; 2023 - Andhi Rohman.</small>
        </div>
    </footer>

    <script src="script.js"></script>
</body>

</html>