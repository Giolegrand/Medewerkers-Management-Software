<?php
namespace App\Security;

use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\VoterInterface;

class MainVoter extends VoterInterface {
	
	public function __construct($roleHierarchy)
    {  
        $this->roleHierarchy = $roleHierarchy;
    }

    protected function hasRole($token, $targetRole){
    	$reachableRoles = $this->roleHierarchy->getReachableRoles($token->getRoles());
    	foreach($reachableRoles as $role){
    		if(preg_match("/\-(.+)/", $role, $r)){
				if($r[1] === $attribute)
					return false;
			}
    	}
    	return true;
    }

	protected function supports($attribute, $subject){
		return true;
	}

	protected function voteOnAttribute($attribute, $subject, TokenInterface $token){
		$user = $token->getUser();

		foreach($user->getRoles() as $role){
			if(preg_match("/\-(.+)/", $role, $r)){
				if($r[1] === $attribute)
					return false;
			}
		}
		return true;
	}
}