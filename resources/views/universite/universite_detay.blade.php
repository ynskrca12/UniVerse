@extends('layouts.master')
@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h2 class="text-center mb-5">{{$universite->universite_ad}}</h2>
            <h5 class="text-center">Sosyal Medya</h5>
            <div class="header2-media-icons-div">
                <div class="header2-media-icon-div ">
                    <a href="https://www.instagram.com/ibuajanda/" target="_blank" class="header2-ikon-a  instagram-color" title="İnstagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
                <div class="header2-media-icon-div">
                    <a href="//twitter.com/ibuajanda" target="_blank" class="header2-ikon-a twitter-color" title="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
                <div class="header2-media-icon-div">
                    <a href="//www.youtube.com/ibuajanda" target="_blank" class="header2-ikon-a youtube-color" title="Youtube">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
                <div class="header2-media-icon-div">
                    <a href="https://rehber.ibu.edu.tr/" target="_blank" class="header2-ikon-a telefon-color" title="Telefon Rehberi">
                        <i class="fas fa-phone"></i>
                    </a>
                </div>
                <div class="header2-media-icon-div">
                    <a href="https://mail.ibu.edu.tr" target="_blank" class="header2-ikon-a mail-color " title="İBU Eposta">
                        <i class="fas fa-envelope"></i>
                    </a>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <p>Üniversite Şehri: {{$universite->universite_il}}</p>
                    <p>Üniversite Türü: {{$universite->turu}}</p>
                    <p>Kuruluş Tarihi: {{$universite->kurulus}}</p>
                </div>
            </div>
            
       
            
            
        </div>
        <div class="col-md-6">
                         <h2>Kullanıcı Yorumları</h2>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Yorum yap...">
                    </div>
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="card-title">Kullanıcı Adı</h5>
                                    <p class="card-text">Yorum metni burada yer alacak.</p>
                                </div>
                            </div>
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="card-title">Kullanıcı Adı</h5>
                                    <p class="card-text">Yorum metni burada yer alacak.</p>
                                </div>
                            </div> 
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="card-title">Kullanıcı Adı</h5>
                                    <p class="card-text">Yorum metni burada yer alacak.</p>
                                </div>
                            </div>  
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="card-title">Kullanıcı Adı</h5>
                                    <p class="card-text">Yorum metni burada yer alacak.</p>
                                </div>
                            </div>
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="card-title">Kullanıcı Adı</h5>
                                    <p class="card-text">Yorum metni burada yer alacak.</p>
                                </div>
                            </div> 
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="card-title">Kullanıcı Adı</h5>
                                    <p class="card-text">Yorum metni burada yer alacak.</p>
                                </div>
                            </div> 
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="card-title">Kullanıcı Adı</h5>
                                    <p class="card-text">Yorum metni burada yer alacak.</p>
                                </div>
                            </div>
        </div>
    </div>
</div>
   
@endsection

@section('css')
<style>
body {
    font-family: Arial, sans-serif;
}

.container {
    margin-top: 50px;
}


.card {
    border: none;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.card-body {
    padding: 20px;
}

.card.comment-card {
    margin-top: 20px;
    border: none;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.card.comment-card .card-body {
    padding: 15px;
}

.form-control.comment-input {
    border-radius: 0;
}


h2 {
    color: #333;
}
.header2-media-icons-div {
    display: flex;
    justify-content: center;
    align-items: center;
}

.header2-media-icon-div {
    margin: 0 10px;
    font-size: 24px;
}

.header2-ikon-a {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
    text-decoration: none;
}

.header2-ikon-a:hover {
    /* color: inherit; */
}

.instagram-color {
    color: #C13584; 
}
.instagram-color:hover {
    color: #ffffff; 
    background-color: #C13584; 
}

.twitter-color {
    color: #1DA1F2;
}
.twitter-color:hover {
    color: #ffffff;
    background-color: #1DA1F2; 
}

.youtube-color {
    color: #FF0000; 
}
.youtube-color:hover {
    color: #ffffff; 
    background-color: #FF0000; 
}
.mail-color {
    color: #FFA500; 
}
.mail-color:hover {
    color: #ffffff; 
    background-color: #FFA500; 
}

.telefon-color {
    color: #0000ff ;    
}

.telefon-color:hover{
    color: #ffffff; 
    background-color: #0000ff; 
}
</style>   
@endsection



@section('js')
<script>
    $(document).ready(function() {
    $(".sticky-top").stick_in_parent();
});
</script>

@endsection