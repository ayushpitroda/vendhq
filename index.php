<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Bootstrap 101 Template</title>

        <!-- Bootstrap -->
        <link href="bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="main-container">

            <div class="container">
                <h1 class="text-center">VendHQ</h1>
                <div class="row">
                    <div class="col-md-12">
                        <form method="post" action="submit.form.php" id="customer-form" >
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">First Name</label>
                                        <input type="text" class="form-control" name="Customer[first_name]" id="first_name" placeholder="Please enter first name." required="required" >
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Last Name</label>
                                        <input type="text" class="form-control" name="Customer[last_name]" id="last_name" placeholder="Please enter last name." required="required"  >
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Email </label>
                                        <input type="email" class="form-control" name="Customer[email]" id="email" placeholder="Please enter email."  required="required" data-error="Valid email is required." >
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Birthday </label>
                                        <input type="date" class="form-control" name="Customer[birthday]" id="birthday" placeholder="Date of Birth" required="required" >
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Address</label>
                                        <input type="text" class="form-control" name="Customer[address]" id="address" placeholder="Please enter address" required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">City </label>
                                        <input type="text" class="form-control" name="Customer[city]" id="city" placeholder="Please enter city." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">State </label>
                                        <input type="text" class="form-control" name="Customer[state]" id="state" placeholder="Please enter state." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Post Code </label>
                                        <input type="number" class="form-control" name="Customer[postcode]" id="postcode" placeholder="Please enter postcode." required="required" >
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Group </label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="Customer[group]" id="group1" value="option1" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Prom
                                            </label>
                                            <input class="form-check-input" type="radio" name="Customer[group]" id="group2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Boutique
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Custom field 1  </label>
                                        <input type="text" class="form-control" name="Customer[custom_field_1]" id="custom_field_1" placeholder="Please enter value." required="required" >
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Custom field 2  </label>
                                        <input type="text" class="form-control" name="Customer[custom_field_2]" id="custom_field_2" placeholder="Please enter value." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="g-recaptcha" data-sitekey="6Ldw23cUAAAAAIRyz08SvUMatxazP4wBt_dg0N0r" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                                <input class="form-control d-none hidden" data-recaptcha="true" required data-error="Please complete the Captcha">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-action text-center">
                                <hr />
                                <button type="submit" class="btn btn-lg btn-success">Submit Data</button>
                                <button type="reset" class="btn btn-lg btn-default">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <script src="validator.js"></script>
        <script src="contact.js"></script>
    </body>
</html>