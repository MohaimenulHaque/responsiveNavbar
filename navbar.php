<link rel="stylesheet" href="./CSS/navbar.css">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>



<?php 
    session_start(); 
    include('config/csrf.php');
?>



<!-- ------------------------------
    Navbar Code start Here 
------------------------------ -->
<div class="bg">
    <nav>
        <div class="navbody ">
            <div class="nav " id="">

            
                
                <!-- ---------- Navbar Hide Icon ---------- -->
                <ul class="sidebar" id="right_sidebar">
                    <li><a href=""><svg xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 -960 960 960" width="25px" fill="#fff"><path d="M240-200h120v-240h240v240h120v-360L480-740 240-560v360Zm-80 80v-480l320-240 320 240v480H520v-240h-80v240H160Zm320-350Z"/></svg>Home</a></li>
                    <li><a href=""><svg xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 -960 960 960" width="25px" fill="#fff"><path d="M440-280h80v-240h-80v240Zm40-320q17 0 28.5-11.5T520-640q0-17-11.5-28.5T480-680q-17 0-28.5 11.5T440-640q0 17 11.5 28.5T480-600Zm0 520q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg>About Us</a></li>
                    
                    <?php
                        if (isset($_SESSION['user_phone'])) {
                    ?>
                        
                        <li><a href=""><svg xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 -960 960 960" width="25px" fill="#fff"><path d="m480-560-56-56 63-64H320v-80h167l-64-64 57-56 160 160-160 160ZM280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM40-800v-80h131l170 360h280l156-280h91L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68.5-39t-1.5-79l54-98-144-304H40Z"/></svg>Add to cart</a></li>
                        <li><a href=""><svg xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 -960 960 960" width="25px" fill="#fff"><path d="M160-200v-80h80v-280q0-83 50-147.5T420-792v-28q0-25 17.5-42.5T480-880q25 0 42.5 17.5T540-820v28q80 20 130 84.5T720-560v280h80v80H160Zm320-300Zm0 420q-33 0-56.5-23.5T400-160h160q0 33-23.5 56.5T480-80ZM320-280h320v-280q0-66-47-113t-113-47q-66 0-113 47t-47 113v280Z"/></svg>Notification</a></li>
                    <?php } ?>

                </ul>
                




                <!-- ---------- Navbar Hearder Icon ---------- -->
                <ul class="link">

                    <li class=""><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#e3e3e3"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" /></svg></a></li>

                    <li class="">
                        <a class="" href="index">
                            <div class="photo">
                                <img src="./Img/ToriTorkari.png" alt="">
                            </div>
                        </a>
                    </li>


                    <!-- ---------- SearchBox Icon ---------- -->
                    <li>
                        <form class="d-flex searchBox ">
                            <input class="search" type="search" placeholder="Search" aria-label="">
                            <button class="btn searchbtn" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" /></svg>
                            </button>
                        </form>
                    </li>


                    <div class="navMenu">
                        
                        <?php
						if (isset($_SESSION['user_phone'])) {
                        ?>
                            <li class="hideOnMobile"><a><svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#e3e3e3"><path d="m480-560-56-56 63-64H320v-80h167l-64-64 57-56 160 160-160 160ZM280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM40-800v-80h131l170 360h280l156-280h91L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68.5-39t-1.5-79l54-98-144-304H40Z"/></svg></a></li>
                            <li class="hideOnMobile"><a><svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#e3e3e3"><path d="M160-200v-80h80v-280q0-83 50-147.5T420-792v-28q0-25 17.5-42.5T480-880q25 0 42.5 17.5T540-820v28q80 20 130 84.5T720-560v280h80v80H160Zm320-300Zm0 420q-33 0-56.5-23.5T400-160h160q0 33-23.5 56.5T480-80ZM320-280h320v-280q0-66-47-113t-113-47q-66 0-113 47t-47 113v280Z"/></svg></a></li>
                            <!-- <li class="profile_icon onclick" onclick="openProfilePopUp()"><div class="onclick" onclick="openProfilePopUp()"><svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#e3e3e3" class="onclick" onclick="openProfilePopUp()"><path class="onclick" onclick="openProfilePopUp()" d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q53 0 100-15.5t86-44.5q-39-29-86-44.5T480-280q-53 0-100 15.5T294-220q39 29 86 44.5T480-160Zm0-360q26 0 43-17t17-43q0-26-17-43t-43-17q-26 0-43 17t-17 43q0 26 17 43t43 17Zm0-60Zm0 360Z" /></svg></div></li> -->
                            <li class="profile_icon onclick" onclick="openProfilePopUp()"><a class="onclick" onclick="openProfilePopUp()"><img src="./img/profile.png" alt="" class="onclick" onclick="openProfilePopUp()"></a></li>


                        <?php }else{ ?>

                            <li class="hideOnMobile_Signin"><a class="sign" data-bs-toggle="modal" href="#signInModalToggle" role="button">Sign in / Sign up</a></li>
                            <li class="signinBTN"><a data-bs-toggle="modal" href="#signInModalToggle" role="button" class=""><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z" /></svg></a></li>

                        <?php } ?>                                

                        <li class="optionBTN optiontoggle" onclick="show_hide()"><a class="optiontoggle" onclick="show_hide()"><span onclick="show_hide()" class="material-symbols-outlined optiontoggle">more_vert</span></a></li>

                    </div>

                </ul>

            </div>


        </div>
    </nav>
