<!DOCTYPE html>
<html>
    <title> BOSSIFY OFFICIAL </title> <!-- Page Title -->
    <head>

<link rel="stylesheet" type="text/css" href="mystyles.css">

    <style>
    body {
        font-family: 'Montserrat', sans-serif;
        background: linear-gradient(135deg, #8e24aa 0%, #ff69b4 100%);
        color: #fff;
        margin: 0;
        padding: 0;
        overflow-x: hidden;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    .h1 {
        text-align: center;
        font-size: 3.5em;
        margin-bottom: 20px;
        text-shadow: 0 4px 12px rgba(0, 0, 0, 0.5);
        color: #e7d6deff;
        animation: fadeIn 2s ease-in-out;
    }

    .textcontent {
        text-align: center;
        font-size: 1.3em;
        margin-bottom: 40px;
        color: #f1f1f1;
        animation: fadeIn 2s ease-in-out;
    }

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
        margin-bottom: 40px;
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
.social-media-sections {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-template-rows: 1fr 1fr;
        gap: 32px;
        justify-items: center;
        align-items: center;
        margin-top: 48px;
    }

    .social-section {
        width: 300px;
        text-align: center;
        background: linear-gradient(to bottom, #6a1b9a, #ff69b4);
        border-radius: 16px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.5);
        padding: 16px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        animation: fadeInUp 1.5s ease-in-out;
    }

    .social-section:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.7);
    }

    .social-section h2 {
        font-size: 1.6em;
        margin-bottom: 16px;
        color: #fff;
    }

    .social-section img {
        width: 100%;
        height: 150px;
        object-fit: cover;
        border-radius: 16px;
        margin-bottom: 16px;
        padding: 5px; /* Added padding between the gradient background and the border */
        background: linear-gradient(to bottom, #6a1b9a, #ff69b4); /* Gradient background */
    }

    .social-section p {
        font-size: 1em;
        color: #f1f1f1;
        margin-bottom: 16px;
    }

    .social-section .video-container {
        display: flex;
        gap: 8px;
        justify-content: center;
    }

    .social-section .video-container div {
        width: 80px;
        height: 120px;
        background: #000;
        border-radius: 8px;
        overflow: hidden;
    }

    .footer {
        text-align: center;
        margin-top: 40px;
        padding: 20px;
        background: rgba(0, 0, 0, 0.8);
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.5);
        color: #fff;
        animation: fadeIn 2s ease-in-out;
    }

    .bottom-bar {
        position: fixed;
        bottom: 0;
        width: 100%;
        background: rgba(0, 0, 0, 0.9);
        color: #fff;
        text-align: center;
        padding: 10px 0;
        font-size: 1.2em;
        box-shadow: 0 -2px 8px rgba(0, 0, 0, 0.5);
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    @keyframes slideIn {
        from {
            transform: translateY(-50px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    @keyframes fadeInUp {
        from {
            transform: translateY(20px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

form input[type="text"], 
form input[type="email"], 
form select, 
form textarea, 
form button {
    padding: 10px 20px; /* Added padding to left and right */
    border-radius: 8px; /* Maintain rounded corners */
    font-size: 16px; /* Maintain font size */
    box-shadow: 0 0 8px #ff69b4; /* Maintain shadow */
    margin: 0; /* Removed all margins, including right margin */
    margin-right: 0 !important; /* Forcefully removed right margin */
}

form textarea {
    height: 100px; /* Maintain height for textarea */
}

form button {
    padding: 10px 20px; /* Added padding to left and right */
}

.video-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    background: rgba(0, 0, 0, 0.8); /* Black transparent background */
    display: none; /* Hidden by default */
    justify-content: center;
    align-items: center;
    z-index: 10000;
}

.video-overlay video {
    max-width: 90%;
    max-height: 80%;
    border-radius: 16px;
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.5), 0 0 16px 4px #ff69b4; /* Pink glow border */
}

.video-overlay .close-button {
    position: absolute;
    top: 20px;
    right: 20px;
    background: #ff69b4;
    color: #fff;
    border: none;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    font-size: 1.5em;
    font-weight: bold;
    text-align: center;
    line-height: 40px;
    cursor: pointer;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.5);
    transition: background 0.3s ease;
}

.video-overlay .close-button:hover {
    background: #ff4081;
}

.video-overlay .nav-button {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: #ff69b4;
    color: #fff;
    border: none;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    font-size: 1.5em;
    font-weight: bold;
    text-align: center;
    line-height: 50px;
    cursor: pointer;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.5);
    transition: background 0.3s ease;
    z-index: 10001;
}

.video-overlay .nav-button:hover {
    background: #ff4081;
}

.video-overlay .nav-button.left {
    left: 20px;
}

.video-overlay .nav-button.right {
    right: 20px;
}
    
    </style>

<body>
    <div class="container">
        <br>
        <!-- Main title -->
        <h1 class="h1">CONTACT US</h1>
        <!-- Welcome -->
        <div class="textcontent">Need any help? Have queries or suggestions? Feel free to reach out to us!</div>

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

        <!-- Social Media Sections -->
        <div class="social-media-sections">
            <!-- YouTube Section -->
            <div class="social-section youtube">
                <h2>YouTube</h2>
                <img src="Cu/Ey.jpg" alt="YouTube Thumbnail" style="display: block; margin: 0 auto; width: 100%; height: 150px; object-fit: cover; border: 4px solid #ff0000; border-radius: 16px; margin-bottom: 16px;padding-left: 0px;padding-right: 0px;padding-bottom: 0px;padding-top: 0px;">
                <button style="background: #ff0000; color: #fff; border: none; padding: 10px 20px; border-radius: 8px; cursor: pointer; font-size: 1em; margin-top: 16px; font-family: 'Times New Roman', Times, serif;">
                    <a href="https://www.youtube.com/@Bossify_Official" style="text-decoration: none; color: #fff;">Visit Channel</a>
                </button>
                <div class="video-container" style="margin-top: 16px;">
                    <div>
                        <video width="100%" height="100%" autoplay muted loop style="border-radius: 16px; object-fit: cover;">
                            <source src="Cu/LJ.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div>
                        <video width="100%" height="100%" autoplay muted loop style="border-radius: 16px; object-fit: cover;">
                            <source src="Cu/GAB.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>

            <!-- TikTok Section -->
            <div class="social-section tiktok">
                <h2>TikTok</h2>
                <img src="Cu/Tt.jpg" alt="TikTok Thumbnail" style="display: block; margin: 0 auto; width: 100%; height: 150px; object-fit: cover; border: 4px solid #11a4c9ff; border-radius: 16px; margin-bottom: 16px;padding-left: 0px;padding-right: 0px;padding-bottom: 0px;padding-top: 0px;">
                <button style="background: #11a4c9; color: #fff; border: none; padding: 10px 20px; border-radius: 8px; cursor: pointer; font-size: 1em; margin-top: 16px; font-family: 'Times New Roman', Times, serif;">
                    <a href="https://www.tiktok.com/@bossify_official?lang=en" style="text-decoration: none; color: #fff;">Visit Profile</a>
                </button>
                <div class="video-container" style="margin-top: 16px;">
                    <div>
                        <video width="100%" height="100%" autoplay muted loop style="border-radius: 16px; object-fit: cover;">
                            <source src="Cu/Ez.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div>
                        <video width="100%" height="100%" autoplay muted loop style="border-radius: 16px; object-fit: cover;">
                            <source src="Cu/Br.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>

            <!-- Instagram Section -->
            <div class="social-section instagram">
                <h2>Instagram</h2>
                <img src="Cu/Ig.jpg" alt="Instagram Thumbnail" style="display: block; margin: 0 auto; width: 100%; height: 150px; object-fit: cover; border: 4px solid #eedf0bff; border-radius: 16px; margin-bottom: 16px;padding-left: 0px;padding-right: 0px;padding-bottom: 0px;padding-top: 0px;">
            <button style= "border-image:linear-gradient(to right, purple, pink, yellow) 1; border: none; padding: 10px 20px; border-radius: 8px; cursor: pointer; font-size: 1em; margin-top: 16px; font-family: 'Times New Roman', Times, serif;">                    <a href="https://www.instagram.com/bossify.official/" style="text-decoration: none; color: #000;">Visit Profile</a>
                </button>
                <div class="video-container" style="margin-top: 16px;">
                    <div>
                        <video width="100%" height="100%" autoplay muted loop style="border-radius: 16px; object-fit: cover;">
                            <source src="Cu/ML.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div>
                        <video width="100%" height="100%" autoplay muted loop style="border-radius: 16px; object-fit: cover;">
                            <source src="Cu/DAM.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>

            <!-- Facebook Section -->
            <div class="social-section facebook">
                <h2>Facebook</h2>
                <img src="Cu/Fb.jpg" alt="Facebook Thumbnail" style="display: block; margin: 0 auto; width: 100%; height: 150px; object-fit: cover; border: 4px solid #1877f2; border-radius: 16px; margin-bottom: 16px;padding-left: 0px;padding-right: 0px;padding-bottom: 0px;padding-top: 0px;">
                <button style="background: #1877f2; color: #fff; border: none; padding: 10px 20px; border-radius: 8px; cursor: pointer; font-size: 1em; margin-top: 16px; font-family: 'Times New Roman', Times, serif;">
                    <a href="https://www.facebook.com/people/Bossifyofficial/61566710303891/#" style="text-decoration: none; color: #fff;">Visit Page</a>
                </button>
                <div class="video-container" style="margin-top: 16px;">
                    <div>
                        <video width="100%" height="100%" autoplay muted loop style="border-radius: 16px; object-fit: cover;">
                            <source src="Cu/To.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div>
                        <video width="100%" height="100%" autoplay muted loop style="border-radius: 16px; object-fit: cover;">
                            <source src="Cu/Uy.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Us Section -->
    <div style="background: #000; color: #fff; padding: 20px; text-align: center; margin-top: 20px;">
        <h2 style="font-family: 'Times New Roman', Times, serif; margin-bottom: 20px;">Any Queries? CONTACT US!</h2>
        <form action="process_contact.php" method="POST" style="max-width: 600px; margin: auto; display: flex; flex-direction: column; gap: 12px;">
            <input type="text" name="full_name" placeholder="Full Name" required style="padding: 10px 20px; border-radius: 8px; border: 2px solid #ff69b4; background: #000; color: #fff; font-size: 16px; font-family: 'Times New Roman', Times, serif; box-shadow: 0 0 8px #ff69b4;">
            <input type="email" name="email" placeholder="Email Address" required style="padding: 10px 20px; border-radius: 8px; border: 2px solid #ff69b4; background: #000; color: #fff; font-size: 16px; font-family: 'Times New Roman', Times, serif; box-shadow: 0 0 8px #ff69b4;">
            <select name="grade" required style="padding: 10px 20px; border-radius: 8px; border: 2px solid #ff69b4; background: #000; color: #fff; font-size: 16px; font-family: 'Times New Roman', Times, serif; box-shadow: 0 0 8px #ff69b4;">
                <option value="" disabled selected>Select Grade</option>
                <option value="Grade 7">Grade 7</option>
                <option value="Grade 8">Grade 8</option>
                <option value="Grade 9">Grade 9</option>
                <option value="Grade 10">Grade 10</option>
            </select>
            <select name="section" required style="padding: 10px 20px; border-radius: 8px; border: 2px solid #ff69b4; background: #000; color: #fff; font-size: 16px; font-family: 'Times New Roman', Times, serif; box-shadow: 0 0 8px #ff69b4;">
                <option value="" disabled selected>Select Section</option>
                <option value="CALASANZ">CALASANZ</option>
                <option value="CZARTORYSKI">CZARTORYSKI</option>
                <option value="RINALDI">RINALDI</option>
                <option value="SANDOR">SANDOR</option>
            </select>
            <textarea name="message" placeholder="Your Message" required style="padding: 10px 20px; border-radius: 8px; border: 2px solid #ff69b4; background: #000; color: #fff; font-size: 16px; font-family: 'Times New Roman', Times, serif; box-shadow: 0 0 8px #ff69b4; height: 100px;"></textarea>
            <button type="submit" style="background: linear-gradient(135deg, #8e24aa 0%, #ff69b4 100%); color: #fff; border: none; padding: 10px 20px; border-radius: 8px; font-size: 16px; font-family: 'Times New Roman', Times, serif; cursor: pointer;">Submit</button>
        </form>
    </div>

    <!-- Bottom Bar -->
    <div class="bottom-bar" style="position: static; margin-top: 20px; font-family: 'Times New Roman', Times, serif;"> <!-- Adjusted font to Times New Roman -->
        Contact us: 09178560313
    </div>

    <!-- Footer -->
    <div class="footer" style="position: static; margin-top: 20px;"> <!-- Adjusted position to static -->
        All rights reserved &copy; 2025 by Azlan Lione O. Garcia developer of BOSSIFY.
    </div>

    <div class="video-overlay" id="videoOverlay">
        <button class="close-button" onclick="closeVideo()">×</button>
        <button class="nav-button left" onclick="switchVideo(-1)">‹</button>
        <video id="fullscreenVideo" controls></video>
        <button class="nav-button right" onclick="switchVideo(1)">›</button>
    </div>
    <script>
let slideIndex = 0;
const videoSources = [
    "Cu/LJ.mp4",
    "Cu/GAB.mp4",
    "Cu/Ez.mp4",
    "Cu/Br.mp4",
    "Cu/ML.mp4",
    "Cu/DAM.mp4",
    "Cu/To.mp4",
    "Cu/Uy.mp4"
];

// Function to open video in fullscreen mode
function openVideo(videoSrc) {
    const videoOverlay = document.getElementById('videoOverlay');
    const fullscreenVideo = document.getElementById('fullscreenVideo');
    slideIndex = videoSources.indexOf(videoSrc); // Set the current video index
    fullscreenVideo.src = videoSrc;
    videoOverlay.style.display = 'flex'; // Show the overlay
}

// Function to close the fullscreen video
function closeVideo() {
    const videoOverlay = document.getElementById('videoOverlay');
    const fullscreenVideo = document.getElementById('fullscreenVideo');
    fullscreenVideo.pause(); // Pause the video
    fullscreenVideo.src = ''; // Clear the video source
    videoOverlay.style.display = 'none'; // Hide the overlay
}

// Function to switch between videos
function switchVideo(direction) {
    slideIndex = (slideIndex + direction + videoSources.length) % videoSources.length; // Loop through videos
    const fullscreenVideo = document.getElementById('fullscreenVideo');
    fullscreenVideo.src = videoSources[slideIndex];
    fullscreenVideo.play(); // Play the new video
}

// Add event listeners to all video elements
document.querySelectorAll('.video-container video').forEach(video => {
    video.addEventListener('click', function () {
        openVideo(this.querySelector('source').src);
    });
});
</script>
</body>
</html>

