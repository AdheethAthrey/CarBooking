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
 * OfferController
 */
class OfferController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $offers = $this->offerRepository->findAll();
        $this->view->assign('offers', $offers);
    }

    /**
     * action show
     * 
     * @param \HofUniversity\Notifications\Domain\Model\Offer $offer
     * @return void
     */
    public function showAction(\HofUniversity\Notifications\Domain\Model\Offer $offer)
    {
        $this->view->assign('offer', $offer);
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
     * @param \HofUniversity\Notifications\Domain\Model\Offer $newOffer
     * @return void
     */
    public function createAction(\HofUniversity\Notifications\Domain\Model\Offer $newOffer)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->offerRepository->add($newOffer);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \HofUniversity\Notifications\Domain\Model\Offer $offer
     * @ignorevalidation $offer
     * @return void
     */
    public function editAction(\HofUniversity\Notifications\Domain\Model\Offer $offer)
    {
        $this->view->assign('offer', $offer);
    }

    /**
     * action update
     * 
     * @param \HofUniversity\Notifications\Domain\Model\Offer $offer
     * @return void
     */
    public function updateAction(\HofUniversity\Notifications\Domain\Model\Offer $offer)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->offerRepository->update($offer);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \HofUniversity\Notifications\Domain\Model\Offer $offer
     * @return void
     */
    public function deleteAction(\HofUniversity\Notifications\Domain\Model\Offer $offer)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->offerRepository->remove($offer);
        $this->redirect('list');
    }
}
