<table>
    <thead>
      <tr> 
           <?php $names_campos=array_filter($names_campo); ?>
          @foreach($names_campos as $campos)
          <th>{{$campos}}</th>
          @endforeach
        
      </tr>
    </thead>
    <tbody>
        
    @foreach($guias as $correction)
     @for($y=0; $y< $number_guia; $y++)
    

     <?php  $respues='respues'.$y;?>
     @if(!empty($correction))  
       
        <tr>
          @if($correction->$respues!=null)
            <td>{{ $correction->$respues }}</td>
            @else
             <td> </td>
           @endif
          
        </tr>
        
        @endif
        @endfor
    @endforeach
    </tbody>
</table>
