<?php

namespace EvenementBundle\Repository;


/**
 * evenementRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class evenementRepository extends \Doctrine\ORM\EntityRepository
{

    // méthode qui permet de récupéré les evenements de l'utilisateur
    // on fait une jointure entre la table evenements et user
    // avec l'utilisateur qui a le bon identifiant passé en parametre

    public function FindUser($id)
    {
        $qb = $this->createQueryBuilder('e')
                    ->Join('e.user', 'c')
                    ->where('c.id = :id')
                    ->setParameter('id', $id)
                    ->addSelect('c');


        return $qb
            ->getQuery()
            ->getResult()
            ;
    }




}
