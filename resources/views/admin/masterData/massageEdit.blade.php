@extends('admin.layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-table" ></i></i><strong> DATA MASSAGE</strong> </h3>
        <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
        <li><i class="fa fa-table"></i>Master Data</li>
        <li><i class="fa fa-th-list"></i>update Data Massage</li>
        </ol>
    </div>
</div>

<div class="row">
<div class="col-lg-12">
    <section class="panel">
   <div class="row">
    <div class="col-lg-12">
        <form class="form-horizontal" action="/massage/{{ $data_massage->id }}/update" method="POST">
            {{ csrf_field() }}
            <div class="panel-body">
                <div class="form-group" style="color:black;">
                    {{--  --}}
                    <div class="col-sm-12">
                        <label for="exampleFormControlInput1">ID Massage</label>
                        <input type="text" value="{{ $data_massage->id_massage }}" name="id_massage" class="form-control" id="exampleFormControlInput1" placeholder="ID Massage">
                    </div>
                {{--  --}}
                <div class="col-sm-12">
                    <label for="exampleInputPassword1">Nama Lengkap</label>
                    <input type="text" value="{{ $data_massage->nama_lengkap }}" name="nama_lengkap" class="form-control" id="exampleInputPassword1" placeholder="Nama Lengkap">
                </div>
                    {{--  --}}
                    <div class="col-sm-12">
                        <label for="form-control">Tempat Lahir</label>
                        <input type="text" value="{{ $data_massage->tempat_lahir }}"  name="tempat_lahir" class="form-control" id="exampleInputPassword1" placeholder="Tanggal Lahir">
                </div>
                {{--  --}}
                <div class="col-sm-12">
                    <label for="kota" class="control-label">Memiliki HP Android</label>
                    <select class="form-control" value="{{ $data_massage->hp_android }}" name="hp_android" id="hp_android">
                        <option value="null">pilih</option>
                        <option value="Ya" @if($data_massage->hp_android=='Ya') selected @endif >Ya</option>
                        <option value="Tidak" @if($data_massage->hp_android=='Tida') selected @endif >Tidak</option>
                    </select>
                </div>
                {{--  --}}
                <div class="col-sm-12">
                    <label for="exampleInputPassword1">Nomor HP</label>
                    <input type="textarea" value="{{ $data_massage->no_whatsapp }}" name="no_whatsapp" class="form-control" id="exampleInputPassword1" placeholder="Nomor HP">
                </div>
                    {{--  --}}
                <div class="col-sm-12">
                        <label for="exampleInputPassword1">Tanggal Lahir</label>
                        <input type="text" value="{{ $data_massage->tanggal_lahir }}" name="tanggal_lahir" class="form-control" id="exampleInputPassword1" placeholder="Tanggal Lahir">
                </div>
                    {{--  --}}
                    <div class="col-sm-12">
                        <label class="control-label">Jenis Kelamin</label>
                        <select class="form-control"  name="jenis_kelamin" id="jenis_kelamin">
                            <option value="null"></option>
                            <option value="Wanita" @if($data_massage->jenis_kelamin=='Wanita') selected @endif>Wanita</option>
                            <option value="Pria" @if($data_massage->jenis_kelamin=='Pria') selected @endif>Pria</option> 
                        </select>
                    </div>                                   
                    {{--  --}}
                <div class="col-sm-12">
                    <label for="exampleInputPassword1">Alamat Sesuai KTP</label>
                    <input type="text" value="{{ $data_massage->alamat_ktp }}" name="alamat_ktp" class="form-control" id="exampleInputPassword1" placeholder="Alamat Domisili">
                </div>
                        {{--  --}}
                <div class="col-sm-12">
                    <label for="exampleInputPassword1">Alamat Domisili</label>
                    <input type="text" value="{{ $data_massage->alamat_tinggal }}" name="alamat_tinggal" class="form-control" id="exampleInputPassword1" placeholder="Alamat Domisili">
                </div>
                        {{--  --}}
                <div class="col-sm-12">
                    <label for="exampleInputPassword1">Nomor KTP</label>
                    <input type="text" value="{{ $data_massage->no_ktp }}" name="no_ktp" class="form-control" id="exampleInputPassword1" placeholder="Nomor KTP">
                </div>
                    {{--  --}}
                <div class="col-sm-12">
                    <label for="kota" class="control-label">Pendidikan Terakhir</label>
                    <select class="form-control" name="pendidikan" id="pendidikan">
                        <option value="null">pilih</option>
                        <option value="Universitas" @if($data_massage->pendidikan=='Universitas')selected @endif>Universitas</option>
                        <option value="SMA" @if($data_massage->pendidikan=='SMA') selected @endif>SMA</option>
                        <option value="SMP" @if($data_massage->pendidikan=='SMP') selected @endif>SMP</option>
                        <option value="SD" @if($data_massage->pendidikan=='SD') selected @endif>SD</option>
                    </select>
                </div>
                    {{--  --}}
                     
                <div class="col-sm-12">
                    <label  class="control-label">Keahlian Memijat</label>
                    <select class="form-control" name="keahlian" id="keahlian">
                            <option value="null"></option>
                            <option value="Pijat Ibu dan Anak" @if($data_massage->keahlian=='Pijat Ibu dan Anak') selected @endif >Pijat Ibu dan Anak</option>
                            <option value="Pijat Pra/Pasca Kelahiran"  @if($data_massage->keahlian=='Pijat Pra/Pasca Kelahiran') selected @endif >Pijat Pra/Pasca Kelahiran</option>
                            <option value="Pijat Refleksi" @if($data_massage->keahlian=='Pijat Refleksi') selected @endif >Pijat Refleksi</option>
                      </select>
                </div>                     
                {{--  --}}
                <div class="col-sm-12">
                    <label class="control-label">Status</label>
                    <select class="form-control" name="status" id="status">
                            <option value="null"></option>
                            <option value="Menikah" @if($data_massage->status=='Menikah') selected @endif >Menikah</option>
                            <option value="Belum Menikah" @if($data_massage->status=='Belum Menikah') selected @endif >Belum Menikah</option>
                            <option value="Pernah Menikah" @if($data_massage->status=='Pernah Menikah') selected @endif >Pernah Menikah</option>
                      </select>
                </div>
                {{--  --}}
                <div class="col-sm-12">
                    <label class="control-label">Berapa tahun pengalaman memijat?</label>
                    <select class="form-control"  name="pengalaman"  id="pengalaman">
                            <option value="null"></option>
                            <option value="kurang dari 1 tahun" @if($data_massage->pengalaman=='Kurang dari 1 tahun') selected @endif>Kurang dari 1 tahun</option>
                            <option value="1 - 2 tahun" @if($data_massage->pengalaman=='1 - 2 tahun') selected @endif>1 - 2 tahun</option>
                            <option value="2 - 3 tahun" @if($data_massage->pengalaman=='2 - 3 tahun') selected @endif>2 - 3 tahun</option>
                            <option value="Lebih dari 3 tahun" @if($data_massage->pengalaman=='Lebih dari 3 tahun') selected @endif>Lebih dari 3 tahun</option>
                      </select>
                </div>
                {{--  --}}
                <div class="col-sm-12">
                    <label for="exampleInputPassword1">Darimana mengetahui SyariHub Ojek?</label>
                    <select class="form-control" name="darimana" id="darimana">
                            <option value="null">Pilih</option>
                            <option value="Website" @if($data_massage->darimana=='Website') selected @endif>Website</option>
                            <option value="Media_Cetak" @if($data_massage->darimana=='Media Cetak') selected @endif>Media Cetak</option>
                            <option value="Media_Sosial" @if($data_massage->darimana=='Media Sosial') selected @endif>Media Sosial</option>
                            <option value="Teman" @if($data_massage->darimana=='Teman') selected @endif>Teman</option>
                            <option value="Sahabat_Pengendara" @if($data_massage->darimana=='Sahabat Pengendara') selected @endif>Sahabat Pengendara</option>
                    </select>
                </div>
                {{--  --}}
                <div class="col-sm-12">
                    <label class="control-label">Alasan bergabung dengan SyariHub Massage?</label>
                    <select class="form-control" name="alasan" id="alasan">
                            <option value="null"></option>
                            <option value="Waktu kerja yang flexibel" @if($data_massage->alasan=='Waktu kerja yang flexibel') selected @endif>Waktu kerja yang flexibel</option>
                            <option value="Pendapatan yang menjanjikan" @if($data_massage->alasan=='Pendapatan yang menjanjikan') selected @endif>Pendapatan yang menjanjikan</option>
                            <option value="Bidang pekerjaan yang sesuai minat" @if($data_massage->alasan=='idang pekerjaan yang sesuai minat') selected @endif>Bidang pekerjaan yang sesuai minat</option>
                            <option value="Lainnya" @if($data_massage->alasan=='Lainnya') selected @endif>Lainnya</option>
                    </select>
                </div>
                {{--  --}}
                <div class="col-sm-12">
                    <label for="exampleInputPassword1">Alokasi Waktu</label>
                    <select name="jam_kerja" class="form-control">
                            <option value="null">Pilih Alokasi Waktu</option>
                            <option value="Part Time" @if($data_massage->jam_kerja=='Part Time') selected @endif>Part Time</option>
                            <option value="Full Time" @if($data_massage->jam_kerja=='Full Time') selected @endif>Full Time</option>
                    </select>                                
                </div> 
                {{--  --}}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                    <a href="/massage"><button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button></a>
                    <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
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
          
          </div>
        </div> 
      </div>
    </div>
@endsection