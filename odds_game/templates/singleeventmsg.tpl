<div class="ckcolum">
                        	<span>{{$event->team_mian_name}} VS {{$event->team_sec_name}}</span>
                            <ul>
                            {{foreach $betStatistics as $key=>$betStatistic}}
                            	<li><font class="{{if $betStatistic->odds_name == '胜'}}bold11{{elseif $betStatistic->odds_name == '平'}}bold12{{else}}bold13{{/if}}">{{$betStatistic->odds_name}}</font> <p>共 {{$betStatistic->sumUser}} 人购买&nbsp;&nbsp;总金额{{$betStatistic->sumVmoney}}</p></li>
                            {{/foreach}}
                            </ul>
                           
                        </div>