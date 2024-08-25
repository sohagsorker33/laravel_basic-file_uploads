 <x-layout title="Normal_from">
   <h3>Normal From</h3>
@csrf
<form action="{{route('post.from')}}" method="post" enctype="multipart/form-data">
    <label>username</label>
     <input type="text" name="username">
    <label>email</label>
    <input type="email" name="email">
    <label>Photo</label>
    <input type="file" name="photo">
    <button type="submit" class="btn btn-success">submit</button>
    <p>
      @if(session('photo'))
      <img src="{{session('photo')}}" alt="">
      @endif
    </p>
    <p>{{session('success')}}</p>
    <p>{{session('username')}}</p>
    <p>{{session('email')}}</p>
</form>
 </x-layout>