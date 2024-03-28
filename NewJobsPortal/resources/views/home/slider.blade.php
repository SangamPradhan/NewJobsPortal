
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title text-center">
                    <h2>Featured Jobs <small>Lorem ipsum dolor sit amet.</small></h2>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($data as $job)
                <div class="col-md-4 col-sm-4">
                    <div class="courses-thumb courses-thumb-secondary">
                        <!-- Job details here -->
                        <div class="courses-top">

                                <div class="courses-image">
                                    <img src="product/{{$job->photo}}" width="80%" height="80%" class="img-responsive" alt="">
                                </div>
                                <div class="courses-date">
                                    <span title="Posted on"><i class="fa fa-calendar"></i> {{$job->deadline}}</span>
                                    <span title="Location"><i class="fa fa-map-marker"></i> {{$job->location}}</span>
                                    <span title="Type"><i class="fa fa-file"></i> {{$job->type}}</span>
                                </div>
                            </div>

                            <div class="courses-detail">
                                <h3><a href="{{ url('/job_details', $job->id) }}">{{$job->title}}</a></h3>

                                <p class="lead"><strong>Rs. {{$job->salary}}</strong></p>

                                <p>{{$job->title}} in <strong>{{$job->location}} | {{$job->type}}</strong></p>
                            </div>

                            <div class="courses-info">
                                <a href="{{ url('/job_details', $job->id) }}" class="section-btn btn btn-primary btn-block">View Details</a>
                            </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col-md-12">
                {{--  {{ $data->links() }}  --}}

            </div>
        </div>

    </div>
</section>
