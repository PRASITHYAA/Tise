<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet" />
    <!-- mdb -->
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />

    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    {{-- phone --}}
    <!-- phone -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css">


</head>

<body>
    <style>
        .red {
            color: red;
        }

        body {
            overflow-x: hidden;
        }

        .bg {
            background-color: rgba(248, 235, 235, 0.726)
        }

        .careers-back-img {
            /* background-image: url('{{ asset('img/WhatsApp Image 2023-09-05 at 2.53.01 PM') }}'); */
            height: 400px;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        /* nav bar */
        .btn-nav {
            background-color: #1e3060;
            color: white;
            border: none;
        }

        .btn-nav:hover {
            background-color: white;
            color: black;
        }

        .nav-bg {
            background-color: #bf9855;
            color: black;
        }

        .careers-back-img {
            background-image: url("{{ asset('img/back.jpeg') }}");
            height: 400px;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        /* select-back-colour */
        .select-back-colour {
            background-color: rgba(248, 235, 235, 0.726);
        }

        /* star red* */
        .span-star {
            color: red;
        }

        .hai {
            display: inline-block;

            /* "to left" / "to right" - affects initial color */
            background: linear-gradient(to left, white 50%, #1e3060 50%) right;
            background-size: 200%;
            transition: .5s ease-out;
        }

        .hai:hover {
            background-position: left;
            color: white;
        }

        .hidden {
            display: none;
        }

        .btn-right {
            float: right;
        }
        input[type="date"] {
            display: inline-block;
            position: relative;
        }

        input[type="date"]::-webkit-calendar-picker-indicator {
            background: transparent;
            bottom: 0;
            color: transparent;
            cursor: pointer;
            height: auto;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            width: auto;
        }
        input[type="date"]::-moz-calendar-picker-indicator {
 background: transparent;
            bottom: 0;
            color: transparent;
            cursor: pointer;
            height: auto;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            width: auto;
}
    </style>


    <!-- nav bar -->
    <div class="container-fluid ">
        <div class="row nav-top ">
            <div class=" container col-lg-2 text-center navtop" style="background-color: white;">
                <a href="{{ auth()->user()->role == 'Admin' ? route('admin') : route('dashboard') }}">
                    <img class="" style="width: 180px;height: 140px;" src="{{ asset('img/logo.png') }}"
                    alt="">
                </a>
            </div>
            <div class=" container-fluid  col-lg-10 text-white  navtop">
                <section style="background-color: #111c3a; "
                    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                    <!-- Left -->
                    <div class=" d-none d-lg-block ">
                        <span style="padding-left: 10px;" class=""> <i style="color:  rgb(176, 134, 55);"
                                class="fa-regular fa-address-book"></i> No. 5/333A, OMR Road, Thuraipakkam, Chennai,
                            Tamil Nadu, India-600097 </span>
                        <span style="padding-left: 10px;" class=""> <i style="color:  rgb(176, 134, 55);"
                                class="fa-solid fa-phone-volume"></i> +91 44 35862654</span>
                        <span style="padding-left: 10px;" class=""> <i style="color:  rgb(176, 134, 55);"
                                class="fa-regular fa-envelope"></i> info@tisecon.com</span>
                    </div>
                    <!-- Right -->
                    <div>
                        <a style="text-decoration: none;" href="" class=" mx-2   text-reset">
                            <i class="icons-1  fab fa-facebook-f "></i>
                        </a>
                        <a style="text-decoration: none;" href="" class=" mx-2 text-reset">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a style="text-decoration: none;" href="" class="  mx-2 text-reset">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                        <a style="text-decoration: none;" href="" class=" mx-2 text-reset">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                        <a style="text-decoration: none;" href="" class=" mx-2 text-reset">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                    </div>
                </section>
                <nav class="navbar navbar-expand-lg  nav-bg">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                            data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">

                            <i class="fas fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse pb-2" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0  ">
                                <li class="nav-item">
                                    <a class="nav-link  mx-2 " href="{{ route('dashboard') }}">Home</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link  mx-2 " href="#">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link   mx-1" href="#">Sectors</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle mx-3" href="#" id="navbarDropdownMenuLink"
                                        role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                                        Services
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li>
                                            <a class="dropdown-item" href="#">Action</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Another action</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  mx-2 " href="#">Expertise</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link   mx-2" href="#">Projects</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link   mx-2" href="#">Careers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link   mx-1" href="#">Contact Us</a>
                                </li> -->
                            </ul>
                            <div class="d-flex align-items-end btn-nav" style="margin-right: 5px;">
                                <a href="{{ route('logout') }}" class="btn btn-primary btn-nav ">
                                    Logout
                                </a>
                            </div>
                            <!-- <div class="d-flex align-items-end btn-nav">
                                <button type="button" class="btn btn-primary btn-nav ">
                                    Feedback
                                </button>
                            </div> -->
                        </div>
                    </div>
                </nav>
            </div>

        </div>
    </div>

    @yield('content')

    <!-- footer -->
    <footer class="bg-dark  text-white mt-4">
        <div class="container-fluid  p-4">
            <!-- link -->
            <section class="container">
                <div class="row border-bottom ">
                    <div class="col-lg-4 col-md-6 mt-5  ">
                        <h1 class="">About TISE</h1>
                        <p>With over 8 years of experience in the industry, <br> we provide top-notch expertise and
                            innovative <br> solutions for your engineering needs</p>
                        <!-- icons -->
                        <div class="">
                            <a style="text-decoration: none; padding-right: 10px;" href=""
                                class="   text-reset">
                                <i class="icons-1  fab fa-facebook-f g-5 "></i>
                            </a>
                            <a style="text-decoration: none; padding-right: 10px;" href=""
                                class=" text-reset ">
                                <i class="fa-brands fa-instagram  "></i>
                            </a>
                            <a style="text-decoration: none;padding-right: 10px;" href="" class=" text-reset">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a style="text-decoration: none;padding-right: 10px;" href="" class=" text-reset">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Quick Links  -->
                    <div class="col-lg-4 col-md-6 mt-5 mb-5">
                        <h4 class=""> Quick Links </h4>
                        <ul class="list-unstyled mb-4 ">
                            <li class="pb-1">
                                <a href="#!" class="text-white">Terms and Conditions</a>
                            </li>
                            <li class="pb-1">
                                <a href="#!" class="text-white">Privacy Policy</a>
                            </li>
                            <li class="pb-1">
                                <a href="#!" class="text-white">Cancellation & Refund Policy – Training</a>
                            </li>
                            <li class="pb-1">
                                <a href="#!" class="text-white">Cancellation & Refund Policy – Job</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Useful Links -->
                    <div class="col-lg-2 col-md-6 mt-5 mb-5">
                        <h4 class=""> Useful Links </h4>
                        <ul class="list-unstyled mb-0">
                            <li class="pb-1">
                                <a href="#!" class="text-white">Apply for Job</a>
                            </li>
                            <li class="pb-1">
                                <a href="#!" class="text-white">Training Sessions</a>
                            </li>
                            <li class="pb-1">
                                <a href="#!" class="text-white">Projects</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-6 mt-5 mb-5">
                        <img class="pb-4 img-fluid" src="./img/TISE-Footer-Logo.png" alt="">
                    </div>
                </div>
            </section>
        </div>
        <!-- copy -->
        <div class="row  text-center">
            <div class="col-lg-4 mt-2 mb-2">
                <p style="font-weight: bold;">Copyright © 2023 TISE, All rights reserved.</p>
            </div>
            <div class="col-lg-4  d-flex mt-2 ">
                <p class="m-2">Razorpay Quick Links:</p>
                <a class="m-2" style="color: white; " href=""> Privacy Policy </a>
                <a class="m-2" style="color: white;" href=""> T&C </a>
                <a class="m-2" style="color: white;" href=""> Shipping </a>
                <a class=" m-2" style="color: white;" href=""> Refund </a>
            </div>
            <div class="col-lg-4 mt-2 mb-2">
                <p style="font-weight: bold;">Powered by TISE</p>

            </div>
        </div>
    </footer>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>
<link href= 
'//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css'
        rel='stylesheet'> 

    <script src= 
"https://code.jquery.com/ui/1.13.2/jquery-ui.js"> 
    </script>
    {{-- Alphabetic --}}
    <script>
        $(document).ready(function() {
            $(".datepicker, .datepicker-age").attr('placeholder', 'mm/dd/yyyy');
            $('input[type="date"]').attr({'placeholder': 'mm/dd/yyyy', 'type': 'text'}).addClass('datepicker');
            $('.datepicker-experiance').removeClass('datepicker');
            $(".datepicker").datepicker({
                yearRange: '1950:2050', // Set the start year and end year
                changeMonth: true,
                changeYear: true,
                dateFormat: 'yy-mm-dd'
            });
            $(".datepicker-age").datepicker({
                yearRange: '1950:2050', // Set the start year and end year
                changeMonth: true,
                changeYear: true,
                dateFormat: 'yy-mm-dd',
                onSelect: calculateAge
            });
            $(".datepicker-experiance").datepicker({
                yearRange: '1950:2050', // Set the start year and end year
                changeMonth: true,
                changeYear: true,
                dateFormat: 'yy-mm-dd',
                onSelect: validateDateRange
            }); 
            $('.alphabetic-input').on('input', function() {
                var inputValue = $(this).val();
                var alphabeticValue = inputValue.replace(/[^A-Za-z ]/g, '');
                $(this).val(alphabeticValue);
            });
            $(".decimalInput").on("input", function() {
                var inputValue = $(this).val();

                // Remove all non-decimal characters using a regular expression
                var decimalPattern = inputValue.replace(/[^0-9.]/g, '');

                // Ensure that the value is a valid decimal and less than or equal to 100
                if (/^(\d{0,2}(\.\d{0,2})?|100)$/.test(decimalPattern)) {
                    $(this).val(decimalPattern);
                } else {
                    $(this).val('');
                }
            });
            $('input[type="date"]').on('input', function () {
                const inputValue = $(this).val();
                const regex = /^(\d{1,2}\/\d{1,2}\/)(\d{4})$/;

                if (regex.test(inputValue)) {
                    // Get the year portion
                    const year = inputValue.match(regex)[2];

                    // Check if the year has more than four digits
                    if (year.length > 4) {
                        // Truncate the year to four digits
                        const truncatedYear = year.substr(0, 4);
                        // Replace the year with the truncated year
                        const modifiedValue = inputValue.replace(year, truncatedYear);
                        $(this).val(modifiedValue);
                    }
                }
            });
            function calculateAge() {
                const dobInput = document.getElementById("dob").value;

                if (!dobInput) {
                    document.getElementById("ageOutput").value = "";
                    return;
                }

                const dob = new Date(dobInput);
                const currentDate = new Date();

                if (dob >= currentDate) {
                    alert("Please enter a valid date of birth.");
                    document.getElementById("ageOutput").value = "";
                    return;
                }
                const ageInMilliseconds = currentDate - dob;
                const ageInYears = Math.floor(ageInMilliseconds / (1000 * 60 * 60 * 24 * 365));

                document.getElementById("ageOutput").value = ageInYears;
                if(ageInYears < 18) {
                    $('#ageError').text('Age Should be above 18 years');
                } else {
                    $('#ageError').text('');
                }
            }
            function validateDateRange() {
                var input_id = $(this).attr('id');
                var idPartsFrom = input_id.match(/^employer_fromDate_(\d+)$/);
                var idPartsTo = input_id.match(/^employer_toDate_(\d+)$/);
                var incPart = 1;
                if(idPartsFrom != null) {
                    incPart = input_id.split('employer_fromDate_');
                } else if(idPartsTo != null) {
                    incPart = input_id.split('employer_toDate_');
                }
                console.log(incPart[1]);
                const fromDate = new Date($("#employer_fromDate_"+incPart[1]).val());
                const toDate = new Date($("#employer_toDate_"+incPart[1]).val());
                var validationMessage = $("#validationMessage");
                if (fromDate > toDate) {
                    validationMessage.remove();
                    $('<p style="color: red;" id="validationMessage" class="error">The From Date must be before the To Date</p>').insertAfter("#employer_toDate_"+incPart[1]);
                    validationMessage.show();
                } else {
                    validationMessage.remove();
                    calculateExperience($("#employer_fromDate_"+incPart[1]), $("#employer_toDate_"+incPart[1]), incPart);
                }
            }            
            function calculateExperience(fromDateInput, toDateInput, input_name) {
                console.log("#totalExperience_"+input_name[1]);
                const totalExperienceInput = $("#employer_totalExperience_"+input_name[1]);
                const fromDate = new Date(fromDateInput.val());
                const toDate = new Date(toDateInput.val());

                if (!isNaN(fromDate.getTime()) && !isNaN(toDate.getTime())) {
                    // Calculate the difference in months and years
                    const monthsDifference = (toDate.getMonth() - fromDate.getMonth()) + 12 * (toDate.getFullYear() - fromDate.getFullYear());
                    const years = Math.floor(monthsDifference / 12);
                    const months = monthsDifference % 12;

                    // Display the total experience in the input field
                    const totalExperience = years + " years and " + months + " months";
                    totalExperienceInput.val(totalExperience);
                } else {
                    // If the input dates are not valid, clear the total experience field
                    totalExperienceInput.val('');
                }
            }            
        });
    </script>
    @yield('script')
    <script>
        $(document).ready(function() {
            $('input[type="date"]').attr('onkeydown', "return false");
                (function($) {
                  $.fn.inputFilter = function(callback, errMsg) {
                    return this.on("input keydown keyup mousedown mouseup select contextmenu drop focusout", function(e) {
                      if (callback(this.value)) {
                        // Accepted value
                        if (["keydown","mousedown","focusout"].indexOf(e.type) >= 0){
                          $(this).removeClass("input-error");
                          this.setCustomValidity("");
                        }
                        this.oldValue = this.value;
                        this.oldSelectionStart = this.selectionStart;
                        this.oldSelectionEnd = this.selectionEnd;
                      } else if (this.hasOwnProperty("oldValue")) {
                        // Rejected value - restore the previous one
                        $(this).addClass("input-error");
                        this.setCustomValidity(errMsg);
                        this.reportValidity();
                        this.value = this.oldValue;
                        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
                      } else {
                        // Rejected value - nothing to restore
                        //this.value = "";
                      }
                    });
                  };
                }(jQuery));
            $(".phoneInputField, .numeric-input").inputFilter(function(value) {
                return /^\d*$/.test(value);    // Allow digits only, using a RegExp
            },"Only digits allowed");

        });
    </script>
</body>

</html>
