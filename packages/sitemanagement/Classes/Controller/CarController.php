<?php
namespace HofUniversity\Sitemanagement\Controller;


/***
 *
 * This file is part of the "Site Management" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 Deepak Balaram <deepak.balaram7@gmail.com>, Hof University
 *
 ***/
/**
 * CarController
 */
class CarController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * carRepository
     * 
     * @var \HofUniversity\Sitemanagement\Domain\Repository\CarRepository
     * @inject
     */
    protected $carRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $cars = $this->carRepository->findAll();
        $this->view->assign('cars', $cars);
    }

    /**
     * action show
     * 
     * @param \HofUniversity\Sitemanagement\Domain\Model\Car $car
     * @return void
     */
    public function showAction(\HofUniversity\Sitemanagement\Domain\Model\Car $car)
    {
        $this->view->assign('car', $car);
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
     * @param \HofUniversity\Sitemanagement\Domain\Model\Car $newCar
     * @return void
     */
    public function createAction(\HofUniversity\Sitemanagement\Domain\Model\Car $newCar)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->carRepository->add($newCar);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \HofUniversity\Sitemanagement\Domain\Model\Car $car
     * @ignorevalidation $car
     * @return void
     */
    public function editAction(\HofUniversity\Sitemanagement\Domain\Model\Car $car)
    {
        $this->view->assign('car', $car);
    }

    /**
     * action update
     * 
     * @param \HofUniversity\Sitemanagement\Domain\Model\Car $car
     * @return void
     */
    public function updateAction(\HofUniversity\Sitemanagement\Domain\Model\Car $car)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->carRepository->update($car);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \HofUniversity\Sitemanagement\Domain\Model\Car $car
     * @return void
     */
    public function deleteAction(\HofUniversity\Sitemanagement\Domain\Model\Car $car)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->carRepository->remove($car);
        $this->redirect('list');
    }
}
