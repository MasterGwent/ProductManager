<html>
<head>
    <title>Laravel 8 Form Example Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header text-center font-weight-bold">
            Laravel 8 - Add Blog Post Form Example
        </div>
        <div class="card-body">
            <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('products')}}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" id="title" name="name" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Article</label>
                    <textarea name="article" class="form-control" required=""></textarea>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select id="status" name="status" class="form-control" required="">
                        <option value="available">Available</option>
                        <option value="unavailable">Unavailable</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="data_color">Color</label>
                    <input type="text" id="data_color" name="data[color]" class="form-control" value="{{ old('data.color') }}" required>
                </div>

                <div class="form-group">
                    <label for="data_size">Size</label>
                    <input type="text" id="data_size" name="data[size]" class="form-control" value="{{ old('data.size') }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
