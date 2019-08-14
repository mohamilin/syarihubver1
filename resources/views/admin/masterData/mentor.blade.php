@extends('admin.layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-table" ></i></i><strong> MASTER DATA MENTOR AL-QUR'AN</strong> </h3>
        <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
        <li><i class="fa fa-table"></i>Master Data</li>
        <li><i class="fa fa-th-list"></i>Mentor Al-Qur'an</li>
        </ol>
    </div>
</div>
<br>
    <form method="GET" action="/mentor">
        <input name='cari' class="form-control" placeholder="Enter Nama Mentor" type="text">
    </form>
<br>
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModal">
    Tambah Data Mentor Al-Qur'an
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
        @foreach ($data_mentor as $mentors)
        <tr>
            <td>{{ $mentors->id_mentor }}</td>
            <td><a href="/mentor/profil/{{$mentors->id }}" >{{ $mentors->nama_lengkap }}</a></td>
            <td>{{ $mentors->no_whatsapp }}</td>
            <td>{{ $mentors->alamat }}</td>
            <td>{{ $mentors->pendidikan }}</td>
            <td>{{ $mentors->jml_juz }}</td>
            <td>
            <div class="btn-group">
                <a class="btn btn-success" href="/mentor/{{ $mentors->id }}/edit"><span>Edit</span></a>
                <a class="btn btn-danger" href="/mentor/{{$mentors->id}}/delete"><span>Delete</span></a>
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
                <form class="form-horizontal" action="{{ url('/mentor/create') }}" method="post">
                    {{ csrf_field() }}
                    <div class="panel-body">
                        <div class="form-group" style="color:black;">
                            {{--  --}}
                            <div class="col-sm-12">
                                <label for="exampleInputPassword1">ID Mentor</label>
                                <input type="text" name="id_mentor" class="form-control"  placeholder="ID Mentor">
                                </div>
                            {{--  --}}
                            <div class="col-sm-12">
                                <label for="exampleInputPassword1">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" class="form-control" id="exampleInputPassword1" placeholder="Nama Lengkap">
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
                                <label for="exampleInputPassword1">Alamat Domisili</label>
                                <input type="text" name="alamat" class="form-control" id="exampleInputPassword1" placeholder="Alamat Domisili">
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
                                <label class="control-label">Jumlah Juz yang dihafal</label>
                                <select class="form-control" name="jml_juz" id="jml_juz">
                                    <option value="null">pilih</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
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