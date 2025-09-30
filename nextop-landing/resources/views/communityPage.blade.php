<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Nextop Community Hubs | Professional Ecosystem</title>

    <style>
        /* CSS Variables for New Palette & Shadows */

        :root {

            --color-primary: #1E3F5F;
            /* Deep Indigo for main text and headers */

            --color-accent: #00C9A7;
            /* Vibrant Cyan/Teal */

            --color-light-bg: #F5F7FA;
            /* Very subtle off-white */

            --color-white: #FFFFFF;

            --color-text-dark: #1A1A1A;

            --shadow-soft: 0 10px 30px rgba(0, 0, 0, 0.08);
            /* Soft, elevated shadow */

            --shadow-accent: 0 8px 20px rgba(0, 201, 167, 0.3);
            /* Vibrant button shadow */

        }



        /* General Reset and Fonts */

        body {

            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;

            margin: 0;

            padding: 0;

            color: var(--color-text-dark);

            line-height: 1.6;

            background-color: var(--color-white);
            /* Pure white for maximum brightness */

        }

        .container {

            width: 90%;

            max-width: 1200px;

            margin: 0 auto;

            padding: 80px 0;
            /* Increased vertical padding */

        }

        h1,
        h2,
        h3 {

            color: var(--color-primary);

            margin-bottom: 20px;

        }

        h1 {
            font-size: 3.8em;
            font-weight: 800;
            line-height: 1.1;
        }

        h2 {
            font-size: 2.5em;
            font-weight: 700;
        }

        h3 {
            font-size: 1.5em;
            font-weight: 600;
            margin-top: 0;
        }



        /* Color Utility Classes */

        .primary-text {
            color: var(--color-primary);
        }

        .accent-text {
            color: var(--color-accent);
        }



        /* Buttons (Soft Gradient, Outstanding Hover Effect) */

        .btn {

            display: inline-block;

            padding: 16px 40px;

            border-radius: 30px;

            text-decoration: none;

            font-weight: 700;

            letter-spacing: 0.5px;

            transition: all 0.3s ease;

            border: none;

            box-shadow: var(--shadow-accent);

            background-image: linear-gradient(45deg, #00C9A7, #009D80);
            /* Soft gradient */

            color: var(--color-white);

        }

        .btn:hover {

            transform: translateY(-3px);

            opacity: 0.9;

            box-shadow: 0 12px 30px rgba(0, 201, 167, 0.4);

        }



        /* Header/Nav */

        header {

            background-color: var(--color-white);

            padding: 20px 5%;

            border-bottom: 1px solid #EEEEEE;

        }

        .logo {

            font-size: 2em;

            font-weight: 900;

            color: var(--color-primary);

        }



        /* Hero Section */

        #hero {

            text-align: center;

            padding: 120px 0;

            background-color: var(--color-white);

        }

        .hero-subtitle {

            max-width: 700px;

            margin: 20px auto 60px;

            font-size: 1.2em;

            color: #555;

            font-weight: 400;

        }



        /* Mobile App Mockup Visual (Cleaner, simpler) */

        .hero-img {

            max-width: 320px;

            height: auto;

            margin: 70px auto 0;

            background: linear-gradient(135deg, var(--color-primary), #365D82);

            border-radius: 24px;

            box-shadow: var(--shadow-soft);

            padding: 10px;

        }

        .hero-img-screen {

            height: 420px;

            background-color: #FAFAFA;
            /* Bright screen */

            border-radius: 18px;

            color: var(--color-primary);

            font-size: 0.9em;

            padding: 25px;

            text-align: left;

        }

        .hero-img-screen h4 {

            margin: 15px 0 5px;

            font-weight: 600;

            color: var(--color-primary);

            border-left: 3px solid var(--color-accent);

            padding-left: 10px;

            font-size: 1.1em;

        }



        /* Pillars, Workshops, and Category Card Style (Shared, Floating Look) */

        .card {

            background-color: var(--color-white);

            padding: 35px;

            border-radius: 16px;

            box-shadow: var(--shadow-soft);

            text-align: left;

            transition: transform 0.3s, box-shadow 0.3s;

            border: 1px solid #EDEDED;

        }

        .card:hover {

            transform: translateY(-5px);

            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);

        }

        .pillar-icon {

            font-size: 3.5em;

            margin-bottom: 10px;

            display: block;

            color: var(--color-accent);

        }



        /* Pillars Section */

        #pillars {

            text-align: center;

            background-color: var(--color-light-bg);
            /* Subtle separation */

        }

        .pillars-grid {

            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 30px;

            margin-top: 60px;

        }

        .pillar-card p {
            color: #555;
        }



        /* Benefits Section */

        #benefits {

            background-color: var(--color-white);

            padding: 80px 0;

        }

        .benefits-grid {

            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 30px;

            margin-top: 50px;

        }

        .benefit-item {

            padding: 25px;

            border-radius: 12px;

            background-color: #F0FBFF;
            /* Light blue hint */

            border: 1px solid #E0F0FF;

            text-align: left;

        }

        .benefit-item h3 {
            color: var(--color-primary);
        }



        /* Hub Examples Section */

        #hub-details {

            padding: 80px 0;

            text-align: center;

            background-color: var(--color-light-bg);

        }

        .hub-categories {

            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 30px;

            margin-top: 60px;

        }

        .hub-category-card {

            /* Inherits .card styles */

            padding: 30px;

        }

        .hub-category-card h3 {

            color: var(--color-accent);

            border-bottom: 1px solid #EEE;

            padding-bottom: 10px;

            margin-bottom: 15px;

            font-size: 1.3em;

        }

        .hub-category-card ul {

            list-style: none;

            padding-left: 0;

            margin-top: 0;

        }

        .hub-category-card ul li {

            padding: 10px 0;

            color: #555;

            font-size: 1em;

            font-weight: 500;

        }

        .hub-category-card ul li:before {

            content: "✦";
            /* Star icon for list */

            color: var(--color-primary);

            font-weight: bold;

            display: inline-block;

            width: 1.2em;

            margin-left: -1.2em;

        }



        /* Workshop Section */

        #workshops {

            background-color: var(--color-white);

        }

        .workshop-grid {

            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 30px;

            margin-top: 50px;

            text-align: left;

        }

        .workshop-card {

            /* Inherits .card styles */

            background-color: var(--color-light-bg);
            /* Slightly darker background for workshops to contrast */

            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);

            border: 1px solid #E9E9E9;

            padding: 30px;

        }

        .workshop-card:hover {

            transform: translateY(-3px);

        }

        .workshop-card .pillar-icon {

            font-size: 3em;

            color: var(--color-primary);

        }

        .workshop-card p {
            font-size: 0.95em;
            color: #555;
        }





        /* B2B Section */

        #b2b-cta {

            text-align: center;

            padding: 80px 0;

            background-color: var(--color-light-bg);

        }

        .metric-card {

            display: inline-block;

            padding: 30px 40px;

            margin: 20px 20px 40px;

            background-color: var(--color-white);

            border-radius: 16px;

            box-shadow: var(--shadow-soft);

            border: 1px solid #EEE;

        }

        .metric-card span:first-child {

            font-size: 3.5em;

            font-weight: 800;

            display: block;

            color: var(--color-accent);

            line-height: 1;

        }

        .metric-card span:last-child {

            color: var(--color-primary);

            font-size: 1.2em;

            font-weight: 500;

        }



        /* Footer */

        footer {

            text-align: center;

            padding: 50px 0;

            background-color: var(--color-primary);
            /* Dark footer provides anchor */

            color: #E0E0E0;

        }

        footer a {
            color: var(--color-white);
            margin: 0 15px;
            text-decoration: none;
            border-bottom: 1px solid transparent;
            transition: color 0.2s;
        }

        footer a:hover {
            color: var(--color-accent);
        }



        /* Media Queries for Mobile Responsiveness */

        @media (max-width: 768px) {

            h1 {
                font-size: 2.5em;
            }

            h2 {
                font-size: 2em;
            }

            .pillars-grid,
            .benefits-grid,
            .hub-categories,
            .workshop-grid {

                grid-template-columns: 1fr;

            }

            .metric-card {

                display: block;

                margin: 15px auto;

                width: 90%;

            }

            .container {
                padding: 50px 0;
            }

            .hero-img {
                transform: none;
                margin-top: 40px;
            }

            .hero-img-screen {
                height: 350px;
            }

            .btn {
                padding: 14px 30px;
            }

        }
    </style>

