<!DOCTYPE html>
<html>

<head>
    <title>Help Request</title>
</head>

<body>
    <h1>Help Request</h1>
    <p><strong>Name:</strong> {{ $data['name'] ?? 'N/A' }}</p>
    <p><strong>Email:</strong> {{ $data['email'] ?? 'N/A' }}</p>
    <p><strong>Phone:</strong> {{ $data['phone'] ?? 'N/A' }}</p>
    <p><strong>Message:</strong> {{ $data['message'] ?? 'N/A' }}</p>
</body>

</html>