</div>



<!-- ------------------------------
    Navbar Code End Here 
------------------------------ -->


<!-- ------------------------------
    Profile Dropdown PopUp Code Start Here 
------------------------------ -->


<div class="profilePopUp " id="profilePopUp">
    <div class="submenu">
        <a href="">
            <svg xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 -960 960 960" width="25px" fill="#fff"><path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z"/></svg>
            <p>Profile</p>
            <span>></span>
        </a>
        <a href="">
            <svg xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 -960 960 960" width="25px" fill="#fff"><path d="M480-120q-138 0-240.5-91.5T122-440h82q14 104 92.5 172T480-200q117 0 198.5-81.5T760-480q0-117-81.5-198.5T480-760q-69 0-129 32t-101 88h110v80H120v-240h80v94q51-64 124.5-99T480-840q75 0 140.5 28.5t114 77q48.5 48.5 77 114T840-480q0 75-28.5 140.5t-77 114q-48.5 48.5-114 77T480-120Zm112-192L440-464v-216h80v184l128 128-56 56Z"/></svg>
            <p>Oder History</p>
            <span>></span>
        </a>
        <a href="./logout.php">
            <svg xmlns="http://www.w3.org/2000/svg" height="25px" viewBox="0 -960 960 960" width="25px" fill="#fff"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z"/></svg>
            <p>Log out</p>
            <span>></span>
        </a>

    </div>

</div>




<!-- ------------------------------
    Profile Dropdown PopUp Code end Here 
------------------------------ -->



