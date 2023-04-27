<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST["add_to_cart"])) {

        if (isset($_SESSION["cart"])) {
            $item_array_id = array_column($_SESSION["cart"], "id");
            echo "here";
            if (!in_array($_POST["id"], $item_array_id)) {
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'id' => $_POST["id"],
                    'name' => $_POST["name"],
                    'price' => $_POST["price"],
                    'quantity' => $_POST["quantity"]
                );
                $_SESSION["cart"][$count] = $item_array;
                header("Location: index.php");
            } else {
                print_r($_POST["id"]);
                print_r($_POST["name"]);
                print_r($_POST["price"]);
                print_r($_POST["quantity"]);
                echo "<script>alert('Product is already added to the cart');</script>";
            }
        } else {
            echo "else";
            $item_array = array(
                'id' => $_POST["id"],
                'name' => $_POST["name"],
                'price' => $_POST["price"],
                'quantity' => $_POST["quantity"]
            );
            $_SESSION["cart"][0] = $item_array;
            header("Location: index.php");
        }
    }

    //remove product from cart
    if (isset($_POST["remove_from_cart"])) {
        foreach ($_SESSION["cart"] as $key => $value) {
            if ($value["id"] == $_POST["id"]) {
                unset($_SESSION["cart"][$key]);
            }
        }
        $_SESSION["cart"] = array_values($_SESSION["cart"]);
        header("Location: cart-list.php");
    }

    // clear cart
    if (isset($_POST["clear_cart"])) {
        session_destroy();
        header("Location: index.php");
    }
} else {
    header("Location: index.php");
}