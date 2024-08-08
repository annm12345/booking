<?php
require('connection.php');

$id=$_GET['id'];
$bookdetail_data=array();

    $res=mysqli_query($conn,"SELECT * FROM `tblbookingdetail` where id='$id'");
    if($row=mysqli_fetch_assoc($res)){
        $bookdetail_data[]=$row;
        $bookid=$row['BookId'];
        $hotelid=$row['HotelId'];
        
    }
    $book_res=mysqli_query($conn,"SELECT `tblbookingdetail`.`RoomName`,`tblbooking`.`BookId`,`tblbooking`.`FirstName`,`tblbooking`.`LastName`,`tblbooking`.`Email`,`tblbooking`.`Date`,`tblbooking`.`StartDate`,`tblbooking`.`EndDate`,`tblbooking`.`PinNo`,`tblbooking`.`Days`,`tblbooking`.`Roomcount`,`tblbooking`.`AdultCount`,`tblbooking`.`Phone`,`tblbooking`.`netAmount`,`tblhotels`.`NameMM`,`tblhotels`.`NameMM`,`tblhotels`.`email`,`tblhotels`.`address`,`tblbooking`.`ChildCount` FROM `tblbooking`,`tblbookingdetail`,`tblhotels`  where `tblbooking`.`BookId`='$bookid' and `tblhotels`.`HotelId`='$hotelid'");
    if($book_row=mysqli_fetch_assoc($book_res)){
        $book_data[]=$book_row;
    }
    

echo json_encode($book_data);






