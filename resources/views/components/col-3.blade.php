<div class="h-100 border-primary bg-gray">
	@foreach($sidebars as $sidebar)
	<div class="accordion {{ (!$loop->last) ? 'mb-1': '' }}">
		<div class="accordion__header bg-primary">
			<a data-toggle="collapse" href="#collapse-id-{{$sidebar->id}}" aria-expanded="true" class="text-center text-md-left collapsed">
				<span class="accordian__hearder__text">
					{{ $sidebar->text }}
				</span>
				<span class="float-right mr-3">
					<i class="fa fa-chevron-right"></i>
					<i class="fa fa-chevron-down"></i>
				</span>
			</a>
		</div>
		<div id="collapse-id-{{$sidebar->id}}" class="collapse accordion__list">
			@foreach($sidebar->links as $link)
			<div class="accordion__list__item border-top-primary">
				<a href="{{ $link->link ? $link->link :'#' }}">
					<i class="fa {{$link->font_class}}"></i> &nbsp; {{ $link->text }}
				</a>
			</div>
			@endforeach
		</div>
	</div>
	@endforeach 
</div>