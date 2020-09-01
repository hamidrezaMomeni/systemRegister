<?php 

namespace Models;

class UsersTbl
{
    private function getConnection() {
        $pdo = new \PDO("mysql:host=localhost;dbname=khateroshan;charset=utf8", "root", "Khateroshan");
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

    public function insertUser(array $data) {
        $pdo = $this->getConnection();
        $query = "INSERT INTO `users`(`user_firstName`, `user_lastName`, `user_password`,
            `user_email`, `user_phoneNumber`) VALUES(:firstName, :lastName, :password, :email, :phoneNumber)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':firstName', $data['firstName']);
        $stmt->bindParam(':lastName', $data['lastName']);
        $stmt->bindParam(':password', $data['password']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':phoneNumber', $data['phoneNumber']);
        $stmt->execute();
        $_SESSION['userLogedIn'] = $data['email'];
        header("Location: /khateroshan/panel");
    }

    public function getUserById(int $id) {
        $pdo = $this->getConnection();
        $query = "SELECT * FROM `users` WHERE `user_id` = :id";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $user = $stmt->fetch();

        } else {
            // TODO: return the message like : user not fount or somthing else like that
            return FALSE;
        }
    }

    public function getUserByEmail(array $data) {
        $pdo = $this->getConnection();
        $query = "SELECT * FROM `users` WHERE `user_email` = :email and `user_password` = :password";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":email", $data['email']);
        $stmt->bindParam(":password", $data['password']);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $user = $stmt->fetch();
            $_SESSION['userLogedIn'] = $data['email'];
            header("Location: /khateroshan/panel");
        } else {
            // TODO: return the message like : user not fount or somthing else like that
            return FALSE;
        }
    }
}