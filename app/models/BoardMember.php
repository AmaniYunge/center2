<?php

class BoardMember extends \Eloquent {

    protected $table = 'Board_member';
    protected $guarded = array("id");

    public function cv(){
        return $this->belongsTo("Cv",'id',"board_member_id");
    }
}