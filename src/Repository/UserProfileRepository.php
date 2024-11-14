<?php

namespace App\Repository;

use PDO;
use App\Entity\User;
use App\Entity\UserProfile;
use Doctrine\DBAL\Connection;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @extends ServiceEntityRepository<UserProfile>
 */
class UserProfileRepository extends ServiceEntityRepository
{
    private $connection;

    public function __construct(ManagerRegistry $registry, Connection $connection)
    {
        parent::__construct($registry, UserProfile::class);
        $this->connection = $connection;
    }

    public function findLocationsByUserId(int $userId)
    {
        return $this->createQueryBuilder('up')
            ->select('up', 'l')
            ->join('up.location', 'l')
            ->where('up.user = :userId')
            ->setParameter('userId', $userId)
            ->getQuery()
            ->getResult();
    }

    public function findByUserLocation(int $userId)
    {
        // Get the PDO connection directly
        $conn = $this->getEntityManager()->getConnection()->getNativeConnection();

        // Define the SQL query
        $sql = 'SELECT d.* 
                FROM divisions d 
                INNER JOIN user_profile up 
                ON d.location_id = up.location_id 
                WHERE up.user_id = :userId';

        // Prepare and execute the query using PDO
        $stmt = $conn->prepare($sql);
        $stmt->execute(['userId' => $userId]);

        // Fetch the results using PDO's fetchAll method
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findUsersByIds(array $userIds)
    {
        return $this->createQueryBuilder('u')
            ->where('u.id IN (:userIds)')
            ->setParameter('userIds', $userIds)
            ->getQuery()
            ->getResult();
    }
}
