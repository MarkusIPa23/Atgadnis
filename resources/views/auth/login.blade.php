<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">

<form method="POST" action="/login" class="bg-white p-6 rounded shadow w-96">
    @csrf

    <h2 class="text-2xl mb-4">Login</h2>

    <input name="email" placeholder="Email" class="w-full mb-3 p-2 border"><br>
    <input type="password" name="password" placeholder="Password" class="w-full mb-3 p-2 border"><br>

    <button class="bg-green-500 text-white px-4 py-2 w-full">Login</button>
</form>

</body>
</html>