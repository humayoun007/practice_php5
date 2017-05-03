<html>
<head>
<script>
function showNamesSample(str) {
    if (str.length == 0) { 
        document.getElementById("txtName").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtName").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "allnames.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>

<p><b>Start typing a name in the input field below:</b></p>
<form> 
First name: <input type="text" onkeyup="showNamesSample(this.value)">
</form>
<p>Suggestions: <span id="txtName"></span></p>
</body>
</html>