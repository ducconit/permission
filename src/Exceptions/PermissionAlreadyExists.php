<?php

namespace Mung9thang12\Permission\Exceptions;

use InvalidArgumentException;

class PermissionAlreadyExists extends InvalidArgumentException
{
    public static function create(string $permissionName, string $guardName)
    {
        return new static("A `{$permissionName}` permission already exists for guard `{$guardName}`.");
    }
}
