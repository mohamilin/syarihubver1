@extends('admin.layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-table" ></i></i><strong> MASTER DATA MASSAGE</strong> </h3>
        <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
        <li><i class="fa fa-table"></i>Master Data</li>
        <li><i class="fa fa-th-list"></i>Massage</li>
        </ol>
    </div>
</div>
<br>
    <form method="GET" action="/message">
        <input name='cari' class="form-control" placeholder="Enter Nama Massage" type="text">
    </form>
<br>
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModal">
    Tambah Data Massage
  </button>
<br><br>
<div class="row">
<div class="col-lg-12">
    <section class="panel">
    <table class="table table-striped table-advance table-hover">
        <tbody>
        <tr>
            <th> ID Massage</th>
            <th> Nama Lengkap</th>
            <th>Alamat</th>
            <th> Keahlian</th>
            <th> Jenis Kelamin </th>
            <th>No HP</th>
            <th> Aksi</th>
        </tr>
        @foreach ($data_massage as $massages)
        <tr>
            <td>{{ $massages->id_massage }}</td>
            <td><a href="/massage/profil/{{ $massages->id }}">{{ $massages->nama_lengkap }}</a></td>
            <td>{{ $massages->alamat_tinggal }}</td>
            <td>{{ $massages->keahlian }}</td>
            <td>{{ $massages->jenis_kelamin }}</td>
            <td>{{ $massages->no_whatsapp}}</td>
            <td>
            <div class="btn-group">
                <a class="btn btn-success" href="/massage/{{ $massages->id }}/edit"><span>Edit</span></a>
                <a class="btn btn-danger" href="/massage/{{  $massages->id}}/delete"><span>Delete</span></a>
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
          <h5 class="modal-title" id="exampleModalLabel" style="font-size:20px; color:red;text-align:center;"><strong>TAMBAH DATA MESSAGE</strong></h5>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-12">
                <form class="form-horizontal" action="/massage/create" method="POST">
                    {{ csrf_field() }}
                    <div class="panel-body">
                        <div class="form-group" style="color:black;">
                            {{--  --}}
                            <div class="col-sm-12">
                                <label for="exampleFormControlInput1">ID Massage</label>
                                <input type="text" name="id_massage" class="form-control" id="exampleFormControlInput1" placeholder="ID Massage">
                            </div>
                        {{--  --}}
                        <div class="col-sm-12">
                            <label for="exampleInputPassword1">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" class="form-control" id="exampleInputPassword1" placeholder="Nama Lengkap">
                        </div>
                            {{--  --}}
                            <div class="col-sm-12">
                                <label for="form-control">Tempat Lahir</label>
                                <input type="text"  name="tempat_lahir" class="form-control" id="exampleInputPassword1" placeholder="Tanggal Lahir">
                        </div>
                        {{--  --}}
                        <div class="col-sm-12">
                            <label for="kota" class="control-label">Memiliki HP Android</label>
                            <select class="form-control" name="hp_android" id="hp_android">
                                <option value="null">pilih</option>
                                <option value="Ya" >Ya</option>
                                <option value="Tidak" >Tidak</option>
                            </select>
                        </div>
                        {{--  --}}
                        <div class="col-sm-12">
                            <label for="exampleInputPassword1">Nomor HP</label>
                            <input type="textarea" name="no_whatsapp" class="form-control" id="exampleInputPassword1" placeholder="Nomor HP">
                        </div>
                            {{--  --}}
                        <div class="col-sm-12">
                                <label for="exampleInputPassword1">Tanggal Lahir</label>
                                <input type="text"  name="tanggal_lahir" class="form-control" id="exampleInputPassword1" placeholder="Tanggal Lahir">
                        </div>
                            {{--  --}}
                            <div class="col-sm-12">
                                <label class="control-label">Jenis Kelamin</label>
                                <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                                        <option value="null"></option>
                                                        <option value="Wanita">Wanita</option>
                                                        <option value="Pria">Pria</option> 
                                  </select>
                            </div>                                   
                            {{--  --}}
                        <div class="col-sm-12">
                            <label for="exampleInputPassword1">Alamat Sesuai KTP</label>
                            <input type="text" name="alamat_ktp" class="form-control" id="exampleInputPassword1" placeholder="Alamat Domisili">
                        </div>
                                {{--  --}}
                        <div class="col-sm-12">
                            <label for="exampleInputPassword1">Alamat Domisili</label>
                            <input type="text" name="alamat_tinggal" class="form-control" id="exampleInputPassword1" placeholder="Alamat Domisili">
                        </div>
                                {{--  --}}
                        <div class="col-sm-12">
                            <label for="exampleInputPassword1">Nomor KTP</label>
                            <input type="text" name="no_ktp" class="form-control" id="exampleInputPassword1" placeholder="Nomor KTP">
                        </div>
                            {{--  --}}
                        <div class="col-sm-12">
                            <label for="kota" class="control-label">Pendidikan Terakhir</label>
                            <select class="form-control" name="pendidikan" id="pendidikan">
                                <option value="null">pilih</option>
                                <option value="Universitas">Universitas</option>
                                <option value="SMA">SMA</option>
                                <option value="SMP">SMP</option>
                                <option value="SD">SD</option>
                            </select>
                        </div>
                            {{--  --}}
                             
                        <div class="col-sm-12">
                            <label  class="control-label">Keahlian Memijat</label>
                            <select class="form-control" name="keahlian" id="keahlian">
                                    <option value="null"></option>
                                    <option value="Pijat Ibu dan Anak" >Pijat Ibu dan Anak</option>
                                    <option value="Pijat Pra/Pasca Kelahiran" >Pijat Pra/Pasca Kelahiran</option>
                                    <option value="Pijat Refleksi">Pijat Refleksi</option>
                              </select>
                        </div>                     
                        {{--  --}}
                        <div class="col-sm-12">
                            <label class="control-label">Status</label>
                            <select class="form-control" name="status" id="status">
                                    <option value="null"></option>
                                    <option value="Menikah" >Menikah</option>
                                    <option value="Belum Menikah" >Belum Menikah</option>
                                    <option value="Pernah Menikah" >Pernah Menikah</option>
                              </select>
                        </div>
                        {{--  --}}
                        <div class="col-sm-12">
                            <label class="control-label">Berapa tahun pengalaman memijat?</label>
                            <select class="form-control"  name="pengalaman"  id="pengalaman">
                                    <option value="null"></option>
                                    <option value="kurang dari 1 tahun">Kurang dari 1 tahun</option>
                                    <option value="1 - 2 tahun">1 - 2 tahun</option>
                                    <option value="2 - 3 tahun">2 - 3 tahun</option>
                                    <option value="Lebih dari 3 tahun">Lebih dari 3 tahun</option>
                              </select>
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
                            <label class="control-label">Alasan bergabung dengan SyariHub Massage?</label>
                            <select class="form-control" name="alasan" id="alasan">
                                    <option value="null"></option>
                                    <option value="Waktu kerja yang flexibel">Waktu kerja yang flexibel</option>
                                    <option value="Pendapatan yang menjanjikan">Pendapatan yang menjanjikan</option>
                                    <option value="Bidang pekerjaan yang sesuai minat">Bidang pekerjaan yang sesuai minat</option>
                                    <option value="Lainnya">Lainnya</option>
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