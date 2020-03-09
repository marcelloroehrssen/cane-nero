<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/user", name="user")
 */
class UserController extends AbstractController
{
    /**
     * @Route(methods={"POST"})
     *
     * @return Response
     */
    public function create()
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    /**
     * @Route(methods={"GET"})
     *
     * @return Response
     */
    public function read()
    {
        sleep(1);
        $data = [
            'user' => [
                'isLogged' => 1, //rand(0,1),
                'avatar' => 'https://scontent-mxp1-1.xx.fbcdn.net/v/t1.0-9/29473117_10210762306004847_1611112176272015360_n.jpg?_nc_cat=109&_nc_sid=85a577&_nc_ohc=PmDw7-UUExoAX9N5Xqj&_nc_ht=scontent-mxp1-1.xx&oh=a946aae2de775c68ea0184ef86beba9c&oe=5E95CC5D',
                'username' => 'Marcello',
                'firstName' => 'Marcello',
                'lastName' => 'Roehrssen',
                'email' => 'marcello.roehrssen@gmail.com',
            ]
        ];
        return $this->json($data);
    }

    /**
     * @Route(methods={"PUT"})
     *
     * @return Response
     */
    public function update()
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    /**
     * @Route(methods={"DELETE"})
     *
     * @return Response
     */
    public function delete()
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
}
