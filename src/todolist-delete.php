<?php
    require __DIR__ . '/../config/koneksi.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $user_id = 1;
        $todo_id = trim($_POST['id'] ?? '');

        if (empty($todo_id) || !is_numeric($todo_id)) {
            die(json_encode(['success' => false, 'message' => 'ID tidak valid']));
        }

        // Verifikasi bahwa todo ini milik user
        $verify_query = "SELECT id FROM todolists WHERE id = ? AND user_id = ?";
        $verify_stmt = mysqli_prepare($conn, $verify_query);
        
        if (!$verify_stmt) {
            die(json_encode(['success' => false, 'message' => 'Prepare failed']));
        }

        mysqli_stmt_bind_param($verify_stmt, "ii", $todo_id, $user_id);
        mysqli_stmt_execute($verify_stmt);
        $verify_result = mysqli_stmt_get_result($verify_stmt);

        if (mysqli_num_rows($verify_result) === 0) {
            mysqli_stmt_close($verify_stmt);
            die(json_encode(['success' => false, 'message' => 'Todo tidak ditemukan']));
        }

        mysqli_stmt_close($verify_stmt);

        // Delete todo
        $delete_query = "DELETE FROM todolists WHERE id = ? AND user_id = ?";
        $delete_stmt = mysqli_prepare($conn, $delete_query);

        if (!$delete_stmt) {
            die(json_encode(['success' => false, 'message' => 'Prepare failed']));
        }

        mysqli_stmt_bind_param($delete_stmt, "ii", $todo_id, $user_id);

        if (mysqli_stmt_execute($delete_stmt)) {
            mysqli_stmt_close($delete_stmt);
            echo json_encode(['success' => true, 'message' => 'Todo berhasil dihapus']);
        } else {
            $error = mysqli_stmt_error($delete_stmt) ?: mysqli_error($conn);
            mysqli_stmt_close($delete_stmt);
            die(json_encode(['success' => false, 'message' => 'Error: ' . $error]));
        }
    } else {
        die(json_encode(['success' => false, 'message' => 'Method tidak diizinkan']));
    }
?>