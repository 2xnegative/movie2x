@extends('admin.master')


@section('body')
    <div class="col-lg-12" id="vueApp">
                        <div class="card">
                            <div class="card-block">
                                <form class="form-horizontal form-material" enctype="multipart/form-data" action="{{ route('admin.movie.update', ['id'=> $movie->id]) }}" method="POST">
                                    {{ method_field('PUT') }}
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>ตัวอย่างการแสดงผล SEO <a href="{{ route('admin.seo') }}"> > ตั้งค่า SEO</a> </label>
                                        </div>
                                        @php
                                            $title_seo = str_replace("{movie_title}", $movie->title, $seo->seo_title);
                                            $title_seo = str_replace("{title_web}", $setting->title, $title_seo); 

                                            $description = str_replace("{movie_title}", $movie->title, $seo->seo_description_type);
                                            $description = str_replace("{title_web}", $setting->title, $description);
                                            $description = str_replace("{movie_description}", $movie->description, $description);
                                        @endphp
                                        <div class="col-md-12">
                                            <section style="padding: 20px 20px 20px 20px;">
                                                <div style="background-color: white; border-radius: 10px; width: 600px;height: 100%;padding: 10px; box-shadow: 0px 0px 10px #a0a0a0">
                                                    <div>
                                                        <span style="clip: rect(1px, 1px, 1px, 1px); position: absolute; height: 1px; width: 1px; overflow: hidden;">Url preview:</span>
                                                        <div>
                                                        <span style="clip: rect(1px, 1px, 1px, 1px); position: absolute; height: 1px; width: 1px; overflow: hidden;">
                                                            SEO title preview:
                                                        </span>
                                                        <div>
                                                            <div>
                                                                <input id="setting_title" type="hidden" value="{{ $setting->title }}">
                                                                <input id="seo_title_setting" type="hidden" value="{{ $seo->seo_title }}">
                                                                <p style="color: rgb(26, 13, 171);font-weight: 600;height: 1.5rem; overflow: hidden; text-overflow: ellipsis; width: 580px">
                                                                    <span id="seo_title">{{ $title_seo }}</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div>
                                                                <img src="{{ asset('images/icon-seo.png') }}" width="16px" height="16px" alt="">
                                                                <span style="color: rgb(0, 102, 33); ">{{ url('/') }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <span style="clip: rect(1px, 1px, 1px, 1px); position: absolute; height: 1px; width: 1px; overflow: hidden;"></span>
                                                        <div>
                                                            <input id="seo_description_type" type="hidden" value="{{ $seo->seo_description_type }}">
                                                            <div id="seo_description" style="max-height: 4.5rem; overflow: hidden; text-overflow: ellipsis; width: 580px">
                                                                {{ $description }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                        <div class="col-md-12">
                                            <hr>
                                            <br>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-5 col-sm-12">
                                                <label>Title (ชื่อเรื่อง)</label>
                                                <input type="text" name="title" id="title" placeholder="ชื่อเรื่อง" class="form-control form-control-line" value="{{ $movie->title }}">
                                            </div>
                                            <div class="col-md-2 col-sm-6">
                                                <label>เสียง</label>
                                                <select class="form-control form-control-line" name="sound">
                                                    <option value="Thai" {{ $movie->sound == "Thai" ? 'selected' : '' }}>พากย์ไทย</option>
                                                    <option value="Thai(C)" {{ $movie->sound == "Thai(C)" ? 'selected' : '' }}>ไทยโรง</option>
                                                    <option value="Soundtrack(T)" {{ $movie->sound == "Soundtrack(T)" ? 'selected' : '' }}>ซาวด์แทร็คซับไทย</option>
                                                    <option value="Soundtrack(E)" {{ $movie->sound == "Soundtrack(E)" ? 'selected' : '' }}>ซาวด์แทร็คซับอังกฤษ</option>
                                                </select>
                                            </div>
                                            @if($setting->imdb == 1)
                                                <div class="col-md-1 col-sm-6">
                                                    <label>IMDB</label>
                                                    <input type="text" name="imdb" placeholder="เช่น tt1825683" class="form-control form-control-line" value="{{ $movie->imdb }}">
                                                </div>
                                            @endif
                                            <div class="col-md-1 col-sm-6">
                                                <label>ปี</label>
                                                <input type="text" name="year" placeholder="ปีหนัง" class="form-control form-control-line" value="{{ $movie->year }}">
                                            </div>
                                            <div class="col-md-2 col-sm-6">
                                                <label>ความละเอียดภาพ</label>
                                                <select class="form-control form-control-line" name="resolution">
                                                    <option value="HD" {{ $movie->resolution == 'HD' ? 'selected' : '' }}>HD</option>
                                                    <option value="ZM" {{ $movie->resolution == 'ZM' ? 'selected' : '' }}>ซูม ZM</option>
                                                </select>
                                            </div>
                                            <div class="col-md-1 col-sm-6">
                                                <label>ประเภทไฟล์</label>
                                                <select class="form-control form-control-line" id="list_check" name="list_check">
                                                    <option value="movie" {{ $movie->type === 'movie' ? 'selected' : '' }}>หนัง</option>
                                                    <option value="series" {{ $movie->type === 'series' ? 'selected' : '' }}>ซีรี่ย์</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Description (เรื่องย่อ)</label>
                                                <textarea rows="5" name="description" id="description" class="form-control form-control-line">{{ $movie->description }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label><h4>หมวดหมู่</h4></label>
                                        <div class="row">
                                            @php
                                                $count_selected = count($selected);
                                                $total_select = 3-$count_selected;
                                            @endphp
                                            @for($i = 0; $i< $count_selected ;$i++)
                                                <div class="col-sm-4">
                                                    <label>ประเภท</label>
                                                    <select class="form-control form-control-line" name="category{{ $i+1 }}">
                                                        <option value="0">เลือก..</option>
                                                        @foreach ($category as $kk)
                                                            <option value="{{ $kk->id }}" {{ $kk->id == $selected[$i]->category_id ? 'selected' : '' }}>{{ $kk->title_category_eng }} {{ $kk->title_category }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            @endfor
                                            @for($i = 0; $i< $total_select; $i++)
                                                <div class="col-sm-4">
                                                    <label>ประเภท</label>
                                                    <select class="form-control form-control-line" name="category{{ $count_selected+$i+1 }}">
                                                        <option value="0">เลือก..</option>
                                                        @foreach ($category as $kk)
                                                            <option value="{{ $kk->id }}">{{ $kk->title_category_eng }} {{ $kk->title_category }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            @endfor
                                        </div>
                                    </div>
                                    {{-- ประเภทหนัง --}}
                                    <div class="form-group" class="list_path" id="movie" style="display: {{ $movie->type == "movie" ? "block" : "none" }}">
                                      <label><h4>ไฟล์หนัง</h4></label>
                                      
                                      <div class="row">
                                            <div class="col-lg-6">
                                                <div class="col-lg-12 col-md-12">
                                                    <label><h4>เสียงไทย</h4></label>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4">
                                                        <input type="text" class="form-control" name="file_main_1" placeholder="File หลัก 1080p" value="{{ $movie->file_main }}">
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <input type="text" class="form-control" name="file_main_2" placeholder="File หลัก 720p" value="{{ $movie->file_main_2 }}">
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <input type="text" class="form-control" name="file_main_3" placeholder="File หลัก 360p" value="{{ $movie->file_main_3 }}">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4">
                                                        <input type="text" class="form-control" name="file_openload_1" placeholder="สำรอง 1 1080p" value="{{ $movie->file_openload }}">
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <input type="text" class="form-control" name="file_openload_2" placeholder="สำรอง 1 720p" value="{{ $movie->file_openload_2 }}">
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <input type="text" class="form-control" name="file_openload_3" placeholder="สำรอง 1 360p" value="{{ $movie->file_openload_3 }}">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4">
                                                        <input type="text" class="form-control" name="file_streamango_1" placeholder="สำรอง 2 1080p" value="{{ $movie->file_streamango }}">
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <input type="text" class="form-control" name="file_streamango_2" placeholder="สำรอง 2 720p" value="{{ $movie->file_streamango_2 }}">
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <input type="text" class="form-control" name="file_streamango_3" placeholder="สำรอง 2 360p" value="{{ $movie->file_streamango_3 }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6" style="border-left: 2px solid #000">
                                                <div class="col-lg-12 col-md-12">
                                                    <label><h4>ซาวด์แทร็ค</h4></label>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4">
                                                        <input type="text" class="form-control" name="file_main_sub_1" placeholder="File หลัก 1080p" value="{{ $movie->file_main_sub }}">
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <input type="text" class="form-control" name="file_main_sub_2" placeholder="File หลัก 720p" value="{{ $movie->file_main_sub_2 }}">
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <input type="text" class="form-control" name="file_main_sub_3" placeholder="File หลัก 360p" value="{{ $movie->file_main_sub_3 }}">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4">
                                                        <input type="text" class="form-control" name="file_openload_sub_1" placeholder="สำรอง 1 1080p" value="{{ $movie->file_openload_sub }}">
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <input type="text" class="form-control" name="file_openload_sub_2" placeholder="สำรอง 1 720p" value="{{ $movie->file_openload_sub_2 }}">
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <input type="text" class="form-control" name="file_openload_sub_3" placeholder="สำรอง 1 360p" value="{{ $movie->file_openload_sub_3 }}">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4">
                                                        <input type="text" class="form-control" name="file_streamango_sub_1" placeholder="สำรอง 2 1080p" value="{{ $movie->file_streamango_sub }}">
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <input type="text" class="form-control" name="file_streamango_sub_2" placeholder="สำรอง 2 720p" value="{{ $movie->file_streamango_sub_2 }}">
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <input type="text" class="form-control" name="file_streamango_sub_3" placeholder="สำรอง 2 360p" value="{{ $movie->file_streamango_sub_3 }}">
                                                    </div>
                                                </div>
                                            </div>
                                      </div>
                                    </div>

                                    <script>
                                        $(document).ready(function() {
                                            $("#title").keyup(function() {
                                                var title = $("#title").val();
                                                var title_setting = $("#setting_title").val();
                                                var seo_title_setting = $("#seo_title_setting").val();
                                                var replace = seo_title_setting.replace('{movie_title}', title);
                                                replace = replace.replace('{title_web}', title_setting); 
                                                $("#seo_title").html(replace);

                                                var description = $("#description").val();
                                                var seo_description = $("#seo_description_type").val();
                                                var replace_description = seo_description.replace('{movie_title}', title);
                                                replace_description = replace_description.replace('{movie_description}', description);
                                                replace_description = replace_description.replace('{title_web}', title_setting);
                                                console.log(replace_description);
                                                $("#seo_description").html(replace_description);
                                            });

                                            $("#description").keyup(function() {
                                                var title = $("#title").val();
                                                var title_setting = $("#setting_title").val();
                                                var seo_title_setting = $("#seo_title_setting").val();
                                                var replace = seo_title_setting.replace('{movie_title}', title);
                                                replace = replace.replace('{title_web}', title_setting); 
                                                $("#seo_title").html(replace);

                                                var description = $("#description").val();
                                                var seo_description = $("#seo_description_type").val();
                                                var replace_description = seo_description.replace('{movie_title}', title);
                                                replace_description = replace_description.replace('{movie_description}', description);
                                                replace_description = replace_description.replace('{title_web}', title_setting);
                                                console.log(replace_description);
                                                $("#seo_description").html(replace_description);
                                            });
                                        });
                                    </script>

                                     @php
                                        preg_match_all("/\{\{(.*?)\}\}/",$movie->file_series,$filename);
                                        preg_match_all("/}}(.*?)!!end/",$movie->file_series,$url1);
                                        // dd($url1);
                                        $count = count($url1[1]);

                                    @endphp
                                    {{-- ประเภทซีรี่ย์ --}}
                                    <div class="form-group" id="series" class="list_path" style="display: {{ $movie->type == "series" ? "block" : "none" }}">
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
                                                            <div class="col-lg-3 col-md-3">
                                                                <input type="text" class="form-control" :name="blindName(index)" placeholder="ชื่อตอน" :value="filename[index]">
                                                            </div>
                                                            <div class="col-lg-9 col-md-9">
                                                                <input type="text" class="form-control" :name="blindUrl1(index)" placeholder="ลิ้งไฟล์" :value="url1[index]">
                                                            </div>
                                                            <br>
                                                    </template>
                                                </template>
                                            @endverbatim
                                        </div>
                                    </div>
                                    <div class="form-group">
                                      <label><h4>ตัวอย่างหนัง</h4></label>
                                      <div class="row">
                                            <div class="col-lg-4 col-md-4">
                                                <input type="text" class="form-control" name="youtube" placeholder="youtube ตัวอย่างหนัง" value="https://youtu.be/{{ $movie->youtube }}">
                                            </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                        <img src="{{ asset($movie->image_poster) }}" width="60px"><br>
                                        <label for="image_poster">ภาพหน้าปกหนัง</label>
                                        <input type="file" class="form-control-file" name="file_poster" id="image_poster">
                                    </div>
                                    <div class="form-group">
                                        <img src="{{ asset($movie->image) }}" width="60px"><br>
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

                    <script>
                        $(document).ready(function(){
                            var list = 3;
                            $('#list_check').change(function(){
                                var path = $(this).val();
                                console.log(path);
                                if(path == "movie")
                                {
                                    $("#series").hide();
                                    $("#movie").show();
                                }
                                else if(path == "series")
                                {
                                    $("#series").show();
                                    $("#movie").hide();
                                }
                            });
                        });
                    </script>

                    <script src="{{ asset('js/vue.min.js') }}"></script>
                    <script>
                        const filename = {!! json_encode($filename[1]) !!}
                        const listFile = {{ $count }}
                        const url1 = {!! json_encode($url1[1]) !!}
                        new Vue({
                            el: "#vueApp",
                            data: {
                                listFile: listFile,
                                url1: url1,
                                filename: filename
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
                                blindUrl1: function(id){
                                    let data = 'urlFile1_'+id
                                    return data
                                },
                                blindValue1: function(id){
                                    url = this.url1
                                    return url
                                },
                            }
                        });
                    </script>
@endsection
