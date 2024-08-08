<?php
require('connection.php');
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $res=mysqli_query($conn,"SELECT * FROM `tblbookingdetail` where id='$id'");
    if($row=mysqli_fetch_assoc($res)){
        $bookid=$row['BookId'];
        $hotelid=$row['HotelId'];
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Detail</title>
    <!--------------------------Style Css------------------------->
    <link rel="stylesheet" href="style.css">

    <!-----font awsome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!----------------Script js-->



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
</head>
<body>                                           
       
    <div class="container">
        <!--------------------------------------------------------TOP Mail---------------------------->
      
           
            <p>---------- Forwarded message ---------</p>
            <p id="hotel">
            <p>Date: <span id="name"></span> သည် 
            <span id="date"></span>တွင် <span>၈:၂၀</span>  ၌ </p>
            <p>Subject: Fwd:  Thanks! Your booking is confirmed at 
                <span id="hotel_name"></span>
            </p>
            <p>To: <a href="" id="Email"></a></p> 
            <span ><i class="fa-solid fa-ellipsis" onclick="showing()"></i></span>
            
        <!--------------------------------------------------------End of Top Mail----------------------->
        <span class="copy_span">Copied to clipboard</span>

        <div class="main">

            <!------------------------------------------------------Nav----------------------------------->
            <div class="nav">
                <div class="left">
                    <h3>
                        <a href="">Booking.com</a> 
                    </h3>
                </div>
                <div class="right">
                    <p class="confirmed">Confirmation: 
                        <span id="confirmed_no"></span>
                        <i class="fa-regular fa-copy" id="copy1"></i> 
                        
                    </p> 
                    <p class="pin">PIN: 
                        <span id="pin">1234567</span> 
                        <i class="fa-regular fa-copy" id="copy2"></i>  
                    (Confidential)</p> 

                </div>
            </div>
            <!-------------------------------------------------------End of Nav---------------------------->

            <section class="body">
                <!----------------------------------------------------Thank------------------------------->
                <div class="thank">
                    <h5>Thanks, <span class="name"></span> Your booking in Mandalay is confirmed.</h5>
                    <div class="lable_mark">
                        <div><i class="fa-solid fa-check"></i> <p><b><span class="hotel_name"></span></b>  is expecting you on <b><span class="date"></span></b></p></div>
                        <div><i class="fa-solid fa-check"></i> <p>Your <b>payment</b>  will be handled by Gold Leaf Hotel. The  "<b>Payment</b>" section below has more details</p></div>
                        <div><i class="fa-solid fa-check"></i> <p><a href="">Make changes to your booking or ask the property a question in just a few clicks</a> </p></div>
                        <div><i class="fa-solid fa-check"></i> <p> <a href="">Personalize your trip </a>	even more by letting the property know more about you before arrival</p></div>
                        <div><i class="fa-solid fa-check"></i> <p>Easily make changes online to all your bookings by <a href="">creating a password</a> .</p></div>
                        <div><p>Keep your PIN confidential as it can be used to modify or cancel your booking.</p></div>
                    </div>
                </div>
                <!---------------------------------------------------End of Thank------------------->
                
                <!----------------------------------------------------Map--------------------->
                
                <div class="map">
                    <h3>Golden Leaf</h3>     
                    <div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4249.373721900497!2d96.08450101139294!3d21.967783479843423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30cb6d3da7a3cf25%3A0xaacc39d30e412579!2sGold%20Leaf%20Hotel!5e1!3m2!1sen!2smm!4v1685803982032!5m2!1sen!2smm" width="" style="border-radius:4px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3700.134941518795!2d96.08450101139294!3d21.967783479843423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30cb6d3da7a3cf25%3A0xaacc39d30e412579!2sGold%20Leaf%20Hotel!5e0!3m2!1sen!2smm!4v1685803784709!5m2!1sen!2smm" width="" style="border-radius:4px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>               

                </div>

                <!---------------------------------------------------End of Map-------------------------------->


                <div class="notation">
                    <i class="fa-solid fa-circle-info"></i><p>You'll pay when you stay at Golden Leaf Hotel</p>
                </div>

                <!--------------------------------------------------Check-in detail---------------------------->

                <div class="reservation_details">
                    <h3>Reservation details</h3>
                    <div class="reservation_detail">
                        <table>
                            <tr>
                                <td>Check-in</td>
                                <td id="start"></td>
                            </tr>
                            <trtr>
                                <td>Check-out</td>
                                <td id="end"></td>
                            </tr>
                            <tr>
                                <td>Your reservation</td>
                                <td id="day"> </td>
                            </tr>
                            <tr>
                                <td>You booked for</td>
                                <td id="adult"></p>
                            </tr>
                            <tr>
                                <td>Location</td>
                                <td id="address"></td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td><a href="" id="phone"></a></td>
                            </tr>
                            <tr style="border-bottom-left-radius: 4px;border-bottom-right-radius:4px ;">
                                <td>Contact</td>
                                <td><a href="" class="email"></a> </td>
                            </tr>
                            
                        </table>
                        
                    </div>
                </div>
                
                <div class="price_details">
                    <h3>Price details</h3>
                    <div class="price_detail">
                        <table>
                            <tr style="border-top-left-radius: 4px;border-top-right-radius:4px ;">
                                <td colspan="2" id="room"></td>
                            </tr>
                            <trtr>
                                <td colspan="2">3 % TAX is included.</td>
                                
                            </tr>
                            <tr>
                                <td colspan="2">10 % Service charge is included.</td>
                                
                            </tr>
                            <tr>
                                <td>Total Price</td>
                                <td id="total"></td>
                            </tr>
                        </table>
                        
                    </div>

                </div>
                <div class="rooms">
                    <h3 id="room_name"></h3>
                    <p>This double room has a tumble dryer, tea/coffee maker and mini-bar.</p>
                    <div class="room">
                        <table>
                            <tr style="border-top-left-radius: 4px;border-top-right-radius:4px ;">
                                <td>Guest name</td>
                                <td class="name"></td>
                            </tr>
                            <trtr>
                                <td>Max capacity</td>
                                <td>3 guests max, with a maximum of 2 adults.
                                    Your total price is based on the rate for the number of booked guests (1 adult). Extra prices may apply for additional guests – up to the max capacity.</td>
                            </tr>
                            <tr>
                                <td>Cancellation policy</td>
                                <td>You can cancel for free until 1 day before arrival. You'll be charged the total price of the reservation if you cancel within 1 day of arrival. If you don't show up, the no-show fee will be the same as the cancellation fee.</td>
                            </tr>
                            <tr>
                                <td>Cancellation cost</td>
                                <td>
                                    <ul>
                                        <li>until February 14, 2023 11:59 PM [+0630]: US$0</li>
                                        <li>from February 15, 2023 12:00 AM [+0630]: US$44.39</li>
                                    </ul>
                                </p>
                            </tr>
                        </table>
                        
                    </div>

                </div>

                <!-----
                <div class="rooms">
                    <h3>Room 2: Superior Double Room</h3>
                    <p>This double room has a tumble dryer, tea/coffee maker and mini-bar.</p>
                    <div class="room">
                        <table>
                            <tr style="border-top-left-radius: 4px;border-top-right-radius:4px ;">
                                <td>Guest name</td>
                                <td>zwe phyo</td>
                            </tr>
                            <trtr>
                                <td>Max capacity</td>
                                <td>3 guests max, with a maximum of 2 adults.
                                    Your total price is based on the rate for the number of booked guests (1 adult). Extra prices may apply for additional guests – up to the max capacity.</td>
                            </tr>
                            <tr>
                                <td>Cancellation policy</td>
                                <td>You can cancel for free until 1 day before arrival. You'll be charged the total price of the reservation if you cancel within 1 day of arrival. If you don't show up, the no-show fee will be the same as the cancellation fee.</td>
                            </tr>
                            <tr>
                                <td>Cancellation cost</td>
                                <td>
                                    <ul>
                                        <li>until February 14, 2023 11:59 PM [+0630]: US$0</li>
                                        <li>from February 15, 2023 12:00 AM [+0630]: US$44.39</li>
                                    </ul>
                                </p>
                            </tr>
                        </table>
                        
                    </div>

                </div>----->
                <!---------------------------------------------------------End -Check-in detail----------------------->

                
                <div class="notation p-2">
                    <div>
                        <i class="fa-solid fa-circle-info"></i><p>	Travel support</p>
                    </div>
                    <div>
                        <p>Look up the necessary info before traveling to a destination as touristic travel might not be allowed yet. In case your travel plans change and you want to modify your booking, check your options to manage the reservation by clicking the link below.</p>
                    </div>
                    
                </div>


                <!---------------------------------------------------------------change Booking------------------------------>
                <div class="change_book">
                    <a href="" class="btn">Make changes to your booking</a>
                    <a href="">Get the print version <i class="fa-solid fa-angles-right"></i></a>
                </div>

                <!------------------------------------------------------------------End Change Booking----------------------->


                <!------------------------------------------------------------------QR Code-------------------------------- -->
                <div class="qr_code">
                    <div class="">
                        <img src="qrcode.jpg" alt="">
                        <p style="width: 150px;text-align: justify;">To get the app, scan this code with your phone's camera</p>
                    </div>
                    <div class="">
                        <h3> Make your trip easy with the app</h3>
                        <p>Change or cancel bookings on the go, chat directly with your property, and much more.</p>
                        <a href="" class="btn" style="width:150px;text-align: center;height: 50px;" >Get the app</a>
                    </div>
                </div>


                <!-----------------------------------------------------------------Explaination------------------------------->
                <div class="explaination">
                    <table>
                        <tr>
                            <td valign="top"><i class="fa-solid fa-circle-info"></i></td>
                            <td><span>Important details</span> 
                                <ul>
                                    <li><p>You'll pay the hotel in the hotel’s local currency (MMK) at the exchange rate on day of payment.</p> </li>
                                    <li><p>Due to the coronavirus (COVID-19), make sure you're booking this property in accordance with the destination's local government guidelines, including (but not limited to) the purpose of travel and maximum group size.</p> </li>
                                    <li><p>In accordance with government guidelines to minimize transmission of the coronavirus (COVID-19), this property can only accept bookings from essential workers/permitted travelers on dates where such guidelines exist. Reasonable evidence must be provided on arrival. If it isn't provided, your booking will be canceled on arrival.</p></li>
                                    <li><p>In accordance with government guidelines to minimize transmission of the coronavirus (COVID-19), this property currently isn't accepting guests from certain countries on dates where such guidelines exist.</p></li>
                                    <li><p>In accordance with government guidelines to minimize transmission of the coronavirus (COVID-19), this property may request additional documentation from guests to validate identity, travel itinerary, and other relevant info on dates where such guidelines exist.</p></li>
                                    <li><p>In response to the coronavirus (COVID-19), additional safety and sanitation measures are in effect at this property.</p></li>
                                    <li><p>Food and beverage services at this property may be limited or unavailable due to the coronavirus (COVID-19).</p></li>
                                    <li><p>As a result of the coronavirus (COVID-19), this property has temporarily suspended its shuttle services.</p></li>
                                    <li><p>Due to the coronavirus (COVID-19), this property is taking steps to protect the safety of guests and staff. Certain services and amenities may be reduced or unavailable as a result.</p></li>
                                    <li><p>Spa and gym facilities at this property are unavailable due to the coronavirus (COVID-19).</p></li>
                                    <li><p>Due to coronavirus (COVID-19), this property adheres to strict physical distancing measures.</p></li>
                                    <li><p>Due to the coronavirus (COVID-19), wearing a face mask is mandatory in all indoor common areas.</p></li>
                                    <li><p>Please inform Gold Leaf Hotel of your expected arrival time in advance. You can use the Special Requests box when booking, or contact the property directly using the contact details in your confirmation.</p></li>
                                    <li><p>Guests are required to show a photo ID and credit card upon check-in. Please note that all Special Requests are subject to availability and additional charges may apply.</p></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><a href="">Get the app to show more details  »</a> </td>
                        </tr>
                    </table>
                </div>


                <div class="explaination">
                    <table>
                        <tr>
                            <td valign="top"><i class="fa-regular fa-credit-card"></i></td>
                            <td><span>Payment</span> 
                                <ul>
                                    <li>This property accepts the following forms of payment: Visa, Euro/Mastercard, UnionPay credit card</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><a href="">Get the app to see more about payment  »</a> </td>
                        </tr>
                    </table>
                </div>
        
                <div class="explaination">
                    <table>
                        <tr>
                            <td valign="top"><i class="fa-solid fa-clipboard"></i></td>
                            <td><span>Make changes to your booking</span> 
                                
                                 <p style="margin-top: 1.4rem;">It’s easy to modify or cancel your reservation. Depending on the type of booking you made, cancellation fees may apply.</p>   
                                
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><a href="">
                                Get the app to modify or cancel your booking  »
                                </a> </td>
                        </tr>
                    </table>
                </div>


        
                <div class="explaination">
                    <table>
                        <tr>
                            <td valign="top"><i class="fa-solid fa-comments"></i></td>
                            <td><span>Contact your property</span> 
                                
                                 <p style="margin-top: 1.4rem;">Have a question or a special request? You can chat with your property on the app.</p>   
                                
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><a href="">
                                Get the app to chat with the property  »
                                </a> </td>
                        </tr>
                    </table>
                </div>


                <div class="explaination">
                    <table>
                        <tr>
                            <td valign="top"><i class="fa-solid fa-globe"></i></td>
                            <td><span>Travel with peace of mind</span> 
                               <p style="margin-top: 1.4rem;"> Find info about traveling safely in our Safety Resource Center, available on both the website and the app.</p>
                    
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><a href="">Get the app »</a> </td>
                        </tr>
                        <tr>
                            <td valign="top"></td>
                            <td><span></span> 
                                <p style="margin-top: 1.4rem;">
                                    You have access to emergency phone numbers for your stay in Myanmar. They’re always available in the app, even without an internet connection.
                                   
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><a href="">
                                Get the app to contact emergency services offline  »
                                </a> </td>
                        </tr>
                    </table>
                </div>
        
            </section>

            <!------------------------------------------------Footer------------------------------------->

        <div class="foot">
            <div>
                <h2>Booking.com</h2>
                <p>Herengracht 597, 1017 CE Amsterdam, Netherlands</p>
                <p>Copyright © 1996–2023 Booking.com. All rights reserved.</p>
                <p>
                    When communicating with your booked accommodations through Booking.com, you're agreeing to the processing of the communications as set out in our Privacy Policy.</p>

            </div>
           
        </div>
            
        </div>
        
    </div>
    
</body>
<script>
     const show=document.querySelector(".fa-solid");
     const main=document.querySelector(".main");
     var down=false;

    function showing(){   
            if(down){
                main.style.display="none";
                down=false;
            }else{
            main.style.display="flex";
            down=true;
        }
    }

   function copy(copyId){
    var $inp=$("<input>");
    $(".nav").append($inp);
    $inp.val($(""+copyId).text()).select();
    document.execCommand("copy");
    $inp.remove();
    $(".copy_span").fadeIn(500,function(){
        $(".copy_span").fadeOut();
    });
   }
   $(document).ready(function(){
    $('#copy1').click(function(){
        copy('#confirmed_no');
    });
    $('#copy2').click(function(){
        copy('#pin');
    });


    
   })

   var bookdetail_ajax= new XMLHttpRequest();
   var method="GET";
   var url="book_data.php?id=<?php echo $id ?>";
   var asynchronous=true;
   bookdetail_ajax.open(method,url,asynchronous);
   
   // sending ajax requext
   bookdetail_ajax.send();

   //receiving response from data.php

   bookdetail_ajax.onreadystatechange=function(){
    if(this.readyState== 4 && this.status==200){
       var data=JSON.parse(this.responseText);
       console.log(data);
       var hotel_html='';
       var hotel_name_html='';
       var hotel_email_html='';
       var name_html='';
       var date_html='';
       var confirmed_html='';
       var pin_html='';
       var start_html='';
       var end_html='';
       var day_html='';
       var adult_html='';
       var address_html='';
       var phone_html='';
       var email_html='';
       var room_html='';
       var total_html='';
       var room_name_html='';
       var customer_email_html='';

       for(var a=0; a<data.length;a++){
        var BookId=data[a].BookId;
        var NameMM=data[a].NameMM;
        var AdultCount=data[a].AdultCount;
        var Date=data[a].Date;
        var Days=data[a].Days;
        var Email=data[a].Email;
        var FirstName=data[a].FirstName;
        var LastName=data[a].LastName;
        var Phone=data[a].Phone;
        var PinNo=data[a].PinNo;
        var RoomName=data[a].RoomName;
        var Roomcount=data[a].Roomcount;
        var StartDate=data[a].StartDate;
        var EndDate=data[a].EndDate;
        var address=data[a].address;
        var email=data[a].email;
        var netAmount=data[a].netAmount;
        var ChildCount=data[a].ChildCount;
        
        hotel_html+="<span>"+NameMM+"</span>";
        hotel_html+="<a href=''>"+email+"</a>";

        hotel_name_html+="<span>"+NameMM+"</span>";
        hotel_email_html+="<a href=''>"+email+"</a>";

        name_html+="<span>"+FirstName+"</span>";
        name_html+="<span>"+LastName+"</span>";

        date_html+="<span>"+Date+"</span>";

        confirmed_html+="<span>"+BookId+"</span>";

        pin_html+="<span>"+PinNo+"</span>";

        start_html+="<td>"+StartDate+"</td>";

        end_html+="<td>"+EndDate+"</td>";

        day_html+="<td>"+Days+" nights , "+Roomcount+" rooms</td>";

        adult_html+="<td>"+AdultCount+" adults , "+ChildCount+" childs</td>";

        address_html+="<td>"+address+"</td>";

        phone_html+="<a href=''>"+Phone+"</a>";

        email_html+="<a href=''>"+email+"</a>";

        room_html+="<td>"+Roomcount+" rooms</td>";

        total_html+="<td> US$ "+netAmount+"</td>";

        room_name_html+="<h3> Room: 1 "+RoomName+"</h3>";

        customer_email_html+="<a href=''>"+Email+"</a>";

       }

       document.querySelector("p#hotel").innerHTML=hotel_html;
       document.querySelector("span#name").innerHTML=name_html;
       document.querySelector("span#date").innerHTML=date_html;
       document.querySelector("span#hotel_name").innerHTML=hotel_name_html;
       document.querySelector("span.hotel_name").innerHTML=hotel_name_html;
       document.querySelector("#Email").innerHTML=customer_email_html;
       document.querySelector("span#confirmed_no").innerHTML=confirmed_html;
       document.querySelector("span#pin").innerHTML=pin_html;
       document.querySelector("span.name").innerHTML=name_html;
       document.querySelector("span.date").innerHTML=date_html;
       document.querySelector("td#start").innerHTML=start_html;
       document.querySelector("td#end").innerHTML=end_html;
       document.querySelector("td#day").innerHTML=day_html;
       document.querySelector("td#adult").innerHTML=adult_html;
       document.querySelector("td#address").innerHTML=address_html;
       document.querySelector("a#phone").innerHTML=phone_html;
       document.querySelector("a.email").innerHTML=email_html;
       document.querySelector("td#room").innerHTML=room_html;
       document.querySelector("td#total").innerHTML=total_html;
       document.querySelector("h3#room_name").innerHTML=room_name_html;
       document.querySelector("td.name").innerHTML=name_html;



    }
   }


</script>
</html>