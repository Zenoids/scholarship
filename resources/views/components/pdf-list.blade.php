@props(['key','value'])
{{-- <div class="row">

</div>
<div class="col-2"> {{$key}} </div><div class="col-10"> {{$value}}</div> --}}


<li class="list-group-item-text" >
    <span class="text-left">{{$key}}:</span>

    <span class="text-right"><b>
        {{$value}}
        </b>
    </span>
</li>
