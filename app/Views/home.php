<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
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
                <li class="nav-item active">
                    <a class="nav-link" href="<?= site_url('home') ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="<?= site_url('about') ?>">About</a>
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

    <div class="container mt-4">
        <h1 class="text-center">Welcome to RentalAnythings</h1>
        <p class="text-center">
            RentalAnythings is a versatile rental service that offers a diverse range of products to meet various needs. 
            With a commitment to customer satisfaction and convenience, RentalAnythings provides a seamless platform 
            for individuals and businesses alike to access high-quality items for short-term use.
        </p>

        <h2>Our Products</h2>

        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Event Essentials Package</h5>
                        <p class="card-text">
                            Perfect for hosting memorable events, this package includes a comprehensive selection of event essentials such as tents, tables, chairs, and decorative items. 
                            Whether it's a wedding, corporate function, or a casual gathering, RentalAnythings ensures you have everything you need to create the perfect ambiance.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Outdoor Adventure Gear</h5>
                        <p class="card-text">
                            For outdoor enthusiasts, RentalAnythings offers a diverse array of adventure gear, including camping equipment, hiking gear, and sports accessories. 
                            From tents and sleeping bags to backpacks and portable cooking equipment, adventure seekers can gear up for their next outdoor escapade without the commitment of purchasing.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Professional Photography Equipment</h5>
                        <p class="card-text">
                            Aspiring photographers or those in need of high-quality equipment for special occasions can rely on RentalAnythings for top-of-the-line cameras, lenses, and lighting equipment. 
                            This service allows users to access professional-grade gear without the upfront costs, making it ideal for occasional use.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Home Improvement Tools</h5>
                        <p class="card-text">
                            Tackling DIY projects is made easier with RentalAnythings' extensive collection of home improvement tools. 
                            From power tools and painting equipment to gardening supplies, users can conveniently rent the tools they need for specific projects without the burden of storage or maintenance.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Fitness Equipment</h5>
                        <p class="card-text">
                            Achieve your fitness goals without investing in expensive gym equipment. 
                            RentalAnythings provides fitness enthusiasts with access to a range of exercise machines, 
                            from treadmills and elliptical trainers to weights and yoga accessories. 
                            Enjoy the flexibility of working out at home without compromising on quality.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Electronics and Gadgets</h5>
                        <p class="card-text">
                            Stay up-to-date with the latest technology without the long-term commitment. 
                            RentalAnythings offers a variety of electronic gadgets, including laptops, tablets, and audio equipment. 
                            Whether it's for a business presentation, travel, or temporary use, users can access cutting-edge technology on demand.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>