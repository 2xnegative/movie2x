<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RechannelController extends Controller
{
    public static function rechannel_program($res)
    {
            /*
            *
            *
            * แก้ไขช่องลิ้ง
            *
            *
            **/
            // ช่อง 3
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch054\/"/';
            $re_link = 'class="tv_onair" tv="507"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch054\/"/';
            $re_link = 'tv="507"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\beINSports1Turkey.png/";
            $res = preg_replace($preg_match, asset('images/tv/MNhQyh0ABcR0iBtaZuKkRCRprHeEQCiunnamed_(2).jpg'), $res);


            // ช่อง
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch054\/"/';
            $re_link = 'class="tv_onair" tv="507"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch054\/"/';
            $re_link = 'tv="507"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\beINSports1Turkey.png/";
            $res = preg_replace($preg_match, asset('images/tv/MNhQyh0ABcR0iBtaZuKkRCRprHeEQCiunnamed_(2).jpg'), $res);


            // Bein sport 1 (Turkey)
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch054\/"/';
            $re_link = 'class="tv_onair" tv="507"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch054\/"/';
            $re_link = 'tv="507"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\beINSports1Turkey.png/";
            $res = preg_replace($preg_match, asset('images/tv/MNhQyh0ABcR0iBtaZuKkRCRprHeEQCiunnamed_(2).jpg'), $res);


            // Bein sport 1 (Turkey)
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch054\/"/';
            $re_link = 'class="tv_onair" tv="507"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch054\/"/';
            $re_link = 'tv="507"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\beINSports1Turkey.png/";
            $res = preg_replace($preg_match, asset('images/tv/MNhQyh0ABcR0iBtaZuKkRCRprHeEQCiunnamed_(2).jpg'), $res);


            // Bein sport 1 (Turkey)
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch054\/"/';
            $re_link = 'class="tv_onair" tv="507"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch054\/"/';
            $re_link = 'tv="507"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\beINSports1Turkey.png/";
            $res = preg_replace($preg_match, asset('images/tv/MNhQyh0ABcR0iBtaZuKkRCRprHeEQCiunnamed_(2).jpg'), $res);


            // Bein sport 1 (Turkey)
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch054\/"/';
            $re_link = 'class="tv_onair" tv="507"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch054\/"/';
            $re_link = 'tv="507"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\beINSports1Turkey.png/";
            $res = preg_replace($preg_match, asset('images/tv/MNhQyh0ABcR0iBtaZuKkRCRprHeEQCiunnamed_(2).jpg'), $res);


            // Bein sport 1 (Turkey)
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch054\/"/';
            $re_link = 'class="tv_onair" tv="507"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch054\/"/';
            $re_link = 'tv="507"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\beINSports1Turkey.png/";
            $res = preg_replace($preg_match, asset('images/tv/MNhQyh0ABcR0iBtaZuKkRCRprHeEQCiunnamed_(2).jpg'), $res);


            // Bein sport 1 (Turkey)
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch054\/"/';
            $re_link = 'class="tv_onair" tv="507"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch054\/"/';
            $re_link = 'tv="507"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\beINSports1Turkey.png/";
            $res = preg_replace($preg_match, asset('images/tv/MNhQyh0ABcR0iBtaZuKkRCRprHeEQCiunnamed_(2).jpg'), $res);


            // Bein sport 1 (Turkey)
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch054\/"/';
            $re_link = 'class="tv_onair" tv="507"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch054\/"/';
            $re_link = 'tv="507"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\beINSports1Turkey.png/";
            $res = preg_replace($preg_match, asset('images/tv/MNhQyh0ABcR0iBtaZuKkRCRprHeEQCiunnamed_(2).jpg'), $res);

            // Bein sport 1 (Turkey)
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch054\/"/';
            $re_link = 'class="tv_onair" tv="507"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch054\/"/';
            $re_link = 'tv="507"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\beINSports1Turkey.png/";
            $res = preg_replace($preg_match, asset('images/tv/MNhQyh0ABcR0iBtaZuKkRCRprHeEQCiunnamed_(2).jpg'), $res);


            // Bein sport 1 (France)
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch058\/"/';
            $re_link = 'tv="505"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch058\/"/';
            $re_link = 'tv="505"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\beINSports1France.png/";
            $res = preg_replace($preg_match, asset('images/tv/XgYgLyrxsKUg9LGE4uApShkmDzHYBEYunnamed.jpg'), $res);


            // Bein sport 2 (France)
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch059\/"/';
            $re_link = 'tv="507"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch059\/"/';
            $re_link = 'tv="507"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\beINSports2France.png/";
            $res = preg_replace($preg_match, asset('images/tv/D9SXBHyEvQkyfQwzEIPY1MhQ8px77LWunnamed_(1).jpg'), $res);


            // Gol (Spain)
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch283\/"/';
            $re_link = 'tv="216"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);            
            // Gol (Spain)
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch283\/"/';
            $re_link = 'tv="216"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\Gol.png/";
            $res = preg_replace($preg_match, asset('images/tv/ARgSdgocWYysRh603VS3f2Edcd8OrIe20180529171306542797456.jpg'), $res);


            // Arena Sport 1 Croatia
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch214\/"/';
            $re_link = 'tv="469"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            // Arena Sport 1 Croatia
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch214\/"/';
            $re_link = 'tv="469"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\ArenaSport1Serbia.png/";
            $res = preg_replace($preg_match, asset('images/tv/7fteYPlMSmSaGuLyDCttkTS0BB7uZVVunnamed_(48).jpg'), $res);



            // Arena Sport 2 Croatia
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch215\/"/';
            $re_link = 'tv="468"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch215\/"/';
            $re_link = 'tv="468"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\ArenaSport2Serbia.png/";
            $res = preg_replace($preg_match, asset('images/tv/BTWKP39ODwEg47zMlQpYbW2LBq18hc5unnamed_(49).jpg'), $res);


            // Arena Sport 3 Croatia
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch216\/"/';
            $re_link = 'tv="467"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            // Arena Sport 3 Croatia
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch216\/"/';
            $re_link = 'tv="467"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\ArenaSport3Serbia.png/";
            $res = preg_replace($preg_match, asset('images/tv/LmeeD7aT99ZZwZmWI8MbBaWG0ja46dYunnamed_(50).jpg'), $res);


            // Arena Sport 4 Croatia
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch217\/"/';
            $re_link = 'tv="466"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch217\/"/';
            $re_link = 'tv="466"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\ArenaSport4Serbia.png/";
            $res = preg_replace($preg_match, asset('images/tv/byGhvXCm279z1UA29rH0rA2pt26JbPLunnamed_(51).jpg'), $res);


            // Arena Sport 5 Croatia
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch286\/"/';
            $re_link = 'tv="465"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch286\/"/';
            $re_link = 'tv="465"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\ArenaSport5Serbia.png/";
            $res = preg_replace($preg_match, asset('images/tv/27cQGJf9mplmajDDNFX3VVaKop4iTT7unnamed_(52).jpg'), $res);


            // -----------------------------------------

            // Arena Sport 1 Serbia
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch287\/"/';
            $re_link = 'tv="469"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch287\/"/';
            $re_link = 'tv="469"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\ArenaSport1Serbia.png/";
            $res = preg_replace($preg_match, asset('images/tv/7fteYPlMSmSaGuLyDCttkTS0BB7uZVVunnamed_(48).jpg'), $res);


            // Arena Sport 2 Serbia
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch288\/"/';
            $re_link = 'tv="468"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch288\/"/';
            $re_link = 'tv="468"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\ArenaSport2Serbia.png/";
            $res = preg_replace($preg_match, asset('images/tv/BTWKP39ODwEg47zMlQpYbW2LBq18hc5unnamed_(49).jpg'), $res);


            // Arena Sport 3 Serbia
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch289\/"/';
            $re_link = 'tv="467"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch289\/"/';
            $re_link = 'tv="467"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\ArenaSport3Serbia.png/";
            $res = preg_replace($preg_match, asset('images/tv/LmeeD7aT99ZZwZmWI8MbBaWG0ja46dYunnamed_(50).jpg'), $res);


            // Arena Sport 4 Serbia
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch290\/"/';
            $re_link = 'tv="466"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch290\/"/';
            $re_link = 'tv="466"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\ArenaSport4Serbia.png/";
            $res = preg_replace($preg_match, asset('images/tv/byGhvXCm279z1UA29rH0rA2pt26JbPLunnamed_(51).jpg'), $res);


            // Arena Sport 5 Serbia
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch218\/"/';
            $re_link = 'tv="465"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch218\/"/';
            $re_link = 'tv="465"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\ArenaSport5Serbia.png/";
            $res = preg_replace($preg_match, asset('images/tv/27cQGJf9mplmajDDNFX3VVaKop4iTT7unnamed_(52).jpg'), $res);


            // -----------------------------------------

            // Sport TV 1
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/821\/"/';
            $re_link = 'tv="464"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/821\/"/';
            $re_link = 'tv="464"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\SPORTTV1.png/";
            $res = preg_replace($preg_match, asset('images/tv/PgUB4iaGv2AAZrMqPfGdysLtZjT4td9unnamed_(43).jpg'), $res);


            // -----------------------------------------

            // Sport Digital
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch292\/"/';
            $re_link = 'tv="226"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch292\/"/';
            $re_link = 'tv="226"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\sportdigital.png/";
            $res = preg_replace($preg_match, asset('images/tv/YNoEvVhrzDHpcYsaLYejZWm6QbmKz0E201805291655181750505720.jpg'), $res);


            // -----------------------------------------

            // M4 Sports
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch300\/"/';
            $re_link = 'tv="207"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch300\/"/';
            $re_link = 'tv="207"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\M4Sports.png/";
            $res = preg_replace($preg_match, asset('images/tv/MLjov782YMD2zHdHtpjZCpX7GeON1e3201805301426221524794147.jpg'), $res);


            // -----------------------------------------

            // Canal 9 Denmark
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch297\/"/';
            $re_link = 'tv="208"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch297\/"/';
            $re_link = 'tv="208"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\Canal9Denmark.png/";
            $res = preg_replace($preg_match, asset('images/tv/copR6nc3BX3S7PLI2ZO4sH622Tz40IO20180530142521726333648.jpg'), $res);


            // -----------------------------------------

            // STV 1 (Slovenia)
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch296\/"/';
            $re_link = 'tv="209"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch296\/"/';
            $re_link = 'tv="209"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\STV1Slovenia.png/";
            $res = preg_replace($preg_match, asset('images/tv/Df0kGkzOYzfRPauMOWy8NQDcJnbx0od20180530141953651665191.jpg'), $res);


            // -----------------------------------------

            // Canal+ Sport Poland
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch295\/"/';
            $re_link = 'tv="210"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch295\/"/';
            $re_link = 'tv="210"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\Canal\+SportFrance.png/";
            $res = preg_replace($preg_match, asset('images/tv/hReqAAecUt2b0XWv57lAtpwNYNcrElN20180530141655824344547.jpg'), $res);


            // -----------------------------------------

            // nSport+
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch293\/"/';
            $re_link = 'tv="213"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch293\/"/';
            $re_link = 'tv="213"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\nSport\+.png/";
            $res = preg_replace($preg_match, asset('images/tv/hBZnCXM8HcGxPJ5MhCSus2eX0M5yAiB20180530141250118976967.jpg'), $res);


            // -----------------------------------------

            // Sony TEN 2
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch291\/"/';
            $re_link = 'tv="262"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch291\/"/';
            $re_link = 'tv="262"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\SonyTEN2.png/";
            $res = preg_replace($preg_match, asset('images/tv/FD0x6PoM0P1Yx1LVir4vC9zq7WNb4OZ20180517185416893186692.jpg'), $res);


            // -----------------------------------------

            // Nash Football
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch284\/"/';
            $re_link = 'tv="215"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch284\/"/';
            $re_link = 'tv="215"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\NashFootball.png/";
            $res = preg_replace($preg_match, asset('images/tv/FD0x6PoM0P1Yx1LVir4vC9zq7WNb4OZ20180517185416893186692.jpg'), $res);


            // -----------------------------------------

            // Digi Sport 1 Romania
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch280\/"/';
            $re_link = 'tv="219"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch280\/"/';
            $re_link = 'tv="219"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\DigiSport1romania.png/";
            $res = preg_replace($preg_match, asset('images/tv/3h8ZGuFHrPGo8DuOUv0wio2o5MkNytG201805291707081372544925.jpg'), $res);


            // -----------------------------------------

            // Sportklub 1 Slovenia - สปอร์ตคลับ 1 สโลวีเนีย
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch345\/"/';
            $re_link = 'tv="559"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch345\/"/';
            $re_link = 'tv="559"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\Sportklub1Slovenia.png/";
            $res = preg_replace($preg_match, asset('images/tv/L0kUGOqf5ncwStRrl2dK9efMYLnqu7cSportklub1Slovenia.png'), $res);



            // Sportklub 2 Slovenia - สปอร์ตคลับ 2 สโลวีเนีย
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch346\/"/';
            $re_link = 'tv="558"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch346\/"/';
            $re_link = 'tv="558"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\Sportklub2Slovenia.png/";
            $res = preg_replace($preg_match, asset('images/tv/hofl03yMS7lZ9NK8hUbxz8f4cm9qWrySportklub2Slovenia.png'), $res);


            // Sportklub 3 Slovenia - สปอร์ตคลับ 3 สโลวีเนีย
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/962\/"/';
            $re_link = 'tv="557"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/962\/"/';
            $re_link = 'tv="557"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\Sportklub3Slovenia.png/";
            $res = preg_replace($preg_match, asset('images/tv/5mlZUMn9vEK0gfVgmUt9c3cARiPfgTrSportklub3Slovenia.png'), $res);


            // Sportklub 4 Slovenia - สปอร์ตคลับ 4 สโลวีเนีย
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch347\/"/';
            $re_link = 'tv="556"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch347\/"/';
            $re_link = 'tv="556"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\Sportklub4Slovenia.png/";
            $res = preg_replace($preg_match, asset('images/tv/nqbmXLPrZKNW8en3BuOcmZonekIuMKlSportklub4Slovenia.png'), $res);


            // -----------------------------------------
            // Bet Sport 32 - เบ็ท สปอร์ต 32
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch338\/"/';
            $re_link = 'tv="523"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch338\/"/';
            $re_link = 'tv="523"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\BetSport32.png/";
            $res = preg_replace($preg_match, asset('images/tv/2GvnBkpwZRzrYorq0TT4BQgtcz1hJS8BetSport32.png'), $res);


            // Bet Sport 31 - เบ็ท สปอร์ต 31
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch337\/"/';
            $re_link = 'tv="524"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch337\/"/';
            $re_link = 'tv="524"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\BetSport31.png/";
            $res = preg_replace($preg_match, asset('images/tv/OhSIchZ1VM3AB1R1vCnyv4nX7hDQNdUBetSport31.png'), $res);


            // Bet Sport 30 - เบ็ท สปอร์ต 30
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch336\/"/';
            $re_link = 'tv="525"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch336\/"/';
            $re_link = 'tv="525"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\BetSport30.png/";
            $res = preg_replace($preg_match, asset('images/tv/YDKJmf2T3TFjnkMeLT1PJuUPtWbulkqBetSport30.png'), $res);


            // Bet Sport 29 - เบ็ท สปอร์ต 29
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch335\/"/';
            $re_link = 'tv="526"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch335\/"/';
            $re_link = 'tv="526"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\BetSport29.png/";
            $res = preg_replace($preg_match, asset('images/tv/z0CudIOcok70NO6Pi3W07Mdz0CEbTM5BetSport29.png'), $res);


            // Bet Sport 28 - เบ็ท สปอร์ต 28
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch334\/"/';
            $re_link = 'tv="527"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch334\/"/';
            $re_link = 'tv="527"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\BetSport28.png/";
            $res = preg_replace($preg_match, asset('images/tv/7woIJ2QyCSgeKnM26m4cvkHanPQBXG9BetSport28.png'), $res);


            // Bet Sport 27 - เบ็ท สปอร์ต 27
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch333\/"/';
            $re_link = 'tv="528"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch333\/"/';
            $re_link = 'tv="528"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\BetSport27.png/";
            $res = preg_replace($preg_match, asset('images/tv/Fc41l27SKD8YFLYQiRj4vvvmAKNmHOYBetSport27.png'), $res);


            // Bet Sport 26 - เบ็ท สปอร์ต 26
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch332\/"/';
            $re_link = 'tv="529"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch332\/"/';
            $re_link = 'tv="529"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\BetSport26.png/";
            $res = preg_replace($preg_match, asset('images/tv/2rItwxiSXnm1zlQpWsloeuzBf4jFRjABetSport26.png'), $res);


            // Bet Sport 25 - เบ็ท สปอร์ต 25
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch331\/"/';
            $re_link = 'tv="530"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch331\/"/';
            $re_link = 'tv="530"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\BetSport25.png/";
            $res = preg_replace($preg_match, asset('images/tv/BFnwEBG0LtXGDTULYJlBzWPLEo2CqXXBetSport25.png'), $res);


            // Bet Sport 24 - เบ็ท สปอร์ต 24
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch330\/"/';
            $re_link = 'tv="531"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch330\/"/';
            $re_link = 'tv="531"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\BetSport24.png/";
            $res = preg_replace($preg_match, asset('images/tv/vMKKk1gIfTxnL0CGIVPminLrPkGY0cYBetSport24.png'), $res);


            // Bet Sport 23 - เบ็ท สปอร์ต 23
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch329\/"/';
            $re_link = 'tv="532"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch329\/"/';
            $re_link = 'tv="532"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\BetSport23.png/";
            $res = preg_replace($preg_match, asset('images/tv/dA9S5espgKd8NBuaHl0ycVqDGV2M7u2BetSport23.png'), $res);


            // Bet Sport 22 - เบ็ท สปอร์ต 22
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch328\/"/';
            $re_link = 'tv="533"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch328\/"/';
            $re_link = 'tv="533"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\BetSport22.png/";
            $res = preg_replace($preg_match, asset('images/tv/mkhpD0rzt0sWi5D7YoQnGFav98d493bBetSport22.png'), $res);


            // Bet Sport 21 - เบ็ท สปอร์ต 21
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch327\/"/';
            $re_link = 'tv="534"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch327\/"/';
            $re_link = 'tv="534"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\BetSport21.png/";
            $res = preg_replace($preg_match, asset('images/tv/0Eqww1Rff1K6GIbBQayDrA8DG7H6OkqBetSport21.png'), $res);


            // Bet Sport 20 - เบ็ท สปอร์ต 20
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch326\/"/';
            $re_link = 'tv="535"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch326\/"/';
            $re_link = 'tv="535"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\BetSport20.png/";
            $res = preg_replace($preg_match, asset('images/tv/PYyAlmKr62e4yPgRqMaY1Irya2r3rAkBetSport20.png'), $res);


            // Bet Sport 19 - เบ็ท สปอร์ต 19
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch325\/"/';
            $re_link = 'tv="536"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch325\/"/';
            $re_link = 'tv="536"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\BetSport19.png/";
            $res = preg_replace($preg_match, asset('images/tv/gfx5gPzUKVgYRwkUNCAajcNhEUX9gIjBetSport19.png'), $res);


            // Bet Sport 18 - เบ็ท สปอร์ต 18
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch324\/"/';
            $re_link = 'tv="537"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch324\/"/';
            $re_link = 'tv="537"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\BetSport18.png/";
            $res = preg_replace($preg_match, asset('images/tv/WqVmL3Ej7UtzyOumB4ltEk9l7bvasV6BetSport18.png'), $res);


            // Bet Sport 17 - เบ็ท สปอร์ต 17
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch323\/"/';
            $re_link = 'tv="538"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch323\/"/';
            $re_link = 'tv="538"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\BetSport17.png/";
            $res = preg_replace($preg_match, asset('images/tv/uvfEfeT0BBUdj36uviSRBNwjE99PvA2BetSport17.png'), $res);


            // Bet Sport 16 - เบ็ท สปอร์ต 16
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch322\/"/';
            $re_link = 'tv="539"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch322\/"/';
            $re_link = 'tv="539"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\BetSport16.png/";
            $res = preg_replace($preg_match, asset('images/tv/qcMNHWl29h7nii9noiaNkQcW270fGaHBetSport16.png'), $res);


            // Bet Sport 15 - เบ็ท สปอร์ต 15
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch321\/"/';
            $re_link = 'tv="540"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch321\/"/';
            $re_link = 'tv="540"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\BetSport15.png/";
            $res = preg_replace($preg_match, asset('images/tv/olr0voqYIbeK2T0ntXjwa1eSb0krrdJBetSport15.png'), $res);

            // Bet Sport 14 - เบ็ท สปอร์ต 14
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch320\/"/';
            $re_link = 'tv="541"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch320\/"/';
            $re_link = 'tv="541"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\BetSport14.png/";
            $res = preg_replace($preg_match, asset('images/tv/Mq3iNVImqrhTgPkohChfDRZzmr5X0mzBetSport14.png'), $res);


            // Bet Sport 13 - เบ็ท สปอร์ต 13
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch319\/"/';
            $re_link = 'tv="542"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch319\/"/';
            $re_link = 'tv="542"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\BetSport13.png/";
            $res = preg_replace($preg_match, asset('images/tv/sMtgy1O9CwWc3AfHe2HGWeL3ICLZHtABetSport13.png'), $res);


            // Bet Sport 12 - เบ็ท สปอร์ต 12
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch306\/"/';
            $re_link = 'tv="543"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch306\/"/';
            $re_link = 'tv="543"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\BetSport12.png/";
            $res = preg_replace($preg_match, asset('images/tv/YbfKdU7vxEzKJfG7etiHMRT9GDYnp4SBetSport12.png'), $res);


            // Bet Sport 11 - เบ็ท สปอร์ต 11
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch305\/"/';
            $re_link = 'tv="544"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch305\/"/';
            $re_link = 'tv="544"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\BetSport11.png/";
            $res = preg_replace($preg_match, asset('images/tv/bwsPu4FhD0i3pKX22N6wZy5DUool8OzBetSport11.png'), $res);


            // Bet Sport 10 - เบ็ท สปอร์ต 10
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch304\/"/';
            $re_link = 'tv="545"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch304\/"/';
            $re_link = 'tv="545"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\BetSport10.png/";
            $res = preg_replace($preg_match, asset('images/tv/wETjuTmG1DEH6xZOYrgReGQdDSmKtRNBetSport10.png'), $res);


            // Bet Sport 9 - เบ็ท สปอร์ต 9
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch303\/"/';
            $re_link = 'tv="546"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch303\/"/';
            $re_link = 'tv="546"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\BetSport9.png/";
            $res = preg_replace($preg_match, asset('images/tv/TUBmqfH83DE0lacEdt8VCnQG90b4MvtBetSport9.png'), $res);


            // Bet Sport 8 - เบ็ท สปอร์ต 8
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch302\/"/';
            $re_link = 'tv="547"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch302\/"/';
            $re_link = 'tv="547"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\BetSport8.png/";
            $res = preg_replace($preg_match, asset('images/tv/mrRJfa8DS7yEA9LnlJXuxcK0cTBwTnsBetSport8.png'), $res);


            // Bet Sport 7 - เบ็ท สปอร์ต 7
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch301\/"/';
            $re_link = 'tv="548"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch301\/"/';
            $re_link = 'tv="548"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\BetSport7.png/";
            $res = preg_replace($preg_match, asset('images/tv/XLEEUlbL3912wCI98QHaF8lguFk5a2dBetSport7.png'), $res);


            // Bet Sport 6 - เบ็ท สปอร์ต 6
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/644\/"/';
            $re_link = 'tv="549"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/644\/"/';
            $re_link = 'tv="549"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\BetSport6.png/";
            $res = preg_replace($preg_match, asset('images/tv/x2fD7paGMLlu3A3TVokTyIfEwbBGaS9BetSport6.png'), $res);


            // Bet Sport 5 - เบ็ท สปอร์ต 5
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/605\/"/';
            $re_link = 'tv="550"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/605\/"/';
            $re_link = 'tv="550"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\BetSport5.png/";
            $res = preg_replace($preg_match, asset('images/tv/TsdF66KZTxhypqE9rcj8dGbPc128JjsBetSport5.png'), $res);


            // Bet Sport 4 - เบ็ท สปอร์ต 4
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/604\/"/';
            $re_link = 'tv="551"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/604\/"/';
            $re_link = 'tv="551"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\BetSport4.png/";
            $res = preg_replace($preg_match, asset('images/tv/SuPjeNaX3VKGQw51sKaOME1Ltd6gmooBetSport4.png'), $res);


            // Bet Sport 3 - เบ็ท สปอร์ต 3
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/640\/"/';
            $re_link = 'tv="552"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/640\/"/';
            $re_link = 'tv="552"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\BetSport3.png/";
            $res = preg_replace($preg_match, asset('images/tv/3sadZZfUKUIdRT1QPn8nkSpa8liaLPnBetSport3.png'), $res);


            // Bet Sport 2 - เบ็ท สปอร์ต 2
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/602\/"/';
            $re_link = 'tv="553"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/602\/"/';
            $re_link = 'tv="553"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\BetSport2.png/";
            $res = preg_replace($preg_match, asset('images/tv/nHD2sZUkOgmLvxaWisN9W4zRSj0opE2BetSport2.png'), $res);


            // Bet Sport 1 - เบ็ท สปอร์ต 1
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/601\/"/';
            $re_link = 'tv="554"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/601\/"/';
            $re_link = 'tv="554"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\BetSport1.png/";
            $res = preg_replace($preg_match, asset('images/tv/pN8HSQfcecn3grnkpX0UXY88R3GQ2otBetSport1.png'), $res);


            // -----------------------------------------

            // C More Live HD
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch342\/"/';
            $re_link = 'tv="563"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch342\/"/';
            $re_link = 'tv="563"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\CMoreLiveHD.png/";
            $res = preg_replace($preg_match, asset('images/tv/MLjov782YMD2zHdHtpjZCpX7GeON1e3201805301426221524794147.jpg'), $res);


            // C More Live 2
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch343\/"/';
            $re_link = 'tv="562"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch343\/"/';
            $re_link = 'tv="562"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\CMoreLive2.png/";
            $res = preg_replace($preg_match, asset('images/tv/MLjov782YMD2zHdHtpjZCpX7GeON1e3201805301426221524794147.jpg'), $res);


            // C More Live 3
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch344\/"/';
            $re_link = 'tv="561"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch344\/"/';
            $re_link = 'tv="561"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\CMoreLive3.png/";
            $res = preg_replace($preg_match, asset('images/tv/MLjov782YMD2zHdHtpjZCpX7GeON1e3201805301426221524794147.jpg'), $res);


            // C More Fotboll
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch340\/"/';
            $re_link = 'tv="564"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch340\/"/';
            $re_link = 'tv="564"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\CMoreFotboll.png/";
            $res = preg_replace($preg_match, asset('images/tv/MLjov782YMD2zHdHtpjZCpX7GeON1e3201805301426221524794147.jpg'), $res);


            // -----------------------------------------

            // FOX Sport 1 USA
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/450\/"/';
            $re_link = 'tv="18"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/450\/"/';
            $re_link = 'tv="18"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\FoxSports1USA.png/";
            $res = preg_replace($preg_match, asset('images/tv/qWiV28LWc4xfdW8NVmklcfcVf4huIpCx7hKvscdRSmudnmQbQGb_Screen_Shot_2016-09-30_at_2.17.33_PM.jpg'), $res);


            // FOX Sport 2 USA
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch046\/"/';
            $re_link = 'tv="17"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch046\/"/';
            $re_link = 'tv="17"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\FoxSports2USA.png/";
            $res = preg_replace($preg_match, asset('images/tv/NkihHNB187u0COwOku8uQOabgpsyuTeดาวน์โหลด.png'), $res);


            // FOX Sport 3 USA
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch047\/"/';
            $re_link = 'tv="26"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch047\/"/';
            $re_link = 'tv="26"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\BetSport32.png/";
            $res = preg_replace($preg_match, asset('images/tv/MLjov782YMD2zHdHtpjZCpX7GeON1e3201805301426221524794147.jpg'), $res);


            // -----------------------------------------

            // FOX Sports 1 Holland Netherlands
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch276\/"/';
            $re_link = 'tv="28"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch276\/"/';
            $re_link = 'tv="28"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\FoxSports1Netherlands.png/";
            $res = preg_replace($preg_match, asset('images/tv/mDZ3GJdbDVkkSzuuN98jMhDLoIUBHAE2017120709030155487536.jpg'), $res);


            // FOX Sports 2 Holland Netherlands
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch277\/"/';
            $re_link = 'tv="27"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch277\/"/';
            $re_link = 'tv="27"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\FoxSports2Netherlands.png/";
            $res = preg_replace($preg_match, asset('images/tv/tK3hMBM3UGvobGZf4UUNIFgyBx2MADb20171207090319703427290.jpg'), $res);


            // FOX Sports 3 Holland Netherlands
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch278\/"/';
            $re_link = 'tv="26"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch278\/"/';
            $re_link = 'tv="26"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\FoxSports3Netherlands.png/";
            $res = preg_replace($preg_match, asset('images/tv/YEqFhqPhyidTBNV6FmTI3RMkwgPiuhs20171207090337736745945.jpg'), $res);


            // -----------------------------------------

            // SuperSport 3
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch098\/"/';
            $re_link = 'tv="266"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch098\/"/';
            $re_link = 'tv="266"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\SuperSport3Albania.png/";
            $res = preg_replace($preg_match, asset('images/tv/tDlTGtNcjDHCwq3Fq0UIdd2xGRHSEau201707271440081032250829.jpg'), $res);


            // SuperSport 4
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch099\/"/';
            $re_link = 'tv="265"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch099\/"/';
            $re_link = 'tv="265"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\SuperSport4Albania.png/";
            $res = preg_replace($preg_match, asset('images/tv/kF1iUl4EcB0vmRzEPEdEm65bqCrvHNl201707271440321216002631.jpg'), $res);


            // -----------------------------------------

            // Futbol 1
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch104\/"/';
            $re_link = 'tv="253"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch104\/"/';
            $re_link = 'tv="253"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\Futbol1.png/";
            $res = preg_replace($preg_match, asset('images/tv/cSdIghnSS3fxH04O7Us5G0Lrglfidag201709151622511585852490.jpg'), $res);


            // Futbol 2
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch105\/"/';
            $re_link = 'tv="252"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch105\/"/';
            $re_link = 'tv="252"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\Futbol2.png/";
            $res = preg_replace($preg_match, asset('images/tv/oHBeyvIX4gVUZyP3VHvLWmuxkxWUQrv2017091516233945198433.jpg'), $res);


            // -----------------------------------------

            // TeleClub Sport 1
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch108\/"/';
            $re_link = 'tv="251"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch108\/"/';
            $re_link = 'tv="251"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\TeleClubSport1.png/";
            $res = preg_replace($preg_match, asset('images/tv/bmR4gpei9IQgTKc2ypzxzqFnkFTTWAu20170915162610491485165.jpg'), $res);


            // TeleClub Sport 2
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch109\/"/';
            $re_link = 'tv="250"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch109\/"/';
            $re_link = 'tv="250"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\TeleClubSport2.png/";
            $res = preg_replace($preg_match, asset('images/tv/aaPLVkxFLHwP4JFrLHC6NAR6k1BJIdy201709151627521104403816.jpg'), $res);


            // -----------------------------------------

            // Abu Dhabi Sports 3
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch272\/"/';
            $re_link = 'tv="224"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch272\/"/';
            $re_link = 'tv="224"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\AbuDhabiSports3.png/";
            $res = preg_replace($preg_match, asset('images/tv/psaILbq9FCnFaqLd2H6pNesgb9ho7nz20180529165907454337422.jpg'), $res);


            // Abu Dhabi Sports 4
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch273\/"/';
            $re_link = 'tv="223"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch273\/"/';
            $re_link = 'tv="223"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\AbuDhabiSports4.png/";
            $res = preg_replace($preg_match, asset('images/tv/6CAGy5yf9yMdq9NsYagkfv8uQ1QsIv3201805291700191976094253.jpg'), $res);


            // -----------------------------------------

            // // Univision Deportes USA
            // $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch275\/"/';
            // $re_link = 'tv="221"';
            // $re_link .= 'class="tv_onair"';
            // $res = preg_replace($find_link, $re_link, $res);
            // $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch275\/"/';
            // $re_link = 'tv="221"';
            // $re_link .= 'class="tv_onair"';
            // $res = preg_replace($find_link, $re_link, $res);
            // $preg_match = "/http:\/\/www.sine.tv\/\w.+\UnivisionDeportesUSA.png/";
            // $res = preg_replace($preg_match, asset('images/tv/maw3rEIXUhnoyQxfhfTzKLLqxD9QE6p201805291703371296478624.jpg'), $res);


            // -----------------------------------------

            // TV 3 Sport 1
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch106\/"/';
            $re_link = 'tv="229"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch106\/"/';
            $re_link = 'tv="229"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\SPORTTV3.png/";
            $res = preg_replace($preg_match, asset('images/tv/f0pXhz7nQdtQc5aqjL5muPNJbjmpKmA20180529164125618716022.jpg'), $res);


            // -----------------------------------------

            // SporTV
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch110\/"/';
            $re_link = 'tv="227"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch110\/"/';
            $re_link = 'tv="227"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\SporTV.png/";
            $res = preg_replace($preg_match, asset('images/tv/PbHqny0WWJ25XcneIooNs6eohXNIjJR20180529165152122455989.jpg'), $res);


            // -----------------------------------------

            // // Polsat Sport
            // $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch107\/"/';
            // $re_link = 'tv="228"';
            // $re_link .= 'class="tv_onair"';
            // $res = preg_replace($find_link, $re_link, $res);
            // $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch107\/"/';
            // $re_link = 'tv="228"';
            // $re_link .= 'class="tv_onair"';
            // $res = preg_replace($find_link, $re_link, $res);
            // $preg_match = "/http:\/\/www.sine.tv\/\w.+\PolsatSport.png/";
            // $res = preg_replace($preg_match, asset('images/tv/w8UOqXLykemb63hMJg2fPVTWzdtwih820180529164236210242896.jpg'), $res);


            // -----------------------------------------

            // PFC
            // $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch111\/"/';
            // $re_link = 'tv="264"';
            // $re_link .= 'class="tv_onair"';
            // $res = preg_replace($find_link, $re_link, $res);
            // $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch111\/"/';
            // $re_link = 'tv="264"';
            // $re_link .= 'class="tv_onair"';
            // $res = preg_replace($find_link, $re_link, $res);
            // $preg_match = "/http:\/\/www.sine.tv\/\w.+\PFCInternacional.png/";
            // $res = preg_replace($preg_match, asset('images/tv/yNtlhvBmmhUvzVcr2vyU8lc4VflOZR520170727144802226663685.jpg'), $res);


            // -----------------------------------------

            // Dolce Sport 1
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch101\/"/';
            $re_link = 'tv="255"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch101\/"/';
            $re_link = 'tv="255"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\DolceSport1.png/";
            $res = preg_replace($preg_match, asset('images/tv/tCPj5ohQrKvlymZc6Huh7vhvm9SqKNS201708081655291659234251.jpg'), $res);


            // -----------------------------------------

            // Diema Sport 1
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch100\/"/';
            $re_link = 'tv="230"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch100\/"/';
            $re_link = 'tv="230"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\DiemaSport1.png/";
            $res = preg_replace($preg_match, asset('images/tv/WMGCwtC7DT23xhOajBIWPxzaRkFUgOx201805291636021996888202.jpg'), $res);


            // -----------------------------------------

            // Skynet Sport HD สกายเน็ต สปอร์ต HD
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch063\/"/';
            $re_link = 'tv="486"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch063\/"/';
            $re_link = 'tv="486"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\SkynetSportHD.png/";
            $res = preg_replace($preg_match, asset('images/tv/iwJIbhjCCCaIIFJ6rtQ54b7f2SsO65Bunnamed_(4).jpg'), $res);


            // Skynet Sport สกายเน็ต สปอร์ต 1
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch064\/"/';
            $re_link = 'tv="485"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch064\/"/';
            $re_link = 'tv="485"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\SkyNetSports1.png/";
            $res = preg_replace($preg_match, asset('images/tv/OtNoMMSgHp2i7p5BrvaNNH989xW1ZAZunnamed_(5).jpg'), $res);


            // Skynet Sport สกายเน็ต สปอร์ต 2
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch065\/"/';
            $re_link = 'tv="484"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch065\/"/';
            $re_link = 'tv="484"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\SkyNetSports2.png/";
            $res = preg_replace($preg_match, asset('images/tv/hd9g3jrN7wORt3Tc4vfVS8JzQfvMIO8unnamed_(6).jpg'), $res);


            // Skynet Sport สกายเน็ต สปอร์ต 3
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch066\/"/';
            $re_link = 'tv="483"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch066\/"/';
            $re_link = 'tv="483"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\SkyNetSports3.png/";
            $res = preg_replace($preg_match, asset('images/tv/PxRN1oZXpJfqGtEXExjB1ropuWiuxIQunnamed_(7).jpg'), $res);


            // Skynet Sport สกายเน็ต สปอร์ต 4
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch067\/"/';
            $re_link = 'tv="482"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch067\/"/';
            $re_link = 'tv="482"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\SkyNetSports4.png/";
            $res = preg_replace($preg_match, asset('images/tv/x4wsb8UlyvIBCr0p0I3yWA1saxeeR6vunnamed_(8).jpg'), $res);


            // Skynet Sport สกายเน็ต สปอร์ต 5
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch068\/"/';
            $re_link = 'tv="481"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch068\/"/';
            $re_link = 'tv="481"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\SkyNetSports5.png/";
            $res = preg_replace($preg_match, asset('images/tv/aH5FGyU0PNAZINKSvxvp3FNAWFkBbk2unnamed_(9).jpg'), $res);


            // Skynet Sport สกายเน็ต สปอร์ต 6
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch069\/"/';
            $re_link = 'tv="480"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch069\/"/';
            $re_link = 'tv="480"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\SkyNetSports6.png/";
            $res = preg_replace($preg_match, asset('images/tv/mSEMNxZHDd4K4JGezIu9YNBqMHcRGk2unnamed_(10).jpg'), $res);


            // -----------------------------------------

            // bein sports MAX 5 France
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/315\/"/';
            $re_link = 'tv="236"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/315\/"/';
            $re_link = 'tv="236"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\DiemaSport1.png/";
            $res = preg_replace($preg_match, asset('images/tv/faYkj7oKJKK3ICYeoEfd64CmY8mkkrh20180529161853385469884.jpg'), $res);


            // bein sports MAX 6 France
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/316\/"/';
            $re_link = 'tv="235"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/316\/"/';
            $re_link = 'tv="235"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\DiemaSport1.png/";
            $res = preg_replace($preg_match, asset('images/tv/KMvLsYPv2AXISAuZmPJ5jsCHifdPr4k201805291623491444800059.jpg'), $res);


            // bein sports MAX 7 France
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/317\/"/';
            $re_link = 'tv="234"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/317\/"/';
            $re_link = 'tv="234"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\DiemaSport1.png/";
            $res = preg_replace($preg_match, asset('images/tv/lUkWiQmLqiSLc6BtF4hnpPDh8qdRB5420180529162429288997897.jpg'), $res);


            // bein sports MAX 8 France
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/318\/"/';
            $re_link = 'tv="233"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/318\/"/';
            $re_link = 'tv="233"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\DiemaSport1.png/";
            $res = preg_replace($preg_match, asset('images/tv/NR0Lf39iKSNpIJR9ax7ZjsyIgF9CFj620180529162552914154839.jpg'), $res);


            // bein sports MAX 9 France
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/319\/"/';
            $re_link = 'tv="232"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/319\/"/';
            $re_link = 'tv="232"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\DiemaSport1.png/";
            $res = preg_replace($preg_match, asset('images/tv/uwBJ4shWJBxTaVUBz5mpnq7BG8UqWSi201805291626102118849575.jpg'), $res);


            // bein sports 10 France
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/320\/"/';
            $re_link = 'tv="231"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/320\/"/';
            $re_link = 'tv="231"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\DiemaSport1.png/";
            $res = preg_replace($preg_match, asset('images/tv/B2wjMCvSrZTKPz5jQbuUb9cJrqsP6Od201805291626332048989852.jpg'), $res);


            // -----------------------------------------

            // bein sports Arabia 1 HD
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch260\/"/';
            $re_link = 'tv="574"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch260\/"/';
            $re_link = 'tv="574"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\beINSportsArabia1HD.png/";
            $res = preg_replace($preg_match, asset('images/tv/EBTcHDFFxal4qwrSI4M7GzqRu1bXVkIbeINSportsArabia1HD.png'), $res);


            // bein sports Arabia 2 HD
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch261\/"/';
            $re_link = 'tv="573"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch261\/"/';
            $re_link = 'tv="573"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\beINSportsArabia2HD.png/";
            $res = preg_replace($preg_match, asset('images/tv/hqrG8yC4M6RjRjJnyx6RrjoMsDtcdvQbeINSportsArabia2HD.png'), $res);


            // bein sports Arabia 3 HD
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch262\/"/';
            $re_link = 'tv="572"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch262\/"/';
            $re_link = 'tv="572"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\beINSportsArabia3HD.png/";
            $res = preg_replace($preg_match, asset('images/tv/7nFOWaGs102Taun713ttp23cGsPPGZ3beINSportsArabia3HD.png'), $res);


            // bein sports Arabia 4 HD
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch263\/"/';
            $re_link = 'tv="571"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch263\/"/';
            $re_link = 'tv="571"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\beINSportsArabia4HD.png/";
            $res = preg_replace($preg_match, asset('images/tv/hb6niXkhJgfxKIqGtApcxTNL90gpmWzbeINSportsArabia4HD.png'), $res);


            // bein sports Arabia 5 HD
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch264\/"/';
            $re_link = 'tv="570"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch264\/"/';
            $re_link = 'tv="570"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\beINSportsArabia5HD.png/";
            $res = preg_replace($preg_match, asset('images/tv/nZcxknfJpge2mlsJgNuO0FJeEIQAx7IbeINSportsArabia5HD.png'), $res);


            // bein sports Arabia 6 HD
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch265\/"/';
            $re_link = 'tv="569"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch265\/"/';
            $re_link = 'tv="569"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\beINSportsArabia6HD.png/";
            $res = preg_replace($preg_match, asset('images/tv/zVXRprfbaBm5vJkue0istRsCCRq8uyFbeINSportsArabia6HD.png'), $res);


            // bein sports Arabia 7 HD
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch266\/"/';
            $re_link = 'tv="567"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch266\/"/';
            $re_link = 'tv="567"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\beINSportsArabia7HD.png/";
            $res = preg_replace($preg_match, asset('images/tv/vSiXjYYE65QJl8Oe3sWhIumaRhOOKqxbeINSportsArabia7HD.png'), $res);


            // bein sports Arabia 8 HD
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch267\/"/';
            $re_link = 'tv="566"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch267\/"/';
            $re_link = 'tv="566"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\beINSportsArabia8HD.png/";
            $res = preg_replace($preg_match, asset('images/tv/0iOxqAALO0WNOtHR85u8Y3M8DqOMWuZbeINSportsArabia8HD.png'), $res);


            // bein sports Arabia 9 HD
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch268\/"/';
            $re_link = 'tv="568"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch268\/"/';
            $re_link = 'tv="568"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\beINSportsArabia9HD.png/";
            $res = preg_replace($preg_match, asset('images/tv/VqELOSQWHNaWWaE6zdiHpD975soXav8beINSportsArabia9HD.png'), $res);


            // -----------------------------------------

            // Sky Sport 1 HD Italia
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch281\/"/';
            $re_link = 'tv="479"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch281\/"/';
            $re_link = 'tv="479"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\SkySport1HDItalia.png/";
            $res = preg_replace($preg_match, asset('images/tv/6Dt7Le8em3BIDm1HK2YHTJHkk0ToDmV20180529171153542041391.jpg'), $res);


            // sky sports main event
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch077\/"/';
            $re_link = 'tv="479"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch077\/"/';
            $re_link = 'tv="479"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\SkySportsMainEvent.png/";
            $res = preg_replace($preg_match, asset('images/tv/ZhkuzT6KUNT51lwDTW8gpC7CA4glz6Eunnamed_(30).jpg'), $res);


            // sky sports Cricket
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch078\/"/';
            $re_link = 'tv="478"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch078\/"/';
            $re_link = 'tv="478"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\SkySportsCricket.png/";
            $res = preg_replace($preg_match, asset('images/tv/tIWwuqbXKddYZfRQVmGLwGaJnBP7Ozxunnamed_(31).jpg'), $res);


            // sky sports Action
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch079\/"/';
            $re_link = 'tv="477"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch079\/"/';
            $re_link = 'tv="477"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\SkySportsAction.png/";
            $res = preg_replace($preg_match, asset('images/tv/Wnp2AP20XfhkLyJHOkeoOBRdxTxicFeunnamed_(32).jpg'), $res);


            // sky sports Golf
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch080\/"/';
            $re_link = 'tv="476"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch080\/"/';
            $re_link = 'tv="476"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\SkySportsGolf.png/";
            $res = preg_replace($preg_match, asset('images/tv/npEhfh1VtJVtP3MlVHYTiWfrWQ495FPunnamed_(33).jpg'), $res);


            // sky sports Premiere
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch081\/"/';
            $re_link = 'tv="475"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch081\/"/';
            $re_link = 'tv="475"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\SkySportsPremiere.png/";
            $res = preg_replace($preg_match, asset('images/tv/Wwy4EnBjMvic7hvkDuoReClv4TA6WpFunnamed_(34).jpg'), $res);


            // sky sports F1
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch082\/"/';
            $re_link = 'tv="474"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch082\/"/';
            $re_link = 'tv="474"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\SkySportsF1.png/";
            $res = preg_replace($preg_match, asset('images/tv/GozjL9mmasPxsbTAcqVq1JhlMIGRFuDunnamed_(35).jpg'), $res);


            // sky sports Football
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch083\/"/';
            $re_link = 'tv="473"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch083\/"/';
            $re_link = 'tv="473"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\SkySportsFootball.png/";
            $res = preg_replace($preg_match, asset('images/tv/nDFmjzizDQlhVEz6UW1uXDaCNTU6VXOunnamed_(36).jpg'), $res);


            // sky sports Arena
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch084\/"/';
            $re_link = 'tv="472"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch084\/"/';
            $re_link = 'tv="472"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\SkySportsArena.png/";
            $res = preg_replace($preg_match, asset('images/tv/7zmQ4X314LKz3Di8p30pHGEu5yP072cunnamed_(37).jpg'), $res);


            // sky sports Mix
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch085\/"/';
            $re_link = 'tv="471"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch085\/"/';
            $re_link = 'tv="471"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\SkySportsMix.png/";
            $res = preg_replace($preg_match, asset('images/tv/9HtRD8mpnkHg0pPC1YYSx9gLKx64gjiunnamed_(38).jpg'), $res);


            // sky sports News
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch086\/"/';
            $re_link = 'tv="470"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch086\/"/';
            $re_link = 'tv="470"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\SkySportsNews.png/";
            $res = preg_replace($preg_match, asset('images/tv/mazj7UdbYtmINSajK0USPy32WyXyWZeunnamed_(39).jpg'), $res);



            // -----------------------------------------

            // Sport TV 1
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch093\/"/';
            $re_link = 'tv="464"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch093\/"/';
            $re_link = 'tv="464"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\SPORTTV1.png/";
            $res = preg_replace($preg_match, asset('images/tv/PgUB4iaGv2AAZrMqPfGdysLtZjT4td9unnamed_(43).jpg'), $res);


            // Sport TV 2
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch094\/"/';
            $re_link = 'tv="463"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch094\/"/';
            $re_link = 'tv="463"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\SPORTTV2.png/";
            $res = preg_replace($preg_match, asset('images/tv/LNun1rhSdLwCA68n6212xoPnTe0p74Punnamed_(44).jpg'), $res);


            // Sport TV 3
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch095\/"/';
            $re_link = 'tv="462"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch095\/"/';
            $re_link = 'tv="462"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\SPORTTV3.png/";
            $res = preg_replace($preg_match, asset('images/tv/OX33P2UVPHOQnjTXOGp6laZXlM7jyyxunnamed_(45).jpg'), $res);



            // Sport TV 4
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch096\/"/';
            $re_link = 'tv="461"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch096\/"/';
            $re_link = 'tv="461"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\SPORTTV4.png/";
            $res = preg_replace($preg_match, asset('images/tv/9LTSosVmvZNHUqORUwwgMmrlDgfmYlUunnamed_(46).jpg'), $res);


            // Sport TV 5
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch097\/"/';
            $re_link = 'tv="460"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch097\/"/';
            $re_link = 'tv="460"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\SPORTTV5.png/";
            $res = preg_replace($preg_match, asset('images/tv/oWt8xVNkqARloy1s42bGPcElQ9gKHPFunnamed_(47).jpg'), $res);


            // -----------------------------------------

            // eir Sport 2
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch092\/"/';
            $re_link = 'tv="212"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch092\/"/';
            $re_link = 'tv="212"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\eirSport2.png/";
            $res = preg_replace($preg_match, asset('images/tv/zkn6cJdcZo4aPJmCbNH4itQU6oDTdf120180530141443469481198.jpg'), $res);


            // -----------------------------------------

            // BT Sport 1 HD
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch092\/"/';
            $re_link = 'tv="490"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch092\/"/';
            $re_link = 'tv="490"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\BTSport1HD.png/";
            $res = preg_replace($preg_match, asset('images/tv/UMY1eQ5LIdyg0FhK5dpZ64RUpqSc2UQunnamed_(22).jpg'), $res);


            // BT Sport 2 HD
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch092\/"/';
            $re_link = 'tv="489"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch092\/"/';
            $re_link = 'tv="489"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\BTSport2HD.png/";
            $res = preg_replace($preg_match, asset('images/tv/h4li8Rpho6BPLoH7BNqLW7PRvU79tXWunnamed_(23).jpg'), $res);


            // // BT Sport 3 HD
            // $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch092\/"/';
            // $re_link = 'tv="212"';
            // $res = preg_replace($find_link, $re_link, $res);
            // $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch092\/"/';
            // $re_link = 'tv="212"';
            // $res = preg_replace($find_link, $re_link, $res);

            // BT Sport ESPN
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch092\/"/';
            $re_link = 'tv="488"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch092\/"/';
            $re_link = 'tv="488"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\BTSportESPN.png/";
            $res = preg_replace($preg_match, asset('images/tv/buszOM1yHo8ELzzpdv06qa6FHBkWfEPunnamed_(24).jpg'), $res);


            // -----------------------------------------

            // MAX Norway
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/960\/"/';
            $re_link = 'tv="206"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/960\/"/';
            $re_link = 'tv="206"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\DiemaSport1.png/";
            $res = preg_replace($preg_match, asset('images/tv/k8vHdW9XKKXvVHsMt5EZRppkIV5qkhZ20180530142718729360509.jpg'), $res);


            // -----------------------------------------

            // Premier League Tv 1 ไทย
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/6\/"/';
            $re_link = 'tv="577"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/6\/"/';
            $re_link = 'tv="577"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\DiemaSport1.png/";
            $res = preg_replace($preg_match, asset('images/tv/WMGCwtC7DT23xhOajBIWPxzaRkFUgOx201805291636021996888202.jpg'), $res);


            // Premier League Tv 2 ไทย
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/7\/"/';
            $re_link = 'tv="578"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/7\/"/';
            $re_link = 'tv="578"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\DiemaSport1.png/";
            $res = preg_replace($preg_match, asset('images/tv/WMGCwtC7DT23xhOajBIWPxzaRkFUgOx201805291636021996888202.jpg'), $res);


            // -----------------------------------------

            // TrueSport HD 1
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch032\/"/';
            $re_link = 'tv="41"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch032\/"/';
            $re_link = 'tv="41"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\2sporthd1.png/";
            $res = preg_replace($preg_match, asset('images/tv/R6D9F8wNgrHPsIHhVm3O3wVPfnnK5iG201709061532521356829282.jpg'), $res);


            // TrueSport HD 2
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch033\/"/';
            $re_link = 'tv="40"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch033\/"/';
            $re_link = 'tv="40"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\2sporthd2.png/";
            $res = preg_replace($preg_match, asset('images/tv/FKkdLCfmqCjIFCA8ZW1s5IQRpmCgiIl20180620180245132451457.jpg'), $res);


            // TrueSport HD 3
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch034\/"/';
            $re_link = 'tv="39"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch034\/"/';
            $re_link = 'tv="39"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\2sporthd3.png/";
            $res = preg_replace($preg_match, asset('images/tv/e2KZGhjy3zHDKJle0ZNf7fdezLCEnuF201806201802541835515474.jpg'), $res);


            // -----------------------------------------

            // True Tennis HD
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch042\/"/';
            $re_link = 'tv="33"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch042\/"/';
            $re_link = 'tv="33"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\TrueSportTennis.png/";
            $res = preg_replace($preg_match, asset('images/tv/l1eDRDnYteaA7T48Ejctur373p9rvMb201709061543191545087050.jpg'), $res);


            // -----------------------------------------

            // NBA TV HD
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch043\/"/';
            $re_link = 'tv="30"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch043\/"/';
            $re_link = 'tv="30"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\nbatvtrue.png/";
            $res = preg_replace($preg_match, asset('images/tv/f1ssRQ2FNhSoU7dBh0QhAAoDiZ0wKhq201709061543561944494313.jpg'), $res);



            // -----------------------------------------

            // Golf Channel Thailand HD
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch044\/"/';
            $re_link = 'tv="32"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch044\/"/';
            $re_link = 'tv="32"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\GolfChannel.png/";
            $res = preg_replace($preg_match, asset('images/tv/fGD294kCwXLHoyA8KWoOWQ9dzRHbRVo20170906154345191916516.jpg'), $res);


            // -----------------------------------------

            // beIN Sports 1 Thailand ไทย
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch026\/"/';
            $re_link = 'tv="47"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch026\/"/';
            $re_link = 'tv="47"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\beinsporthd1.png/";
            $res = preg_replace($preg_match, asset('images/tv/y7QcQ2p2AumhB3HMEUNfvNWoYj9ISgV20171028102331578200226.jpg'), $res);


            // beIN Sports 2 Thailand ไทย
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch027\/"/';
            $re_link = 'tv="46"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch027\/"/';
            $re_link = 'tv="46"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\beinsporthd2.png/";
            $res = preg_replace($preg_match, asset('images/tv/mhsEzU1yIY6xRTSGbHzwd1F2BpwumDH20170906113000169511704.jpg'), $res);


            // beIN Sports 3 Thailand ไทย
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch028\/"/';
            $re_link = 'tv="45"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch028\/"/';
            $re_link = 'tv="45"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\beinsporthd3.png/";
            $res = preg_replace($preg_match, asset('images/tv/Ma276N4ark1iLTbss0KViCgsqi5yX8p20170906113020313561367.jpg'), $res);


            // beIN Sports 4 Thailand ไทย
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch029\/"/';
            $re_link = 'tv="44"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch029\/"/';
            $re_link = 'tv="44"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\beinsporthd4.png/";
            $res = preg_replace($preg_match, asset('images/tv/mXpT3jnzdw9beaI8rdoRo1OUxMVAtow201709061130381625720153.jpg'), $res);


            // beIN Sports 5 Thailand ไทย
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch030\/"/';
            $re_link = 'tv="43"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch030\/"/';
            $re_link = 'tv="43"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\beinsporthd5.png/";
            $res = preg_replace($preg_match, asset('images/tv/lqv4fExqX6xadI2xRUfc7G4V5fb29go2017090611304751410002.jpg'), $res);


            // beIN Sports 6 Thailand ไทย
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch031\/"/';
            $re_link = 'tv="42"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch031\/"/';
            $re_link = 'tv="42"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\beinsporthd6.png/";
            $res = preg_replace($preg_match, asset('images/tv/AX2TTYTTtG2bgDZTs9jqV38ZTj5bKwG201709061130581374368116.jpg'), $res);


            // -----------------------------------------

            // euro sport 1 uk
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch071\/"/';
            $re_link = 'tv="503"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch071\/"/';
            $re_link = 'tv="503"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\Eurosport1UK.png/";
            $res = preg_replace($preg_match, asset('images/tv/8mgLQi4rSLyKEXNsbt9KGJxVEwvshzwunnamed_(11).jpg'), $res);


            // euro sport 2 uk
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch072\/"/';
            $re_link = 'tv="502"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch072\/"/';
            $re_link = 'tv="502"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\Eurosport2UK.png/";
            $res = preg_replace($preg_match, asset('images/tv/cR3C8kF2gw4FIuKMRuaZ5i4Qqgtjsyxunnamed_(12).jpg'), $res);


            // -----------------------------------------

            // WWE (มวยปล้ำ)
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch259\/"/';
            $re_link = 'tv="495"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch259\/"/';
            $re_link = 'tv="495"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\wwe.png/";
            $res = preg_replace($preg_match, asset('images/tv/qkKzHaLxApD4ON6UHmEBhF49ynOQYVPunnamed_(53).jpg'), $res);


            // -----------------------------------------

            // SONY ESPN
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch075\/"/';
            $re_link = 'tv="491"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch075\/"/';
            $re_link = 'tv="491"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\SonyESPN.png/";
            $res = preg_replace($preg_match, asset('images/tv/65ZMPKq1f9tN59Chkz5u1lhWfrFn9rbunnamed.png'), $res);


            // -----------------------------------------

            // SONY SIX
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch076\/"/';
            $re_link = 'tv="492"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch076\/"/';
            $re_link = 'tv="492"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\SonySIX.png/";
            $res = preg_replace($preg_match, asset('images/tv/UQACuj6uRBNhPpSuGonjOUWt9FahemEunnamed_(19).jpg'), $res);


            // -----------------------------------------

            // Fox sports HD Thailand ไทย
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch045\/"/';
            $re_link = 'tv="28"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch045\/"/';
            $re_link = 'tv="28"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\FOXSportsHD.png/";
            $res = preg_replace($preg_match, asset('images/tv/uhBoC10q3iWbuXbnGeP1rUbbuTWjyk5unnamed_(2).jpg'), $res);


            // -----------------------------------------

            // TrueSport 2 ไทย
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch037\/"/';
            $re_link = 'tv="37"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch037\/"/';
            $re_link = 'tv="37"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\TrueSport2.png/";
            $res = preg_replace($preg_match, asset('images/tv/FKkdLCfmqCjIFCA8ZW1s5IQRpmCgiIl20180620180245132451457.jpg'), $res);


            // TrueSport 5 ไทย
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch039\/"/';
            $re_link = 'tv="36"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch039\/"/';
            $re_link = 'tv="36"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\TrueSport5.png/";
            $res = preg_replace($preg_match, asset('images/tv/nqkOwt3Z9PzzsPXcVWgJN9ZhnOFEQOc2017090615420988369591.jpg'), $res);


            // TrueSport 6 ไทย
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch040\/"/';
            $re_link = 'tv="35"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch040\/"/';
            $re_link = 'tv="35"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\TrueSport6.png/";
            $res = preg_replace($preg_match, asset('images/tv/0lYn2t7WLhlgHVpUcFHB8BmpWYiGsyc201709061542211674160551.jpg'), $res);


            // TrueSport 7 ไทย
            $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/ch041\/"/';
            $re_link = 'tv="34"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/ch041\/"/';
            $re_link = 'tv="34"';
            $re_link .= 'class="tv_onair"';
            $res = preg_replace($find_link, $re_link, $res);
            $preg_match = "/http:\/\/www.sine.tv\/\w.+\TrueSport7.png/";
            $res = preg_replace($preg_match, asset('images/tv/JWTQ3AwJ6RbWYsU0n1QTKrNljtfLMbL20170906154239231497542.jpg'), $res);



            // -----------------------------------------

            // // True Spark Jump ไทย
            // $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/1820\/"/';
            // $re_link = 'tv="435"';
            // $re_link .= 'class="tv_onair"';
            // $res = preg_replace($find_link, $re_link, $res);
            // $find_link = '/href="https:\/\/www.sine.tv\/tvonline\/1820\/"/';
            // $re_link = 'tv="435"';
            // $re_link .= 'class="tv_onair"';
            // $res = preg_replace($find_link, $re_link, $res);
            // $preg_match = "/http:\/\/www.sine.tv\/\w.+\DiemaSport1.png/";
            // $res = preg_replace($preg_match, asset('images/tv/WMGCwtC7DT23xhOajBIWPxzaRkFUgOx201805291636021996888202.jpg'), $res);


            // // True Music ไทย
            // $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/2010\/"/';
            // $re_link = 'tv="386"';
            // $re_link .= 'class="tv_onair"';
            // $res = preg_replace($find_link, $re_link, $res);
            // $preg_match = "/http:\/\/www.sine.tv\/\w.+\DiemaSport1.png/";
            // $res = preg_replace($preg_match, asset('images/tv/WMGCwtC7DT23xhOajBIWPxzaRkFUgOx201805291636021996888202.jpg'), $res);


            // // ThaiThai ไทย
            // $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/2020\/"/';
            // $re_link = 'tv="386"';
            // $re_link .= 'class="tv_onair"';
            // $res = preg_replace($find_link, $re_link, $res);
            // $preg_match = "/http:\/\/www.sine.tv\/\w.+\DiemaSport1.png/";
            // $res = preg_replace($preg_match, asset('images/tv/WMGCwtC7DT23xhOajBIWPxzaRkFUgOx201805291636021996888202.jpg'), $res);


            // // TNN2 ไทย
            // $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/2230\/"/';
            // $re_link = 'tv="206"';
            // $re_link .= 'class="tv_onair"';
            // $res = preg_replace($find_link, $re_link, $res);
            // $preg_match = "/http:\/\/www.sine.tv\/\w.+\DiemaSport1.png/";
            // $res = preg_replace($preg_match, asset('images/tv/WMGCwtC7DT23xhOajBIWPxzaRkFUgOx201805291636021996888202.jpg'), $res);


            // -----------------------------------------

            // // PPTV HD
            // $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/2630\/"/';
            // $re_link = 'tv="330"';
            // $re_link .= 'class="tv_onair"';
            // $res = preg_replace($find_link, $re_link, $res);
            // $preg_match = "/http:\/\/www.sine.tv\/\w.+\pptv.png/";
            // $res = preg_replace($preg_match, asset('images/tv/0nAmoOnmNgPtXE5wFvgHfU7SQ78VvSAunnamed_(27).jpg'), $res);


            // // PPTV HD Backup
            // $find_link = '/href="http:\/\/www.sine.tv\/tvonline\/2630\/"/';
            // $re_link = 'tv="330"';
            // $re_link .= 'class="tv_onair"';
            // $res = preg_replace($find_link, $re_link, $res);
            // $preg_match = "/http:\/\/www.sine.tv\/\w.+\pptv.png/";
            // $res = preg_replace($preg_match, asset('images/tv/0nAmoOnmNgPtXE5wFvgHfU7SQ78VvSAunnamed_(27).jpg'), $res);


            // -----------------------------------------

            return $res;
    }
}
