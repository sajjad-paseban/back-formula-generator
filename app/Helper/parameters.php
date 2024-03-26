<?php

class Parameters{

    public function area($ifb, $tb): int{
        return 32 * $ifb + $tb;
    }

    public function numberOfFloors(): int{
        return 5;
    }

    public function test(): int{
        return 85;
    }
}
