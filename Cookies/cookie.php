<?php
$cookie_name = "user_name";
$cookie_value = "Ram";

// १. ब्राउजरलाई भविष्यका लागि कुकी सेभ गर्न अर्डर दिने
setcookie($cookie_name, $cookie_value, time() + 3600, "/", "", false, true);

// २. रिफ्रेसको समस्या हटाउन अहिलेकै पेज लोडका लागि PHP मेमोरीमा डेटा हालिदिने
$_COOKIE[$cookie_name] = $cookie_value;
?>

<!DOCTYPE html>
<html>
<body>
    <?php
    // अब यो कोड पहिलो पटकमै बिना रिफ्रेस तुरुन्तै चल्छ!
    if (isset($_COOKIE["user_name"])) {
        echo "नमस्ते, " . htmlspecialchars($_COOKIE["user_name"]);
    } else {
        echo "स्वागत छ, कुकी सेट गरिएको छैन। कृपया पेज रिफ्रेस गर्नुहोस्।";
    }
    ?>
</body>
</html>
