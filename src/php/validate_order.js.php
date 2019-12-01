<script>
    var nameRegEx = new RegExp(/[a-zA-Z]{3,}/);
    var cityRegEx = new RegExp(/^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$/);
    var zipRegEx = new RegExp(/\b\d{5}(?:-\d{4})?\b/);
    var cvvRegEx = new RegExp(/^[\d]{3,4}$/)
    var cardRegEx = new RegExp(/^[\d]{4}[\s]?[\d]{4}[\s]?[\d]{4}[\s]?[\d]{4}$/)
    var expRegEx = new RegExp(/(^[\d]{2}\/[\d]{2})$/)
    var streetRegEx = new RegExp(/\d+[ ](?:[A-Za-z0-9.-]+[ ]?)+(?:Avenue|Lane|Road|Boulevard|Drive|Street|Ave|Dr|Rd|Blvd|Ln|St)\.?/);

    $(document).ready(function() {
        var creditInfo = $('#creditInfo');
        var cardOwner = document.getElementById("cardOwner");
        var expiration = document.getElementById("expiration");
        var cardNumber = document.getElementById("cardNumber");
        var cvv = document.getElementById("cvv");
        var billingAddress = document.getElementById("billingAddress");
        var city = document.getElementById("city");
        var zip = document.getElementById("zip");


        // CARD OWNER VALIDATION
        cardOwner.addEventListener("change", function() {
            if (cardOwner.value.toString().match(nameRegEx)) {
                if (cardOwner.classList.contains("is-invalid")) {
                    cardOwner.classList.remove("is-invalid");
                }
                cardOwner.classList.add("is-valid");

            } else {
                if (cardOwner.classList.contains("is-valid")) {
                    cardOwner.classList.remove("is-valid");
                }

                if (!(cardOwner.classList.contains("is-invalid"))) {
                    cardOwner.classList.add("is-invalid");
                }
            }
        });

        expiration.addEventListener("change", function() {
            if (expiration.value.toString().match(expRegEx)) {
                if (expiration.classList.contains("is-invalid")) {
                    expiration.classList.remove("is-invalid");
                }
                expiration.classList.add("is-valid");

            } else {
                if (expiration.classList.contains("is-valid")) {
                    expiration.classList.remove("is-valid");
                }

                if (!(expiration.classList.contains("is-invalid"))) {
                    expiration.classList.add("is-invalid");
                }
            }
        });

        cardNumber.addEventListener("change", function() {
            if (cardNumber.value.toString().match(cardRegEx)) {
                if (cardNumber.classList.contains("is-invalid")) {
                    cardNumber.classList.remove("is-invalid");
                }
                cardNumber.classList.add("is-valid");

            } else {
                if (cardNumber.classList.contains("is-valid")) {
                    cardNumber.classList.remove("is-valid");
                }

                if (!(cardNumber.classList.contains("is-invalid"))) {
                    cardNumber.classList.add("is-invalid");
                }
            }
        });
        cvv.addEventListener("change", function() {
            if (cvv.value.toString().match(cvvRegEx)) {
                if (cvv.classList.contains("is-invalid")) {
                    cvv.classList.remove("is-invalid");
                }
                cvv.classList.add("is-valid");

            } else {
                if (cvv.classList.contains("is-valid")) {
                    cvv.classList.remove("is-valid");
                }

                if (!(cvv.classList.contains("is-invalid"))) {
                    cvv.classList.add("is-invalid");
                }
            }
        });


        // STREET ADDRESS VALIDATION
        billingAddress.addEventListener("change", function() {
            if (billingAddress.value.toString().match(streetRegEx)) {
                if (billingAddress.classList.contains("is-invalid")) {
                    billingAddress.classList.remove("is-invalid");
                }
                billingAddress.classList.add("is-valid");

            } else {
                if (billingAddress.classList.contains("is-valid")) {
                    billingAddress.classList.remove("is-valid");
                }

                if (!(billingAddress.classList.contains("is-invalid"))) {
                    billingAddress.classList.add("is-invalid");
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
        $('#paymentForm input[type="radio"]').on('change', function() {
            if ($('input[name="paymentType"]:checked').attr("value") == "Card") {

                creditInfo.slideDown("slow", "swing");
            } else if ($('#paymentForm input[name="paymentType"]:checked').attr("value") == "Cash") {
                creditInfo.slideUp("slow", "swing");
            }
        });


    });
</script>
<script>
    function validateInfo() {
        var cardOwner = document.getElementById("cardOwner");
        var cardNumber = document.getElementById("cardNumber");
        var cvv = document.getElementById("cvv");
        var expiration = document.getElementById("expiration");
        var billingAddress = document.getElementById("billingAddress");
        var city = document.getElementById("city");
        var zip = document.getElementById("zip");

        var paymentType = $('#paymentForm input[type="radio"]:checked').attr("value");

        var cardOwnerValid = false;
        var expirationValid = false;
        var cardNumberValid = false;
        var cvvValid = false;
        var billingAddressValid = false;
        var cityValid = false;
        var zipValid = false;

        var nameRegEx = new RegExp(/[a-zA-Z]{3,}/);
        var cityRegEx = new RegExp(/^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$/);
        var zipRegEx = new RegExp(/\b\d{5}(?:-\d{4})?\b/);
        var cvvRegEx = new RegExp(/^[\d]{3,4}$/)
        var cardRegEx = new RegExp(/^[\d]{4}[\s]?[\d]{4}[\s]?[\d]{4}[\s]?[\d]{4}$/)
        var expRegEx = new RegExp(/(^[\d]{2}\/[\d]{2})$/)
        var streetRegEx = new RegExp(/\d+[ ](?:[A-Za-z0-9.-]+[ ]?)+(?:Avenue|Lane|Road|Boulevard|Drive|Street|Ave|Dr|Rd|Blvd|Ln|St)\.?/);

        if (paymentType === "Card") {
            if (cardOwner.value.toString().match(nameRegEx)) {
                cardOwnerValid = true;
            } else {
                cardOwner.focus();
                return false;
            }

            if (expiration.value.toString().match(expRegEx)) {
                expirationValid = true;
            } else {
                expiration.focus();
                return false;
            }

            if (cardNumber.value.toString().match(cardRegEx)) {
                cardNumberValid = true;
            } else {
                cardNumber.focus();
                return false;
            }
            if (cvv.value.toString().match(cvvRegEx)) {
                cvvValid = true;
            } else {
                cvv.focus();
                return false;
            }

            if (billingAddress.value.toString().match(streetRegEx)) {
                billingAddressValid = true;
            } else {
                billingAddress.focus();
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

            if ((cardOwnerValid == true) && (expirationValid == true) && (cardNumberValid == true) &&
                (cvvValid == true) && (billingAddressValid == true) && (cityValid == true) && (zipValid == true)) {
                return true;
            } else {
                return false;
            }
        } else if (paymentType === "Cash") {
            return true;
        }
    }
</script>