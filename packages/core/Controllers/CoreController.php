<?php 

namespace Core\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Core\Repositories\CompanyRepository;
use Core\Repositories\ProductRepository;
use Core\Repositories\ClientRepository;


 
class CoreController extends Controller
{
 
    protected $companyInfo;


    public function __construct( CompanyRepository $companyRepository) {

      $this->companyRepository = $companyRepository;
      $this->companyInfo = $this->companyRepository->first($columns = ['*']);

    }
    
    /**
    * Landing page
    */
    public function index() {
        return view('core::EJCTemplate.pages.home', array(
                'companyInfo' => $this->companyInfo
                )
        );
    }
    
   
}
