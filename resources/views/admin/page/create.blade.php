@extends('admin.master')


@section('body')
    <div class="col-lg-12" id="vueApp">
                        <div class="card">
                            <div class="card-block">
                                <form class="form-horizontal form-material" enctype="multipart/form-data" action="{{ route('admin.movie.store') }}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-8 col-sm-12">
                                                <label>Title (ชื่อเรื่อง)</label>
                                                <input type="text" name="title" placeholder="ชื่อเรื่อง" class="form-control form-control-line">
                                            </div>
                                            <div class="col-md-1 col-sm-6">
                                                <label>VIP</label>
                                                <select class="form-control form-control-line" name="vip">
                                                    <option value="0" >ปิด</option>
                                                    <option value="1" >เปิด</option>
                                                </select>
                                            </div>
                                            @if($setting->imdb == 1)
                                                <div class="col-md-1 col-sm-6">
                                                    <label>IMDB <small><a href="">*วิธีใช้*</a></small></label>
                                                    <input type="text" name="imdb" placeholder="เช่น tt1825683" class="form-control form-control-line">
                                                </div>
                                                @php
                                                    $imdb_col = 1;
                                                @endphp
                                            @else
                                                @php
                                                    $imdb_col = 2;
                                                @endphp
                                            @endif
                                            <div class="col-md-1 col-sm-6">
                                                <label>ปี</label>
                                                <input type="text" name="year" placeholder="เช่น 2018" class="form-control form-control-line">
                                            </div>
                                            <div class="col-md-{{ $imdb_col }} col-sm-6">
                                                <label>ความคมชัด</label>
                                                <select class="form-control form-control-line" name="resolution">
                                                    <option value="HD" >HD</option>
                                                    <option value="FullHD" >FullHD</option>
                                                    <option value="SD" >SD</option>
                                                    <option value="Zoom" >ซูม (Zoom)</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Description (เรื่องย่อ)</label>
                                                <textarea rows="5" name="description" class="form-control form-control-line"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            @for($i = 0; $i< 3 ;$i++)
                                                <div class="col-sm-4">
                                                    <label>หมวดหมู่</label>
                                                    <select class="form-control form-control-line" name="category{{ $i+1 }}">
                                                        <option value="0">เลือก..</option>
                                                        @foreach ($category as $kk)
                                                            <option value="{{ $kk->id }}">{{ $kk->title_category }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            @endfor
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" name="countFile" :value="getFile()">
                                      <label><h4>ไฟล์หนัง</h4></label>
                                      @verbatim
                                          <template>
                                              <a href="#" @click="addFile()">เพิ่มตาราง</a> | <a href="#" @click="dropFile()">ลบตาราง</a>
                                          </template>
                                      @endverbatim
                                      <div class="row">
                                          @verbatim
                                              <template>
                                                  <input type="hidden" name="countFile" :value="getFile()">
                                                  <template v-for="(list, index) in listFile">
                                                          <div class="col-lg-2 col-md-2">
                                                              <input type="text" class="form-control" :name="blindName(index)" placeholder="ชื่อตอน" >
                                                          </div>
                                                          <div class="col-lg-10 col-md-10">
                                                              <input type="text" class="form-control" :name="blindUrl(index)" placeholder="ลิ้งไฟล์" >
                                                          </div>
                                                          <br>
                                                  </template>
                                              </template>
                                          @endverbatim
                                      </div>
                                      
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">รูปภาพ</label>
                                        <input type="file" class="form-control-file" name="file" id="exampleFormControlFile1">
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button class="btn btn-success btn-lg" type="submit">เพิ่มหนัง</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <script src="{{ asset('js/vue.min.js') }}"></script>
                    <script>
                        new Vue({
                            el: "#vueApp",
                            data: {
                                listFile: 1,
                            },
                            methods: {
                                addFile: function(){
                                    this.listFile++
                                },
                                dropFile: function(){
                                    if(this.listFile != 1){
                                        this.listFile--
                                    }
                                },
                                getFile: function(){
                                    return this.listFile
                                },
                                blindName: function(id){
                                    let data = 'nameFile'+id
                                    return data
                                },
                                blindUrl: function(id){
                                    let data = 'urlFile'+id
                                    return data
                                }
                            }
                        });
                    </script>
@endsection
