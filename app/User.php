<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
    use Notifiable;
    use EntrustUserTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }

    public function app()
    {
        return $this->hasOne('App\App');
    }

    public function brands()
    {
        return $this->hasMany('App\Brand');
    }

    public function types()
    {
        return $this->hasMany('App\Type');
    }

    public function tenantCompany()
    {
        return $this->belongsTo('App\TenantCompany','tenant_company_id');
    }

    public function enterpriseCompanies()
    {
        return $this->belongsToMany('App\EnterpriseCompany');
    }

    public function dashboards()
    {
        return $this->belongsToMany('App\Dashboard');
    }

    public static function GeneratePassword()
    {
        return rand(1000, 100000);
    }
}
