
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WebsiteController extends AbstractController
{
    #[Route('/fete-du-soleil', name: 'fete_du_soleil')]
    public function showFeteDuSoleil(): Response
    {
        return $this->render('fete_du_soleil/index.html.twig');
    }

    #[Route('/sunfest', name: 'sunfest')]
    public function showSunfest(): Response
    {
        return $this->render('sunfest/index.html.twig');
    }
}