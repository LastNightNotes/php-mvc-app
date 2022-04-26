<?php



namespace app\models;

use ramit\phpmvc\Application;
use ramit\phpmvc\Model;

/**
 * @package app\models
 */
class LoginForm extends Model
{

    public string $email = '';
    public string $password = '';


    public function rules(): array
    {
        return [
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'password' => [self::RULE_REQUIRED]
        ];
    }

    public function labels(): array
    {
        return [
            'email' => "Your email",
            "password" => "Password"
        ];
    }

    public function login(): bool
    {
        $user = User::findOne(['email' => $this->email]);
        if (!$user) {
            $this->addError('email', 'User does not exist with this email adress');
            return false;
        }

        if (!password_verify($this->password, $user->password)) {
            $this->addError('password', 'Password is incorrect');
            return false;
        }
        return Application::$app->login($user);
    }
}
