<?php

namespace App\DataFixtures;

use App\Entity\Users;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{

    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
        
    }
    public function load(ObjectManager $manager){

        $user = new Users();
        $password = $this->encoder->encodePassword($user, "root");

        $user->setUsername("root");
        $user->setPassword($password);
        $manager->persist($user);

        $manager->flush();
    }
}
