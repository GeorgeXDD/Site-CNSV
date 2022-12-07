<?php
    
    
    $link = msqli_connect("127.0.0.1","gfofiu","1234"," contact");
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name=$_POST["nume"];
        $email=$_POST["email"];
        $subject=$_POST["subiect"];
        $message=$_POST["mesaj"];
    
        }
    
    // $sql="INSERT INTO Contact(nume, email, subiect, mesaj) VALUES (?, ?, ?, ?)";


    // if(    $stmt = mysqli_prepare($link, $sql);)
    // {
    
    //     mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $subject, $message);
    
    //     if(mysqli_stmt_execute($stmt))
    //         header("location: contact.php");
    //     else
    //         echo "Something is not working. Please try again!";
    
    //     mysqli_stmt_close($stmt);
    // }

    $sql="INSERT INTO Contact(nume, email, subiect, mesaj) VALUES ('$name' , '$email', '$subject', '$message')";


    if(mysqli_query($link, $sql)){
        echo "<h3>data stored in a database successfully."
            . " Please browse your localhost php my admin"
            . " to view the updated data</h3>";

        echo nl2br("\n$name\n $email\n "
            . "$subject\n $message");
    } else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($link);
    }
    
        mysqli_close($link);
    
    ?>