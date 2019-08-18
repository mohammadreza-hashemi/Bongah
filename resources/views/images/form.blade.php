 @inject('inject' ,'App\Http\Utilities\country')
{{ csrf_field() }}
    
    <hr>
    <div class="form-group">
        <div>
            <label  class="col-md-3 ">Strite</label>
        </div>
        <input class="form-control" name="strite" value="{{old('strite')}}">
    </div>
    
    <div class="form-group">
        <div>
            <label class="col-md-3 ">City</label>
        </div>
        <input class="form-control" name="city" value="{{old('city')}}">
    </div>
    
    <div class="form-group">
        <div>
            <label class="col-md-3 ">Post Code</label>
        </div>
        <input class="form-control" name="zip" value="{{old('zip')}}">
    </div>
    <div class="form-group">
        <div>
            <label class="col-md-3 ">Country</label>
        </div>
        <select class="form-control" name="country">
            @foreach($inject::all() as $country )
            <option value="{{ $country }}">{{ $country }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <div>
            <label class="col-md-3 ">State</label>
        </div>
        <input class="form-control" name="state" value="{{old('state')}}">
    </div>
    <div class="form-group">
        <div>
            <label class="col-md-3 ">price:</label>
        </div>
        <input class="form-control" name="price" value="{{old('price')}}">
    </div>
    <div class="form-group">
        <div>
            <label class="col-md-3 ">description</label>
        </div>
        
        <textarea name="description" rows="5" class="form-control" placeholder="description about your home"> 
            {{old('description')}}
        </textarea>
    </div>
    
    
    <hr>
    
    
    <button class="btn btn-primary" name="btn" type="submit" id="btn">Create Banner</button>
   