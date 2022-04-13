<?php


namespace App\Traits;


use Illuminate\Support\Facades\Auth;

Trait GuardTrait
{
    public function getGuard()
    {
        if (Auth::guard('seller')->id() > 0) {
            return "seller";
        } elseif (Auth::guard('web')->id() > 0) {
            return "web";
        } elseif (Auth::guard('admin')->id() > 0) {
            return "admin";
        } elseif (Auth::guard('super-admin')->id() > 0) {
            return "super-admin";
        }
    }

    //            dd(auth()->guard('seller')->getName());
    public function getName()
    {
        if (Auth::guard('seller')->id() > 0) {
            return Auth::guard('seller')->user()->name;

        } elseif (Auth::guard('web')->id() > 0) {
            return Auth::user()->name;
        } elseif (Auth::guard('admin')->id() > 0) {
            return Auth::guard('admin')->user()->name;
        } elseif (Auth::guard('super-admin')->id() > 0) {
            return  Auth::guard('super-admin')->user()->name;
        }

    }

    public function getGuardId()
    {
        if (Auth::guard('seller')->id() > 0) {
            return  Auth::guard('seller')->id();

        } elseif (Auth::guard('web')->id() > 0) {
            return  Auth::id();
        } elseif (Auth::guard('admin')->id() > 0) {
            return  Auth::guard('admin')->id();
        } elseif (Auth::guard('super-admin')->id() > 0) {
            return  Auth::guard('super-admin')->id();
        }

    }

}
