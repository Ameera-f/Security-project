<?php
session_start();

// ✅ Only allow logged-in users
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <style>
        body {
            font-family: Arial;
            display: flex;
            height: 100vh;
            align-items: center;
            justify-content: center;
            background-color: #f0f2f5;
            margin: 0;
        }
        .container {
            background: white;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
        }
        h2 {
            margin-bottom: 10px;
        }
        p {
            margin-bottom: 20px;
        }
        button {
            padding: 10px;
            width: 100%;
            background: #f44336;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #d32f2f;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>
        Hello user, <?php echo htmlspecialchars($_SESSION['username']); ?>!
    </h2>

    <p>
        Your Role: <?php echo htmlspecialchars($_SESSION['role']); ?>
    </p>

    <form method="POST" action="logout.php">
        <button type="submit">Logout</button>
    </form>
</div>

</body>
</html>
