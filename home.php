<!DOCTYPE html>
<html>
    <title> BOSSIFY OFFICIAL </title> <!-- Page Title -->
    <head>

<!-- ===================== EXTERNAL STYLESHEET ===================== -->
<link rel="stylesheet" type="text/css" href="mystyles.css">

<!-- ===================== INTERNAL STYLES ===================== -->
<style>
    /* ===== Carousel Styles ===== */
    .carousel-container {
        position: relative;
        max-width: 100%;
        margin: auto;
        overflow: hidden;
    }
    /* ===== Slideshow Styles ===== */
    .slideshow-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        max-width: 1000px;
        position: relative;
        margin: auto;
        background: linear-gradient(135deg, #1a001a 0%, #8e24aa 40%, #ff69b4 80%, #1a001a 100%);
        border-radius: 24px;
        box-shadow: 0 4px 32px #222, 0 0 32px #ff69b4;
        padding-bottom: 32px;
    }
    .mySlides {
        display: none;
    }
    .mySlides img {
        display: block;
        margin-left: auto;
        margin-right: auto;
        max-width: 100%;
        height: auto;
        border-radius: 18px;
        box-shadow: 0 2px 16px #8e24aa;
    }
    .carousel-slide {
        display: none;
        width: 100%;
    }
    .carousel-slide img {
        width: 100%;
        height: auto;
    }
    .active {
        display: block;
    }
    /* ===== Navigation Buttons ===== */
    .prev, .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        margin-top: -22px;
        padding: 16px;
        color: #fff;
        font-weight: bold;
        font-size: 22px;
        transition: 0.6s ease;
        border-radius: 50%;
        background: linear-gradient(135deg, #8e24aa 0%, #ff69b4 100%);
        box-shadow: 0 2px 8px #222;
        border: none;
        user-select: none;
        z-index: 2;
    }
    .next {
        right: 0;
    }
    .prev {
        left: 0;
    }
    .prev:hover, .next:hover {
        background-color: #ff69b4;
        color: #fff;
        box-shadow: 0 2px 16px #ff69b4;
    }
    /* ===== Caption Styles ===== */
    .text {
        color: #fff;
        font-size: 17px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
        background: rgba(0,0,0,0.4);
        border-radius: 12px;
    }
    .numbertext {
        color: #fff;
        font-size: 13px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
        background: rgba(0,0,0,0.3);
        border-radius: 12px;
    }
    /* ===== Dots/Indicators ===== */
    .dot {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 4px;
        background: linear-gradient(135deg, #8e24aa 0%, #ff69b4 100%);
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease, box-shadow 0.3s;
        box-shadow: 0 1px 4px #222;
        border: 2px solid #fff;
    }
    .active, .dot:hover {
        background-color: #ff69b4;
        box-shadow: 0 2px 8px #ff69b4;
        border: 2px solid #8e24aa;
    }
    /* ===== Fading Animation ===== */
    .fade {
        animation-name: fade;
        animation-duration: 1.5s;
    }
    @keyframes fade {
        from {opacity: .4}
        to {opacity: 1}
    }
    /* ======= Custom Classes for Design Elements ======= */
    .bossify-font {
        font-family: 'Montserrat', 'Times New Roman', Times, serif;
        color: #fff;
    }
    .bossify-title {
        font-size: 2em;
        font-family: 'Montserrat', 'Times New Roman', Times, serif;
        color: #fff;
        text-align: center;
        letter-spacing: 2px;
        font-weight: 700;
    }
    .bossify-banner {
        background: linear-gradient(135deg, #8e24aa 0%, #ff69b4 100%);
        color: #fff;
        font-size: 1.5em;
        font-family: 'Montserrat', 'Times New Roman', Times, serif;
        border-radius: 32px;
        box-shadow: 0 4px 24px #222, 0 0 24px #ff69b4;
        padding: 32px 64px;
        text-align: center;
        max-width: 700px;
        width: 100%;
        margin: auto;
    }
    .bossify-gradient {
        background: linear-gradient(90deg, #8e24aa 0%, #ff69b4 100%);
        color: #fff;
        border-radius: 24px;
        box-shadow: 0 2px 12px #ff69b4;
    }
    .bossify-announcement-frame {
        background: #000; /* Black frame for images */
        border-radius: 24px;
        box-shadow: 0 2px 12px #444, 0 0 32px 8px #181617ff, 0 0 16px 4px #0d0d0eff;
        border: 12px solid #000; /* Black border */
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        flex-shrink: 0;
        width: 220px;
        height: 320px;
        margin: 0;
        padding: 0;
        transition: box-shadow 0.3s;
    }
    .bossify-caption-box {
        background: linear-gradient(90deg, #111111ff 0%, #3e0446ff 100%);
        color: #fff;
        border-radius: 18px;
        box-shadow: 0 2px 12px #070707ff;
        padding: 24px 0 24px 0;
        font-size: 1.2em;
        text-align: center;
        font-family: 'Montserrat', 'Times New Roman', Times, serif;
        margin-top: 12px;
        margin-bottom: 18px;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 220px;
        max-width: 220px;
        font-weight: 500;
    }
    .bossify-announcement-title {
        margin: 0 auto 18px auto;
        display: block;
        padding: 12px 48px;
        font-size: 2em;
        font-family: 'Montserrat', 'Times New Roman', Times, serif;
        letter-spacing: 2px;
        text-align: center;
        background: linear-gradient(90deg, #8e24aa 0%, #ff69b4 100%);
        color: #fff;
        border-radius: 24px;
        box-shadow: 0 2px 12px #ff69b4;
        font-weight: 700;
    }
    .bossify-section {
        width: 100vw;
        margin: 40px 0 0 0;
        background: rgba(0,0,0,0.98);
        color: #fff;
        border-radius: 0;
        box-shadow: none;
        padding: 48px 0;
        text-align: center;
        position: relative;
        margin-left: -260px;
        margin-right: auto;
        max-width: 100vw;
        display: flex;
        flex-direction: column;
        align-items: center; /* Center content horizontally */
        justify-content: center; /* Center content vertically */
        z-index: 2;
        transition: box-shadow 0.3s;
        background: linear-gradient(135deg, #8e24aa 0%, #ff69b4 100%); /* Purple-pink gradient */
        border: 2px solid #000; /* Black border */
    }
    .bossify-list {
        list-style: none;
        padding: 0;
        margin: 24px 0 0 0;
        font-size: 1.2em;
        font-family: 'Montserrat', 'Times New Roman', Times, serif;
        text-align: center;
    }
    .bossify-flex-row {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: stretch;
        gap: 32px;
        margin-top: 40px;
        width: 100%;
    }
    .bossify-flex-col {
        display: flex;
        flex-direction: column;
        align-items: center;
        flex: 1;
        min-width: 220px;
        height: 100%;
        transition: box-shadow 0.3s;
    }
    .bossify-flex-col:hover {
        box-shadow: 0 4px 24px #ff69b4;
    }
    .bossify-flex-center-col {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    .bossify-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        margin: 0;
        padding: 0;
        border-radius: 18px;
        box-shadow: 0 2px 12px #09060aff;
        transition: box-shadow 0.3s;
    }
    .bossify-img:hover {
        box-shadow: 0 8px 32px #66193fff;
    }
    .bossify-update-title {
        margin-top: 14px;
        color: #fff;
        font-size: 1em;
        text-align: center;
        font-family: 'Montserrat', 'Times New Roman', Times, serif;
        font-weight: 600;
        background: linear-gradient(90deg, #111111ff 0%, #3e0446ff 100%); /* Match caption box background */
        border-radius: 18px;
        box-shadow: 0 2px 12px #070707ff;
        padding: 8px 16px; /* Add padding for better spacing */
    }
    .bossify-title-banner {
        font-size: 2em;
        font-family: 'Montserrat', 'Times New Roman', Times, serif;
        color: #fff;
        text-align: center;
        letter-spacing: 2px;
        margin-top: 20px;
        margin-bottom: 10px;
        padding: 16px 0;
        border-radius: 16px;
        box-shadow: 0 2px 12px #ff69b4;
        font-weight: 700;
    }
    .bossify-title-banner-bg {
        font-size: 2em;
        font-family: 'Montserrat', 'Times New Roman', Times, serif;
        color: #fff;
        text-align: center;
        letter-spacing: 2px;
        margin-top: 20px;
        margin-bottom: 10px;
        padding: 16px 0;
        border-radius: 16px;
        box-shadow: 0 2px 12px #ff69b4;
        background: linear-gradient(90deg, #8e24aa 0%, #ff69b4 100%);
        font-weight: 700;
    }
    /* ======= Navigation Bar ======= */
    .navbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        background: linear-gradient(90deg, #000 0%, #8e24aa 60%, #ff69b4 100%);
        box-shadow: 0 2px 16px #ff69b4;
        padding-left: 30px;
        padding-right: 0;
        margin-bottom: 0;
        z-index: 1000;
    }
    .nav-title {
        order: 0;
        margin-right: 32px;
        font-weight: bold;
        font-family: 'Montserrat', 'Times New Roman', Times, serif;
        font-size: 1.3em;
        color: #fff;
        letter-spacing: 2px;
    }
    .nav-list {
        order: 1;
        display: flex;
        gap: 2px;
        margin: 0;
        padding: 0 10px 0 0;
        list-style: none;
    }
    .nav-list li {
        background: linear-gradient(135deg, #8e24aa 0%, #000 100%);
        color: #fff;
        padding: 10px 28px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Montserrat', 'Times New Roman', Times, serif;
        font-size: 19px;
        margin: 10px 0;
        transition: background 0.3s, color 0.3s, box-shadow 0.3s;
        box-shadow: 0 1px 6px #8e24aa;
        font-weight: 600;
        border: 2px solid #8e24aa;
    }
    .nav-list li:last-child {
        margin-right: 38px; /* Increased padding between Contact us and right edge */
    }
    .nav-list li:hover {
        background: #ff69b4;
        color: #fff;
        cursor: pointer;
        font-weight: bold;
        box-shadow: 0 2px 12px #ff69b4;
        border-color: #ff69b4;
    }
    .nav-list li a {
        color: #fff;
        text-decoration: none;
        font-weight: 600;
        letter-spacing: 1px;
    }
    /* ===================== NEW STYLES ===================== */
    html, body {
        height: 100%;
        width: 100%;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        min-height: 100vh;
        background: linear-gradient(135deg, #000 0%, #8e24aa 40%, #ff69b4 80%, #000 100%);
        font-family: 'Montserrat', 'Times New Roman', Times, serif;
    }
    .container {
        max-width: 100vw;
        min-height: 100vh;
        margin: 0;
        padding: 0 30px 30px 30px;
        box-shadow: 0 4px 24px rgba(255,0,255,0.10);
        border-radius: 18px;
        text-align: center;
        background: #1a001a;
        font-family: 'Montserrat', 'Times New Roman', Times, serif;
        padding-top: 80px;
    }
    
    .textcontent {
        background: #000; /* Black background */
        color: #fff;
        font-size: 18px;
        font-family: 'Montserrat', 'Times New Roman', Times, serif;
        border-radius: 18px;
        padding: 16px 0;
        margin-bottom: 12px; /* Reduced margin-bottom from 18px to 12px */
        margin-right: 30px;
        box-shadow: 0 2px 12px #ff69b4;
        width: 100%;
        max-width: 100vw;
        text-align: center;
        font-weight: 500;
    }
    .bossify-btn {
        background: linear-gradient(90deg, #8e24aa 0%, #ff69b4 100%);
        color: #fff;
        border: none;
        border-radius: 12px;
        padding: 12px 24px;
        font-size: 1.2em;
        font-family: 'Montserrat', 'Times New Roman', Times, serif;
        cursor: pointer;
        transition: background 0.3s ease, transform 0.3s ease, box-shadow 0.3s;
        margin: 8px 0;
        font-weight: 600;
        box-shadow: 0 2px 8px #8e24aa;
    }
    .bossify-btn:hover {
        background: #ff69b4;
        transform: translateY(-2px) scale(1.05);
        box-shadow: 0 4px 16px #ff69b4;
    }
    /* ===================== END NEW STYLES ===================== */
    /* ======= Footer ======= */
    .footer {
        background: linear-gradient(90deg, #8e24aa 0%, #ff69b4 100%);
        color: #fff;
        text-align: center;
        padding: 10px 0;
        font-size: 1em;
        font-family: 'Montserrat', 'Times New Roman', Times, serif;
        border-radius: 0 0 18px 18px;
        box-shadow: 0 -2px 12px #ff69b4;
        margin-top: 32px;
        font-weight: 600;
        letter-spacing: 1px;
        position: relative;
        bottom: 0;
        left: 0;
        width: 100%;
        margin-top: auto;
    }

        .bossify-section {
        width: 100%; /* Extend background to full width */
        margin: 40px 0; /* Adjust margin for better spacing */
        background: linear-gradient(90deg, #ff69b4 0%, #8e24aa 100%); /* Pink-purple gradient background */
        color: #fff;
        border-radius: 16px; /* Rounded corners for the section */
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.5); /* Add shadow for better contrast */
        padding: 48px 0; /* Adjust padding for better spacing */
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center; /* Center content horizontally */
        justify-content: center; /* Center content vertically */
        z-index: 2;
    }
</style>
<!-- ===================== END INTERNAL STYLES ===================== -->

<!-- ===================== MAIN CONTAINER ===================== -->
<div class="container">
    <!-- ======= Main Title Section ======= -->
    <br>
    <!-- ======= Navigation Bar ======= -->
    <nav class="navbar">
        <span class="nav-title">BOSSIFY - 10TH YEAR EDITION</span>
        <ul class="nav-list">
            <li><a href="home.php">Home</a></li>
            <li><a href="nr.php">Notes and Reviewers</a></li>
            <li><a href="au.php">About us</a></li>
            <li><a href="cu.php">Contact us</a></li>
            <li>
                <a href="login.php" class="login-btn" style="background-image: url('log.png'); background-position: center; background-repeat: no-repeat; background-size: contain; width: 50px; height: 50px; border-radius: 50%; background-color: transparent; box-shadow: none; border: none;"></a>
            </li>
        </ul>
    </nav>
    <!-- ======= Black Spacer ======= -->
    <h1 class="bossify-h1-gradient">BOSSIFY</h1>
    <!-- ======= Welcome Message ======= -->
    <div class="textcontent bossify-welcome-gradient">
        Welcome to BOSSIFY, a hub for learning.
    </div>

    <!-- ======= Main Content Section ======= -->
    <div class="content">
        <!-- === Bossy Mascot === -->
        <div style="padding-top:16px; padding-bottom:16px;"> <!-- Reduced padding-top and padding-bottom -->
            <img src="bossy.png" alt="Hi Bossy!" style="margin-top:0; margin-bottom:0;">
        </div>
        <!-- === About Section === -->
        <h2 style="margin-top:8px;">About BOSSIFY</h2> <!-- Further reduced margin-top to 8px -->
        <br>
        <!-- === Description Text === -->
  
        <p>Welcome to BOSSIFY, a hub for learning.</p>
        <p>BOSSIFY is a platform designed to provide students with a wide range of educational resources including notes, reviewers, and other materials to help them succeed in their studies.</p>
        <p>We are committed to helping everyone BOSSIFY their skills and aim for excellence at all times.</p>
        <p>We have notes and reviewers for all sectors.</p>
        <p>So, are you ready to study with Bossy?</p>
    </div>
    <!-- ======= Slideshow Heading ======= -->
    <h2 class="bossify-title-banner-bg">Let's go!
      
    </h2>
</div>
<!-- ===================== END MAIN CONTAINER ===================== -->

    <!-- ======= Slideshow Heading ======= -->
    <div class="bossify-singular-section" style="background:#000; border-radius:16px; box-shadow:0 2px 12px #222; padding:32px; text-align:center;">
    <!-- Text -->
    <h2 class="bossify-title-banner-bg" style="margin-bottom:32px;">BOSSIFY, where we excel TOGETHER.</h2>
    <!-- Slideshow -->
     <div class="slideshow-container">
        <!-- Slides for jpg/heic files 1-10 -->
        <div class="mySlides fade">
            <div class="bossify-flex-center-col">
                <div class="bossify-slideshow-frame">
                    <img src="Slideshow/1.png" class="bossify-img" style="margin:auto;">
                </div>
            </div>
        </div>
        <div class="mySlides fade">
            <div class="bossify-flex-center-col">
                <div class="bossify-slideshow-frame">
                    <img src="Slideshow/2.jpg" class="bossify-img" style="margin:auto;">
                </div>
            </div>
        </div>
        
        <div class="mySlides fade">
            <div class="bossify-flex-center-col">
                <div class="bossify-slideshow-frame">
                    <img src="Slideshow/3.jpg" class="bossify-img" style="margin:auto;">
                </div>
            </div>
        </div>
        <div class="mySlides fade">
            <div class="bossify-flex-center-col">
                <div class="bossify-slideshow-frame">
                    <img src="Slideshow/4.jpg" class="bossify-img" style="margin:auto;">
                </div>
            </div>
        </div>
        <div class="mySlides fade">
            <div class="bossify-flex-center-col">
                <div class="bossify-slideshow-frame">
                    <img src="Slideshow/5.jpg" class="bossify-img" style="margin:auto;">
                </div>
            </div>
        </div>
        <div class="mySlides fade">
            <div class="bossify-flex-center-col">
                <div class="bossify-slideshow-frame">
                    <img src="Slideshow/6.jpg" class="bossify-img" style="margin:auto;">
                </div>
            </div>
        </div>
        <div class="mySlides fade">
            <div class="bossify-flex-center-col">
                <div class="bossify-slideshow-frame">
                    <img src="Slideshow/7.jpg" class="bossify-img" style="margin:auto;">
                </div>
            </div>
        </div>
        <div class="mySlides fade">
            <div class="bossify-flex-center-col">
                <div class="bossify-slideshow-frame">
                    <img src="Slideshow/8.jpg" class="bossify-img" style="margin:auto;">
                </div>
            </div>
        </div>
        <div class="mySlides fade">
            <div class="bossify-flex-center-col">
                <div class="bossify-slideshow-frame">
                    <img src="Slideshow/9.jpg" class="bossify-img" style="margin:auto;">
                </div>
            </div>
        </div>
        <div class="mySlides fade">
            <div class="bossify-flex-center-col">
                <div class="bossify-slideshow-frame">
                    <img src="Slideshow/10.jpg" class="bossify-img" style="margin:auto;">
                </div>
            </div>
        </div>

        <!-- Arrows and dots below slideshow images -->
        <div style="text-align:center; margin-top: 18px;">
          <a class="prev" onclick="plusSlides(-1)" style="display:inline-block; position:static; margin:0 20px;">&#10094;</a>
          <span>
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
            <span class="dot" onclick="currentSlide(6)"></span>
            <span class="dot" onclick="currentSlide(7)"></span>
            <span class="dot" onclick="currentSlide(8)"></span>
            <span class="dot" onclick="currentSlide(9)"></span>
            <span class="dot" onclick="currentSlide(10)"></span>
          </span>
          <a class="next" onclick="plusSlides(1)" style="display:inline-block; position:static; margin:0 20px;">&#10095;</a>
        </div>
    </div>
    <!-- Welcome Message -->
    <div class="bossify-banner" style="margin-top:32px;">
        <h2 class="bossify-title" style="margin:0;">Welcome to BOSSIFY!</h2>
        <p class="bossify-font" style="margin:12px 0 0 0; font-size:1em; text-align:center;">Are you ready to BOSSIFY your life?</p>
    </div>
</div>
<!-- ===================== END SLIDESHOW SECTION ===================== -->

<!-- ===================== ANNOUNCEMENTS SECTION ===================== -->
<div class="bossify-section">
  <h3 class="bossify-announcement-title">ANNOUNCEMENTS!</h3>
  <ul class="bossify-list"></ul>
  <div class="bossify-flex-row" style="justify-content:center; width:100%;">
    <!-- Announcement Frames -->
    <div class="bossify-flex-col">
      <div class="bossify-announcement-frame">
        <img src="Ann/study.jpg" class="bossify-img">
      </div>
      <div class="bossify-update-title">NEO UPDATE</div>
      <div class="bossify-caption-box">Welcome to BOSSIFY Neo edition! We now have reviewers with quizizz!</div>
    </div>
    <div class="bossify-flex-col">
      <div class="bossify-announcement-frame">
        <img src="Ann/bestie.jpg" class="bossify-img">
      </div>
      <div class="bossify-update-title">VID CALL UPDATE</div>
      <div class="bossify-caption-box">We now have a video call update!</div>
    </div>
    <div class="bossify-flex-col">
      <div class="bossify-announcement-frame">
        <img src="Ann/socmed.jpg" class="bossify-img">
      </div>
      <div class="bossify-update-title">SOC MED UPDATE</div>
      <div class="bossify-caption-box">Check all our newly opened social media accounts!</div>
    </div>
  </div>
</div>
<!-- ===================== END ANNOUNCEMENTS SECTION ===================== -->

<!-- ===================== FOOTER ===================== -->
<div class="footer" style="position:relative; bottom:0; left:0; width:100%; margin-top:auto;">
    All rights reserved &copy; 2025 by Azlan Lione O. Garcia, developer of BOSSIFY.
</div>
<!-- ===================== END FOOTER ===================== -->
</div>
<!-- ===================== END FOOTER ===================== -->

<!-- ===================== SLIDESHOW SCRIPT ===================== -->
<script>
    let slideIndex = 1;
    showSlides(slideIndex);

    // Auto-advance every 5 seconds
    setInterval(function() {
        plusSlides(1);
    }, 5000);

    // ======= Slideshow Controls =======
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    // ======= Show Slides Logic =======
    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
    }
</script>


