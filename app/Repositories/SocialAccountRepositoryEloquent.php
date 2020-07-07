<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\SocialAccountRepository;
use App\Entities\SocialAccount;
use App\Validators\SocialAccountValidator;

/**
 * Class SocialAccountRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class SocialAccountRepositoryEloquent extends BaseRepository implements SocialAccountRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return SocialAccount::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
