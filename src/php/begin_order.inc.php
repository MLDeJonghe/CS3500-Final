<script>
    var nameRegEx = new RegExp(/[a-zA-Z]{3,}/);
    var emailRegEx = new RegExp("^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$");
    var phoneRegEx = new RegExp(/\d?(\s?|-?|\+?|\.?)((\(\d{1,4}\))|(\d{1,3})|\s?)(\s?|-?|\.?)((\(\d{1,3}\))|(\d{1,3})|\s?)(\s?|-?|\.?)((\(\d{1,3}\))|(\d{1,3})|\s?)(\s?|-?|\.?)\d{3}(-|\.|\s)\d{4}/);
    var streetRegEx = new RegExp(/\d+[ ](?:[A-Za-z0-9.-]+[ ]?)+(?:Avenue|Lane|Road|Boulevard|Drive|Street|Ave|Dr|Rd|Blvd|Ln|St)\.?/);
    var cityRegEx = new RegExp(/^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$/);
    var zipRegEx = new RegExp(/\b\d{5}(?:-\d{4})?\b/);

    $(document).ready(function() {
        var firstName = document.getElementById("firstName");
        var lastName = document.getElementById("lastName");
        var email = document.getElementById("email");
        var phoneNum = document.getElementById("phoneNumber");
        var orderTypeRadios = document.getElementsByName("orderType");
        var deliveryInfo = $("#deliveryInfo")
        var address1 = document.getElementById("address1");
        var city = document.getElementById("city");
        var zip = document.getElementById("zip");

        // FIRST NAME VALIDATION
        firstName.addEventListener("change", function() {
            if (firstName.value.toString().match(nameRegEx)) {
                if (firstName.classList.contains("is-invalid")) {
                    firstName.classList.remove("is-invalid");
                }
                firstName.classList.add("is-valid");

            } else {
                if (firstName.classList.contains("is-valid")) {
                    firstName.classList.remove("is-valid");
                }

                if (!(firstName.classList.contains("is-invalid"))) {
                    firstName.classList.add("is-invalid");
                }
            }
        });

        // LAST NAME VALIDATION
        lastName.addEventListener("change", function() {
            if (lastName.value.toString().match(nameRegEx)) {
                if (lastName.classList.contains("is-invalid")) {
                    lastName.classList.remove("is-invalid");
                }
                lastName.classList.add("is-valid");

            } else {
                if (lastName.classList.contains("is-valid")) {
                    lastName.classList.remove("is-valid");
                }

                if (!(lastName.classList.contains("is-invalid"))) {
                    lastName.classList.add("is-invalid");
                }
            }
        });

        // EMAIL VALIDATION
        email.addEventListener("change", function() {
            if (email.value.toString().match(emailRegEx)) {
                if (email.classList.contains("is-invalid")) {
                    email.classList.remove("is-invalid");
                }
                email.classList.add("is-valid");

            } else {
                if (email.classList.contains("is-valid")) {
                    email.classList.remove("is-valid");
                }

                if (!(email.classList.contains("is-invalid"))) {
                    email.classList.add("is-invalid");
                }
            }
        });

        // PHONE NUMBER VALIDATION
        phoneNum.addEventListener("change", function() {
            if (phoneNum.value.toString().match(phoneRegEx)) {
                if (phoneNum.classList.contains("is-invalid")) {
                    phoneNum.classList.remove("is-invalid");
                }
                phoneNum.classList.add("is-valid");

            } else {
                if (phoneNum.classList.contains("is-valid")) {
                    phoneNum.classList.remove("is-valid");
                }

                if (!(phoneNum.classList.contains("is-invalid"))) {
                    phoneNum.classList.add("is-invalid");
                }
            }
        });

        // STREET ADDRESS VALIDATION
        address1.addEventListener("change", function() {
            if (address1.value.toString().match(streetRegEx)) {
                if (address1.classList.contains("is-invalid")) {
                    address1.classList.remove("is-invalid");
                }
                address1.classList.add("is-valid");

            } else {
                if (address1.classList.contains("is-valid")) {
                    address1.classList.remove("is-valid");
                }

                if (!(address1.classList.contains("is-invalid"))) {
                    address1.classList.add("is-invalid");
                }
            }
        });

        // CITY VALIDATION
        city.addEventListener("change", function() {
            if (city.value.toString().match(cityRegEx)) {
                if (city.classList.contains("is-invalid")) {
                    city.classList.remove("is-invalid");
                }
                city.classList.add("is-valid");

            } else {
                if (city.classList.contains("is-valid")) {
                    city.classList.remove("is-valid");
                }

                if (!(city.classList.contains("is-invalid"))) {
                    city.classList.add("is-invalid");
                }
            }
        });

        // ZIP VALIDATION
        zip.addEventListener("change", function() {
            if (zip.value.toString().match(zipRegEx)) {
                if (zip.classList.contains("is-invalid")) {
                    zip.classList.remove("is-invalid");
                }
                zip.classList.add("is-valid");

            } else {
                if (zip.classList.contains("is-valid")) {
                    zip.classList.remove("is-valid");
                }

                if (!(zip.classList.contains("is-invalid"))) {
                    zip.classList.add("is-invalid");
                }
            }
        });

        // HIDE OR SHOW DELIVERY INFORMATION BASED ON SELECTED ORDER TYPE
        $('#orderForm input[type="radio"]').on('change', function() {
            if ($('input[name="orderType"]:checked').attr("value") == "Delivery") {
                deliveryInfo.slideDown("slow", "swing");
            } else if (($('input[name="orderType"]:checked').attr("value") == "Pick Up")) {
                deliveryInfo.slideUp("slow", "swing");
            }
        });
    });
