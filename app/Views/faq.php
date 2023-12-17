<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
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
                <li class="nav-item">
                    <a class="nav-link text-light" href="<?= site_url('about') ?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="<?= site_url('contact') ?>">Contact</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= site_url('faq') ?>">FAQ</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <h1>Frequently Asked Questions (FAQ)</h1>
        <br>

        <div class="accordion" id="faqAccordion">

            <!-- FAQ Item 1 -->
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">
                        <div class="card-body">
                            How can I rent an item on RentalAnythings?  
                        </div>
                    </h3>
                </div>

                <div class="card-body">
                    To rent an item on RentalAnythings, simply browse through our diverse selection of products and choose the one that suits your needs. 
                    Click on the item to view its details and rental terms. If you have any specific questions about the rental process, 
                    our customer support team is ready to assist you.
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="card">
                <div class="card-header" id="faqHeading1">
                    <h3 class="mb-0">
                        <div class="card-body">
                            What is the rental duration and how is it calculated?
                        </div>
                    </h3>
                </div>

                <div class="card-body">
                    The rental duration varies for each item and is specified in the item listing. Typically, rentals are calculated on a daily, weekly, or monthly basis. 
                    The total cost is determined by multiplying the rental rate by the number of days you plan to rent the item. 
                    It's important to review the terms and conditions associated with each item to understand the rental duration and pricing structure.
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="card">
                <div class="card-header" id="faqHeading1">
                    <h3 class="mb-0">
                        <div class="card-body">
                            How does the pickup and return process work?
                        </div>
                    </h3>
                </div>

                <div class="card-body">
                    RentalAnythings offers a straightforward pickup and return process. Once you've selected the item and completed the rental process, 
                    you can arrange for the pickup at a designated location or opt for delivery if the service is available. When the rental period concludes, 
                    return the item in the same condition you received it. Be sure to follow any specific return instructions outlined by the owner to ensure a smooth process.
                </div>
            </div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>