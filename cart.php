<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Shopping Cart | ProGear Hub</title>

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

<main class="cart-page">

    <section class="page-banner">

        <h1>Shopping Cart</h1>

        <p>
            Review your selected products before checkout.
        </p>

    </section>

    <section class="cart-container">

        <table class="cart-table">

            <thead>

                <tr>

                    <th>Product</th>

                    <th>Price</th>

                    <th>Quantity</th>

                    <th>Total</th>

                    <th></th>

                </tr>

            </thead>

            <tbody>

                <tr>

                    <td class="product-cell">

                        <img
                            src="images/products/football.jpg"
                            alt="Football">

                        <span>ProGear Football</span>

                    </td>

                    <td>$49.99</td>

                    <td>

                        <input
                            type="number"
                            value="1"
                            min="1">

                    </td>

                    <td>$49.99</td>

                    <td>

                        <button class="remove-btn">

                            <i class="fa-solid fa-trash"></i>

                        </button>

                    </td>

                </tr>

                <tr>

                    <td class="product-cell">

                        <img
                            src="images/products/boots.jpg"
                            alt="Football Boots">

                        <span>Elite Football Boots</span>

                    </td>

                    <td>$89.99</td>

                    <td>

                        <input
                            type="number"
                            value="1"
                            min="1">

                    </td>

                    <td>$89.99</td>

                    <td>

                        <button class="remove-btn">

                            <i class="fa-solid fa-trash"></i>

                        </button>

                    </td>

                </tr>

            </tbody>

        </table>

        <aside class="cart-summary">

            <h2>Order Summary</h2>

            <div>

                <span>Subtotal</span>

                <span>$139.98</span>

            </div>

            <div>

                <span>Shipping</span>

                <span>Free</span>

            </div>

            <div class="total">

                <span>Total</span>

                <span>$139.98</span>

            </div>

            <button class="checkout-btn">

                <i class="fa-solid fa-credit-card"></i>

                Proceed to Checkout

            </button>

        </aside>

    </section>

</main>

<?php include "includes/footer.php"; ?>

</body>

</html>