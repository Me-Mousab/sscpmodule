<?php
require_once 'ConditionBase.php';

class OS extends ConditionBase{
	public function doesSatisfy(CPEnvironment $env, $args){
		$agent = $env->getAgent();
		
		if(stristr($agent, $args) != false){
			return true;
		}else{
			return false;
		}
	}
}