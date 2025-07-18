<?php
    require_once('../private/initialize.php');
    require_once(SHARED_PATH.'/header.php');
?>

    <!-- Slideshow -->
    <div class="slideshow-container">
        <div class="slideshow-image">
            <!-- Add your images here -->
            <img src="images/Frame.jpg" alt="Slide 1">
        </div>
        <div class="slideshow-description">
            <h2>Welcome to Ayuracharya</h2>
            <p>Let me take you through the features.</p>
            <img class="next-slide" src="images/next_arrow.jpg" onclick="nextSlide()">
        </div>
    </div>
    <div class="slideshow-container">
        <div class="slideshow-image">
            <!-- Add your images here -->
            <img src="images/Frame (0).jpg" alt="Slide 1">
        </div>
        <div class="slideshow-description">
            <h2>Medicine medium compatibility</h2>
            <p>Hassle-free management through smart algorithms.</p>
            <img class="next-slide" src="images/next_arrow.jpg" onclick="nextSlide()">
        </div>
    </div>
    <div class="slideshow-container">
        <div class="slideshow-image">
            <!-- Add your images here -->
            <img src="images/Frame (1).jpg" alt="Slide 1">
        </div>
        <div class="slideshow-description">
            <h2>Data-driven health insights anywhere!</h2>
            <!-- <p>Description of the feature goes here.</p> -->
            <img class="next-slide" src="images/next_arrow.jpg" onclick="nextSlide()">
        </div>
    </div>
    <div class="slideshow-container">
        <div class="slideshow-image">
            <!-- Add your images here -->
            <img src="images/Frame (2).jpg" alt="Slide 1">
        </div>
        <div class="slideshow-description">
            <h2>References and cross-sourcing with Sanskrit names</h2>
            <p>Description of the feature goes here.</p>
            <img class="next-slide" src="images/next_arrow.jpg" onclick="nextSlide()">
        </div>
    </div>

    <!-- About Us -->
    <div class="about-us">
        <img src="images/aboutus.jpg" alt="About Us Image">
        <div class="about-us-text">
            <h2>About Us</h2>
            <p>At Ayuracharya, our vision is to empower both Ayurvedic doctors and eager students on their journey towards holistic health and profound knowledge. We believe in preserving the time-honored traditions of Ayurveda while embracing the digital age, making ancient wisdom accessible to all.
Our aim is to foster a community of lifelong learners dedicated to the holistic path of healing.
Discover the magic of Ayuracharya and embark on a journey of healing, learning, and transformation. Together, let's honor the ancient wisdom of Ayurveda while embracing the limitless possibilities of the future. Ayuracharya - Where Tradition Meets Technology for Holistic Health.

</p>
        </div>
    </div>

    <!-- How It Works -->
    <div class="how-it-works">
        <h2>How It Works</h2>
        <!-- <p>Description of how the website works.</p> -->
        <div class="how-it-works-boxes">
            <div class="how-it-works-box">
                <h3>Search</h3>
                <p>Our commitment is to provide accurate, tailor-made recommendations based on classical Ayurvedic texts, allowing you to explore healing. </p>
            </div>
            <div class="how-it-works-box">
                <h3>Learn</h3>
                <p>We offer an extensive educational platform where you can explore Ayurvedic principles, study ancient manuscripts, and enhance your clinical knowledge.</p>
            </div>
            <div class="how-it-works-box">
                <h3>Manage</h3>
                <p>Manage patient journey effortlessl and receive recommendations tailored to your unique constitution, ensuring every dose is a step towards well-being.</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
<?php
    require_once(SHARED_PATH.'/footer.php');
?>