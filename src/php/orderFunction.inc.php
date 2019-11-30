
<script>
var nameRegEx = new RegExp(/[a-zA-Z]{3,}/);
var emailRegEx = new RegExp("^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$");
var phoneRegEx = new RegExp(/\d?(\s?|-?|\+?|\.?)((\(\d{1,4}\))|(\d{1,3})|\s?)(\s?|-?|\.?)((\(\d{1,3}\))|(\d{1,3})|\s?)(\s?|-?|\.?)((\(\d{1,3}\))|(\d{1,3})|\s?)(\s?|-?|\.?)\d{3}(-|\.|\s)\d{4}/);
var streetRegEx = new RegExp(/\d+[ ](?:[A-Za-z0-9.-]+[ ]?)+(?:Avenue|Lane|Road|Boulevard|Drive|Street|Ave|Dr|Rd|Blvd|Ln|St)\.?/);
var cityRegEx = new RegExp(/^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$/);
var zipRegEx = new RegExp(/\b\d{5}(?:-\d{4})?\b/);

$(document).ready(function () {
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
    firstName.addEventListener("change", function () {
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
    lastName.addEventListener("change", function () {
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
    email.addEventListener("change", function () {
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
    phoneNum.addEventListener("change", function () {
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
    address1.addEventListener("change", function () {
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
    $('#orderForm input[type="radio"]').on('change', function () {
        if ($('input[name="orderType"]:checked').attr("value") == "Delivery") {
            deliveryInfo.slideDown("slow", "swing");
        } else if (($('input[name="orderType"]:checked').attr("value") == "Pick Up")) {
            deliveryInfo.slideUp("slow", "swing");
        }
    });
});

</script>