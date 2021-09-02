<?php
            class Imageopretions {
              
                        public function __construct() 
                        {
                            

                        }
                        public function watermark($image){
                                          print_r($image);
                                
                                    $font= "img/KaiseiOpti-bold.ttf";
                                    $img=imagecreatefromjpeg($image);
                                    $color= imagecolorallocate( $img,255, 0, 0);      // add color in image
                                    $time=  date("H:i:s");
                                    $date="Date : ".date("j M , Y ")."TIime : ".$time."";
                                    $file=  "img/output/".rand(111111111,9999999999).".jpeg";
                                    imagettftext( $img,10,0,700,800,$color,$font,$date); // add text to image with ()
                                    imagejpeg(   $img, $file);     
                                    imagedestroy( $img);
                               
                    
                      
                  }  public function pdfgen()
                        {           require('fpdf/fpdf.php');
                                    $pdf = new FPDF('P', 'mm', 'A4');
                                          foreach(glob('img/output/*.jpeg', GLOB_NOSORT) as $image)   
                                          {   
                                                $pdf->AddPage();
                                                $pdf->Image($image,10,10,300);
                                          }    
                                                $pdf->Output("img/".rand(111111111,9999999999).".pdf","F");
                                                
                        }
                  }

                        if(isset($_POST['upload']))
                       

                        {           if($_FILES['img']['type'][0]!="image/jpeg" && $_FILES['img']['type'][0]!="image/jpg" && $_FILES['img']['type'][0]!="image/png"){
                               echo "Please select only image type";
                        }
                        else
                        { 
                                    $watermark= new Imageopretions();
                                    $watermark->watermark($_FILES['img']['tmp_name']);  
                        }
                                       
                        }    









     
     
             
  

?>