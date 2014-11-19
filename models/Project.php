<?php
class Project extends Eloquent {
	public $timestamps = false;
	protected $fillable = array('Client', 'Project', 'MinPeople', 'MaxPeople');
}
?>