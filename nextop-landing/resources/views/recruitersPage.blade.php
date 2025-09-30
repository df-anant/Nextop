<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Nextop for Recruiters: High-Signal Talent Engagement</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <style>
        /* Custom colors based on the brand mandate (Navy/Dark Teal and Bright Teal/Mint) */

        :root {

            --color-navy: #1C3A5B;
            /* Darker tone for backgrounds/text */

            --color-teal: #00A693;
            /* Bright Mint/Teal accent */

        }

        .bg-navy {
            background-color: var(--color-teal);
        }

        .text-navy {
            color: var(--color-navy);
        }

        .bg-teal {
            background-color: var(--color-teal);
        }

        .text-teal {
            color: var(--color-teal);
        }

        body {
            font-family: 'Inter', sans-serif;
        }

        /* Make every button and main link go teal on hover */
        a.bg-navy,
        a.bg-teal,
        a.back-home-btn,
        a.inline-block,
        button,
        a.font-bold.py-3.px-8 {
            transition: background 0.3s, color 0.3s;
        }

        a.bg-navy:hover,
        a.bg-teal:hover,
        a.back-home-btn:hover,
        a.inline-block:hover,
        button:hover,
        a.font-bold.py-3.px-8:hover {
            background-color: var(--color-teal) !important;
            color: #fff !important;
        }

        /* Add this to your <style> section */
        .back-home-btn {
            transition: background 0.3s, color 0.3s;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
        }

        .back-home-btn:hover {
            background-color: var(--color-teal);
            color: #fff !important;
        }
    </style>

</head>

