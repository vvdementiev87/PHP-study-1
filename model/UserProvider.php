<?php

require_once 'User.php';

class UserProvider
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function registerUser(User $user, string $plainPassword): bool
    {
        $statement = $this->pdo->prepare(
            'INSERT INTO users (name, username, password) VALUES (:name, :username, :password)'
        );

        return $statement->execute([
            'name' => $user->getName(),
            'username' => $user->getUsername(),
            'password' => password_hash($plainPassword, PASSWORD_DEFAULT)
        ]);
    }

    public function getByUsernameAndPassword(string $username, string $password): ?User
    {
        $statement = $this->pdo->prepare(
            'SELECT * FROM users WHERE username = :username LIMIT 1'
        );
        $statement->execute([
            'username' => $username
        ]);
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        if (password_verify($password, $result['password'] ?? null)) {
            $user = new User($username);
            $user->setName($result['name']);
            $user->setUserId($result['id']);            
            return $user;
        }

        return null;

    }
}