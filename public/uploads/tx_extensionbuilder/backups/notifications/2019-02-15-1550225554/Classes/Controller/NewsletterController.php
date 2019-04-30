<?php
namespace HofUniversity\Notifications\Controller;


/***
 *
 * This file is part of the "Notifications App" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 Deepak Balaram <deepak.balaram7@gmail.com>, Hof University
 *
 ***/
/**
 * NewsletterController
 */
class NewsletterController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $newsletters = $this->newsletterRepository->findAll();
        $this->view->assign('newsletters', $newsletters);
    }

    /**
     * action show
     * 
     * @param \HofUniversity\Notifications\Domain\Model\Newsletter $newsletter
     * @return void
     */
    public function showAction(\HofUniversity\Notifications\Domain\Model\Newsletter $newsletter)
    {
        $this->view->assign('newsletter', $newsletter);
    }

    /**
     * action new
     * 
     * @return void
     */
    public function newAction()
    {
    }

    /**
     * action create
     * 
     * @param \HofUniversity\Notifications\Domain\Model\Newsletter $newNewsletter
     * @return void
     */
    public function createAction(\HofUniversity\Notifications\Domain\Model\Newsletter $newNewsletter)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->newsletterRepository->add($newNewsletter);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \HofUniversity\Notifications\Domain\Model\Newsletter $newsletter
     * @ignorevalidation $newsletter
     * @return void
     */
    public function editAction(\HofUniversity\Notifications\Domain\Model\Newsletter $newsletter)
    {
        $this->view->assign('newsletter', $newsletter);
    }

    /**
     * action update
     * 
     * @param \HofUniversity\Notifications\Domain\Model\Newsletter $newsletter
     * @return void
     */
    public function updateAction(\HofUniversity\Notifications\Domain\Model\Newsletter $newsletter)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->newsletterRepository->update($newsletter);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \HofUniversity\Notifications\Domain\Model\Newsletter $newsletter
     * @return void
     */
    public function deleteAction(\HofUniversity\Notifications\Domain\Model\Newsletter $newsletter)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->newsletterRepository->remove($newsletter);
        $this->redirect('list');
    }
}
