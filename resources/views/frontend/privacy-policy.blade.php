@extends('layouts.app') 
@section('title', 'NEWSGrid Privacy Policy')
@section('content')


    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .container-privacy {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 40px auto;
        }
        h1, h2, h3 {
            color: #007bff;
        }
        p {
            color: #333;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        ul {
            color: #333;
            margin-bottom: 20px;
        }
        ul li {
            margin-bottom: 10px;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>



<div class="container-privacy">
    <h1>Privacy Policy</h1>

    <p>Your privacy is important to us. It is our policy to respect your privacy regarding any information we may collect from you across our website, located at <a href="http://127.0.0.1:8000/">http://127.0.0.1:8000/</a>, and other sites we own and operate.</p>

    <h2>Information we collect</h2>

    <p>We only collect information about you if we have a reason to do so–for example, to provide our services, to communicate with you, or to make our services better.</p>

    <h3>Information you provide to us</h3>

    <p>We collect information that you provide to us. This includes things like your name, email address, and any other details you choose to provide.</p>

    <h3>Information we collect automatically</h3>

    <p>We also collect some information automatically when you visit our website. This may include information like your IP address, browser type and version, device type, and other technical information.</p>

    <h2>How we use your information</h2>

    <p>We use the information we collect in various ways, including to:</p>

    <ul>
        <li>Provide, operate, and maintain our website</li>
        <li>Improve, personalize, and expand our website</li>
        <li>Understand and analyze how you use our website</li>
        <li>Develop new products, services, features, and functionality</li>
    </ul>

    <h2>Sharing your information</h2>

    <p>We may share the information we collect in various ways, including with:</p>

    <ul>
        <li>Third-party service providers</li>
        <li>Other users of our website</li>
        <li>Our affiliates and partners</li>
    </ul>

    <h2>Security</h2>

    <p>We take reasonable measures to protect the information we collect from loss, misuse, and unauthorized access, disclosure, alteration, and destruction.</p>

    <h2>Changes to this Privacy Policy</h2>

    <p>We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page.</p>

    <h2>Contact Us</h2>

    <p>If you have any questions or suggestions about our Privacy Policy, do not hesitate to contact us at <a href="mailto:kuladipxxx@gmail.com">kuladipxxx@gmail.com</a>.</p>
</div>

<!-- Bootstrap and jQuery JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


@endsection