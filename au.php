<!DOCTYPE html>
<html>
    <head>
        <title>BOSSIFY OFFICIAL</title>
        <link rel="stylesheet" type="text/css" href="mystyles.css">
        <style>
        

.au-bg-wrapper {
    position: relative;
    width: 100%;
    max-width: 90vw; /* Adjust max width for better centering */
    height: 550px; /* Fixed height for the rectangular area */
    margin: 0px auto; /* Add spacing below the navbar */
    overflow: hidden;
    box-sizing: border-box;
    box-shadow: 0 0 32px 8px rgba(255,0,128,0.6), 0 0 0 8px #ff69b4; /* Restore shadow */
    border: 8px solid #ff69b4; /* Restore border */
    border-radius: 20px; /* Rounded corners */
}

.au-bg-slideshow-img {
    position: absolute; /* Ensure proper positioning */
    top: 0;
    left: 0;
    width: 100%;
    height: 100%; /* Ensure the image fills the rectangular area */
    object-fit: cover; /* Maintain aspect ratio and fill the area */
    object-position: center center; /* Center the image */
    z-index: 0;
    opacity: 0; /* Hide all images initially */
    transition: opacity 1s ease-in-out;
    pointer-events: none;
    width: 100%;
    max-width: 90vw; /* Adjust max width for better centering */
    height: 550px; /* Fixed height for the rectangular area */
    margin: 0px auto; /* Add spacing below the navbar */
    overflow: hidden;

}

.au-bg-slideshow-img.active {
    opacity: 1; /* Display only the active image */
}

.au-bg-gradient-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 20%; /* Adjust height for the gradient overlay */
    background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent); /* Black gradient */
    z-index: 1; /* Ensure it appears above the images */
}

        .au-bg-title {
            position: absolute;
            left: 50%; /* Center horizontally */
            bottom: 10%; /* Move text lower */
            transform: translateX(-50%); /* Adjust for centering */
            z-index: 2;
            color: #fff;
            font-size: 3.5em;
            font-family: 'Montserrat', 'Times New Roman', Times, serif;
            text-align: center;
            margin: 0;
            padding: 0;
            letter-spacing: 2px;
            text-shadow: 0 2px 24px #000, 0 0 8px #ff69b4;
            background: none !important; /* Remove background */
        }

        img[src*='devs/'] {
            border-radius: 50%;
            border: 4px solid #ff69b4;
            box-shadow: 0 0 16px 4px rgba(255,0,128,0.5);
            object-fit: cover;
            width: 120px;
            height: 120px;
            margin: 0;
            aspect-ratio: 1 / 1;
            box-sizing: border-box;
            padding: 0 !important;
        }

        img[src*='devs/Instagram.jpg'] {
            border-radius: 16px; /* Rounded corners */
            border: 4px solid;
            border-image: linear-gradient(to right, purple, pink, yellow) 1; /* Gradient border */
            box-shadow: 0 0 16px 4px rgba(255, 0, 128, 0.5);
            object-fit: cover;
            width: 120px;
            height: 120px;
            margin: 0;
            aspect-ratio: 1 / 1;
            box-sizing: border-box;
            padding: 0 !important;
        }

        img[src*='devs/TikTok.jpg'] {
            border-radius: 16px; /* Rounded corners */
            border: 4px solid;
            border-image: linear-gradient(to right, red, cyan, white) 1; /* Gradient border */
            box-shadow: 0 0 16px 4px rgba(255, 0, 128, 0.5);
            object-fit: cover;
            width: 120px;
            height: 120px;
            margin: 0;
            aspect-ratio: 1 / 1;
            box-sizing: border-box;
            padding: 0 !important;
        }

        .bossify-h1-gradient {
            background: linear-gradient(90deg, #8e24aa 0%, #ff69b4 100%);
            color: #fff;
            padding: 32px 0 24px 0;
            border-radius: 32px;
            box-shadow: 0 4px 24px #ff69b4;
            text-align: center;
            font-size: 3em;
            font-family: 'Montserrat', 'Times New Roman', Times, serif;
            letter-spacing: 3px;
            margin: 48px 0 18px 0;
            width: 100%;
            max-width: 100vw;
            font-weight: 800;
        }

        .container {
            /* ...existing styles... */
            padding-top: 80px; /* Add padding between the navbar and the border */
        }

            @keyframes fade {
    from {opacity: 0.4;}
    to {opacity: 1;}
}
        .history-slideshow-container {
    margin-top: 48px;
    width: 100vw;
    position: relative;
    left: 50%; /* Center the slideshow */
    transform: translateX(-50%);
    background: linear-gradient(90deg, #8e24aa 0%, #ff69b4 100%);
    padding: 48px 0;
    border-radius: 16px; /* Add rounded corners */
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.3); /* Add shadow for depth */
    overflow: hidden;
}

.history-slideshow {
    position: relative;
    max-width: 800px;
    margin: 0 auto;
    overflow: hidden;
    border-left: 8px solid #ff69b4; /* Adjusted to fit image height */
    border-right: 8px solid #ff69b4; /* Adjusted to fit image height */
    border-top: 8px solid #ff69b4; /* Added top border */
    border-bottom: 8px solid #ff69b4; /* Added bottom border */
    border-radius: 16px; /* Match container's rounded corners */
    box-sizing: border-box; /* Ensure borders are included in dimensions */
}

.history-slide {
    display: none;
    animation: fade 1.5s ease-in-out;
    text-align: center; /* Center-align content */
}

.history-slide img {
    display: block;
    width: calc(100% - 16px); /* Adjust width to account for borders */
    height: auto; /* Maintain aspect ratio */
    border-radius: 8px; /* Slightly smaller radius to fit inside borders */
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.2); /* Add shadow for depth */
    transition: transform 0.5s ease; /* Smooth zoom effect */
    margin: 8px; /* Add margin to fit within the borders */
}

