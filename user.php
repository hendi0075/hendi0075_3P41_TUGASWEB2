// models/User.php
class User {
    public static function getAll() {
        // Query database untuk mendapatkan semua data pengguna
        // Contoh: return $database->query("SELECT * FROM users")->fetchAll();
    }

    public static function getById($id) {
        // Query database untuk mendapatkan data pengguna berdasarkan ID
        // Contoh: return $database->query("SELECT * FROM users WHERE id = ?", [$id])->fetch();
    }
}
