<!DOCTYPE html>
<html>

<head>
    <style>
            .redBackground {
            background-color: red;
        }
    </style>


    <script>

        function sendAJAX(URL) {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("redDiv").innerHTML = processData(JSON.parse(this.responseText));
                    document.getElementById("redDiv").setAttribute("class", "redBackground");
                }
            };
            xmlhttp.open("GET", URL);
            xmlhttp.send();
        }


        function processData(data) {
            var ret;
            if (data.name && data.age) {
                ret = "the name recived back from the server is: " + data.name + "and the age is: " + data.age;
            } else {
                ret = "Please Paint me in red";
            }
            return ret;
        };


        function ShowInt(withPrm) {
            var URL = document.getElementById("mylink").getAttribute("href");
            if (withPrm) {
                sendAJAX(URL)
            } else {
                sendAJAX(URL.split('?')[0])
            }
        };


        function clearDiv() {
            document.getElementById("redDiv").innerHTML = "";
            document.getElementById("redDiv").removeAttribute("class", "redBackground");

        };
    </script>
</head>

<body>
    <a id="mylink" href="HW2.php?name=chani&age=36"> go to page 2 </a>

    <button name="but1" onclick="ShowInt(false)">Present Data </button>
    <button name="but2" onclick="ShowInt(true)">get name and age </button>
    <button name="but3" onclick="clearDiv()">clear Data </button>
    <div id="redDiv"></div>

</body>

</html>