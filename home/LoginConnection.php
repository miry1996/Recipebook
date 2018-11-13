 <?php 
        $servername = "localhost";
        $username = "connection";
        $password = "1234";
        $dbname = "localdb"; 

        
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        $username = $_GET['username'];
        $pwd = $_GET['pwd'];
        

        $sql = "SELECT name, password FROM user where name='$username'";
        $result = $conn->query($sql);
        $row = $result->fetch_array();
        $pass =  $row['password'];

       
                    
        
        if ($pwd == $pass){
            header('Location: home.php');
            exit;
        } else {
                echo "Wrong password";
                header('Location: LoginForm.php'); 
        }
        
        
        

    $conn->close();
        
        

?>