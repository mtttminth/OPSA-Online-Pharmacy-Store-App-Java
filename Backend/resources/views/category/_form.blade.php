<div class="card">
    <div class="card-header">
        {{$title}}
    </div>
    <div class="card-body">
        <form action="{{ $action==='create'?route('category.store'):route('category.update',$category->id)}}"
              method="POST">
            @csrf
            @if($action==='update')
                @method('PUT')
            @endif
            <div class="form-group">
                <label for="name">NAME</label>
                <input type="text" name="name" value="{{old('name')??$category->name}}" class="form-control @error('name') is-invalid @enderror" id="name">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">DESCRIPTION</label>
                <textarea rows="3" name="description" class="form-control @error('description') is-invalid @enderror"
                          id="description">{{ old('description')??$category->description}}</textarea>
                @error('description')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            

            <button type="submit"
                    class="btn btn-block btn-primary">{{ $action==='create'? "ADD CATEGORY":"UPDATE CATEGORY" }}</button>
        </form>
    </div>
</div>