<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="favicon.ico">
    <meta name="viewport" content="width=device-width" , initial-scale=1.0>
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@2.0.0/dist/tf.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/scan.css">
    <title>Dog Breed Identifier | Scan</title>
    <script>
        function showDog(str) {
            console.log(str);
            if (str == "") {
                document.getElementById("sql-data").innerHTML = "";
                return;
            }
            else{
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    document.getElementById("sql-data").innerHTML = this.responseText;
                }
                xmlhttp.open("GET", "getdog.php?q="+str, true);
                xmlhttp.send();
            }
        }
    </script>
</head>

<body>
    <nav>
        <div class="logo">
            <h4><a href="index.php">Dog Breed Identifier</a></h4>
        </div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Scan</a></li>
            <li><a href="tutorial.html">Tutorial</a></li>
            <li><a href="about.html">About</a></li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
    <div id="main-container">
        <div id="initial-container">
            <h1 class="centered" id="scan-header">Upload Your Photo Here</h1>
            <div id="upload-container">
                <form method="post" action="" enctype="multipart/form-data" id="uploadForm">
                    <div class="centered">
                        <input name="userPhoto" type="file" id="upload">
                        <input type="button" class="button" value="Upload Photo" id="submit">
                    </div>
                </form>
                <input type="button" class="button" value="Predict Breed" id="predict">
                <div class="preview">
                        <img src="" id="img">
                        <!--width="224" height="224" -->
                </div>
            </div>
            <div>
                <p class="centered" id="help-text"><a href="tutorial.html">Need help?</a> <a href="report-bug.html">Found a bug?</a></p>
            </div>
        </div>
        <div id="result-container">
            <div id="help-loading">
                <h3>Predicting Breed!</h3>
                <p>please wait, this can take a while...</p>
                <img src="assets/images/loading.svg" id="loading" alt="loading spinner">
            </div>
            <div id="output">
                    <h3 class="center-horizontal" id="predictText"></h3>
                    <h2 class="center-horizontal" id="result"></h2>
                    <h2 class="center-horizontal" id="resultAcc"><h2>
                </div>
            <div id="sql-data">
                <!--BREED INFO GOES HERE-->
                <table>
                <tr>
                    <th>Name</th>
                    <th>Origin</th>
                    <th>Dietary requirements</th>
                    <th>Shouldn't eat</th>
                    <th>Weight range</th>
                    <th>Height range</th>
                    <th>Life expectancy</th>
                    <th>Common health problems</th>
                    <th>Temperament</th>
                </tr>
                </table>
            </div>
        </div>
    </div>
</body>
    <script type="module" src="assets/scripts/scan.js"></script>
    <script type="module" src="assets/scripts/bar.js"></script>
    <script type="module" src="assets/scripts/animation.js"></script>
</html>