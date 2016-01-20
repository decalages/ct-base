<?php
namespace App;

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
    protected $fillable = ['name', 'display_name', 'description'];

         /**
     * Save roles inputted from multiselect
     * @param $inputRoles
     */

    public function permissions()
    {
        return $this->belongsToMany('App\Permission');
    }


    public function saveRoles($inputRoles)
    {
        if(! empty($inputRoles)) {
            $this->permissions()->sync($inputRoles);
        } else {
            $this->permissions()->detach();
        }
    }
}