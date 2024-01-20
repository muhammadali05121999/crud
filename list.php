<?php
include "conn.php";

$sql = "SELECT * FROM `crud table`";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .action-buttons {
            display: flex;
            justify-content: space-between;
        }

        .delete-btn,
        .edit-btn {
            padding: 5px;
            cursor: pointer;
            background-color: #ff5555; /* Delete button color */
            color: #fff;
            border: none;
            border-radius: 3px;
        }

        .edit-btn {
            background-color: #4CAF50; /* Edit button color */
            margin-right: 5px;
        }

        #add-client-btn {
            margin-bottom: 10px;
            padding: 8px;
            cursor: pointer;
            background-color: #007bff; /* Add client button color */
            color: #fff;
            border: none;
            border-radius: 3px;
        }

        .client {
            width: 50px;
        }
    </style>
    <title>CRUD Table</title>
</head>

<body>
    <div class="container">
        <form action="addclient.php" method="POST">
    <button id="add-client-btn" type="submit" >Add Client
    </button>
    </form>
    <form action="" method="submit">
        <table>
            <thead>
                <tr>
                    <th class="client">ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $password = $row['password'];
                        $number = $row['number'];

                        echo "
                        <tr>
                            <td>$id</td>
                            <td>$name</td>
                            <td>$email</td>
                            <td>$password</td>
                            <td>$number</td>
                            <td class='action-buttons'>
                                <button class='edit-btn'> <a href='edit.php?updateid=$id''>Edit </a></button>
                                <button class='delete-btn'> <a href='delete.php?deleteid=$id'>Delete</a></button>
                            </td>
                        </tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </form>
</body>

</html>
