<div class="filter-wrapper">
            <div class="uk-flex-space-between uk-flex-middle uk-flex">
                <div class="perpage">
                    <select name="perpage" id="" class="form-control input-sm perpage filter mr10">
                        @for($i=20;$i<=200;$i=$i+20) <option value='{{$i}}'>{{$i}} ban ghi</option>
                            @endfor
                    </select>


                </div>
                <div class="action">
                    <div class="uk-flex uk-flex-middle">
                        <select name="user_catalogue_id" id="" class="form-control  mr10">
                            @for($i=20;$i<=200;$i++) <option value='{{$i}}'>{{$i}} ban ghi</option>
                                @endfor
                        </select>
                        <div class="uk-search uk-flex uk-flex-middle mr10">
                            <div class="input-group">
                                <input type="text" name="Keyword" placeholder="Enter search keyword" class="input-sm form-control">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-sm btn-primary"> Search!</button>
                                </span>
                            </div>
                        </div>
                        <a href="{{route('admin.user.create')}}" class="btn btn-primary"><i class="fa fa-plus mr5"></i>Add new Tours</a>
                    </div>
                </div>
            </div>
        </div>