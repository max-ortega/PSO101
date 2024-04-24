<?php 
  require ("fpdf/fpdf.php");



  //customer and invoice details
  $info=[
    "customer"=>"",
    "address"=>",",
    "city"=>"",
    "invoice_no"=>"",
    "invoice_date"=>"",
    "total_amt"=>"",
  ];
  
  //Select Invoice Details From Database
  $sql="select * from invoice where SID='{$_GET["id"]}'";
  $con=mysqli_connect("localhost","root","","projectlang");
  $res=$con->query($sql);
  if($res->num_rows>0){
	  $row=$res->fetch_assoc();
	  
	


	  $info=[
		"customer"=>$row["CNAME"],
		"address"=>$row["CADDRESS"],
		"city"=>$row["CCITY"],
		"invoice_no"=>$row["INVOICE_NO"],
		"invoice_date"=>date("d-m-Y",strtotime($row["INVOICE_DATE"])),
		"total_amt"=>$row["GRAND_TOTAL"],
		
	  ];
  }
  
  //invoice Products
  $products_info=[];
  
  //Select Invoice Product Details From Database
  $sql="select * from invoice_products where SID='{$_GET["id"]}'";
  $res=$con->query($sql);
  if($res->num_rows>0){
	  while($row=$res->fetch_assoc()){
		   $products_info[]=[
			"name"=>$row["PNAME"],
			"price"=>$row["PRICE"],
			"qty"=>$row["QTY"],
			"total"=>$row["TOTAL"],
		   ];
	  }
  }
  
  class PDF extends FPDF
  {
    function Header(){
      
      //Display Company Info
    $this->SetFont('Arial','B',10);
    $this->Cell(0,10,"PAMANTASAN LUNGSOD NG MAYNILA",0,1,"C");
    $this->SetFont('Arial','B',10);
    $this->Cell(0,0,"(University of the City of Manila intramuros, Manila)",10,1,"C");
    $this->Cell(0,10,"(PROPERTY & SUPPLIES OFFICE)",10,1,"C");
    $this->Cell(0,5,"(SUPPLIES RECIEVE FOR STOCK)",10,1,"C");    
      
      $this->SetY(15);
      $this->SetX(-40);
    }
    
    function body($info,$products_info){
    
        //Display Invoice no
      $this->SetY(40);
      $this->SetX(-60);
      $this->Cell(50,7,"SRS No. : ".$info["invoice_no"]);
      
      //Display Invoice date
      $this->SetY(45);
      $this->SetX(-60);
      $this->Cell(50,7,"Date : ".$info["invoice_date"]);
      
    //Display Table headings
    $this->SetY(55);
    $this->SetX(10);
    $this->SetFont('Arial', 'B', 12);
    $this->Cell(25, 9, "Item No.");
    $this->Cell(35, 9, "Stock No.");
    $this->Cell(50, 9, "Item Description");
    $this->Cell(15, 9, "Unit");
    $this->Cell(20, 9, "Qty");
    $this->Cell(25, 9, "Unit Price");
    $this->Cell(19, 9, "Amount");



    $this->SetFont('Arial', '', 12);
    
    // Display table product rows

    $this->SetY(65);
    $this->SetX(10);
    foreach ($products_info as $row) {
        $this->Cell(25, 10, $row["name"], 0, 0);
        $this->Cell(35, 10, $row["price"], 0, 0, );
        $this->Cell(50, 10, $row["qty"], 0, 0, );
        $this->Cell(18, 10, $row["qty"], 0, 0, );
        $this->Cell(20, 10, $row["qty"], 0, 0, );
        $this->Cell(25, 10, $row["price"], 0, 0,);
        $this->Cell(0, 10, $row["price"], 0, 1,);
        
    }
    
    // Display table empty rows
    for ($i = 0; $i < 12 - count($products_info); $i++) {
        $this->Cell(80, 9, "", 0, 0);
        $this->Cell(40, 9, "", 0, 0, "R");
        $this->Cell(30, 9, "", 0, 0, "C");
        $this->Cell(40, 9, "", 0, 1, "R");
    }
    
    // Display table total row
    
    $this->SetX(40);
    $this->SetFont('Arial', '', 8);
    $this->Cell(0, 5, "Supplier No:", 0, 1, 'C');  
    $this->SetX(40);
    $this->Cell(0, 4, "PO No:", 0, 1, 'C');
    $this->SetX(40);
    $this->Cell(0, 5, "PR No:", 0, 1, 'C');
    $this->SetX(40);
    $this->Cell(0, 4, "BUR No:", 0, 1, 'C');
    $this->SetX(40);
    $this->Cell(0, 6, "Remarks:", 0, 1, 'C');
    $this->SetX(50);
    $this->Cell(0,9,$info["total_amt"],0,0,"C");
    }
    function Footer(){
      
      //set footer position
      $this->SetY(-90);
      $this->Ln(15);
      $this->SetFont('Arial','',12);
      $this->Cell(0,10,"Authorized Signature: ",0,1,"L");
      $this->Line($this->GetX() + 10, $this->GetY() + 5, $this->GetX() + 60, $this->GetY() + 5);

      $this->SetY(-90);
      $this->Ln(40);
      $this->SetFont('Arial','',12);
      $this->Cell(0,10,"Certified Correct : ",0,1,"L");
      $this->Line($this->GetX() + 10, $this->GetY() + 5, $this->GetX() + 60, $this->GetY() + 5);
  

      $this->SetY(-77);
      $this->SetX(70);
      $this->SetFont('Arial','',12);
      $this->Cell(0,10,"Checked by: ",0,1,"C");
    
  
      
      
      //Display Footer Text

      
    }
    
  }
  //Create A4 Page with Portrait 
  $pdf=new PDF("P","mm","A4");
  $pdf->AddPage();
  $pdf->body($info,$products_info);
  $pdf->Output();
?>