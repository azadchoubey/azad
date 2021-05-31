<?php
defined('BASEPATH') OR exit('No direct script access allowed');








class Pdfexample extends CI_Controller{ 
  

   
  
  
  
  
    function __construct()
    { parent::__construct(); } function index() {
    $this->load->library('tcpdf');
    $this->load->helper('form');
    $this->load->library('form_validation');
    if ($this->form_validation->run()){
         
    }
        else{$name=$this->input->post('name');
            $email= $this->input->post('email');
            $address= $this->input->post('address');
          $phone=   $this->input->post('phone');
             $pdf = new tcpdf('P', 'mm', 'A4', true, 'UTF-8', false);
             $pdf->SetTitle('Pdf Example');
             $pdf->SetHeaderMargin(30);
             $pdf->SetTopMargin(20);
             $pdf->setFooterMargin(20);
             $pdf->SetAutoPageBreak(true);
             $pdf->SetAuthor('Author');
             $pdf->SetDisplayMode('real', 'default');

             $pdf->AddPage();

           
            $html= '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
            <html>
            <head>
            <link rel="stylesheet" type="text/css" href="style.css"/>
            </head>
            <body>
            <img style="position:absolute;top:6.03in;left:7.04in;width:0.19in;height:1.24in" src=""C:\Users\IT\Downloads\SodaPDF-converted-STTI 2018 Nov. Sharma-MembershipCard (1)_63f90da7-c864-49ef-9a01-6cb9c3e587d5\OutDocument\ri_1.png"" />
            <img style="position:absolute;top:5.90in;left:7.29in;width:0.15in;height:1.27in" src=""C:\Users\IT\Downloads\SodaPDF-converted-STTI 2018 Nov. Sharma-MembershipCard (1)_63f90da7-c864-49ef-9a01-6cb9c3e587d5\OutDocument\t3.png"" />
            <img style="position:absolute;top:7.99in;left:7.13in;width:0.15in;height:1.48in" src=""C:\Users\IT\Downloads\SodaPDF-converted-STTI 2018 Nov. Sharma-MembershipCard (1)_63f90da7-c864-49ef-9a01-6cb9c3e587d5\OutDocument\t1.png"" />
            <img style="position:absolute;top:7.66in;left:7.31in;width:0.13in;height:1.81in" src=""C:\Users\IT\Downloads\SodaPDF-converted-STTI 2018 Nov. Sharma-MembershipCard (1)_63f90da7-c864-49ef-9a01-6cb9c3e587d5\OutDocument\t5.png"" />
            <img style="position:absolute;top:2.15in;left:5.07in;width:2.48in;height:3.72in" src="vi_1.png" />
            <img style="position:absolute;top:5.86in;left:5.07in;width:2.48in;height:3.72in" src="vi_2.png" />
            <img style="position:absolute;top:2.96in;left:5.11in;width:0.45in;height:2.09in" src="ri_2.png" />
            <img style="position:absolute;top:2.89in;left:5.62in;width:0.13in;height:2.21in" src="t2.png" />
            <img style="position:absolute;top:2.76in;left:5.78in;width:0.13in;height:2.48in" src="t10.png" />
            <img style="position:absolute;top:3.40in;left:5.94in;width:0.13in;height:1.19in" src="t4.png" />
            <img style="position:absolute;top:2.41in;left:6.10in;width:0.13in;height:3.16in" src="t0.png" />
            <img style="position:absolute;top:2.49in;left:6.38in;width:0.39in;height:3.04in" src="ri_3.png" />
            <img style="position:absolute;top:3.62in;left:6.86in;width:0.23in;height:0.73in" src="t11.png" />
            <img style="position:absolute;top:2.63in;left:7.09in;width:0.11in;height:2.73in" src="t12.png" />
            <img style="position:absolute;top:6.15in;left:5.11in;width:0.68in;height:3.14in" src="ri_4.png" />
            <img style="position:absolute;top:7.15in;left:5.85in;width:0.15in;height:1.11in" src="t8.png" />
            <img style="position:absolute;top:6.99in;left:6.06in;width:0.23in;height:1.41in" src="t9.png" />
            <img style="position:absolute;top:7.08in;left:6.31in;width:0.15in;height:1.25in" src="t7.png" />
            <img style="position:absolute;top:6.90in;left:6.48in;width:0.13in;height:1.60in" src="t6.png" />
            <img style="position:absolute;top:0.54in;left:0.54in;width:6.35in;height:1.40in" src="vi_3.png" />
            <div style="position:absolute;top:0.84in;left:0.70in;width:5.66in;line-height:0.22in;"><span style="font-style:normal;font-weight:bold;font-size:12pt;font-family:Helvetica;color:#000000">1.  Print the membership card PDF document. Go to the File drop</span><span style="font-style:normal;font-weight:bold;font-size:12pt;font-family:Helvetica;color:#000000"> </span><br/></SPAN></div>
            <div style="position:absolute;top:1.11in;left:0.70in;width:2.52in;line-height:0.22in;"><span style="font-style:normal;font-weight:bold;font-size:12pt;font-family:Helvetica;color:#000000">down menu and select Print.</span><span style="font-style:normal;font-weight:bold;font-size:12pt;font-family:Helvetica;color:#000000"> </span><br/></SPAN></div>
            <div style="position:absolute;top:1.38in;left:0.70in;width:4.70in;line-height:0.22in;"><span style="font-style:normal;font-weight:bold;font-size:12pt;font-family:Helvetica;color:#000000">2.  Cut out your membership card along the solid line.</span><span style="font-style:normal;font-weight:bold;font-size:12pt;font-family:Helvetica;color:#000000"> </span><br/></SPAN></div>
            <div style="position:absolute;top:1.66in;left:0.70in;width:5.15in;line-height:0.22in;"><span style="font-style:normal;font-weight:bold;font-size:12pt;font-family:Helvetica;color:#000000">3.  Fold your membership card in half along the center line.</span><span style="font-style:normal;font-weight:bold;font-size:12pt;font-family:Helvetica;color:#000000"> </span><br/></SPAN></div>
            </body>
            </html>
            ';
             $pdf->writeHTML($html, true, false, true, false, '');
             $pdf->Output('pdfexample.pdf', 'I');
         }
   
    }
    }