</script>
<script>
    function validateInfo() {
        var firstName = document.getElementById("firstName");
        var lastName = document.getElementById("lastName");
        var email = document.getElementById("email");
        var phoneNum = document.getElementById("phoneNumber");
        var address1 = document.getElementById("address1");
        var city = document.getElementById("city");
        var zip = document.getElementById("zip");

        var orderType = $('#orderForm input[type="radio"]:checked').attr("value");

        var firstNameValid = false;
        var lastNameValid = false;
        var emailValid = false;
        var phoneNumValid = false;
        var address1Valid = false;
        var cityValid = false;
        var zipValid = false;

        var nameRegEx = new RegExp(/[a-zA-Z]{3,}/);
        var emailRegEx = new RegExp("^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$");
        var phoneRegEx = new RegExp(/\d?(\s?|-?|\+?|\.?)((\(\d{1,4}\))|(\d{1,3})|\s?)(\s?|-?|\.?)((\(\d{1,3}\))|(\d{1,3})|\s?)(\s?|-?|\.?)((\(\d{1,3}\))|(\d{1,3})|\s?)(\s?|-?|\.?)\d{3}(-|\.|\s)\d{4}/);
        var streetRegEx = new RegExp(/\d+[ ](?:[A-Za-z0-9.-]+[ ]?)+(?:Avenue|Lane|Road|Boulevard|Drive|Street|Ave|Dr|Rd|Blvd|Ln|St)\.?/);
        var cityRegEx = new RegExp(/^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$/);
        var zipRegEx = new RegExp(/\b\d{5}(?:-\d{4})?\b/);


        if (orderType === "Delivery") {
            if (firstName.value.toString().match(nameRegEx)) {
                firstNameValid = true;
            } else {
                firstName.focus();
                return false;
            }

            if (lastName.value.toString().match(nameRegEx)) {
                lastNameValid = true;
            } else {
                lastName.foucs();
                return false;
            }

            if (email.value.toString().match(emailRegEx)) {
                emailValid = true;
            } else {
                email.focus();
                return false;
            }

            if (phoneNum.value.toString().match(phoneRegEx)) {
                phoneNumValid = true;
            } else {
                phoneNum.focus();
                return false;
            }

            if (address1.value.toString().match(streetRegEx)) {
                address1Valid = true;
            } else {
                address1.focus();
                return false;
            }

            if (city.value.toString().match(cityRegEx)) {
                cityValid = true;
            } else {
                city.focus();
                return false;
            }

            if (zip.value.toString().match(zipRegEx)) {
                zipValid = true;
            } else {
                zip.focus();
                return false;
            }

            if ((firstNameValid == true) && (lastNameValid == true) && (emailValid == true) &&
                (phoneNumValid == true) && (address1Valid == true) && (cityValid == true) && (zipValid == true)) {
                return true;
            } else {
                return false;
            }

        } else if (orderType === "Pick Up") {
            if (firstName.value.toString().match(nameRegEx)) {
                firstNameValid = true;
            } else {
                firstName.focus();
                return false;
            }

            if (lastName.value.toString().match(nameRegEx)) {
                lastNameValid = true;
            } else {
                lastName.foucs();
                return false;
            }

            if (email.value.toString().match(emailRegEx)) {
                emailValid = true;
            } else {
                email.focus();
                return false;
            }

            if (phoneNum.value.toString().match(phoneRegEx)) {
                phoneNumValid = true;
            } else {
                phoneNum.focus();
                return false;
            }

            if ((firstNameValid == true) && (lastNameValid == true) && (emailValid == true) &&
                (phoneNumValid == true)) {
                return true;
            } else {
                return false;
            }
        }
    }
</script>

