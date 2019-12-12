<?php
  include('config.php');

  require('fpdf.php');
 


 $result1=mysqli_query($conn,"SELECT * FROM attendees WHERE id ");
 $row1=mysqli_fetch_array($result1);

 $result=mysqli_query($conn,"SELECT * FROM attendees,event WHERE attendees.event_id=event.id");
    
 $row=mysqli_fetch_array($result);




 class PDF extends FPDF{
  function Header(){
    $this->SetFont('Arial','B',15);
    //dummy cell to put logo
    //$this->Cell(12,0,'',0,0);
    //is equivalent to:
    $this->Cell(12);

    //put logo
    $this->Cell(100 ,0,'',0,1);
    $this->Cell(100,15,$_GET['evename'],0,1);
    $this->Cell(189 ,0,'',1,1);//1,1
    $this->Cell(100,10,"This is Your Ticket!",0,1);
    $this->SetFont('Arial','',12);
    $this->SetDrawColor(0,80,180);
    $this->SetFillColor(230,230,0);
    $this->Cell(100,10,"Please bring this ticket for admission to the event.",0,1);

    //dummy cell to give line spacing 
    //$this->Cell(0,5,'',0,1);
    //is equivalent to:
    $this->Ln(5);
    $this->SetFont('Arial','B',11);

    $this->SetFillColor(180,180,255);
    $this->SetDrawColor(50,50,100);
    
    $this->Cell(55,8,'Name',1,0,'',true);
    $this->Cell(55,8,$_GET['name'],1,1);
    $this->Cell(55,8,'Email',1,0,'',true);
    $this->Cell(55,8,$_GET['email'],1,1);
    $this->Cell(55,8,'Phone No.',1,0,'',true);
    $this->Cell(55,8,$_GET['phone'],1,1);
   
    }
   
 }
 //A4 width:219mm
 //default margin:10mm each side
 //writable horizontal:219-(10*2)=189mm
 $pdf=new PDF('P','mm','legal');//use new class
 
 //define new alias for total page numbers 
 $pdf->AliasNbPages('{pages}');
 $pdf->AddPage();

 $pdf->SetFont('Arial','',9);

 
     $pdf->Image("http://chart.apis.google.com/chart?cht=qr&chs=70x70&chld=L|0&chl=".$_GET['ticket_id']."",140,48,30,30,"png");
    
     $pdf->Cell(189,5,"Location:".$row['location'],0,1);
    // $pdf->Cell(20,5,$row['start_time'],0,0);
     $pdf->Cell(23,5,date("dS F", strtotime($row['start_time'])),0,0); 
     $pdf->Cell( 5,5,"To",0,0);
     $pdf->Cell(20,5,date("dS F Y", strtotime($row['end_time'])),0,1);
     

  $pdf->Output('event.pdf','D');
?>
