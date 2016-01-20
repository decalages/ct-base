<?php

namespace App\Repositories;

use App\Traits\GetPermissionModelNameTrait;
use App\Traits\GetPermissionUserRelationNameTrait;

/**
 * This file is part of Entrust GUI,
 * A Laravel 5 GUI for Entrust.
 *
 * @license MIT
 * @package Acoustep\EntrustGui
 */
class PermissionRepositoryEloquent extends ManyToManyRepositoryEloquent implements PermissionRepository
{

    use GetPermissionModelNameTrait, GetPermissionUserRelationNameTrait;
}
