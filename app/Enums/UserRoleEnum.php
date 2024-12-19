<?php

namespace App\Enums;

enum UserRoleEnum:string
{
  case Admin = "admin";
  case Coach = "coach";
  case Client = "client";
}
