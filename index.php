<?php
include "includes/database.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ProGear Hub | Home</title>

    <link rel="icon" href="ProgearHub_Logo.png">

    <link rel="stylesheet" href="css/styles.css">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

    <link rel="stylesheet"
          href="https://unpkg.com/flickity@2/dist/flickity.min.css">

    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</head>

<body>

    <?php include "includes/header.php"; ?>

    <?php include "includes/navigation.php"; ?>

    <main>

        <!-- Hero Banner -->
        <section class="hero">

            <div class="hero-text">

                <h1>Gear Up. Play Your Best.</h1>

                <p>
                    Discover premium sports equipment for every athlete.
                </p>

                <a href="shop.php" class="btn">
                    Shop Now
                </a>

            </div>

        </section>

        <!-- Featured Products -->

        <section class="featured-products">

            <h2>Featured Products</h2>

            <div class="products">

                <?php

                $query = "
                    SELECT id,
                           name,
                           brand,
                           image
                    FROM productdata
                    LIMIT 8
                ";

                $statement = $connection->prepare($query);

                $statement->execute();

                $result = $statement->get_result();

                while ($product = $result->fetch_assoc()) {

                ?>

                    <article class="card">

                        <img
                            class="product-image"
                            src="images/<?php echo htmlspecialchars($product['image']); ?>"
                            alt="<?php echo htmlspecialchars($product['name']); ?>">

                        <h3>
                            <?php echo htmlspecialchars($product['name']); ?>
                        </h3>

                        <p>
                            <?php echo htmlspecialchars($product['brand']); ?>
                        </p>

                        <a
                            href="product.php?id=<?php echo $product['id']; ?>"
                            class="btn-small">

                            View Details

                        </a>

                    </article>

                <?php
                }
                ?>

            </div>

        </section>

        <!-- Benefits -->

        <section class="benefits">

            <article>

                <i class="fa-solid fa-truck-fast"></i>

                <h3>Fast Delivery</h3>

                <p>Australia-wide shipping.</p>

            </article>

            <article>

                <i class="fa-solid fa-shield-halved"></i>

                <h3>Secure Payments</h3>

                <p>100% protected checkout.</p>

            </article>

            <article>

                <i class="fa-solid fa-medal"></i>

                <h3>Premium Quality</h3>

                <p>Trusted sports brands.</p>

            </article>

        </section>

    </main>

    <?php include "includes/footer.php"; ?>

</body>

</html>