<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Divisions;
use App\Entity\TemporaryRatingCentralId;
use App\Security\EmailVerifier;
use App\Form\RegistrationFormType;
use Symfony\Component\Mime\Address;
use App\Repository\DivisionsRepository;
use App\Repository\TemporaryRatingCentralIdRepository;
use App\Repository\UserProfileRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;

class RegistrationController extends AbstractController
{
    private EmailVerifier $emailVerifier;

    public function __construct(EmailVerifier $emailVerifier)
    {
        $this->emailVerifier = $emailVerifier;
    }

    #[Route('/register', name: 'app_register')]
    public function register(
        Request $request,
        UserPasswordHasherInterface $userPasswordHasher,
        Security $security,
        TemporaryRatingCentralIdRepository $temporaryRatingCentralIdRepository,
        EntityManagerInterface $entityManager,
        DivisionsRepository $divisionRepository
    ): Response {
        $user = new User();
        $temporaryId = new TemporaryRatingCentralId();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $userProfile = $user->getUserProfile();
            $userProfile->setRegistered('N');
            $location = $userProfile->getLocation();
            $temporaryRatingsCentralId = $temporaryRatingCentralIdRepository->findMaxTemporaryIdByLocation(
                $location->getId()
            );
            $userProfile->setRatingCentralId(($temporaryRatingsCentralId * -1) - 1);

            $temporaryId->setTemporaryId($temporaryRatingsCentralId + 1);
            $temporaryId->setLocation($location);

            if ($userProfile && $userProfile->getDivision() === null) {
                $divisionRepository = $entityManager->getRepository(Divisions::class);
                $defaultDivision = $divisionRepository->find(1);
                if ($defaultDivision) {
                    $userProfile->setDivision($defaultDivision);
                }
            }
            // encode the plain password
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );

            $entityManager->persist($user);
            $entityManager->persist($temporaryId);
            $entityManager->flush();

            try {
                // generate a signed url and email it to the user
                $this->emailVerifier->sendEmailConfirmation(
                    'app_verify_email',
                    $user,
                    (new TemplatedEmail())
                        ->from(new Address('test@localhost', 'Jose Corredor'))
                        ->to($user->getEmail())
                        ->subject('Please Confirm your Email')
                        ->htmlTemplate('registration/confirmation_email.html.twig')
                );
            } catch (\Exception $e) {
                // Log or handle the exception as needed
                // $this->addFlash('danger', 'There was an error sending the email.');
                $this->addFlash('danger', 'There was an error sending the email: ' . $e->getMessage());
            }

            // do anything else you need here, like send an email
            $security->login($user, 'form_login', 'main');
            return $this->redirectToRoute('app_dashboard');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form,
        ]);
    }

    #[Route('/verify/email', name: 'app_verify_email')]
    public function verifyUserEmail(Request $request, TranslatorInterface $translator): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        // validate email confirmation link, sets User::isVerified=true and persists
        try {
            $this->emailVerifier->handleEmailConfirmation($request, $this->getUser());
        } catch (VerifyEmailExceptionInterface $exception) {
            $this->addFlash('verify_email_error', $translator->trans($exception->getReason(), [], 'VerifyEmailBundle'));

            return $this->redirectToRoute('app_register');
        }

        // @TODO Change the redirect on success and handle or remove the flash message in your templates
        $this->addFlash('success', 'Your email address has been verified.');

        return $this->redirectToRoute('app_register');
    }
}
