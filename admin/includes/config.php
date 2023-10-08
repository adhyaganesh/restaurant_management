<?php
    $hname='localhost';
    $uname='root';
    $pass='';
    $db='Hotel';
// Create connection
    $conn = mysqli_connect($hname,$uname,$pass,$db);
    if(!$conn){
        die("Connection failed: ".mysqli_connect_error());
    }

    function filteration($data){
        foreach($data as $key =>$value){
            $data[$key]= trim($value); //spaces
            $data[$key]= stripcslashes($value); //remove '/'
            $data[$key]= htmlspecialchars($value); //remove '<' '>'
            $data[$key]= strip_tags($value); 

        }
        return $data;
    }


    function select($sql,$values,$datatypes){
        $conn=$GLOBALS['conn'];  //to access conn outside the function
        if($stmt=mysqli_prepare($conn,$sql)){
            mysqli_stmt_bind_param($stmt,$datatypes,...$values);
            if (mysqli_stmt_execute($stmt)){
                $res = mysqli_stmt_get_result($stmt);
                return $res;
            }
            else{
                mysqli_stmt_close($stmt);
                die("Query cannot be executed -select fun 1");
            }
        }else{
            die("Query cannot be executed -select fun 2");
        }
    }
    function update($sql,$values,$datatypes){
        $conn=$GLOBALS['conn'];  //to access conn outside the function
        if($stmt=mysqli_prepare($conn,$sql)){
            mysqli_stmt_bind_param($stmt,$datatypes,...$values);
            if (mysqli_stmt_execute($stmt)){
                $res = mysqli_stmt_affected_rows($stmt);
                mysqli_stmt_close($stmt);
                return $res;
            }
            else{
                mysqli_stmt_close($stmt);
                die("Query cannot be executed -Update");
            }
        }else{
            die("Query cannot be executed -Update");
        }
    }

    
    
    


    
?>