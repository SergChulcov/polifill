<?php

?>
<html>
<head>

</head>

<script>
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "https://www.cbr.ru/scripts/XML_daily.asp?date_req=02/03/2022", true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4) {
            console.log(xhr.responseText);
            // innerText does not let the attacker inject HTML elements.
            //document.getElementById("resp").innerText = xhr.responseText;
        }
    }
    xhr.send();
</script>

</html>