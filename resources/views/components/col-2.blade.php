<div class="row no-margin no-gutter pl-md-1 pr-md-1">
	<!-- SCHOOL INFO -->
	<div class="col-12 order-md-2 no-padding  border-primary  mb-1">
		<div class="school-header bg-primary w-100">
			<a id="school-collapse" class="text-center text-md-left collapse-link {{ setting('collapse.school-info') ? 'collapsed':'' }}" href="#school-info"
			    data-toggle="collapse" aria-expanded="false" aria-controls="gsuit">
				<div class="row">
					<div class="col-10 ">
						<span class="school-header__span">SCHOOL INFO:</span> Sign-in to view
					</div>
					<div class="col-2 d-flex justify-content-center align-items-center">
						<i class="fa fa-chevron-right"></i>
						<i class="fa fa-chevron-down"></i>
					</div>
				</div>
			</a>
		</div>
		<div id="school-info" class="collapse-block collapse show {{ setting('collapse.school-info') ? '':'show' }}">
			<div class="school-body bg-gray h-100 d-flex justify-content-center align-content-center">
				<div class="school-list">
					@php 
						$hiddenSchoolInformations = $schoolInformations->splice(18); 
					@endphp 
					@foreach($schoolInformations as $schoolInformation)
						@if($loop->iteration == 13)
							@php
								$md_school = true;
							@endphp
							<span class="hide-md-collapse">
						@endif
					<a class="school-list__item mt-1 text-center" target="_blank" href="{{$schoolInformation->link}}">
						<img class="school-list__item__image" src="{{Voyager::image($schoolInformation->image)}}" alt="">
						<p class="school-list__item__text color-gray ">{{$schoolInformation->text}}</p>
					</a>
					@endforeach
					@if(isset($md_school))
						</span>
					@endif

					<span id="hidden-school-icons" class="collapse">
						@foreach($hiddenSchoolInformations as $hiddenSchoolInformation)
						<a class="school-list__item mt-1 text-center" target="_blank" href="{{$hiddenSchoolInformation->link}}">
							<img class="school-list__item__image" src="{{Voyager::image($hiddenSchoolInformation->image)}}" alt="">
							<p class="school-list__item__text color-gray ">{{$hiddenSchoolInformation->text}}</p>
						</a>
						@endforeach
					</span>
				</div>
			</div>
			<div class="school-footer bg-white w-100 text-right d-none d-md-block">
				<a class="more-less more-less-school collapsed" href="#hidden-school-icons" data-toggle="collapse" aria-expanded="false">
					<span class="more">More Docs</span>
					<span class="less">Less Docs</span>
					<i class="fa fa-chevron-right"></i>
					<i class="fa fa-chevron-down"></i>
				</a>
			</div>
		</div>
	</div>
	<!-- GSUIT -->
	<div class="col-12 order-md-1 no-padding border-primary mb-1">
		<div class="gsuit-header bg-primary w-100">
			<a class="text-center text-md-left collapse-link {{ setting('collapse.g-suite') ? 'collapsed':'' }}" href="#gsuit" data-toggle="collapse"
			    aria-expanded="false" aria-controls="gsuit">
				<div class="row">
					<div class="col-10">
						<span class="gsuit-header__span">G-SUITE:</span>Launch apps here
					</div>

					<div class="col-2 d-flex justify-content-center align-items-center">
						<i class="fa fa-chevron-right"></i>
						<i class="fa fa-chevron-down"></i>
					</div>
				</div>
			</a>
		</div>
		<div id="gsuit" class="collapse-block collapse show {{ setting('collapse.g-suite') ? '':'show' }}">
			<div class="gsuit-body bg-gray h-100">
				<div class="gsuit-list">
					@php 
						$hiddenGsuites = $gsuites->splice(12); 
					@endphp 
					@foreach($gsuites as $gsuite)
						
					<a class="gsuit-list__item mt-1 text-center" target="_blank" href="{{$gsuite->link}}">
						<img class="gsuit-list__item__image" src="{{Voyager::image($gsuite->image)}}" alt="">
						<p class="gsuit-list__item__text color-gray ">{{$gsuite->text}}</p>
					</a>
					@endforeach

					<span id="hidden-gsuit-icons" class="collapse">
						@foreach($hiddenGsuites as $hiddenGsuite)
						<a class="gsuit-list__item mt-1 text-center" target="_blank" href="{{$hiddenGsuite->link}}">
							<img class="gsuit-list__item__image" src="{{Voyager::image($hiddenGsuite->image)}}" alt="">
							<p class="gsuit-list__item__text color-gray ">{{$hiddenGsuite->text}}</p>
						</a>
						@endforeach
					</span>
				</div>
			</div>
			<div class="gsuit-footer bg-white w-100 text-right d-none d-md-block">
				<a class="more-less collapsed" href="#hidden-gsuit-icons" data-toggle="collapse" aria-expanded="false">
					<span class="more">More Apps</span>
					<span class="less">Less Apps</span>
					<i class="fa fa-chevron-right"></i>
					<i class="fa fa-chevron-down "></i>
				</a>
			</div>
		</div>

	</div>

</div>