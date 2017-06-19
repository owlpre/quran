<a class="toggle" href="javascript:">alquran</a>
<div class="content" style="display: none;">
    @foreach ($indexs as $i => $_indexs)
        <div>
            <a class="toggle" href="javascript:">{{
                $suras->where('id', $i)->first()->id.". ".
                $suras->where('id', $i)->first()->translation()
            }}</a>
            <div class="content" style="display: none;">
                @foreach ($_indexs as $_i)
                    <div>
                        <a class="toggle" href="javascript:">{{
                            $suras->where('id', $_i)->first()->id.". ".
                            $suras->where('id', $_i)->first()->translation()
                        }}</a>
                        <div class="content" style="display: none;">
                            @for ($__i = 1;$__i <= 5;$__i++)
                                <div>{{
                                    $suras->where(
                                        'id', $_i + $__i
                                    )->first()->id.". ".
                                    $suras->where(
                                        'id', $_i + $__i
                                    )->first()->translation()
                                }}</div>
                            @endfor
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
</div>
