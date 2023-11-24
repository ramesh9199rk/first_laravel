<!-- input.blade.php -->
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">{{$label}}</label>
    
    @if($type === 'radio')
        <div class="form-check">
            <input class="form-check-input" type="radio" name="{{$name}}" >
            <!-- <label class="form-check-label" >
                {{$label}}
            </label> -->
        </div>
    @else
        <input type="{{$type}}" class="form-control" name="{{$name}}"  aria-describedby="emailHelp" {{$attributes}}>
    @endif

    @error($name)
        <span class="text-danger">
            {{$message}}
        </span>
    @enderror
</div>
