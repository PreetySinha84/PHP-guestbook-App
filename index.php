<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Guestbook</title>
    <style>
        body { font-family: Arial; background: #f5f5f5; padding: 20px; }
        form { margin-bottom: 20px; }
        input, textarea { padding: 10px; margin: 5px 0; width: 100%; }
        button { padding: 10px 15px; background: #4CAF50; color: white; border: none; }
        .message { background: #fff; padding: 10px; margin-top: 10px; border-left: 5px solid #4CAF50; }
    </style>
</head>
<body>
    <h2>Guestbook</h2>

    <form method="post" action="">
        <input type="text" name="name" placeholder="Your name" required><br>
        <textarea name="message" placeholder="Your message" required></textarea><br>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $conn->real_escape_string($_POST["name"]);
        $message = $conn->real_escape_string($_POST["message"]);

        $sql = "INSERT INTO messages (name, message) VALUES ('$name', '$message')";
        if ($conn->query($sql) === TRUE) {
            echo "<p style='color: green;'>Message posted!</p>";
        } else {
            echo "<p style='color: red;'>Error: " . $conn->error . "</p>";
        }
    }

    $sql = "SELECT * FROM messages ORDER BY created_at DESC";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        echo "<div class='message'><strong>" . htmlspecialchars($row["name"]) . "</strong><br>" .
             htmlspecialchars($row["message"]) . "<br><small>" . $row["created_at"] . "</small></div>";
    }

    $conn->close();
    ?>
</body>
</html>