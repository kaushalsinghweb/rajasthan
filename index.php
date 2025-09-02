<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rajasthan Tours - Discover the Land of Kings</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    
    
</head>
<body>
    <!-- header -->
    <?php include "header.php" ?>
    <!-- Banner Slider -->
    <div id="bannerCarousel" class="carousel slide banner-slider" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://picsum.photos/seed/rajasthan1/1920/600" class="d-block w-100" alt="Rajasthan Palace">
                <div class="carousel-caption">
                    <h1>Discover the Land of Kings</h1>
                    <p>Experience the royal heritage and vibrant culture of Rajasthan</p>
                    <a href="#packages" class="btn-custom">Explore Packages</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://picsum.photos/seed/rajasthan2/1920/600" class="d-block w-100" alt="Rajasthan Desert">
                <div class="carousel-caption">
                    <h1>Desert Adventures Await</h1>
                    <p>Camel safaris, desert camps, and starry nights</p>
                    <a href="#packages" class="btn-custom">Book Now</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://picsum.photos/seed/rajasthan3/1920/600" class="d-block w-100" alt="Rajasthan Fort">
                <div class="carousel-caption">
                    <h1>Majestic Forts & Palaces</h1>
                    <p>Step back in time with our heritage tours</p>
                    <a href="#packages" class="btn-custom">Learn More</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#bannerCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
        
        <!-- Fixed Enquiry Form -->
        <div class="fixed-enquiry">
            <h3>Quick Enquiry</h3>
            <form id="bannerEnquiryForm">
                <div class="mb-3">
                    <label class="form-label">Your Name</label>
                    <input type="text" class="form-control" placeholder="Enter your name" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email Address</label>
                    <input type="email" class="form-control" placeholder="Enter your email" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" placeholder="Enter your phone" required>
                </div>
                
                <button type="submit" class="btn-submit">Submit Enquiry</button>
            </form>
        </div>
    </div>
    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <img src="https://picsum.photos/seed/about-rajasthan/600/400" class="img-fluid rounded shadow" alt="About Rajasthan">
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="about-content">
                        <h2>Welcome to Rajasthan Tours</h2>
                        <p>Rajasthan, the Land of Kings, is a vibrant tapestry of colors, cultures, and traditions. From the golden sands of the Thar Desert to the majestic forts and palaces that dot its landscape, Rajasthan offers an unforgettable journey through India's royal heritage.</p>
                        <p>Our expertly crafted tours take you through the heart of this magnificent state, allowing you to experience its rich history, warm hospitality, and breathtaking beauty. Whether you're seeking adventure, culture, or relaxation, Rajasthan has something for everyone.</p>
                        
                        <div class="about-features">
                            <div class="feature-item">
                                <i class="bi bi-award-fill"></i>
                                <div>
                                    <h5>Expert Guides</h5>
                                    <p>Knowledgeable local guides to enhance your experience</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <i class="bi bi-shield-check"></i>
                                <div>
                                    <h5>Safe & Secure</h5>
                                    <p>Your safety is our top priority</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <i class="bi bi-heart-fill"></i>
                                <div>
                                    <h5>Customized Tours</h5>
                                    <p>Tailor-made packages to suit your preferences</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tour Packages Section -->
    <section class="packages-section" id="packages">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Popular Tour Packages</h2>
                <p>Choose from our handpicked Rajasthan tour packages</p>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="package-card">
                        <img src="https://picsum.photos/seed/jaipur-tour/400/250" alt="Jaipur Tour">
                        <div class="package-content">
                            <h3>Pink City Explorer</h3>
                            <p class="package-duration"><i class="bi bi-clock"></i> 3 Days / 2 Nights</p>
                            <p class="package-price">₹12,999 <small>/ person</small></p>
                            <div class="package-actions">
                                <a href="detail-pages/pink-city.php" class="btn-package btn-read-more">
                                    <i class="bi bi-book"></i> Read More
                                </a>
                                <a href="contact.html" class="btn-package btn-enquiry">
                                    <i class="bi bi-envelope"></i> Enquiry
                                </a>
                                <a href="tel:+919876543210" class="btn-package btn-call">
                                    <i class="bi bi-telephone"></i> Call
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="package-card">
                        <img src="https://picsum.photos/seed/udaipur-tour/400/250" alt="Udaipur Tour">
                        <div class="package-content">
                            <h3>Lake City Romance</h3>
                            <p class="package-duration"><i class="bi bi-clock"></i> 4 Days / 3 Nights</p>
                            <p class="package-price">₹18,999 <small>/ person</small></p>
                            <div class="package-actions">
                                <a href="detail-pages/blue-city.php" class="btn-package btn-read-more">
                                    <i class="bi bi-book"></i> Read More
                                </a>
                                <a href="contact.html" class="btn-package btn-enquiry">
                                    <i class="bi bi-envelope"></i> Enquiry
                                </a>
                                <a href="tel:+919876543210" class="btn-package btn-call">
                                    <i class="bi bi-telephone"></i> Call
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="package-card">
                        <img src="https://picsum.photos/seed/jaisalmer-tour/400/250" alt="Jaisalmer Tour">
                        <div class="package-content">
                            <h3>Desert Safari Adventure</h3>
                            <p class="package-duration"><i class="bi bi-clock"></i> 5 Days / 4 Nights</p>
                            <p class="package-price">₹24,999 <small>/ person</small></p>
                            <div class="package-actions">
                                <a href="package-detail.html" class="btn-package btn-read-more">
                                    <i class="bi bi-book"></i> Read More
                                </a>
                                <a href="contact.html" class="btn-package btn-enquiry">
                                    <i class="bi bi-envelope"></i> Enquiry
                                </a>
                                <a href="tel:+919876543210" class="btn-package btn-call">
                                    <i class="bi bi-telephone"></i> Call
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="package-card">
                        <img src="https://picsum.photos/seed/jodhpur-tour/400/250" alt="Jodhpur Tour">
                        <div class="package-content">
                            <h3>Blue City Heritage</h3>
                            <p class="package-duration"><i class="bi bi-clock"></i> 3 Days / 2 Nights</p>
                            <p class="package-price">₹11,999 <small>/ person</small></p>
                            <div class="package-actions">
                                <a href="package-detail.html" class="btn-package btn-read-more">
                                    <i class="bi bi-book"></i> Read More
                                </a>
                                <a href="contact.html" class="btn-package btn-enquiry">
                                    <i class="bi bi-envelope"></i> Enquiry
                                </a>
                                <a href="tel:+919876543210" class="btn-package btn-call">
                                    <i class="bi bi-telephone"></i> Call
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="package-card">
                        <img src="https://picsum.photos/seed/pushkar-tour/400/250" alt="Pushkar Tour">
                        <div class="package-content">
                            <h3>Pushkar Spiritual Tour</h3>
                            <p class="package-duration"><i class="bi bi-clock"></i> 2 Days / 1 Night</p>
                            <p class="package-price">₹8,999 <small>/ person</small></p>
                            <div class="package-actions">
                                <a href="package-detail.html" class="btn-package btn-read-more">
                                    <i class="bi bi-book"></i> Read More
                                </a>
                                <a href="contact.html" class="btn-package btn-enquiry">
                                    <i class="bi bi-envelope"></i> Enquiry
                                </a>
                                <a href="tel:+919876543210" class="btn-package btn-call">
                                    <i class="bi bi-telephone"></i> Call
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="package-card">
                        <img src="https://picsum.photos/seed/rajasthan-royal/400/250" alt="Royal Rajasthan">
                        <div class="package-content">
                            <h3>Royal Rajasthan Complete</h3>
                            <p class="package-duration"><i class="bi bi-clock"></i> 10 Days / 9 Nights</p>
                            <p class="package-price">₹45,999 <small>/ person</small></p>
                            <div class="package-actions">
                                <a href="package-detail.html" class="btn-package btn-read-more">
                                    <i class="bi bi-book"></i> Read More
                                </a>
                                <a href="contact.html" class="btn-package btn-enquiry">
                                    <i class="bi bi-envelope"></i> Enquiry
                                </a>
                                <a href="tel:+919876543210" class="btn-package btn-call">
                                    <i class="bi bi-telephone"></i> Call
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Frequently Asked Questions</h2>
                <p>Find answers to common questions about Rajasthan tours</p>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="faqAccordion" data-aos="fade-up">
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    What is the best time to visit Rajasthan?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    The best time to visit Rajasthan is from October to March when the weather is pleasant and ideal for sightseeing. The winter months (December to February) are particularly popular as temperatures are comfortable during the day and cool at night. Avoid visiting during the summer months (April to June) as temperatures can soar above 45°C.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    What should I pack for a Rajasthan tour?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Pack light, comfortable clothing in cotton for daytime, and carry a light jacket or shawl for evenings. Don't forget sunscreen, sunglasses, a hat, comfortable walking shoes, and any necessary medications. If visiting religious sites, carry modest clothing that covers shoulders and knees. A camera is essential to capture the beautiful landscapes and architecture!
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    Is Rajasthan safe for tourists?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, Rajasthan is generally safe for tourists. The state is known for its warm hospitality and welcoming locals. However, like any tourist destination, it's important to take basic precautions: keep your valuables secure, be aware of your surroundings, and use reputable tour operators and transportation services. Our tours include experienced guides who ensure your safety throughout the journey.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                    What is included in the tour packages?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Our tour packages typically include accommodation in heritage hotels or resorts, daily breakfast, transportation in air-conditioned vehicles, guided sightseeing tours, entrance fees to monuments, and all applicable taxes. Some packages may include additional meals, cultural shows, or special activities. Please check the specific package details for complete inclusions and exclusions.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                    Can I customize my tour package?
                                </button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Absolutely! We understand that every traveler has unique preferences. We offer fully customizable tour packages where you can choose your destinations, duration of stay, type of accommodation, and specific activities. Our travel experts will work with you to create a personalized itinerary that matches your interests, budget, and schedule.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>What Our Travelers Say</h2>
                <p>Real experiences from our happy customers</p>
            </div>
            
            <div class="row">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial-card">
                        <div class="rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <div class="testimonial-content">
                            <p>Our Rajasthan tour was absolutely magical! The guides were knowledgeable, the accommodations were excellent, and the itinerary was perfectly planned. We especially loved the camel safari in Jaisalmer. Highly recommend!</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="author-img">
                                <img src="https://picsum.photos/seed/person1/60/60" alt="Sarah Johnson">
                            </div>
                            <div class="author-info">
                                <h5>Sarah Johnson</h5>
                                <p>USA</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="testimonial-card">
                        <div class="rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <div class="testimonial-content">
                            <p>The attention to detail on our Udaipur tour was exceptional. From the boat ride on Lake Pichola to the cultural show in the evening, every moment was memorable. Rajasthan Tours made our honeymoon truly special.</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="author-img">
                                <img src="https://picsum.photos/seed/person2/60/60" alt="Michael Chen">
                            </div>
                            <div class="author-info">
                                <h5>Michael Chen</h5>
                                <p>Canada</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="testimonial-card">
                        <div class="rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                        </div>
                        <div class="testimonial-content">
                            <p>As a solo traveler, I felt safe and well-cared-for throughout my journey. The Pink City Explorer package was perfect for my short trip. I'll definitely be booking with Rajasthan Tours again for my next adventure!</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="author-img">
                                <img src="https://picsum.photos/seed/person3/60/60" alt="Emma Wilson">
                            </div>
                            <div class="author-info">
                                <h5>Emma Wilson</h5>
                                <p>Australia</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <?php  include "footer.php" ?>
    
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true
        });
        
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.padding = '10px 0';
                navbar.style.background = 'rgba(255, 255, 255, 0.98)';
            } else {
                navbar.style.padding = '15px 0';
                navbar.style.background = 'rgba(255, 255, 255, 0.95)';
            }
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
        
        // Active navigation link
        const sections = document.querySelectorAll('section');
        const navLinks = document.querySelectorAll('.nav-link');
        window.addEventListener('scroll', () => {
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (scrollY >= (sectionTop - 200)) {
                    current = section.getAttribute('id');
                }
            });
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href').slice(1) === current) {
                    link.classList.add('active');
                }
            });
        });
        
        // Banner enquiry form submission
        document.getElementById('bannerEnquiryForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Create success message
            const successMessage = document.createElement('div');
            successMessage.className = 'alert alert-success alert-dismissible fade show mt-3';
            successMessage.innerHTML = `
                <strong>Thank you!</strong> Your enquiry has been submitted successfully. We will contact you shortly.
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            `;
            
            // Insert after form
            this.appendChild(successMessage);
            
            // Reset form
            this.reset();
            
            // Remove message after 5 seconds
            setTimeout(() => {
                successMessage.remove();
            }, 5000);
        });
    </script>
</body>
</html>