<?php

namespace App\Helpers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Applyjob;

class Helper
{ 

    public static function jobSkillSet()
    {
        $skills = [
            [
                'id' => 1,
                'name' => 'PHP',
            ],
            [
                'id' => 2,
                'name' => 'Laravel',
            ],
            [
                'id' => 3,
                'name' => 'JavaScript',
            ],
            [
                'id' => 4,
                'name' => 'React',
            ],
            [
                'id' => 5,
                'name' => 'Vue.js',
            ]
            ];
        return ['skills' => $skills];
    }
    public static function jobSkillSetById($id){
       
        $skills = self::jobSkillSet()['skills'];
        foreach($skills as $skill){
        
            if($skill['id'] == $id){
                
                return ['skill' => $skill];
            }
        }
        return ['skill' => NULL];
    }

    public static function isUserJobApplied($jobId, $userId)
    { 
        $isJobExists = Applyjob::where('job_id', $jobId)->where('user_id', $userId)->first();
        if ($isJobExists) {
            return true;
        } else {
            return false;
        }
    }
}