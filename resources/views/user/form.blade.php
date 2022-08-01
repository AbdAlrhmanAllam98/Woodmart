<div class="form-group"> 
    <label for="email">Email</label>
    <input type="text" name="email" value="{{old('email')}}" class="form-control">
    <div class="@if($errors->has('email') ) alert alert-danger mt-2 @endif">{{ $errors->first('email') }}</div>
</div>
<div class="form-group"> 
    <label for="password">Password</label>
    <input type="password" name="password" value="{{old('password')}}" class="form-control">
    <div class="@if($errors->has('password') ) alert alert-danger mt-2 @endif">{{ $errors->first('password') }}</div>
</div>