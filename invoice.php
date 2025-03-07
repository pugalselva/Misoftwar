<?php
//include "./session.php";
include_once "./database.php";
$obj = new DB();
$user = $obj->student_get($_GET['studentid']);

//var_dump($user);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 0;
            padding: 20px;
        }

        .print-container {
            background: white;
            padding: 20px;
            width: 50%;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        }

        h2 {
            color: #007bff;
            font-size: 24px;
            margin-bottom: 15px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 16px;
        }

        td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        .empty-cell {
            background-color: #f9f9f9;
            font-weight: bold;
        }

        .empty-cell img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 2px solid #007bff;
        }

        /* Button Styling */
        .btn-container {
            margin-top: 20px;
        }

        .btn {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            margin: 5px;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
            transition: 0.3s;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .btn-secondary {
            background-color: #28a745;
        }

        .btn-secondary:hover {
            background-color: #1f7a36;
        }

        /* Print Styles */
        @media print {
            body * {
                visibility: hidden;
            }

            .print-container, .print-container * {
                visibility: visible;
            }

            .print-container {

                position: absolute;
                
                left: 0;
                top: 0;
                width: 98%;
                padding: 10px;
            }

            .btn-container {
                display: none;
            }
        }
    </style>
</head>
<body>

    <div class="print-container">
        <h2>Student Details</h2>
        <table>
            <tr>
                <td colspan="2" class="empty-cell" style="text-align: center;">
                    <img src="profile_pic/<?= $user['pic_path'] ?>" alt="Profile Picture">
                </td>
            </tr>  
            <tr>
                <td><strong>Name:</strong></td>
                <td class="empty-cell"><?= $user['name'] ?></td>
            </tr>
            <tr>
                <td><strong>Student ID:</strong></td>
                <td class="empty-cell">SLA<?= substr($user['name'], 0, 3) . $user['skills'] . $user['id'] ?></td>
            </tr>
            <tr>
                <td><strong>Course:</strong></td>
                <td class="empty-cell"><?= $user['skills'] ?></td>
            </tr>
            <tr>
                <td><strong>Phone Number:</strong></td>
                <td class="empty-cell"><?= $user['phone'] ?></td>
            </tr>
            <tr>
                <td><strong>Email:</strong></td>
                <td class="empty-cell"><?= $user['email'] ?></td>
            </tr>
        </table>
    </div>

    <div class="btn-container">
        <button class="btn" onclick="printTable()">Download or Print</button>
        <a href="./viewstudent.php"><button class="btn btn-secondary">Back</button></a>
    </div>

    <script>
        function printTable() {
            let printContents = document.querySelector('.print-container').innerHTML;
            let originalContents = document.body.innerHTML;

            document.body.innerHTML = `<div class="print-container">${printContents}</div>`;
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>

</body>
</html>
