<div class="wrapper wrapper-content animated fadeInRight">

    <div class="row">
        @foreach ($tours as $tour )
        <div class="col-md-3">
            <div class="ibox">
                <div class="ibox-content product-box">

                    <div class="product-imitation " style="padding:0" >

                        @if($tour->images->isNotEmpty())
                        <img src="{{ $tour->images->first()->thumbnail }}" style="width: 100%;"alt="Image for {{ $tour->title }}">
                        @else
                        [ INFO ]
                        @endif
                    </div>
                    <div class="product-desc">
                        <span class="product-price">
                            ${{$tour->price}}
                        </span>
                        <small class="text-muted">Tour for night</small>
                        <a href="#" class="product-name">{{$tour->title}}</a>



                        <div class="small m-t-xs">
                        {{ Str::limit(strip_tags($tour->description), 100, '...') }}

                        </div>
                        <div class="m-t text-righ">

                            <a href="{{route('admin.tour.edit',['id'=>$tour->id])}}" class="btn btn-xs btn-outline btn-primary">Edit <i class="fa fa-long-arrow-right"></i> </a>
                           
                            <a data-toggle="modal" style="float: right;" class="btn btn-xs btn-outline btn-danger modal-form-02" href="#modal-form-02" data-id="{{ $tour->id }}"
                            data-title="{{ $tour->title }}"><i class="fa fa-trash" style="font-size: 16px;padding-top: 5px;padding-left: 5px; padding-right: 5px;"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endforeach



    </div>




</div>