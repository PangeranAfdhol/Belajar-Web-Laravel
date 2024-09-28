@extends('frontend.main')    
         
         @section('container')
         <article>
         <link rel="stylesheet" type="text/css" href="/css/style.css">
         <h1>{{$berita["title"]}}</h1>
         <h3>{{$berita["author"]}}</h3>
         <p>{{$berita["body"]}}</p>
         </article>
         <a href="/berita">Kembali ke Berita</a>
         @endsection