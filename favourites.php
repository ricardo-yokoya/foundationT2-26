<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Favourites | ProGear Hub</title>

    <link rel="icon" href="images/logo/ProgearHub_Logo.png">

    <link rel="stylesheet" href="css/styles.css">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

</head>

<body>

<?php include "includes/header.php"; ?>

<?php include "includes/navigation.php"; ?>

<main>

    <section class="page-banner">

        <h1>My Favourites</h1>

        <p>
            Save your favourite products and access them anytime.
        </p>

    </section>

    <section class="favourites-container">

        <article class="favourite-card">

            <img
                src="images/products/football.jpg"
                alt="ProGear Football">

            <div class="favourite-info">

                <h2>ProGear Football</h2>

                <p class="brand">ProGear</p>

                <p class="price">$49.99</p>

            </div>

            <div class="favourite-actions">

                <button class="cart-btn">

                    <i class="fa-solid fa-cart-shopping"></i>

                    Add to Cart

                </button>

                <button class="remove-btn">

                    <i class="fa-solid fa-trash"></i>

                </button>

            </div>

        </article>

        <article class="favourite-card">

            <img
                src="images/products/boots.jpg"
                alt="Elite Football Boots">

            <div class="favourite-info">

                <h2>Elite Football Boots</h2>

                <p class="brand">Nike</p>

                <p class="price">$89.99</p>

            </div>

            <div class="favourite-actions">

                <button class="cart-btn">

                    <i class="fa-solid fa-cart-shopping"></i>

                    Add to Cart

                </button>

                <button class="remove-btn">

                    <i class="fa-solid fa-trash"></i>

                </button>

            </div>

        </article>

        <article class="favourite-card">

            <img
                src="images/products/racquet.jpg"
                alt="Professional Tennis Racquet">

            <div class="favourite-info">

                <h2>Professional Tennis Racquet</h2>

                <p class="brand">Wilson</p>

                <p class="price">$129.99</p>

            </div>

            <div class="favourite-actions">

                <button class="cart-btn">

                    <i class="fa-solid fa-cart-shopping"></i>

                    Add to Cart

                </button>

                <button class="remove-btn">

                    <i class="fa-solid fa-trash"></i>

                </button>

            </div>

        </article>

    </section>

</main>

<?php include "includes/footer.php"; ?>

</body>

</html>