.history-slide img:hover {
    transform: scale(1.05); /* Slight zoom on hover */
}

.history-caption-container {
    margin-top: 16px;
    text-align: center;
    font-family: 'Montserrat', 'Times New Roman', Times, serif;
    font-size: 1.1em;
    color: #fff;
    background: rgba(0, 0, 0, 0.8); /* Semi-transparent background */
    border-radius: 16px;
    padding: 16px;
    max-width: 800px;
    margin-left: auto;
    margin-right: auto;
    box-shadow: 0 2px 12px #ff69b4;
    transition: background 0.3s ease; /* Smooth background transition */
}

.history-caption-container:hover {
    background: rgba(0, 0, 0, 0.9); /* Darker background on hover */
}

.history-dots {
    text-align: center;
    margin-top: 16px;
}

.history-dots .dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 4px;
    background: #fff;
    border-radius: 50%;
    display: inline-block;
    transition: transform 0.3s ease, background 0.3s ease; /* Smooth hover effect */
}

.history-dots .dot:hover {
    transform: scale(1.2); /* Enlarge dot on hover */
    background: #ff69b4; /* Change color on hover */
}

.history-dots .dot.active {
    background: #ff69b4; /* Highlight active dot */
}

/* Animation Keyframes */
@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

@keyframes slideInFromTop {
    from {
        transform: translateY(-100%);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

@keyframes slideInFromBottom {
    from {
        transform: translateY(100%);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

@keyframes bounceIn {
    from {
        transform: scale(0.8);
        opacity: 0;
    }
    to {
        transform: scale(1);
        opacity: 1;
    }
}

/* Apply Animations */
.navbar {
    animation: slideInFromTop 1s ease-in-out;
    margin-bottom: 30px; /* Added padding below the navbar */
}

.au-bg-title {
    animation: fadeIn 1.5s ease-in-out;
}

.devs-item img {
    animation: bounceIn 2s ease-in-out;
}

.history-slideshow-container {
    animation: slideInFromBottom 1.5s ease-in-out;
}

.footer {
    animation: fadeIn 2s ease-in-out;
    position: static; /* Ensure footer is at the bottom-most part */
    margin-top: 40px; /* Added spacing above the footer */
}

html, body {
    margin-right: 0; /* Removed right margin globally */
}

.textcontent {
    margin-right: 0; /* Removed right margin from text content */
}
        </style>
    </head>
    <body>
        <div class="container">
            <br>
            <!-- Navbar -->
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
            <!-- Main title -->
            <div class="au-bg-wrapper">
                <!-- Slideshow container -->
                <div class="au-bg-slideshow">
                    <img src="Au/1.jpg" class="au-bg-slideshow-img active" alt="About Slide 1">
                    <img src="Au/2.jpg" class="au-bg-slideshow-img" alt="About Slide 2">
                    <img src="Au/3.jpg" class="au-bg-slideshow-img" alt="About Slide 3">
                    <img src="Au/4.jpg" class="au-bg-slideshow-img" alt="About Slide 4">
                    <img src="Au/5.jpg" class="au-bg-slideshow-img" alt="About Slide 5">
                </div>
                <div class="au-bg-gradient-overlay"></div> <!-- Gradient overlay -->
                <h1 class="au-bg-title">ABOUT US</h1>
            </div>
            <script>
                // Restore slideshow functionality
                let aubgSlides = document.querySelectorAll('.au-bg-slideshow-img');
                let aubgIndex = 0;
                aubgSlides[aubgIndex].classList.add('active'); // Ensure the first image is displayed initially
                setInterval(function () {
                    aubgSlides[aubgIndex].classList.remove('active');
                    aubgIndex = (aubgIndex + 1) % aubgSlides.length;
                    aubgSlides[aubgIndex].classList.add('active');
                }, 5000); // Change every 5 seconds
            </script>
            <!-- MEET THE TEAM under bossify-h1-gradient -->
            <div class="bossify-h1-gradient" style="margin-bottom:0;">
                <span class="meet-team-title">MEET THE TEAM!</span>
            </div>
            <!-- Main content -->
            <div class="content">
                <div class="devs-grid" style="display:flex; flex-direction:row; justify-content:center; align-items:center; gap:48px;">
                    <!-- Left devs: 2 top, 2 bottom -->
                    <div class="devs-col" style="display:flex; flex-direction:column; gap:32px;">
                        <div class="devs-row devs-row-top" style="display:flex; flex-direction:row; gap:32px;">
                            <!-- Top left 2 -->
                            <div class="devs-item">
                                <!-- ...Azzy image and label... -->
                                <div style="width:180px;height:180px;overflow:hidden;display:flex;align-items:center;justify-content:center;border-radius:50%;border:5px solid #ff69b4;box-shadow:0 0 24px 6px rgba(255,0,128,0.5);background:#222;">
                                    <img src="devs/Azzy.jpg" alt="Azzy" style="width:auto;height:auto;max-width:100%;max-height:100%;object-fit:cover;border-radius:50%;">
                                </div>
                                <div style="margin-top:12px;color:#fff;font-size:1.15em;text-align:center;">Azzy (Developer)</div>
                            </div>
                            <div class="devs-item">
                                <!-- ...Ant image and label... -->
                                <div style="width:180px;height:180px;overflow:hidden;display:flex;align-items:center;justify-content:center;border-radius:50%;border:5px solid #ff69b4;box-shadow:0 0 24px 6px rgba(255,0,128,0.5);background:#222;">
                                    <img src="devs/Ant.jpg" alt="Ant" style="width:auto;height:auto;max-width:100%;max-height:100%;object-fit:cover;border-radius:50%;">
                                </div>
                                <div style="margin-top:12px;color:#fff;font-size:1.15em;text-align:center;">Marcus (Typer)</div>
                            </div>
                        </div>
                        <div class="devs-row devs-row-bottom" style="display:flex; flex-direction:row; gap:32px;">
                            <!-- Bottom left 2 -->
                            <div class="devs-item">
                                <!-- ...Bebe image and label... -->
                                <div style="width:180px;height:180px;overflow:hidden;display:flex;align-items:center;justify-content:center;border-radius:50%;border:5px solid #ff69b4;box-shadow:0 0 24px 6px rgba(255,0,128,0.5);background:#222;">
                                    <img src="devs/Bebe.jpg" alt="Bebe" style="width:auto;height:auto;max-width:100%;max-height:100%;object-fit:cover;border-radius:50%;">
                                </div>
                                <div style="margin-top:12px;color:#fff;font-size:1.15em;text-align:center;">Caleb (Mathematics)</div>
                            </div>
                            <div class="devs-item">
                                <!-- ...Clara image and label... -->
                                <div style="width:180px;height:180px;overflow:hidden;display:flex;align-items:center;justify-content:center;border-radius:50%;border:5px solid #ff69b4;box-shadow:0 0 24px 6px rgba(255,0,128,0.5);background:#222;">
                                    <img src="devs/Clara.jpg" alt="Clara" style="width:auto;height:auto;max-width:100%;max-height:100%;object-fit:cover;border-radius:50%;">
                                </div>
                                <div style="margin-top:12px;color:#fff;font-size:1.15em;text-align:center;">Claire (All-rounder)</div>
                            </div>
                        </div>
                    </div>
                    <!-- Bossy in the middle -->
                    <div class="bossy-center" style="display:flex; flex-direction:column; align-items:center; justify-content:center;">
                        <div class="bossy-item">
                            <div style="width:320px;height:320px;overflow:hidden;display:flex;align-items:center;justify-content:center;border-radius:32px;">
                                <img src="bossy.png" alt="Hi Bossy!" style="width:100%; height:100%; object-fit:cover; border-radius:32px; padding:0 !important; margin:0 !important;">
                            </div>
                            <div style="margin-top:18px;color:#fff;font-size:1.5em;text-align:center;font-weight:bold;">Bossy</div>
                        </div>
                    </div>
                    <!-- Right devs: 2 top, 2 bottom -->
                    <div class="devs-col" style="display:flex; flex-direction:column; gap:32px;">
                        <div class="devs-row devs-row-top" style="display:flex; flex-direction:row; gap:32px;">
                            <!-- Top right 2 -->
                            <div class="devs-item">
                                <!-- ...Nell image and label... -->
                                <div style="width:180px;height:180px;overflow:hidden;display:flex;align-items:center;justify-content:center;border-radius:50%;border:5px solid #ff69b4;box-shadow:0 0 24px 6px rgba(255,0,128,0.5);background:#222;">
                                    <img src="devs/Nell.jpeg" alt="Nell" style="width:auto;height:auto;max-width:100%;max-height:100%;object-fit:cover;border-radius:50%;">
                                </div>
                                <div style="margin-top:12px;color:#fff;font-size:1.15em;text-align:center;">Janelle (CL)</div>
                            </div>
                            <div class="devs-item">
                                <!-- ...Kiffy image and label... -->
                                <div style="width:180px;height:180px;overflow:hidden;display:flex;align-items:center;justify-content:center;border-radius:50%;border:5px solid #ff69b4;box-shadow:0 0 24px 6px rgba(255,0,128,0.5);background:#222;">
                                    <img src="devs/Kiffy.jpeg" alt="Kiffy" style="width:auto;height:auto;max-width:100%;max-height:100%;object-fit:cover;border-radius:50%;">
                                </div>
                                <div style="margin-top:12px;color:#fff;font-size:1.15em;text-align:center;">Charlize (Science)</div>
                            </div>
                        </div>
                        <div class="devs-row devs-row-bottom" style="display:flex; flex-direction:row; gap:32px;">
                            <!-- Bottom right 2 -->
                            <div class="devs-item">
                                <!-- ...Choy image and label... -->
                                <div style="width:180px;height:180px;overflow:hidden;display:flex;align-items:center;justify-content:center;border-radius:50%;border:5px solid #ff69b4;box-shadow:0 0 24px 6px rgba(255,0,128,0.5);background:#222;">
                                    <img src="devs/Choy.jpg" alt="Choy" style="width:auto;height:auto;max-width:100%;max-height:100%;object-fit:cover;border-radius:50%;">
                                </div>
                                <div style="margin-top:12px;color:#fff;font-size:1.15em;text-align:center;">Rycroft (Notes)</div>
                            </div>
                            <div class="devs-item">
                                <!-- ...RJ image and label... -->
                                <div style="width:180px;height:180px;overflow:hidden;display:flex;align-items:center;justify-content:center;border-radius:50%;border:5px solid #ff69b4;box-shadow:0 0 24px 6px rgba(255,0,128,0.5);background:#222;">
                                    <img src="devs/RJ.png" alt="RJ" style="width:auto;height:auto;max-width:100%;max-height:100%;object-fit:cover;border-radius:50%;">
                                </div>
                                <div style="margin-top:12px;color:#fff;font-size:1.15em;text-align:center;">RJ (TLE)</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Text -->
                <p> Meet the Developers! </p>
                <p> BOSSIFY is a platform designed to provide students with a wide range of educational resources including notes, reviewers, and other materials to help them succeed in their studies. </p>
                <p> A mission which would not be possible without this incredible team for the 10th grade. We are also looking for new members to join us! </p>   

                 <!-- THE HISTORY OF BOSSIFY SECTION -->
                <div class="history-slideshow-container">
    <h2 style="background: linear-gradient(90deg, #111 0%, #8e24aa 100%); color:#fff; border-radius:24px; box-shadow:0 2px 12px #ff69b4; padding:18px 0; text-align:center; font-size:2em; font-family:'Montserrat', 'Times New Roman', Times, serif; margin-bottom:32px;">
        THE HISTORY OF BOSSIFY
    </h2>
    <div class="history-slideshow">
        <!-- Slide 1 -->
        <div class="history-slide">
            <img src="Au/history/H1.png" alt="Bossify History 1">
        </div>
        <!-- Slide 2 -->
        <div class="history-slide">
            <img src="Au/history/H2.png" alt="Bossify History 2">
        </div>
        <!-- Slide 3 -->
        <div class="history-slide">
            <img src="Au/history/H3.png" alt="Bossify History 3">
        </div>
        <!-- Slide 4 -->
        <div class="history-slide">
            <img src="Au/history/H4.png" alt="Bossify History 4">
        </div>
    </div>
    <div class="history-caption-container" id="history-caption">
        <!-- Caption will be dynamically updated here -->
    </div>
    <div class="history-dots">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
    </div>
</div>

<script>
let slideIndex = 0;
const captions = [
    "Bossify began as a solo project in 2022, aiming to help just classmates with notes and reviewers.",
    "In 2023, Bossify expanded its reach, adding more subjects and interactive content.",
    "A team was formed in 2024, launching Bossify's first official professional website.",
    "Today, Bossify continues to innovate, supporting students everywhere."
];

showSlides();

function showSlides() {
    let slides = document.getElementsByClassName("history-slide");
    let dots = document.getElementsByClassName("dot");
    let captionContainer = document.getElementById("history-caption");
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1;}
    for (let i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    captionContainer.innerHTML = captions[slideIndex - 1];
    dots[slideIndex - 1].className += " active";
    setTimeout(showSlides, 10000); // Change slide every 10 seconds
}

function currentSlide(n) {
    slideIndex = n - 1;
    showSlides();
}
</script>
                <!-- END HISTORY SECTION -->
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            All rights reserved &copy; 2025 by Azlan Lione O. Garcia developer of BOSSIFY.
        </div>

        <!-- Credits Section -->
        <div style="background: #000; text-align: center; padding: 40px 0; font-size: 1.2em; font-family: 'Montserrat', 'Times New Roman', Times, serif; font-weight: bold; text-transform: uppercase; letter-spacing: 1px; margin-top: 20px; line-height: 1.8; min-height: 100px;">
    <span style="background: linear-gradient(90deg, #8e24aa, #ff69b4); -webkit-background-clip: text; -webkit-text-fill-color: transparent; display: inline-block; font-size: 1.5em; font-weight: 800; margin-bottom: 12px;">
        Special Thanks To:
    </span>
    <br>
    <span style="color: #fff;">BOSSIFY Team</span><br>
    <span style="color: #fff;">James Montoya</span><br>
    <span style="color: #fff;">Aki Olalia</span><br>
    <span style="color: #fff;">Emman Anasco</span><br>
    <span style="color: #fff;">To my teachers, friends, and DBA family</span>
</div>
<div style="background: #000; height: 100px;"></div> <!-- Extend to bottom -->
        <!-- Scripts for slideshow -->
        <script>
            // Simple slideshow for .au-bg-slideshow-img
            let auSlides = document.querySelectorAll('.au-bg-slideshow-img');
            let auIndex = 0;
            setInterval(function () {
                aubgSlides[auIndex].classList.remove('active');
                auIndex = (auIndex + 1) % aubgSlides.length;
                aubgSlides[auIndex].classList.add('active');
            }, 5000); // Change every 5 seconds
</script>

        
    </body>
</html>

        
    </body>
</html>
