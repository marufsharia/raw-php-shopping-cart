<?php
session_start();

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a href="index.php" class="navbar-brand">My Shop</a>
            <div class="collapse navbar-collapse me-4">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 pe-4">
                    <li class="nav-item">
                        <a class="nav-link active" href="">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container">
        <div class="row my-4">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-primary">Total cart Item
                        <span class="badge bg-primary rounded">
                            <?php echo isset($_SESSION['cart']) ? count($_SESSION['cart']) : '0' ?>
                        </span>
                    </h4>
                    <form action="cart.php" method="post">
                        <button type="submit" class="btn btn-danger btn-sm" name="clear_cart">
                            Clear Cart
                        </button>
                    </form>

                </div>
                <ul class="list-group mb-3">

                    <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                        $total = 0;
                        foreach ($_SESSION['cart'] as $cart) { ?>
                    <li class="list-group-item d-flex justify-content-between ">

                        <h6 class="my-0 me-4"><?php echo $cart['name'] ?></h6>
                        <div class="mx-4 d-flex">
                            <label class="me-2">Quantity: </label>
                            <input type="number" name="quantity" value="<?php echo $cart['quantity'] ?>"
                                class="form-control-sm w-25" />
                            <form method="post" action="cart.php">
                                <input name="id" type="hidden" value="<?php echo $cart['id'] ?>">
                                <button type="submit" name="remove_from_cart"
                                    class="btn btn-outline-danger btn-sm mx-2">
                                    Remove
                                </button>
                            </form>
                        </div>

                        <div>
                            <span class="text-muted">$<?php echo $cart['quantity'] ?></span>
                            <span class="fs-16 fw-bolder">X</span>
                            <span class="text-muted">$<?php echo $cart['price'] ?></span>
                            <span class="fs-16 fw-bolder">=</span>
                            <span class="text-muted">$<?php echo ($cart['price'] * $cart['quantity']) ?></span>
                        </div>

                    </li>
                    </li>

                    <?php
                            $total += ($cart['price'] * $cart['quantity']);
                        } ?>

                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (USD)</span>
                        <strong>$<?php echo $total ?></strong>
                    </li>
                    <?php } else {
                        echo "<p class='text-center'>Your cart is empty</p>";
                    } ?>
                </ul>


            </div>
        </div>
    </main>

    <div class="container">
        <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
            <div class="col mb-3">
                <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                    <svg class="bi me-2" width="40" height="32">
                        <use xlink:href="#bootstrap" />
                    </svg>
                </a>
                <p class="text-body-secondary">&copy; 2023</p>
            </div>

            <div class="col mb-3">

            </div>

            <div class="col mb-3">
                <h5>Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                </ul>
            </div>

            <div class="col mb-3">
                <h5>Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                </ul>
            </div>

            <div class="col mb-3">
                <h5>Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                </ul>
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>