<?php 

    $phoneErr = "";

    if(isset($_POST['otpbtn'])){

        // otp genarate here 
        $opt_str = str_shuffle("123456789");
        $otp = substr($opt_str, 0, 6);

        $act_str = rand(1000000, 10000000);
        $activation_code = str_shuffle("abcdefghijklmnopqrstuvwzyz".$act_str);

        // echo $otp;
        // echo "</br>";
        // echo $activation_code;

        

        $phone = $_POST['phoneNumber'];
        $phone = ltrim($phone, "0");
        $finalPhone = '+880'.$phone;
        
        $phoneValidate = "/(^([+]{1}[8]{2}|0088)?(01){1}[3-9]{1}\d{8})$/";

        if(empty($_POST['csrf_token'])){
            // header('Location:index?status=error&message=CSRF Token Missing');
            ?>
                <script>alert('CSRF Token Missing');</script>
            <?php

        }
        elseif($_POST['csrf_token'] != $_SESSION['token']){
            ?>
                <script>alert('CSRF Token not match');</script>
            <?php
        }
        else{

            if(empty($phone)){
                $phoneErr = "Number is required!";
                ?>
                    <script>
                        $(document).ready(function(){
                            $("#signInModalToggle").modal('show');
                        });
                    </script>
    
                <?php 
            }
            elseif(!preg_match($phoneValidate, $finalPhone)){
                $phoneErr = "Only BD Number is allowed!";
                ?>
                    <script>
                        $(document).ready(function(){
                            $("#signInModalToggle").modal('show');
                        });
                    </script>
                <?php 
            }
            else{
    
                $checkUser = "SELECT * FROM users WHERE phone = '$finalPhone'";
                $result = mysqli_query($conn, $checkUser);
                $count = mysqli_num_rows($result);
    
    
                if($count > 0){
                    $update_otp = "UPDATE users SET otp='$otp' WHERE phone = '$finalPhone'";
                    mysqli_query($conn,$update_otp);

                    // send OTP SMS API here 
                    // $to = $finalPhone;
                    // $token = "91992054561747320896ecbdb05cc2d5299174caaa129e7eda61";
                    // $message = "Dear Sir/Madam, ".$otp." is your OTP for login at Tari-Tarkari. আমাদের ওয়েবসাইটে আপনাকে স্বাগতম।";
                    // $url = "https://api.bdbulksms.net/api.php?json";
                    // $data= array(
                    // 'to'=>"$to",
                    // 'message'=>"$message",
                    // 'token'=>"$token"
                    // ); 
                    // $ch = curl_init(); 
                    // curl_setopt($ch, CURLOPT_URL,$url);
                    // curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                    // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                    // curl_setopt($ch, CURLOPT_ENCODING, '');
                    // curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
                    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    // $smsresult = curl_exec($ch);

                    // //Result
                    // // echo $smsresult;

                    // //Error Display
                    // echo curl_error($ch);
                }
                else{
                    $query = "INSERT INTO users(phone, otp) VALUES ('$finalPhone','$otp')";
                    mysqli_query($conn,$query);

                    // send OTP SMS API here 
                    // $to = $finalPhone;
                    // $token = "91992054561747320896ecbdb05cc2d5299174caaa129e7eda61";
                    // $message = "Dear Sir/Madam, ".$otp." is your OTP for login at Tari-Tarkari. আমাদের ওয়েবসাইটে আপনাকে স্বাগতম।";
                    // $url = "https://api.bdbulksms.net/api.php?json";
                    // $data= array(
                    // 'to'=>"$to",
                    // 'message'=>"$message",
                    // 'token'=>"$token"
                    // ); 
                    // $ch = curl_init(); 
                    // curl_setopt($ch, CURLOPT_URL,$url);
                    // curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                    // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                    // curl_setopt($ch, CURLOPT_ENCODING, '');
                    // curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
                    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    // $smsresult = curl_exec($ch);

                    // echo curl_error($ch);

                }
    
    
                ?>
    
                    <!-- OPT Popup start Here  -->
    
                    <form class="otp" action="" method="post">
                        <div class="container-fluid ">
                            <div class="">
                                <div class="card p-2 text-center">
    
                                    <div class="photo">
                                        <img src="./Img/ToriTorkari.png" alt="">
                                        <button type="button" onclick="closeBTN()" class="btn-close" data-bs-dismiss="model" aria-label="Close"></button>
                                    </div>
                                    <h6>Please enter the one time password <br> to verify your account</h6>
                                    <div> 
                                        <!-- <span>A code has been sent to</span> <small id="maskedNumber"><?php if(isset($_POST['otpbtn'])){echo $finalPhone; } ?></small>  -->
                                        <span>A code has been sent to</span>  <input type="text" class="showNum" readonly name="phoneNum" value="<?php if(isset($_POST['otpbtn'])){echo $finalPhone; } ?>"/>
                                    </div>
                                    <div id="otp" class="inputs d-flex flex-row justify-content-center mt-2">
                                        <input class="m-2 text-center form-control rounded" type="text" id="first" name="first" maxlength="1" />
                                        <input class="m-2 text-center form-control rounded" type="text" id="second" name="second" maxlength="1" />
                                        <input class="m-2 text-center form-control rounded" type="text" id="third" name="third" maxlength="1" />
                                        <input class="m-2 text-center form-control rounded" type="text" id="fourth" name="fourth" maxlength="1" />
                                        <input class="m-2 text-center form-control rounded" type="text" id="fifth" name="fifth" maxlength="1" />
                                        <input class="m-2 text-center form-control rounded" type="text" id="sixth" name="sixth" maxlength="1" />
                                        
                                    </div>
                                    <button id="validateBtn" name="validateBtn" class="btn mt-4 px-4 validate">Validate</button>
                                </div>
                            </div>
                        </div>
                    </form>
    
                    <!-- OPT Popup end Here  -->
    
                <?php
    
                
    
    
            }

        }



    }

    

    if(isset($_POST['validateBtn'])){

        $getNum = $_POST['phoneNum'];

        $first = $_POST['first'];
        $second = $_POST['second'];
        $third = $_POST['third'];
        $fourth = $_POST['fourth'];
        $fifth = $_POST['fifth'];
        $sixth = $_POST['sixth'];

        $OTP = $first.$second.$third.$fourth.$fifth.$sixth;

        $query = "SELECT * FROM users WHERE phone='$getNum'";
        $runquery = mysqli_query($conn,$query);

        while ($row = mysqli_fetch_assoc($runquery)) {
            $db_otp = $row['otp'];
            $db_phone = $row['phone'];
        }

        if($db_otp == $OTP){
            // echo "OK";
            $_SESSION['user_phone'] = $db_phone;
            
            ?>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <script>
                window.onload = function () {window.location.reload()}
                // swal({
                //     title: "Welcome!",
                //     text: "Tori-Torkari!",
                //     icon: "success",
                //     button: "Ok",                    
                // });
            </script>

            <?php
            // header('Location:index');

        }else{
            echo "No";
        }
    }
    

