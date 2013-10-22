<?php

class PaginationsController extends BaseController {

    protected $totalItems = 29;
    protected $totalPages;
    protected $perPage = 10;
    protected $currentPage;

    public function __construct()
    {
        $this->totalPages = $this->getTotalPages();
    }

    public function prevNext($page = 1)
    {
        $this->currentPage = $page;

        $data['title'] = 'Prev Next';
        $data['pages'] = $this->handlePages(); 

        return View::make('prev-next', $data);
    }

    protected function handlePages()
    {
        $data['current'] = $this->currentPage;
        $data['totalItems'] = $this->totalItems;
        $data['total'] = $this->totalPages;

        if ($this->totalPages == 1) {

        } elseif($this->currentPage < 2) {
            $data['next'] = 2;
        } elseif($this->currentPage >= $this->totalPages) {
            $data['prev'] = $this->totalPages - 1;
        } else {
            $data['prev'] = $this->currentPage - 1;
            $data['next'] = $this->currentPage + 1;
        }
        

        return $data;
    }

    protected function getTotalPages()
    {
        return ceil($this->totalItems / $this->perPage);
    }

}