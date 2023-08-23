@extends('layouts.master')
@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h2>Üniversite Detay Sayfası</h2>
            <p>Bu alanda ilgili üniversite detayları görüntülenecek.</p>

            <div class="card mb-4">
                <div class="card-body">
                    <h2>{{$universite->universite_ad}}</h2>
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
/* Genel stil ayarları */
body {
    font-family: Arial, sans-serif;
}

.container {
    margin-top: 50px;
}

/* Üniversite Detayları Kartı */
.card {
    border: none;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.card-body {
    padding: 20px;
}

/* Kullanıcı Yorumları Kartları */
.card.comment-card {
    margin-top: 20px;
    border: none;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.card.comment-card .card-body {
    padding: 15px;
}

/* Yorum yap inputu */
.form-control.comment-input {
    border-radius: 0;
}

/* Bootstrap'dan gelen stilleri özelleştirme */
/* Örneğin, başlıkların renklerini değiştirmek isterseniz: */
h2 {
    color: #333;
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