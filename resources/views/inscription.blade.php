@extends('layouts/master')
@section('content')
@include('components/navigation')
<section id="contact" class="section-bg wow fadeInUp py-5 ">
    <div class="text-center my-5">
        <h3>Formulaire Inscirption</h3>
    </div>
    <div class="container">
        {{-- <section class="form py-5 mt-5 container"> --}}
        <form action="{{route('saveInscription')}}" method="POST" class="contactForm ">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6 mx-auto">
                    <input type="mail" class="form-control @error('email') is-invalid @enderror" value="" name="email" id="email" placeholder="Email" data-rule="email"
                        data-msg="" />
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    <div class="validation"></div>
                </div>
                <div class="form-group col-md-6 mx-auto">
                    <input type="password" class="form-control @error('email') is-invalid @enderror" name="password" id="password" placeholder="Password"
                        data-rule="password" data-msg="" />
                        @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    <div class="validation"></div>
                </div>

                <select name="genre_id" id="genre_id">
                    <option value="Homme" selected>Genre</option>
                    @foreach ($genre as $item)
                        <option value="{{$item->id}}">{{$item->genre}}</option>
                    @endforeach
                </select>

            </div>
            <div class="text-center ">
                <button type="sumbit" class="btn btnModal btn-dark mx-auto mt-4 modalBtn">Ajouter</button>
            </div>
        </form>
    </div>
</section>
