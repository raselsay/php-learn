<?php
interface MustPhoneVerified{
	public function hasVerifiedEmail();
	public function sendVeified();
}

interface MustPhoneVerified2{
	public function hasVerifiedEmail();
	public function sendVeified();
}

trait MustVerified {
	public function hasVerifiedEmail(){
		return true;
	}
	public function sendVeified(){
		return 'Send';
	}	
} 

class User implements MustPhoneVerified{
	use MustVerified;
}
class vr {
	public $user;
	public function __construct(User $user){
		$this->user = $user;
	}

	public function test()
	{
		if ($this->user instanceof MustPhoneVerified && $this->user->hasVerifiedEmail()) {
			return true;
		}else{
			return false;
		}
	}
}

$user = new User;
$vr = new vr($user);
// var_dump($user->hasVerifiedEmail());
var_dump($vr->test());

