<section class="about section" id="about">
    <div class="container">
        <h2 class="section-title">About Me</h2>
        <div class="about-content">
            <div class="about-text">
                <h3>Who am I?</h3>
                <p><?php echo $objective; ?></p>
                <p>A detail-oriented student eager to gain real-world experience in cybersecurity, digital forensics, and system security. Passionate about protecting digital assets and solving complex security challenges.</p>
                
                <div class="personal-info">
                    <div class="info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span><?php echo $location; ?></span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <span><?php echo $email; ?></span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-phone"></i>
                        <span><?php echo $phone; ?></span>
                    </div>
                </div>
                
                <a href="contact.php" class="btn btn-primary">Let's Talk</a>
            </div>
            <div class="about-stats">
                <div class="stat-card">
                    <i class="fas fa-graduation-cap"></i>
                    <h3>Education</h3>
                    <p>BSIT - Cybersecurity</p>
                </div>
                <div class="stat-card">
                    <i class="fas fa-certificate"></i>
                    <h3>Certifications</h3>
                    <p><?php echo count($certifications); ?>+ Badges</p>
                </div>
                <div class="stat-card">
                    <i class="fas fa-code"></i>
                    <h3>Skills</h3>
                    <p><?php echo count($technicalSkills) + count($cybersecuritySkills); ?>+ Technologies</p>
                </div>
            </div>
        </div>
    </div>
</section>