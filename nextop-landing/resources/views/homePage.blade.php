<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nextop - The Professional Ecosystem Built on Authenticity</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --navy: #1a2332;
            --teal: #00A693;
            --white: #ffffff;
            --light-grey: #f8f9fa;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            color: var(--navy);
            overflow-x: hidden;
        }

        /* Navigation */
        nav {
            background: var(--white);
            padding: 20px 40px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .nav-container {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--navy);
            text-decoration: none;
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            background: var(--teal);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-weight: 700;
        }

        .nav-links {
            display: flex;
            gap: 40px;
            align-items: center;
        }

        .nav-links a {
            color: var(--navy);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: var(--teal);
        }

        .nav-auth {
            display: flex;
            gap: 16px;
            align-items: center;
        }

        .btn-login {
            color: var(--navy);
            text-decoration: none;
            font-weight: 600;
            padding: 10px 24px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .btn-login:hover {
            background: var(--light-grey);
        }

        .btn-signup {
            background: var(--teal);
            color: var(--white);
            text-decoration: none;
            font-weight: 600;
            padding: 12px 28px;
            border-radius: 8px;
            transition: all 0.3s ease;
            box-shadow: 0 2px 10px rgba(0, 166, 147, 0.3);
        }

        .btn-signup:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 20px rgba(0, 166, 147, 0.4);
        }

        .mobile-menu {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            color: var(--navy);
            cursor: pointer;
        }

        /* Hero Section */
        .hero {
            background: var(--white);
            padding: 80px 40px 120px;
        }

        .hero-content {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            align-items: center;
        }

        .hero-text {
            text-align: left;
        }

        .hero h1 {
            font-size: 3.8rem;
            font-weight: 700;
            color: var(--navy);
            line-height: 1.2;
            margin-bottom: 24px;
        }

        .hero h1 .highlight {
            color: var(--teal);
        }

        .hero p {
            font-size: 1.3rem;
            color: var(--navy);
            margin-bottom: 40px;
            opacity: 0.85;
        }

        .hero-cta {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .cta-primary {
            display: inline-block;
            background: var(--teal);
            color: var(--white);
            padding: 18px 40px;
            font-size: 1.1rem;
            font-weight: 600;
            text-decoration: none;
            border-radius: 12px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 20px rgba(0, 166, 147, 0.3);
        }

        .cta-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 30px rgba(0, 166, 147, 0.4);
        }

        .cta-secondary {
            display: inline-block;
            background: transparent;
            color: var(--navy);
            padding: 18px 40px;
            font-size: 1.1rem;
            font-weight: 600;
            text-decoration: none;
            border-radius: 12px;
            border: 2px solid var(--navy);
            transition: all 0.3s ease;
        }

        .cta-secondary:hover {
            background: var(--navy);
            color: var(--white);
        }

        .hero-visual {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .phone-mockup {
            width: 340px;
            height: 680px;
            background: linear-gradient(135deg, var(--navy) 0%, #263447 100%);
            border-radius: 40px;
            padding: 12px;
            box-shadow: 0 30px 80px rgba(26, 35, 50, 0.4);
            position: relative;
            overflow: hidden;
        }

        .phone-screen {
            width: 100%;
            height: 100%;
            background: var(--white);
            border-radius: 32px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .app-logo {
            width: 80px;
            height: 80px;
            background: var(--teal);
            border-radius: 20px;
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: var(--white);
            font-weight: 700;
        }

        .video-card {
            width: 100%;
            height: 350px;
            background: linear-gradient(135deg, var(--navy) 0%, var(--teal) 100%);
            border-radius: 16px;
            margin-top: 20px;
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.8;
            }
        }

        /* Stats Section */
        .stats-section {
            background: var(--light-grey);
            padding: 60px 40px;
        }

        .stats-container {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 40px;
            text-align: center;
        }

        .stat-item h3 {
            font-size: 3rem;
            color: var(--teal);
            margin-bottom: 8px;
        }

        .stat-item p {
            font-size: 1.1rem;
            color: var(--navy);
            opacity: 0.8;
        }

        /* Features Section */
        .features-section {
            background: var(--white);
            padding: 100px 40px;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
        }

        .section-title {
            font-size: 3rem;
            font-weight: 700;
            color: var(--navy);
            text-align: center;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .section-title .highlight {
            color: var(--teal);
        }

        .section-subtitle {
            text-align: center;
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto 60px;
            opacity: 0.85;
            color: var(--navy);
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
            margin-top: 60px;
        }

        .feature-card {
            background: var(--white);
            padding: 40px;
            border-radius: 16px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 30px rgba(0, 166, 147, 0.15);
        }

        .feature-icon {
            width: 80px;
            height: 80px;
            background: var(--teal);
            border-radius: 20px;
            margin: 0 auto 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
        }

        .feature-card h3 {
            font-size: 1.5rem;
            color: var(--navy);
            margin-bottom: 16px;
        }

        .feature-card p {
            font-size: 1.05rem;
            color: var(--navy);
            opacity: 0.8;
        }

        /* Intent Matching Section */
        .intent-section {
            background: var(--light-grey);
            padding: 100px 40px;
        }

        .intent-visual {
            margin-top: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }

        .intent-path {
            flex: 1;
            text-align: center;
            min-width: 200px;
        }

        .intent-circle {
            width: 160px;
            height: 160px;
            background: var(--teal);
            border-radius: 50%;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-size: 1.2rem;
            font-weight: 600;
            box-shadow: 0 8px 30px rgba(0, 166, 147, 0.3);
        }

        .intent-label {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--navy);
        }

        .arrow {
            font-size: 3rem;
            color: var(--teal);
            margin: 0 10px;
        }

        .core-match {
            background: var(--navy);
            color: var(--white);
            padding: 50px 40px;
            border-radius: 20px;
            text-align: center;
            min-width: 300px;
            flex: 1;
        }

        .core-match h3 {
            font-size: 2.2rem;
            color: var(--teal);
            margin-bottom: 12px;
        }

        .core-match p {
            font-size: 1.15rem;
            color: var(--white);
        }

        /* How It Works */
        .how-it-works {
            background: var(--white);
            padding: 100px 40px;
        }

        .steps-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
            margin-top: 60px;
        }

        .step {
            text-align: center;
            position: relative;
        }

        .step-number {
            width: 60px;
            height: 60px;
            background: var(--teal);
            color: var(--white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 700;
            margin: 0 auto 20px;
        }

        .step h3 {
            font-size: 1.3rem;
            color: var(--navy);
            margin-bottom: 12px;
        }

        .step p {
            color: var(--navy);
            opacity: 0.8;
        }

        /* Testimonials */
        .testimonials {
            background: var(--light-grey);
            padding: 100px 40px;
        }

        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
            margin-top: 60px;
        }

        .testimonial-card {
            background: var(--white);
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }

        .testimonial-text {
            font-size: 1.1rem;
            color: var(--navy);
            margin-bottom: 24px;
            line-height: 1.6;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .author-avatar {
            width: 50px;
            height: 50px;
            background: var(--teal);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-weight: 600;
        }

        .author-info h4 {
            color: var(--navy);
            font-size: 1.1rem;
        }

        .author-info p {
            color: var(--navy);
            opacity: 0.7;
            font-size: 0.95rem;
        }

        /* B2B Section */
        .b2b-section {
            background: linear-gradient(135deg, var(--navy) 0%, #263447 100%);
            padding: 100px 40px;
            text-align: center;
        }

        .b2b-section h2 {
            font-size: 3rem;
            color: var(--white);
            margin-bottom: 24px;
        }

        .b2b-section p {
            font-size: 1.25rem;
            color: var(--white);
            opacity: 0.9;
            margin-bottom: 40px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        /* CTA Section */
        .cta-section {
            background: var(--white);
            padding: 100px 40px;
            text-align: center;
        }

        .cta-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .cta-section h2 {
            font-size: 3rem;
            color: var(--navy);
            margin-bottom: 24px;
        }

        .cta-section p {
            font-size: 1.25rem;
            color: var(--navy);
            opacity: 0.85;
            margin-bottom: 40px;
        }

        /* Footer */
        footer {
            background: var(--navy);
            color: var(--white);
            padding: 80px 40px 30px;
        }

        .footer-content {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr 1fr;
            gap: 60px;
            margin-bottom: 50px;
        }

        .footer-brand {
            max-width: 300px;
        }

        .footer-logo {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 20px;
        }

        .footer-logo-icon {
            width: 40px;
            height: 40px;
            background: var(--teal);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-weight: 700;
            font-size: 1.2rem;
        }

        .footer-logo span {
            font-size: 1.5rem;
            font-weight: 700;
        }

        .footer-brand p {
            opacity: 0.8;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .social-links {
            display: flex;
            gap: 16px;
        }

        .social-links a {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background: var(--teal);
        }

        .footer-column h4 {
            color: var(--teal);
            margin-bottom: 24px;
            font-size: 1.1rem;
        }

        .footer-column a {
            display: block;
            color: var(--white);
            text-decoration: none;
            margin-bottom: 12px;
            opacity: 0.8;
            transition: all 0.3s ease;
        }

        .footer-column a:hover {
            color: var(--teal);
            opacity: 1;
            padding-left: 4px;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: var(--white);
            opacity: 0.7;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .nav-links {
                display: none;
            }

            .mobile-menu {
                display: block;
            }

            .hero-content {
                grid-template-columns: 1fr;
                text-align: center;
                gap: 60px;
            }

            .hero-text {
                text-align: center;
            }

            .hero h1 {
                font-size: 2.8rem;
            }

            .hero-cta {
                justify-content: center;
                flex-direction: column;
            }

            .stats-container {
                grid-template-columns: repeat(2, 1fr);
            }

            .features-grid {
                grid-template-columns: 1fr;
            }

            .intent-visual {
                flex-direction: column;
            }

            .arrow {
                transform: rotate(90deg);
            }

            .steps-container {
                grid-template-columns: repeat(2, 1fr);
            }

            .testimonials-grid {
                grid-template-columns: 1fr;
            }

            .footer-content {
                grid-template-columns: 1fr;
                gap: 40px;
            }
        }

        @media (max-width: 640px) {
            nav {
                padding: 16px 20px;
            }

            .hero {
                padding: 40px 20px 80px;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .stats-container {
                grid-template-columns: 1fr;
            }

            .steps-container {
                grid-template-columns: 1fr;
            }
        }

        /* Add this to your <style> section */
        @keyframes emoji-bounce {

            0%,
            100% {
                transform: translateY(0) scale(1);
            }

            20% {
                transform: translateY(-18px) scale(1.15);
            }

            40% {
                transform: translateY(0) scale(1);
            }

            60% {
                transform: translateY(-8px) scale(1.08);
            }

            80% {
                transform: translateY(0) scale(1);
            }
        }

        .feature-icon {
            animation: emoji-bounce 2s infinite;
            transition: transform 0.2s;
        }

        .features-grid .feature-card:nth-child(1) .feature-icon {
            animation-delay: 0s;
        }

        .features-grid .feature-card:nth-child(2) .feature-icon {
            animation-delay: 0.2s;
        }

        .features-grid .feature-card:nth-child(3) .feature-icon {
            animation-delay: 0.4s;
        }

        .features-grid .feature-card:nth-child(4) .feature-icon {
            animation-delay: 0.6s;
        }

        .features-grid .feature-card:nth-child(5) .feature-icon {
            animation-delay: 0.8s;
        }

        .features-grid .feature-card:nth-child(6) .feature-icon {
            animation-delay: 1s;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav>
        <div class="nav-container">
            <a href="#" class="logo">
                <div class="logo-icon">N</div>
                <span>Nextop</span>
            </a>
            <div class="nav-links">
                <a href="#features">Features</a>
                <a href="#how-it-works">How It Works</a>
                <a href="#for-professionals">For Professionals</a>
                <a href="/recruiters">For Recruiters</a>
                <a href="/community">Hubs</a>
                <a href="/support">Support</a>
            </div>
            <div class="nav-auth">
                <a href="/login" class="btn-login">Login</a>
            </div>
            <button class="mobile-menu">☰</button>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>The Professional Ecosystem Built on <span class="highlight">Authenticity</span></h1>
                <p>Connect with verified peers for Mentorship, Collaboration, and Opportunity Discovery—all through
                    high-signal video profiles.</p>
                <div class="hero-cta">
                    <a href="#signup" class="cta-primary">Download Nextop & Find Your Mentor</a>
                    <a href="#how-it-works" class="cta-secondary">See How It Works</a>
                </div>
            </div>
            <div class="hero-visual">
                <div class="phone-mockup">
                    <div class="phone-screen">
                        <div class="app-logo">N</div>
                        <div class="video-card"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="stats-container">
            <div class="stat-item">
                <h3>50K+</h3>
                <p>Active Professionals</p>
            </div>
            <div class="stat-item">
                <h3>10K+</h3>
                <p>Mentorship Matches</p>
            </div>
            <div class="stat-item">
                <h3>500+</h3>
                <p>Partner Companies</p>
            </div>
            <div class="stat-item">
                <h3>95%</h3>
                <p>Match Satisfaction</p>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features-section">
        <div class="container">
            <h2 class="section-title">Static is History. <span class="highlight">Connection is Video-First</span></h2>
            <p class="section-subtitle">Your 30-second video profile isn't just an introduction—it's your professional
                story, your authenticity, and your opportunity to connect on a human level.</p>

            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">🎥</div>
                    <h3>30-Second Stories</h3>
                    <p>Share your journey, skills, and aspirations in an authentic video that goes beyond a resume.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">✓</div>
                    <h3>Verified Profiles</h3>
                    <p>Every connection is genuine. Our verification ensures you're networking with real professionals.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🎯</div>
                    <h3>High-Signal Matching</h3>
                    <p>No noise, no spam. Connect only with professionals who align with your goals and intent.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🤝</div>
                    <h3>Intent-Based Connections</h3>
                    <p>Choose your path: Mentorship, Collaboration, or Opportunity—we connect you accordingly.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🧠</div>
                    <h3>AI Smart Match</h3>
                    <p>Our algorithm learns from your preferences to deliver increasingly relevant connections.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">💬</div>
                    <h3>Seamless Communication</h3>
                    <p>Built-in messaging, video calls, and scheduling tools to nurture your professional relationships.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Intent Matching Section -->
    <section class="intent-section">
        <div class="container">
            <h2 class="section-title">High-Signal Matching. <span class="highlight">Zero Noise.</span></h2>
            <p class="section-subtitle">Define your intent, and let our AI connect you with the right people at the
                right time.</p>

            <div class="intent-visual">
                <div class="intent-path">
                    <div class="intent-circle">Mentorship</div>
                    <div class="intent-label">Find Guidance</div>
                </div>
                <div class="arrow">→</div>
                <div class="intent-path">
                    <div class="intent-circle">Collaboration</div>
                    <div class="intent-label">Build Together</div>
                </div>
                <div class="arrow">→</div>
                <div class="intent-path">
                    <div class="intent-circle">Opportunity</div>
                    <div class="intent-label">Discover Roles</div>
                </div>
                <div class="arrow">→</div>
                <div class="core-match">
                    <h3>Smart Match</h3>
                    <p>AI-Powered Algorithm</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section id="how-it-works" class="how-it-works">
        <div class="container">
            <h2 class="section-title">Get Started in <span class="highlight">4 Simple Steps</span></h2>

            <div class="steps-container">
                <div class="step">
                    <div class="step-number">1</div>
                    <h3>Create Your Profile</h3>
                    <p>Sign up and record your 30-second video introduction to showcase your authentic self.</p>
                </div>
                <div class="step">
                    <div class="step-number">2</div>
                    <h3>Choose Your Intent</h3>
                    <p>Select whether you're seeking mentorship, collaboration, or new opportunities.</p>
                </div>
                <div class="step">
                    <div class="step-number">3</div>
                    <h3>Get Matched</h3>
                    <p>Our AI algorithm connects you with verified professionals who align with your goals.</p>
                </div>
                <div class="step">
                    <div class="step-number">4</div>
                    <h3>Start Connecting</h3>
                    <p>Engage with your matches through video calls, messages, and collaborative projects.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section id="testimonials" class="testimonials">
        <div class="container">
            <h2 class="section-title">Success Stories from Our <span class="highlight">Community</span></h2>

            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <p class="testimonial-text">"I found my mentor within a week of joining Nextop. The video profiles
                        made it so easy to connect with someone who truly understood my career goals."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">SK</div>
                        <div class="author-info">
                            <h4>Sarah Kim</h4>
                            <p>Product Designer</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <p class="testimonial-text">"Nextop changed how I network. Instead of cold LinkedIn messages, I'm
                        having real conversations with people who share my passion for sustainable tech."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">MP</div>
                        <div class="author-info">
                            <h4>Marcus Patterson</h4>
                            <p>Software Engineer</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <p class="testimonial-text">"As a hiring manager, Nextop has transformed our recruitment. We're
                        connecting with candidates who are pre-vetted and genuinely interested in our mission."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">AJ</div>
                        <div class="author-info">
                            <h4>Aisha Johnson</h4>
                            <p>HR Director</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- B2B Section -->
    <section id="for-business" class="b2b-section">
        <div class="container">
            <h2>For Companies: Stop Recruiting. Start Engaging.</h2>
            <p>Access a curated ecosystem of pre-vetted professionals who are ready to mentor