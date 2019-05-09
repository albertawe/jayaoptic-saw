@extends('template/template')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
             <!--    <div class="panel-heading">Dashboard</div> -->

                <div class="panel-body">
                    <div>
                    <h5><strong>Hasil Seleksi (Kriteria x Bobot)</strong> </h5>
                    </div>
                    <table>
                    <tr>
                      <th>Nama Kacamata</th>
                      <th>warna</th>
                      <th>harga</th>
                      <th>ukuran</th>
                      <th>ketebalan</th>
                      <th>model</th>
                      <th>Jumlah</th>
                    </tr>

                    @for($i=0;$i<=3;$i++)
                    @if(isset($nama[$i]))
                    <tr>

                        <td>{{$nama[$i]}}</td>
                        <td>{{$warna[$i]}}</td>
                        <td>{{$harga[$i]}}</td>
                        <td>{{$ukuran[$i]}}</td>
                        <td>{{$ketebalan[$i]}}</td>
                        <td>{{$model[$i]}}</td>
                        <td>{{$jumlah[$i]}}</td>

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
