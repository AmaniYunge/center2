<?php

class Cv extends \Eloquent {
    protected $table = 'Cv';
	protected $guarded = array("id");

    public function cv(){
        return $this->belongsTo("BoardMember","board_member_id",'id');
    }

}