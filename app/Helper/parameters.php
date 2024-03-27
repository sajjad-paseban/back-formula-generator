<?php

use App\Models\Arseh;
use Illuminate\Support\Facades\DB;
class Parameters{

    private $melk_id;

    public function __construct($melk_id){
        $this->melk_id = $melk_id;
    }


    public function sql_query($sql){
        $result = (array) DB::selectOne($sql);
        return $result;
    }

    public function area($ifb): int{
        $arseh = Arseh::where('melk_id', $this->melk_id)
        ->where('IFB', $ifb)->first();
        
        $area = $arseh->MasZamin;

        return $area;
    }

    public function numberOfFloors(): int{
        return 5;
    }

    public function test(): int{
        return 85;
    }

    public function karbari(){
        return 0;
    }
}
