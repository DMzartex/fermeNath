<?php

namespace App\Controller;

use App\Entity\Customer;
use App\Repository\CustomerRepository;
use Couchbase\User;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Config\Doctrine\Orm\EntityManagerConfig;
use function Symfony\Component\String\s;

class UserController extends AbstractController {

    /*
     * @var CustomerRepository
     */
    private $customerRepository;

    /*
     * @Var ObjectManager
     */
    private $em;

    public function __construct(CustomerRepository $customerRepository, ObjectManager $em)
    {
        $this->customerRepository = $customerRepository;
        $this->em = $em;
    }

    #[Route('/user',name: 'user.index')]
    public function index():Response{

        $customer = $this->customerRepository->findAll();
        dump($customer);

        return $this->render('user/index.html.twig',[
            'current_menu' => 'user'
        ]);
    }


}