<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Service\Master;
use App\Service\Capital;
use App\Service\Dash;
use App\Service\Logger;

class MasterController extends AbstractController
{
    /**
     * @Route("/master", name="master")
     * @param Request $request

     * @return Response
     */
    public function index(Request $request): Response
    {
        $capital= new Capital();
        $dash= new Dash();
        $log= new Logger();
        $message=" ";
        $request=Request::createFromGlobals();
        if($request->isMethod("POST")){
            // var_dump($request->request);
            if($request->request->get("name")){
                // var_dump($request->request->get("message"));
                $message=$request->request->get("name");
                $letter=$request->request->get("letter");
                if($letter==='cap'){
                    $master=new Master($capital,$log);
                    $message=$master->transform($message);
                    $master->logger($message);

                }
                   elseif($letter==='dash'){
                    $master=new Master($dash,$log);
                    $message= $master->transform($message);
                    $master->logger($message);
                }
            }

        }
         return $this->render('master/index.html.twig', [
            'message' => $message,
        ]);
    }
}
