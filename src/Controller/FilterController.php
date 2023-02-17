<?php

namespace App\Controller;

use Pimcore\Model\DataObject;
use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Pimcore\Model\DataObject\Electronics;
use Pimcore\Model\DataObject\Brand;

class FilterController extends FrontendController
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
       
        $value=strtolower($request->get("Category"));
        $cates=['mobile','laptop','smartwatches'];
        foreach($cates as $cat){
            if($value == $cat){
                $data = new DataObject\Electronics\Listing();
                foreach ($data as $key=> $item) {
                    if($item->getCategory()[0]!=NULL){
                        $Category=strtolower($item->getCategory()[0]->getCategoryName());
                        if($value==$Category)
                        {
                                          if ($value== 'mobile') {
                                               $arr= $item->getProductDetails()->getProductdetails();
                                             if ($arr!= NULL) {
                                                  $Output[] = [
                                                     'InTheBox' => $arr->getInTheBox(),
                                                     'Simtype' => $arr->getSimtype(),
                                                     ' Warranty' => $arr->getWarranty(),
                                                     'DisplaySize' => $arr->getDisplaySize(),
                                                  ];
                                             
                                                }
                                            }
                                          if ($value== 'laptop') {
                                          $arr= $item->getProductDetails()->getLaptopSpecifications();
                                        if ($arr!= NULL) {
                                             $Output[] = [
                                              'InTheBox' => $arr->getSalesPackage(),
                                              'LaptopType' => $arr->getLaptopType(),
                                              ' Warranty' => $arr->getWarranty(),
                                              'ProcessorBrand' => $arr->getProcessorBrand(),
                                                            'ProcessorName'=>$arr->getProcessorName(),
                                              'SSD' => $arr->getSSD(),
                                             ];
                                        
                                               }
                                            }
                                 if ($value== 'smartwatches') {
                                  $arr= $item->getProductDetails()->getSmartWatchSpecifications();
                                       if ($arr!= NULL) {
                                              $Output[] = [
                                                  'Sales package' => $arr->getSalesPackage(),
                                                  'StrapColor' => $arr->getStrapColor(),
                                                  'Size' => $arr->getSize(),
                                                  'IdealFor' => $arr->getIdealFor(),
                                                  'weight' => $arr->getweight(),
                                                  'Warranty' => $arr->getWarranty(),
                                     ];
                  
                                                       }
                                                   }
                            
                                          if($Output!=NULL){ 
                                      $result[]=[
                                          '              Category'=>$Category,
                                          'productName' => $item->getName(),
                                          'Model' => $item->getModel(),
                                          'ProductId' => $item->getProductId(),
                                          'Color' => $item->getColor(),
                                          'Manufacturer'=>$item->getManufacturer()->getName(),
                                          'Dealer'=>$item->getDealer()[0]->getDealerName(),
                                           'Data' => $Output,
                                      ];
                                       $Output = [];
                                                }              
                        }
                        
        
                    }
                    
                    
                }
                return $this->json(['success' => true, 'data' => $result]);
            }
            return  $this->json("Not A Category");   
                
        }
        
    }            
    
}
      
           
        
       
      
    
