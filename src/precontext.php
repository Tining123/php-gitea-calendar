<?php

$color_set = Array();
$color_set[0] = 'var(--color-calendar-graph-day-bg)';
$color_set[1] = 'var(--color-calendar-graph-day-L1-bg)';
$color_set[2] = 'var(--color-calendar-graph-day-L2-bg)';
$color_set[3] = 'var(--color-calendar-graph-day-L3-bg)';
$color_set[4] = 'var(--color-calendar-graph-day-L4-bg)';

function output($color_array, $color_set){

    $prefix = '<div class="calendar">
<div class="border py-2 graph-before-activity-overview">
    <div class="js-calendar-graph mx-md-2 mx-3 d-flex flex-column flex-items-end flex-xl-items-center overflow-hidden pt-1 is-graph-loading graph-canvas calendar-graph height-full text-center" data-graph-url="/users/IonicaBizau/contributions?to=2021-01-27" data-url="/IonicaBizau" data-from="2020-01-26 00:00:00 UTC" data-to="2021-01-27 23:59:59 UTC" data-org="">
        <svg width="100%" class="js-calendar-graph-svg" viewBox="0 0 722 112">
        <g transform="translate(10, 20)" data-hydro-click="{&quot;event_type&quot;:&quot;user_profile.click&quot;,&quot;payload&quot;:{&quot;profile_user_id&quot;:2864371,&quot;target&quot;:&quot;CONTRIBUTION_CALENDAR_SQUARE&quot;,&quot;user_id&quot;:null,&quot;originating_url&quot;:&quot;https://github.com/users/IonicaBizau/contributions&quot;}}" data-hydro-click-hmac="c29bb84527b62dafc7ab4208ed2db21ea4195839d541da829d109a8d172bee42">
        ';
$postfix = '</g></svg>
</div>
<div class="contrib-footer clearfix mt-1 mx-3 px-3 pb-1">
    <div class="contrib-legend text-gray" title="A summary of pull requests, issues opened, and commits to the default and gh-pages branches.">
    Less
        <ul class="legend">
            <li style="background-color: var(--color-calendar-graph-day-bg)"></li>
            <li style="background-color: var(--color-calendar-graph-day-L1-bg)"></li>
            <li style="background-color: var(--color-calendar-graph-day-L2-bg)"></li>
            <li style="background-color: var(--color-calendar-graph-day-L3-bg)"></li>
            <li style="background-color: var(--color-calendar-graph-day-L4-bg)"></li>
        </ul>
    More
    </div>
</div>
</div>
</div>
';

    $translate_x = 0;
    $x = 14;
    $length = count($color_array);
    $str = "";
    for ($i=0; $i<$length; $i = $i+7)
    {
		$str = $str.'<g transform="translate('.$translate_x .', 0)">';
		
        $str = $str.'<rect class="day" width="10" height="10" x="'.$x.'" y="0" fill="'.$color_set[$color_array[$i]].'"></rect>';
        if($i + 1 >= $length)
        {
            break;
        }
        $str = $str.'<rect class="day" width="10" height="10" x="'.$x.'" y="13" fill="'.$color_set[$color_array[$i+1]].'"></rect>';
        if($i + 2 >= $length)
        {
            break;
        }
        $str = $str.'<rect class="day" width="10" height="10" x="'.$x.'" y="26" fill="'.$color_set[$color_array[$i+2]].'"></rect>';
        if($i + 3 >= $length)
        {
            break;
        }
        $str = $str.'<rect class="day" width="10" height="10" x="'.$x.'" y="39" fill="'.$color_set[$color_array[$i+3]].'"></rect>';
        if($i + 4 >= $length)
        {
            break;
        }
        $str = $str.'<rect class="day" width="10" height="10" x="'.$x.'" y="52" fill="'.$color_set[$color_array[$i+4]].'"></rect>';
        if($i + 5 >= $length)
        {
            break;
        }
        $str = $str.'<rect class="day" width="10" height="10" x="'.$x.'" y="65" fill="'.$color_set[$color_array[$i+5]].'"></rect>';
        if($i + 6 >= $length)
        {
            break;
        }
		$str = $str.'<rect class="day" width="10" height="10" x="'.$x.'" y="78" fill="'.$color_set[$color_array[$i+6]].'"></rect>';
		
		$str = $str.'</g>';
		
	    $translate_x = $translate_x + 14;
	    $x = $x-1;
		
    }
    return $prefix.$str.$postfix;
}
