<x-bootstrap title="Edit staff">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="py-4">
                <a class="btn btn-primary" href="{{ route('staff.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('staff.update', $staff->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="row g-4">
            <div class="col-md-12">
                <strong>name: <span class="text-danger">*</span> </strong>
                <input type="text" name="name" class="form-control" value="{{ $staff->title }}" required>
            </div>
            <div class="col-md-12">
                <strong>salary: <span class="text-danger">*</span> </strong>
                <input type="number" name="salary" class="form-control" value="{{ $staff->price }}" required>
            </div>
            <div class="col-md-12">
                <strong>Photo: </strong>
                <input type="file" name="photo" class="form-control" value="{{ $staff->photo }}" >
                <img src="{{ $staff->photo }}" height="150" />
            </div>
            <div class="col-md-12">
                <strong>Content:</strong>
                <textarea class="form-control" style="height:150px" name="content" > {{ $staff->content }}</textarea>
            </div>
            <div class="col-md-12">
                <strong>Stock: </strong>
                <input type="number" name="stock" class="form-control" value="{{ $staff->stock }}">
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>


    </form>
</x-bootstrap>