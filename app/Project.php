<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'stages',
        'pending',
        'other',
        'about_source',
        'nominations',
        'project_ready',
        'project_name',
        'project_body',
        'project_social',
        'project_target',
        'project_logo',
        'project_presentations',
        'project_files_1',
        'project_video',
        'project_mts',
        'project_main_fio',
        'project_main_info',
        'project_main_phone',
        'project_main_years',
        'project_main_teams',
        'project_main_security',
        'project_main_social_links_1',
        'project_main_social_links_2',
        'project_main_social_links_3',
    ];
    public function project()
    {
        return $this->hasMany(Linkexpert::class);
    }
}
