<?php namespace App;

use Zizaco\Entrust\EntrustRole;
use App\TenantCompany;

class Role extends EntrustRole
{
    protected $fillable = ['name','display_name','description','tenant_comapny_id'];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function tenantCompany()
    {
        return $this->belongsTo(TenantCompany::class, 'tenant_company_id');
    }
}