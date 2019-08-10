@extends('admin.layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-table" ></i></i><strong>DATA PENGENDARA</strong> </h3>
        <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
        <li><i class="fa fa-table"></i>Master Data</li>
        <li><i class="fa fa-th-list"></i>Update Data Pengendara</li>
        </ol>
    </div>
</div>
<div class="row">
<div class="col-lg-12">
    <section class="panel">
        <div class="modal-body">
            <div class="row">
              <div class="col-lg-36">
                  <form class="form-horizontal" action="/ride/{{ $data_pengendara->id }}/update" method="post">
                      {{ csrf_field() }}
                      <div class="panel-body">
                          <div class="form-group" style="color:black;">
                              {{--  --}}
                              <div class="col-sm-12">
                                  <label for="exampleInputPassword1">ID Pengendara</label>
                                  <input type="text" value="{{ $data_pengendara->id_pengendara }}" name="id_pengendara" class="form-control"  placeholder="ID Pengendara">
                                  </div>
                              {{--  --}}
                              <div class="col-sm-12">
                                  <label for="kota" class="control-label">Kota</label>
                                      <select class="form-control" name="kota" id="kota">
                                          <option value="null">Pilih Kota</option>
                                          <option value="Surabaya" @if ($data_pengendara->kota =='Surabaya') selected @endif >Surabaya</option>
                                          <option value="Sidoarjo" @if ($data_pengendara->kota =='Sidoarjo') selected @endif>Sidoarjo</option>
                                          <option value="Malang" @if ($data_pengendara->kota =='Malang') selected @endif>Malang</option>
                                          <option value="Gresik" @if ($data_pengendara->kota =='Gresik') selected @endif>Gresik</option>
                                          <option value="Madiun" @if ($data_pengendara->kota =='Madiun') selected @endif>Madiun</option>
                                          <option value="Semarang" @if ($data_pengendara->kota =='Semarang') selected @endif>Semarang</option>
                                          <option value="Yogyakarta" @if ($data_pengendara->kota =='Yogyakarta') selected @endif>Yogyakarta</option>
                                          <option value="DKI_Jakarta" @if ($data_pengendara->kota =='DKI Jakarta') selected @endif>DKI Jakarta</option>
                                          <option value="Tangerang" @if ($data_pengendara->kota =='Tangerang') selected @endif>Tangerang</option>
                                          <option value="Tangerang_Selatan" @if ($data_pengendara->kota =='Tangerang Selatan') selected @endif>Tangerang Selatan</option>
                                          <option value="Bogor" @if ($data_pengendara->kota =='Bogor') selected @endif>Bogor</option>
                                          <option value="Depok" @if ($data_pengendara->kota =='Depok') selected @endif>Depok</option>
                                          <option value="Makassar" @if ($data_pengendara->kota =='Makasar') selected @endif>Makassar</option>
                                          <option value="Bandung" @if ($data_pengendara->kota =='Bandung') selected @endif>Bandung</option>
                                          <option value="Solo" @if ($data_pengendara->kota =='Solo') selected @endif>Solo</option>
                                      </select>
                              </div>
                              
                              {{--  --}}
                              <div class="col-sm-12">
                                      <label class="control-label">Mengapa Tertarik bergabung di SyariHub?</label>
                                      <input maxlength="100" value="{{$data_pengendara->alasan}}" type="text" name="alasan" id="alasan" required="required" class="form-control" placeholder="Alasan gabung di SyariHub" />
                              </div> 
                              {{--  --}}
                              <div class="col-sm-12">
                                  <label for="exampleInputPassword1">Darimana mengetahui SyariHub Ojek?</label>
                                  <select class="form-control" name="darimana" id="darimana">
                                          <option value="null">Pilih</option>
                                          <option value="Website" @if ($data_pengendara->darimana =='Website') selected @endif >Website</option>
                                          <option value="Media_Cetak" @if ($data_pengendara->darimana =='Media Cetak') selected @endif>Media Cetak</option>
                                          <option value="Media_Sosial" @if ($data_pengendara->darimana =='') selected @endif >Media Sosial</option>
                                          <option value="Teman" @if ($data_pengendara->darimana =='Teman') selected @endif>Teman</option>
                                          <option value="Sahabat_Pengendara" @if ($data_pengendara->darimana =='Sahabat Pengendara') selected @endif>Sahabat Pengendara</option>
                                  </select>
                              </div>
                              {{--  --}}
                              <div class="col-sm-12">
                                  <label for="exampleInputPassword1">Alokasi Waktu</label>
                                  <select name="jam_kerja" class="form-control">
                                          <option value="null">Pilih Alokasi Waktu</option>
                                          <option @if($data_pengendara->jam_kerja =='Part Time') selected @endif >Part Time</option>
                                          <option @if($data_pengendara->jam_kerja == 'Full Time') selected @endif >Full Time</option>
                                  </select>
                                  
                              </div> 
                              {{-- - --}}
                              <div class="col-sm-12">
                                  <label for="exampleInputPassword1">Nama Lengkap</label>
                                  <input type="text" value="{{$data_pengendara->nama_lengkap}}" name="nama_lengkap" class="form-control" id="exampleInputPassword1" placeholder="Nama Lengkap">
                              </div>
                                  {{--  --}}
                              <div class="col-sm-12">
                                      <label for="exampleInputPassword1">Tanggal Lahir</label>
                                      <input type="text"  value="{{$data_pengendara->tanggal_lahir}}" name="tanggal_lahir" class="form-control" id="exampleInputPassword1" placeholder="Tanggal Lahir">
                              </div>
                                  {{--  --}}
                              <div class="col-sm-12">
                                  <label for="exampleInputPassword1">Alamat Email</label>
                                  <input type="text" value="{{$data_pengendara->alamat_email}}" name="alamat_email" class="form-control" id="exampleInputPassword1" placeholder="Nama Lengkap">
                              </div>
                              {{--  --}}
                              <div class="col-sm-12">
                                  <label for="exampleInputPassword1">Alamat Domisili</label>
                                  <input type="text" value="{{$data_pengendara->alamat_domisili}}" name="alamat_domisili" class="form-control" id="exampleInputPassword1" placeholder="Alamat Domisili">
                              </div>
                                  {{--  --}}
                              <div class="col-sm-2">
                                  <label for="umur">Umur</label>
                                  <input type="textarea" value="{{$data_pengendara->umur}}" name="umur" class="form-control" name="umur" id="umur" placeholder="Umur">
                              </div>
                                      
                                  {{--  --}}
                              <div class="col-sm-5">
                                  <label for="exampleInputPassword1">Nomor HP</label>
                                  <input type="textarea" value="{{$data_pengendara->no_hp}}" name="no_hp" class="form-control" id="exampleInputPassword1" placeholder="Nomor HP">
                              </div>
                                  {{--  --}}
                              <div class="col-sm-5">
                                  <label for="exampleInputPassword1">Nomor KTP</label>
                                  <input type="text" value="{{$data_pengendara->no_ktp}}" name="no_ktp" class="form-control" id="exampleInputPassword1" placeholder="Nomor KTP">
                              </div>
                                  {{--  --}}
                              <div class="col-sm-8">
                                  <label for="exampleInputPassword1">Nomor SIM</label>
                                  <input type="textarea" value="{{$data_pengendara->no_sim}}" name="no_sim" class="form-control" id="exampleInputPassword1" placeholder="Nomor SIM">
                              </div>
                                  {{--  --}}
                              <div class="col-sm-4">
                                  <label for="exampleInputPassword1">Tahun SIM</label>
                                  <input type="text" value="{{$data_pengendara->tgl_berlaku_sim}}" name="tgl_berlaku_sim" class="form-control" id="exampleInputPassword1" placeholder="Tahun Berlaku SIM">
                              </div>
                                  {{--  --}}
                              <div class="col-sm-4">
                                  <label for="exampleInputPassword1">Plat Nomor</label>
                                  <input type="text" value="{{$data_pengendara->no_plat}}" name="no_plat" class="form-control" id="exampleInputPassword1" placeholder="Plat Nomor">
                              </div>
                                  {{--  --}}
                              <div class="col-sm-3">
                                  <label for="exampleInputPassword1">Tahun Plat Nomor</label>
                                  <input type="textarea" value="{{$data_pengendara->tgl_berlaku_plat}}" name="tgl_berlaku_plat" class="form-control" id="exampleInputPassword1" placeholder="Tahun Plat Nomor">
                              </div>
                                  {{--  --}}
                              <div class="col-sm-5">
                                  <label for="exampleInputPassword1">Pengalaman Berkendara</label>
                                  <input type="textarea"  value="{{$data_pengendara->pengalaman}}" name="pengalaman" class="form-control" id="exampleInputPassword1" placeholder="Pengalaman Berkendara">
                              </div>
                                  {{--  --}}
                              <div class="col-sm-5">
                                  <label for="exampleInputPassword1">Akun Medsos</label>
                                  <input type="text" value="{{$data_pengendara->medsos}}" name="medsos" class="form-control" id="exampleInputPassword1" placeholder="Akun Medsos">
                              </div>
                                  {{--  --}}
                              <div class="col-sm-5">
                                  <label for="exampleInputPassword1">Bisa menggunakan WA ?</label>
                                  <input type="text" value="{{$data_pengendara->bisa_whatsapp}}" name="bisa_whatsapp" class="form-control" id="exampleInputPassword1" placeholder="Bisa menggunakan WA ?">
                              </div>
                                  {{--  --}}
                              <div class="col-sm-6">
                                  <label for="exampleInputPassword1">Aktivitas Saat ini</label>
                                  <input type="text" value="{{$data_pengendara->aktivitas}}" name="aktivitas" class="form-control" id="exampleInputPassword1" placeholder="Aktivitas Saat ini">
                              </div>
                                  {{--  --}}
                              <div class="col-sm-6">
                                  <label for="exampleInputPassword1">Pengahasilan per Bulan</label>
                                  <input type="text" value="{{$data_pengendara->penghasilan_perbulan}}" name="penghasilan_perbulan" class="form-control" id="exampleInputPassword1" placeholder="Pengahasilan per Bulan">
                              </div>
                                  {{--  --}}
                              </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                              <a href="/ride/cancel"><button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button></a>
                              <button type="submit" class="btn btn-primary">Update</button>
                      </div>
                  </form>
              </div>
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
        
       </div>
     </div>
</div>
@endsection