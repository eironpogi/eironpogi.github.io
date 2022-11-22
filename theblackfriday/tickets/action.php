<?php
include 'connection.php';

if(isset($_POST['submit_form'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $fb = $_POST['facebook'];
    $drink = $_POST['drink'];
    $flavor = $_POST['flavor'];
    
    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    
    $code = generateRandomString();
    
    $stmt1 = $con->prepare('SELECT count(*) FROM `tbl_participants` WHERE ticket_code=?');
    $stmt1->bind_param('s',$code);
    $stmt1->execute();
    $stmt1->store_result();
    $stmt1->bind_result($count);
    $stmt1->fetch();
    
    if($count>0){
        $code = generateRandomString();
    }
    
    $stmt = $con->prepare('INSERT INTO `tbl_participants`(`ticket_code`, `name`, `email`, `facebook_link`, `contact`, `drink`, `flavor`) VALUES (?,?,?,?,?,?,?)');
    $stmt->bind_param('sssssss',$code,$name,$email,$fb,$contact,$drink,$flavor);
    
    if($stmt->execute()){
        header('location: index.php?t='.$code);
    }
 
}

if(isset($_POST['pop'])){
    $transaction = $_POST['t_code'];
    $account = $_POST['account_number'];
    $code = $_POST['code'];
    $origin = $_POST['origin'];
    
    $stmt1 = $con->prepare('SELECT id FROM `tbl_participants` WHERE ticket_code=?');
    $stmt1->bind_param('s',$code);
    $stmt1->execute();
    $stmt1->store_result();
    $stmt1->bind_result($id);
    $stmt1->fetch();
    
    echo $id,$transaction,$origin,$account;
    
    $stmt = $con->prepare('INSERT INTO `tbl_payments`(`participant_id`, `reference`, `origin`, `account_num`) VALUES (?,?,?,?)');
    $stmt->bind_param('isss',$id,$transaction,$origin,$account);
    
    if($stmt->execute()){
        header('location: index.php?t='.$code);
    }
}
?>