<div class="container">
    <br>
    <h1 class="text-uppercase">Begin online order</h1>
    <br>
    <div class="row justify-content-between">
        <div class="col-md-10 border border-muted rounded shadow-sm ml-auto">
            <br>

            <form id="orderForm" method="post" onsubmit="return validateInfo();" action="menu.php">
                <div class="form-group">
                    <div class="form-row justify-content-start">
                        <div class="col-6-md ">
                            <h2>Order Type</h2>
                        </div>
                    </div>
                    <br>
                    <div class="form-row justify-content-center">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-lg btn-primary active" name="radioButton">
                                <input name="orderType" id="isDelivey" type="radio" value="Delivery" autocomplete="off" checked>
                                Delivery
                            </label>
                            <label class="btn btn-lg btn-primary" name="radioButton">
                                <input name="orderType" type="radio" value="Pick Up" autocomplete="off">
                                Pick Up
                            </label>
                        </div>
                    </div>
                    <br>
                    <div class="form-row justify-content-start">
                        <div class="col-6-md ">
                            <h2>Order Info</h2>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="firstName" class="col-form-label text-nowrap ">First Name</label>
                            <input type="text" class="form-control" name="firstName" id="firstName" placeholder="First Name">
                        </div>
                        <div class="col-md-6">
                            <label for="lastName" class="col-form-label text-nowrap ">Last Name</label>
                            <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="email" class="col-form-label text-nowrap">Email</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="email@email.com">
                        </div>
                        <div class="col-md-6">
                            <label for="lastName" class="col-form-label text-nowrap ">Phone Number</label>
                            <input type="text" class="form-control" name="phoneNumber" id="phoneNumber" placeholder="(###)-###-####">
                        </div>
                    </div>
                    <div id="deliveryInfo">
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <label for="streetAddress1" class="col-form-label text-nowrap ">Address</label>
                                    <input id="address1" type="text" class="form-control" name="address1" placeholder="Street Address">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <label for="streetAddress2" class="col-form-label text-nowrap ">Address 2 (Optional)</label>
                                    <input id="address2" type="text" class="form-control" name="address2" placeholder="Apartment, suite, floor...">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="city" class="col-form-label ">City</label>
                                    <input id="city" type="text" name="city" id="city" class="form-control" placeholder="City">
                                </div>
                                <div class="col-md-2">
                                    <label for="city" class="col-form-label ">State</label>
                                    <select name="state" id="state" class="form-control">
                                        <option value="AK">AK</option>
                                        <option value="AL">AL</option>
                                        <option value="AR">AR</option>
                                        <option value="AZ">AZ</option>
                                        <option value="CA">CA</option>
                                        <option value="CO">CO</option>
                                        <option value="CT">CT</option>
                                        <option value="DC">DC</option>
                                        <option value="DE">DE</option>
                                        <option value="FL">FL</option>
                                        <option value="GA">GA</option>
                                        <option value="HI">HI</option>
                                        <option value="IA">IA</option>
                                        <option value="ID">ID</option>
                                        <option value="IL">IL</option>
                                        <option value="IN">IN</option>
                                        <option value="KS">KS</option>
                                        <option value="KY">KY</option>
                                        <option value="LA">LA</option>
                                        <option value="MA">MA</option>
                                        <option value="MD">MD</option>
                                        <option value="ME">ME</option>
                                        <option value="MI">MI</option>
                                        <option value="MN">MN</option>
                                        <option value="MO">MO</option>
                                        <option value="MS">MS</option>
                                        <option value="MT">MT</option>
                                        <option value="NC">NC</option>
                                        <option value="ND">ND</option>
                                        <option value="NE">NE</option>
                                        <option value="NH">NH</option>
                                        <option value="NJ">NJ</option>
                                        <option value="NM">NM</option>
                                        <option value="NV">NV</option>
                                        <option value="NY">NY</option>
                                        <option value="OH">OH</option>
                                        <option value="OK">OK</option>
                                        <option value="OR">OR</option>
                                        <option value="PA">PA</option>
                                        <option value="RI">RI</option>
                                        <option value="SC">SC</option>
                                        <option value="SD">SD</option>
                                        <option value="TN">TN</option>
                                        <option value="TX">TX</option>
                                        <option value="UT">UT</option>
                                        <option value="VA">VA</option>
                                        <option value="VT">VT</option>
                                        <option value="WA">WA</option>
                                        <option value="WI">WI</option>
                                        <option value="WV">WV</option>
                                        <option value="WY">WY</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="city" class="col-form-label ">Zip</label>
                                    <input type="text" name="zip" id="zip" class="form-control" placeholder="Zip">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <input type="submit" id="submitButton" value="BEGIN ORDER" class="form-control btn-primary mt-4 mx-auto">
                    </div>
                </div>
                <br>
            </form>
        </div>
    </div>
    <br>
</div>
</div>