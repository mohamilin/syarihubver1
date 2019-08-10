@extends('admin.layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-table" ></i></i><strong> MASTER DATA NANNY</strong> </h3>
        <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
        <li><i class="fa fa-table"></i>Master Data</li>
        <li><i class="fa fa-th-list"></i>Nanny</li>
        </ol>
    </div>
</div>
<br>
    <form method="GET" action="/nanny">
        <input name='cari' class="form-control" placeholder="Enter Nama Nanny" type="text">
    </form>
<br>
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModal">
    Tambah Data Nanny
  </button>
<br><br>
<div class="row">
<div class="col-lg-12">
    <section class="panel">
    <table class="table table-striped table-advance table-hover">
        <tbody>
        <tr>
            <th> ID Mentor</th>
            <th> Nama Lengkap</th>
            <th>No HP</th>
            <th> Alamat Domisili</th>
            <th> Pendidikan Terakhir</th>
            <th>Jumlah Juz Hafal</th>
            <th> Aksi</th>
        </tr>
        @foreach ($data_nanny as $nannies)
        <tr>
            <td>{{ $nannies->id_mentor }}</td>
            <td>{{ $nannies->nama_lengkap }}</td>
            <td>{{ $nannies->tanggal_lahir }}</td>
            <td>{{ $nannies->no_hp }}</td>
            <td>{{ $nannies->alamat }}</td>
            <td>{{ $nannies->pendidikan }}</td>
            <td>
            <div class="btn-group">
                <a class="btn btn-success" href="/nanny/{{ $nannies->id }}/edit"><span>Edit</span></a>
                <a class="btn btn-danger" href="/nanny/{{  $nannies->id}}/delete"><span>Delete</span></a>
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
          <h5 class="modal-title" id="exampleModalLabel" style="font-size:20px; color:red;text-align:center;"><strong>TAMBAH DATA MENTOR AL-QUR'AN</strong></h5>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-36">
                <form class="form-horizontal" action="{{ url('/nanny/create') }}" method="post">
                    {{ csrf_field() }}
                    <div class="panel-body">
                        <div class="form-group" style="color:black;">
                            {{--  --}}
                            <div class="col-sm-12">
                                <label for="exampleInputPassword1">ID Nanny</label>
                                <input type="text" name="id_mentor" class="form-control"  placeholder="ID Mentor">
                                </div>
                            {{--  --}}
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
                                <label for="exampleInputPassword1">Nomor HP</label>
                                <input type="textarea" name="no_whatsapp" class="form-control" id="exampleInputPassword1" placeholder="Nomor HP">
                            </div>
                                {{--  --}}                                
                            <div class="col-sm-5">
                                <label for="exampleInputPassword1">Nomor KTP</label>
                                <input type="text" name="no_ktp" class="form-control" id="exampleInputPassword1" placeholder="Nomor KTP">
                            </div>
                                {{--  --}}                         
                            <div class="col-sm-12">
                                <label for="exampleInputPassword1">Alamat Sesuai KTP</label>
                                <input type="text" name="alamat_ktp" class="form-control" id="exampleInputPassword1" placeholder="Alamat Domisili">
                            </div>
                                {{--  --}}                                                        
                            <div class="col-sm-12">
                                <label for="exampleInputPassword1">Alamat Domisili</label>
                                <input type="text" name="alamat_domisili" class="form-control" id="exampleInputPassword1" placeholder="Alamat Domisili">
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
                                <label for="exampleInputPassword1"> Hobi</label>
                                <input type="text" name="hobi" class="form-control" id="exampleInputPassword1" placeholder="Alamat Domisili">
                            </div>
                                {{--  --}}   
                            <div class="col-sm-12">
                                <label for="exampleInputPassword1">Khatam Al-Quran berapa juz?</label>
                                <select class="form-control" name="khatam_AlQuran" id="khatam_AlQuran">
                                    <option value="null">pilih</option>
                                    <option value="kurang dari 1 kali">Kurang dari 1 kali</option>
                                    <option value="1 kali">1 kali</option>
                                    <option value="2 kali">2 kali</option>
                                    <option value="lebih dari 2 kali">Lebih dari 2 kali</option>
                                </select>
                            </div>
                            {{--  --}}
                            <div class="col-sm-12">
                                <label class="control-label">Jumlah Anak yang diasuh</label>
                                <select class="form-control" name="jml_juz" id="jml_juz">
                                    <option value="null">pilih</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="lebih dari 5">lebih dari 5</option>
                                </select>
                            </div>
                            {{--  --}}
                            <div class="col-sm-12">
                                <label for="exampleInputPassword1">Sebutkan pengalaman yang mendukung kemampuan membaca Al-Quran!</label>
                                <input maxlength="1000" type="text" name="pengalaman" id="pengalaman" required="required" class="form-control" placeholder="Sebutkan pengalaman yang mendukung kemampuan membaca Al-Quran!">     
                            </div>                  
                                {{--  --}}
                            <div class="col-sm-12">
                                <label for="exampleInputPassword1">Apakaha Anda bisa menjelaskan tentang aturan membaca Al-Quran dengan Tajwid ?</label>
                                <input maxlength="1000" type="text" name="penjelasan" id="penjelasan" required="required" class="form-control" placeholder="Apakaha Anda bisa menjelaskan tentang aturan membaca Al-Quran dengan Tajwid ?">     
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