<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Project</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="customers.php">Customers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown link
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container mt-3">
        <h2>Update Customers</h2>
        <?php
        include "fungsi.php";
        $customer_id = $_GET['id_cus'];
        $data = getWhere("customers", "customer_id = '$customer_id'");
        ?>
        <form action="customer_update.php" method="POST" class="mt-3">
            <div class="mb-3">
                <label for="cusID" class="form-label">Customer ID</label>
                <input type="text" class="form-control" name="cus_id" value="<?= $data['customer_id'] ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="cusName" class="form-label">Customer Name</label>
                <input type="text" class="form-control" name="name" value="<?= $data['name'] ?>">
            </div>
            <div class="mb-3">
                <label for="cusPhone" class="form-label">Customer Phone</label>
                <input type="text" class="form-control" name="phone" value="<?= $data['phone'] ?>">
            </div>
            <div class="mb-3">
                <label for="cusEmail" class="form-label">Customer Email</label>
                <input type="email" class="form-control" name="email" value="<?= $data['email'] ?>">
            </div>
            <div class="mb-3">
                <label for="cusAddress" class="form-label">Customer Address</label>
                <input type="text" class="form-control" name="address" value="<?= $data['address'] ?>">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>

    </div>
</body>

</html>