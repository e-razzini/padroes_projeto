<?php 
use App\Entity\Report;
use App\Repository\ReportRepository;
use Symfony\Component\HttpFoundation\jsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class BootstrapController
{

    public function __construct(
        private  readonly ReportRepository $reportRepository,
        private  readonly Report $report,
    ){
    }

    /**
     * @Route("/", name="home")
     */
    #[Route('/', name: 'home', methods: ['GET'])]
    public function index(Request $request): Response
    {
        return new jsonResponse([
            'message' => 'Bem-vindo ao Lgoin!',
            'status' => 'success'
        ]);
    }
    /**
     * @Route("/dashbord", name="dashbord")
     */
    #[Route('/dashbord', name: 'dashbord', methods: ['GET'])]
    public function dashboard(Request $request): Response
    {
        return new jsonResponse([
            'message' => 'Bem-vindo ao Dashbord!',
            'status' => 'success'
        ]);
    }    
}


?>