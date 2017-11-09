<div class="row no-margin no-gutter pl-md-1 pr-md-1">
	<!-- SCHOOL INFO -->
	<div class="col-12 order-md-2 no-padding  border-primary  mb-1">
		<div class="school-header bg-primary w-100">
			<a class="text-center text-md-left collapse-link {{ setting('collapse.school-info') ? 'collapsed':'' }}" href="#school-info" data-toggle="collapse" aria-expanded="false" aria-controls="gsuit">
				<span class="school-header__span">
					SCHOOL INFO:
				</span>
				Sign-in to view
				<span class="float-right mr-3">
					<i class="fa fa-chevron-right"></i>
					<i class="fa fa-chevron-down"></i>
			</a>
			</span>
		</div>
		<div id="school-info" class="collapse {{ setting('collapse.school-info') ? '':'show' }}">
			<div class="school-body bg-gray h-100">
				<div class="school-list">
					@php 
						$hiddenSchoolInformations = $schoolInformations->splice(15); 
					@endphp 
					@foreach($schoolInformations as $schoolInformation)
					<a class="school-list__item mt-1 text-center" target="_blank" href="{{$schoolInformation->link}}">
						<img class="school-list__item__image" src="{{Voyager::image($schoolInformation->image)}}" alt="">
						<p class="school-list__item__text color-gray ">{{$schoolInformation->text}}</p>
					</a>
					@endforeach

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
				<a class="collapsed" href="#hidden-school-icons" data-toggle="collapse" aria-expanded="false">
					More Docs
					<i class="fa fa-chevron-right"></i>
					<i class="fa fa-chevron-down"></i>
				</a>
			</div>
		</div>
	</div>
	<!-- GSUIT -->
	<div class="col-12 order-md-1 no-padding border-primary mb-1">
		<div class="gsuit-header bg-primary w-100">
			<a class="text-center text-md-left collapse-link {{ setting('collapse.g-suite') ? 'collapsed':'' }}" href="#gsuit" data-toggle="collapse" aria-expanded="false" aria-controls="gsuit">
				<span class="gsuit-header__span">
					G-SUITE:
				</span>
				Launch apps here
				<span class="float-right mr-3">
					<i class="fa fa-chevron-right"></i>
					<i class="fa fa-chevron-down"></i>
			</a>
			</span>
		</div>
		<div id="gsuit" class="collapse {{ setting('collapse.g-suite') ? '':'show' }}">
			<div class="gsuit-body bg-gray h-100">
				<div class="gsuit-list">
					@php 
						$hiddenGsuites = $gsuites->splice(8); 
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
				<a class="collapsed" href="#hidden-gsuit-icons" data-toggle="collapse" aria-expanded="false">
					More Apps
					<i class="fa fa-chevron-right"></i>
					<i class="fa fa-chevron-down "></i>
				</a>
			</div>
		</div>

	</div>

</div>