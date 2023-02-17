<?php

namespace App\Controller;

use Pimcore\Model\DataObject;
use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Pimcore\Model\DataObject\Electronics;
use Pimcore\Model\DataObject\Brand;

class ApiController extends FrontendController
{  
     


    /**
     * @param Request $request
     * @return Response
     */

    /**
     * @Route("/testing", name="testing",methods={"GET"})
     */
    public function TestAction(Request $request): Response
    {
        $value=$request->get("Category");
        return $this->json(['success' => true, 'data' => $value]);
    }

    /**
     * @Route("/mobile", name="mobile",methods={"GET"})
     */    
    public function ApiAction(Request $request): Response
    {
        $blogs = new DataObject\Electronics\Listing();
        $blogs->setOrderKey('price');
        $blogs->setOrder('asc');
        $blogs->setObjectTypes([Electronics::OBJECT_TYPE_VARIANT,Electronics::OBJECT_TYPE_OBJECT]);
        $laptop = [];
        foreach ($blogs as $key => $data) {
            if ($data->getCategory()[0]->getCategoryName()== 'Mobile') {
                $mobile= $data->getProductDetails()->getProductdetails();
                if ($mobile!= null) {
                    $smallOutput[] = [
                        'InTheBox' => $mobile->getInTheBox(),
                        'Simtype' => $mobile->getSimtype(),
                        'Warranty' => $mobile->getWarranty(),
                        'DisplaySize' => $mobile->getDisplaySize(),
                    ];
                }

                $output[] = [
                    'Category'=>$data->getCategory()[0]->getCategoryName(),          
                    'productName' => $data->getName(),
                    'Model' => $data->getModel(),
                    'ProductId' => $data->getProductId(),
                    'Color' => $data->getColor(),
                    'Manufacturer'=>$data->getManufacturer()->getName(),
                    'Dealer'=>$data->getDealer()[0]->getDealerName(),
                    'Data' => $smallOutput,
                ];
                $smallOutput = [];
            
             
        }
    }
        return $this->json(['success' => true, 'data' => $output]);
    }
    /**
     * @Route("/laptop", name="laptop", methods={"GET"})
     */
    public function laptopAction(Request $request): Response
    {
        $blogs = new DataObject\Electronics\Listing();
        $blogs->setOrderKey('Name');
        $blogs->setOrder('asc');
        $blogs->setObjectTypes([Electronics::OBJECT_TYPE_VARIANT,Electronics::OBJECT_TYPE_OBJECT]);
        foreach ($blogs as $key => $data) {
            if ($data->getCategory()[0]->getCategoryName() == 'Laptop') {
                $laptop = $data->getProductDetails()->getLaptopSpecifications();
                if ($laptop != null) {
                    $smallOutput[] = [
                        'InTheBox' => $laptop->getSalesPackage(),
                        'LaptopType' => $laptop->getLaptopType(),
                        ' Warranty' => $laptop->getWarranty(),
                        'ProcessorBrand' => $laptop->getProcessorBrand(),
                        'ProcessorName'=>$laptop->getProcessorName(),
                        'SSD' => $laptop->getSSD(),
                    ];
                }

                $output[] = [
                    'Category'=>$data->getCategory()[0]->getCategoryName(),          
                    'productName' => $data->getName(),
                    'Model' => $data->getModel(),
                    'ProductId' => $data->getProductId(),
                    'Color' => $data->getColor(),
                    'Manufacturer'=>$data->getManufacturer()->getName(),
                    'Dealer'=>$data->getDealer()[0]->getDealerName(),
                    'Data' => $smallOutput,
                ];
                $smallOutput = [];
            
            }
        }
        return $this->json(['success' => true, 'data' => $output]);
    }
    /**
     * @Route("/sm", name="sm", methods={"GET"})
     */
    public function smAction(Request $request): Response
    { 
        $blogs = new DataObject\Electronics\Listing();
        $blogs->setOrderKey('Name');
        $blogs->setOrder('asc');
        $blogs->setObjectTypes([Electronics::OBJECT_TYPE_VARIANT,Electronics::OBJECT_TYPE_OBJECT]);
        foreach ($blogs as $key => $data) {
            
        
           if ($data->getCategory()[0]->getCategoryName()== 'SmartWatches') {
        $SmartWatch = $data
            ->getProductDetails()
            ->getSmartWatchSpecifications();

        if ($SmartWatch != null) {
            $smallOutput[] = [
                'Sales package' => $SmartWatch->getSalesPackage(),
                'StrapColor' => $SmartWatch->getStrapColor(),
                'Size' => $SmartWatch->getSize(),
                'IdealFor' => $SmartWatch->getIdealFor(),
                ' weight' => $SmartWatch->getweight(),
                'Warranty' => $SmartWatch->getWarranty(),
            ];
        
        $output[] = [

            'Category'=>$data->getCategory()[0]->getCategoryName(),          
            'productName' => $data->getName(),
            'Model' => $data->getModel(),
            'ProductId' => $data->getProductId(),
            'Color' => $data->getColor(),
            'Manufacturer'=>$data->getManufacturer()->getName(),
            'Dealer'=>$data->getDealer()[0]->getDealerName(),
            'Data' => $smallOutput,

        ];
        $smallOutput = [];
        
    }
}
}    
    return $this->json(['success' => true, 'data' => $output]);
   }

 }
