<link rel="icon" type="image/x-icon" href="http://localhost/easyappointments/assets/img/favicon.ico?6398SW">
<div class="container py-5">
    <!-- For demo purpose -->
    <div class="row mb-4">
        <div class="col-lg-8 mx-auto text-center">
            <h1 class="display-6">Choose Payment Method</h1>
        </div>
    </div> <!-- End -->
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card ">
                <div class="card-header">
                    <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                        <!-- Credit card form tabs -->
                        <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                            <li class="nav-item">
                                <a data-toggle="pill" href="#credit-card" class="nav-link active "> <i
                                        class="fas fa-credit-card mr-2"></i>Credit/Debit Card </a>
                            </li>
                            <li class="nav-item">
                                <a data-toggle="pill" href="#upiqr" class="nav-link ">
                                    <i class="fab fa-paypal mr-2"></i> UPI / QR </a>
                            </li>
                            <li class="nav-item">
                                <a data-toggle="pill" href="#paypal" class="nav-link ">
                                    <i class="fab fa-paypal mr-2"></i> Wallet </a>
                            </li>
                            <li class="nav-item">
                                <a data-toggle="pill" href="#net-banking" class="nav-link ">
                                    <i class="fas fa-mobile-alt mr-2"></i> Net Banking </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End -->
                    <!-- Credit card form content -->
                    <div class="tab-content">
                        <!-- credit card info-->
                        <div id="credit-card" class="tab-pane fade show active pt-3">
                            <form role="form" onsubmit="event.preventDefault()">
                                <div class="form-group">
                                    <label for="username">
                                        <h6>Card Holder Name</h6>
                                    </label> <input type="text" name="username" placeholder="Card Holder Name" required
                                        class="form-control ">
                                </div>
                                <div class="form-group"> <label for="cardNumber">
                                        <h6>Card number</h6>
                                    </label>
                                    <div class="input-group"> <input type="text" name="cardNumber"
                                            placeholder="Valid card number" class="form-control " required>
                                        <div class="input-group-append"> <span class="input-group-text text-muted"> <i
                                                    class="fab fa-cc-visa mx-1"></i> <i
                                                    class="fab fa-cc-mastercard mx-1"></i> <i
                                                    class="fab fa-cc-amex mx-1"></i> </span> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group"> <label><span class="hidden-xs">
                                                    <h6>Expiration Date</h6>
                                                </span></label>
                                            <div class="input-group"> <input type="number" placeholder="MM" name=""
                                                    class="form-control" required> <input type="number" placeholder="YY"
                                                    name="" class="form-control" required> </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group mb-4"> <label data-toggle="tooltip"
                                                title="Three digit CV code on the back of your card">
                                                <h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
                                            </label> <input type="text" required class="form-control"> </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="button" class="subscribe btn btn-primary btn-block shadow-sm"
                                        data-toggle="modal" data-target="#success_tic"> Confirm Payment </button>
                                </div>
                            </form>
                        </div>
                        <div id="success_tic" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <a class="close" href="#" data-dismiss="modal">&times;</a>
                                    <div class="page-body">
                                        <div class="head">
                                            <h6 style="margin-top:5px;">Appointment Registered Successfully</h6>
                                        </div>
                                        <h1 style="text-align:center;">
                                            <div class="checkmark-circle">
                                                <div class="background"></div>
                                                <div class="checkmark draw"></div>
                                            </div>
                                       <h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->
                    <!-- Paypal info -->
                    <div id="paypal" class="tab-pane fade pt-3">
                        <div class="list-group">
                            <a href="https://amazonpay.amazon.in/ap/signin?clientContext=257-1789454-3682049&openid.return_to=https%3A%2F%2Famazonpay.amazon.in%2Fv1%2Finitiate-payment%3FredirectUrl%3Dhttps%253A%252F%252Fapi.razorpay.com%252Fv1%252Fgateway%252Fwallet_amazonpay%252Fcallback%26payload%3D7NT4kU7dBMfctYVvJ7rjL0SxD4xNTcC%252FgBSjuf%252B3BPS%252F44W0iPmwC5SiC%252B%252FQp7EEFw6Y1VFWuLWmSeBRoo7ss5jAsQpbJE628eWSLPIUytCR6Yk8o2GDAUaCIaJWp6Yt0QYFEhGioW8CoP3hLkp%252BlKTYXTEhBXLO3mKxy%252FnqkqnyVvXZ6VUk7B2SZnxFi0RkoAhdwZ%252FK4%252Bje3TdItwX1xuS3HnZuFBPYhdtg68hFivvMwnje1bbuZ5pagEPU8ctWAXJdIUCrDBEkQikguCr7GNwJg%252FBiFNE0OOXCEmauI2XvrM8lpi6B7E1%252FKTaRr4C4VdnfuTwlqEeDKUy1j8sxFrVJx%252BaVWNLW5x36p3uk%252F26xuZ%252BtKtcdfguXL1Kt6Lh%252FL%252FwBM3xAIHo79xXEUCO5SqANpCDVC9A4k5aMVDE%253D%26iv%3DKppYlt77gq5uhmkbmHKqPg%253D%253D%26key%3DRGRyziG%252FzBx2KxFJNsx2QSBFMpxsj2%252F%252BFw76UNT4jIqnxGWG6piw0jxECYmtm5esl0TPh7oTFoih%252BWOv7Xoc0rCloOrDvKvdJ04oYHkf1WU5nj8JpLG%252BP6lnySl8qvjhU4dtD5jJKjSbClqztUg0Ehk7FNH2fHjwT3rlJtoRrzDsz3pO8KyURmf8wt0kIAvmNtWugd6%252BofBl2X8gsBePXNc06dLfoBTRRy%252F5cDpKJGpZbztD81H9tkizkY%252BHEa9kIPcZWAjM%252FwU2I3zxaN6Mqr%252BhcYdNTj4KStmdO8WYaLCmoGhcM0oT3jILR9tGKZyQVLHVj7gYcXcolIAJMtDTlQ%253D%253D&openid.identity=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.assoc_handle=amazon_pay_india_desktop&openid.mode=checkid_setup&marketPlaceId=A3FDG49KKM823Y&openid.claimed_id=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&pageId=amzn_pay_in&openid.ns=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0&openid.pape.max_auth_age=5400&siteState=merchantId%3DA3MJ8VJGR6SLBL%2CclientContext%3D258-8084408-2049119%2CsourceUrl%3Dhttps%253A%252F%252Famazonpay.amazon.in%252Fv1%252Finitiate-payment%253FredirectUrl%253Dhttps%25253A%25252F%25252Fapi.razorpay.com%25252Fv1%25252Fgateway%25252Fwallet_amazonpay%25252Fcallback%2526payload%253D7NT4kU7dBMfctYVvJ7rjL0SxD4xNTcC%25252FgBSjuf%25252B3BPS%25252F44W0iPmwC5SiC%25252B%25252FQp7EEFw6Y1VFWuLWmSeBRoo7ss5jAsQpbJE628eWSLPIUytCR6Yk8o2GDAUaCIaJWp6Yt0QYFEhGioW8CoP3hLkp%25252BlKTYXTEhBXLO3mKxy%25252FnqkqnyVvXZ6VUk7B2SZnxFi0RkoAhdwZ%25252FK4%25252Bje3TdItwX1xuS3HnZuFBPYhdtg68hFivvMwnje1bbuZ5pagEPU8ctWAXJdIUCrDBEkQikguCr7GNwJg%25252FBiFNE0OOXCEmauI2XvrM8lpi6B7E1%25252FKTaRr4C4VdnfuTwlqEeDKUy1j8sxFrVJx%25252BaVWNLW5x36p3uk%25252F26xuZ%25252BtKtcdfguXL1Kt6Lh%25252FL%25252FwBM3xAIHo79xXEUCO5SqANpCDVC9A4k5aMVDE%25253D%2526iv%253DKppYlt77gq5uhmkbmHKqPg%25253D%25253D%2526key%253DRGRyziG%25252FzBx2KxFJNsx2QSBFMpxsj2%25252F%25252BFw76UNT4jIqnxGWG6piw0jxECYmtm5esl0TPh7oTFoih%25252BWOv7Xoc0rCloOrDvKvdJ04oYHkf1WU5nj8JpLG%25252BP6lnySl8qvjhU4dtD5jJKjSbClqztUg0Ehk7FNH2fHjwT3rlJtoRrzDsz3pO8KyURmf8wt0kIAvmNtWugd6%25252BofBl2X8gsBePXNc06dLfoBTRRy%25252F5cDpKJGpZbztD81H9tkizkY%25252BHEa9kIPcZWAjM%25252FwU2I3zxaN6Mqr%25252BhcYdNTj4KStmdO8WYaLCmoGhcM0oT3jILR9tGKZyQVLHVj7gYcXcolIAJMtDTlQ%25253D%25253D%2Csignature%3DkaNXJw054gQWhgs8FTWZUzj2FKHd0j3D"
                                class="list-group-item list-group-item-action" target="_blank">Amazon Pay</a>
                            <a href="https://paytm.com/login" target="_blank"
                                class="list-group-item list-group-item-action">PayTM</a>
                            <a href="https://www.phonepe.com/app-download/" target="_blank"
                                class="list-group-item list-group-item-action">
                                PhonePe
                            </a>
                        </div>
                    </div>

                    <!-- End -->
                    <div id="upiqr" class="tab-pane fade pt-3">
                        <div class="text-center">
                            <img src="https://chart.googleapis.com/chart?cht=qr&chl=Hello+World&chs=160x160&chld=L|0"
                                class="qr-code img-thumbnail img-responsive" />
                            <h3>Scan QR</h3>
                        </div>
                    </div>

                    <div id="net-banking" class="tab-pane fade pt-3">
                        <div class="form-group ">
                            <form action="#">
                                <p>
                                    <str>Please choose your bank
                                </p>
                                <input type="radio" id="hdfc" name="net_bank" checked="true"
                                    value="https://netbanking.hdfcbank.com/netbanking/">
                                <label for="hdfc">
                                    HDFC Bank
                                </label><br>
                                <input type="radio" id="yesbank" name="net_bank"
                                    value="https://yesonline.yesbank.co.in/index.html?module=login">
                                <label for="yesbank">
                                    Yes Bank
                                </label><br>
                                <input type="radio" id="indianbank" name="net_bank"
                                    value="https://www.indianbank.net.in/jsp/startIB.jsp">
                                <label for="indianbank">
                                    Indian Bank
                                </label>
                                <br>
                            </form>
                        </div>
                        <button type="button" onclick="return netBank();" class="btn btn-success">Go to NetBanking
                            Login</button>
                    </div>
                    <!-- End -->
                </div>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            background: #f5f5f5
        }

        .rounded {
            border-radius: 1rem
        }

        .nav-pills .nav-link {
            color: #555
        }

        .nav-pills .nav-link.active {
            color: white
        }

        input[type="radio"] {
            margin-right: 5px
        }

        .bold {
            font-weight: bold
        }

        #success_tic .page-body {
            max-width: 300px;
            background-color: #FFFFFF;
            margin: 10% auto;
        }

        #success_tic .page-body .head {
            text-align: center;
        }

        /* #success_tic .tic{
          font-size:186px;
        } */
        #success_tic .close {
            opacity: 1;
            position: absolute;
            right: 0px;
            font-size: 30px;
            padding: 3px 15px;
            margin-bottom: 10px;
        }

        #success_tic .checkmark-circle {
            width: 150px;
            height: 150px;
            position: relative;
            display: inline-block;
            vertical-align: top;
        }

        .checkmark-circle .background {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background: #1ab394;
            position: absolute;
        }

        #success_tic .checkmark-circle .checkmark {
            border-radius: 5px;
        }

        #success_tic .checkmark-circle .checkmark.draw:after {
            -webkit-animation-delay: 300ms;
            -moz-animation-delay: 300ms;
            animation-delay: 300ms;
            -webkit-animation-duration: 1s;
            -moz-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-timing-function: ease;
            -moz-animation-timing-function: ease;
            animation-timing-function: ease;
            -webkit-animation-name: checkmark;
            -moz-animation-name: checkmark;
            animation-name: checkmark;
            -webkit-transform: scaleX(-1) rotate(135deg);
            -moz-transform: scaleX(-1) rotate(135deg);
            -ms-transform: scaleX(-1) rotate(135deg);
            -o-transform: scaleX(-1) rotate(135deg);
            transform: scaleX(-1) rotate(135deg);
            -webkit-animation-fill-mode: forwards;
            -moz-animation-fill-mode: forwards;
            animation-fill-mode: forwards;
        }

        #success_tic .checkmark-circle .checkmark:after {
            opacity: 1;
            height: 75px;
            width: 37.5px;
            -webkit-transform-origin: left top;
            -moz-transform-origin: left top;
            -ms-transform-origin: left top;
            -o-transform-origin: left top;
            transform-origin: left top;
            border-right: 15px solid #fff;
            border-top: 15px solid #fff;
            border-radius: 2.5px !important;
            content: '';
            left: 35px;
            top: 80px;
            position: absolute;
        }

        @-webkit-keyframes checkmark {
            0% {
                height: 0;
                width: 0;
                opacity: 1;
            }

            20% {
                height: 0;
                width: 37.5px;
                opacity: 1;
            }

            40% {
                height: 75px;
                width: 37.5px;
                opacity: 1;
            }

            100% {
                height: 75px;
                width: 37.5px;
                opacity: 1;
            }
        }

        @-moz-keyframes checkmark {
            0% {
                height: 0;
                width: 0;
                opacity: 1;
            }

            20% {
                height: 0;
                width: 37.5px;
                opacity: 1;
            }

            40% {
                height: 75px;
                width: 37.5px;
                opacity: 1;
            }

            100% {
                height: 75px;
                width: 37.5px;
                opacity: 1;
            }
        }

        @keyframes checkmark {
            0% {
                height: 0;
                width: 0;
                opacity: 1;
            }

            20% {
                height: 0;
                width: 37.5px;
                opacity: 1;
            }

            40% {
                height: 75px;
                width: 37.5px;
                opacity: 1;
            }

            100% {
                height: 75px;
                width: 37.5px;
                opacity: 1;
            }
        }
    </style>


    <script>
        function netBank() {
            var bank = $("input[name='net_bank']:checked").val();
            window.location.href = bank;
            return false;
        }

        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>