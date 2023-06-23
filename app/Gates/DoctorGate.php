<?php
namespace app\Gates;

class DoctorGate
{
    public function Check_User($user)
    {
        if($user->email==="Admin@gmail.com")
        return true;

        return false;
    }
}