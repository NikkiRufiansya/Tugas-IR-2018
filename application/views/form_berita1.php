<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>

    <style>

    </style>
    <title>News Topic Classifier with Prosa.ai</title>
</head>
<body>
    <div class="header" style="background: #0066ff; width: 100%; height: 100px; ">
        <h3 style="text-align: center; line-height : 100px; color: #d9d9d9;">
            News Topic Classifier with Prosa.ai
        </h3>
    </div>
    <div class="b" style="background: #6699ff; width: 100%; height: 500px;">
        <center>
            <p style="font-size: 26px; line-height : 100px;">Masukkan berita yang mau di klasifikasi pada kolom dibawah...!!!</p>
            <form enctype="application/json" action="index.php/Berita/masukan_Berita" method="post">
                <div class="form-group">
                    <textarea  name="isi_berita" class="ckeditor" style="width: 600px; height: 300px; background: #d9d9d9;"></textarea><br>
                    <button type="submit" value="submit" class="btn btn-primary btn-sm" style="width: 150px; height: 50px; font-size: 25px; background: #0066ff; color: black;">
                    <i class="fa fa-dot-circle-o"></i> Klasifikasi               
                </div>
            </form>
        </center>
    </div>
<div class="footer" style="background: #0066ff; width: 100%; height: 100px;">
    
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>