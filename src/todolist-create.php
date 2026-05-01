<?php
    require __DIR__ . '/../config/koneksi.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $user_id = 1;

        $title = trim($_POST['title'] ?? '');
        $description = trim($_POST['description'] ?? '');
        $deadline = trim($_POST['deadline'] ?? '');
        $priority = trim($_POST['priority'] ?? '');

        $query = "INSERT INTO todolists (user_id, title, description, deadline, priority) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $query);

        if (!$stmt) {
            die("Prepare failed: " . mysqli_error($conn));
        }

        mysqli_stmt_bind_param($stmt, "issss", $user_id, $title, $description, $deadline, $priority);

        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_close($stmt);
            header("Location: ../index.php?success=created");
            exit;
        }

        $error = mysqli_stmt_error($stmt) ?: mysqli_error($conn);
        mysqli_stmt_close($stmt);
        die("Error: " . $error);
    }
?>