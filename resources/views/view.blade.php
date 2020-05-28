@extends('layouts/master')

@include('components/navigation')

<div class="container wow fadeInUp my-4">
    <div class="row text-center">
        <div class="col-md-12">
            <h3 class="section-title">Inscriptions</h3>
            <div class="section-title-divider"></div>
        </div>
    </div>
</div>
<section id="myMessages" class="wow fadeInRight py-5">
    <div class="container text-center">
        <div class="mb-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Email</th>
                        <th scope="col">Genre</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($inscriptions as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->genre->genre}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>