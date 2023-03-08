<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Univercity</title>
    <meta content="" name="description">
    <meta content="" name="keywords">


    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center">
        <div class="container" data-aos="zoom-in" data-aos-delay="100">
            <h1>กรุณาเลือกวันที่ เช่น : <span class="typed" data-typed-items="30/05/2022"></span></h1><br><br>
            <form method="GET" action="Controller/runFunction.php" enctype="multipart/form-data">
                <div class="form-group">
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="Date" id="Date" required>
                        <option value="" disabled selected hidden>เลือกวันที่ท่านต้องการ</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>

                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="Month" id="Month" required>
                        <option value="" disabled selected hidden>เลือกเดือนที่ท่านต้องการ</option>
                        <option value="01">มกราคม</option>
                        <option value="02">กุมภาพันธ์</option>
                        <option value="03">มีนาคม</option>
                        <option value="04">เมษายน</option>
                        <option value="05">พฤษภาคม</option>
                        <option value="06">มิถุนายน</option>
                        <option value="07">กรกฎาคม</option>
                        <option value="08">สิงหาคม</option>
                        <option value="09">กันยายน</option>
                        <option value="10">ตุลาคม</option>
                        <option value="11">พฤศจิกายน</option>
                        <option value="12">ธันวาคม</option>
                    </select>

                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="Year" id="Year" required>
                        <option value="" disabled selected hidden>เลือกปีที่ท่านต้องการ</option>
                        <option value="2023">2023</option>
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                    </select>

                    <nav id="navbar" class="navbar nav-menu">
                        <ul>
                            <br><br>
                            <center>
                                <li><a href="#about" class="nav-link scrollto active"><i class="bi bi-arrow-right-circle-fill"></i> <span>NEXT</span></a></li>
                            </center>
                        </ul>
                    </nav>
                </div>
    </section><!-- End Hero -->


    <!-- ======= About Section ======= -->
    <section id="about" class="d-flex flex-column justify-content-center">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://pngfreely.com/wp-content/uploads/2021/09/%E0%B8%AB%E0%B8%99%E0%B8%B1%E0%B8%87%E0%B8%AA%E0%B8%B7%E0%B8%AD-Png-Open-Book-Cartoon-Icon-%E0%B9%84%E0%B8%AD%E0%B8%84%E0%B8%AD%E0%B8%99-%E0%B9%80%E0%B8%9B%E0%B8%B4%E0%B8%94%E0%B8%AB%E0%B8%99%E0%B8%B1%E0%B8%87%E0%B8%AA%E0%B8%B7%E0%B8%AD-%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B9%8C%E0%B8%95%E0%B8%B9%E0%B8%99.png" class="img-fluid" alt="Sample image" width="1000" height="1000">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <div class="container" data-aos="zoom-in" data-aos-delay="100">
                        <center>
                            <h2>ตรวจสอบผลการเรียนของคุณ</h2>
                        </center><br><br>
                    </div>
                    <form>
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example3">เลือกวิชาที่ต้องการ</label>
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="class" id="class" required>
                                <option value="" disabled selected hidden>เลือกวิชาที่ท่านต้องการ</option>
                                <option value="วิศวะกรรมพื้นฐาน">วิศวะกรรมพื้นฐาน</option>
                                <option value="คณิตศาสตร์พื้นฐาน">คณิตศาสตร์พื้นฐาน</option>
                                <option value="ออกแบบดิจิทัล">ออกแบบดิจิทัล</option>
                            </select>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="form3Example4">คะแนนที่คุณได้รับ</label>
                            <input type="number" id="grade" name="grade" class="form-control form-control-lg" placeholder="ระบุคะแนนของคุณ เช่น 99" required>
                        </div>


                        <div class="text-center text-lg-start mt-4 pt-2">
                            <center><button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">ดำเนินการต่อไป</button></center>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>


    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>Welcome to Website</h3>
            <p>My name is Supphalak Maneepanpanit 644259034 64/45 Major : SoftwareEnginearing.</p>
            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>MyFunction</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: [license-url] -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/ -->
                Designed by <a href="https://npru.ac.th/index.php" target="_blank">NPRU</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>