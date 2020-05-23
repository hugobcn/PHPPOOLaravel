public static function newAdmin(array $attributes)
{
    $admin = new User($attributes);
    $admin->role = 'admin'

    return $admin;
}

public function withErrors(errors)
    {
        $this->errors = $errors;
 
        return $this;
    }