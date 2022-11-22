<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="covid.png">
    <title>COVID 19 Mass Testing</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <script data-ad-client="ca-pub-8691524095575772" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-G81ES9Q5YT"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-G81ES9Q5YT');
    </script>
</head>
<body>
<div class="row">
    <div class="col-md-12">
        <center><h1>COVID-19 Mass Testing</h1></center>
    </div>
    <hr>
    <div class="col-md-12">
        <center><button id="btn-ulol" class="btn btn-primary" onclick="bobo()">TEST</button></center>
    </div>
    <div id="loading" class="col-md-12" style="display:none">
        <center><img src="loading.gif" width="25%" height="25%" /></center>
    </div>
    <hr>
    <br><br>
    <div id="tangahaha" style="display:none" class="col-md-12">
        <center><h1 style="color:blue;">NEGATIVE!</h1><br><h1>Congrats! HAHAHHAHAHA</h1></center>
    </div>
    
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script>
    function bobo(){
        $('#tangahaha').css("display","none");
        $('#btn-ulol').attr('disabled',true);
        $("#loading").css("display","block");
        setTimeout(function () {
            $('#btn-ulol').html('Sapa?');
            $("#loading").css("display","none");
            $('#btn-ulol').attr('disabled',false);
            $('#tangahaha').css("display","block");
        }, 5000);
    }
</script>
</body>
</html>