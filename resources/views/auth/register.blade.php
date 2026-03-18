<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">

<form method="POST" action="/register" class="bg-white p-6 rounded shadow w-96">
    @csrf

    <h2 class="text-2xl mb-4">Register</h2>

    <input name="name" placeholder="Name" class="w-full mb-3 p-2 border"><br>
    <input name="email" placeholder="Email" class="w-full mb-3 p-2 border"><br>
    <input type="password" name="password" placeholder="Password" class="w-full mb-3 p-2 border"><br>
    <input type="password" name="password_confirmation" placeholder="Confirm Password" class="w-full mb-3 p-2 border"><br>

    <button class="bg-blue-500 text-white px-4 py-2 w-full">Register</button>
</form>

</body>
</html>