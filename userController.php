// controllers/UserController.php
class UserController {
    public function index() {
        // Ambil data dari model
        $users = User::getAll();
        require 'views/index.php';
    }

    public function detail($id) {
        // Ambil detail pengguna dari model berdasarkan ID
        $user = User::getById($id);
        require 'views/detail.php';
    }

    // Tambahkan fungsi edit() dan delete() sesuai kebutuhan
}
