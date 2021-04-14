<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaif's Video Uploader</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <h2>My content will go here...</h2>
    <div class="my-block">
        <div class="upload">
            <form class="form" id="uploadForm" action="" method="post">
                <input type="file" multiple name="inpFile" id="inp"><br>
                <input type="submit" class="btn" id="button"></input>
            </form>
        </div>
        <div class="progress-bar" id="progressBar"> 
            <div class="bar-fill">
                <span class="bar-text">0%</span>
            </div>
        </div>
    </div>
    <div class="upFiles">
        <img src="/uploads/" id="img1" alt="broken_Img">
    </div>
</body>
    <script src="script.js"></script>
</html>