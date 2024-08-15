@extends('layouts.app')
@section('title','404')

@section('css')
       
@endsection

@section('content')

      <section class="error-section">
        <div class="container">
            <div class="error-all-info">
            <div class="text">
            <h1>404</h1>
            <p>we are sorry for the inconvinience! please try again later...</p>
            </div>
            <div class="custom-button">
            <a href="{{route('home')}}" class="custom-btn">
            back to home
            </a>
            </div>
            <div class="image">
            <img src="{{asset('front/assets/img/404.png')}}" alt="Image">
            </div>
          </div>
        </div>
    </section>


@endsection


@section('js')


      
@endsection