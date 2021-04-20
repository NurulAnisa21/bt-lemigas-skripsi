<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ilmu-detil.blogspot.com">
    <title>Load More Using Ajax </title>
    <!-- Bagian css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/ilmudetil.css">
    <!--<link rel='stylesheet' href='assets/css/jquery-ui-custom.css'>-->
    
    
    <!-- Akhir dari Bagian css -->
    <!-- Bagian js -->
    <script src='assets/js/jquery-1.10.1.min.js'></script>       
    
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- akhir dari Bagian js -->
    <script type="text/javascript">
    $( document ).ready(function() {
    $("[rel='tooltip']").tooltip();    
 
    $('.thumbnail').hover(
        function(){
            $(this).find('.caption').slideDown(250); //.fadeIn(250)
        },
        function(){
            $(this).find('.caption').slideUp(250); //.fadeOut(205)
        }
        ); 
    });
    </script>
    <style type="text/css">
     
    .thumbnail {
        position:relative;
        overflow:hidden;
    }
     
    .caption {
        position:absolute;
        top:0;
        right:0;
        background:rgba(90, 90, 90, 0.75);
        width:100%;
        height:100%;
        padding:2%;
        display: none;
        text-align: center;
        color:#fff !important;
        z-index:2;
    }
    
    </style>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">
            Pusat Ilmu Secara Detil</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
                <li class="clr1 active"><a href="index.html">Home</a></li>
                <li class="clr2"><a href="">Programming</a></li>
                <li class="clr3"><a href="">English</a></li>
            </ul>
        </div>
    </div>
</nav>
</br></br></br></br>
<!--- Bagian Judul-->   
<div class="container" style="margin-top:40px"> 
<h2>Tutorial</h2> 
    <div class="row">
        <div class="col-md-4">
            <div class="thumbnail">
                <div class="caption">
                     <h4 class="">Membuat Agenda dengan PHP</h4>

                    <p class="">Dalam Tutorial ini akan dijelaskan secara bertahap bagaimana membangun sebuah kegiatan dengan menggunakan tanggal serta lokasi dan jam kegiatan</p>
                    <p class="">
                        <a href="" class="label label-danger" rel="tooltip" title="Zoom">Zoom</a>

                        <a href="" class="label label-default" rel="tooltip" title="Download now">Download</a>
                    </p>
                </div>
                <img src="img/agenda.png" style="width:360px;height:250px;" alt="..." class="img-responsive">
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <div class="caption">
                     <h4 class="">Thumbnail Headline</h4>
                    <p class="">short thumbnail description</p>
                    <p class=""><a href="" class="label label-danger" rel="tooltip" title="Zoom">Zoom</a>

                        <a href="" class="label label-default" rel="tooltip" title="Download now">Download</a>
                    </p>
                </div>
                <img src="img/tabel.png" style="width:360px;height:250px;" alt="..." class="">
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <div class="caption">
                     <h4 class="">Thumbnail Headline</h4>

                    <p class="">short thumbnail description</p>
                    <p class=""><a href="" class="label label-danger" rel="tooltip" title="Zoom">Zoom</a>

                        <a href="" class="label label-default" rel="tooltip" title="Download now">Download</a>
                    </p>
                </div>
                <img src="img/dashboard.png" style="width:360px;height:250px;" alt="..." class="">
            </div>
        </div>
        <div class="col-md-3">
            <div class="thumbnail">
                <div class="caption">
                     <h4 class="">Thumbnail Headline</h4>

                    <p class="">short thumbnail description</p>
                    <p class=""><a href="" class="label label-danger" rel="tooltip" title="Zoom">Zoom</a>

                        <a href="" class="label label-default" rel="tooltip" title="Download now">Download</a>
                    </p>
                </div>
                <img src="img/dashboard.png" style="width:252.5px;height:250px;" alt="..." class="">
            </div>
        </div>  

        <div class="col-md-3">
            <div class="thumbnail">
                <div class="caption">
                     <h4 class="">Thumbnail Headline</h4>

                    <p class="">short thumbnail description</p>
                    <p class=""><a href="" class="label label-danger" rel="tooltip" title="Zoom">Zoom</a>

                        <a href="" class="label label-default" rel="tooltip" title="Download now">Download</a>
                    </p>
                </div>
                <img src="img/agenda.png" style="width:252.5px;height:250px;" alt="..." class="">
            </div>
        </div>
        <div class="col-md-3">
            <div class="thumbnail">
                <div class="caption">
                     <h4 class="">Thumbnail Headline</h4>

                    <p class="">short thumbnail description</p>
                    <p class=""><a href="" class="label label-danger" rel="tooltip" title="Zoom">Zoom</a>

                        <a href="" class="label label-default" rel="tooltip" title="Download now">Download</a>
                    </p>
                </div>
                <img src="img/tabel.png" style="width:252.5px;height:250px;" alt="..." class="">
            </div>
        </div>
        <div class="col-md-3">
            <div class="thumbnail">
                <div class="caption">
                     <h4 class="">Thumbnail Headline</h4>

                    <p class="">short thumbnail description</p>
                    <p class=""><a href="" class="label label-danger" rel="tooltip" title="Zoom">Zoom</a>

                        <a href="" class="label label-default" rel="tooltip" title="Download now">Download</a>
                    </p>
                </div>
               <img src="img/dashboard.png" style="width:252.5px;height:250px;" alt="..." class="">
            </div>
        </div>
    </div><!--/row -->
</div>  
</body>
</html>