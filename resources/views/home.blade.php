<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

  <style>
    .container {
      border: 3px solid black;
      margin-bottom: 10px;
      padding-left: 20px;
    }

    .flex-column {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .post {
      background-color: gray;
      padding: 10px;
      margin: 10px;
    }

    .post-button {
      a {
        text-decoration: none;
        color: black;
      }
    }
  </style>
<body>
  @auth
    <div class="container">
      <h1>You are logged in!</h1>
      <form action="/logout" method="POST">
        @csrf
        <button>Log out</button>
      </form>
    </div>

    <div style="container">
      <h2>Create a new post!</h2>
      <form class="flex-column" action="/create-post" method="POST">
        @csrf
        <input type="text" placeholder="Title" name="title">
        <textarea name="body" placeholder="Type your message" cols="30" rows="10"></textarea>
        <button>Create Post</button>
      </form>
    </div>

    <div style="container">
      <h2>All Posts</h2>
      @foreach($posts as $post)
        <div class="post">
          <h3>{{ $post['title'] }}</h3>
          <p>{{ $post['body'] }}</p>
          <p>Publicado por {{ $post->user->name }}</p>
          <button class="post-button"><a href="/edit-post/{{ $post->id }}">Edit</a></button>
          <form action="/delete-post/{{ $post->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="post-button">Delete</button>
          </form>
        </div>
      @endforeach
    </div>
  @else
    <div class="container">
      <h2>Register</h2>
      <form action="/register" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <button>Register</button>
      </form>
    </div>
    <div class="container">
      <h2>Login</h2>
      <form action="/login" method="POST">
        @csrf
        <input type="text" name="login_name" placeholder="Name">
        <input type="password" name="login_password" placeholder="Password">
        <button>Login</button>
      </form>
    </div>
  @endauth
</body>
</html>