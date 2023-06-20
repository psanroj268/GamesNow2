@extends('layouts.app')



@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Logo</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                        <img class="logo justify-content-center" src="{{ asset('img/Imagen.png') }}" width="500" alt="Infyom Logo">
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection

@section('css')
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
<style>
.logo {
  display: inline-block;
  margin: 0 0.5rem;

  animation: bounce; /* referring directly to the animation's @keyframe declaration */
  animation-duration: 2s; /* don't forget to set a duration! */

  
  display: block;
  margin-left: auto;
  margin-right: auto;
  margin-top: 2.5rem;
  margin-bottom: 2.5rem;
}
</style>

@endsection

