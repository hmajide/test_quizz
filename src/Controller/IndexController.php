<?php
/**
 * Created by PhpStorm.
 * User: HMAJIDE
 * Date: 10/03/2019
 * Time: 16:24
 */

namespace App\Controller;



use App\Repository\QuestionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends AbstractController
{
/**
 * @Route("/", name="home")
 */

public function index(Request $request)
{
    return $this->render('base.html.twig');
}

    /**
     * @return Response
     */
public function renderQuiz(QuestionRepository $questionRepository)
{
    $question = $questionRepository->findAll();
    return $this->render('index.html.twig', [

    ]);
}
    /**
     * @Route("/create/quiz", name="create")
     */
    public function createQuiz(Request $request)
    {
        return $this->render('create.html.twig');
    }

}