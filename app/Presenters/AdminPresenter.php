<?php declare(strict_types=1);

namespace App\Presenters;

use Nette;

final class AdminPresenter extends Nette\Application\UI\Presenter
{

	public function startup()
	{
		parent::startup();

		if ($this->getUser()->isLoggedIn() === false && $this->getAction() !== 'signIn') {
			$this->flashMessage('Tato sekce není přístupná bez přihlášení', 'danger');
			$this->redirect('signIn');
		}
	}

	// http://localhost/admin/sign-in
	public function actionSignIn()
	{
		$this->setLayout('admin.signIn');
	}

	// http://localhost/admin/dashboard
	public function actionDashboard()
	{
		$this->setLayout('admin');
	}

	public function actionSignOut()
	{
		$this->getUser()->logout();
		$this->flashMessage('Odhlášení proběhlo úspěšně.', 'success');
		$this->redirect('signIn');
	}

	protected function createComponentSignInForm(): Nette\Application\UI\Form
	{
		$form = new Nette\Application\UI\Form();
		$form->addText('username', 'Username');
		$form->addPassword('password', 'Password');
		$form->addSubmit('send', 'Sign In');
		$form->onSuccess[] = [$this, 'signInFormSuccess'];

		return $form;
	}

	public function signInFormSuccess(Nette\Application\UI\Form $form)
	{
		$values = $form->getValues();
		try {
			$this->getUser()->login($values->username, $values->password);
		} catch (Nette\Security\AuthenticationException $e) {
			$this->flashMessage($e->getMessage(), 'danger');
			$this->redirect('signIn');
		}

		$this->redirect('dashboard');
	}
}
