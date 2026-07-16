<?php

include "includes/database.php";

if (!isset($_GET["id"])) {
    header("Location: shop.php");
    exit;
}

$id = $_GET["id"];

$query = "
SELECT *
FROM productdata
WHERE id = ?
";

$statement = $connection->prepare($query);

$statement->bind_param("i", $id);

$statement->execute();

$result = $statement->get_result();

$product = $result->fetch_assoc();

if (!$product) {
    echo "<h2>Product not found.</h2>";
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title><?php echo htmlspecialchars($product["name"]); ?> | ProGear Hub</title>

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

    <h1>Product Details</h1>

    <p>
        Explore all the details of this product.
    </p>

</section>

<section class="product-page">

    <div class="product-image">

        <img
            src="images/products/<?php echo htmlspecialchars($product["image"]); ?>"
            alt="<?php echo htmlspecialchars($product["name"]); ?>">

    </div>

    <div class="product-details">

        <h2>

            <?php echo htmlspecialchars($product["name"]); ?>

        </h2>

        <p class="brand">

            <?php echo htmlspecialchars($product["brand"]); ?>

        </p>

        <p class="price">

            $<?php echo number_format($product["price"],2); ?>

        </p>

        <p class="description">

            <?php echo htmlspecialchars($product["description"]); ?>

        </p>

        <label for="quantity">

            Quantity

        </label>

        <input
            type="number"
            id="quantity"
            value="1"
            min="1"
            max="10">

        <div class="product-buttons">

            <button class="add-cart">

                <i class="fa-solid fa-cart-shopping"></i>

                Add to Cart

            </button>

            <button class="add-favourite">

                <i class="fa-solid fa-heart"></i>

                Add to Favourites

            </button>

        </div>

    </div>

</section>

</main>

<?php include "includes/footer.php"; ?>

</body>

</html>