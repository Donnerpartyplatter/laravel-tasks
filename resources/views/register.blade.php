<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
</head>
<body>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form action="/register" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" required><br>

        <label for="school">School:</label>
        <select id="school" name="school" required>
            @foreach ($schools as $school)
                <option value="{{ $school }}">{{ $school }}</option>
            @endforeach
        </select><br>

        <button type="submit">Register</button>
    </form>
</body>
</html>
