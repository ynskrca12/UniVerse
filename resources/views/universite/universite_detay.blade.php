@extends('layouts.master')
@section('content')

<h2>Üniversite Detay Sayfası</h2>
<p>Bu alanda ilgili üniversite detayları görüntülenecek.</p>
  

 <h2>{{$universite->universite_ad}}</h2>
     <p>Üniversite Şehri: {{$universite->universite_il}}</p>
     <p>Üniversite Türü: {{$universite->turu}}</p>
     <p>Kuruluş Tarihi: {{$universite->kurulus}}</p>


   
@endsection

@section('css')
<style>


</style>   
@endsection



@section('js')
<script>
    
</script>

@endsection