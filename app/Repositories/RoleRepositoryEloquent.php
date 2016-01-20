<?php

namespace App\Repositories;

use App\Traits\GetRoleModelNameTrait;
use App\Traits\GetRoleRelationNameTrait;

/**
 * This file is part of Entrust GUI,
 * A Laravel 5 GUI for Entrust.
 *
 * @license MIT
 * @package Acoustep\EntrustGui
 */
class RoleRepositoryEloquent extends ManyToManyRepositoryEloquent implements RoleRepository
{

    use GetRoleModelNameTrait, GetRoleRelationNameTrait;
}
