@extends('frontend.layouts.app')

@section('content')


	<!-- gallery -->
	<section class="p-t-30 p-b-20">
		<div class="container ">
			<h1 class="custom-header">Image Gallery</h1>
			

			<div class="row gallery text-center">

                @foreach ($images as $image)
				<a href="{{$image->image_path}}" data-lightbox="category-{{$image->id}}" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
					<img src="{{$image->image_path}}" width="320" class="img-fluid rounded m-b-30" style="height: 250px;">
				</a>                    
                @endforeach



				<!-- START:: PAGINATION -->
				<nav class="global-pagination col-12 d-flex justify-content-center" aria-label="Page navigation example">
					<ul class="pagination">
						{!! $images->links() !!}
					</ul>
				</nav>
				<!-- END:: PAGINATION -->

			</div>

		</div>
	</section>
	<!-- end gallery -->

	<!-- video -->
	<section class="p-b-30 p-t-20">
		<h1 class="custom-header">Video Gallery</h1>

		<div class="container">

			<div class="row videoContain">

				@foreach ($videos as $video)
				<div class="video-container col-md-4">
					<div class="responsive-video">
						<iframe src="{{$video->embeded_link()}}?rel=0&amp;showinfo=0" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
					</div>
				</div>					
				@endforeach



				<!-- START:: PAGINATION -->
				<nav class="global-pagination col-12 d-flex justify-content-center" aria-label="Page navigation example">
					<ul class="pagination">
						{!! $videos->links() !!}

					</ul>
				</nav>
				<!-- END:: PAGINATION -->

			</div>

		</div>




	</section>
	<!-- end video -->


@endsection
