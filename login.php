<? php
    $fullname = $_POST['fullname']
    $emailaddress = $_POST['emailaddress']

    //Database connection
    $conn = new mysqli('localhost','root','','newslettersub');
    if($conn->connect_error){
        die('Connection Failed  : '.conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into subscription(fullname, emailaddress) values(?, ?)");
        $stmt->bind_param("ss",$fullname, $email);
        $stmt->execute();
        echo "Subscribed Successfully....";
        $stmt->close();
        $conn->close();
    }
?>