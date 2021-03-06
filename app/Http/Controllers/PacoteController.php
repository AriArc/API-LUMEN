<?php
    namespace App\Http\Controllers;
    use App\Models\Pacote;
    use App\Services\PacoteService;
    use Illuminate\Http\Request;
    
    class PacoteController extends Controller{
        /**
         * Create a new controller instance.
         * @return void
         */        

        private $pacoteService;

        public function __construct(PacoteService $pacoteService){
            $this->pacoteService = $pacoteService;
        }

        public function buscarTodosPacotes(){
            return $this->pacoteService->buscarTodosPacotes();
        }

        public function buscarPacote($id){
            return $this->pacoteService->buscarPacote($id);
        }

        public function criarPacote(Request $request){
            return $this->pacoteService->criarPacote($request);
        }
    }