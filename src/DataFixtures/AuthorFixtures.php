<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Nelmio\Alice\Loader\NativeLoader;

class AuthorFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $loader = new NativeLoader();
        $objectSet = $loader->loadFile('fixtures/authors.yml')->getObjects();
        foreach($objectSet as $object) {
            $manager->persist($object);
        }

        $manager->flush();
    }
}
