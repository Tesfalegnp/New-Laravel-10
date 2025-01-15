@extends('fixed.header_footer')

@section('content')
   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>One Page Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            transition: background-color 0.3s ease;
        }
    </style>
</head>
<body>
     <header class="bg-primar text-dark text-center d-flex align-items-center justify-content-center vh-100" 
            style="background-image: url('https://t3.ftcdn.net/jpg/05/07/91/92/360_F_507919292_Hnf53uboaZbdWp8Baw5zYM8s03MlT2Zp.jpg'); 
            background-size: cover; background-position: center;">
        <div class="container"> 
            <h1>Welcome to My Website</h1>
            <p class="lead">A simple and attractive one-page design</p>
            <a href="#about"><h3>Booking</h3></a> 
        </div>
    </header>

    <section id="about" class="py-5">
        <div class="container">
            <h2>About Us</h2>
            <p>At Green Pension, we believe that every journey deserves a comfortable and unforgettable stay. Nestled in a serene location that blends nature’s tranquility with modern amenities, we are your perfect escape from the everyday hustle.

Our mission is to create a haven where comfort meets elegance and where our guests feel truly at home. Whether you’re here for a weekend getaway, a family vacation, or a business retreat, we promise to make your experience exceptional.
<br>
<strong>Why Choose Green Pension?</strong> <br>
🌿 Eco-Friendly Ambiance: Immerse yourself in a sustainable retreat that cares for both you and the planet. <br>
💫 Unmatched Hospitality: Our dedicated team goes above and beyond to make your stay as seamless as possible. <br>
🌟 Tailored Comfort: From cozy rooms to thoughtful services, we prioritize your needs and desires. <br>

Step into Green Pension and let us transform your stay into a story worth sharing. We don’t just provide accommodation; we create memories that inspire you to return.</p>
        </div>
    </section>

    <section id="contact" class="bg-light py-5">
        <div class="container">
            <h2>Contact Us</h2>
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="3" placeholder="Your message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>

    <section id="subscribe" class="py-5">
        <div class="container">
            <h2>Subscribe</h2>
            <p>Stay updated with our latest news and offers!</p>
            <form class="row g-3">
                <div class="col-auto">
                    <label for="subscribeEmail" class="visually-hidden">Email</label>
                    <input type="email" class="form-control" id="subscribeEmail" placeholder="Enter your email">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">Subscribe</button>
                </div>
            </form>
        </div>
    </section>

   

    
</body>
</html>



@endsection