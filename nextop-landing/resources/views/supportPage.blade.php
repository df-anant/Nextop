<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support Center</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        :root {
            --navy-teal: #008080;
            --white: #ffffff;
            --light-gray: #f0f0f0;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            /* Align to the top, not center */
            min-height: 100vh;
            /* Lighter gradient background from white to navy teal */
            background: linear-gradient(135deg, #f0f8ff 0%, #e0ffff 100%);
            padding: 40px 20px;
        }

        .support-container {
            width: 900px;
            max-width: 100%;
            background-color: var(--white);
            border-radius: 20px;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.1),
                0 10px 10px rgba(0, 0, 0, 0.08);
            padding: 40px;
        }

        .header {
            text-align: center;
            margin-bottom: 40px;
        }

        .header h1 {
            color: var(--navy-teal);
            font-size: 2.5em;
            margin-bottom: 10px;
        }

        .search-box {
            display: flex;
            margin: 20px auto;
            width: 80%;
            border: 2px solid var(--light-gray);
            border-radius: 10px;
            overflow: hidden;
            background-color: var(--light-gray);
        }

        .search-box input {
            flex-grow: 1;
            padding: 15px;
            border: none;
            outline: none;
            background-color: var(--light-gray);
            font-size: 16px;
        }

        .search-box button {
            background-color: var(--navy-teal);
            color: var(--white);
            border: none;
            padding: 0 20px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .search-box button:hover {
            background-color: #006666;
        }

        .search-box i {
            font-size: 1.5em;
        }

        .section-title {
            color: var(--navy-teal);
            border-bottom: 2px solid var(--navy-teal);
            padding-bottom: 5px;
            margin-top: 30px;
            margin-bottom: 20px;
        }

        .faq-item {
            border-bottom: 1px solid var(--light-gray);
            padding: 15px 0;
        }

        .faq-question {
            font-weight: bold;
            color: #333;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .faq-answer {
            padding: 10px 0 0 0;
            color: #555;
            display: none;
            /* Hidden by default */
            transition: all 0.3s ease;
        }

        .contact-methods {
            display: flex;
            justify-content: space-around;
            text-align: center;
            margin-top: 20px;
        }

        .method-card {
            padding: 20px;
            border: 1px solid var(--light-gray);
            border-radius: 10px;
            width: 30%;
            transition: box-shadow 0.3s;
        }

        .method-card:hover {
            box-shadow: 0 5px 15px rgba(0, 128, 128, 0.1);
        }

        .method-card i {
            font-size: 3em;
            color: var(--navy-teal);
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    <div class="support-container">
        <div class="header">
            <h1>How Can We Help You Today?</h1>
            <p>Search our knowledge base or contact us directly.</p>
        </div>

        <div class="search-box">
            <input type="text" placeholder="Search for articles, help topics, or keywords..." />
            <button><i class="bx bx-search"></i></button>
        </div>

        <h2 class="section-title">Frequently Asked Questions</h2>
        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question">
                    How do I reset my password?
                    <i class="bx bx-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    You can reset your password by clicking the "Forgot Your Password?" link on the sign-in page. We
                    will send a reset link to your registered email address.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    What payment methods do you accept?
                    <i class="bx bx-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    We currently accept Visa, MasterCard, American Express, and PayPal for all purchases.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    Can I update my email address?
                    <i class="bx bx-chevron-down"></i>
                </div>
                <div class="faq-answer">
                    Yes, you can update your email address in your Account Settings after logging in.
                </div>
            </div>
        </div>

        <h2 class="section-title">Need to Talk to Someone?</h2>
        <div class="contact-methods">
            <a href="mailto:support@example.com" class="method-card" style="text-decoration: none; color: inherit;">
                <i class="bx bx-envelope"></i>
                <h3>Email Support</h3>
                <p style="font-size: 0.9em;">We'll respond to your inquiry within 24 hours.</p>
            </a>
            <div class="method-card">
                <i class="bx bx-chat"></i>
                <h3>Live Chat</h3>
                <p style="font-size: 0.9em;">Chat with an agent instantly (Mon-Fri, 9am-5pm).</p>
            </div>
            <div class="method-card">
                <i class="bx bx-phone"></i>
                <h3>Phone Support</h3>
                <p style="font-size: 0.9em;">Call us at 1-800-HELPNOW.</p>
            </div>
        </div>

    </div>

    <script>
        // Simple script to toggle FAQ answers
        const faqItems = document.querySelectorAll('.faq-item');

        faqItems.forEach(item => {
            item.querySelector('.faq-question').addEventListener('click', () => {
                const answer = item.querySelector('.faq-answer');
                const icon = item.querySelector('.bx');

                if (answer.style.display === 'block') {
                    answer.style.display = 'none';
                    icon.classList.remove('bx-chevron-up');
                    icon.classList.add('bx-chevron-down');
                } else {
                    answer.style.display = 'block';
                    icon.classList.remove('bx-chevron-down');
                    icon.classList.add('bx-chevron-up');
                }
            });
        });
    </script>

</body>

</html>