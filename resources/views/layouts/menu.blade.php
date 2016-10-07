



<li class="treeview class="{{ Request::is('locations*') ? 'active' : '' }}"">
<a href="#"><span>Location</span> <i class="fa fa-angle-left pull-right"></i></a>
	<ul class="treeview-menu">
	<li><a href="{!! route('locations.index') !!}"><i class="fa fa-edit"></i><span>Locations</span></a></li>
	<li><a href="{!! route('locations.create') !!}"><i class="fa fa-edit"></i><span>New Location</span></a></li>
	</ul>
</li>




