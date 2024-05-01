<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  <style>
    .flex-column {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }
  </style>
</head>
<body>
  <h1>Edit Post</h1>
  <form class="flex-column" action="/edit-post/{{ $post->id }}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ $post->title }}">
    <textarea name="body" cols="30" rows="10">{{ $post->body }}</textarea>
    <button>Save Changes</button>
  </form>
</body>
</html>