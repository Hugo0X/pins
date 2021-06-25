<?php

namespace App\Controller;

use App\Entity\Volunteer;
use App\Repository\VolunteerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use App\Entity\Pin;
use App\Repository\PinRepository;

/**
* @Route("/")
*/
class VolunteerController extends AbstractController
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }
    
    /**
     * @Route("/volunteer/{id}", name="app_volunteer_new", methods={"POST"})
     */
    public function addVolunteer(Request $request, Pin $pin, VolunteerRepository $volunteerRepository): Response
    {
        if($this->isCsrfTokenValid('pin_volunteer_new' . $pin->getId(), $request->request->get('csrf_token')) && intval($request->request->get('id')))
        { 
            $volunteer = new Volunteer;

            $volunteer->setUser($this->getUser());       
            $volunteer->setPin($pin);

            $volunteers = $volunteerRepository->findAll();

            if($volunteer->alreadyExist($volunteers, $this->getUser(), $pin)){
                $this->addFlash('info', 'You are already recorded!');
                return $this->redirectToRoute('app_home');
            }

            $this->em->persist($volunteer);
            $this->em->flush();

            $this->addFlash('success', 'Recording completed!');

        }

        return $this->redirectToRoute('app_pins_show', ['id' => $pin->getId()]);
    }

    /**
     * @Route("/volunteer/delete/{id}", name="app_volunteer_delete", methods={"DELETE"})
     */
    public function deleteVolunteer(Request $request, Pin $pin, EntityManagerInterface $em, VolunteerRepository $volunteerRepository): Response
    {
        if ($this->isCsrfTokenValid('volunteer_deletion_' . $pin->getId(), $request->request->get('csrf_token')) && intval($request->request->get('id')))
        {
            $volunteer = $volunteerRepository->findOneBy(['pin' => $pin, 'user' => $this->getUser()]);

            $em->remove($volunteer);
            $em->flush();

            $this->addFlash('success', 'Your participation has been successfully deleted!');
        }

        return $this->redirectToRoute('app_pins_show', ['id' => $pin->getId()]);
    }
}
