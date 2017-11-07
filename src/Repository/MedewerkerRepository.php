<?php

namespace App\Repository;
use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;
use Doctrine\ORM\EntityRepository;

class MedewerkerRepository extends EntityRepository implements UserLoaderInterface{
	public function loadUserByUsername($username){
		return $this->createQueryBuilder('u')
			->where('u.email = :email')
			->setParameter('email', $username)
			->getQuery()
			->getOneOrNulResult();
	}
}