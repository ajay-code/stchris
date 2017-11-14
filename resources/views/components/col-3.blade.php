<div class="h-100 border-primary bg-gray">
	@foreach($sidebars as $sidebar)
		@php
			$name = $sidebar->name;
			$name = strtolower($name);
			$name = str_replace(' ', '_', $name);
			$collapse = setting("sidebar.{$name}");
		@endphp
	<div class="accordion {{ (!$loop->last) ? 'mb-1': '' }}">
		<div class="accordion__header bg-primary">
			<a data-toggle="collapse" href="#collapse-id-{{$sidebar->id}}" aria-expanded="true" class="text-center text-md-left collapse-link {{ $collapse ? 'collapsed': '' }}">
					<div class="row">
						<div class="col-10 accordian__hearder__text">
							{{ $sidebar->text }}
						</div>
						<div class="col-2 d-flex justify-content-center align-items-center">
							<i class="fa fa-chevron-right"></i>
							<i class="fa fa-chevron-down"></i>
						</div>
					</div>
			</a>
		</div>
		<div id="collapse-id-{{$sidebar->id}}" class="collapse-block collapse {{ $collapse ? '': 'show' }} accordion__list">
			@foreach($sidebar->links as $link)
			<div class="accordion__list__item border-top-primary">
					<a href="{{ $link->link ? $link->link :'#' }}" class="">
						<i class="fa {{$link->font_class}}" style="color: {{$link->font_color}}"></i>
						{{ $link->text }}
						@if($link->new)
							<span class="badge badge-pill badge-primary ml-auto">NEW</span>
						@endif
					</a>
			</div>
			@endforeach
		</div>
	</div>
	@endforeach 
</div>