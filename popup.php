<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>POP</title>
    <script language="JavaScript">
        function setCookie(name, value, expiredays) {
            var date = new Date();
            date.setDate(date.getDate() + expiredays);
            document.cookie = escape(name) + "=" + escape(value) + "; expires=" + date.toUTCString();
        }

        function closePopup() {
            if (document.getElementById("check").value) {
                setCookie("popupYN", "N", 1);
                self.close();
            }
        }
    </script>
</head>
<body>

        <p style="text-align:left; font-size: medium ; color: darkorange"><b>[Popup]</b></p>
      

/*<img src="./img/img1.png" style= "width:100%; margin-top:0px"/>*/
<br>

<input type="checkbox" id="check" align ="right" onclick="closePopup();">

<font style="text-align:right; font-size: larger">Not open for 24 hour</font>


</body>
</html>
