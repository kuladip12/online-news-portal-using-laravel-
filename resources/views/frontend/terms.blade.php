@extends('layouts.app') 
@section('title', 'About')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms and Conditions</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .bg-custom {
            background-color: #edf2f8;
        }
        .terms-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }
        .terms-section {
            margin-bottom: 2rem;
        }
        .terms-section h2 {
            font-size: 1.75rem;
            margin-top: 1.5rem;
            margin-bottom: 1rem;
        }
        .terms-section p {
            font-size: 1rem;
            line-height: 1.6;
        }
        .terms-section ul {
            list-style: none;
            padding-left: 0;
        }
        .terms-section ul li {
            position: relative;
            padding-left: 20px;
            margin-bottom: 0.5rem;
        }
        .terms-section ul li:before {
            content: "\f00c"; /* Font Awesome check icon */
            font-family: "Font Awesome 5 Free";
            position: absolute;
            left: 0;
            top: 0;
            font-weight: 900;
            color: #28a745;
        }
        .contact-info p {
            margin-bottom: 0.5rem;
        }
        .contact-info i {
            color: #007bff;
            margin-right: 0.5rem;
        }
    </style>
</head>
<body>

<div class="container-fluid bg-custom py-5">
    <div class="container">
        <div class="terms-title text-center">
            Terms and Conditions
        </div>
        <div class="terms-section">
            <p>Welcome to our News Portal. If you continue to browse and use this website, you are agreeing to comply with and be bound by the following terms and conditions of use, which together with our privacy policy govern our relationship with you in relation to this website. If you disagree with any part of these terms and conditions, please do not use our website.</p>
        </div>

        <div class="terms-section">
            <h2>1. Use of the Website</h2>
            <p>By accessing the website, you warrant and represent to the website owner that you are legally entitled to do so and to make use of information made available via the website.</p>
        </div>

        <div class="terms-section">
            <h2>2. Trademarks</h2>
            <p>The trademarks, names, logos, and service marks (collectively "trademarks") displayed on this website are registered and unregistered trademarks of the website owner. Nothing contained on this website should be construed as granting any license or right to use any trademark without the prior written permission of the website owner.</p>
        </div>

        <div class="terms-section">
            <h2>3. Content</h2>
            <p>The content on this website is for your general information and use only. It is subject to change without notice.</p>
        </div>

        <div class="terms-section">
            <h2>4. User Conduct</h2>
            <p>You agree to use the website only for lawful purposes and in a way that does not infringe the rights of, restrict, or inhibit anyone else's use and enjoyment of the website. Prohibited behavior includes harassing or causing distress or inconvenience to any other user, transmitting obscene or offensive content, or disrupting the normal flow of dialogue within our website.</p>
        </div>

        <div class="terms-section">
            <h2>5. Intellectual Property</h2>
            <p>This website contains material which is owned by or licensed to us. This material includes, but is not limited to, the design, layout, look, appearance, and graphics. Reproduction is prohibited other than in accordance with the copyright notice, which forms part of these terms and conditions.</p>
        </div>

        <div class="terms-section">
            <h2>6. Limitation of Liability</h2>
            <p>The information on this website is provided on an "as is" basis. To the fullest extent permitted by law, this company:</p>
            <ul>
                <li>Excludes all representations and warranties relating to this website and its contents or which is or may be provided by any affiliates or any other third party, including in relation to any inaccuracies or omissions in this website and/or the company’s literature; and</li>
                <li>Excludes all liability for damages arising out of or in connection with your use of this website. This includes, without limitation, direct loss, loss of business or profits (whether or not the loss of such profits was foreseeable, arose in the normal course of things or you have advised this company of the possibility of such potential loss), damage caused to your computer, computer software, systems and programs and the data thereon or any other direct or indirect, consequential and incidental damages.</li>
            </ul>
        </div>

        <div class="terms-section">
            <h2>7. Privacy</h2>
            <p>Your use of this website is also subject to our Privacy Policy. Please review our Privacy Policy, which also governs the website and informs users of our data collection practices.</p>
        </div>

        <div class="terms-section">
            <h2>8. Changes to These Terms</h2>
            <p>We may update our Terms and Conditions from time to time. We will notify you of any changes by posting the new Terms and Conditions on this page. You are advised to review this page periodically for any changes. Changes to these Terms and Conditions are effective when they are posted on this page.</p>
        </div>

        <div class="terms-section contact-info">
            <h2>9. Contact Us</h2>
            <p><i class="fas fa-envelope"></i>Email: kuladipxxx@gmail.com</p>
            <p><i class="fas fa-map-marker-alt"></i>Address: Bamunimaidan, Ghy, India</p>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

@endsection