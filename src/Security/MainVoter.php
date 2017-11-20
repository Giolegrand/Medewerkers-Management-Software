<?php
namespace App\Security;

use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter;
use Symfony\Component\Security\Core\Role\RoleHierarchyInterface;

class MainVoter extends RoleHierarchyVoter {
	protected $roleHierarchy;
	
	public function __construct(RoleHierarchyInterface $roleHierarchy)
    {  
        $this->roleHierarchy = $roleHierarchy;
    }


    public function vote(TokenInterface $token, $subject, array $attributes){
    	$reachableRoles = $this->roleHierarchy->getReachableRoles($token->getRoles());
    	foreach($reachableRoles as $role){
    		if(preg_match("/\-(.+)/", $role, $r)){
    			foreach ($attributes as $attribute) {
    				if($r[1] === $attribute)
						return parent::ACCESS_DENIED;
    			}
			}
    	}
    	return parent::ACCESS_GRANTED;
    }
}