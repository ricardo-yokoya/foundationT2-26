<?php

include "includes/database.php";

$query = "
SELECT id,
       name,
       brand,
       image,
       price
FROM productdata
ORDER BY name
";

$statement = $connection->prepare($query);

$statement->execute();

$result = $statement->get_result();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Shop | ProGear Hub</title>

    <link rel="icon"
          href="images/logo/ProgearHub_Logo.png">

    <link rel="stylesheet"
          href="css/styles.css">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

</head>

<body>

<?php include "includes/header.php"; ?>

<?php include "includes/navigation.php"; ?>

<main>

    <section class="page-banner">

        <h1>Shop</h1>

        <p>

            Browse our complete range of premium sporting equipment.

        </p>

    </section>

    <section class="shop-container">

        <?php while($product = $result->fetch_assoc()) { ?>

            <article class="shop-card">

                <img

                    src="images/products/<?php echo htmlspecialchars($product["image"]); ?>"

                    alt="<?php echo htmlspecialchars($product["name"]); ?>">

                <div class="shop-info">

                    <h2>

                        <?php echo htmlspecialchars($product["name"]); ?>

                    </h2>

                    <p class="brand">

                        <?php echo htmlspecialchars($product["brand"]); ?>

                    </p>

                    <p class="price">

                        $<?php echo number_format($product["price"],2); ?>

                    </p>

                    <a

                        href="product.php?id=<?php echo $product["id"]; ?>"

                        class="details-btn">

                        View Details

                    </a>

                </div>

            </article>

        <?php } ?>

    </section>

</main>

<?php include "includes/footer.php"; ?>

</body>

</html>