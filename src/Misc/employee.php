<?php

if (!function_exists("auth_employee")) {

    /**
     * @param $user
     *
     * @return null
     */
    function auth_employee($user = null)
    {
        $user = $user ?: auth()->user();
        if (!$user) {
            return null;
        }

        return $user->employee;
    }

}
