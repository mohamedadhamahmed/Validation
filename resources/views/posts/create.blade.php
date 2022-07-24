<h1>Create post</h1>
<br>
    <br>

<form  action="{{route('posts.store')}}" method="post">
    @method('Post')
    @csrf
    <input type="text" name='title' placeholder=" Enter Title" value="{{old('title')}}">
    <br>
    <br><input type="text" name='body' placeholder=" Enter Title"  value="{{old('body')}}">
    <br>
    <br>
<button type="submit">submit</button>

</form>



@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif