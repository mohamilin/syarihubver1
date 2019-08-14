@extends('admin.layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-table" ></i></i><strong> MASTER DATA PENGENDARA</strong> </h3>
        <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
        <li><i class="fa fa-table"></i>Master Data</li>
        <li><i class="fa fa-th-list"></i>Pengendara</li>
        </ol>
    </div>
</div>
<br>
    <form method="GET" action="/ride">
        <input name='cari' class="form-control" placeholder="Enter Nama Pengendara" type="text">
    </form>
<br>
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModal">
    Tambah Data Pengendara
  </button>
<br><br>
<div class="row">
<div class="col-lg-12">
    <section class="panel">
    <table class="table table-striped table-advance table-hover">
        <tbody>
        <tr>
            <th> ID Pengendara</th>
            <th> Nama Lengkap</th>
            <th>Kota</th>
            <th> Email</th>
            <th> No HP</th>
            <th>Plat Nomor</th>
            <th> Aksi</th>
        </tr>
        @foreach ($data_pengendara as $rides)
        <tr>
            <td >{{ $rides->id_pengendara }}</td>
            <td><a href="/ride/profil/{{$rides->id }}" >{{ $rides->nama_lengkap }}</a></td>
            <td>{{ $rides->kota }}</td>
            <td>{{ $rides->alamat_email }}</td>
            <td>{{ $rides->no_hp}}</td>
            <td>{{ $rides->no_plat }}</td>
            <td>
            <div class="btn-group">
                <a class="btn btn-success" href="/ride/{{ $rides->id }}/edit"><span>Edit</span></a>
                <a class="btn btn-danger" href="/ride/{{$rides->id}}/delete"><span>Delete</span></a>
            </div>
            </td>
        </tr>
        @endforeach
        
        </tbody>
    </table>
    </section>
</div>
</div>

{{-- MODAL TAMBAH DATA PENGENDARA --}}
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel" style="font-size:20px; color:red;text-align:center;"><strong>TAMBAH DATA PENGENDARA</strong></h5>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-36">
                <form class="form-horizontal" action="{{ url('/ride/create') }}" method="post">
                    {{ csrf_field() }}
                    <div class="panel-body">
                        <div class="form-group" style="color:black;">
                            {{--  --}}
                            <div class="col-sm-12">
                                <label for="exampleInputPassword1">ID Pengendara</label>
                                <input type="text" name="id_pengendara" class="form-control"  placeholder="ID Pengendara">
                                </div>
                            {{--  --}}
                            <div class="col-sm-12">
                                <label for="kota" class="control-label">Kota</label>
                                    <select class="form-control" name="kota" id="kota">
                                        <option value="null">Pilih Kota</option>
                                        <option value="Surabaya">Surabaya</option>
                                        <option value="Sidoarjo">Sidoarjo</option>
                                        <option value="Malang">Malang</option>
                                        <option value="Gresik">Gresik</option>
                                        <option value="Madiun">Madiun</option>
                                        <option value="Semarang">Semarang</option>
                                        <option value="Yogyakarta">Yogyakarta</option>
                                        <option value="DKI_Jakarta">DKI Jakarta</option>
                                        <option value="Tangerang">Tangerang</option>
                                        <option value="Tangerang_Selatan">Tangerang Selatan</option>
                                        <option value="Bogor">Bogor</option>
                                        <option value="Depok">Depok</option>
                                        <option value="Makassar">Makassar</option>
                                        <option value="Bandung">Bandung</option>
                                        <option value="Solo">Solo</option>
                                    </select>
                            </div>
                            {{--  --}}
                            <div class="col-sm-12">
                                    <label class="control-label">Mengapa Tertarik bergabung di SyariHub?</label>
                                    <input maxlength="100" type="text" name="alasan" id="alasan" required="required" class="form-control" placeholder="Alasan gabung di SyariHub" />
                            </div>
                            {{--  --}}
                            <div class="col-sm-12">
                                <label for="exampleInputPassword1">Darimana mengetahui SyariHub Ojek?</label>
                                <select class="form-control" name="darimana" id="darimana">
                                        <option value="null">Pilih</option>
                                        <option value="Website">Website</option>
                                        <option value="Media_Cetak">Media Cetak</option>
                                        <option value="Media_Sosial">Media Sosial</option>
                                        <option value="Teman">Teman</option>
                                        <option value="Sahabat_Pengendara">Sahabat Pengendara</option>
                                </select>
                            </div>
                            {{--  --}}
                            <div class="col-sm-12">
                                <label for="exampleInputPassword1">Alokasi Waktu</label>
                                <select name="jam_kerja" class="form-control">
                                        <option value="null">Pilih Alokasi Waktu</option>
                                        <option>Part Time</option>
                                        <option>Full Time</option>
                                </select>
                                
                            </div> 
                            {{-- - --}}
                            <div class="col-sm-12">
                                <label for="exampleInputPassword1">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" class="form-control" id="exampleInputPassword1" placeholder="Nama Lengkap">
                            </div>
                                {{--  --}}
                            <div class="col-sm-12">
                                    <label for="exampleInputPassword1">Tanggal Lahir</label>
                                    <input type="text"  name="tanggal_lahir" class="form-control" id="exampleInputPassword1" placeholder="Tanggal Lahir">
                            </div>
                                {{--  --}}
                            <div class="col-sm-12">
                                <label for="exampleInputPassword1">Alamat Email</label>
                                <input type="text" name="alamat_email" class="form-control" id="exampleInputPassword1" placeholder="Nama Lengkap">
                            </div>
                            {{--  --}}
                            <div class="col-sm-12">
                                <label for="exampleInputPassword1">Alamat Domisili</label>
                                <input type="text" name="alamat_domisili" class="form-control" id="exampleInputPassword1" placeholder="Alamat Domisili">
                            </div>
                                {{--  --}}
                            <div class="col-sm-2">
                                <label for="umur">Umur</label>
                                <input type="textarea" name="umur" class="form-control" name="umur" id="umur" placeholder="Umur">
                            </div>
                                    
                                {{--  --}}
                            <div class="col-sm-5">
                                <label for="exampleInputPassword1">Nomor HP</label>
                                <input type="textarea" name="no_hp" class="form-control" id="exampleInputPassword1" placeholder="Nomor HP">
                            </div>
                                {{--  --}}
                            <div class="col-sm-5">
                                <label for="exampleInputPassword1">Nomor KTP</label>
                                <input type="text" name="no_ktp" class="form-control" id="exampleInputPassword1" placeholder="Nomor KTP">
                            </div>
                                {{--  --}}
                            <div class="col-sm-8">
                                <label for="exampleInputPassword1">Nomor SIM</label>
                                <input type="textarea" name="no_sim" class="form-control" id="exampleInputPassword1" placeholder="Nomor SIM">
                            </div>
                                {{--  --}}
                            <div class="col-sm-4">
                                <label for="exampleInputPassword1">Tahun SIM</label>
                                <input type="text" name="tgl_berlaku_sim" class="form-control" id="exampleInputPassword1" placeholder="Tahun Berlaku SIM">
                            </div>
                                {{--  --}}
                            <div class="col-sm-4">
                                <label for="exampleInputPassword1">Plat Nomor</label>
                                <input type="text" name="no_plat" class="form-control" id="exampleInputPassword1" placeholder="Plat Nomor">
                            </div>
                                {{--  --}}
                            <div class="col-sm-3">
                                <label for="exampleInputPassword1">Tahun Plat Nomor</label>
                                <input type="textarea" name="tgl_berlaku_plat" class="form-control" id="exampleInputPassword1" placeholder="Tahun Plat Nomor">
                            </div>
                                {{--  --}}
                            <div class="col-sm-5">
                                <label for="exampleInputPassword1">Pengalaman Berkendara</label>
                                <input type="textarea" name="pengalaman" class="form-control" id="exampleInputPassword1" placeholder="Pengalaman Berkendara">
                            </div>
                                {{--  --}}
                            <div class="col-sm-5">
                                <label for="exampleInputPassword1">Akun Medsos</label>
                                <input type="text" name="medsos" class="form-control" id="exampleInputPassword1" placeholder="Akun Medsos">
                            </div>
                                {{--  --}}
                            <div class="col-sm-5">
                                <label for="exampleInputPassword1">Bisa menggunakan WA ?</label>
                                <input type="text" name="bisa_whatsapp" class="form-control" id="exampleInputPassword1" placeholder="Bisa menggunakan WA ?">
                            </div>
                                {{--  --}}
                            <div class="col-sm-6">
                                <label for="exampleInputPassword1">Aktivitas Saat ini</label>
                                <input type="text" name="aktivitas" class="form-control" id="exampleInputPassword1" placeholder="Aktivitas Saat ini">
                            </div>
                                {{--  --}}
                            <div class="col-sm-6">
                                <label for="exampleInputPassword1">Pengahasilan per Bulan</label>
                                <input type="text" name="penghasilan_perbulan" class="form-control" id="exampleInputPassword1" placeholder="Pengahasilan per Bulan">
                            </div>
                                {{--  --}}
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
          </div>
        </div> 
      </div>
    </div>
@endsection