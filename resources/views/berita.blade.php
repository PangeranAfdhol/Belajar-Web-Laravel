@extends('frontend.main')    
         @section('container')
<article class= "mb-5">
         @foreach ($berita as $berita)
         <h2>
               <a href="/berita/{{$berita ['slug'] }}">{{$berita["title"]}}</a> </h2>
         <h4>{{$berita["author"]}}</h4>
         <p>{{$berita["body"]}}</p>
@endforeach
         </article>
  @endsection
