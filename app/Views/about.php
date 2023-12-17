<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <a class="navbar-brand" href="#">RentalAnythings</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-light" href="<?= site_url('home') ?>">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= site_url('about') ?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="<?= site_url('contact') ?>">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="<?= site_url('faq') ?>">FAQ</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4 text-center">
        <h1>About Us</h1>
        <p>
            At RentalAnythings, we transcend the conventional notion of a rental service, evolving into a narrative, a mission, 
            and an open invitation to discover new horizons. Our inception is rooted in a simple concept: 
            to revolutionize how individuals and businesses engage with a diverse range of items for temporary use.
        </p>

        <h2>Our Story</h2>
        <p>
            The genesis of RentalAnythings saw the collaborative efforts of like-minded enthusiasts with a shared vision. 
            Our journey unfolds with threads of passion, innovation, and a steadfast commitment to not only streamline 
            the rental process but also infuse it with a sense of enjoyment. As we reminisce about our growth, 
            we take pride in the myriad experiences and unique stories woven by our users, 
            solidifying RentalAnythings as the preferred destination for convenient and reliable rentals, be it for special occasions or everyday necessities.
        </p>

        <h2>Our Mission</h2>
        <p>
            Beyond being a transactional platform, RentalAnythings is on a mission to cultivate a culture of sharing, sustainability, and community. 
            Our aim is to contribute to a world where resources are utilized efficiently, waste is minimized, and meaningful connections are forged. 
            Empowering individuals and businesses, our platform fosters a global network of sharers and seekers, envisioning a future that is both sustainable and interconnected.
        </p>

        <h2>Visit Us</h2>
        <p>
            Eager to delve deeper into the RentalAnythings experience? Pay us a virtual visit on our online platform and discover the myriad possibilities that await you. 
            With a user-friendly interface, an extensive catalog, and a dedicated support team, we ensure that your rental journey is not only seamless but also enjoyable. 
            Step into the world of RentalAnythings today, where stories unfold, missions thrive, and connections are forged.
        </p>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>