</head>

<body>



    <header>

        <div class="logo">NEXTOP</div>

    </header>



    <section id="hero" class="container">

        <h1>The Professional Ecosystem Built on <span class="accent-text">High-Signal Growth.</span></h1>

        <p class="hero-subtitle">

            Nextop Community Hubs are verified, curated spaces for <strong>skill-sharing, peer mentorship, and real-time
                Q&A</strong>. Connect with the right people, instantly.

        </p>

        <a href="#" class="btn">Join the Hubs - Download Nextop</a>



        <div class="hero-img">

            <div class="hero-img-screen">

                <div style="font-weight: 700; font-size: 1.2em; margin-bottom: 25px; color: var(--color-accent);">

                    <span role="img" aria-label="Community Icon" style="margin-right: 8px;">👥</span> Community Hubs

                </div>



                <h4>Product Design Critiques</h4>

                <p style="color: #888;">12,000 members</p>



                <h4>Python Lounge: Algorithms</h4>

                <p style="color: #888;">25,000 members - sponsored by <strong>Acme Corp</strong></p>



                <h4>FinTech Career Switchers</h4>

                <p style="color: #888;">4,000 members</p>



                <h4 style="margin-top: 40px; font-weight: 700; color: var(--color-accent);">[LIVE WORKSHOP: Generative
                    AI for Engineers]</h4>

            </div>

        </div>

    </section>



    <section id="pillars" class="container">

        <h2 class="primary-text">Your Community is Only as Good as its <span class="accent-text">Authenticity.</span>
        </h2>

        <p style="max-width: 800px; margin: 0 auto 60px; color: #555; font-size: 1.1em;">

            We eliminate the noise and spam of traditional networks, ensuring every interaction contributes to your
            professional trajectory.

        </p>



        <div class="pillars-grid">

            <div class="card pillar-card">

                <span class="pillar-icon" role="img" aria-label="Checkmark">✅</span>

                <h3>1. <span class="accent-text">Verified</span> Profiles</h3>

                <p class="primary-text">Every user is part of the Nextop network, verified by video and career history.
                    This guarantees <strong>high-signal interactions</strong> and credible advice.</p>

            </div>

            <div class="card pillar-card">

                <span class="pillar-icon" role="img" aria-label="Target">🎯</span>

                <h3>2. Niche <span class="accent-text">Intent-Focused</span></h3>

                <p class="primary-text">Hubs are micro-focused on specific skills (e.g., Python), career intents (e.g.,
                    career switching), and industries. No sifting through unrelated content.</p>

            </div>

            <div class="card pillar-card">

                <span class="pillar-icon" role="img" aria-label="Up Arrow">🚀</span>

                <h3>3. Exclusive <span class="accent-text">Expert Access</span></h3>

                <p class="primary-text">Premium members get access to exclusive channels and <strong>expert-led live
                        events</strong> (organized via Hubs, hosted on Zoom/Teams) for direct Q&A and private
                    mentorship.</p>

            </div>

        </div>

    </section>



    <section id="workshops" class="container" style="text-align: center; padding-bottom: 80px;">

        <h2 class="primary-text">Master the Next Wave: <span class="accent-text">Weekly Workshops & Training.</span>
        </h2>

        <p style="max-width: 850px; margin: 0 auto 50px; color: #555; font-size: 1.1em;">

            Hubs provide the premier global platform for organizing and accessing high-impact, expert-led training
            sessions across all major professional sectors. <strong>Organize diverse workshops</strong> covering
            everything from technical skills to leadership development.

        </p>



        <div class="workshop-grid">

            <div class="card workshop-card">

                <span class="pillar-icon" role="img" aria-label="Robot">🤖</span>

                <h3>Generative AI for Efficiency</h3>

                <p>Practical steps for integrating AI into <strong>non-technical workflows</strong> (Marketing,
                    Operations, HR), focusing on efficiency gains and ethical deployment. Includes a cross-industry
                    relevance discussion.</p>

            </div>

            <div class="card workshop-card">

                <span class="pillar-icon" role="img" aria-label="Chart">📊</span>

                <h3>Financial Modeling & Compliance</h3>

                <p>Essential updates on global regulatory changes and their impact on FinTech and corporate finance. Led
                    by a Big Four veteran.</p>

            </div>

            <div class="card workshop-card">

                <span class="pillar-icon" role="img" aria-label="Microphone">🎤</span>

                <h3>Executive Presence & Public Speaking</h3>

                <p>Soft skill training focused on communication, negotiation, and building executive presence. Open to
                    all professionals seeking leadership roles.</p>

            </div>

        </div>

        <a href="#" class="btn" style="margin-top: 50px;">See the Full Workshop Schedule</a>

    </section>



    <section id="hub-details" class="container">

        <h2 class="primary-text">Find Your <span class="accent-text">Dedicated Niche</span></h2>

        <p style="max-width: 800px; margin: 0 auto 60px; color: #555; font-size: 1.1em;">

            Browse communities organized by skill, career objective, and exclusive opportunities.

        </p>



        <div class="hub-categories">



            <div class="card hub-category-card">

                <h3>Skill & Industry Mastery</h3>

                <p>Collaborative spaces for technical Q&A, knowledge sharing, and troubleshooting.</p>

                <ul>

                    <li>The Python Lounge: Data Science</li>

                    <li>FinTech Modeling Lab</li>

                    <li>Product Design Critiques</li>

                    <li>Salesforce Admins Only</li>

                </ul>

            </div>



            <div class="card hub-category-card">

                <h3>Career Intent & Transition</h3>

                <p>Structured tracks dedicated to guiding professionals through specific career milestones.</p>

                <ul>

                    <li>Services to Product Management</li>

                    <li>Scaling Your Team 101</li>

                    <li>First 90 Days Survival</li>

                    <li>PMP Certification Study Group</li>

                </ul>

            </div>



            <div class="card hub-category-card">

                <h3>The Opportunity Ecosystem</h3>

                <p>Exclusive channels for curated job leads, premium events, and direct brand engagement.</p>

                <ul>

                    <li>Acme Corp Hiring Day (Sponsored)</li>

                    <li>Post Event Networking</li>

                    <li>Targeted Job Feed (Premium)</li>

                    <li>Executive AMAs and Workshops</li>

                </ul>

            </div>



        </div>

    </section>



    <section id="benefits" class="container" style="background-color: var(--color-light-bg);">

        <h2 class="primary-text" style="text-align: center;">The <span class="accent-text">ROI</span> on Authentic
            Engagement</h2>

        <p style="max-width: 800px; margin: 0 auto 50px; color: #555; text-align: center; font-size: 1.1em;">

            The focused nature of Hubs ensures you get maximum value for your time.

        </p>

        <div class="benefits-grid">

            <div class="benefit-item">

                <h3 class="primary-text">Real-Time Intelligence</h3>

                <p>Get real-time updates on industry shifts, salary trends, and new tools directly from peers and
                    experts who are actively working in the field.</p>

            </div>

            <div class="benefit-item">

                <h3 class="primary-text">Accelerated Mentorship</h3>

                <p>Quickly find and engage with senior professionals outside of your direct 1:1 matches. The Hubs are
                    the easiest way to get your complex questions answered fast.</p>

            </div>

            <div class="benefit-item">

                <h3 class="primary-text">Targeted Opportunities</h3>

                <p>Be the first to hear about internal team openings, networking events, and sponsored challenges posted
                    directly by companies within your niche Hub.</p>

            </div>

        </div>

    </section>



    <section id="b2b-cta" class="container" style="background-color: var(--color-white);">

        <h2 class="primary-text">For Brands: Stop Recruiting. Start <span class="accent-text">Engaging.</span></h2>

        <p style="max-width: 800px; margin: 0 auto 40px; font-size: 1.1em;">

            The Nextop Community Hubs provide <strong>unparalleled access</strong> to highly-segmented, active, and
            career-motivated talent. Sponsor a Hub or Workshop to strategically build your employer brand and host
            targeted virtual events.

        </p>



        <div style="margin-bottom: 40px;">

            <div class="metric-card">

                <span>10K+</span>

                <span>Active Users in Tech Hubs</span>

            </div>

            <div class="metric-card">

                <span>85%</span>

                <span>Average Engagement Rate</span>

            </div>

        </div>



        <a href="#" class="btn" style="background-image: linear-gradient(45deg, #3876BF, #1E3F5F);">Inquire About Hub
            Sponsorship & Events</a>

    </section>



    <footer style="background-color: var(--color-primary);">

        <div class="container" style="padding: 40px 0;">

            <h3 style="color: var(--color-white); margin-bottom: 20px;">Ready to Network Your Way to the Top?</h3>

            <div style="font-size: 0.9em; color: #AAAAAA; margin-top: 15px;">

                <a href="#">Privacy Policy</a> |

                <a href="#">Terms of Service</a> |

                <a href="#">Careers</a>

            </div>

            <p style="font-size: 0.8em; color: #5A7799; margin-top: 15px;">© 2025 Nextop. All rights reserved.</p>

        </div>

    </footer>



</body>

</html>