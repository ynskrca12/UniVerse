@extends('layouts.master')

@section('content')

<div class="row mb-5">
  <div class="search-bar">
    <input type="text" class="search-input" placeholder="Üniversiteni Bul..." id="searchInput">
    <button class="search-button"  id="searchButton">
        <i class="fa fa-search"></i>
    </button>
</div>


</div>
    <div class="row">
      <h3 style="margin-bottom: 20px">Üniversitelerimiz</h3>
      @foreach($universiteler as $universite)
          <div class="col-md-4 mb-4 university-card" data-name="{{$universite->universite_ad}}">
              <div class="card">
                @if($universite->image)
                <img src="{{$universite->image}}" class="card-img-top" alt="Üniversite Resmi">
            @else
                <img src="varsayilan_foto.jpg" class="card-img-top" alt="Üniversite Resmi">
            @endif
                  <div class="card-body">
                      <h5 class="card-title mb-4">{{$universite->universite_ad}}</h5>
                      <p class="card-text">Üniversite Şehri : {{$universite->universite_il}}</p>
                      <p class="card-text">Üniversite Türü : {{$universite->turu}}</p>
                      <p class="card-text">Kuruluş Tarihi : {{$universite->kurulus}}</p>
                  </div>
                  <div class="card-footer">
                      <a href="{{ route('universite_detay', ['id' =>$universite->id]) }}" class="btn btn-success btnCard">Bilgi Al</a>
                      <a href="http://www.{{$universite->internet_sitesi}}" class="btn btn-primary btnCard">Resmi Siteye Git</a>
                  </div>
              </div>
          </div>
      @endforeach
  </div>

   
@endsection

@section('css')
<style>

 /* Search bar container */
.search-bar {
    display: flex;
    align-items: center;
    background-color: #f5f5f5;
    border-radius: 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 8px;
    width: 500px;
    margin: 0 auto;
}

/* Search input field */
.search-input {
    flex: 1;
    border: none;
    outline: none;
    padding: 10px;
    font-size: 14px;
    background-color: transparent;
}

/* Search button */
.search-button {
    border: none;
    background-color: #4caf50;
    color: #fff;
    padding: 8px 12px;
    border-radius: 20px;
    cursor: pointer;
    margin-left: 8px;
    transition: background-color 0.3s;
}

.search-button:hover {
    background-color: #45a049;
}



.card {
  border: none;
  border-radius: 12px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  overflow: hidden;
  /* height: 530px;  */
  width: 310px; 
}

.card:hover {
  transform: translateY(-20px);
  box-shadow: 0 12px 20px rgba(0, 0, 0, 0.5);
}

.card-img-top {
  border-top-left-radius: 12px;
  border-top-right-radius: 12px;
  height: 200px;
  object-fit: cover;
}

.card-body {
  padding: 20px;
  background-color: #f9f9f9;
}

.card-title {
  font-size: 24px;
  font-weight: bold;
  
}

.card-text {
  color: #666;
}

.card-footer {
  background-color: #f8f9fa;
  padding: 10px 20px;
  border-bottom-left-radius: 12px;
  border-bottom-right-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.btnCard {
  color: #fff;
  border: none;
  border-radius: 4px;
  padding: 8px 20px;
  cursor: pointer;
  transition: background-color 0.2s ease;
}

.btnCard:hover {
  background-color: #0056b3;
}


</style>

    
@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $("#searchInput").on("input", function() {
      const searchTerm = $(this).val().trim().toLowerCase();
      $(".university-card").each(function() {
        const universityName = $(this).data("name").toLowerCase();
        if (universityName.includes(searchTerm)) {
          $(this).show();
        } else {
          $(this).hide();
        }
      });
    });

    $("#searchButton").on("click", function() {
      $("#searchInput").focus();
    });
  });
</script>
@endsection
