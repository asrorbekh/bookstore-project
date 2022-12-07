<?php

class Admin extends Controller
{
    public function index(): void
    {
        $data = [
            'page_title' => 'Admin'
        ];
        $this->view('admin/index', $data);
    }

    public function users(): void
    {
        $data = [
            'page_title' => 'Users'
        ];
        $this->view('admin/users', $data);
    }

    public function products(): void
    {
        $this->data = [
            'page_title' => 'A'
        ];
        $this->view('prudtcs/index', $this->data);
    }
}