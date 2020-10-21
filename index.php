<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>

    <!-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600;800&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <section class="middle">
        <div class="box" id="borders">
            <form action="index.php" method="POST">
                <div class="top">
                    <marquee id="demo" class="counter fixed" direction="right"></marquee>
                    <p class="online">online</p>
                    <marquee id="demo1" class="counter fixed" direction="right"></marquee>
                    <p class="online">Today Visited:</p>
                </div>
                <h1>Corona Servey</h1>
                <div class="inputbox">
                    <input type="text" placeholder="Enter your Full Name" name="fullname" autocomplete="off" required>
                </div>
                <div class="inputbox">
                    <input type="number" placeholder="Age" name="age" autocomplete="off" required>
                </div>
                <div class="inputbox">
                    <input type="email" placeholder="Enter your Email address" name="email" autocomplete="off" required>
                </div>
                <div class="" style="margin-bottom: 20px;">
                    <label for="">Select your gender</label><br>
                    <input style="margin-top: 15px;" type="radio" id="male" name="gender" value="Male" required>
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="Female">
                    <label for="female">Female</label>
                    <input type="radio" id="other" name="gender" value="Transgender">
                    <label for="Transgender">Transgender</label>
                </div><br>
                <div class="">
                    <label for="">Where are you from ?</label><br>
                    <select class="areas are" id="select-state" name="state" required>
                        <option value="">Select state</option>
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Odisha">Odisha</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="Uttarakhand">Uttarakhand</option>
                        <option value="West Bengal">West Bengal</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="" style="margin-bottom: 20px;">
                    <label for="">Who are you ?</label><br>
                    <input style="margin-top: 15px;" type="radio" name="whoareyou" value="Student" id="student">
                    <label for="Student">Student</label><br>
                    <input type="radio" name="whoareyou" value="Employed" id="em">
                    <label for="Employee">Employed</label><br>
                    <input type="radio" name="whoareyou" value="Unemployed" id="un">
                    <label for="Unemployee">Unemployed</label><br>
                    <input type="radio" name="whoareyou" value="Others" id="ot">
                    <label for="Other">Other</label>
                </div>
                <div class="test" style="margin-bottom: 20px; display: none;">
                    <label for="">Which work do you like?</label><br>
                    <input style="margin-top: 15px;" type="radio" id="wh" value="WorkFromHome" name="employedlikess">
                    <label for="Work From Home">Work From Home</label><br>
                    <input type="radio" id="wo" value="WorkFromOffice" name="employedlikesss">
                    <label for="Work From Office">Work From Office</label><br>
                    <input type="radio" id="bo" value="Both" name="employedlikessss">
                    <label for="Both">Both</label><br>
                    <input type="radio" id="oth" value="Other" name="employedlikesssss">
                    <label for="Other">Other</label><br><br>
                    <div class="inputbox">
                        <textarea class="hides" id="showss" cols="10" rows="3" name="employedmessage" placeholder="Give some advice in current Situation (Optional)"></textarea>
                    </div>
                </div>
                <div class="test1" style="margin-bottom: 20px; display: none;">
                    <label for="">What are you doing ?</label><br>
                    <input style="margin-top: 15px;" type="checkbox" id="enter" value="Entrepreneurship" name="check_list[]">
                    <label for="Entrepreneurship">Entrepreneurship</label><br>
                    <input type="checkbox" id="freelancer" value="Multi-Brands" name="check_list[]">
                    <label for="Freelancer">Multi-Brands</label><br>
                    <input type="checkbox" id="ebuss" value="E-Commerce" name="check_list[]">
                    <label for="E-Business">E-Commerce</label><br>
                    <input type="checkbox" id="ebuss" value="Website Developer" name="check_list[]">
                    <label for="E-Business">Website Developer</label><br>
                    <input type="checkbox" id="ebuss" value="Affiliate Marketing" name="check_list[]">
                    <label for="E-Business">Affiliate Marketing</label><br>
                    <input type="checkbox" id="ebuss" value="Partnership" name="check_list[]">
                    <label for="E-Business">Partnership</label><br>
                    <input type="checkbox" id="othersss" value="Other" name="check_list[]">
                    <label for="Other">Other</label><br><br>
                    <div class="inputbox">
                        <textarea cols="10" rows="3" name="otheradvice" placeholder="Give some advice in current Situation (Optional)"></textarea>
                    </div>
                </div>

                <div class="Unemployed" style="margin-bottom: 20px; display: none;">
                    <label style="    display: flex;
                    justify-content: center;
                    align-items: center;
                    font-size: 17px;
                    text-decoration: underline;
                    text-decoration-style: solid;
                    text-decoration-color: #2196F3;" for="">Fill the details it will Helps.</label><br><br>
                    <label for="Business">Are You Graduated ?</label><br>
                    <input type="radio" id="yes" value="Yes" name="unemployed">
                    <label>Yes</label>
                    <input type="radio" id="no" value="No" name="unemployed">
                    <label>No</label><br><br>
                    <div class="potals" style="display: none;">
                        <label>How many potals do you applied ?</label><br>
                        <input style="margin-top: 15px;" type="checkbox" name="unemployedpotals" value="Naukri">
                        <label>Naukri</label><br>
                        <input type="checkbox" name="unemployedpotals" value="LinkedIn" />
                        <label>LinkedIn</label><br>
                        <input type="checkbox" name="unemployedpotals" value="Indeed">
                        <label>Indeed</label><br>
                        <input type="checkbox" name="unemployedpotals" value="Upwork" />
                        <label>Upwork</label><br>
                        <input type="checkbox" name="unemployedpotals" value="Angel List">
                        <label>Angel List</label><br>
                        <input type="checkbox" name="unemployedpotals" value="First Naukri">
                        <label>First Naukri</label><br>
                        <input type="checkbox" name="unemployedpotals" value="Internshala">
                        <label>Internshala</label><br>
                        <input type="checkbox" name="unemployedpotals" value="All Potals" />
                        <label>All Potals</label><br>
                        <input type="checkbox" name="unemployedpotals" value="None" />
                        <label>None</label><br>
                        <input type="checkbox" name="unemployedpotals" value="Other" />
                        <label>Other</label><br><br>
                    </div>
                    <div class="inputbox Qualification" style="display: none; margin-bottom: 15px; margin-top: 15px;">
                        <input type="text" placeholder="Minimum Qualification" autocomplete="off" name="unemployedqualification">
                    </div>
                    <div class="inputbox">
                        <input style="    margin-top: 15px;
                        margin-bottom: 50px;" type="number" name="unemployednumber" placeholder="Mobile number" autocomplete="off">
                    </div>
                    <div class="inputbox">
                        <textarea cols="10" rows="3" name="unemployedjob" placeholder="Which kinds of Job are you looking?" autocomplete="off"></textarea>
                    </div>
                    <div class="inputbox">
                        <textarea cols="10" rows="3" name="unemployedskills" placeholder="How many skills you have Explain?" autocomplete="off"></textarea>
                    </div>
                </div>


                <div class="inputbox getout">
                    <textarea cols="10" rows="3" placeholder="Message (Optional)" name="message"></textarea>
                </div>

                <input type="submit" name="data" value="Submit">
                <marquee class="" direction="left">Pease Fill the form it will helps OR Please share these form someone need to grow.</marquee>

            </form>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />


    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js" integrity="sha512-+/4Q+xH9jXbMNJzNt2eMrYv/Zs2rzr4Bu2thfvzlshZBvH1g+VGP55W8b6xfku0c0KknE7qlbBPhDPrHFbgK4g==" crossorigin="anonymous"></script>

    <script>
        document.getElementById("demo").innerHTML =
            Math.floor(Math.random() * 50) + 10;

        document.getElementById("demo1").innerHTML =
            Math.floor(Math.random() * 500) + 800;
    </script>
    <script>
        $(document).ready(function() {

            $('.counter').counterUp({
                delay: 10,
                time: 3000
            });

            $('select').selectize({
                sortField: 'text'
            });




            $("#em").click(function() {
                $(".test").show(1000);
            });

            $("#em").click(function() {
                $(".getout").hide(1000);
            });
            $("#student").click(function() {
                $(".getout").show(1000);
            });
            $("#ot").click(function() {
                $(".getout").hide(1000);
            });

            $("#un").click(function() {
                $(".getout").hide(1000);
            });
            $("#em").click(function() {
                $(".getout").hide(1000);
            });
            $("#ot").click(function() {
                $(".getout").hide(1000);
            });



            $("#student").click(function() {
                $(".test").hide(1000);
            });
            $("#ot").click(function() {
                $(".test").hide(1000);
            });
            $("#un").click(function() {
                $(".test").hide(1000);
            });
            $("#ot").click(function() {
                $(".test1").show(1000);
            });
            $("#student").click(function() {
                $(".test1").hide(1000);
            });
            $("#em").click(function() {
                $(".test1").hide(1000);
            });
            $("#un").click(function() {
                $(".test1").hide(1000);
            });

            $("#oth").click(function() {
                $(".others").show(1000);
            });
            $("#bo").click(function() {
                $(".others").hide(1000);
            });
            $("#wo").click(function() {
                $(".others").hide(1000);
            });
            $("#wh").click(function() {
                $(".others").hide(1000);
            });

            $("#un").click(function() {
                $(".Unemployed").show(1000);
            });
            $("#ot").click(function() {
                $(".Unemployed").hide(1000);
            });
            $("#em").click(function() {
                $(".Unemployed").hide(1000);
            });
            $("#student").click(function() {
                $(".Unemployed").hide(1000);
            });

            $("#yes").click(function() {
                $(".potals").show(1000);
            });
            $("#no").click(function() {
                $(".potals").hide(1000);
            });

            $("#no").click(function() {
                $(".Qualification").show(1000);
            });
            $("#yes").click(function() {
                $(".Qualification").hide(1000);
            });


        });
    </script>
</body>
</html>
<?php

include "connection.php";

if(isset($_POST['data']))
{
    $full_name = $_POST['fullname'];
    $age = $_POST['age'];
    $email_address = $_POST['email'];
    $gender = $_POST['gender'];
    $india_state = $_POST['state'];
    $who_are_you = $_POST['whoareyou'];
    $studentmessage = $_POST['message'];


    $employedlike = $_POST['employedlike'];
    $employedmessage = $_POST['employedmessage'];

    $unemployedgraduated = $_POST['unemployed'];
    $unemployedportals = $_POST['unemployedpotals'];

    $insertquery = " INSERT INTO `test`(`fullname`, `age`, `email`, `gender`, `state`, `whoareyou`, `message`, `employedlike`, `employedmessage`,`graduatedyes`, `graduatedportals`) 
                   VALUES ('$full_name','$age','$email_address','$gender','$india_state','$who_are_you','$studentmessage','$employedlike','$employedmessage','$unemployedgraduated','$unemployedportals') ";

 
    $result = mysqli_query($connect,$insertquery);

    if($result)
    {
        echo "Data inserted ";
    }
    else
    {
        echo "Data not inserted ";
    }

    
}


?>
