<?php
class komputer{
   var $warna;
   var $ram;
   var $harddisk;
   var $prosesor;
 
   function memutar_musik()
   {
     return "komputer memutar musik";
   }
   function memutar_video()
   {
     return "komputer memutar video";
   }
   function edit_foto()
   {
     return "Edit Foto";
   }
   function edit_video()
   {
     return "Edit Video";
   }
}
$komputer_a = new komputer();
echo $komputer_a->warna = "Merah";
echo $komputer_a->ram = "4 GB";
echo $komputer_a->harddisk = "2 TB";
echo $komputer_a->prosesor = "Core i7";
?>