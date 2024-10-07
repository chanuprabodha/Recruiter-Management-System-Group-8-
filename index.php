<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruitment Management System</title>
    <link rel="stylesheet" href="assert/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
</head>
<body>
    <header>
    <div class="logo">
            <h1>RMS</h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="job-listing.php">Job Listing</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact_us.php">Contact Us</a></li>
            </ul>
        </nav>
        <div class="signup-buttons">
            <a href="#" class="btn recruiter-btn">Recruiter</a>
            <a href="#" class="btn candidate-btn">Candidate</a>
        </div>
    </header>
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Connecting Talent with Opportunity</h1>
            <p>Your next job or ideal candidate is just a click away.</p>
            <div class="hero-buttons">
                <a href="recruiter_register.php" class="btn">Get Started</a>
                <a href="register.php" class="btn">Learn More</a>
            </div>
        </div>
    </section>
    <!-- Featured Jobs Section -->
    <section class="featured-jobs">
        <h2>Featured Jobs</h2>
        <div class="jobs-container">
            <!-- First Row - Job Images -->
            <div class="job">
                <img src="assert/job1.jpg" alt="Job 1">
            </div>
            <div class="job">
                <img src="assert/job2.jpg" alt="Job 2">
            </div>
            <div class="job">
                <img src="assert/job3.jpg" alt="Job 3">
            </div>

            <!-- Second Row - Job Heading and Description -->
            <div class="job-description">
                <h3><a href="job-details.php?job=sales-executive">Sales Executive</a></h3>
                <p>Job description<br>The Institute of Software Engineering offers a variety of Software Engineering programs and training tailored to different categories of learners.</p>
            </div>
            <div class="job-description">
                <h3><a href="job-details.php?job=marketing-manager">Marketing Manager</a></h3>
                <p>Job description<br>Join our marketing team to help grow our brand and reach new audiences with innovative campaigns.</p>
            </div>
            <div class="job-description">
                <h3><a href="job-details.php?job=software-engineer">Software Engineer</a></h3>
                <p>Job description<br>Build and develop cutting-edge software solutions for top clients in the tech industry.</p>
            </div>

            <!-- View All Button -->
            <div class="view-all">
                <a href="job-listing.php" class="btn">View All</a>
            </div>
        </div>
</section>

<!-- Steps Section -->
<section class="steps">
        <div class="steps-container">
            <!-- Step 1: Sign Up -->
            <div class="left-step">
                <h3>Step 1: Sign Up</h3>
                <p>Create an account using your email to get started on our platform.</p>
                <a href="recruiter.php" class="btn">Sign Up</a>
            </div>
            <div class="right-step">
                <img src="assert/signup.jpg" alt="Sign Up">
            </div>

            <!-- Step 2: Browse Jobs -->
            <div class="left-step">
                <img src="assert/browse-jobs.jpg" alt="Browse Jobs">
            </div>
            <div class="right-step">
                <h3>Step 2: Browse Jobs</h3>
                <p>Explore a wide range of job opportunities tailored to your skills and performances.</p>
                <a href="register.php" class="btn">Get Started</a>
            </div>
        </div>
    </section>


    <!-- User Feedback Section -->
    <section class="user-feedback">
        <h2>What Our Users Say</h2>
        <div class="feedback-slider">
            <!-- Feedback Slide 1 -->
            <div class="feedback-slide active">
                <div class="feedback-item">
                    <p>"The platform is amazing! I found my dream job in no time."</p>
                    <strong>John Doe</strong> - Applied Position: Software Engineer
                </div>
                <div class="feedback-item">
                    <p>"Great user interface and easy to navigate. Highly recommended."</p>
                    <strong>Jane Smith</strong> - Applied Position: Marketing Manager
                </div>
                <div class="feedback-item">
                    <p>"The job alerts are super helpful, and I landed an interview fast."</p>
                    <strong>David Wilson</strong> - Applied Position: Sales Executive
                </div>
            </div>

            <!-- Feedback Slide 2 -->
            <div class="feedback-slide">
                <div class="feedback-item">
                    <p>"I love how quick and efficient the application process is here."</p>
                    <strong>Emily Johnson</strong> - Applied Position: Graphic Designer
                </div>
                <div class="feedback-item">
                    <p>"I appreciate the personalized job recommendations. Very useful."</p>
                    <strong>Michael Brown</strong> - Applied Position: Data Scientist
                </div>
                <div class="feedback-item">
                    <p>"It was easy to apply for jobs, and I got responses quickly."</p>
                    <strong>Lisa White</strong> - Applied Position: Human Resources
                </div>
            </div>
        </div>

        <!-- Navigation Buttons -->
        <div class="slider-nav">
            <button id="prevBtn">&#10094; Prev</button>
            <button id="nextBtn">Next &#10095;</button>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <div class="footer-container">
            <h2 class="footer-title">Recruitment Management System</h2>
            <nav class="footer-nav">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#jobs">Job Listing</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                </ul>
            </nav>
            <!-- Social Media Links -->
            <div class="social-media">
                <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </footer>

    <!-- Copyright Bar Section -->
    <div class="copyright-bar">
        <p>&copy; 2024 RMS. All rights reserved. | 
            <a href="#terms">Terms & Conditions</a> | 
            <a href="#privacy">Privacy Policy</a>
        </p>
    </div>



</body>
<script>
    const slides = document.querySelectorAll('.feedback-slide');
    let currentSlide = 0;

    const showSlide = (index) => {
        slides.forEach((slide, i) => {
            slide.classList.remove('active');
            if (i === index) {
                slide.classList.add('active');
            }
        });
    };

    document.getElementById('prevBtn').addEventListener('click', () => {
        currentSlide = (currentSlide > 0) ? currentSlide - 1 : slides.length - 1;
        showSlide(currentSlide);
    });

    document.getElementById('nextBtn').addEventListener('click', () => {
        currentSlide = (currentSlide < slides.length - 1) ? currentSlide + 1 : 0;
        showSlide(currentSlide);
    });

    // Auto-slide every 5 seconds
    setInterval(() => {
        currentSlide = (currentSlide < slides.length - 1) ? currentSlide + 1 : 0;
        showSlide(currentSlide);
    }, 5000);
</script>

</html>
