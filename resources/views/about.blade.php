
@extends('frontend.main')    
         
         @section('container')
  <center><h1> {{$name}} </h1>
  <h2> <?php echo $email; ?> </h2>
  <img src="<?= $image; ?>" alt="" width="200"></center>
  @endsection