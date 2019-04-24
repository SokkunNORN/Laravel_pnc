
@extends('pages.blog')
@section('content')

<div class="container mt-4">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card shadow-sm">
                <div class="card-header">
                    <div class="row">
                        <div class="col-3">
                            <a href="{{url('comments')}}" title="Go back" class="text-primary">
                                <i class="material-icons">arrow_back</i>
                            </a>
                        </div>
                        <div class="col-6 text-center">
                            <h4>Add Comment</h4>
                        </div>
                        <div class="col-3"></div>
                    </div>
                </div> {{-- end card-header --}}
                <div class="card-body">

                    <form action="{{route('comments.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <textarea placeholder="Comment" name="body" 
                                style="resize: none;" 
                                cols="30" 
                                rows="10"
                                class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block">
                                Add Comment
                            </button>
                        </div>
                    </form>

                </div> {{-- end card body --}}
            </div> {{-- end card --}}
        </div>
        <div class="col-3"></div>
    </div>
</div>

@endsection