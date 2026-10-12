<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function users_file_path(): string
{
    return dirname(__DIR__) . '/data/users.json';
}

function load_users(): array
{
    $path = users_file_path();
    if (!is_file($path)) {
        return [];
    }

    $json = file_get_contents($path);
    $users = json_decode($json, true);
    return is_array($users) ? $users : [];
}

function save_users(array $users): bool
{
    $path = users_file_path();
    $dir = dirname($path);
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }

    return file_put_contents($path, json_encode($users, JSON_PRETTY_PRINT)) !== false;
}

function find_user_by_email(string $email): ?array
{
    $email = mb_strtolower(trim($email));
    foreach (load_users() as $user) {
        if (mb_strtolower($user['email']) === $email) {
            return $user;
        }
    }
    return null;
}

function current_user(): ?array
{
    return $_SESSION['user'] ?? null;
}

function require_guest(): void
{
    if (current_user()) {
        header('Location: index.php');
        exit;
    }
}
