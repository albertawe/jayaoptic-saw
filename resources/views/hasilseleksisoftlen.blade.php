@extends('template/template')
@section('content')
<div class="container">
    <div class="row">
        <div style="text-align:center">
            <div class="panel panel-default"style="text-align:center">
                <div class="panel-body"style="text-align:center">
                    <div>
                    <h5 style="color:gray;margin-bottom:20px;"><strong>HASIL SELEKSI</strong> </h5>
                    </div>
                    <table style="text-align:center;margin-bottom:20px;">
                    <tr>
                      <th>Peringkat</th>
                      <th>Nama Kacamata</th>
                      <th>warna</th>
                      <th>harga</th>
                      <th>ukuran</th>
                      <th>kadar air</th>
                      <th>masa pakai</th>
                      <th>Total nilai</th>
                      <th>action</th>
                    </tr>

                    @for($i=0;$i<=100;$i++)
                    @if(isset($nama[$i]))
                    <tr>
                        <td>{{$i + 1}}</td>
                        <td>{{$nama[$i]}}</td>
                        <td>{{$warna[$i]}}</td>
                        <td>{{$harga[$i]}}</td>
                        <td>{{$ukuran[$i]}}</td>
                        <td>{{$kadar[$i]}}</td>
                        <td>{{$masa[$i]}}</td>
                        <td>{{$jumlah[$i]}}</td>
                        <td><form method="get" action="/viewsoftlen/{{$id[$i]}}">
                            <button type="submit" style="background-color: #4CAF50;border-radius:20px">Lihat</button>
                        </form></td>
                    </tr>
                   @endif
                    @endfor
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
