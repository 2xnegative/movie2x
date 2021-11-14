<div class="content-left">
                <div class="sidebar">
                    <div class="sidebar-header">
                        <p style="font-size: 18px">ปีที่ฉาย</p>
                    </div>
                    <ul>
                        @php
                        $year = Carbon\Carbon::now()->year;
                        // if(count($category_year) >= 1)
                        // {
                        //     $year = $category_year->year;
                        // }
                        @endphp
                        @for ($i = $year+1; $i > 1947; $i--)
                            <li class="cat-item">
                                <a href="{{ route('movie_year', ['year' => $i]) }}">{{ $i }}</a>
                            </li>
                        @endfor
                    </ul>

                </div>
            </div>