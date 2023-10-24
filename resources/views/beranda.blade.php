@extends('toko.toko')

<style>
    img {
        border-radius: 15px;
    }
    
    #angka {
        opacity: 0;
        visibility: hidden;
        margin: 0;
    }
</style>
@section('konten')
    <div class="container"> 
        @for($i = 0; $i <= 2; $i++)
        <div class="beranda-content" style="margin: 0;">
            <p id="angka" >{{ $i }}</p>
            <img src="./imgs/1662slide2.jpg" class="border border-dark-subtle" alt="gambar1" width=1000>
            <br><br>
            <img src="./imgs/3657slide3.jpg" class="border border-dark-subtle" alt="gambar1" width=1000>
        </div>
        @endfor
            
    </div>
@endsection
