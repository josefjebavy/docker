<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette;


final class TestPresenter extends Nette\Application\UI\Presenter
{
    public function renderDefault()
    {
        $this->template->url = "default";
    }

    public function renderRedirect()
    {
        $this->redirect('Test:show');
    }

    public function renderShow()
    {
        $this->template->url = "show";
    }
}
