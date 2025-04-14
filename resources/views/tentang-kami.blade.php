@extends('layouts.user')

@section('content')
<div class="container mt-5 text-center">
    <div class="mb-4">
        <img src="{{ asset('images/logo.png') }}" alt="Logo Anak" style="width: 200px;">
    </div>
    <h2 class="mb-3">Tentang Kami</h2>
    <div class="mx-auto" style="max-width: 700px;">
        <p style="font-size: 20px; margin-top: 50px;">
            Rumoh Aneuk adalah rumah asuhan yang menampung anak-anak terlantar dan anak yatim. 
            Di sini, mereka mendapatkan tempat tinggal, pendidikan, dan perhatian yang penuh kasih. 
            Dengan pembimbing yang sabar dan lingkungan yang aman, anak-anak ini dapat tumbuh dan berkembang dengan baik.
        </p>
    </div>
</div>
@endsection
