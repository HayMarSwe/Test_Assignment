<?php

namespace App\Services;

use App\Services\Utils\FileService;
use App\Models\MasterData;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;

class MasterDataService
{

    
    public function __construct()
    {
        $this->MasterData = new MasterData();
    }

    /**
     * getdatalist
     *
     * @return App\Models\MasterData || null
     */
    public function getAll()
    {
        $list = MasterData::paginate(20);
        
        return $list;
       
    }

     // get masterdata detail //
     public function getDetail($id)
     {
        
         $info = MasterData::find($id);
         return $info;
     }

    

    
}
