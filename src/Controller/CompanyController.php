<?php

declare(strict_types=1);

require_once('../Model/CompaniesManager.php');


class CompanyController
{
    public function render()
    {
        $companies_provider = new CompaniesManager();

        require('../View/Companies_pages.php');
    }
}
