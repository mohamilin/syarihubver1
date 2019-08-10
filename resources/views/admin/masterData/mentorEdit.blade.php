@extends('admin.layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-table" ></i></i><strong> DATA MENTOR AL-QUR'AN</strong> </h3>
        <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
        <li><i class="fa fa-table"></i>Master Data</li>
        <li><i class="fa fa-th-list"></i>Update Data Mentor Al-Qur'an</li>
        </ol>
    </div>
</div>

<div class="row">
<div class="col-lg-12">
    <section class="panel">
        <div class="modal-body">
            <div class="row">
              <div class="col-lg-36">
                  <form class="form-horizontal" action="/mentor/{{ $data_mentor->id }}/update" method="POST">
                      {{ csrf_field() }}
                      <div class="panel-body">
                          <div class="form-group" style="color:black;">
                              {{--  --}}
                              <div class="col-sm-12">
                                  <label for="exampleInputPassword1">ID Mentor</label>
                                  <input type="text" value="{{ $data_mentor->id_mentor }}" name="id_mentor" class="form-control"  placeholder="ID Mentor">
                                  </div>
                              {{--  --}}
                              <div class="col-sm-12">
                                  <label for="exampleInputPassword1">Nama Lengkap</label>
                                  <input type="text" value="{{ $data_mentor->nama_lengkap }}" name="nama_lengkap" class="form-control" id="exampleInputPassword1" placeholder="Nama Lengkap">
                              </div>
                                  {{--  --}}
                              <div class="col-sm-12">
                                  <label for="exampleInputPassword1">Nomor HP</label>
                                  <input type="textarea" value="{{ $data_mentor->no_whatsapp }}" name="no_whatsapp" class="form-control" id="exampleInputPassword1" placeholder="Nomor HP">
                              </div>
                                  {{--  --}}
                              <div class="col-sm-12">
                                      <label for="exampleInputPassword1">Tanggal Lahir</label>
                                      <input type="text" value="{{ $data_mentor->tanggal_lahir }}" name="tanggal_lahir" class="form-control" id="exampleInputPassword1" placeholder="Tanggal Lahir">
                              </div>
                                  {{--  --}}
                              <div class="col-sm-12">
                                  <label for="exampleInputPassword1">Alamat Domisili</label>
                                  <input type="text" value="{{ $data_mentor->alamat }}" name="alamat" class="form-control" id="exampleInputPassword1" placeholder="Alamat Domisili">
                              </div>
                                  {{--  --}}
                              <div class="col-sm-12">
                                  <label for="kota" class="control-label">Pendidikan Terakhir</label>
                                  <select class="form-control"  name="pendidikan" id="pendidikan">
                                      <option value="null">pilih</option>
                                      <option value="Universitas" @if ($data_mentor->pendidikan =='Universitas') selected @endif >Universitas</option>
                                      <option value="SMA" @if ($data_mentor->pendidikan =='SMA') selected @endif >SMA</option>
                                      <option value="SMP" @if ($data_mentor->pendidikan =='SMP') selected @endif>SMP</option>
                                      <option value="SD" @if ($data_mentor->pendidikan =='SD') selected @endif>SD</option>
                                  </select>
                              </div>
                              {{--  --}}
                              <div class="col-sm-12">
                                  <label for="exampleInputPassword1">Khatam Al-Quran berapa juz?</label>
                                  <select class="form-control" name="khatam_AlQuran" id="khatam_AlQuran">
                                      <option value="null">pilih</option>
                                      <option value="kurang dari 1 kali" @if ($data_mentor->khatam_AlQuran =='kurang dari 1 kali') selected @endif>Kurang dari 1 kali</option>
                                      <option value="1 kali" @if ($data_mentor->khatam_AlQuran =='1 kali') selected @endif >1 kali</option>
                                      <option value="2 kali" @if ($data_mentor->khatam_AlQuran =='2 kali') selected @endif >2 kali</option>
                                      <option value="lebih dari 2 kali" @if ($data_mentor->khatam_AlQuran =='Lebih dari 2 kali') selected @endif>Lebih dari 2 kali</option>
                                  </select>
                              </div>
                              {{--  --}}
                              <div class="col-sm-12">
                                  <label class="control-label">Jumlah Juz yang dihafal</label>
                                  <select class="form-control" name="jml_juz" id="jml_juz">
                                      <option value="null">pilih</option>
                                      <option value="1" @if($data_mentor->jml_juz=='1') selected @endif >1</option>
                                      <option value="2"  @if($data_mentor->jml_juz=='2') selected @endif>2</option>
                                      <option value="3"  @if($data_mentor->jml_juz=='3') selected @endif>3</option>
                                      <option value="4"  @if($data_mentor->jml_juz=='4') selected @endif>4</option>
                                      <option value="5" @if($data_mentor->jml_juz=='5') selected @endif>5</option>
                                      <option value="6"  @if($data_mentor->jml_juz=='6') selected @endif>6</option>
                                      <option value="7" @if($data_mentor->jml_juz=='7') selected @endif>7</option>
                                      <option value="8" @if($data_mentor->jml_juz=='8') selected @endif>8</option>
                                      <option value="9" @if($data_mentor->jml_juz=='9') selected @endif>9</option>
                                      <option value="10" @if($data_mentor->jml_juz=='10') selected @endif>10</option>
                                      <option value="11" @if($data_mentor->jml_juz=='11') selected @endif>11</option>
                                      <option value="12" @if($data_mentor->jml_juz=='12') selected @endif>12</option>
                                      <option value="13" @if($data_mentor->jml_juz=='13') selected @endif>13</option>
                                      <option value="14" @if($data_mentor->jml_juz=='14') selected @endif>14</option>
                                      <option value="15" @if($data_mentor->jml_juz=='15') selected @endif>15</option>
                                      <option value="16" @if($data_mentor->jml_juz=='16') selected @endif>16</option>
                                      <option value="17" @if($data_mentor->jml_juz=='17') selected @endif>17</option>
                                      <option value="18" @if($data_mentor->jml_juz=='18') selected @endif>18</option>
                                      <option value="19" @if($data_mentor->jml_juz=='19') selected @endif>19</option>
                                      <option value="20" @if($data_mentor->jml_juz=='20') selected @endif>20</option>
                                      <option value="21" @if($data_mentor->jml_juz=='21') selected @endif>21</option>
                                      <option value="22" @if($data_mentor->jml_juz=='22') selected @endif>22</option>
                                      <option value="23" @if($data_mentor->jml_juz=='23') selected @endif>23</option>
                                      <option value="24" @if($data_mentor->jml_juz=='24') selected @endif>24</option>
                                      <option value="25" @if($data_mentor->jml_juz=='25') selected @endif>25</option>
                                      <option value="26" @if($data_mentor->jml_juz=='26') selected @endif>26</option>
                                      <option value="27" @if($data_mentor->jml_juz=='27') selected @endif>27</option>
                                      <option value="28" @if($data_mentor->jml_juz=='28') selected @endif>28</option>
                                      <option value="29" @if($data_mentor->jml_juz=='29') selected @endif>29</option>
                                      <option value="30" @if($data_mentor->jml_juz=='30') selected @endif>30</option>
                                  </select>
                              </div>
                              {{--  --}}
                              <div class="col-sm-12">
                                  <label for="exampleInputPassword1">Sebutkan pengalaman yang mendukung kemampuan membaca Al-Quran!</label>
                                  <input maxlength="1000" value="{{ $data_mentor->pengalaman }}" type="text" name="pengalaman" id="pengalaman" required="required" class="form-control" placeholder="Sebutkan pengalaman yang mendukung kemampuan membaca Al-Quran!">     
                              </div>                  
                                  {{--  --}}
                              <div class="col-sm-12">
                                  <label for="exampleInputPassword1">Apakaha Anda bisa menjelaskan tentang aturan membaca Al-Quran dengan Tajwid ?</label>
                                  <input maxlength="1000" type="text" value="{{ $data_mentor->penjelasan }}" name="penjelasan" id="penjelasan" required="required" class="form-control" placeholder="Apakaha Anda bisa menjelaskan tentang aturan membaca Al-Quran dengan Tajwid ?">     
                              </div>                  
                                  {{--  --}}
                              </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal"><a href="/mentor">Cancel</a></button>
                              <button type="submit" class="btn btn-primary">Update</button>
                      </div>
                  </form>
              </div>
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
          <h5 class="modal-title" id="exampleModalLabel" style="font-size:20px; color:red;text-align:center;"><strong>TAMBAH DATA MENTOR AL-QUR'AN</strong></h5>
        </div>
        
      </div>
    </div>
@endsection