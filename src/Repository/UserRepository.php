<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

/**
 * @extends ServiceEntityRepository<User>
 */
class UserRepository extends ServiceEntityRepository implements PasswordUpgraderInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    /**
     * Used to upgrade (rehash) the user's password automatically over time.
     */
    public function upgradePassword(PasswordAuthenticatedUserInterface $user, string $newHashedPassword): void
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', $user::class));
        }

        $user->setPassword($newHashedPassword);
        $this->getEntityManager()->persist($user);
        $this->getEntityManager()->flush();
    }

    /**
     * Create a query builder to perform a LEFT JOIN between User and UserProfile.
     *
     * @return QueryBuilder
     */
    public function createUserWithProfileQueryBuilder(string $sortBy = 'u.email', string $order = 'ASC'): QueryBuilder
    {
        return $this->createQueryBuilder('u')
            ->leftJoin('u.userProfile', 'p')
            ->addSelect('p')
            ->leftJoin('p.division', 'd')
            ->addSelect('d')
            ->where('u.active = :active')
            ->setParameter('active', 'Y')
            ->orderBy($sortBy, $order);
    }

    /**
     * Retrieve users with pagination and sorting.
     *
     * @param int $page
     * @param int $limit
     * @param string $sortBy
     * @param string $order
     * @param string $searchBy
     * @param string $searchValue
     * @return Paginator
     */
    public function findUsersWithPaginationAndSearch(int $page, int $limit, string $sortBy = 'u.email', string $order = 'ASC', ?string $searchBy = null, ?string $searchValue = null): Paginator
    {
        $queryBuilder = $this->createUserWithProfileQueryBuilder($sortBy, $order)
            ->setFirstResult(($page - 1) * $limit)
            ->setMaxResults($limit);

        if ($searchBy && $searchValue) {
            $queryBuilder->andWhere($queryBuilder->expr()->like($searchBy, ':searchValue'))
                ->setParameter('searchValue', '%' . $searchValue . '%');
        }

        return new Paginator($queryBuilder);
    }
}
