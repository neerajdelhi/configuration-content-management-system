<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latest News</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container {
            margin-top: 50px;
        }
        .card img {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <ul class="menu-list d-flex justify-content-center list-unstyled">
            <li class="menu-item mx-3"><a href="/">Home</a></li>
            <li class="menu-item mx-3"><a href="/about">About Us</a></li>
            <li class="menu-item mx-3"><a href="/contact">Contact</a></li>
            <li class="menu-item mx-3"><a href="/news">News</a></li>
        </ul>

        <!-- News Header -->
        <section class="news-header">
            <h1>Latest News</h1>
            <p>Stay updated with the latest news from [Your Company Name].</p>
        </section>

        <!-- News Articles -->
        <section class="news-articles mt-4">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <img src="https://nbhc.ca/sites/default/files/styles/article/public/default_images/news-default-image%402x_0.png?itok=B4jML1jF" class="card-img-top" alt="Article Title 1">
                        <div class="card-body">
                            <h5 class="card-title">Article Title 1</h5>
                            <p class="card-text">Summary of the article 1...</p>
                            <a href="link/to/article1" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <img src="https://nbhc.ca/sites/default/files/styles/article/public/default_images/news-default-image%402x_0.png?itok=B4jML1jF" class="card-img-top" alt="Article Title 2">
                        <div class="card-body">
                            <h5 class="card-title">Article Title 2</h5>
                            <p class="card-text">Summary of the article 2...</p>
                            <a href="link/to/article2" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- Add more articles as needed -->
            </div>
        </section>

        <!-- Pagination -->
        <section class="pagination mt-4">
            <a href="#" class="btn btn-secondary">Previous</a>
            <a href="#" class="btn btn-secondary">Next</a>
        </section>
    </div>
</body>
</html>
