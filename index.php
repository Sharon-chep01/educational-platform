<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduPlatform - Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="architecture.php">Architecture</a></li>
                <li><a href="features.php">Features</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="hero-section">
            <div class="hero-content">
                <h1 class="pitch-headline">Build Your Next Big Project</h1>
                <p style="font-size: 1.2rem; margin-bottom: 2rem;">Your one-stop solution for modern learning.</p>
                <a href="features.php" class="cta-button">Start Learning Free</a>
            </div>
            <div class="hero-visual">
                <svg viewBox="0 0 400 300" width="100%" height="auto" xmlns="http://www.w3.org/2000/svg">
                    <rect width="400" height="300" fill="transparent" />
                    <circle cx="200" cy="110" r="45" fill="#6c63ff"/>
                    <path d="M120 260 Q200 130 280 260 Z" fill="#6c63ff" opacity="0.9"/>
                    <rect x="140" y="170" width="120" height="75" rx="5" fill="#2f2e41"/>
                    <rect x="150" y="180" width="100" height="50" fill="#e6e6e6"/>
                    <rect x="110" y="245" width="180" height="12" rx="4" fill="#2f2e41"/>
                    <circle cx="70" cy="70" r="18" fill="#ff6584">
                        <animate attributeName="cy" values="70; 50; 70" dur="4s" repeatCount="indefinite" />
                    </circle>
                    <rect x="310" y="80" width="25" height="25" fill="#42e6a4" transform="rotate(45 322.5 92.5)">
                        <animate attributeName="y" values="80; 100; 80" dur="5s" repeatCount="indefinite" />
                    </rect>
                </svg>
            </div>
        </section>

        <section class="paths-section">
            <h2 style="text-align: center; margin-bottom: 3rem; font-size: 2.5rem; color: #2b2b2b;">Explore Learning Paths</h2>
            <div class="cards-container">
                <div class="path-card card-mobile">
                    <div class="card-icon">
                        <svg viewBox="0 0 24 24" width="60" height="60" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect>
                            <line x1="12" y1="18" x2="12.01" y2="18"></line>
                        </svg>
                    </div>
                    <h3>Mobile App Dev</h3>
                    <p>Flutter / Android</p>
                </div>
                
                <div class="path-card card-backend">
                    <div class="card-icon">
                        <svg viewBox="0 0 24 24" width="60" height="60" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                            <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
                            <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                        </svg>
                    </div>
                    <h3>Backend & Databases</h3>
                    <p>SQL / Servers</p>
                </div>
                
                <div class="path-card card-core">
                    <div class="card-icon">
                        <svg viewBox="0 0 24 24" width="60" height="60" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="16 18 22 12 16 6"></polyline>
                            <polyline points="8 6 2 12 8 18"></polyline>
                        </svg>
                    </div>
                    <h3>Core Programming</h3>
                    <p>Java / Python</p>
                </div>
            </div>
        </section>

        <section class="courses-section">
            <h2 style="text-align: center; margin-bottom: 3rem; font-size: 2.5rem; color: #2b2b2b;">Featured Courses</h2>
            <div class="courses-container">
                
                <div class="course-card">
                    <div class="course-thumbnail" style="background: linear-gradient(135deg, #ff9a9e 0%, #fecfef 100%);">
                        <span class="course-badge free-badge">FREE</span>
                        <svg viewBox="0 0 24 24" width="80" height="80" fill="white" opacity="0.6" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);"><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg>
                    </div>
                    <div class="course-info">
                        <h3 class="course-title">Mastering Java GUI Development</h3>
                        <p class="course-instructor">Instructor: John Doe</p>
                        <div class="course-meta">
                            <span class="course-rating">
                                <svg viewBox="0 0 24 24" fill="#ffc107" width="20" height="20" style="vertical-align: middle;"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                                4.9 (2.1k reviews)
                            </span>
                        </div>
                    </div>
                </div>

                <div class="course-card">
                    <div class="course-thumbnail" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
                        <span class="course-badge price-badge">$49.99</span>
                        <svg viewBox="0 0 24 24" width="80" height="80" fill="white" opacity="0.6" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path></svg>
                    </div>
                    <div class="course-info">
                        <h3 class="course-title">Database Design & SQL Mastery</h3>
                        <p class="course-instructor">Instructor: Jane Smith</p>
                        <div class="course-meta">
                            <span class="course-rating">
                                <svg viewBox="0 0 24 24" fill="#ffc107" width="20" height="20" style="vertical-align: middle;"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                                4.8 (1.5k reviews)
                            </span>
                        </div>
                    </div>
                </div>

                <div class="course-card">
                    <div class="course-thumbnail" style="background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);">
                        <span class="course-badge price-badge">$89.99</span>
                        <svg viewBox="0 0 24 24" width="80" height="80" fill="white" opacity="0.6" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line></svg>
                    </div>
                    <div class="course-info">
                        <h3 class="course-title">Flutter Mobile App Dev 2024</h3>
                        <p class="course-instructor">Instructor: Alex Johnson</p>
                        <div class="course-meta">
                            <span class="course-rating">
                                <svg viewBox="0 0 24 24" fill="#ffc107" width="20" height="20" style="vertical-align: middle;"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                                5.0 (3k reviews)
                            </span>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="cbc-section" style="padding: 4rem 2rem; background-color: #fff; max-width: 1200px; margin: 0 auto;">
            <h2 style="text-align: center; margin-bottom: 1rem; font-size: 2.5rem; color: #2b2b2b;">CBC Curriculum Hub</h2>
            <p style="text-align: center; margin-bottom: 3rem; font-size: 1.1rem; color: #555; max-width: 800px; margin-left: auto; margin-right: auto;">Enhancing mutual learning and benefiting all learners countrywide with high-quality, accessible Competency Based Curriculum (CBC) resources.</p>
            
            <div class="cbc-container" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
                <!-- Lower Primary -->
                <div class="cbc-card" style="border: 2px solid #f9f9f9; background: #fff5f5; border-radius: 12px; padding: 30px; box-shadow: 0 4px 6px rgba(0,0,0,0.02);">
                    <h3 style="color: #ff6b6b; font-size: 1.5rem; margin-top: 0;">Lower Primary (Grade 1-3)</h3>
                    <ul style="list-style-type: none; padding: 0; line-height: 2; color: #444; font-size: 1.05rem;">
                        <li>📘 Mathematics Activities</li>
                        <li>📗 Literacy & Languages</li>
                        <li>📙 Environmental Activities</li>
                    </ul>
                    <a href="about.php" style="display: inline-block; margin-top: 20px; color: #ff6b6b; font-weight: bold; text-decoration: none; padding-bottom: 2px; border-bottom: 2px solid #ff6b6b;">Explore Grade 1-3 &rarr;</a>
                </div>

                <!-- Upper Primary -->
                <div class="cbc-card" style="border: 2px solid #f9f9f9; background: #f0fff4; border-radius: 12px; padding: 30px; box-shadow: 0 4px 6px rgba(0,0,0,0.02);">
                    <h3 style="color: #38a169; font-size: 1.5rem; margin-top: 0;">Upper Primary (Grade 4-6)</h3>
                    <ul style="list-style-type: none; padding: 0; line-height: 2; color: #444; font-size: 1.05rem;">
                        <li>📘 Science & Technology</li>
                        <li>📗 Agriculture & Nutrition</li>
                        <li>📙 Creative Arts</li>
                    </ul>
                    <a href="about.php" style="display: inline-block; margin-top: 20px; color: #38a169; font-weight: bold; text-decoration: none; padding-bottom: 2px; border-bottom: 2px solid #38a169;">Explore Grade 4-6 &rarr;</a>
                </div>

                <!-- Junior Secondary -->
                <div class="cbc-card" style="border: 2px solid #f9f9f9; background: #ebf8ff; border-radius: 12px; padding: 30px; box-shadow: 0 4px 6px rgba(0,0,0,0.02);">
                    <h3 style="color: #3182ce; font-size: 1.5rem; margin-top: 0;">Junior Secondary (JSS)</h3>
                    <ul style="list-style-type: none; padding: 0; line-height: 2; color: #444; font-size: 1.05rem;">
                        <li>📘 Pre-Technical Studies</li>
                        <li>📗 Business Studies</li>
                        <li>📙 Life Skills Education</li>
                    </ul>
                    <a href="about.php" style="display: inline-block; margin-top: 20px; color: #3182ce; font-weight: bold; text-decoration: none; padding-bottom: 2px; border-bottom: 2px solid #3182ce;">Explore JSS &rarr;</a>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="stats-section" style="background: linear-gradient(135deg, #6c63ff 0%, #8a2be2 100%); padding: 4rem 2rem; margin: 4rem 0; color: white; display: flex; justify-content: space-around; flex-wrap: wrap; border-radius: 12px; text-align: center;">
            <div class="stat-box" style="margin: 1rem;">
                <div style="font-size: 4rem; font-weight: 900; line-height: 1;"><span class="stat-number" data-target="10000">0</span><span class="stat-plus" style="color: #42e6a4;">+</span></div>
                <p class="stat-label" style="font-size: 1.2rem; margin-top: 0.5rem; text-transform: uppercase; letter-spacing: 2px; font-weight: bold;">Happy Students</p>
            </div>
            <div class="stat-box" style="margin: 1rem;">
                <div style="font-size: 4rem; font-weight: 900; line-height: 1;"><span class="stat-number" data-target="50">0</span><span class="stat-plus" style="color: #ff6584;">+</span></div>
                <p class="stat-label" style="font-size: 1.2rem; margin-top: 0.5rem; text-transform: uppercase; letter-spacing: 2px; font-weight: bold;">Coding Challenges</p>
            </div>
            <div class="stat-box" style="margin: 1rem;">
                <div style="font-size: 4rem; font-weight: 900; line-height: 1;"><span class="stat-number" data-target="120">0</span><span class="stat-plus" style="color: #ffc107;">+</span></div>
                <p class="stat-label" style="font-size: 1.2rem; margin-top: 0.5rem; text-transform: uppercase; letter-spacing: 2px; font-weight: bold;">Expert Instructors</p>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="testimonials-section" style="padding: 4rem 2rem; max-width: 1200px; margin: 0 auto;">
            <h2 style="text-align: center; margin-bottom: 3rem; font-size: 2.5rem; color: #2b2b2b;">Student Success Stories</h2>
            <div class="masonry-grid">
                
                <div class="testimonial-card accent-pink">
                    <p class="testimonial-text">"This platform completely transformed the way I learn. The Java GUI course was phenomenal and landed me my first internship!"</p>
                    <div class="user-info">
                        <div class="avatar" style="background-color: #ff9a9e;"></div>
                        <div>
                            <h4>Sarah Jenkins</h4>
                            <p>CS Student</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card accent-blue">
                    <p class="testimonial-text">"The CBC materials for Junior Secondary are a lifesaver. My students love the interactive business studies modules. It's so accessible and easy to use in a classroom setting."</p>
                    <div class="user-info">
                        <div class="avatar" style="background-color: #4facfe;"></div>
                        <div>
                            <h4>David Ochieng</h4>
                            <p>JSS Teacher</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card accent-green">
                    <p class="testimonial-text">"I always struggled with SQL, but the visual database design challenges made everything click. 10/10 recommend!"</p>
                    <div class="user-info">
                        <div class="avatar" style="background-color: #43e97b;"></div>
                        <div>
                            <h4>Anita Wanjiku</h4>
                            <p>Backend Developer</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card accent-orange">
                    <p class="testimonial-text">"Flutter app dev was daunting, but the pacing here is perfect. Now I'm publishing my first app on the Play Store. The instructors explain complex concepts in simple terms."</p>
                    <div class="user-info">
                        <div class="avatar" style="background-color: #ffb199;"></div>
                        <div>
                            <h4>Michael K.</h4>
                            <p>App Creator</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>
    <script src="script.js"></script>
</body>
</html>