<body class="bg-white">



    <!-- Navigation Header -->

    <header class="p-4 md:p-6 shadow-md">

        <div class="max-w-7xl mx-auto flex justify-between items-center">

            <h1 class="text-2xl font-extrabold text-teal">NEXTOP <span class="text-navy">FOR RECRUITERS</span></h1>

            <a href="/home" class="back-home-btn text-sm font-semibold text-navy hover:text-teal transition">Back to
                Home</a>

        </div>

    </header>



    <!-- 1. Hero Section: Stop Recruiting. Start Engaging. -->

    <section class="bg-navy py-16 md:py-24 text-white">

        <div class="max-w-7xl mx-auto px-6 text-center">

            <p class="text-teal text-lg font-semibold mb-3">FINALLY, HIGH-SIGNAL TALENT</p>

            <h2 class="text-4xl sm:text-5xl md:text-6xl font-extrabold mb-6 leading-tight">

                Stop <span class="text-navy">Recruiting</span>. <br class="sm:hidden"> Start <span class="text-navy">Engaging</span>.

            </h2>

            <p class="text-white-300 text-xl md:text-2xl max-w-3xl mx-auto mb-10">

                Move beyond the resume wall. Nextop provides immediate, authentic insights into cultural fit and
                communication—before the interview.

            </p>


        </div>

    </section>



    <!-- 2. Problem Section (Referencing the uploaded image/pitch deck) -->

    <section class="py-16 md:py-24 bg-gray-50">

        <div class="max-w-6xl mx-auto px-6 text-center">

            <h3 class="text-3xl md:text-4xl font-bold text-navy mb-12">The <span class="text-teal">Recruiter's
                    Challenge</span>: Low Signal, High Effort</h3>

            <div class="grid md:grid-cols-3 gap-10 text-left">

                <!-- Problem 1: No Personality Assessment -->

                <div
                    class="bg-white p-6 rounded-xl shadow-lg border-t-4 border-teal hover:shadow-xl transition duration-300">

                    <svg class="w-10 h-10 text-teal mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>

                    <h4 class="text-xl font-bold text-navy mb-3">The Cultural Black Box</h4>

                    <p class="text-gray-600">You hire based on skills, but retention relies on fit. Static résumés
                        reveal zero about a candidate's communication style, passion, or teamwork potential.</p>

                </div>

                <!-- Problem 2: Resume Walls / Static Profiles -->

                <div
                    class="bg-white p-6 rounded-xl shadow-lg border-t-4 border-teal hover:shadow-xl transition duration-300">

                    <svg class="w-10 h-10 text-teal mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                        </path>
                    </svg>

                    <h4 class="text-xl font-bold text-navy mb-3">Wasted Hours Screening</h4>

                    <p class="text-gray-600">Sifting through hundreds of PDFs is slow, expensive, and provides a low
                        signal-to-noise ratio. The time-to-hire metric constantly climbs.</p>

                </div>

                <!-- Problem 3: No Structured Pathways -->

                <div
                    class="bg-white p-6 rounded-xl shadow-lg border-t-4 border-teal hover:shadow-xl transition duration-300">

                    <svg class="w-10 h-10 text-teal mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>

                    <h4 class="text-xl font-bold text-navy mb-3">Mismatched Intent</h4>

                    <p class="text-gray-600">Traditional networks are clogged with casual users. You need talent that is
                        actively engaged in *Opportunity Discovery*, not just browsing.</p>

                </div>

            </div>

        </div>

    </section>



    <!-- 3. Solution Section: Nextop's Three Pillars -->

    <section class="py-16 md:py-24">

        <div class="max-w-6xl mx-auto px-6 text-center">

            <h3 class="text-3xl md:text-4xl font-bold text-navy mb-16">The Nextop Advantage: Find <span
                    class="text-teal">Fit</span>, Not Just Features</h3>



            <div class="space-y-16">

                <!-- Pillar 1: Video-First (Authenticity) -->

                <div class="md:flex md:space-x-12 items-center">

                    <div class="md:w-1/2 text-left mb-8 md:mb-0">

                        <span class="text-teal text-lg font-semibold uppercase tracking-wider">Pillar 1: Signal</span>

                        <h4 class="text-3xl font-bold text-navy mt-2 mb-4">Authentic Insights in 30 Seconds</h4>

                        <p class="text-gray-700 text-lg">Replace the static summary with a mandatory video introduction.
                            Instantly screen for personality, communication skills, and energy level.</p>

                        <ul class="mt-4 text-gray-700 space-y-2">

                            <li><span class="text-teal font-bold mr-2">✓</span> Assess soft skills instantly.</li>

                            <li><span class="text-teal font-bold mr-2">✓</span> Drastically reduce time spent on
                                early-stage calls.</li>

                            <li><span class="text-teal font-bold mr-2">✓</span> Discover cultural ambassadors for your
                                team.</li>

                        </ul>

                    </div>

                    <div class="md:w-1/2 flex justify-center">

                        <div
                            class="w-full max-w-sm h-64 bg-gray-200 rounded-xl shadow-2xl flex items-center justify-center text-navy font-semibold italic border-4 border-teal">

                            [Mockup: Video Profile Screen]

                        </div>

                    </div>

                </div>



                <!-- Pillar 2: AI Smart Match (Efficiency) -->

                <div class="md:flex flex-row-reverse md:space-x-reverse md:space-x-12 items-center">

                    <div class="md:w-1/2 text-left mb-8 md:mb-0">

                        <span class="text-teal text-lg font-semibold uppercase tracking-wider">Pillar 2:
                            Precision</span>

                        <h4 class="text-3xl font-bold text-navy mt-2 mb-4">AI-Driven Intent Matching</h4>

                        <p class="text-gray-700 text-lg">Our proprietary AI filters candidates who are specifically
                            looking for a job (Opportunity Discovery) vs. mentorship or collaboration.</p>

                        <ul class="mt-4 text-gray-700 space-y-2">

                            <li><span class="text-teal font-bold mr-2">✓</span> Target only active, high-intent
                                professionals.</li>

                            <li><span class="text-teal font-bold mr-2">✓</span> Filter by hard skills, salary
                                expectations, AND explicit career goals.</li>

                            <li><span class="text-teal font-bold mr-2">✓</span> Receive only *qualified leads* tailored
                                to your role.</li>

                        </ul>

                    </div>

                    <div class="md:w-1/2 flex justify-center">

                        <div
                            class="w-full max-w-sm h-64 bg-gray-200 rounded-xl shadow-2xl flex items-center justify-center text-navy font-semibold italic border-4 border-teal">

                            [Mockup: AI Filter Dashboard]

                        </div>

                    </div>

                </div>



                <!-- Pillar 3: The Talent Ecosystem (Engagement/Sponsorship) -->

                <div class="md:flex md:space-x-12 items-center">

                    <div class="md:w-1/2 text-left mb-8 md:mb-0">

                        <span class="text-teal text-lg font-semibold uppercase tracking-wider">Pillar 3:
                            Ecosystem</span>

                        <h4 class="text-3xl font-bold text-navy mt-2 mb-4">Engage Talent Before You Hire</h4>

                        <p class="text-gray-700 text-lg">Position your brand as a thought leader, not just an employer.
                            Sponsor our Niche Community Hubs and host Virtual Events to engage talent long before they
                            are ready to apply.</p>

                        <ul class="mt-4 text-gray-700 space-y-2">

                            <li><span class="text-teal font-bold mr-2">✓</span> *Brand Building:* Sponsor the "Python
                                Coders Lounge" Hub.</li>

                            <li><span class="text-teal font-bold mr-2">✓</span> *Lead Generation:* Host exclusive
                                virtual workshops in the app.</li>

                            <li><span class="text-teal font-bold mr-2">✓</span> *High ROI:* Convert engaged community
                                members into high-quality candidates.</li>

                        </ul>

                    </div>

                    <div class="md:w-1/2 flex justify-center">

                        <div
                            class="w-full max-w-sm h-64 bg-gray-200 rounded-xl shadow-2xl flex items-center justify-center text-navy font-semibold italic border-4 border-teal">

                            [Mockup: Virtual Event Screen]

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- 4. Pricing / CTA Section -->

    <section id="demo" class="py-16 md:py-24 bg-navy text-white">

        <div class="max-w-5xl mx-auto px-6 text-center">

            <h3 class="text-3xl md:text-4xl font-bold mb-4">Ready to Hire Better?</h3>

            <p class="text-white-300 text-xl mb-10">We offer flexible Enterprise Seat Subscriptions and tailored
                Sponsorship Packages for maximum engagement.</p>



            <div class="flex flex-col md:flex-row gap-8 justify-center">


                <div class="bg-white text-navy p-8 rounded-xl shadow-2xl w-full md:w-1/2">

                    <h4 class="text-2xl font-bold text-teal mb-3">Ecosystem Engagement (Sponsorship)</h4>

                    <p class="text-gray-600 mb-6">Sponsor a Community Hub or host a private event to drive brand
                        awareness and talent pipeline early.</p>

                    <a href="#"
                        class="inline-block bg-navy text-white font-bold py-3 px-8 rounded-xl hover:bg-opacity-90 transition transform hover:scale-105 duration-300">

                        Explore Sponsorship

                    </a>

                </div>

            </div>



            <p class="mt-12 text-lg font-semibold">

                Want to see it in action?

                <a href="#" class="text-teal hover:underline ml-2">Book a 15-Minute Live Demo.</a>

            </p>



        </div>

    </section>



    <!-- Footer -->

    <footer class="py-8 bg-gray-100 text-center text-gray-600">

        &copy; 2025 Nextop Technologies. Network Your Way To The Top.

    </footer>



</body>

</html>