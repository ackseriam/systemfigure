<?php
   
namespace App\Imports;
   
use App\Correction_user;
use App\Guias;
use App\Correction;
use Maatwebsite\Excel\Concerns\ToModel;
   
class ImportUsers implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $correction=new Correction_user();

        if(!empty($row[0]))
         {
            $correction->respues0=$row[0]; 
         }else{
              $correction->respues0=NULL;
         }
         if(!empty($row[1]))
         {
            $correction->respues1=$row[1]; 
         }else{
              $correction->respues1=NULL;
         }

         if(!empty($row[2]))
         {
            $correction->respues2=$row[2]; 
         }else{
              $correction->respues2=NULL;
         }
         if(!empty($row[3]))
         {
            $correction->respues3=$row[3]; 
         }else{
              $correction->respues3=NULL;
         }

         if(!empty($row[4]))
         {
            $correction->respues4=$row[4]; 
         }else{
              $correction->respues4=NULL;
         }
         if(!empty($row[5]))
         {
            $correction->respues5=$row[5]; 
         }else{
              $correction->respues5=NULL;
         }

          if(!empty($row[6]))
         {
            $correction->respues6=$row[6]; 
         }else{
              $correction->respues6=NULL;
         }
         if(!empty($row[7]))
         {
            $correction->respues7=$row[7]; 
         }else{
              $correction->respues7=NULL;
         }

         if(!empty($row[8]))
         {
            $correction->respues8=$row[8]; 
         }else{
              $correction->respues8=NULL;
         }
         if(!empty($row[9]))
         {
            $correction->respues9=$row[9]; 
         }else{
              $correction->respues9=NULL;
         }

         if(!empty($row[10]))
         {
            $correction->respues10=$row[10]; 
         }else{
              $correction->respues10=NULL;
         }
         if(!empty($row[11]))
         {
            $correction->respues11=$row[11]; 
         }else{
              $correction->respues11=NULL;
         }
          if(!empty($row[12]))
         {
            $correction->respues12=$row[12]; 
         }else{
              $correction->respues12=NULL;
         }
         if(!empty($row[13]))
         {
            $correction->respues13=$row[13]; 
         }else{
              $correction->respues13=NULL;
         }

         if(!empty($row[14]))
         {
            $correction->respues14=$row[14]; 
         }else{
              $correction->respues14=NULL;
         }
         if(!empty($row[15]))
         {
            $correction->respues15=$row[15]; 
         }else{
              $correction->respues15=NULL;
         }

          if(!empty($row[16]))
         {
            $correction->respues16=$row[16]; 
         }else{
              $correction->respues16=NULL;
         }
         if(!empty($row[17]))
         {
            $correction->respues17=$row[17]; 
         }else{
              $correction->respues17=NULL;
         }

         if(!empty($row[18]))
         {
            $correction->respues18=$row[18]; 
         }else{
              $correction->respues18=NULL;
         }
         if(!empty($row[19]))
         {
            $correction->respues19=$row[19]; 
         }else{
              $correction->respues19=NULL;
         }

            
     
        $guias=Guias::all();
   $guia=$guias->last();
   $names_campo=$guia->names_campo;
   $name_campo=explode(',', $names_campo);
   $number_campos=count($name_campo);


   $correction_last= Correction::all();
   $corre=$correction_last->last();
   $id=$corre->id; 
  

   $correction->tipos_campos= $names_campo;
   $correction->id_corrections= $id;
    $correction->save();
   
           
           /*


         return new Correction_user([
            'respues0'     => $row[0],
            'respues1'    => $row[1],
            'respues2'    => $row[2],
            'respues3'    => $row[3],
            'respues4'    => $row[4], 
        ]);



        $guias=Guias::all();
   $guia=$guias->last();
   $names_campo=$guia->names_campo;
   $name_campo=explode(',', $names_campo);
   $number_campos=count($name_campo);


   $correction= Correction_user::all();
   $corre=$correction->last();
   $id=$corre->id;
   for ($i=0; $i <  $number_campos; $i++) 
        { 
            $i=0;
              if($i==0)
                {
                  $respues='respues'.$i;
                   $respuestas =[
                    'respues'.$i => $row[$i],
                    ];

                 $correction= Correction_user::create($respuestas);
                 
                 }elseif($i>0)
                 {

                    $y=0;
                   $id= $correction->id;
                
                  $correc = Correction_user::find($id);
                  $correc->id=$id; $respues='respues'.$i;
                  $correc->$respues=$row[$i];
                  $correc->tipos_campos=$names_campo;
                  $correc->id_corrections=$id;
                   $correc->save();
                
                }
            $i++;
        }
        */
    }
}