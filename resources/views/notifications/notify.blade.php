@if(@count($notify_list) > 0)
	@foreach($notify_list as $rows)

	@if($rows->params > 0)

		@php($notify_route = route($rows->route,['id' => encrypt($rows->params)]))
	@else
		@php($notify_route = route($rows->route))
	@endif
	<a onclick="seenNotification(event,this,'{{encrypt($rows->id)}}')" href="{{$notify_route}}" class="navi-item p-0 text-dark" style="font-size: 13px; font-weight:lighter;">
	    <div class="navi-link mb-4" style="clear:both;">
	        <div class="navi-icon mr-2" style="float:left !important; width: 20px;">
	            <i class="flaticon-chat-1 text-success"></i>
	        </div>
	        <div class="navi-text" style="float:right !important; width:100%;">
	            <div class="font-weight-bold">{{$rows->message}}</div>
	            <div class="text-muted">{{$rows->created_at->diffForHumans()}}</div>
	        </div>
	    </div>
    </a>
	<div class="dropdown-divider"></div>
	@endforeach
@else
<a href="#" class="navi-item" >
    <div class="navi-link mb-4" style="clear:both;">
	        <div class="navi-icon mr-2" style="float:left !important; width: 20px;">
	            <i class="flaticon-chat-1 text-success"></i>
	        </div>
	        <div class="navi-text" style="float:right !important; width:90%;">
	            <div class="font-weight-bold">No record found.</div>
	        </div>
	    </div>
</a>
@endif