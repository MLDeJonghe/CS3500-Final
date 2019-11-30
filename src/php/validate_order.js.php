<script>
var nameRegEx = new RegExp(/[a-zA-Z]{3,}/);
var emailRegEx = new RegExp("^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$");
var phoneRegEx = new RegExp(/\d?(\s?|-?|\+?|\.?)((\(\d{1,4}\))|(\d{1,3})|\s?)(\s?|-?|\.?)((\(\d{1,3}\))|(\d{1,3})|\s?)(\s?|-?|\.?)((\(\d{1,3}\))|(\d{1,3})|\s?)(\s?|-?|\.?)\d{3}(-|\.|\s)\d{4}/);
var streetRegEx = new RegExp(/\d+[ ](?:[A-Za-z0-9.-]+[ ]?)+(?:Avenue|Lane|Road|Boulevard|Drive|Street|Ave|Dr|Rd|Blvd|Ln|St)\.?/);
var cityRegEx = new RegExp(/^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$/);
var zipRegEx = new RegExp(/\b\d{5}(?:-\d{4})?\b/);

$(document).ready(function () {
    var cardOwner = document.getElementById("cardOwner"); 
    var creditInfo = $('#creditInfo');
    var billingAddress = document.getElementById("billingAddress");
    var city = document.getElementById("city");
    var zip = document.getElementById("zip");

    // CARD OWNER VALIDATION
    cardOwner.addEventListener("change", function () {
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


    // STREET ADDRESS VALIDATION
    billingAddress.addEventListener("change", function () {
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
    city.addEventListener("change", function () {
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
    zip.addEventListener("change", function () {
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
    $('#paymentForm input[type="radio"]').on('change', function () {
        if ($('#paymentForm input[name="paymentType"]:checked').attr("value") == "Card") {
            
            creditInfo.slideDown("slow", "swing");
        } else if ($('#paymentForm input[name="paymentType"]:checked').attr("value") == "Cash") {
            creditInfo.slideUp("slow", "swing");   
        }
    });


});
</script>