?>


<!-- ------------------------------
  login popup design start here 
------------------------------ -->

<div class="modal fade" id="signInModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">

                <div class="photo">
                    <img src="./Img/ToriTorkari.png" alt="">
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <div class="modal-body signin">

                <form action="" method="post">
					<label for="chk" aria-hidden="true">Sign up/Sign in</label>

                    <div class="PhoneInput">
                        <div class="PhoneInputCountry">
                            <div aria-hidden="true" class="PhoneInputCountryIcon PhoneInputCountryIcon--border"><img class="PhoneInputCountryIconImg" alt="Bangladesh" src="https://purecatamphetamine.github.io/country-flag-icons/3x2/BD.svg"></div>
                        </div>
                        <div class="phone">
                            <input autocomplete="tel" disabled="" readonly="" class="PhoneInputInput" type="tel" name="bdCode" value="+880">
                            <input class="phoneNumber" type="text" placeholder="1XXXXXXXXX" name="phoneNumber" value="<?php if(isset($_POST['otpbtn'])){echo $phone; } ?>"><br>

                            <input type="hidden" name="otp"  value="<?php if(isset($_POST['otpbtn'])){echo $otp; } ?>">
                            <input type="hidden" name="activtionCode"  value="<?php if(isset($_POST['otpbtn'])){echo $activation_code; } ?>">
                            <input type="hidden" name="csrf_token"  value="<?=csrf_token(); ?>">
                        </div>
                    </div>
                    <span class="error text-danger"><?php if(isset($_POST['otpbtn'])){echo $phoneErr; } ?></span>

                    
                    <button name="otpbtn" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Send OTP</button>
				</form>


                <p>OR, sign in with</p>
                
            </div>
        </div>
    </div>
</div>


<!-- ------------------------------
  login popup design end here 
------------------------------ -->


<script src="./Js/navbar.js"></script>
<script>
    if ( window.history.replaceState ){
            window.history.replaceState( null, null, window.location.href );
        }
</script>














