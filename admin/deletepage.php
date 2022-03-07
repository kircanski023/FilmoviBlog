<?php
include_once "../includes/connection.php";
include_once "../includes/functions.php";
session_start();
if(!isset($_GET['id'])){
    header("Location: page.php?message=Kliknite+na+dugme+obriši");
    exit();
}else{
    if(!isset($_SESSION['author_role'])){
        header("Location: page.php?message=Ulogujte+se");
        exit(); 
    }else{
    if($_SESSION['author_role']!="admin"){
        echo "You can not access this page"; 
    }else{
        $page_id = $_GET['id'];
        $sql = "SELECT * FROM page WHERE page_id='$page_id'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)<=0){
          header("Location: page.php?message=Stranica+nije+pronadjena");
          exit();  
        }else{
            $page_id = $_GET['id'];
            $sql = "DELETE FROM `page` WHERE `page_id`='$page_id'";
            if(mysqli_query($conn, $sql)){
                 header("Location: page.php?message=Stranica+Obrisana");
                 exit();  
            }else{
                 header("Location: page.php?message=Došlo+je+do+greške+prilikom+brisanja");
                 exit();  
            }
            
        }
    }
}
} 
?>