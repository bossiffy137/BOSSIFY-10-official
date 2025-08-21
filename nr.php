<!DOCTYPE html>
<html>
    <title> BOSSIFY OFFICIAL </title> <!-- Page Title -->
    <head>

<link rel="stylesheet" type="text/css" href="mystyles.css">


    <Style>

/* Button design */
.bossify-btn {
    width: 100%;
    margin-top: 0px;
    margin-bottom: 0px;
    padding: 12px 0;
    font-size: 2em;
    font-family: 'Times New Roman', Times, serif;
    color: #fff;
    background: linear-gradient(90deg, #8e24aa 0%, #ff69b4 100%);
    border: none;
    border-radius: 32px;
    box-shadow: 0 0 24px #ff69b4, 0 0 48px #8e24aa;
    cursor: pointer;
    transition: box-shadow 0.2s, background 0.2s;
}
.bossify-btn:hover {
    background: #000;
    color: #8e24aa;
    box-shadow: 0 0 32px #ff69b4, 0 0 64px #8e24aa;
}

/* Font styling for subject captions */
.subject-caption {
    color: #000;
    font-size: 1.1em;
    font-family: 'Times New Roman', Times, serif;
    text-align: center;
    margin-bottom: 16px;
}

/* Links placeholder styling */
.links-placeholder {
    width: 100%;
    min-height: 32px;
    margin-bottom: 8px;
    text-align: center;
}

/* Subject frame vibrant color scheme */
.subject-frame {
    background: linear-gradient(135deg, #8e24aa 0%, #ff69b4 100%);
    border-radius: 40px;
    box-shadow: 0 0 32px #ff69b4, 0 0 64px #8e24aa;
    border: 12px solid #8e24aa;
    padding: 48px 32px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 480px;
    min-width: 320px;
}

/* Subject frame container row */
.subject-row {
    display: flex;
    flex-direction: row;
    align-items: center;
    gap: 32px;
    margin-bottom: 32px;
    width: 80vw;
    max-width: 1200px;
}
.subject-row-start { justify-content: flex-start; }
.subject-row-end { justify-content: flex-end; }

/* Subject image frame */
.subject-img-frame {
    width: 480px;
    height: 320px;
    background: #222;
    border-radius: 40px;
    box-shadow: 0 4px 24px #444, 0 0 32px #ff69b4;
    border: 16px solid #8e24aa;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}
.subject-img-frame-pink {
    border: 16px solid #ff69b4;
    box-shadow: 0 2px 12px #444;
}
.subject-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    margin: 0;
    padding: 0;
}
.subject-frame-small {
    padding: 32px 24px;
    width: 320px;
    min-width: 220px;
}

    </style>

    <script></script>

<body>
  
    <div class="container">
        <br>
        <br>
        <!-- Main title -->
        <h1 class="bossify-h1-gradient" style="padding-top:48px; margin-top: 20px;"> NOTES AND REVIEWERS</h1>
        <!-- Welcome-->
        <div class="textcontent" style="background: linear-gradient(90deg, #8e24aa 0%, #ff69b4 100%); color: #fff; border-radius: 18px; box-shadow: 0 2px 12px #ff69b4; padding: 16px 0; margin-bottom: 18px; margin-right: 30px; width: 100%; max-width: 100vw; text-align: center; font-weight: 500;">
            Ready to BOSSIFY your skills?
        </div>

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

        <!-- Main content-->
        <div class="content" style="width:100vw; max-width:100vw; margin-left:-50vw; left:50%; position:relative; background: #000; padding:48px 0;">
            <div style="display:flex; flex-direction:column; align-items:center; width:100%; gap:0;">
                <!-- Subject Frames: One per button -->
                <div style="display:flex; flex-direction:column; align-items:center; width:100%;">
                    <!-- ENGLISH -->
                    <div class="subject-row subject-row-start">
  <div class="subject-frame">
    <div class="subject-caption">Master English with our curated notes and reviewers!</div>
    <a href="https://docs.google.com/document/d/1-MC_Q6nOpy7UuGOXS_NVj4c7bIC2JYwG5NN16vYjrOM/edit?usp=sharing" target="_blank" style="text-decoration:none; width:100%; display:block; margin-top:auto;">
      <button class="bossify-btn" style="margin-top:auto; width:100%;">ENGLISH</button>
    </a>
    <div class="links-placeholder">
      <!-- Add links for ENGLISH here -->
    </div>
  </div>
  <div class="subject-img-frame">
    <img src="Subs/Eng.jpg" alt="English" class="subject-img">
  </div>
</div>
                    <!-- MATH -->
                    <div class="subject-row subject-row-end">
  <div class="subject-img-frame">
    <img src="Subs/Math.jpg" alt="Math" class="subject-img">
  </div> 

  <div class="subject-frame">
    <div class="subject-caption">Conquer Math with step-by-step guides and practice!</div>
    <a href="https://docs.google.com/document/d/1S-z0xrLy9LVNvelZABUWJd58PSTyo5jAbeymcMTXdj4/edit?usp=sharing" target="_blank" style="text-decoration:none; width:100%; display:block; margin-top:auto;">
      <button class="bossify-btn" style="margin-top:auto; width:100%;">MATH</button>
    </a>
    <div class="links-placeholder">
      <!-- Add links for MATH here -->
    </div>
  </div>
</div>
                    <!-- SCIENCE -->
                    <div class="subject-row subject-row-start">
  <div class="subject-frame">
    <div class="subject-caption">Explore Science with visual notes and experiments!</div>
    <a href="https://docs.google.com/document/d/1pZTCVldK9Lf3iBw-ZK4SEjHG2NiEKDuhsbdfBb9aMJA/edit?usp=sharing" target="_blank" style="text-decoration:none; width:100%; display:block; margin-top:auto; margin-bottom:16px;">
      <button class="bossify-btn" style="width:100%; margin-bottom:16px; margin-top:auto;">SCIENCE</button>
    </a>
    <div class="links-placeholder">
      <!-- Add links for SCIENCE here -->
    </div>
  </div>
  <div class="subject-img-frame subject-img-frame-pink">
    <img src="Subs/Sci.jpg" alt="Science" class="subject-img">
  </div>
</div>
                    <!-- FILIPINO -->
                    <div class="subject-row subject-row-end">
  <div class="subject-img-frame">
    <img src="Subs/Fil.jpg" alt="Filipino" class="subject-img">
  </div>
  <div class="subject-frame">
    <div class="subject-caption">Enhance Filipino skills with comprehensive resources!</div>
    <a href="https://docs.google.com/document/d/1xfGMIdCpAQeS4GW2c_y8p5RoDN_u1WZ7WBS_yoX_6bs/edit?usp=sharing" target="_blank" style="text-decoration:none; width:100%; display:block; margin-top:auto; margin-bottom:16px;">
      <button class="bossify-btn" style="width:100%; margin-bottom:16px; margin-top:auto;">FILIPINO</button>
    </a>
    <div class="links-placeholder">
      <!-- Add links for FILIPINO here -->
    </div>
  </div>
</div>
                    <!-- AP -->
                    <div class="subject-row subject-row-start">
  <div class="subject-frame">
    <div class="subject-caption">Ace AP with key facts and timelines!</div>
    <a href="https://docs.google.com/document/d/1N_SaqFXcrzGeqMEJmE7_OIod-nGTPfMpIYZcUue6O04/edit?usp=sharing" target="_blank" style="text-decoration:none; width:100%; display:block; margin-top:auto; margin-bottom:16px;">
      <button class="bossify-btn" style="width:100%; margin-bottom:16px; margin-top:auto;">AP</button>
    </a>
    <div class="links-placeholder">
      <!-- Add links for AP here -->
    </div>
  </div>
  <div class="subject-img-frame">
    <img src="Subs/AP.jpg" alt="AP" class="subject-img">
  </div>
</div>
                    <!-- C.L.E -->
                    <div class="subject-row subject-row-end">
  <div class="subject-img-frame">
    <img src="Subs/CL.jpg" alt="C.L.E" class="subject-img">
  </div>
  <div class="subject-frame">
    <div class="subject-caption">Grow in C.L.E. with values-based learning!</div>
    <a href="https://docs.google.com/document/d/1O_8nv554w82uERW_2VJ2azTJvXqpOWON2TI_HI_SDGI/edit?usp=sharing" target="_blank" style="text-decoration:none; width:100%; display:block; margin-top:auto; margin-bottom:16px;">
      <button class="bossify-btn" style="width:100%; margin-bottom:16px; margin-top:auto;">C.L.E</button>
    </a>
    <div class="links-placeholder">
      <!-- Add links for C.L.E here -->
    </div>
  </div>
</div>
                    <!-- T.L.E -->
                    <div class="subject-row subject-row-start">
  <div class="subject-frame subject-frame-small">
    <div class="subject-caption">Hands-on T.L.E. resources for practical skills!</div>
    <a href="https://docs.google.com/document/d/1a-a9z2cMEMDnfB-MUk_HQxw44dsDnJdzPrmSe1h_bOc/edit?usp=sharing" target="_blank" style="text-decoration:none; width:100%; display:block; margin-top:auto; margin-bottom:16px;">
      <button class="bossify-btn" style="width:100%; margin-bottom:16px; margin-top:auto;">T.L.E</button>
    </a>
    <div class="links-placeholder">
      <!-- Add links for T.L.E here -->
    </div>
  </div>
  <div class="subject-img-frame subject-img-frame-pink">
    <img src="Subs/TLE.jpg" alt="T.L.E" class="subject-img">
  </div>
</div>
                    <!-- M.A.P.E.H. -->
                    <div class="subject-row subject-row-end">
  <div class="subject-img-frame subject-img-frame-pink">
    <img src="Subs/MAPEH.jpg" alt="M.A.P.E.H." class="subject-img">
  </div>
  <div class="subject-frame">
    <div class="subject-caption">Excel in M.A.P.E.H. with creative and active learning!</div>
    <a href="https://docs.google.com/document/d/1RPtfJGZ3_D8pU5sJH6EOAhaAXvY2z-1nAZvbckOPhYQ/edit?usp=sharing" target="_blank" style="text-decoration:none; width:100%; display:block; margin-top:auto; margin-bottom:16px;">
      <button class="bossify-btn" style="width:100%; margin-bottom:16px; margin-top:auto;">M.A.P.E.H.</button>
    </a>
    <div class="links-placeholder">
      <!-- Add links for M.A.P.E.H. here -->
    </div>
  </div>
</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        All rights reserved &copy; 2025 by Azlan Lione O. Garcia developer of BOSSIFY.
    </div>
</body>
</html>

