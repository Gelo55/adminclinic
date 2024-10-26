<?php
include 'db.php';

if (isset($_GET['viewid'])) {
    $id = $_GET['viewid'];
    $sql4 = "SELECT * FROM `medication` WHERE id=$id";
    $result4 = mysqli_query($con4, $sql4);
    if ($result4) {
        $row = mysqli_fetch_assoc($result4);
        $name = $row['name'];
        $category = $row['category'];
        $description = $row['description'];
        $quantity = $row['quantity'];
        $date = $row['date'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Medicine Monitoring</title>
    <style>
        body {
            background-color: #f0f2f5;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            border-radius: 10px;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 60%;
            margin: auto;
            position: relative;
            top: 3%;
        }
        .card-header {
            background-color:  #033683;
            color: white;
            padding: 15px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }
        .card-body {
            padding: 20px;
        }
        .info-box label {
            font-weight: bold;
            margin-bottom: 5px;
            color: #495057;
            font-size: 14px;
        }
        .info-box input {
            width: 100%;
            padding: 10px;
            background-color: #f8f9fa;
            border: 1px solid #ced4da;
            border-radius: 5px;
            color: #495057;
            font-size: 16px;
            pointer-events: none;
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.05);
        }
        .row {
            margin-bottom: 15px;
        }
        .btn {
            display: block;
            margin: 20px auto;
            width: 150px;
            text-align: center;
            padding: 10px;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
        }
        .btn-secondary {
            background-color:  #033683;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>Medication</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 info-box">
                    <label for="name">Name</label>
                    <input type="text" id="name" value="<?php echo htmlspecialchars($name); ?>" readonly>
                </div>
                <div class="col-md-6 info-box">
                    <label for="name">category</label>
                    <input type="text" id="category" value="<?php echo htmlspecialchars($category); ?>" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 info-box">
                    <label for="name">Description</label>
                    <input type="text" id="description" value="<?php echo htmlspecialchars($description); ?>" readonly>
                </div>
                <div class="col-md-6 info-box">
                    <label for="name">Quantity</label>
                    <input type="text" id="quantity" value="<?php echo htmlspecialchars($quantity); ?>" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 info-box">
                    <label for="date">Date</label>
                    <input type="date" id="date" value="<?php echo htmlspecialchars($date); ?>" readonly>
                </div>
            </div>
            <a href="medication.php" class="btn btn-secondary">Back</a>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
    }
}
?>
