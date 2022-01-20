<div class="container section-marginTop text-center">
    <h1 class="section-title">কোর্স সমূহ </h1>
    <h1 class="section-subtitle">আইটি কোর্স, প্রজেক্ট ভিত্তিক সোর্স কোড সহ আরো যে সকল সার্ভিস আমরা প্রদান করি </h1>
    <div class="row">

        @foreach($CoursesData as $CoursesData)
        <div class="col-md-4 thumbnail-container">
                <img src="{{$CoursesData->course_img}}" alt="Avatar" class="thumbnail-image ">
                <div class="thumbnail-middle">
                    <h1 class="thumbnail-title m-0 pb-1" style="font-size:15px; width:150px;">{{ $CoursesData->course_name}}</h1>
                    <h4 class="thumbnail-subtitle m-0">{{ $CoursesData->course_des}}</h4>
                    <h4 class="thumbnail-subtitle m-0 py-1">{{ $CoursesData->course_fee}} | {{ $CoursesData->course_totalenroll}} | {{ $CoursesData->course_totalclass}}</h4>
                    <a target="_blank" href="{{$CoursesData->course_link}}" class="normal-btn btn">শুরু করুন</a>
                </div>
        </div>
        @endforeach
    </div>
</div>