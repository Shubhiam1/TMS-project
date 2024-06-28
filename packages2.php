<?php 
    include("connection.php"); 
    session_start();

    $userprofile = $_SESSION['user_name'];
    $role        = $_SESSION['role'];
    $id          = $_SESSION['user_id'];



    if ($userprofile == false) {
        header('location:dashboard/login.php');
    }
?>


<?php
    $query  = "SELECT * FROM new_tb WHERE id = '$id' ";
    $data = mysqli_query($conn, $query);
    $total  = mysqli_num_rows($data);
    $result = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.11.0/sweetalert2.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.20.0/dist/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.11.0/sweetalert2.all.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>


    <style>
        .sidebar-nav ul .sidebar-item .sidebar-link.active {
            background: #27a9e3;
        }

        .error-msg{
            color: red;
        }

        .rectangular-div {
            width: 100%; 
            height: 200px; 
            background-color: #f0f0f0;
            border: 1px solid #ccc; 
            border-radius: 5px; 
            text-align: center; 
            line-height: 200px; 
        }


        .btn-addUser {
            padding: 7px 20px;
            margin: 20px 0px;
            border-radius: 5px;
            font-weight: 800;
            color: black;
            border: none;
            font-size: 15px;
            cursor : default;
        }

        .add-user-div {
            display: flex;
            justify-content: end;
        }

        /* Booking form Css */
        body {
            background-color: #f8f9fa;
        }
        .error{
            color:red;
        }
        .custom-box {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .custom-box .row {
            margin-bottom: 10px;
        }
        .form-section {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        .form-section .form-group {
            margin-bottom: 20px;
        }

        /* Page Css */

        body {
            margin: 0;
            font-family: 'Hind', sans-serif;

        }

        .space {
            border-collapse: separate;
            border-spacing: 0 45px
        }

        .container {
            max-width: 1240px;
            width: 100%;
            margin: 0 auto;
            flex-direction: column;
            align-items: end;
            gap: 65px;
            align-items: end !important;
        }

        .container2 {
            max-width: 1320px;
            width: 100%;
            margin: 0 auto;
        }

        .shape1 {
            position: absolute;
            top: -136px;
            left: -83px;
        }

        nav {
            position: sticky;
        }

        .herodiv {
            position: relative;
            display: flex;
            justify-content: space-around;
            /* margin: 25px 45px; */
            align-items: center;
        }

        .menu ul {
            display: flex;
            list-style: none;
            padding: 0;
            align-items: center;
            gap: 31px;
            font-size: 15px;
            font-weight: bold;
            color: #646363;
            margin: 0;
        }

        .home {
            color: rgb(235 54 86);
        }

        .menu a:hover {
            color: rgb(235 54 86);
            cursor: pointer;
        }

        .menu {
            display: contents;

        }

        .logo img {
            max-width: 120px;
            width: 100%;
        }

        button img {
            max-width: 23px;
            fill: white;
        }

        .call {
            background-color: rgb(235 54 86);
            max-width: 138px;
            /* width: 100%; */
            color: white;
            border: none;
            padding: 13px 28px;
            font-weight: bold;
            align-items: center;
            border: transparent;
            justify-content: center;
            border-radius: 5px;

        }

        .learnbtn {
            background-color: rgb(235 54 86);
            max-width: 138px;
            width: 100%;
            color: white;
            border: none;
            padding: 13px 9px;
            font-weight: bold;
            align-items: center;
            border: transparent;
        }

        button:hover {
            background-color: white;
            color: rgb(235 54 86);
            cursor: pointer;
            border: 1px solid rgb(235 54 86);
            font-weight: bold;
            align-items: center;
        }

        .section1 {

            margin-left: auto;
            background-image: url(images/Elephant.jpg);
            width: 100%;
            background-repeat: no-repeat;
            /* background-size: 56% auto; */
            height: 615px;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            background-position: center;
        }

        .content {
            max-width: 617px;
            margin-left: 129px;
        }

        .content p,
        .content h1 {
            margin: 0;
        }

        .lastp {
            color: rgb(235 54 86);
            font-size: 12px;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .firstp {
            color: rgb(235 54 86);
            font-size: 28px;
            margin-bottom: 10px;

        }

        .content h1 {
            font-size: 55px;
            color: white;
            margin-bottom: 20px;

        }

        .content h1 span {
            color: rgb(235 54 86);
        }

        .shape2 {
            position: absolute;
            display: none;
        }

        .img1 {
            width: 260px;
            position: relative;
        }

        .img2 {
            width: 260px;
            top: 164px;
            left: 110px;
            position: absolute;

        }

        .s2con {
            display: flex;

        }

        .rdiv h1,
        .rdiv p,
        .rdiv h5 {
            margin: 0;
        }

        .rdiv {
            width: 50%;
        }

        .section2 {
            margin: 100px 0;
        }

        .rdiv h5 {
            color: rgb(235 54 86);
            font-size: 24px;
            margin-bottom: 10px;
        }

        .rdiv h1 {
            font-size: 35px;
            color: #121619;
            margin-bottom: 20px;
        }

        .rdiv p {
            color: #646464;
            line-height: 30px;

        }

        .mp {
            margin-top: 35px !important;
        }

        .learnbtn {
            margin-top: 30px;
            box-shadow: -2px 10px 36px -3px rgba(235, 54, 86, 0.82);
        }

        .experience {
            margin: 0;
            position: absolute;
            top: 227px;
            left: 10px;
            background-color: rgb(235 54 86);
            color: white;
            padding: 24px;
            padding: 12px 26px;
            font-size: 14px;
            border: 8px solid white;
            transition: 0.5s;
        }

        .experience span {
            font-size: 34px;
            margin: 0;
        }

        .experience:hover {
            border: 8px solid rgb(235 54 86);
            color: rgb(235 54 86);
            background-color: white;
            cursor: pointer;
        }

        .topdiv p {
            color: rgb(235 54 86);
            margin: 0;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .topdiv h1 {
            color: #121619;
            margin: 0;
            font-size: 38px;
            font-weight: 600;
            margin-bottom: 50px;
        }

        .topdiv {
            align-items: center;
            display: flex;
            flex-direction: column;
        }

        .section3 {
            margin: 80px 0;
        }

        .dodiv img {
            max-width: 45px;
            width: 100%;
            margin-bottom: 20px;
        }

        .btmdiv1 {
            display: flex;
            justify-content: space-around;
            gap: 116px;
        }

        .dodiv p {
            margin: 0;
            margin-bottom: 20px;
            color: #646363;
            line-height: 29px;
            transition: 0.5s;
        }


        .dodiv {
            padding: 50px 20px;
            align-items: center;
            text-align: center;
            transition: 0.5s;
        }

        .dodiv h3 {
            font-size: 21px;
            font-weight: bold;
            margin-top: 0;
        }

        .dodiv:hover {
            background-color: rgb(131 35 52);
            color: white;
        }

        .dodiv:hover p {

            color: white;
        }

        .section4 {
            margin: 170px 0;
        }

        .sec5con {
            background-image: url(/Simran/Interior/images/bgimage.jpg);
            background-repeat: no-repeat;
            height: 623px;
            background-position: center;
            display: flex;
            justify-content: end;
            background-size: cover;
            align-items: center;
        }

        .bottomdiv img {
            max-width: 245px;
            width: 100%;
        }


        .bottomdiv {
            display: flex;
            justify-content: space-around;
        }

        .imgbox:hover .overlaytext {

            display: block;
            cursor: pointer;
        }

        .imgbox {
            position: relative;


        }

        .overlaytext {
            position: absolute;
            bottom: 4px;
            left: 0;
            font-size: 22px;
            font-weight: bold;
            line-height: 35px;
            display: none;


        }

        .otext {
            color: white !important;
            background: linear-gradient(rgba(255, 255, 255, 0) 0%, #eb3656 117%);
            padding: 30px 46px;


        }

        a {
            color: unset;
            text-decoration: none;
        }

        .teambox {
            position: relative;

        }

        .teamsocial img {
            max-width: 20px;
            width: 100%;
            background-color: #646363;
            border-radius: 50%;
            padding: 4px;


        }

        .teamsocial {
            margin-top: 31px;
            display: none;
        }

        .teamovelay {
            display: flex;
            padding: 36px;
            align-items: center;
            flex-direction: column;
            position: absolute;
            top: 280px;
            border: transparent;
            transition: 0.5s;
        }

        .teamovelay p,
        .teamovelay h4 {
            margin: 0;
            margin-bottom: 10px;
        }

        .teamovelay p {
            font-size: 14px;
            color: #646363;
            transition: 0.5s;
        }

        .moverlay {
            display: flex;
            justify-content: center;
            text-align: center;


        }

        .btmdivv {
            display: flex;
            justify-content: space-around
        }


        .teamovelay:hover .teamsocial {
            display: block;

        }

        .moverlay:hover .teamovelay {
            border: 1px solid white;
            box-shadow: -2px 10px 36px -3px rgba(235, 54, 86, 0.82);
            display: block;
            position: absolute;

            top: 225px;
            background-color: white;
        }

        .socialflex {
            display: flex;
            gap: 30px;
        }

        .section5,
        .section6 {
            margin: 130px 0;
        }

        .testimonialcontent {
            background-color: #eb3656;
            padding: 60px 20px;
            max-width: 320px;
            margin-right: 132px;

            flex-direction: column;
            align-items: center;
            display: flex;


        }

        .teamsocial img:hover {
            background-color: #eb3656;
            fill: aliceblue;
            cursor: pointer;
        }

        .teamovelay p:hover {
            color: #eb3656;
            cursor: pointer;
        }

        .testimonialcontent img {
            border-radius: 50%;
            max-width: 86px;
            width: 100%;
        }

        .testimonialcontent p {
            margin: 0;
            color: white;
            line-height: 28px;
            text-align: center;
            margin-top: 19px;
            font-size: 16px;
        }

        .btmcont span {
            font-size: 16px;
            font-weight: bold;
        }

        .btmcont p {
            font-size: 10px;
        }

        .upform input {
            max-width: 267px;
            width: 100%;
            padding: 21px 25px;
            border: 1px solid #efeded;
            border-radius: 3px;
        }

        .upform {
            justify-content: center;
            display: flex;
            gap: 25px;
            margin: 25px 0;
        }

        .txtarea {
            display: flex;
            justify-content: center;

        }

        textarea {
            max-width: 624px;
            width: 100%;
            padding: 21px 25px;
            border: 1px solid #efeded;
            border-radius: 3px;
        }

        .savebtn {
            background-color: rgb(235 54 86);
            max-width: 138px;
            width: 100%;
            color: white;
            border: none;
            padding: 13px 9px;
            font-weight: bold;
            align-items: center;
            border: transparent;
        }

        button:hover {
            background-color: white;
            color: rgb(235 54 86);
            cursor: pointer;
            border: 1px solid rgb(235 54 86);
            font-weight: bold;
            align-items: center;
        }

        .learnbtn1 {
            display: flex;
            justify-content: center;
        }

        iframe {
            background-image: url(/Simran/Interior/images/bgimage.jpg);
        }

        .socialmedia img {
            max-width: 17px;
            width: 100%;
            box-shadow: -2px 10px 36px -3px rgba(235, 54, 86, 0.82);
            background-color: #d7e1dc;
            border-radius: 50%;
            padding: 9px;
            transition: 0.5s;
        }

        .socialmedia img:hover {
            background-color: #eb3656;
        }

        .socialmedia {
            display: flex;
            gap: 24px;
        }

        .ldiv {
            width: 50%;
            position: relative;
        }

        .calldiv img,
        .maildiv img,
        .addiv img {
            max-width: 20px;
            width: 100%;
        }

        .calldiv p,
        .maildiv p,
        .addiv p {
            margin: 0;

        }

        .calldiv,
        .maildiv,
        .addiv {
            display: flex;
            gap: 15px;
        }

        .flogo {
            max-width: 114px;
            width: 100%;
        }

        footer h3 {
            color: black !important;
            margin-top: 0;
        }

        .fdiv22 {
            display: flex;
            justify-content: space-around;
        }

        .fdiv2 ul {
            list-style: none;
            padding: 0;

        }

        footer {
            color: #646363;
            margin-bottom: 100px;
            font-size: 15px;
        }

        footer li {
            margin-bottom: 15px;
        }


        .fdiv2 {
            width: 250px;
        }

        .mailinfo button {
            border: transparent;
            background-color: #ffeae1;

            color: #eb3656;
            padding: 6px;
        }

        .mailinfo {
            background-color: #ffeae1;
            padding: 6px;
            display: flex;
            justify-content: space-around;
            border: 1px solid #eb3656;
        }

        .fdiv1 {
            max-width: 249px;
            align-items: flex-start;
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        .f2 {
            display: flex;
        }

        .fdiv1content {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        @media(max-width:764px) {

            .section1,
            .section2,
            .section3,
            .section4,
            .section5,
            .footerdiv {
                padding: 24px 15px;
            }

            .section1 {
                background-size: 54% 127%;
                height: 325px;
            }

            .dodiv {
                padding: 75px;
                padding-top: 0;
            }

            .herodiv {
                flex-direction: column;
                align-items: baseline;
            }

            .experience {
                left: 11px;
                top: 186px;
                font-size: 8px;
            }

            .experience span {
                font-size: 24px;
            }

            .img2 {
                position: unset;
            }

            .sec5con {
                justify-content: center;
                height: unset;
            }

            .rdiv h1 {
                font-size: 24px;
            }

            .rdiv h5 {
                font-size: 18px;
                margin-top: 15px;
            }

            .upform {
                flex-direction: column;
                width: unset;
            }

            .logo img {
                margin-bottom: 20px;
            }

            .menu ul {
                margin-bottom: 20px;
                gap: 12px;
                font-size: 12px;
            }

            .btmdiv1 {
                flex-direction: column;
                gap: unset;

            }

            .topdiv h1 {
                font-size: 23px;

            }

            .menu ul {
                flex-wrap: wrap;
            }

            .content {
                font-size: 20px;
                max-width: 333px;
                width: 100%;
                flex-direction: column;
                margin-left: 10px;

            }


            .content p {
                font-size: 13px;
            }

            .content h1 {
                font-size: 20px;
            }

            .rdiv {

                text-align: left;
                width: unset;
            }

            .s2con {
                flex-direction: column;
            }

            .bottomdiv {
                justify-content: space-evenly;
                flex-wrap: wrap;

            }

            .img1,
            .img2 {
                width: 100%;
            }

            .section4 {
                margin-bottom: 0;
            }

            .txtarea {
                justify-content: unset;
            }

            .upform input {
                width: unset;
            }

            .imgbox {
                margin-bottom: 30px;
            }

            .teambox {
                margin-bottom: 150px;
            }

            .socialmedia img {
                box-shadow: -2px 1px 14px -3px rgba(235, 54, 86, 0.82);
                max-width: 12px;
            }

            .calldiv img {
                max-width: 16px;
            }

            .btmdivv {
                flex-wrap: wrap;
            }

            .testimonialcontent {
                margin: unset;
            }

            .testimonialcontent img {
                max-width: 105px;
            }

            .testimonialcontent p {
                margin-top: 35px;
                font-size: 21px;
                line-height: 36px;
            }

            .fdiv22 {

                flex-direction: column;
                gap: 40px;
                font-size: 11px;
            }

            .fdiv2 {
                width: 225px;
            }

            .f2 {
                gap: 12px;
            }
        }

        .container {
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        img {
            width: 80px;
            height: 50px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="container">
            <div class="herodiv">
            <button id="totalBookingsBtn" class="btn btn-primary" data-toggle="modal" data-target="#totalBookingsModal">Total Bookings</button>
                <div class="menu">
                    <b id="openModalBtn"  data-toggle="modal" data-target="#userDetailsModal" class='btn-addUser'>Welcome: <?php  echo $result['fname']." ".$result['lname']; ?> / <a href="dashboard/logout.php">Logout</a></b></b>
                </div>

                <!-- User Details Modal -->
                <div id="userDetailsModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">User Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="userDetailsForm" >
                                    <div class="form-group">
                                        <label for="fname">First Name:</label>
                                        <input type="text" class="form-control" id="fname" name="fname"
                                            value="<?php echo $result['fname']; ?>"><span class="error-msg"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="lname">Last Name:</label>
                                        <input type="text" class="form-control" id="lname" name="lname"
                                            value="<?php echo $result['lname']; ?>"><span class="error-msg"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="dob">Date of Birth:</label>
                                        <input type="text" class="form-control" id="dob" name="dob"
                                            value="<?php echo $result['dob']; ?>"><span class="error-msg"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone:</label>
                                        <input type="text" class="form-control" id="phone" name="phone"
                                            value="<?php echo $result['phone']; ?>"><span class="error-msg"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="text" class="form-control" id="email" name="email"
                                            value="<?php echo $result['email']; ?>"><span class="error-msg"></span>
                                    </div>
                                    <button type="button" id="update" class="btn btn-primary"
                                            value="<?php echo $result['id']; ?>">Update
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Bookings Modal -->
                <div class="modal fade" id="totalBookingsModal" tabindex="-1" role="dialog" aria-labelledby="totalBookingsModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="totalBookingsModalLabel">Total Bookings</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Status</th>
                                            <th>Name</th>
                                            <th>Type</th>
                                            <th>Location</th>
                                            <th>Price</th>
                                            <th>Details</th>
                                            <th>Feature</th>
                                            <th>Images</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    $query  = "SELECT * FROM package_tb";
                                    $data = mysqli_query($conn, $query);
                                    $total  = mysqli_num_rows($data);
                                    $count = 1;

                                    $query2 = "SELECT `status` FROM booking_details WHERE user_id = {$_SESSION['user_id']}";
                                    $data2 = mysqli_query($conn, $query2);
                                    $total2 = mysqli_num_rows($data2);
                                    $result2 = mysqli_fetch_assoc($data2);



                                    if ($total2 != 0) {

                                    ?>
                                    <tbody id="tbody">

                                        <?php
                                        while ($result  = mysqli_fetch_assoc($data)) {
                                            
                        
                                            echo "<tr>
                                                        <td style='border:none;'><b>" . $count . ".</b></td>
                                                        <td style='border:none;'>";
                                                            if (!empty($result2['status'])) {
                                                                echo $result2['status'];
                                                            }
                                                        echo "</td>
                                                        <td style='border:none;'>" . $result['name'] . "</td>
                                                        <td style='border:none;'>" . $result['type'] . "</td>
                                                        <td style='border:none;'>" . $result['location'] . "</td>
                                                        <td style='border:none;'>" . $result['price'] . " <b>$</b> </td>
                                                        <td style='border:none;'>" . $result['details'] . "</td>
                                                        <td style='border:none;'>" . $result['feature'] . "</td>
                                                        <td style='border:none;'><img src='dashboard/" . $result['image'] . "' alt='Package Image' style='width: 80px; height: 50px;'></td>
                                                    </tr>";

                                            $count++;
                                                }
                                            } else {
                                                echo "No Bookings Yet!";
                                            }
                                                ?>

                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div style="width:100%">
                <table class="space">
                    <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Location</th>
                            <th>Price</th>
                            <th>Details</th>
                            <th>Feature</th>
                            <th>Images</th>
                        </tr>
                    </thead>

                    <?php
                    $query  = "SELECT * FROM package_tb";
                    $data = mysqli_query($conn, $query);
                    $total  = mysqli_num_rows($data);
                    $count = 1;

                    $query2 = "SELECT * FROM booking_details WHERE user_id = {$_SESSION['user_id']}";
                    $data2 = mysqli_query($conn, $query2);
                    $total2 = mysqli_num_rows($data2);
                    $result2 = mysqli_fetch_assoc($data2);



                    if ($total != 0) {

                    ?>
                    <tbody id="tbody">

                        <?php
                        while ($result  = mysqli_fetch_assoc($data)) {
                            
         
                            echo "<tr>
                                        <td style='border:none;'><h2>" . $count . ".</h2></td> 
                                        <td style='border:none;'><h3><a href='user_login_package_details.php?id=" . $result['id'] . "'>" . $result['name'] . "</a></h3></td>
                                        <td style='border:none;'>" . $result['type'] . "</td>
                                        <td style='border:none;'>" . $result['location'] . "</td>
                                        <td style='border:none;'>" . $result['price'] . " <b>$</b> </td>
                                        <td style='border:none;'>" . $result['details'] . "</td>
                                        <td style='border:none;'>" . $result['feature'] . "</td>
                                        <td style='border:none;'><img src='dashboard/" . $result['image'] . "' alt='Package Image' style='width: 80px; height: 50px;'></td>
                                    </tr>";

                            $count++;
                                }
                            } else {
                                echo "No Records Found";
                            }
                                ?>

                    </tbody>
                </table>

            </div>
        </div>

</body>
<script>
    $(document).ready(function() {

        $("#update").click(function(e){
            e.preventDefault();
            var id = $("#update").val();
            var fname = $("#fname").val();
            var lname = $("#lname").val();
            var dob = $("#dob").val();
            var phone = $("#phone").val();
            var email = $("#email").val();
            $('.error-msg').text('');

            if (fname.trim() === "") {
                $("#fname").next('.error-msg').text("Please enter firstname");
                return;
            }
            else if (lname.trim() === "") {
                $("#lname").next('.error-msg').text("Please enter lastname");
                return;
            }
            else if (dob.trim() === "") {
                $("#dob").next('.error-msg').text("Please enter date of birth");
                return;
            }
            else if (phone.trim() === "") {
                $("#phone").next('.error-msg').text("Please enter phone number");
                return;
            }
            else if (!/^\d{10}$/.test(phone.trim())) {
                $("#phone").next('.error-msg').text("Phone number should be 10 digits");
                return;
            }
            else if (email.trim() === "") {
                $("#email").next('.error-msg').text("Please enter email");
                return;
            }
            else if (!isAdult(dob.trim())) {
                $("#dob").next('.error-msg').text("Age should be greater than 18");
                return;
            }
            else {
                $.ajax({
                    url:"dashboard/manage_user_update_form_backend.php",
                    type:"POST",
                    data:{
                        id:id,
                        fname:fname,
                        lname:lname,
                        dob:dob,
                        phone:phone,
                        email:email
                    },
                    success: function(response){
                        console.log(response);
                        if (response === "success") {
                            sweetAlert("Success", "User Updated Successfully", "success").then((result) => {
                                window.location.href = "packages2.php";
                            });
                        } else if (response === "exists") {
                            sweetAlert("Exists", "Please Enter a Different Email", "error");
                        } else {
                            sweetAlert("Error", "An error occurred", "error");
                        }
                    }
                });
            }
        });

        function isAdult(dateString) {
            var today = new Date();
            var birthDate = new Date(dateString);
            var age = today.getFullYear() - birthDate.getFullYear();
            var m = today.getMonth() - birthDate.getMonth();
            if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }
            return age >= 18;
        }

    });
</script>

</html>




