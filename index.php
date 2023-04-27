<?php
session_start();
$products = [
    [
        "id" => 11,
        "name" => "Product 01",
        "image" => "https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80",
        "price" => "100"
    ],

    [
        "id" => 21,
        "name" => "Product 02",
        "image" => "https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80",
        "price" => "200"
    ],

    [
        "id" => 31,
        "name" => "Product 03",
        "image" => "https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80",
        "price" => "300"
    ],

    [
        "id" => 41,
        "name" => "Product 04",
        "image" => "https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80",
        "price" => "400"
    ],

    [
        "id" => 51,
        "name" => "Product 05",
        "image" => "https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80",
        "price" => "500"
    ],

    [
        "id" => 61,
        "name" => "Product 06",
        "image" => "https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80",
        "price" => "600"
    ],

    [
        "id" => 71,
        "name" => "Product 07",
        "image" => "https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80",
        "price" => "700"
    ],

    [
        "id" => 81,
        "name" => "Product 08",
        "image" => "https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cHJvZHVjdHxlbnwwfHwwfHw%3D&w=1000&q=80",
        "price" => "800"
    ],

];



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

                    <li class="nav-item position-relative">
                        <a class="nav-link " href="cart-list.php">
                            Cart
                            <span class="badge bg-info rounded-pill position-absolute top-0 start-50 translate-end">
                                <?php echo   isset($_SESSION['cart']) ?
                                    count($_SESSION['cart']) : '0' ?>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>

        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Shop example</h1>
                    <p class="lead text-body-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Incidunt, fuga enim aliquid nobis aspernatur quia sed sint modi, neque exercitationem corporis
                        deserunt sequi repudiandae accusantium atque natus facilis commodi? Repellendus!</p>
                    <p>
                        <a href="#" class="btn btn-primary my-2">View Product</a>
                        <a href="#" class="btn btn-secondary my-2">Secondary action</a>
                    </p>
                    <p>
                    <pre>
                            <?php
                            /*  if (isset($_SESSION["cart"])) {
                                print_r($_SESSION["cart"]);
                            } */
                            ?>
                        </pre>
                    </p>
                </div>
            </div>
        </section>

        <div class="py-5 bg-body-tertiary">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
                    <?php foreach ($products as $product) { ?>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="<?php echo $product['image'] ?>" alt="product-image">
                            <div class="card-body">
                                <p class="card-text"><?php echo $product['name'] ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <?php if (!in_array($product['id'], (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) ? array_column($_SESSION['cart'], 'id') : [])) { ?>
                                    <form method="post" action="cart.php">
                                        <div class="d-flex justify-content-start">
                                            <input type="hidden" name="id" value="<?php echo  $product["id"]; ?>">
                                            <input type="hidden" name="name" value="<?php echo $product["name"]; ?>">
                                            <input type="hidden" name="price" value="<?php echo $product["price"]; ?>">
                                            <input class="w-25 form-control-sm" type="number" name="quantity" value="1"
                                                min="1">
                                            <button type="submit" name="add_to_cart"
                                                class="btn btn-sm btn-outline-secondary">
                                                🛒
                                            </button>
                                        </div>
                                    </form>
                                    <?php } else { ?>
                                    <button type="button" name="add_to_cart" class="btn btn-sm btn-danger">
                                        Added
                                    </button>
                                    <?php } ?>
                                    <small class="text-body-secondary fw-bold">$<?php echo $product['price'] ?></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
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

</html>