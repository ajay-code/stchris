<div class="h-100 border-primary bg-gray">
	@foreach($sidebars as $sidebar)
	<div class="accordion {{ (!$loop->last) ? 'mb-1': '' }}">
		<div class="accordion__header bg-primary">
			<a data-toggle="collapse" href="#collapse-id-{{$sidebar->id}}" aria-expanded="true" class="text-center text-md-left collapsed">
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