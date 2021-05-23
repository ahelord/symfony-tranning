<?php

namespace App\Controller;

use App\Repository\ConferenceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{

    private $conferenceRepository;
    public function __construct(ConferenceRepository $conferenceRepository)
    {
        $this->conferenceRepository=$conferenceRepository;
    }
    public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/ConferenceController.php',
        ]);
    }
      /**
     * @Route("conference", name="conference",methods={"POST"})
     */
    public function addConference(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(),true);
        $name = $data['name'];
        $description = $data['description'];
        $this->conferenceRepository->addConference($name,$description);
        return new JsonResponse(['status'=>'Conference created'],Response::HTTP_CREATED);

    }
          /**
     * @Route("conference/{id}", name="get_one_conference",methods={"GET"})
     */
    public function getConference($id): JsonResponse
    {
        $conference = $this->conferenceRepository->findOneBy(['id'=>$id]);
        $data =[
            'name'=>$conference->getName()
        ];
        return new JsonResponse($data,Response::HTTP_CREATED);

    }

    /**
     * @Route("conferences", name="get_all_conference",methods={"GET"})
     */
    public function getConferences(): JsonResponse
    {
        $conferences = $this->conferenceRepository->findAll();

        foreach($conferences as $conference){
            $data[]=[
                'name'=>$conference->getName()
            ];
        }
        return new JsonResponse($data,Response::HTTP_OK);


    }

    /**
     * @Route("conference/{id}", name="update_conference",methods={"PUT"})
     */
    public function putConference($id,Request $request): JsonResponse
    {
        $conference = $this->conferenceRepository->findOneBy(['id'=>$id]);
        $data = json_decode($request->getContent(),true);
        $conference->setName($data['name'])->setDescription($data['description']);
        $updatedConference = $this->conferenceRepository->updateConference($conference);
        $response = [
            'name'=>$updatedConference->getName(),
            'description'=>$updatedConference->getDescription()
        ];
        return new JsonResponse($response,Response::HTTP_OK);


    }

    /**
     * @Route("conference/{id}", name="delete_conference",methods={"DELETE"})
     */    
    public function deleteConference($id,Request $request): JsonResponse
    {
        $conference = $this->conferenceRepository->findOneBy(['id'=>$id]);
        $removeConference = $this->conferenceRepository->removeConference($conference);
        $response = [
            'name'=>$removeConference->getName(),
            'description'=>$removeConference->getDescription()
        ];
        return new JsonResponse($response,Response::HTTP_OK);


    }
}
