<?php

namespace App\Repository;

use App\Entity\Conference;
use DateTime;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;

/**
 * @method Conference|null find($id, $lockMode = null, $lockVersion = null)
 * @method Conference|null findOneBy(array $criteria, array $orderBy = null)
 * @method Conference[]    findAll()
 * @method Conference[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConferenceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry, EntityManagerInterface $manager)
    {
        parent::__construct($registry, Conference::class);
        $this->manager=$manager;
    }

    // /**
    //  * @return Conference[] Returns an array of Conference objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Conference
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;

        [6:30 PM, 5/22/2021] Jhoan Patiño: ->getSQL()
[6:30 PM, 5/22/2021] Jhoan Patiño: dump($variable)
    }
    */

    public function addConference($name,$description): void
    {
        $conference = new Conference();
        $createdAt = new DateTime();
        $conference->setName($name)->setDescription($description)->setCreatedAt($createdAt);
        $this->manager->persist($conference);
        dump($conference);
        //no se ha guardado
        $this->manager->flush();
        
    }

    
    public function updateConference($conference): Conference
    {
        $this->manager->persist($conference);
        $this->manager->flush();
        return $conference;
        
    }
    public function removeConference($conference): Conference
    {
        $this->manager->remove($conference);
        $this->manager->flush();
        return $conference;
        
    }
}
