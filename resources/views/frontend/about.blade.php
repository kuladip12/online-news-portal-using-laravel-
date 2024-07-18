@extends('layouts.app') 
@section('title', 'About')
@section('content')


<style>
    /* body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f9;
    } */
    header {
        background-color: #333;
        color: #ffffff;
        padding: 20px;
        text-align: center;
    }
    section {
        padding: 20px;
    }
    footer {
        background-color: #333;
        color: #ffffff;
        padding: 20px;
        text-align: center;
        position: fixed;
        bottom: 0;
        width: 100%;
    }
    .container-about {
        background-color: #fff;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        max-width: 800px;
        margin: 20px auto;
    }
    h2 {
        border-bottom: 2px solid #007bff;
        padding-bottom: 10px;
        color: #007bff;
    }
    p {
        color: #333;
        line-height: 1.6;
    }
    a {
        color: #007bff;
    }
    a:hover {
        text-decoration: none;
        color: #0056b3;
    }
</style>



    <div class="container-about">
        <h2>Our Mission</h2>
        <p>At our news portal, our mission is to deliver timely, accurate, and insightful news coverage to our readers. We strive to provide comprehensive coverage of local, national, and international events, keeping our audience informed and engaged.</p>
        
        <h2>Our Team</h2>
        <p>Our team consists of experienced journalists, editors, photographers, and digital media professionals dedicated to delivering high-quality journalism. With diverse backgrounds and expertise, we collaborate to bring you the latest news stories from around the globe.</p>
        
        <h2>Contact Us</h2>
        <p>If you have any questions, feedback, or inquiries, please don't hesitate to contact us:</p>
        <p>Email: <a href="mailto:kuladipxxx@gmail.com">kuladipxxx@gmail.com</a><br>Phone: +91 6001019558<br>Address: Bamunimaidan, Ghy, India</p>
    </div>


@endsection