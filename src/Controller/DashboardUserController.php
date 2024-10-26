<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserExtraInfoType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\UserProfileRepository;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class DashboardUserController extends AbstractController
{
    #[Route('/dashboard/users', name: 'app_dashboard_users')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function dashboardUsers(
        Request $request,
        UserRepository $userRepository,
        UserProfileRepository $userProfile
    ): Response {
        /** @var User $currentUser */
        $currentUser = $this->getUser();
        $currentLocation = $userProfile->findLocationsByUserId($currentUser->getId());
        $location = $currentLocation[0]->getLocation();

        $page = $request->query->getInt('page', 1);
        $limit = 10;
        $sortBy = $request->query->get('sort_by', 'u.email');
        $order = $request->query->get('order', 'ASC');
        $searchBy = $request->query->get('search_by', null);
        $searchValue = $request->query->get('search_value', null);

        $paginator = $userRepository->findUsersWithPaginationAndSearch(
            $location,
            $page,
            $limit,
            $sortBy,
            $order,
            $searchBy,
            $searchValue
        );
        $totalItems = count($paginator);
        $totalPages = ceil($totalItems / $limit);

        return $this->render('dashboard/users.html.twig', [
            'users' => $paginator->getQuery()->getResult(),
            'current_page' => $page,
            'total_pages' => $totalPages,
            'sort_by' => $sortBy,
            'order' => $order,
            'search_by' => $searchBy,
            'search_value' => $searchValue,
        ]);
    }

    #[Route('/dashboard/users/delete/{id}', name: 'app_dashboard_users_delete', methods: ['POST'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function deleteUser(int $id, UserRepository $userRepository, EntityManagerInterface $entityManager): Response
    {
        $user = $userRepository->find($id);

        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }

        $user->setActive('N');
        $entityManager->flush();

        $this->addFlash('success', 'User has been successfully deleted.');

        return $this->redirectToRoute('app_dashboard_users');
    }

    #[Route('/dashboard/user', name: 'app_dashboard_user')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function register(
        Request $request,
        UserPasswordHasherInterface $userPasswordHasher,
        Security $security,
        EntityManagerInterface $entityManager,
        UserProfileRepository $userProfile
    ): Response {
        $user = new User();
        $form = $this->createForm(UserExtraInfoType::class, $user);
        $form->handleRequest($request);

        /** @var User $currentUser */
        $currentUser = $this->getUser();

        $currentLocation = $userProfile->findLocationsByUserId($currentUser->getId());
        $currentDivisions = $userProfile->findByUserLocation($currentUser->getId());

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setActive($form->get('active')->getData() ?? 'Y');
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );
            $entityManager->persist($user);
            $entityManager->flush();

            $security->login($user, 'form_login', 'main');
            $this->addFlash('success', 'User has been successfully saved!');

            return $this->redirectToRoute('app_dashboard_users');
        }

        return $this->render('dashboard/user.html.twig', [
            'form' => $form,
            'location' => $currentLocation[0]->getLocation(),
            'division' => $currentDivisions,
            'isEdit' => false,
        ]);
    }

    #[Route('/dashboard/user/edit/{id}', name: 'app_dashboard_user_edit')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function editUser(
        int $id,
        Request $request,
        UserPasswordHasherInterface $userPasswordHasher,
        EntityManagerInterface $entityManager,
        UserProfileRepository $userProfile
    ): Response {
        /** @var User $currentUser */
        $currentUser = $this->getUser();

        $currentLocation = $userProfile->findLocationsByUserId($currentUser->getId());
        $currentDivisions = $userProfile->findByUserLocation($currentUser->getId());

        $user = $entityManager->getRepository(User::class)->find($id);

        if (!$user) {
            throw $this->createNotFoundException('User not found.');
        }

        $form = $this->createForm(UserExtraInfoType::class, $user, [
            'isEdit' => true,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $plainPassword = $form->get('plainPassword')->getData();

            if (!empty($plainPassword)) {
                $user->setPassword(
                    $userPasswordHasher->hashPassword(
                        $user,
                        $plainPassword
                    )
                );
            }

            $entityManager->flush();

            $this->addFlash('success', 'User updated successfully!');

            return $this->redirectToRoute('app_dashboard_users');
        }

        return $this->render('dashboard/user.html.twig', [
            'form' => $form,
            'location' => $currentLocation[0]->getLocation(),
            'division' => $currentDivisions,
            'isEdit' => true,
        ]);
    }
}
