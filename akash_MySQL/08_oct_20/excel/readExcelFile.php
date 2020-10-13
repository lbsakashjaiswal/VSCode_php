<?php 
   require_once "Classes/PHPExcel.php";
   
   $path = "excelFile.xlsx";
   
   $reader = PHPExcel_IOFactory::createReaderForFile($path);
   $excel_obj = $reader->load($path);
   
   $worksheet =$excel_obj->getSheet('0');

   $lastRow = $worksheet->getHighestRow();
   $colomncount = $worksheet->getHighestDataColumn();
  
   $colomncount_number= PHPExcel_Cell::columnIndexFromString($colomncount);
   
   echo "<table class='table-bordered mt-4 ml-4'>";
   for($row=1;$row<=$lastRow;$row++){
        echo "<tr>";
        for($col=0;$col<$colomncount_number;$col++){
            echo "<td>";
            echo $worksheet->getCell(PHPExcel_Cell::stringFromColumnIndex($col).$row)->getValue();
            echo "</td>";
        }
        echo "</tr>";
    }	
    echo "</table>";
?>
