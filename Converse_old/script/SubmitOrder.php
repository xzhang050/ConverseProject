    <?php
        $servername = "localhost";
        $username = "f31ee";
        $password = "f31ee";
        $dbname = "f31ee";
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
                    }
        $customer_name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['mobilenum'];
        $address = $_POST['address'];
        $delivery = $_POST['delivery'];
        $cardnum = $_POST['cardnum'];
        $sql_1 = "INSERT INTO Customers (CustomerName, Email, Phone, Addr, Delivery, CardNum) VALUES ('$customer_name' ,'$email', '$phone', '$address', '$delivery', '$cardnum')";
        $result = mysqli_query($conn, $sql_1);
        $sql_2 = "SELECT * FROM Customers ORDER BY CustomerID DESC LIMIT 1";
        $result = mysqli_query($conn, $sql_2);
        $row = mysqli_fetch_assoc($result);
        $CustomerID = $row['CustomerID'];
        session_start();
        $Orders = $_SESSION['cart'];
        $total_price = 0;
        $product_info='';
        foreach($Orders as $key=>$info)
        {
            $ProductID = $info[0];
            $sql_3 = "SELECT * FROM ShoeInfo WHERE ProductID = ".$ProductID;
            $result = mysqli_query($conn, $sql_3);
            $row = mysqli_fetch_assoc($result);
            $ProductName =$row['ProductName'];
            $Price = $row['Price'];
            $total_price = $total_price + $Price;
            $Size = $info[1];
            $product_info = $product_info."\n $ProductName \nSize: $Size \nPrice: $Price";
            $sql_4 = "INSERT INTO Orders (ProductID, ProductName, Size, Price, CustomerID) VALUES ($ProductID, '$ProductName', $Size, $Price, $CustomerID)";
            mysqli_query($conn, $sql_4);
            $sql_5 = "UPDATE Inventory SET Qty($Size)=Qty($Size)-1 WHERE ProductID = $ProductID";
            $result = mysqli_query($conn, $sql_5);

        }
        $sql_6 = "UPDATE Customers SET TotalPrice=$total_price WHERE CustomerID = $CustomerID";
        $result = mysqli_query($conn, $sql_6);
        unset($_SESSION['cart']);

        $to = 'f31ee@localhost';
        $subject = 'Order Confirmation';
        $message = "Dear Customer："."\r\n"."Thank you for shopping with us."."\r\nYou have purchased:".$product_info."\r\nTotal Price: $total_price";
        $headers = 'From: f31ee@localhost'.'\r\n'.'Reply-To: f31ee@localhost'.'\r\n'.'X-Mailer:PHP/'.phpversion();
        mail($to, $subject, $message, $headers, '-ff31ee@localhost');
        session_destroy();
        header("Location: ../ConfirmationPage.html");
    ?>
